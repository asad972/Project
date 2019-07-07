<?php
session_start();
if(!isset($_SESSION['U_email']))
{
	header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>


	<title>Gari</title>

	<link rel="shortcut icon" href="images/icon1.png" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/icon1.png" />
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>

	<style type="text/css">
.li a:hover{
	color: black;
}

}
	</style>

</head>

<body>

<div class="container-fuild">
	<div class="header-top clearfix">

		<ul>

			<li><a href="https://www.facebook.com/">Connect with Facebook</a></li>
			<li class="dropdown" id="user-menu"><a href="javascript:void(0)" class="username dropdown-toggle" data-toggle="dropdown" rel="nofollow" title="Welcome <?php echo $_SESSION['U_first_name']; ?>!">Welcome <strong style="color:orange;"><?php echo $_SESSION['U_first_name']; ?>!</strong></a></li>
			<li> <a href="pofile.php?U_email=<?php echo $_SESSION['U_email'] ?>">Profile|</a></li>
			<li ><a  href="signin.php"><strong style="color:red;">Logout|</strong></a></li>
			
		</ul>
	</div>
	<form method="GET" action="profile.php">
	<div class="container clearfix" style="margin-right: 0;">
		<div class=" col-lg-12 nav-edit clearfix ">
			<nav class="navbar navbar-expand-lg clearfix navbar-static-top">
				<a class="navbar-brand col-lg-6 float-left" href="#">
			    	<img class="d-inline-block align-top" src="images/navlogo.png" width="90px" height="45px" alt="">
			    </a>
			  
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

			    	<span class="navbar-toggler-icon"></span>

			  	</button>

				  <div class="collapse navbar-collapse nav-list" id="navbarSupportedContent clearfix">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item">
				        <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
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
	<div class="container-fuild" >
		<div class="back  img-fluid">
			<div class="input-tags">
				<div class="main-head col-lg-12 text-center">
					<h1>Find Used Cars in Pakistan</h1><br>
					<h3 class="col-lg-12 text-center" style="margin-bottom: 40px;">"With thousands of cars, we have just the right one for you"</h3>
				</div>
				<div class="input-group col-lg-12 text-center">
				  <input type="text" class="form-control col-lg-5" placeholder="Car or Model" aria-describedby="basic-addon1">
				  <input type="text" class="form-control col-lg-5" placeholder="All Cities" aria-label="...">
		       
		        <!-- /btn-group -->
		        <a href="#"  class="button-search col-lg-2">
			        <div>
			        	Search
					</div>
				</a>
			</div>
		</div>
	</div>
</div> <!-- container fulid -->
<div class="deal text-center">
	<h2>-- WE DEAL IN --</h2>
</div>
<div class="container text-center">
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active try">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="images/toyota.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="images/suzuki.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="images/kia.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="images/bmw.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                          

                            <div class="carousel-item">
                                <div class="row try">
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="images/nissan.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="images/honda.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="images/mer.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="images/kia.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
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
						<li><a href"#"><i class="fa fa-angle-double-right"></i>Honda</a></li>
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
						<li class="list-inline-item"><a href="#"<i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#"<i class="fa fa-instagram"></i></a></li>
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
 <!-- container fulid -->
</form>
</body>
</html>