<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
include("admin/controller.php");
session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Player Details</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="js/jquery-3.2.1.min" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
 </head>
 
 <body>
	<?php include("header.php"); ?>
	<?php include("menu.php"); ?>
	
	
	<div class="container">
      <div class="row">

        <div class=" col-md-10 col-md-offset-1" >

		<?php 
		
		if(isset($_GET['id'])){
			$player = Controller::getPlayerById($_GET['id']);
		} else {
			exit();
		}
			
		?>
		
		<div class="row">
		
			<div class="panel panel-info">
			
				<div class="panel-heading">
					<h4 id = "player_name"><?php echo $player->getFirstName()." ".$player->getLastName() ?></h4>
				</div>
				<div class="panel-body">
					<div class="row">
					
						<div class="col-md-3"> 
							<img alt="User Pic" class="img-responsive" src="<?php echo $player->getImage()?>" />
						</div>
						
						
						<div class="col-md-offset-1 col-md-7"> 
							<table class="table detailsTable">
								<tbody>
								<tr>
									<td class="detailsTableHeading">Name:</td> <td><?php echo $player->getFirstName." ".$player->getLastName() ?></td>
								</tr>
								<tr>
									<td class="detailsTableHeading">Country :</td> <td><?php echo $player->getCountry()?></td>
								</tr>
								<tr>
									<td class="detailsTableHeading">Birthplace</td><td><?php echo $player->getBirthplace()?></td>
								</tr> 
								<tr>
									<td class="detailsTableHeading">Age</td><td><?php echo $player->getAge()?></td>
								</tr>
								<tr>
									<td class="detailsTableHeading">ATP Ranking</td> <td><?php echo $player->getRanking()?></td>
								</tr>
								<tr>
									<td class="detailsTableHeading">Weight</td><td><?php echo $player->getWeight()?></td>
								</tr>
								<tr>
									<td class="detailsTableHeading">Height</td> <td><?php echo $player->getHeight()?></td> 
								</tr>
								<tr>
									<td class="detailsTableHeading">About</td> <td><?php echo $player->getAbout()?></td> 
								</tr> 
								<tr>
									<td class="detailsTableHeading">Topics</td> 
									<td>
										<ul>
										
										<?php
											$topics = Controller::getTopicsForPlayer($player['first_name'],$player['last_name']);
											foreach($topics as $topic) {
												$link = "forum.php?id=".$topic['topic_id'];
												echo "<li><a href=\"".$link."\">".$topic['title']."</a></li>";
											}
										?>
									
										</ul>
									</td> 
								</tr> 
								</tbody>
							</table>
						</div>
				</div>
            </div>
			
			</div>
            
          </div>
        </div>
      </div>
    </div>
	
	<?php include("footer.php"); ?>
		
 </body>
 
</html> 
