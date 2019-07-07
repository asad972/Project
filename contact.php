<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="images/icon1.png" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>
<div class="container-fuild">
	<div class="header-top clearfix">
		<ul>
			<li><a href="https://www.facebook.com/">Connect with Facebook</a></li>
			<li class="header-a"><a href="signup.php">Sign up</a></li>
			<li class="header-a"><a href="signin.php">Sign in</a></li>
		</ul>
	</div>
	<div class="container clearfix" style="margin-right: 0;">
		<div class="header-bottom col-lg-12 nav-edit clearfix ">
			<nav class="navbar navbar-expand-lg clearfix">
				<a class="navbar-brand col-lg-6 float-left" href="#">
			    	<img class="d-inline-block align-top" src="images/navlogo.png" width="90px" height="45px" alt="">
			    </a>
			  
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

			    	<span class="navbar-toggler-icon"></span>

			  	</button>

				  <div class="collapse navbar-collapse nav-list" id="navbarSupportedContent clearfix">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item">
				        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="contact.php">Contact Us</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="About.php">About us</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="team.php">Team</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          USED Cars
				        </a>
				        <div class="dropdown-menu main-color" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item main-color" href="#">Find Cars</a>
				          <a class="dropdown-item main-color " href="#">Used Cars</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item main-color" href="#">Price Calculator</a>
				        </div>
				      </li>
				      <li class="nav-item button-edit">
				       <a class="nav-link " href="postad.php">&nbsp&nbsp Post ad &nbsp&nbsp</a>
				      </li>
				    </ul>
				  </div>
			</nav>
		</div>
	</div><!-- navbar ends -->
<div class="container form-top" style="margin-top: 80px;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
			<div class="panel panel-danger">
				<div class="panel-body">
					<form id="reused_form">
					 	<div class="form-group">
					 		<label >Name</label>
					 		<input type="text" name="name" required class="form-control" placeholder="Enter Name">
					 	</div>
					 	<div class="form-group">
					 		<label >Email</label>
					 		<input type="email" name="email" required  class="form-control" placeholder="Enter Email">
					 	</div>
					 	<div class="form-group">
					 		<label >Message</label>
					 		<textarea rows="3" name="message" class="form-control" placeholder="Type Your Message"></textarea>
					 	</div>
						<div class="form-group">
					 		<button class="btn btn-raised btn-lg btn-warning"
					 		type="submit">Send</button>
					 	</div>
					</form>

					<div id="error_message" style="width:100%; height:100%; display:none; ">
					<h4>Error</h4>
					Sorry there was an error sending your form.
					</div>
					<div id="success_message" style="width:100%; height:100%; display:none; ">
					<h2>Success! Your Message was Sent Successfully.</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<section id="footer" style="margin-top: 50px;">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Gari</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>Team</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>Used Cars</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Cars</h5>
					<ul class="list-unstyled quick-links">
						<li><a href"#""><i class="fa fa-angle-double-right"></i>Honda</a></li>
						<li><a href="####"><i class="fa fa-angle-double-right"></i>Suzuki</a></li>
						<li><a href="###"><i class="fa fa-angle-double-right"></i>FAW</a></li>
						<li><a href="##"><i class="fa fa-angle-double-right"></i>BNW</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>Nissan</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Our App</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="#"><i class="fa fa-angle-double-right"></i>iPHONE</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>ANDRIOD</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>WINDOWS</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="###><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="##"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="#col-xs-12" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="#">G A R I</a></u> is a Registered Inc. Lahore [Pakistan]</p>
					<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="#" target="_blank">UCP Boys</a></p>
				</div>
				</hr>
					
			</div>	
		</div>
	</section>
</body>
</html>
