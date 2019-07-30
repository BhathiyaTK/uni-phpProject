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
	<title>Direct Car Auction</title>
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

	<!-- Carousel section begins -->
	<section>
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item">
		      <img src="images/car1.jpg" class="d-block w-100" alt="banner one">
		    </div>
		    <div class="carousel-item active">
		      <img src="images/car2.jpg" class="d-block w-100" alt="banner two">
		    </div>
		    <div class="carousel-item">
		      <img src="images/car3.jpg" class="d-block w-100" alt="banner three">
		    </div>
		  </div>
		  <a class="carousel-control-prev carousel-btn" id="btn-prev" href="#carouselExampleFade" role="button" data-slide="prev">
		    <i class="fas fa-chevron-left fa-lg"></i>
		  </a>
		  <a class="carousel-control-next carousel-btn" id="btn-next" href="#carouselExampleFade" role="button" data-slide="next">
		    <i class="fas fa-chevron-right fa-lg"></i>
		  </a>
		</div>
	</section><!-- Carousel section ends -->

	<br><br><br>
	<!-- Vehile category section begins -->
	<section>
		<div class="section-title">
			<h2>Find your vehicle by category wise</h2>
		</div>
		<div class="divider"></div>
		<div class="container">
			<div class="car-type-box">
				<div class="car-image">
					<img src="images/car-box1.jpeg">
				</div>
				<div class="car-topic">
					<a href="">Cars</a>
				</div>
			</div>
			<div class="car-type-box">
				<div class="car-image">
					<img src="images/car-box2.jpg">
				</div>
				<div class="car-topic">
					<a href="">SUVs</a>
				</div>
			</div>
			<div class="car-type-box">
				<div class="car-image">
					<img src="images/car-box3.jpg">
				</div>
				<div class="car-topic">
					<a href="">Vans</a>
				</div>
			</div>
			<div class="car-type-box">
				<div class="car-image">
					<img src="images/car-box4.jpg">
				</div>
				<div class="car-topic">
					<a href="">Motor Bikes</a>
				</div>
			</div>
		</div>
	</section><!-- Vehile category section ends -->
	<br><br><br>

	<!-- New trending cars section --->
	<section id="trending-newcars-sec">
		<div class="container-custom">
			<div class="section-title">
				<h3>Top Selling Brand New Models</h3>
			</div>
			<br>
			<div class="card-deck">
			  <div class="card">
			    <img src="images/newCars/card-img1.jpg" class="card-img-top" alt="...">
			    <div class="card-body">
			      <h5 class="card-title">Range Rover Velar 2018</h5>
			      <p class="card-text"><b>Rs. 24,500,000</b></p>
			      <a href="#" class="card-link btn btn-info btn-sm">Details</a>
    			  <a href="tel:0771234567" class="card-link btn btn-warning btn-sm">Contact Seller</a>
			    </div>
			  </div>
			  <div class="card">
			    <img src="images/newCars/card-img2.jpg" class="card-img-top" alt="...">
			    <div class="card-body">
			      <h5 class="card-title">Toyota Land Cruiser Prado 2019</h5>
			      <p class="card-text"><b>Rs. 19,600,000</b></p>
			      <a href="#" class="card-link btn btn-info btn-sm">Details</a>
    			  <a href="tel:0771234567" class="card-link btn btn-warning btn-sm">Contact Seller</a>
			    </div>
			  </div>
			  <div class="card">
			    <img src="images/newCars/card-img6.jpg" class="card-img-top" alt="...">
			    <div class="card-body">
			      <h5 class="card-title">Honda Civic Sport 2018</h5>
			      <p class="card-text"><b>Rs. 7,250,000</b></p>
			      <a href="#" class="card-link btn btn-info btn-sm">Details</a>
    			  <a href="tel:0771234567" class="card-link btn btn-warning btn-sm">Contact Seller</a>
			    </div>
			  </div>
			  <div class="card">
			    <img src="images/newCars/card-img7.jpg" class="card-img-top" alt="...">
			    <div class="card-body">
			      <h5 class="card-title">Nissan Leaf - X Grade 2019</h5>
			      <p class="card-text"><b>Rs. 6,550,000</b></p>
			      <a href="#" class="card-link btn btn-info btn-sm">Details</a>
    			  <a href="tel:0771234567" class="card-link btn btn-warning btn-sm">Contact Seller</a>
			    </div>
			  </div>
			  <div class="card">
			    <img src="images/newCars/card-img5.jpg" class="card-img-top" alt="...">
			    <div class="card-body">
			      <h5 class="card-title">Toyota C-HR Hybrid 2018</h5>
			      <p class="card-text"><b>Rs. 9,200,000</b></p>
			      <a href="#" class="card-link btn btn-info btn-sm">Details</a>
    			  <a href="tel:0771234567" class="card-link btn btn-warning btn-sm">Contact Seller</a>
			    </div>
			  </div>
			</div>
			<br><br>
			<div class="section-btn">
				<a href="new_cars.php">View More <i class="fas fa-angle-double-right"></i></a>
			</div>
		</div>
	</section><!-- New trending cars section ends -->
	<br><br><br>

	<!-- New trending cars section --->
	<section id="trending-usedcars-sec">
		<div class="container-custom">
			<div class="section-title">
				<h3>Top Selling Used Models</h3>
			</div>
			<br>
			<div class="card-deck">
			  <div class="card">
			    <img src="images/usedCars/card-img14.jpg" class="card-img-top" alt="...">
			    <div class="card-body">
			      <h5 class="card-title">Honda Civic FD3</h5>
			      <p class="card-text"><b>Rs. 3,275,000</b></p>
			      <a href="#" class="card-link btn btn-info btn-sm">Details</a>
    			  <a href="tel:0771234567" class="card-link btn btn-warning btn-sm">Contact Seller</a>
			    </div>
			  </div>
			  <div class="card">
			    <img src="images/usedCars/card-img12.jpg" class="card-img-top" alt="...">
			    <div class="card-body">
			      <h5 class="card-title">Nissan Clipper</h5>
			      <p class="card-text"><b>Rs. 2,400,000</b></p>
			      <a href="#" class="card-link btn btn-info btn-sm">Details</a>
    			  <a href="tel:0771234567" class="card-link btn btn-warning btn-sm">Contact Seller</a>
			    </div>
			  </div>
			  <div class="card">
			    <img src="images/usedCars/card-img8.jpg" class="card-img-top" alt="...">
			    <div class="card-body">
			      <h5 class="card-title">Toyota Prius 2015</h5>
			      <p class="card-text"><b>Rs. 4,650,000</b></p>
			      <a href="#" class="card-link btn btn-info btn-sm">Details</a>
    			  <a href="tel:0771234567" class="card-link btn btn-warning btn-sm">Contact Seller</a>
			    </div>
			  </div>
			  <div class="card">
			    <img src="images/usedCars/card-img9.jpg" class="card-img-top" alt="...">
			    <div class="card-body">
			      <h5 class="card-title">Toyota Hiace 2016</h5>
			      <p class="card-text"><b>Rs. 7,950,000</b></p>
			      <a href="#" class="card-link btn btn-info btn-sm">Details</a>
    			  <a href="tel:0771234567" class="card-link btn btn-warning btn-sm">Contact Seller</a>
			    </div>
			  </div>
			  <div class="card">
			    <img src="images/usedCars/card-img10.jpg" class="card-img-top" alt="...">
			    <div class="card-body">
			      <h5 class="card-title">Yamaha FZ V3</h5>
			      <p class="card-text"><b>Rs. 134,900</b></p>
			      <a href="#" class="card-link btn btn-info btn-sm">Details</a>
    			  <a href="tel:0771234567" class="card-link btn btn-warning btn-sm">Contact Seller</a>
			    </div>
			  </div>
			</div>
			<br><br>
			<div class="section-btn">
				<a href="used_cars.php">View More <i class="fas fa-angle-double-right"></i></a>
			</div>
		</div>
	</section><!-- New trending cars section ends -->
	<br><br><br>

	<!-- Footer plugin begins -->
	<?php require_once('common/footer.php'); ?>
	<!-- Footer plugin ends -->
</body>
<div class="se-pre-con"></div>
</html>