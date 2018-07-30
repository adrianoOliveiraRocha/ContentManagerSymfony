<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="table")
 */
class Table{

  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(type="string", length=500, nullable=true)
   */
  private $description;

    /**
   * @ORM\Column(type="string", length=500)
   */
  private $image;


  public function setId($id){
    $this->id = $id;
  }

  public function getId(){
    return $this->id;
  }

  public function setDescription($description){
    $this->description = $description;
  }

  public function getDescription(){
    return $this->description;
  }

  public function setImage($image){
    $this->image = $image;
  }

  public function getImage(){
    return $this->image;
  }
}

?>
