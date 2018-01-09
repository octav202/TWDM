<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("admin/controller.php"); 
session_start();
?>

<?php
$curr_user = getLoggedUser();

if(isset($_POST['submit']) && $curr_user !=0 ){
	$title = isset($_POST["title"]) ? $_POST["title"] : "";
	addTopic($title,$curr_user);
}

if(isset($_POST['submit_post']) && $curr_user !=0 ){
	$post_description = isset($_POST["post_description"]) ? $_POST["post_description"] : "";
	$topic_id = isset($_POST["topic_id"]) ? $_POST["topic_id"] : "";
	addPost($post_description,$curr_user,$topic_id);
}
$active_topic = 0;	
if(isset($_GET['id'])){
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
	<?php include("header.php"); ?>
	<?php include("menu.php"); ?>
	
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
	foreach(getTopics() as $topic) {
		
		$topic_user = getUserForId($topic['user_id']);
	?>
	
		<div class="panel panel-default">
		  <div class="panel-heading">
			<h4 class="panel-title">
			  <a data-toggle="collapse" data-parent="#accordion" href="<?php echo "#".$topic['topic_id']?>">
				<span class="topicTitle"><?php echo $topic['title'] ?> </span>
				<span class="topicDate pull-right"> <?php echo "  Created by ".$topic_user['firstName'].' '.$topic_user['lastName'].",".$topic['topic_date'];?></span>
			  </a>
			</h4>
		  </div>
		  <div id="<?php echo $topic['topic_id']?>" class="panel-collapse collapse <?php if($topic['topic_id'] == $active_topic) echo "in";?> ">
		  
		  <!-- POSTS -->
		  
			<div class="panel-body">
			
			<?php
			$posts = getPostsForTopic($topic['topic_id']);
			if($posts == null || sizeof($posts) == 0){
			?>
			
				<h4> No posts.. </h4>
			
			<?php 
			} else {
			?>
			
				<ul class="list-group postList">
					
					<?php
					foreach($posts as $post) {
						$post_user = getUserForId($post['user_id']);
					?>
						<li class="list-group-item">
							<span class="postTitle"><?php echo $post['post_description']?> </span>
							<span class="postDate pull-right"> <?php echo $post_user['firstName'].' '.$post_user['lastName'].", ".$post['post_date']?></span>
					
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
									<input type="hidden" name="topic_id" value ="<?php echo $topic['topic_id']?>"/>
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
	
	<?php include("footer.php"); ?>
		
 </body>
 
</html> 
