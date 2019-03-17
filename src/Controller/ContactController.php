<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index()
    {
         $em = $this->getDoctrine()->getManager();
         $contacts = $em->getRepository('App:Contact')->findAll();
          $messages = $em->getRepository('App:Message')->findAll();
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
             "contacts"=> $contacts,
             "messages"=> $messages
        ]);
    }
}
