<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
         $em = $this->getDoctrine()->getManager();
          $temoignages = $em->getRepository('App:Temoignage')->findBy(array(), array('id' => 'DESC'));
           $accueils = $em->getRepository('App:Accueil')->findAll();
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
             "temoignages"=> $temoignages,
             "accueils"=> $accueils
        ]);
    }

    public function menu()
    {
        return $this->render('menu.html.twig');
    }

    public function footer()
    {
        return $this->render('footer.html.twig');
    }

    public function partenaire()

    {
        $em = $this->getDoctrine()->getManager();
        $partenaires = $em->getRepository('App:Partenaire')->findAll();
        

        return $this->render('partenaire.html.twig',["partenaires"=> $partenaires]);
    }

}
