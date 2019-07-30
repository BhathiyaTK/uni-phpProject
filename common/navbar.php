<?php

require_once 'db_config.php';

session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){

	if(isset($_POST["signin"])){
		$email = $_POST["email"];
      	$password = md5($_POST["password"]);

       	$query="SELECT * FROM users WHERE email='$email' AND password='$password'";
		$r=$conn->query($query);
		if($r->num_rows>0){
		    while($row=$r->fetch_assoc()){
		    	$_SESSION['id']=$row['id'];
		        $_SESSION['type']=$row['user_role'];
		        $_SESSION['email']=$row['email'];
		        $_SESSION['first_name']=$row['first_name'];

		        header("location: index.php");
		    }
		}else{
			echo "<script>alert('User not found! Please input correct email and password.')</script>";
			//$login_message = '<i class="fas fa-exclamation-triangle fa-lg"></i>User not found. Please input correct details.';
		}
    }
}

?>

<!-- navbar begins-->
<nav class="navbar navbar-expand-lg navbar-warning bg-warning">
  <div class="container">
  	<a class="navbar-brand" href="index.php">
  	  <img src="images/logo.png" height="50" alt="Website Logo">
  	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	  <ul class="navbar-nav mr-auto">
	    <li class="nav-item active">
	      <a class="nav-link" href="index.php"><i class="fas fa-home"></i>&nbsp Home</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="new_cars.php"><i class="fas fa-car"></i>&nbsp New Cars</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="used_cars.php"><i class="fas fa-car-alt"></i>&nbsp Used Cars</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="contact.php"><i class="fas fa-phone"></i>&nbsp Contact</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="about.php"><i class="fas fa-building"></i>&nbsp About</a>
	    </li>
	  </ul>
	  <ul class="navbar-nav ml-auto">
  	<?php
  	if (isset($_SESSION["email"])) {
  	?>
	  	<li class="nav-item">
	      <a class="nav-link" href="profile.php"><i class="fas fa-user-circle fa-2x"></i></a>
	    </li>
	  	<li class="nav-item right-align-navs">
	      <a class="nav-link btn btn-danger btn-sm" href="logout.php">Sign out &nbsp<i class="fas fa-sign-out-alt"></i></a>
	    </li>
  	<?php	
  	}else{
  	?>
	    <li class="nav-item dropdown">
	        <a class="btn btn-success btn-sm" href="#" id="sign_in_btn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          <i class="fas fa-sign-in-alt"></i>&nbsp Sign in
	        </a>
	        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sign_in_btn">
	        	<form action="index.php" method="POST" class="px-4 py-3" id="sign_in_form">
				    <div class="form-group">
				      <label for="email"><i class="fas fa-at"></i> Email address</label>
				      <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="email@example.com">
				    </div>
				    <div class="form-group">
				      <label for="password"><i class="fas fa-key"></i> Password</label>
				      <input type="password" class="form-control form-control-sm" id="password" name="password" placeholder="Password">
				    </div>
				    <input type="submit" name="signin" value="Sign in" class="btn btn-primary btn-sm" id="sign_in_btn">
				</form>
	          	<div class="dropdown-divider"></div>
	          	<h6 class="dropdown-header">New around here?</h6>
	          	<a class="dropdown-item btn-sm" id="sign-up-btn" href="signup.php"><i class="fas fa-user-plus"></i>&nbsp Sign Up</a>
	        </div>
	    </li>
    <?php
	}
	?>
	  </ul>
	</div>
  </div>
</nav><!-- navbar ends -->