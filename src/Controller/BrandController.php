<?php

namespace App\Controller;

use App\Entity\BrandAmbassador;
use App\Form\BrandAmbassadorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class BrandController extends Controller
{
    /**
     * @Route("/brand", name="brand")
     */
    public function index(Request $request)
    {
         $em = $this->getDoctrine()->getManager();
         $contacts = $em->getRepository('App:Contact')->findAll();
         $brands= $em->getRepository('App:Brand')->findAll();
         $brandAmbassador = new BrandAmbassador();
         $form = $this->createForm(BrandAmbassadorType::class,$brandAmbassador);

        if($request->getMethod() == "POST"){
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($brandAmbassador);
                $em->flush();
                $session = new Session();
                $session->getFlashBag()->add("message","Votre message a bien été envoyé");
            }
        }
        return $this->render('brand/index.html.twig', [
            "contacts"=> $contacts,
            "brands"=>$brands,
            "form"=>$form->createView()
        ]);
    }
}
