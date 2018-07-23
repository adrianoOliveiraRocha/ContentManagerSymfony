<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig', []);
    }

    /**
     * @Route("/sobre", name="about")
     */
    public function aboutAction(Request $request)
    {
        return $this->render('default/about.html.twig', []);
    }

    /**
     * @Route("/contato", name="contact")
     */
    public function contactAction(Request $request)
    {
        return $this->render('default/contact.html.twig', []);
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
      // $this->addFlash('msg', 'Congratulations, your action succeeded!');
      return $this->render('accounts/login.html.twig', []);
    }
}
