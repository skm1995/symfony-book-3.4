<?php

namespace SzymonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SzymonBundle\Entity\Product;


class SqlController extends Controller
{
    public function showAction(Request $request){

        $user=$this->getUser();

        $repository = $this->getDoctrine()
            ->getRepository(Product::class);

        $query = $repository->createQueryBuilder('p')
            ->where('p.user = :user')
            ->setParameter('user', $user)
            ->getQuery();


        $products = $query->getResult();

        return $this->render('@Szymon/Default/sql.szymon.html.twig', array(
            'products' => $products,
        ));

    }
}
