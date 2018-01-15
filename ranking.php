<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("admin/controller.php");
session_start();
$user = Controller::getUserForId(Controller::getLoggedUser());

?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>ATP Ranking</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

 </head>
	<body>

	<?php include("includes/header.php"); ?>

	<div class="container">
		<div class="row">

	          	<div class="col-md-9 rankingContainer">

				  <table class="table table-striped rankingTable">
				    <thead>
				      <tr>
					<th>Position</th></h4>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Points</th>
				      </tr>
				    </thead>
				    <tbody>
					<?php
					foreach(Controller::getRanking() as $rank) {
					$player = Controller::getPlayerById($rank->getPlayerId());
					?>

				      <tr>
				      	<td> <?php echo $rank->getRankId() ?> </td>
					<td> <?php echo $player->getFirstName() ?></td>
					<td> <?php echo $player->getLastName() ?> </td>
					<td> <?php echo $rank->getPoints() ?> </td>
				      </tr>


					<?php
					}
					?>
				    </tbody>
				  </table>
			 </div>

			<div class="col-md-3">
	          		<?php include("includes/sidePanel.php"); ?>
	       		</div>
		</div>
	</div>

	<?php include("includes/footer.php"); ?>
	</body>

</html>
