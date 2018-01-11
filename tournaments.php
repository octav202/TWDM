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
	<title>Tournaments</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="js/jquery-3.2.1.min" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
 
 </head>
	<body>
	
	<?php include("includes/header.php"); ?>
	<?php include("includes/menu.php"); ?>
	

	<div class="container forum">


		  <!-- TOPICS -->
		  <div class="panel-group topicList" id="accordion">
			<?php
			foreach(Controller::getTournaments() as $tourn) {
			?>
				<br/>
				<!-- PANEL HEADER -->
				<div class="panel panel-default">
				  <div class="panel-heading" style="background-color: <?php echo Controller::getColorForSurface($tourn->getSurface())?>;">
					<h4 class="panel-title">
					  <a data-toggle="collapse" data-parent="#accordion" href="<?php echo "#".$tourn->getTournamentId()?>">
						<span class="topicTitle"><?php echo $tourn->getTitle() ?> </span>
					  </a>
					</h4>
				  </div>

				  <!-- PANEL BODY -->	
				  <div id="<?php echo $tourn->getTournamentId()?>" class="panel-collapse collapse <?php echo "in"?> ">

					<div class="panel-body">
				
						<div class="row">
					
							<div class="col-md-2 tournImage"> 
								<img alt="Type" class="img-responsive" src="<?php Controller::getImageForTournamentType($tourn->getType())?>" />
							</div>
						
						
							<div class="col-md-offset-1 col-md-7"> 
								<table class="table detailsTable">
									<tbody>
									<tr>
										<td class="detailsTableHeading">Type:</td> <td><?php echo $tourn->getType()?></td>
									</tr>
									<tr>
										<td class="detailsTableHeading">Surface :</td> <td><?php echo $tourn->getSurface()?></td>
									</tr>
									<tr>
										<td class="detailsTableHeading">Place :</td><td><?php echo $tourn->getPlace()?></td>
									</tr> 
									<tr>
										<td class="detailsTableHeading">Month :</td><td><?php echo $tourn->getMonth()?></td>
									</tr>
									<tr>
										<td class="detailsTableHeading">Finance :</td> <td><?php echo $tourn->getFinance()?></td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
						
					</div>
			
				  </div>
				</div>
	
			<?php
			}
			?>
		  
	
		  </div> 
		</div>


	<?php include("includes/footer.php"); ?>
	</body>
 
</html> 
