<?php

namespace SzymonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class NumberController extends Controller
{
    public function showAction($max)
    {
        $number=rand(0,$max);

        return new Response(
            '<html><body>Podaj max liczbę do wylosowania w linku<br>Wylosowany numerek: '.$number.'</body></html>'
        );
    }
}
