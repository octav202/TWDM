<nav class="navbar menuBar">
		<div class="container-fluid">
			<ul class="nav navbar-nav menuBarList">
				<li><a href="players.php">Players</a></li>
				<li><a href="tournaments.php">Tournaments</a></li>
				<li><a href="ranking.php">Ranking</a></li>
				<li><a href="forum.php">Forum</a></li>

				<?php if($current_user == 0) {?>
					<li><a href="login.php">Log In</a></li>
				<?php } else {?>
					<li><a href="account.php">My Account</a></li>
				<?php }?>
				
			</ul>
			
			<input type="text" id="search" class=" input-lg pull-right" placeholder="Search.." size = "30" onkeyup="getPlayers(this.value)">
		</div>
</nav>

