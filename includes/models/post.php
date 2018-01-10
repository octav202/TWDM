<?php
class Post {

	private id;
	private description;
	private date;
	private userId;
	private topicId;

	public function __construct($id, $description, $date, $userId, $topicId)  { 
		$this->id = $id;
		$this->description = $description;
		$this->date = $date;
		$this->userId = $userId;
		$this->topicId = $topicId;
	} 

	// Id
	public function setId($id) {
  		$this->id = $id;
	}

	public function getId() {
  		return $this->id;
	}	
	
	// Description
	public function setDescription($description) {
  		$this->description = $description;
	}
	
	public function getDescription() {
  		return $this->description;
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

	// TopicId	
	public function setTopicId($id) {
  		$this->topicId = $id;
	}

	public function getTopicId() {
  		return $this->topicId;
	}	

}

?>
