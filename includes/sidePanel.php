<!-- PANEL DISPLAYED ON THE RIGHT SIDE -->
<div class="sidePanel">
    <!-- RANKING PANEL - TOP 5 PLAYERS -->
    <div class="rankingPanel">

    		<p class="panelHeader">Top Players</p>

    		<ol class="rankList">
    			<?php
    			  $max = 5;
    				$i=0;
    				foreach(Controller::getRanking() as $rank) {
    					if($i==$max) {
    						break;
    					}
    					$player = Controller::getPlayerById($rank->getPlayerId());
    			?>
    			<li><?php echo $player->getFirstName()." ".$player->getLastName()." - ".$rank->getPoints()?></li>
    			<?php
    			  	$i++;
    				}
    			?>
    		</ol>
    		<center><a href="ranking.php">Ranking.. </a></center>
    </div>

    <!-- RECENT POSTS - TOP 4 RECENT POSTS -->
    <div class="recentPostsPanel">
    	<div >

    			<p class="panelHeader">Recent posts</p>

    			<ul class="recentPostList">
    					<?php
    						foreach(Controller::getRecentPosts() as $post) {
    						$post_user = Controller::getUserForId($post->getUserId());
    						$link = "forum.php?id=".$post->getTopicId();
    					?>
    					<li>
    							<a href="<?php echo $link ?>"><div class="recentPostDesc"><?php echo $post->getDescription()?> </div></a>
    							<div class="recentPostDate"> <?php echo $post_user->getFirstName().' '.$post_user->getLastName().", ".$post->getDate()?></div>
    					</li>
    					<?php
    						}
    					?>
    			</ul>

    			<center><a href="forum.php">Forum.. </a></center>
    	</div>
    </div>
</div>
