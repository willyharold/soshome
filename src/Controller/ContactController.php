<?php

namespace App\Controller;

use App\Entity\Message;
use App\Form\MessageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request)
    {
         $em = $this->getDoctrine()->getManager();
         $contacts = $em->getRepository('App:Contact')->findAll();
         $message = new Message();
         $form = $this->createForm(MessageType::class, $message);


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            $session = new Session();
            $session->getFlashBag()->add("message","Votre message a bien été envoyé");

        }
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
             "contacts"=> $contacts,
             "form"=> $form->createView()
        ]);
    }
    
    
    

}
