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
use AppBundle\Entity\Promotion;
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


  /**
   * @Route("/run_edit_product", name="run_edit_product")
   */
  public function runEditProduct(Request $request){
    $repositoryP = $this->getDoctrine()->getRepository(Product::class);
    $id = $request->request->get('id');
    $product = $repositoryP->findOneById($id);
    
    if ($_FILES['image']['name']) {
      // delete olde images
      unlink('uploads/images/' . $product->getImage());
      unlink('uploads/images/thumb/' . $product->getImage());
      $imageName = Utils::uploadImage($_FILES['image']);
      $product->setImage($imageName);
    }
    // get category
    $idCategory = $request->request->get('category');
    $repository = $this->getDoctrine()->getRepository(Category::class);
    $category = $repository->findOneById($idCategory);
    
    $product->setName($request->request->get('name'));
    $product->setDescription($request->request->get('description'));
    $product->setCategory($category);
    
    try {
      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->flush();
      $this->addFlash('msg', 'As informações do produto foram atualizadas com sucesso!');
      return $this->render('accounts/admin.html.twig');
    } catch (\Exception $e) {
      return new Response($e->getMessage());
    }
  }

  /**
   * @Route("/delete_product", name="delete_product")
   */
  public function deleteProduct(Request $request){
    $repositoryP = $this->getDoctrine()->getRepository(Product::class);
    $id = $request->query->get('id');
    $product = $repositoryP->findOneById($id);
    
    try {
      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->remove($product);
      $entityManager->flush();
      $this->addFlash('msg', 'Produto deletado com sucesso!');
      return $this->render('accounts/admin.html.twig');
    } catch (\Exception $e) {
      return new Response($e->getMessage());
    }
  }

  /**
   * @Route("/new_promotion", name="new_promotion")
   */
  public function newPromotion(Request $request){
    if (isset($_POST['save'])) {
      $imageName = Utils::uploadImage($_FILES['image']);

      $promotion = new Promotion();
      $promotion->setDescription($_POST['description']);
      $promotion->setImage($imageName);
      
      try {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($promotion);
        $entityManager->flush();
        $this->addFlash('msg', 'Promoção salva com sucesso!');
        return $this->render('accounts/admin.html.twig');
      } catch (\Exception $e) {
        return new Response($e->getMessage());
      }

      return new Response($image['name']);
    } else {
      return $this->render('catalog/new_promotion.html.twig');
    }

  }

    /**
   * @Route("/show_promotions", name="show_promotions")
   */
  public function showPromotions(Request $request){
    $repository = $this->getDoctrine()->getRepository(Promotion::class);
    $promotions = $repository->findAll();
    return $this->render('catalog/show_promotions.html.twig', array(
      'promotions' => $promotions,
    ));
  }

  /**
   * @Route("/edit_promotion", name="edit_promotion")
   */
  public function editPromotion(Request $request){

    $repository = $this->getDoctrine()->getRepository(Promotion::class);
    $promotion = $repository->findOneById($_GET['id']);
    
    if (isset($_POST['edit'])) {
                  
      if ($_FILES['image']['name']) { // update image
        // delete old images
        unlink('uploads/images/' . $promotion->getImage());
        unlink('uploads/images/thumb/' . $promotion->getImage());
        $imageName = Utils::uploadImage($_FILES['image']);
        $promotion->setImage($imageName);
      }
      $promotion->setDescription($_POST['description']);
          
      try {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();
        $this->addFlash('msg', 'As informações da promoção foram atualizadas com sucesso!');
        return $this->render('accounts/admin.html.twig');
        } catch (\Exception $e) {
          return new Response($e->getMessage());
        }
    } else {
      return $this->render('catalog/edit_promotion.html.twig', array(
        'promotion' => $promotion,
      ));
    }
    
  }

  /**
  * @Route("/delete_promotion", name="delete_promotion")
  */
  public function deletePromotion(Request $request) {
    $repository = $this->getDoctrine()->getRepository(Promotion::class);
    $promotion = $repository->findOneById($_GET['id']);
    // delete images
    unlink('uploads/images/' . $promotion->getImage());
    unlink('uploads/images/thumb/' . $promotion->getImage());

    try {
      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->remove($promotion);
      $entityManager->flush();
      $this->addFlash('msg', 'Promoção deletada com sucesso!');
      return $this->render('accounts/admin.html.twig');
    } catch (\Exception $e) {
      return new Response($e->getMessage());
    }

  }

}

?>
