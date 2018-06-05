<?php

namespace SzymonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $test="To jest zmienna testowa";

        return $this->render('@Szymon/Default/index.html.twig', array(
            'number' => $test,
        ));
    }
}
