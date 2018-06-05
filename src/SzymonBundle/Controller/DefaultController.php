<?php

namespace SzymonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Szymon/Default/index.html.twig');
    }
}
