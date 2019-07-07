<!DOCTYPE html>
<html>
<head>
	<title>Forgot</title>
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
		
		  input[type=text], input[type=password]
		{
		  width: 33%;
		  padding: 15px ;
		  margin: 5px 0 22px 0;
		  display: inline-block;
		  border: none;
		  background: #f1f1f1;
		  text-align: center; 
		  border-radius: 6px;
		  border-style: solid;
		  border-width: 1px;
		}

		input[type=text]:focus
		{
		  background-color: grey;
		  outline: none;
		}

		input[id="email"]
		{
			width: 88%;
		}

		.container2 
		{
			padding: 30px;
		    background-color: white;
		    border-radius: 0px;
		    height: 350px;
		    width: 300px;
		    background-color: #C0C0C0; 
		    border-color: black;
		}
	
		.container 
		{
		 
		  
		  border:none;
		}

		.continue
		{
		  background-color:blue;
		  color: white;
		  padding: 5px 5px;
		  margin: 6px 0;
		  border: none;
		  cursor: pointer;
		  width: 99%;
		  height: 46px;
		  opacity: 2;
		  border-radius: 2px;
		}

		.continue:hover
		{
			opacity: 50;
			cursor:pointer;
			background-color:#252981;
		}

		h2
		{
			font-size: 20px;
		    color: black;
		    font-weight: 400;
		    margin: 0px 5px;
		    font-style: italic;
		}

		h1
		{
			font-size: 30px;
			font-family: "Trebuchet MS", Helvetica, sans-serif;
			color: black;
			margin-bottom: 25px;
		}

	
	</style>
</head>

<body>
<div class="container-fuild">
	<div class="header-top clearfix">
		<ul>
			<li><a href="https://www.facebook.com/">Connect with Facebook</a></li>
			<li class="header-a"><a href="signup.html">Sign up</a></li>
			<li class="header-a"><a href="signin.html">Sign in</a></li>
		</ul>
	</div>
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
				        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
<div class="container" align="center">
	<div class="container2" align="center">
		<h1>Forgot Password</h1>
	<form>
		<h2>Enter your email to reset password.</h2>
		<label></label><input onblur="valid3()" type="text" id="email" placeholder="Type Your Email"><br>
		<button type="button" class="continue" onclick="forgot1()">Continue</button><br>
	</form>
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
<script type="text/javascript">
var fl=0;
var fl2=0;
var fl3=0;
var fl4=0;
var fl5=0;
var fl6=0;
var fl7=0;


var mail;

	function addEntry()
	{
		if(fl=='1'&&fl2=='1'&&fl3=='1'&&fl4=='1'&&fl5=='1'&&fl6=='1'&&fl7=='1'){
			/*var age = document.getElementById("age").value;
			var name = document.getElementById("name").value;
			var username = document.getElementById("username").value;
			var email = document.getElementById("email").value;
			tBody = document.getElementById("table_body");
			var row = tBody.insertRow(tBody.rows.length);
			var col1,col2,col3,col4;
			col1 = row.insertCell(0);
			col2 = row.insertCell(1);
			col3 = row.insertCell(2);
			col4 = row.insertCell(3);
			col1.innerHTML = age;
			col2.innerHTML = name;
			col3.innerHTML = username;
			col4.innerHTML = email;*/
		}
		else
		{
			document.getElementById("wrg").innerHTML="ERROR";
		}
	}



	function valid3()
	{	
			var regemail= /^\w([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			mail =document.getElementById("email").value;
			if(regemail.test(mail))
		{
			document.getElementById("cp").innerHTML="valid";
			fl3=1;
		}
		else
		{
			document.getElementById("cp").innerHTML="invalid";
			fl3=0;
		}
	}

</script>
	
</body>
</html>