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
    $repository = $this->getDoctrine()->getRepository(Category::class);
    $categories = $repository->findAll();
    return $this->render('catalog/show_categories.html.twig', array(
      'categories' => $categories,
    ));
  }

  /**
   * @Route("/edit_category", name="edit_category")
   */
  public function editCategoryAction(Request $request){
    $id = $request->query->get('id');
    $name = $request->query->get('name');

    return $this->render('catalog/edit_category.html.twig', array(
      'id' => $id,
      'name' => $name,
    ));
  }

  /**
   * @Route("/run_edit_category", name="run_edit_category")
   */
  public function runEditCategoryAction(Request $request){
    $id = $request->request->get('id');
    $name = $request->request->get('name');

    $repository = $this->getDoctrine()->getRepository(Category::class);
    $category = $repository->findOneById($id);
    $category->setName($name);

    try {
      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->persist($category);
      $entityManager->flush();
      $this->addFlash('msg', 'Categoria editada com sucesso!');
      return $this->render('accounts/admin.html.twig');
    } catch (\Exception $e) {
      return new Response($e->getMessage());
    }
  }
}



?>
