<?php
class User {

	private $id;
	private $firstName;
	private $lastName;
	private $email;
	private $pass;
	private $role;

	public function __construct($id, $firstName, $lastName, $email, $pass, $role)  { 
		$this->id = $id;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->email = $email;
		$this->pass = $pass;
		$this->role = $role;
	} 

	// Id
	public function setId($id) {
  		$this->id = $id;
	}

	public function getId() {
  		return $this->id;
	}	
	
	// First Name
	public function setFirstName($name) {
  		$this->firstName = $name;
	}
	
	public function getFirstName() {
  		return $this->firstName;
	}

	// Last Name
	public function setLastName($name) {
  		$this->lastName = $name;
	}

	public function getLastName() {
  		return $this->lastName;
	}

	// Email
	public function setEmail($email) {
  		$this->email = $email;
	}

	public function getEmail() {
  		return $this->email;
	}

	// Last Name
	public function setPass($pass) {
  		$this->pass = $pass;
	}

	public function getPass() {
  		return $this->pass;
	}

	// Last Name
	public function setRole($role) {
  		$this->role = $role;
	}

	public function getRole() {
  		return $this->role;
	}

}

?>
