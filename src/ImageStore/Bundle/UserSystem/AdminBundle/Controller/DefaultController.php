<?php

namespace ImageStore\Bundle\UserSystem\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ImageStoreUserSystemAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
