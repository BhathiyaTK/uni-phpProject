<?php

require_once 'db_config.php';
require_once 'mailer/class.phpmailer.php';
$mail = new PHPMailer(true);

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if (isset($_POST["submit"])) {
		$c_name = $_POST["name"];
		$c_tel = $_POST["tel"];
		$c_email = $_POST["email"];
		$c_messege = $_POST["messege"];

		if (($c_name!=='')&&($c_tel!=='')&&($c_email!=='')&&($c_messege!=='')) {
			
			$headers = "From: $c_email \r\n";
            $headers .= "Reply-To: $c_email \r\n";
            $headers .= "To: directcarauctions@gmail.com \r\n";
            $headers .= "X-Mailer: PHP/" . PHP_VERSION;

            $to = "directcarauctions@gmail.com";
            $subject = "Message from $c_name";
            $body =  "Mobile No: $c_tel \n\n" . $c_message;

            mail($to, $subject, $body, $headers);
                
            if(mail($to, $subject, $body, $headers)){
                echo '<script>alert("Email sent successfully!");</script>';
            }else{
                echo '<script>alert("Email sending failed!");</script>';
            }
		}else{
			echo '<script>alert("All field are required!");</script>';
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
	<title>Contact | Direct Car Auctions</title>
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
		<div class="row">
			<div class="col-md-7">
				<div class="section-title">
					<h3>Contact Us</h3>
				</div>
				<br>
				<form action="contact.php" method="POST" id="contact-form">
					<label>Name</label><br>
					<input type="text" name="name" id="name" placeholder="First name & Last name here"><br>
					<label>Contact No.</label><br>
					<input type="text" name="tel" id="tel" placeholder="+9477 XXXXXXX"><br>
					<label>Email Address</label><br>
					<input type="email" name="email" id="email" placeholder="example@gmail.com"><br>
					<label>Messege</label><br>
					<textarea rows="5" id="messege" name="messege" placeholder="Brief description about your problem or the suggestion"></textarea>
					<div class="form-submit-btn">
						<input type="submit" name="submit" value="Send Messege">
					</div>
				</form>
			</div>
			<div class="col-md-5" id="contact-data-div">
				<div class="row">
					<div class="col-md-6">
						<label class="contact-subtitles"><i class="fas fa-map-marker-alt"></i>&nbsp Address</label>
						<p class="contact-para">
							212/A, Sub Road One,<br>
							Main Street, Sub Area,<br>
							Main Town,<br>
							Sri Lanka.
						</p>
					</div>
					<div class="col-md-6">
						<label class="contact-subtitles"><i class="fas fa-phone"></i>&nbsp Contacts</label>
						<p class="contact-para">
							(+94)77 123 4567<br>
							(+94)71 987 6543<br>
							(+94)11 321 7654
						</p>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<label class="contact-subtitles"><i class="fas fa-envelope"></i>&nbsp Email</label>
						<p class="contact-para">
							directcarauctions@gmail.com
						</p>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<label class="contact-subtitles"><i class="fas fa-map-marked-alt"></i>&nbsp View on Map</label>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126744.2722042343!2d79.87783162624649!3d6.9194477791331055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1560063044424!5m2!1sen!2slk" width="100%" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
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