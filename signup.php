<?php

require_once 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST["signup"])) {
		
		$f_name = $_POST["first_name"];
		$l_name = $_POST["last_name"];
		$reg_email = $_POST["reg_email"];
		$reg_pass = md5($_POST["reg_password"]);
		$reg_re_pass = md5($_POST["reg_re_password"]);

		if (($f_name!=='')&&($l_name!=='')&&($reg_email!=='')&&($reg_pass!=='')&&($reg_re_pass!=='')) {
			if ($reg_pass == $reg_re_pass) {
				$sql = "INSERT INTO users(first_name,last_name,email,password,conf_password) VALUES('$f_name','$l_name','$reg_email','$reg_pass','$reg_re_pass')";

				if ($conn->query($sql)) {
					$msg = '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>User added successfully.</strong> Please sign in to access full features.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
				}else{
					$msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Database connection lost!</strong> Try again.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
				}
			}else{
				$msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Passwords are not same!</strong> Please enter same passwords in both fields.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			}
		}else{
			$msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>All fields are required!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<!-- meta data -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Car sale demo website">
	<meta name="keywords" content="HTML5, CSS3, Bootstrap, JQuery, PHP, MySQL">
	<meta name="author" content="BK">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- Local style sheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.css">

	<!-- Javascript -->
	<script type="text/javascript" src="js/jquery-3.4.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<!-- Favicon -->
	<link rel="icon" href="images/fav.png">

	<!-- Title -->
	<title>Sign Up | Direct Car Auction</title>
</head>
<body>
	<script type="text/javascript">
		$(window).on("load", function() {
			$(".se-pre-con").fadeOut("slow");
		});
	</script>
	<!-- navbar plugin begins-->
	<?php require_once ('common/navbar.php'); ?>
	<!-- navbar plugin ends-->
	<br><br>
	<div class="container">
		<div class="signup-section-title">
			<h2>Be a part of DCA family</h2>
		</div>
		<br>
		<div class="signup-form-div">
		<?php
		if(isset($msg)){ ?>
			<div class="db_submit_msg">
				<?php echo $msg; ?>
			</div>
		<?php
		}
		?>
			<form action="signup.php" method="POST">
				<div class="row">
					<div class="col-md-6">
						<label>First Name</label><br>
						<input type="text" name="first_name" id="first_name" placeholder="John">
					</div>
					<div class="col-md-6">
						<label>Last Name</label><br>
						<input type="text" name="last_name" id="last_name" placeholder="Doe">
					</div>
				</div>
				<br>	
				<div class="row">
					<div class="col-md-12">
						<label>Email Address</label><br>
						<input type="email" name="reg_email" id="reg_email" placeholder="example@gmail.com"><br>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-6">
						<label>Password</label><br>
						<input type="password" name="reg_password" id="reg_password" placeholder="Password must have at least 6 digits">
					</div>
					<div class="col-md-6">
						<label>Confirm Password</label><br>
						<input type="password" name="reg_re_password" id="reg_re_password"  placeholder="Password must have at least 6 digits">
					</div>
				</div>
				<br>
				<div class="form-signup-btn">
					<input type="submit" name="signup" value="Sign up">
				</div>
			</form>
		</div>
	</div>
	<br><br>
	<!-- Footer plugin begins -->
	<?php require_once('common/footer.php'); ?>
	<!-- Footer plugin ends -->
</body>
<div class="se-pre-con"></div>
</html>