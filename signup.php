<?php
session_start();
?>
<html>

<head>

	
	<?php
	include ('connection.php');
		$msg1='';
			$msg2='';
			$msg3='';
			$msg4='';
			$msg5='';
			$msg6='';
			$msg7='';
			
		if (isset($_POST['submit']))
		{
			

			$U_first_name=$_POST['U_first_name'];
			$U_last_name=$_POST['U_last_name'];
			$U_email=$_POST['U_email'];
			$U_password=$_POST['U_password'];
			$c_pass=$_POST['confirm_password'];
			$checkbox=isset($_POST['check']);
			if (empty($U_first_name))
			 {
    			$msg1 = "<div class='error'>Name is required</div>";
  } 
				
				else if(!preg_match("/^[a-zA-Z ]*$/",$U_first_name))
		{
				$msg1 = "<div class='error'>This value seems to be invalid</div>";
		}

  			


			else if (empty($U_last_name))
			 {
    			$msg2 = "<div class='error'>Last Name is required</div>";
  } 
			  
				
			else if(!preg_match("/^[a-zA-Z ]*$/",$U_last_name))
		{
				$msg2 = "<div class='error'>This value seems to be invalid</div>";
		}

  			

else if(!filter_var($U_email,FILTER_VALIDATE_EMAIL))
{
	$msg3= "<div class='error'>Enter Valid Email</div>";
}
$q="select *from user where U_email='$U_email' ";
	$res=mysqli_query($con,$q);
if(mysqli_num_rows($res)>0)
	{
		$msg3="<div class='error'>This Email Already Exists</div>";

	}

else if(strlen($U_password)<5)
{
	$msg5="<div class='error'>Your Password must contain at least 5 characters</div>";
}
else if($U_password!=$c_pass)
{
	$msg6="<div class='error'>Password Do not Match</div>";	
}
else if ($checkbox!='on') {
	$msg7="<div class='error'>Please Agree our Terms and Conditions</div>";
}
else{
	$file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

	$sql="insert into user(U_first_name,U_last_name,U_email,U_password) values('$U_first_name','$U_last_name','$U_email',$U_password')";
	$re=mysqli_query($con,$sql);
	$_SESSION['U_email']=$U_email;
	$_SESSION['U_first_name']=$U_first_name;
	$_SESSION['U_last_name']=$U_last_name;
	$_SESSION['U_password']=$U_password;
	header('location:admin.php');
}				
}
?>		

		

	<title>SignUp|Gari.com</title>

	<link rel="shortcut icon" href="images/icon1.png" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<style type="text/css">
	
	#div{
		margin-top: 100px;
	}
	#div2{
		background-color: black;
		color: white;
		border-radius: 10px;
		width: 400px;
	}
	.error {color: #FF0000;}
	a:hover{
		color: grey;
	}

	</style>

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
	<div class="container clearfix" >
		<div class="header-bottom col-lg-12 nav-edit clearfix ">
			<nav class="navbar navbar-expand-lg clearfix">
				<a class="navbar-brand col-lg-6 float-left" href="index.php">
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
				        <a class="nav-link " href="postad.php">Post ad</a>
				      </li>
				    </ul>
				  </div>
			</nav>
		</div>
		<div  class="container" id="div">
			<div class="login-form col-md-4 offset-md-4">
				<div class="jumbotron" style="margin-top:20px;padding-top:20px;" id="div2">
					<h3 align="center">SignUp</h3><br>
					<form method="POST" enctype="multipart/form-data">
						
						<div class="form-group">
							<label>First Name:</label>
							<input type="text" class="form-control" id="U_first_name" name="U_first_name" placeholder="First Name">
							<?php echo $msg1; ?>					
						</div>
						<div class="form-group">
							<label>Last Name:</label>
							<input type="text" class="form-control" id="U_last_name" name="U_last_name" placeholder="Last Name">
							<?php echo $msg2; ?>
						</div>
						<div class="form-group">
							<label>Email:</label>
							<input type="text" class="form-control" name="U_email" placeholder="Your Email">
							<?php echo $msg3; ?>
						</div>
						<div class="form-group">
							<label>Password:</label>
							<input type="U_password" class="form-control" name="U_password" placeholder="Enter Password">
							<?php echo $msg5; ?>
						</div>
						<div class="form-group">
							<label>Confirm Password:</label>
							<input type="U_password" class="form-control" name="confirm_password" placeholder="Re-Enter Password">
							<?php echo $msg6; ?>
						</div><br>
						<div class="form-group">
							
							<input type="checkbox"  name="check" />
							I Agree the terms and conditions
							<?php echo $msg7; ?>
						</div><br>
						<div class="form-group">
							<label>Choose Profile Picture:</label>
							<input type="FILE" id="image" name="image" />
							
							
						</div><br>
						
						<a href="signin.php">Already have an account</a><p></p>
						<center><input type="submit" id="submit" name="submit" value="Create Account" class="btn btn-primary" style="width:300px;"></center>
						
					</form>

				</div>
			</div>
		</div>
		<section id="footer" style="margin-top: 60px;">
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