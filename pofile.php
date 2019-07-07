<?php
session_start();
include ('connection.php');
$U_first_name='';
$U_last_name='';
$U_email='';
$U_password='';

if(isset($_GET['U_email']))
{
   $U_email=$_GET['U_email'];
   $q="SELECT * FROM user WHERE U_email='$U_email'";
   $res=mysqli_query($con,$q);
   if(mysqli_num_rows($res)>0)
   {
        while($row=mysqli_fetch_assoc($res))
        {
            $U_first_name=$row['U_first_name'];
            $U_last_name=$row['U_last_name'];
            $U_password=$row['U_password'];
            $image='<img style="border-radius:100px;height:100px;width:100px;" src="data:image/jpeg;base64,'.base64_encode($row['Profile_Image']).'"';

        }
   }
   if(isset($_POST['change']))
   {
        $_SESSION['U_email']=$U_email;
        $_SESSION['U_password']=$U_password;
        $_SESSION['U_first_name']=$U_first_name;
        header("location:change_password.php");
   }
   if(isset($_POST['save']))
   {
     $U_first_name=$_POST['U_first_name'];
        $U_last_name=$_POST['U_last_name'];
        $q="UPDATE user SET U_first_name='$U_first_name',U_last_name='$U_last_name' WHERE U_email='$U_email'";
        $res=mysqli_query($con,$q);
   }
   

}
else if(isset($_SESSION['U_email']))
{


   $U_email=$_SESSION['U_email'];
   $q="SELECT * FROM user WHERE U_email='$U_email'";
   $res=mysqli_query($con,$q);
   if(mysqli_num_rows($res)>0)
   {
        while($row=mysqli_fetch_assoc($res))
        {
            $U_first_name=$row['U_first_name'];
            $U_last_name=$row['U_last_name'];
            $U_password=$row['U_password'];
            $image='<img style="border-radius:100px;height:100px;width:100px;" src="data:image/jpeg;base64,'.base64_encode($row['Profile_Image']).'"';

        }
       
        

        


   }
   if(isset($_POST['change']))
   {
        $_SESSION['U_email']=$U_email;
        $_SESSION['U_password']=$U_password;
        $_SESSION['U_first_name']=$U_first_name;
        header("location:change_password.php");
   }
   if(isset($_POST['save']))
   {
         $U_first_name=$_POST['U_first_name'];
        $U_last_name=$_POST['U_last_name'];
        $q="UPDATE user SET U_first_name='$U_first_name',U_last_name='$U_last_name' WHERE Email='$U_email'";
        $res=mysqli_query($con,$q);
   }
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
    <style type="text/css">

label{
    font-style: italic;
    font-weight: bold;
}
input{
    border:1px;
    border-radius: 5px;
    border-style: dotted;
    text-align: center;
}


    </style>

</head>

<body>

<div class="container-fuild">
    <div class="header-top clearfix">

        <ul class="list-unstyled nomargin pull-right signin">

            <li><a href="https://www.facebook.com/">Connect with Facebook</a></li>
            <li class="dropdown" id="user-menu"><a href="javascript:void(0)" class="username dropdown-toggle" data-toggle="dropdown" rel="nofollow" title="Welcome <?php echo $_SESSION['U_first_name']; ?>!">Welcome <strong style="color:orange;"><?php echo $_SESSION['U_first_name']; ?>!</strong></a></li>
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
                        <a class="nav-link " href="postad.php">Post ad</a>
                      </li>
                    </ul>
                  </div>
            </nav>
        </div>
    </div style="background-color:black;">
    <form method="POST" enctype="multipart/form-control">
    <div style="margin-top:100px;background-color:black;margin-left:400px;text-align: center;width:100px;height:100px;border-style:dashed;border:1px solid #000;border-radius:100px;"><?php echo $image; ?><p></p>
        <div class="form-group">
            <label>First Name</label><br>
            <input type="text" id="U_first_name" name="U_first_name" value="<?php echo $U_first_name;?>">
        </div>
        <br>
        <div class="form-group">
            <label>Last Name</label>
            <   input type="text"id="U_last_name" name="U_last_name" value="<?php echo $U_last_name;?>">
        </div>
        <br>
<div class="form-group">
    <label>U_password</label>
    <input type="submit" value="Change U_password" name="change">
     </div>   
        

                <div class="form-group">
        <input type="submit" class="btn btn-primary" style="width:300px;" name="save" value="Save Changes">
        </div>
    </div>
</div>


    
</body>
</html>