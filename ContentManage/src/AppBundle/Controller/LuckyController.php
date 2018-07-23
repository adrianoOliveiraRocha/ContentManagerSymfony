<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LuckyController extends Controller
{
    /**
     * @Route("/validation")
     */
    public function numberAction()
    {
        $number = random_int(0, 100);
        return new Response('test');
    }
}
