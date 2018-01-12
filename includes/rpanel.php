

		
<div class="panel panel-info rightPanel">
			
	<div class="panel-heading">
		<h4>ATP Ranking</h4>
	</div>
	
	<div class="panel-body">

		<ol class="rankList">
			<?php
				foreach(Controller::getRanking() as $rank) {
				$player = Controller::getPlayerById($rank->getPlayerId());
			?>
			<li><?php echo $player->getFirstName()." ".$player->getLastName()." - ".$rank->getPoints()?></li>
			<?php
				}
			?>
		</ol>
	</div>
</div>
