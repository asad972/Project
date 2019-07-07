<?php
session_start();
include ('connection.php');
$msg0='';
$msg1='';
$msg2='';
$msg3='';
if(isset($_POST['submit']))
{
	$cur=$_SESSION['password'];
	$email=$_SESSION['email'];
	$c=$_POST['c'];
	$n=$_POST['n'];
	$r=$_POST['r'];
	if(empty($c))
	{
		$msg1="<div class='error'>Please Enter Your Current Password</div>";
		echo $msg1;
	}
	else if($c!=$cur)
	{
		$msg1="<div class='error'>This is not the Current Password</div>";
	}
	else if(empty($n))
	{
		$msg2="<div class='error'>Please Enter New Password</div>";
	}
	else if(empty($r))
	{
		$msg3="<div class='error'>Please Re-Enter your New Password</div>";
	}
	else if($n!=$r)
	{
		$msg3="<div class='error'>Incorrect Re-Type Password</div>";
	}
	else
	{
		$q="UPDATE user SET Password='$n' WHERE Email='$email'";
		$res=mysqli_query($con,$q);
		$msg0="<div class='success'>Succeeded!!</div>";
		$_SESSION['email']=$email;
		header("location:pofile.php");


	}
}

?>
<html>

<head>
	<style type="text/css">
	.error {color: #FF0000;}
	</style>
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

        <ul class="list-unstyled nomargin pull-right signin">

            <li><a href="https://www.facebook.com/">Connect with Facebook</a></li>
            <li class="dropdown" id="user-menu"><a href="javascript:void(0)" class="username dropdown-toggle" data-toggle="dropdown" rel="nofollow" title="Welcome <?php echo $_SESSION['fname']; ?>!">Welcome <strong style="color:orange;"><?php echo $_SESSION['fname']; ?>!</strong></a></li>
            <li> <a href="pofile.php">Profile|</a></li>
            <li ><a  href="signin.php"><strong style="color:red;">Logout|</strong></a></li>
            
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
                        <a class="nav-link " href="#">Post ad</a>
                      </li>
                    </ul>
                  </div>
            </nav>
        </div>
    </div>
	<form method="POST" enctype="multipart/form-control">
<div type="container">
	<div class="form-group">
		<input type="text" placeholder="Current Password" name="c">
		<?php echo $msg1; ?>
	</div>
	<div class="form-group">
		<input type="text" placeholder="New Password" name="n">
		<?php echo $msg2; ?>
		
	</div>
	<div class="form-group">
		<input type="text" placeholder="Re-Type New Password" name="r">
		<?php echo $msg1; ?>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" value="Change">
	</div>
	
</div>
</form>
</body>
</html>
