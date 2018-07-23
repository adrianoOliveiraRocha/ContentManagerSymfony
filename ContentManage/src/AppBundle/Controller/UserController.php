<?php
// src/AppBundle/Controller/UserController.php
namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\User;


class UserController extends Controller
{
    /**
     * @Route("/validation")
     */
    public function validaAction(Request $request)
    {
      // $email = $request->query->get('email'); via get
      $email = $request->request->get('email');
      $password = $request->request->get('password');
      $msg = "I had received the email: " . $email . " and a password: " . $password;
      return new Response($msg);
    }
}
