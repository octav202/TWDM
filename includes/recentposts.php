

		
<div class="panel panel-info recentPostsPanel">
			
	<div class="panel-heading">
		<h4>Recent Posts</h4>
	</div>
	
	<div class="panel-body">

		<ol class="recentPostList">
			<?php
				foreach(Controller::getRecentPosts() as $post) {
				$post_user = Controller::getUserForId($post->getUserId());
			?>
			<li class="list-group-item">
				<div class="recentPostDesc"><?php echo $post->getDescription()?> </div>
				<div class="recentPostDate"> <?php echo $post_user->getFirstName().' '.$post_user->getLastName().", ".$post->getDate()?></div>
					
			</li>
			<?php
				}
			?>
		</ol>
	</div>
</div>
