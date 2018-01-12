<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	include("admin/controller.php"); 
	session_start();
 ?>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Contact Us</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="js/jquery-3.2.1.min" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
 
	<script type="text/javascript">
		function validateForm() {
			var name = document.forms["form"]["name"].value;
			var email = document.forms["form"]["email"].value;
			var message = document.forms["form"]["message"].value;
			
			var valid = true;
			
			if (name == "") {
				//document.forms["form"]["firstName"].value = "*";
				valid = false;
			}
			if (email == "") {
				//document.forms["form"]["lastName"].value = "*";
				valid = false;
			}
			if (message == "") {
				//document.forms["form"]["email"].value = "*";
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
	<?php include("includes/rpanel.php"); ?>
        <?php include("includes/recentposts.php"); ?>	

	<div class="container contactForm">
		<div class="row contentPadding">
		  <div class="col-md-6 col-md-offset-3">
			<div class="well well-sm">
			  <form class="form-horizontal" id="form" action="contact.php" method="post" onsubmit = "return validateForm()">
			  <fieldset>
				<legend class="text-center">Contact us</legend>

				<div class="form-group">
				  <label class="col-md-3 control-label" for="name">Name</label>
				  <div class="col-md-9">
					<input id="name" name="name" type="text" placeholder="Your name" class="form-control"/>
				  </div>
				</div>
		
				<div class="form-group">
				  <label class="col-md-3 control-label" for="email">Your E-mail</label>
				  <div class="col-md-9">
					<input name="email" id="email" type="text" placeholder="Your email" class="form-control"/>
				  </div>
				</div>
		
				<div class="form-group">
				  <label class="col-md-3 control-label" for="message">Your message</label>
				  <div class="col-md-9">
					<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5" cols="5"></textarea>
				  </div>
				</div>
				
				<div class="form-group">
				  <div class="col-md-12 text-right">
					<button type="submit" class="btn btn-primary btn-lg">Submit</button>
				  </div>
				</div>
			  </fieldset>
			  </form>
			</div>
		  </div>
	</div>
</div>
		
	<?php include("includes/footer.php"); ?>
	</body>
</html> 
