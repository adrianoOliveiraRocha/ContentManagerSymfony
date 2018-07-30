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

  			$test = "description: {$table->getDescription()}; image: {$table->getImage()}";

  			// use PDO
  			

  		} else {
  			$this->addFlash('msg', 'Por favor, selecione uma imagem para upload');
  			return $this->render('table/new.html.twig');	
  		}
  	} else {
  		return $this->render('table/new.html.twig');
  	}
  }
}
