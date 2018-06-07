<?php

namespace SzymonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class NumberController extends Controller
{
    public function showAction($max, Request $request)
    {
        $number=rand(0,$max);

        return new Response(
            '<html><body>Podaj max liczbę do wylosowania w linku<br>Wylosowany numerek: '.$number.'<br>Zawartosc request to:<br> ' .
            $request->server->get('HTTP_HOST')
            . '</body></html>'
        );
    }
}
