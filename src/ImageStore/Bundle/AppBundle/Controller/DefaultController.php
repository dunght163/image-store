<?php

namespace ImageStore\Bundle\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ImageStoreAppBundle:Default:index.html.twig', array('name' => $name));
    }
}
