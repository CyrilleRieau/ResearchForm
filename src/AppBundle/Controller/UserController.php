<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use AppBundle\Form\UserType;
use AppBundle\Entity\User;

class UserController extends Controller
{
    /**
    * @Rest\View()
     * @Rest\Get("/api/users")
     */
    public function getUsersAction(Request $request)
    {
        $users = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:User')
                ->findAll();
        return $users;
    }
    /**
    * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Get("/api/users/{user_id}")
     */
     public function getUserAction(Request $request)
     {
         $user = $this->get('doctrine.orm.entity_manager')
                 ->getRepository('AppBundle:User')
                 ->find($request->get('user_id'));
         /* @var $user User */

         if (empty($user)) {
            return new JsonResponse(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }

         return $user;
    }

    /**
    * @Rest\View(statusCode=Response::HTTP_CREATED)
    * @Rest\Post("/api/users")
    */
    public function postUsersAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($user);
            $em->flush();
            return $user;
        } else {
            return $form;
        }
    }
      /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete("/api/users/{id}")
     */
     public function removeUserAction(Request $request)
     {
         $em = $this->get('doctrine.orm.entity_manager');
         $user = $em->getRepository('AppBundle:User')
                     ->find($request->get('id'));
         /* @var $user User */
         if ($user) {
             $em->remove($user);
             $em->flush();
         }
     }
     /**
     * @Rest\View()
     * @Rest\Put("/api/users/{id}")
     */
    public function updateUserAction(Request $request)
    {
        $user = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:User')
                ->find($request->get('id')); // L'identifiant en tant que paramètre n'est plus nécessaire
        /* @var $user User */

        if (empty($user)) {
            return new JsonResponse(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(UserType::class, $user);

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            // l'entité vient de la base, donc le merge n'est pas nécessaire.
            // il est utilisé juste par soucis de clarté
            $em->merge($user);
            $em->flush();
            return $user;
        } else {
            return $form;
        }
    }
     /**
     * @Rest\View()
     * @Rest\Patch("/api/users/{id}")
     */
    public function patchUserAction(Request $request)
    {
        return $this->updateUser($request, false);
    }

    private function updateUser(Request $request, $clearMissing)
    {
        $user = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:User')
                ->find($request->get('id')); // L'identifiant en tant que paramètre n'est plus nécessaire
        /* @var $user User */

        if (empty($user)) {
            return \FOS\RestBundle\View\View::create(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(UserType::class, $user);

        $form->submit($request->request->all(), $clearMissing);

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($user);
            $em->flush();
            return $user;
        } else {
            return $form;
        }
    }
     /**
     * @Rest\View(serializerGroups={"place"})
     * @Rest\Get("/api/users/{id}/suggestions")
     */
    public function getUserSuggestionsAction(Request $request)
    {
        $user = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:User')
                ->find($request->get('id'));
        /* @var $user User */

        if (empty($user)) {
            return $this->userNotFound();
        }

        $suggestions = [];

        $places = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Place')
                ->findAll();

        foreach ($places as $place) {
            if ($user->preferencesMatch($place->getThemes())) {
                $suggestions[] = $place;
            }
        }

        return $suggestions;
    }
    private function userNotFound()
    {
        return \FOS\RestBundle\View\View::create(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
    }
}