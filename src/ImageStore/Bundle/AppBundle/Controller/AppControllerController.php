<?php

namespace ImageStore\Bundle\AppBundle\Controller;

use ImageStore\Bundle\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AppControllerController extends Controller
{
    public function cgetAllAction()
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            return $this->render('ImageStoreAppBundle:Manager:get.html.twig', array('name' => (json_encode($user))));
        }

        $result = $this->get('image_store_app.repository.image')->findBy(['user_id' => $user->getId()]);

        return $this->render('ImageStoreAppBundle:Manager:get.html.twig', array('name' => (is_array($result) ? count($result) : 'NO result')));
    }

    public function getAction(Request $request)
    {
        $qParams = $request->query;

        $name = $qParams->get('name', 'NO_NAME');

        return $this->render('ImageStoreAppBundle:Manager:get.html.twig', array('name' => $name));
    }
}
