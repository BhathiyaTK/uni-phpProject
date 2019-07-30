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
	<title>About | Direct Car Auctions</title>
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
		<div class="section-title">
			<h3>About Direct Car Auctions (Pvt) Ltd</h3>
		</div>
		<br>
		<div class="row">
			<div class="col-md-7">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.
				</p>
			</div>
			<div class="col-md-5">
				<div id="about-office-img-div">
					<img src="images/office.jpg" width="100%">
					<p class="about-office-img-div-txt">
						<small><b>Head Office</b></small><br>
						<small><i>23/A, Cross Street 02, Colombo 04, Sri Lanka.</i></small>
					</p>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<div class="executives-div">
		<div class="container">
			<div class="section-title">
				<h2>Executive Team</h2>
			</div>
			<div class="divider"></div>
			<div class="row">
				<div class="col-md-3">
					<div class="person-profile">
						<div class="person-img">
							<img src="images/persons/man1.jpg">
						</div>
						<div class="person-details">
							<h4>Mr. David Gautta</h4>
							<p>
								CEO
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="person-profile">
						<div class="person-img">
							<img src="images/persons/female4.jpg">
						</div>
						<div class="person-details">
							<h4>Miss. Jennifer Lopez</h4>
							<p>
								CMO
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="person-profile">
						<div class="person-img">
							<img src="images/persons/man.jpg">
						</div>
						<div class="person-details">
							<h4>Mr. Adam Levine</h4>
							<p>
								CTO
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="person-profile">
						<div class="person-img">
							<img src="images/persons/female3.jpg">
						</div>
						<div class="person-details">
							<h4>Miss. Miley Cyrus</h4>
							<p>
								COO
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>

	<!-- Footer plugin begins -->
	<?php require_once('common/footer.php'); ?>
	<!-- Footer plugin ends -->
</body>
<div class="se-pre-con"></div>
</html>