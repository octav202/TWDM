
<?php include("admin/controller.php"); ?>

<?php

	if(isset($_GET["key"])){
		$key = $_GET["key"];
		$filtered_players;
		if($key=="") {
			$filtered_players = Controller::getPlayers();
		} else {
			$filtered_players = Controller::getPlayersForKeyword($key);
		}

		$response="";

			foreach($filtered_players as $player) {
				$response.= "<a href='details.php?id=". $player['player_id']."'>
								<div class=' col-md-3'>
									<div class='gridItem'>
											<img src='".$player['img']."' class='img-responsive'>

										<div class='col-md-12 playerGridInfo'>
											<h4>".$player['first_name']. " " . $player['last_name']."</h4>
											<p>Country : ".$player['country']."</p>
											<p>Age : ".$player['age']."</p>
											<p>Ranking : ".$player['ranking']."</p>
										</div>
									</div>
								</div>
							</a>";
			}
		echo $response;
	}
?>
