<?php

namespace lnl\lnlBundle\Controller;

use lnl\lnlBundle\Entity\Items;
use lnl\lnlBundle\Entity\Meta;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class RatingsController extends Controller {


    public function showAction() {
        $itemData = $this->getDoctrine()
            ->getRepository('lnlBundle:Ratings')
            ->findOneBySlug('sit');


        $itemMeta = $itemData->getMeta();


        return $this->render(
            'lnlBundle:Items:item.html.twig',
            array('itemMeta' => $itemMeta,'item' => $itemData)
        );

    }

    public function approveRating() {

    }


}