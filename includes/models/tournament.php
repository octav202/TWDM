<?php

class Tournament {

	private $tournamentId;
	private $title;
	private $type;
	private $surface;
	private $place;
	private $month;
	private $finance;

	public function __construct($tournamentId, $title, $type, $surface, $place, $month, $finance)  { 
		$this->tournamentId = $tournamentId;
		$this->title = $title;
		$this->type = $type;
		$this->surface = $surface;
		$this->place = $place;
		$this->month = $month;
		$this->finance = $finance;
	} 

	// TournamentId
	public function setTournamentId($id) {
  		$this->tournamentId = $id;
	}

	public function getTournamentId() {
  		return $this->tournamentId;
	}

	// Title
	public function setTitle($title) {
  		$this->title = $title;
	}

	public function getTitle() {
  		return $this->title;
	}

	// Type
	public function setType($type) {
  		$this->type = $type;
	}

	public function getType() {
  		return $this->type;
	}	
	
	// Surface
	public function setSurface($surface) {
  		$this->surface = $surface;
	}
	
	public function getSurface() {
  		return $this->surface;
	}

	// Place
	public function setPlace($place) {
  		$this->place = $place;
	}
	
	public function getPlace() {
  		return $this->place;
	}

	// Month
	public function setMonth($month) {
  		$this->month = $month;
	}
	
	public function getMonth() {
  		return $this->month;
	}

	// Finance
	public function setFinance($finance) {
  		$this->finance = $finance;
	}
	
	public function getFinance() {
  		return $this->finance;
	}
	
}

?>
