<?php

require_once 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
	if (isset($_POST["save"])) {

		$user_id = $_SESSION["id"];
		$fname = $_POST["first_name"];
		$lname = $_POST["last_name"];
		$email = $_POST["email"];

		if (($fname!=='')||($lname!=='')||($email!=='')) {
			$profile_sql = "UPDATE users SET first_name='$fname',last_name='$lname',email='$email' WHERE id='$user_id'";

			if ($conn->query($profile_sql)) {
				$user_msg = '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Profile updated successfully</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			}else{
				$user_msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Profile updating failed!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			}
		}else{
			$user_msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Please change at least one field before click save button</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		}
	}else{
		$user_msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Oops! Database connection lost!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
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
	<title>User Profile | Direct Car Auctions</title>
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
	<br><br><br><br>
	<div class="container">
		<div class="profile-section-title">
			<h2>User Profile</h2>
		</div>
		<br>
		<div class="profile-form-div">
		<?php
			$sql_users = "SELECT * FROM users";
			$sql_users_rslt = mysqli_query($conn,$sql_users);
			$row = mysqli_fetch_array($sql_users_rslt);

			if(isset($user_msg)){ 
		?>
			<div class="db_submit_msg">
				<?php echo $user_msg; ?>
			</div>
		<?php
			}
		?>
			<form action="profile.php" method="POST">
				<div class="row">
					<div class="col-md-6">
						<label>First Name</label><br>
						<input type="text" name="first_name" value="<?php echo $row['first_name']; ?>">
					</div>
					<div class="col-md-6">
						<label>Last Name</label><br>
						<input type="text" name="last_name" value="<?php echo $row['last_name']; ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label>Email</label><br>
						<input type="email" name="email" value="<?php echo $row['email']; ?>">
					</div>
				</div>
				<br>
				<div class="profile-submit-btn">
					<input type="submit" name="save" value="Save">
				</div>
			</form>
		</div>
	</div>
	<br><br><br><br><br>
	<!-- Footer plugin begins -->
	<?php require_once('common/footer.php'); ?>
	<!-- Footer plugin ends -->
</body>
<div class="se-pre-con"></div>
</html>