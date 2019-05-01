<?php

namespace App\Controller;

use App\Entity\Newsletter;
use App\Form\NewsletterType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $temoignages = $em->getRepository('App:Temoignage')->findBy(array(), array('id' => 'DESC'));
        $accueils = $em->getRepository('App:Accueil')->findAll();
        $newsletter = new Newsletter();

        $form = $this->createForm(NewsletterType::class,$newsletter);
        if($request->getMethod() == "POST"){
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $news = $em->getRepository('App:Newsletter')->findOneByEmail($newsletter->getEmail());
                if(!$news){
                    $session = new Session();
                    $session->set("newsletter",true);
                    $em->persist($newsletter);
                    $em->flush();
                }
            }
        }

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
             "temoignages"=> $temoignages,
             "accueils"=> $accueils,
            "form"=>$form->createView()
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
    
      public function propos()

    {
        $em = $this->getDoctrine()->getManager();
        $propos = $em->getRepository('App:Propos')->findAll();
        

        return $this->render('about/index.html.twig',["propos"=> $propos]);
    }


    /**
     * @Route("/changelocale/{id}", name="changelocale")
     */
    public function changelocale(Request $request, $id = 'fr'){

        $request->setLocale($id);
        $url = $this->generateUrl('index',['_locale' => $id]);
        return $this->redirect($url);
    }
}
