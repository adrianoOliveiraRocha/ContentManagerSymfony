<?php
// src/AppBundle/Controller/UserController.php
namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class UserController extends Controller
{
    /**
     * @Route("/validation")
     */
    public function validaAction()
    {
        return new Response('test');
    }
}
