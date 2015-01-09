<?php

namespace lnl\lnlBundle\Controller;

use lnl\lnlBundle\Entity\Categories;
use lnl\lnlBundle\Entity\Items;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller {


    public function showAction($category,$subcategory=NULL) {

        ini_set('memory_limit', '4004M');

         $category = $this->getDoctrine()
           ->getRepository('lnlBundle:Categories')
           ->findOneBySlug($category);

        $childCategories = $category->getChildren();


        $em    = $this->getDoctrine()->getManager();
        $categoryItems = $em->getRepository('lnlBundle:Items')->findItemsBySlug($category);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $categoryItems,
            $this->get('request')->query->get('page', 1)/*page number*/,
            2/*limit per page*/
        );

        //print_r($pagination->getItems());
        //$class_methods = get_class_methods($pagination->getItems());






        return $this->render(
            'lnlBundle:Categories:category.html.twig',
            array('categories' => $childCategories,'pagination' => $pagination)
        );

    }
    public function createAction()
    {
        $em = $this->getDoctrine()->getManager();
        $product = new Categories();
        $product->setTitle('A Foo Bar');
        $product->setSlug('jjj');
        $product->setImage('Lorem ipsum dolor');

        $item = new Items();
        $item->setTitle('A Foo Bar');
        $item->setSlug('Bar');
        $item->setContent('A Foo Bar');
        $item->setStatus('A Foo Bar');


        $category = $em->getRepository('lnlBundle:Categories')->find(2);
        // relate this product to the category
        $item->setCategory($category);






        $em->persist($product);
        $em->persist($item);
        $em->flush();

        return new Response('Created category id '.$product->getId());
    }
}