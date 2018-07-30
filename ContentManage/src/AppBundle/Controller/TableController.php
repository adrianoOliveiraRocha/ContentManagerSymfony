<?php
namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Table;
use AppBundle\Utils\Utils;

class TableController extends Controller {
  
  /**
  * @Route("new_table", name="new_table")
  */
  public function newTable(Request $Request) {
  	if (isset($_POST['save'])) {
  		if (!empty($_FILES['image']['name'])) {
  			$table = new Table();
  			// descriptio is nullable
  			if (!empty($_POST['description'])) {
  				$table->setDescription($_POST['description']);
  			}
  			
          $imageName = Utils::uploadImage($_FILES['image']);
          $table->setImage($imageName);

          try {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($table);
            $entityManager->flush();
            $this->addFlash('msg', 'Tabela salva com sucesso!');
            return $this->render('accounts/admin.html.twig');
          } catch (\Exception $e) {
            return new Response($e->getMessage());
          }

  		} else {
  			$this->addFlash('msg', 'Por favor, selecione uma imagem para upload');
  			return $this->render('table/new.html.twig');	
  		}
  	} else {
  		return $this->render('table/new.html.twig');
  	}
  }

  /**
   * @Route("/show_tables", name="show_tables")
   */
  public function showTables(Request $request){
    $repository = $this->getDoctrine()->getRepository(Table::class);
    $tables = $repository->findAll();
    return $this->render('table/show_tables.html.twig', array(
      'tables' => $tables,
    ));
  }

  /**
   * @Route("/table_detail", name="table_detail")
   */
  public function tableDetail(Request $request){
    $id = $_GET['id'];
    $repository = $this->getDoctrine()->getRepository(Table::class);
    $table = $repository->findOneById($id);

    if (isset($_POST['edit'])) {

      if (empty($_POST['description']) && 
        $_FILES['image']['name']) {
        $this->addFlash('msg', 'Nenhuma alteração foi realizada');
        return $this->render('accounts/admin.html.twig');
      }

      // description
      if (!empty($_POST['description'])) {
        $table->setDescription($_POST['description']);
      }
      // image
      if (!empty($_FILES['image']['name'])) {
        $imageName = Utils::uploadImage($_FILES['image']);
        $table->setImage($imageName);
      }

      try {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($table);
            $entityManager->flush();
            $this->addFlash('msg', 'Informações editadas com sucesso!');
            return $this->render('accounts/admin.html.twig');
          } catch (\Exception $e) {
            return new Response($e->getMessage());
          } 

    } else {
      $table = $repository->findOneById($id);
      return $this->render('table/table_datail.html.twig', array(
        'table' => $table,
      ));
    }
   
  }

  /**
   * @Route("/delete_table", name="delete_table")
   */
  function deleteTable(Request $request){

    $id = $_GET['id'];
    $repository = $this->getDoctrine()->getRepository(Table::class);
    $table = $repository->findOneById($id);

    try{
      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->remove($table);
      $entityManager->flush();
      $this->addFlash('msg', 'Tabela deletada com sucesso!');
      return $this->render('accounts/admin.html.twig'); 
    } catch (\Exception $e){
      return new Response($e->getMessage());
    }
  
  }

}
