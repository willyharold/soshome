<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends Controller
{
    /**
     * @Route("/about", name="about")
     */
    public function index()
    {
         $em = $this->getDoctrine()->getManager();
         $equipes = $em->getRepository('App:Equipe')->findAll();
        return $this->render('about/index.html.twig', [
            'controller_name' => 'AboutController',
              "equipes"=> $equipes
        ]);
    }
}
