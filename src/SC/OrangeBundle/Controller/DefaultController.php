<?php

namespace SC\OrangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = "Guest";
        return $this->render('SCOrangeBundle:Default:index.html.twig', array('name' => $name));
    }
}
