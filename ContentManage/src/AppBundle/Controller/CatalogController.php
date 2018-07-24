<?php
// src/AppBundle/Controller/CatalogController.php
namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\User;
use AppBundle\Entity\Category;
use AppBundle\Entity\Product;

class CatalogController extends Controller{
  /**
   * @Route("/new_category", name="new_category")
   */
  public function newCategory(Request $request){
    return $this->render('catalog/newcategory.html.twig');
  }

  /**
   * @Route("/create_newcategory", name="create_newcategory")
   */
  public function createNewCategory(Request $request){
    $categoryName = $request->request->get('name');
    $category = new Category();
    $category->setName($categoryName);
    try {
      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->persist($category);
      $entityManager->flush();
      $this->addFlash('msg', 'Categoria salva com sucesso!');
      return $this->render('accounts/admin.html.twig');
    } catch (\Exception $e) {
      return new Response($e->getMessage());
    }
  }

  /**
   * @Route("/show_categories", name="show_categories")
   */
  public function showCategories(Request $request){
    return $this->render('catalog/show_categories.html.twig');
  }
}



?>
