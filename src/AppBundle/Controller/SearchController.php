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
  
    $name = $request->request->get('searchform')['name'];
    $note = $request->request->get('searchform')['note'];
    $price = $request->request->get('searchform')['price'];
    $repository = $this->getDoctrine()->getRepository(Product::class);
    $query = $repository->createQueryBuilder('p');
    
    if($price > 0) {
        $query->where('p.price > :price')->setParameter('price', $price);    
    }
    if($note > 0) {
        $query->where('p.note > :note')->setParameter('note', $note);    
    }
    if (!empty($name)){
    $query->orWhere('p.name like :name OR p.ref like :name')->setParameter('name', '%'.$name.'%');    
    }
    //Rajouter OrWhere pour que recherches se fasesnt par ref et name
    $query= $query->addOrderBy('p.price', 'ASC')
                    ->addOrderBy('p.name', 'ASC')
                    ->addOrderBy('p.ref', 'ASC')
                    ->addOrderBy('p.note', 'DESC')
                    ->getQuery();    
    
    $products = $query->getResult();
    
    return $this->render('search/index.html.twig', array(
        'products' => $products,
        'searchform' => $searchform->createView()
    ));
}
}
