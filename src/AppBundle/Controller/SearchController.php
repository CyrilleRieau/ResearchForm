<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use AppBundle\Form\SearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;


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
     
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:Product')->findAll();
        $searchform = $this->createForm(SearchType::class, null);
  
    $ref = $request->request->get('searchform')['ref'];
    $name = $request->request->get('searchform')['name'];
    $note = $request->request->get('searchform')['note'];
    $price = $request->request->get('searchform')['price'];
    $repository = $this->getDoctrine()->getRepository(Product::class);
    $query = $repository->createQueryBuilder('p');
    
    if($price > 0) {
        $query->where('p.price > :price')->setParameter('price', $price);    
        }

    if (!empty($name)){
    $query->where('p.name like %:name%')->setParameter('name', $name);    
        }
    $query= $query->orderBy('p.price p.name', 'ASC')->getQuery();    
    
    $products = $query->getResult();
    
    return $this->render('search/index.html.twig', array(
        'products' => $products,
        'searchform' => $searchform->createView()
    ));
}
}
