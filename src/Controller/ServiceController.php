<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends Controller
{
    /**
     * @Route("/service", name="service")
     */
    public function index()
    {
         $em = $this->getDoctrine()->getManager();
         $services = $em->getRepository('App:Service')->findAll();
         $contacts = $em->getRepository('App:Contact')->findAll();

        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
             "services"=> $services,
             "contacts"=> $contacts
        ]);
    }
}
