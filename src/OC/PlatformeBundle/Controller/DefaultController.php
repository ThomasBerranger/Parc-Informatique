<?php

namespace OC\PlatformeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCPlatformeBundle:Default:index.html.twig');
    }
}
