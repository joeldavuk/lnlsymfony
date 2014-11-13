<?php

namespace lnl\lnlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */

        return $this->render('lnlBundle:Home:index.html.twig');
    }
}
