<?php
class Player {

	private id;
	private firstName;
	private lastName;
	private country;
	private birthplace;
	private age;
	private ranking;
	private weight;
	private height;
	private coach;
	private about;
	private img;

	public function __construct($id, $firstName, $lastName, $country,$birthplace, $age, $ranking, $weight
,$height, $coach, $about, $img)  { 

		$this->id = $id;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->country = $country;
		$this->birthplace = $birthplace;
		$this->age = $age;
		$this->ranking = $ranking;
		$this->weight = $weight;
		$this->height = $height;
		$this->coach = $coach;
		$this->about = $about;
		$this->img = $img;
	} 

	// ID
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
	
	// Country
	public function setCountry($country) {
  		$this->country = $country;
	}

	public function getCountry() {
  		return $this->country;
	}

	// Birthplace
	public function setBirthplace($place) {
  		$this->birthplace = place;
	}

	public function getBirthplace() {
  		return $this->birthplace;
	}	

	// Age
	public function setAge($age) {
  		$this->age = $age;
	}

	public function getAge() {
  		return $this->age;
	}	

	// Ranking
	public function setRanking($rank) {
  		$this->ranking = $rank;
	}

	public function getRanking() {
  		return $this->ranking;
	}		

	// Weight
	public function setWeight($weight) {
  		$this->weight = $weight;
	}

	public function getWeight() {
  		return $this->weight;
	}	

	// Height
	public function setHeight($height) {
  		$this->userId = $height;
	}

	public function getHeight() {
  		return $this->height;
	}	

	// Coach
	public function setCoach($coach) {
  		$this->coach = $coach;
	}

	public function getCoach() {
  		return $this->coach;
	}	

	// About
	public function setAbout($info) {
  		$this->about = $info;
	}

	public function getAbout() {
  		return $this->about;
	}

	// Image
	public function setImage($img) {
  		$this->img = $img;
	}

	public function getImage() {
  		return $this->img;
	}		

}

?>
