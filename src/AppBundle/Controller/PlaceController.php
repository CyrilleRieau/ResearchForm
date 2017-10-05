<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use AppBundle\Form\PlaceType;
use AppBundle\Entity\Place;

class PlaceController extends Controller
{
     /**
     * @Rest\View()
     * @Rest\Get("/places")
     */
     public function getPlacesAction(Request $request)
     {
         $places = $this->get('doctrine.orm.entity_manager')
                 ->getRepository('AppBundle:Place')
                 ->findAll();
         /* @var $places Place[] */
 
         // Gestion de la réponse
         return $places;
     }

    /**
    * @Rest\View() 
     * @Rest\Get("/places/{id}")
     */
    
     public function getPlaceAction(Request $request)
     {
         $place = $this->get('doctrine.orm.entity_manager')
                 ->getRepository('AppBundle:Place')
                 ->find($request->get('id'));
         /* @var $place Place */
         if (empty($place)) {
            return new JsonResponse(['message' => 'Place not found'], Response::HTTP_NOT_FOUND);
        }
         return $place;
     }
     /**
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/places")
     */
    public function postPlacesAction(Request $request)
    {
        $place = new Place();
        $form = $this->createForm(PlaceType::class, $place);

        $form->submit($request->request->all()); // Validation des données

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($place);
            $em->flush();
            return $place;
        } else {
            return $form;
        }
    }
    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete("/places/{id}")
     */
     public function removePlaceAction(Request $request)
     {
         $em = $this->get('doctrine.orm.entity_manager');
         $place = $em->getRepository('AppBundle:Place')
                     ->find($request->get('id'));
         /* @var $place Place */
 if ($place){
         $em->remove($place);
         $em->flush();
     }}
}