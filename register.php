<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("admin/controller.php"); 
if(isset($_POST['submit'])){
	$firstName = isset($_POST["firstName"]) ? $_POST["firstName"] : "";
	$lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : "";
	$email = isset($_POST["email"]) ? $_POST["email"] : "";
	$pass = isset($_POST["password"]) ? $_POST["password"] : "";
	echo "ADDING USER..";
	$id = Controller::addUser($firstName, $lastName,$email ,$pass);
	echo "ID ADDED : ".$id;
	if($id !=0){
		echo "User Added";
		Controller::logUserIn($id);
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Register</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="js/jquery-3.2.1.min" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
 
	<script type="text/javascript">
	function validateForm() {
		var fName = document.forms["form"]["firstName"].value;
		var lName = document.forms["form"]["lastName"].value;
		var email = document.forms["form"]["email"].value;
		var pass = document.forms["form"]["password"].value;
		
		var valid = true;
		
		if (fName == "") {
			//document.forms["form"]["firstName"].value = "*";
			valid = false;
		}
		if (lName == "") {
			//document.forms["form"]["lastName"].value = "*";
			valid = false;
		}
		if (email == "") {
			//document.forms["form"]["email"].value = "*";
			valid = false;
		}
		if (pass == "") {
			//document.forms["form"]["password"].value = "*";
			valid = false;
		}
		
		if(!valid) {
			alert("Please fill in the required fields.");
		}
		
		return valid;
	}
 </script>
 
 </head>
	<body>
	
	<?php include("header.php"); ?>
	<?php include("menu.php"); ?>
	
		<div class="row registerForm contentPadding">
			<div class="col-md-4 col-md-offset-4">
				<form id="form" action="register.php" method = "post" onsubmit = "return validateForm()">
					<h2>Register</h2>
					<hr/>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="firstName" id="firstName" class="form-control input-lg" placeholder="First Name" tabindex="1"/>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="lastName" id="lastName" class="form-control input-lg" placeholder="Last Name" tabindex="2"/>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="3"/>
					</div>
					
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="4"/>
					</div>
					
					<hr/>
					<div class="row">
						<div class="col-md-offset-6 col-md-6">
							<input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"/>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	<?php include("footer.php"); ?>
	</body>
 
</html> 
