<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BrandController extends Controller
{
    /**
     * @Route("/brand", name="brand")
     */
    public function index()
    {
         $em = $this->getDoctrine()->getManager();
         $contacts = $em->getRepository('App:Contact')->findAll();
        return $this->render('brand/index.html.twig', [
            "contacts"=> $contacts,
            "brands"=>[]
        ]);
    }
}
