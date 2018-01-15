<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("admin/controller.php");	
Controller::logUserOut();
	
if(isset($_POST['submit'])){
	$email = isset($_POST["email"]) ? $_POST["email"] : "";
	$pass = isset($_POST["password"]) ? $_POST["password"] : "";
	
	$user_id = Controller::getUserId($email, $pass);
	
	if($user_id != 0){
		echo "Login Successful ".$user_id;
		Controller::logUserIn($user_id);
	} else {
		echo "Login Failed";
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
 
	<script type="text/javascript">
		function validateForm() {
			var email = document.forms["form"]["email"].value;
			var pass = document.forms["form"]["password"].value;
			
			var valid = true;
			if (email == "") {
				valid = false;
			}
			if (pass == "") {
				valid = false;
			}
			
			if(!valid) {
				alert("Please fill in the required fields.");
			}
			
			return valid;
		}
	</script>
 
	<title>Login</title>
 
 </head>
 
 <body>
	<?php include("includes/header.php"); ?>
	<?php include("includes/menu.php"); ?>
	
	<div class="row loginForm">
		<div class="col-md-4 col-md-offset-4">
			<form id="form" action="login.php" method="post" onsubmit = "return validateForm()">
				<fieldset>
					<h2>Log In</h2>
					<hr/>
					
					<div class="form-group">
							<input type="text" name="email" id="email" class="form-control input-lg invalid" placeholder="Email Address"/>
					</div>
					
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password"/>
					</div>
					<hr/>
					<div class="row">
						<div class="col-md-6">
							<input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="Login"/>
						</div>
						<div class="col-md-6">
							<a href="register.php" class="btn btn-lg btn-primary btn-block">Register</a>
						</div>
					</div>
					
				</fieldset>
			</form>
		</div>
	</div>
	
	<?php include("includes/footer.php"); ?>
	
 </body>
</html> 
