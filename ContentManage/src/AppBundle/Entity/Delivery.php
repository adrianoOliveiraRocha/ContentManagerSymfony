<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="delivery")
 */
class Delivery{

  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(type="string", length=500, nullable=true)
   */
  private $neighborhood;

    /**
   * @ORM\Column(type="string", length=50)
   */
  private $value;


  public function setId($id){
    $this->id = $id;
  }

  public function getId(){
    return $this->id;
  }

  public function setNeighborhood($neighborhood){
    $this->neighborhood = $neighborhood;
  }

  public function getNeighborhood(){
    return $this->neighborhood;
  }

  public function setValue($value){
    $this->value = $value;
  }

  public function getValue(){
    return $this->value;
  }
}

?>
