<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product{
  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(type="string", length=200)
   */
  private $value;

  /**
   * @ORM\Column(type="text", length=1000)
   */
  private $description;

  /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
  private $category;

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

  public function setValue($value){
    $this->value = $value;
  }

  public function getValue(){
    return $this->value;
  }

  public function setDescription($description){
    $this->description = $description;
  }

  public function getDescription(){
    return $this->description;
  }

  public function setCategory($category){
    $this->category = $category;
  }

  public function getCategory(){
    return $this->category;
  }

  public function setImage($image){
    $this->image = $image;
  }

  public function getImage(){
    return $this->image;
  }
}

?>
