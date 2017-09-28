<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use AppBundle\Form\SearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Product controller.
 *
 * @Route("search")
 */
class SearchController extends Controller
{
    /**
     * Lists all product entities.
     *
     * @Route("/", name="search_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:Product')->findAll();
        $searchform = $this->createForm(SearchType::class, null);
        return $this->render('search/index.html.twig', array(
            'products' => $products,
            'searchform' => $searchform->createView()
        ));
    }

    
}
