<?php

namespace SC\OrangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('SCOrangeBundle:Admin:index.html.twig', array(
                // ...
            ));    }

}
