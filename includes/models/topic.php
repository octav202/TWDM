<?php
class Topic {

	private $id;
	private $title;
	private $date;
	private $userId;

	public function __construct($id, $title, $date, $userId)  { 
		$this->id = $id;
		$this->title = $title;
		$this->date = $date;
		$this->userId = $userId;
	} 

	// Id
	public function setId($id) {
  		$this->id = $id;
	}

	public function getId() {
  		return $this->id;
	}	
	
	// Title
	public function setTitle($title) {
  		$this->title = $title;
	}
	
	public function getTitle() {
  		return $this->title;
	}

	// Date
	public function setDate($date) {
  		$this->date = $date;
	}

	public function getDate() {
  		return $this->date;
	}
	
	// UserId	
	public function setUserId($id) {
  		$this->userId = $id;
	}

	public function getUserId() {
  		return $this->userId;
	}	

}

?>
