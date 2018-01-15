<?php $current_user  = Controller::getLoggedUser();
$usr = Controller::getUserForId($current_user);
 ?>

<header>

    <nav class="navbar navbar-default header">
    		<div class="container-fluid ">

    			<div class="navbar-header">
    				<a id="headerLogo" class="navbar-brand" href="players.php">TennisWorld</a>
    			</div>

    			<ul class="nav navbar-nav pull-right">

    				<?php if($current_user == 0) {?>
    					<li><a id="headerLogin"  href="login.php">Log In</a></li>
    				<?php } else {?>
    					<li><a href="account.php">Logged in as <?php echo $usr->getFirstName().' '.$usr->getLastName()?></a></li>
    					<li><a id="headerLogout" href="login.php">Log Out</a></li>
    				<?php }?>
    			</ul>
    		</div>
    </nav>

    <?php include("includes/menu.php"); ?>

</header>
