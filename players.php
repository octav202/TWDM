<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("admin/controller.php");
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<title>Players</title>

		<script type="text/javascript">

		function getPlayers(keyword) {

			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			}
			 else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			 xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("players_row").innerHTML = xmlhttp.responseText;
					console.log( xmlhttp.responseText);
				}
			 }

			 xmlhttp.open("GET", "filter_players.php?key="+keyword, true);
			 xmlhttp.send();
		}
	</script>

 </head>

 <body>
	<?php include("includes/header.php"); ?>

	<div class="container">

		<div class="col-md-9">
			<div class="row  playersGrid" id= "players_row">

				<?php
				foreach(Controller::getPlayers() as $player) {
				?>

				<a href="details.php?id=<?php echo $player->getId()?>">
					<div class="col-md-3">
  						<div class="gridItem">
    						  <img alt="Player" src="<?php echo $player->getImage()?>" class="img-responsive"/>

    							<div class="playerGridInfo">
                        <h4><?php echo $player->getFirstName(). " " . $player->getLastName(); ?></h4>
                        <p>Country : <?php echo $player->getCountry() ?></p>
                        <p>Age : <?php echo $player->getAge() ?></p>
                        <p>Ranking : <?php echo $player->getRanking() ?></p>
    							</div>
  						</div>
					</div>
				</a>
				<?php } ?>
			 </div>
		</div>

		<div class="col-md-3">
	       <?php include("includes/sidePanel.php"); ?>
		</div>
	</div>

	<?php include("includes/footer.php"); ?>


 </body>
</html>
