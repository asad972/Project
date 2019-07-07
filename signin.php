<?php
include ('connection.php');
session_start();
?>
<html>

<head>

    
    <?php
    $_SESSION['U_email']='';
        $msg0='';
        $msg1='';
            $msg2='';        
        if (isset($_POST['submit']))
        {
            $U_email=$_POST['U_email'];
            $U_password=$_POST['U_password'];
            if(empty($U_email))
            {
                $msg1="<div class='error'>Please Enter U_email</div>";
            }
            else if(empty($U_password))
            {
                $msg2="<div class='error'>Please Enter Password</div>";
            }
                $q="SELECT *FROM user where U_email='$U_email' and U_password='$U_password'";
                $res=mysqli_query($con,$q);

                if(mysqli_num_rows($res)>0)
                {
                              while($row=mysqli_fetch_assoc($res))
                              {



                        $_SESSION['U_first_name']=$row['FirstName'];
                        $_SESSION['U_email']=$row['U_email'];
                        $_SESSION['U_last_name']=$row['LastName'];           
                                
                            }
                            header('location:admin.php');
}
else
{
    $msg0="<div class='error'>Invalid Email or Password!</div>";
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
                    <h3 align="center">SignIn</h3><br>
                    <form method="POST" enctype="multipart/form-data">
                        <?php echo $msg0; ?>
                        
                        <div class="form-group">
                            <label>U_email</label>
                            <input type="text" class="form-control" id="U_email" name="U_email" placeholder="U_email">
                            <?php echo $msg1; ?>                    
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="U_password" class="form-control" name="U_password" placeholder="Password">
                            <?php echo $msg2; ?>
                        </div>
                        <br>
                            <a href="signup.php">Do not have an account?</a>
                        
                        <p></p>
                        <center><input type="submit" name="submit" value="Login" class="btn btn-success" style="width:300px;" ></center>
                        
                    </form>

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

    </body>
    </html>