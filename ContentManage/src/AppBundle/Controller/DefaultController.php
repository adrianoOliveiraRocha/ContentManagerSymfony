<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;

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

      $email = $this->get('session')->get('user')['email'];
      
      if (empty($email)) {
        return $this->render('accounts/login.html.twig', []);
      } else {
        $repository = $this->getDoctrine()->getRepository(Product::class);
        $products = $repository->findAll();
        return $this->render('accounts/admin.html.twig', array(
            'products' => $products,
        ));
      }

    }


}
