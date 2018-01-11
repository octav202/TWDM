<?php
class Rank {

	private $rankId;
	private $playerId;
	private $points;

	public function __construct($rankId, $playerId, $points)  { 
		$this->rankId = $rankId;
		$this->playerId = $playerId;
		$this->points = $points;
	} 

	// RankId
	public function setRankId($id) {
  		$this->rankId = $id;
	}

	public function getRankId() {
  		return $this->rankId;
	}

	// PlayerId
	public function setPlayerId($id) {
  		$this->playerId = $id;
	}

	public function getPlayerId() {
  		return $this->playerId;
	}	
	
	// Title
	public function setPoints($points) {
  		$this->points = $points;
	}
	
	public function getPoints() {
  		return $this->points;
	}
	
}

?>
