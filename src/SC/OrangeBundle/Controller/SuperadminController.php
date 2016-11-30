<?php

namespace SC\OrangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SuperadminController extends Controller
{
    public function indexAction()
    {
        return $this->render('SCOrangeBundle:Superadmin:index.html.twig', array(
                // ...
            ));    }

}
