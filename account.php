<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
include("admin/controller.php");
session_start();
$user = Controller::getUserForId(Controller::getLoggedUser());

if(isset($_POST['submit'])){
	$firstName = isset($_POST["firstName"]) ? $_POST["firstName"] : "";
	$lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : "";
	$email = isset($_POST["email"]) ? $_POST["email"] : "";
	$pass = isset($_POST["password"]) ? $_POST["password"] : "";
	if(Controller::updateUser(Controller::getLoggedUser(),$firstName, $lastName,$email ,$pass)){
		echo "User Updated";
	}
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>My Account</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
 
	<script type="text/javascript">
	function validateForm() {
		var fName = document.forms["form"]["firstName"].value;
		var lName = document.forms["form"]["lastName"].value;
		var email = document.forms["form"]["email"].value;
		var pass = document.forms["form"]["password"].value;
		
		var valid = true;
		
		if (fName == "") {
			document.forms["form"]["firstName"].value = "Required";
			valid = false;
		}
		if (lName == "") {
			document.forms["form"]["lastName"].value = "Required";
			valid = false;
		}
		if (email == "") {
			document.forms["form"]["email"].value = "Required";
			valid = false;
		}
		if (pass == "") {
			document.forms["form"]["password"].value = "Required";
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
	
	<?php include("includes/header.php"); ?>
	<?php include("includes/menu.php"); ?>
	
		<div class="row" id = "accountForm">
			<div class="col-md-4 col-md-offset-4">
				<form id="form" action="account.php" method = "post" onsubmit = "return validateForm()">
					<h2>My Account</h2>
					<hr/>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="firstName" id="firstName" class="form-control input-lg" placeholder="First Name" tabindex="1" value = "<?php echo $user->getFirstName(); ?>"/>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="lastName" id="lastName" class="form-control input-lg" placeholder="Last Name" tabindex="2" value = "<?php echo $user->getLastName(); ?>"/>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="3" value = "<?php echo $user->getEmail(); ?>"/>
					</div>
					
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="4"/>
					</div>
					
					<hr/>
					<div class="row">
						<div class="col-md-offset-6 col-md-6">
							<input type="submit" name="submit" value="Save" class="btn btn-primary btn-block btn-lg" tabindex="7"/>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	<?php include("includes/footer.php"); ?>
	</body>
 
</html> 
