<?php
// src/AppBundle/Controller/UserController.php
namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Product;


class UserController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function validaAction(Request $request, Session $session)
    {
      // $email = $request->query->get('email'); via get
      $email = $request->request->get('email');
      $password = $request->request->get('password');

      $repository = $this->getDoctrine()->getRepository(User::class);
      $user = $repository->findOneByEmail($email);

      if ($user) { // this user exists?
        if ($user->getPassword() == $password) { //test the password
          $session->set('user', [
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
          ]);

          return $this->redirectToRoute('home');

        } else {
          $this->addFlash('msg', 'Senha incorreta!');
          return $this->redirectToRoute("login");
        }

      } else {
        $this->addFlash('msg', 'Usuário não encontrado!');
        return $this->redirectToRoute("login");
      }

    }

    /**
     * @Route("/logout")
     */
    public function logout(Request $request){
      $session = $this->get('session');
      $session->remove('user');
      return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("/my_data", name="my_data")
     */
    public function myData(Request $request, Session $session){

      if (isset($_POST['edit'])) {

        $id = $this->get('session')->get('user')['id'];
        $repository = $this->getDoctrine()->getRepository(User::class);
        $user = $repository->findOneById($id);
        
        if ($_POST['email']) {
          if ($user->getEmail() != $_POST['email']) {
            $user->setEmail($_POST['email']);
          }
        }

        if ($_POST['password']) {
          if ($user->getPassword() != $_POST['password']) {
            $user->setPassword($_POST['password']);
          }
        }

        try {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            
            $session->set('user', [
              'id' => $user->getId(),
              'email' => $user->getEmail(),
              'password' => $user->getPassword(),
            ]);

            $this->addFlash('msg', 'Informações atualizadas com sucesso!');
            return $this->render('accounts/admin.html.twig');

          } catch (\Exception $e) {
            return new Response($e->getMessage());
          }

      } else {
        return $this->render('accounts/my_data.html.twig');  
      }
      
    }

    /**
    * @Route("/home", name="home")
    */
    public function adminHome(Request $request) {
      $repository = $this->getDoctrine()->getRepository(Product::class);
      $products = $repository->findAll();
      return $this->render('accounts/admin.html.twig', array(
          'products' => $products,
      ));
    }
  
}
