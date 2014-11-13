<?php

namespace lnl\lnlBundle\Controller;

use lnl\lnlBundle\Entity\Categories;
use lnl\lnlBundle\Entity\Items;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller {

    public function showAction($category,$subcategory=NULL) {

        $category_id = $this->getDoctrine()
            ->getRepository('lnlBundle:Categories')
            ->findOneBySlug('iste');

        //find all categories with this id
        $categories = $this->getDoctrine()
            ->getRepository('lnlBundle:Categories')
            ->findByParent($category_id);


        return $this->render(
            'lnlBundle:Categories:category.html.twig',
            array('categories' => $categories)
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