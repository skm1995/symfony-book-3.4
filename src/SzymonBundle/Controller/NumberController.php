<?php

namespace SzymonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class NumberController extends Controller
{
    public function showAction()
    {
        $number=10;

        return new Response(
            '<html><body>Numerek: '.$number.'</body></html>'
        );
    }
}
