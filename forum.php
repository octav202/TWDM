<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("admin/controller.php"); 
session_start();
?>

<?php
$curr_user = Controller::getLoggedUser();

// Add Topic
if (isset($_POST['submit']) && $curr_user !=0 ){
	$title = isset($_POST["title"]) ? $_POST["title"] : "";
	Controller::addTopic($title,$curr_user);
}

// Add Post
if (isset($_POST['submit_post']) && $curr_user !=0 ){
	$post_description = isset($_POST["post_description"]) ? $_POST["post_description"] : "";
	$topic_id = isset($_POST["topic_id"]) ? $_POST["topic_id"] : "";
	Controller::addPost($post_description,$curr_user,$topic_id);
}

// Get Active topic
$active_topic = 0;	
if (isset($_GET['id'])) {
	$active_topic = $_GET['id'];
} 
?>

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="js/jquery-3.2.1.min" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
 	<title>Forum</title>
 
 </head>
 
 <body>
	<?php include("includes/header.php"); ?>
	<?php include("includes/menu.php"); ?>

	<?php include("includes/rpanel.php"); ?>

</div>
	
<div class="container forum">

	<div class="row">
		<div class="col-md-3" id = "topicHeader">
			<h2>Topics</h2>
		</div>
												
	</div>
	
	<!-- ADD TOPIC -->
	<div class="row addTopicForm">
				<div class="col-md-8">
					<form action="forum.php" method = "post">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<input type="text" name="title" id="title" class="form-control input-lg" placeholder="Title" tabindex="1"/>
								</div>
							</div>
							
							<div class="col-md-2">
								<div class="form-group">
									<input type="submit" name="submit" value="Add" class="btn btn-primary btn-success btn-lg" tabindex="2"/>
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>
  
  <hr/>
  
  <!-- TOPICS -->
  <div class="panel-group topicList" id="accordion">
	<?php
	foreach(Controller::getTopics() as $topic) {
		$topic_user = Controller::getUserForId($topic->getUserId());
	?>
		<br/>
		<!-- PANEL HEADER -->
		<div class="panel panel-default">
		  <div class="panel-heading">
			<h4 class="panel-title">
			  <a data-toggle="collapse" data-parent="#accordion" href="<?php echo "#".$topic->getId()?>">
				<span class="topicTitle"><?php echo $topic->getTitle() ?> </span>
				<span class="topicDate pull-right"> <?php echo "  Created by ".$topic_user->getFirstName().' '.$topic_user->getLastName().", ".$topic->getDate();?></span>
			  </a>
			</h4>
		  </div>

		  <!-- PANEL BODY -->	
		  <div id="<?php echo $topic->getId()?>" class="panel-collapse collapse <?php /*if($topic->getId() == $active_topic)*/ echo "in";?> ">
		  <!-- POSTS -->
		  
			<div class="panel-body">
			<?php
			$posts = Controller::getPostsForTopic($topic->getId());
			if($posts == null || sizeof($posts) == 0){
			?>
				<h4> No posts.. </h4>
			<?php 
			} else {
			?>
			
				<ul class="list-group postList">
					
					<?php
					foreach($posts as $post) {
						$post_user = Controller::getUserForId($post->getUserId());
					?>
						<li class="list-group-item">
							<span class="postTitle"><?php echo $post->getDescription()?> </span>
							<span class="postDate pull-right"> <?php echo $post_user->getFirstName().' '.$post_user->getLastName().", ".$post->getDate()?></span>
					
						</li>
						
					<?php }?>
				</ul>
				
				
			<?php }
			?>
				
				
			<!-- ADD POST -->
			<div class="row addPostForm">
				<div class="col-md-12">
					<form action="forum.php" method = "post">
						<div class="row">
							<div class="col-md-11">
								<div class="form-group">
									<input type="text" name="post_description" id="post_description" class="form-control input-lg" placeholder="Your post.." tabindex="1"/>
								</div>
							</div>
							
							<div class="col-md-1">
								<div class="form-group pull-right">
									<input type="submit" name="submit_post" value="Add" class="btn btn-primary btn-success btn-lg" tabindex="2"/>
								</div>
							</div>
							
							<div class="col-md-0">
								<div class="form-group">
									<input type="hidden" name="topic_id" value ="<?php echo $topic->getId()?>"/>
								</div>
							</div>
							
						</div>

					</form>
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
