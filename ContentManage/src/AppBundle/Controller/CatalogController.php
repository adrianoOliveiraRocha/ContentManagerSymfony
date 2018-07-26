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
use AppBundle\Utils\Utils;

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


  /**
   * @Route("/delete_category", name="delete_category")
   */
  public function delete_category(Request $request){
    $id = $request->query->get('id');
    $repository = $this->getDoctrine()->getRepository(Category::class);
    $category = $repository->findOneById($id);
    try {
      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->remove($category);
      $entityManager->flush();
      $this->addFlash('msg', 'Categoria deletada com sucesso!');
      return $this->render('accounts/admin.html.twig');
    } catch (\Exception $e) {
      return new Response($e->getMessage());
    }
    
  }


  /**
   * @Route("/new_product", name="new_product")
   */
  public function newProduct(Request $request){
    $repository = $this->getDoctrine()->getRepository(Category::class);
    $categories = $repository->findAll();

    return $this->render('catalog/new_product.html.twig', array(
      'categories' => $categories,
    ));
  }


  /**
   * @Route("/create_newproduct", name="create_newproduct")
   */
  public function createNewProduct(Request $request){
    // return new Response($request->request->get('description'));
    $productName = $request->request->get('name');
    $productDescription = $request->request->get('description');
    
    if ($_FILES['image']) {
      $productImage = $_FILES['image'];
    
    }
    $idCategory = $request->request->get('category');
    $repository = $this->getDoctrine()->getRepository(Category::class);
    $category = $repository->findOneById($idCategory);
    
    $imageName = Utils::uploadImage($productImage);

    $product = new Product();
    $product->setName($productName);
    $product->setDescription($productDescription);
    $product->setCategory($category);
    $product->setImage($imageName);

    try {
      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->persist($product);
      $entityManager->flush();
      $this->addFlash('msg', 'Producto salvo com sucesso!');
      return $this->render('accounts/admin.html.twig');
    } catch (\Exception $e) {
      return new Response($e->getMessage());
    }

  }

  /**
   * @Route("/show_products", name="show_products")
   */
  public function showProducts(Request $request){
    $repository = $this->getDoctrine()->getRepository(Product::class);
    $products = $repository->findAll();
    return $this->render('catalog/show_products.html.twig', array(
      'products' => $products,
    ));
  }


  /**
   * @Route("/edit_product", name="edit_product")
   */
  public function editProductAction(Request $request){
    $repositoryP = $this->getDoctrine()->getRepository(Product::class);
    $id = $request->query->get('id');
    $product = $repositoryP->findOneById($id);

    $repositoryC = $this->getDoctrine()->getRepository(Category::class);
    $categories = $repositoryC->findAll();
    // currect category
    $currentCategory = $product->getCategory();

    return $this->render('catalog/edit_product.html.twig', array(
      'product' => $product,
      'categories' => $categories,
      'currentCategory' => $currentCategory,
    ));
  }

}

?>
