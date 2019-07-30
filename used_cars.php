<?php require_once 'db_config.php'; ?>

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
	<title>Used Cars | Direct Car Auctions</title>
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
			<h3>Used Vehicle Models</h3>
		</div>
		<br><br>

		<div class="row" id="new-cars-list">
		<?php
			$sql = "SELECT * FROM used_cars";
			$result = mysqli_query($conn,$sql);

			while ($row = mysqli_fetch_array($result)) {
		?>
			<div class="col-md-4">
				<div class="card">
				  <img src="<?php echo $row['image_path']; ?>" class="card-img-top" alt="Car Image">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $row["name"]; ?></h5>
					<p class="card-text"><b><?php echo "Rs. ".$row["price"]; ?></b></p>
					<table>
						<tr>
							<td><i class="fas fa-map-pin"></i> &nbsp&nbsp<?php echo $row["transmission"]; ?></td>
							<td><i class="fas fa-gas-pump"></i> &nbsp&nbsp<?php echo $row["fuel"]; ?></td>
						</tr>
						<tr>
							<td><i class="fas fa-tachometer-alt"></i> &nbsp&nbsp<?php echo $row["mileage"]." KM"; ?></td>
							<td><i class="fas fa-map-marker-alt"></i> &nbsp&nbsp<?php echo $row["location"]; ?></td>
						</tr>
					</table>
					<br>
					<a href="tel:0771234567" class="card-link btn btn-warning btn-sm">Contact Seller</a>
					<a href="https://www.google.com/maps/place/Colombo/@6.9204753,79.8720054,12.52z/data=!4m5!3m4!1s0x3ae253d10f7a7003:0x320b2e4d32d3838d!8m2!3d6.9270786!4d79.861243" target="_blank" class="card-link btn btn-info btn-sm">View on Map</a>
				  </div>
				</div>
				<br>
			</div>
		<?php
			}
		?>
		</div>
	</div>
	<br><br><br>

	<!-- Footer plugin begins -->
	<?php require_once('common/footer.php'); ?>
	<!-- Footer plugin ends -->
</body>
<div class="se-pre-con"></div>
</html>