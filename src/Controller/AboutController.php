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
         $abouts = $em->getRepository('App:About')->findAll();

        return $this->render('about/index.html.twig', [
            "equipes"=> $equipes,
            "abouts"=> $abouts
        ]);
    }
}
