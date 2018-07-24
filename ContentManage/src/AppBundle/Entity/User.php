<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User {
  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
	private $id;

  /**
   * @ORM\Column(type="string", length=100)
   */
	private $username;

  /**
   * @ORM\Column(type="string", length=100)
   */
	private $email;

  /**
   * @ORM\Column(type="string", length=500)
   */
	private $password;


  public function setId($id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}
	public function setName($nome) {
		$this->nome = $nome;
	}
	public function getName() {
		return $this->nome;
	}
	public function setEmail($email) {
		if (filter_var ( $email, FILTER_VALIDATE_EMAIL ) == false) {
			return false;
			exit ();
		} else {
			$this->email = $email;
		}
	}
	public function getEmail() {
		return $this->email;
	}
	public function setPassword($password) {
		$this->password = password_hash ( $password, PASSWORD_DEFAULT );
	}
	public function getPassword() {
		return $this->password;
	}

}
