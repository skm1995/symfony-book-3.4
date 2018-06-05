<?php

namespace SzymonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SzymonBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;
use SzymonBundle\Form\ProductType;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {

        $test="To jest zmienna testowa";

        $product = new Product();
        $form = $this -> createForm(ProductType::class, $product);


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $product = $form->getData();


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('succes');
        }


        return $this->render('@Szymon/Default/index.html.twig', array(
            'number' => $test,
            'form' => is_null ($form) ? $form : $form->createView()
        ));
    }
    public function succesAction(){
        return $this->render('@Szymon/Default/succes.html.twig');
    }
}
