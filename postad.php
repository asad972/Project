<!DOCTYPE html>

<?php
session_start();
require_once "connection.php";
?>
<html>
<head>

	<title>Gari</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/icon1.png" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
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
	<!--<div class="jumbotron">
  <h2 class="display-4 text-center">POST AD.</h2>

	</div>
	<div class="text-center post_ad">
		<h3>INCLUDE SOME DETAILS</h3>
		<form class="form-horizontal">
    <div class="row">
    <div class="col-xs-6">

    <div class="form-group">
        <label class="control-label col-xs-5">Make </label>
        <div class="col-xs-7">
            <input type="text" class="form-control" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-5">Year</label>
        <div class="input-group col-xs-7">
            <input type="text" class="form-control" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-5">Condition</label>
        <div class="input-group col-xs-7">
            <input type="text" class="form-control" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-5">Register</label>
        <div class="input-group col-xs-7">
            <input type="text" class="form-control" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-5" style="padding-left: 20px 40px;">Description</label>
        <div class="input-group col-xs-7">
            <input type="text" class="form-control" style="padding-left: 20px 40px;" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-5" style="padding-left: 20px 40px;">Price</label>
        <div class="input-group col-xs-7">
            <input type="text" class="form-control" style="padding-left: 20px 40px;" />
        </div>
    </div>	
 <div class="form-group">
    	<label for="avatar">Upload Picture</label>

		<input type="file" class=" upload_pic" 
		       id="avatar" name="avatar"
		       accept="image/png, image/jpeg">

	</div>




    </div>
    </div>
</form>
	</div>
-->
	<?php
/*if(!isset($_SESSION['U_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}*/

if (isset($_POST['insert_gari'])) {
    //getting text data from the fields
    $gari_name = test_input($_POST['gari_name']);
    $gari_cat = test_input($_POST['gari_cat']);
    $gari_brand = test_input($_POST['gari_brand']);
    $gari_price = test_input($_POST['gari_price']);
    $gari_model=test_input('gari_model');
    $gari_keyword = test_input($_POST['gari_keyword']);
    //getting image from the field
    $gari_image_name = $_FILES['gari_image']['name'];
    $gari_image_tmp = $_FILES['gari_image']['tmp_name'];
    $gari_image_size = $_FILES['gari_image']['size'];

    if (!preg_match("/[a-zA-Z0-9]+/", $gari_name) || strlen($gari_name) < 2) {
        $response = array(
            "type" => "warning",
	"message" => "Enter Valid Product title."
	);
	} else if ($gari_cat == "Select Category") {
	$response = array(
	"type" => "warning",
	"message" => "Select Product Category."
	);
	} else if ($gari_brand == "Select Brand") {
	$response = array(
	"type" => "warning",
	"message" => "Select Product Brand."
	);
	} else if (!preg_match("/\d+(.\d+)?/", $gari_price && $gari_price > 0)) {
	$response = array(
	"type" => "warning",
	"message" => "Enter Valid Product Price."
	);
	} else if (file_exists($gari_image_tmp)) {

	$image_info = getimagesize($gari_image_tmp);
	$width = $image_info[0];
	$height = $image_info[1];
	$target_directory = "gari_image/";
	$allowed_image_extension = array("png", "jpg", "jpeg");

	// Get image file extension
	$image_extension = pathinfo($gari_image_name, PATHINFO_EXTENSION);

	// Validate file input to check if is not empty
	// Validate file input to check if is with valid extension
	if (!in_array($image_extension, $allowed_image_extension)) {
	$response = array(
	"type" => "warning",
	"message" => "Upload valid images. Only PNG and JPEG are allowed."
	);
	//echo $result;
	}    // Validate image file size
	else if ($gari_image_size > 2000000) {
	$response = array(
	"type" => "warning",
	"message" => "Image size exceeds 2MB"
	);
	}    // Validate image file dimension
	else if ($width > "1000" || $height > "800") {
	$response = array(
	"type" => "warning",
	"message" => "Image dimension should be within 1000X800"
	);
	} else {
	$updated_img_name = "user_" . time() . "_" . $gari_image_name;
	$target = $target_directory . $updated_img_name;
	if (move_uploaded_file($gari_image_tmp, $target)) {

	$insert_product = "insert into gari (gari_brand, gari_cat,gari_name,gari_model,gari_price,gari_image,gari_keyword)
	VALUES ('$gari_brand','$gari_cat','$gari_name','$gari_model','$gari_price','$updated_img_name','$gari_keyword');";
	$insert_pro = mysqli_query($con, $insert_product);
	if ($insert_pro) {
	//header("location: ".$_SERVER['PHP_SELF']);
	$response = array(
	"type" => "success",
	"message" => "Product uploaded successfully."
	);
	}


	} else {
	$response = array(
	"type" => "warning",
	"message" => "Problem in uploading image files."
	);
	}
	}
	}
	}

	function test_input($data)
	{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}

	?>

	<h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span>
		GARI </h1>
	<?php if (!empty($response)) { ?>
	<div class="alert alert-<?php echo $response["type"]; ?>">
	<?php echo $response["message"]; ?>
</div>
<?php } ?>
<form action="" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
			<label for="gari_name" class="float-md-right"> <span class="d-sm-none d-md-inline"> GARI </span>
				Name:</label>
		</div>
		<div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="fas fa-file-signature"></i></div>
				</div>
				<input type="text" class="form-control" id="gari_name" name="gari_name"
					   placeholder="Enter Product Title"
				<?php
                    if (@$response["type"] == "warning") {
                        echo "value='$gari_name'";
                    }
                    ?>
				>
			</div>
		</div>
		<div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
			<label for="gari_cat" class="float-md-right"><span class="d-sm-none d-md-inline"> GARI </span>
				Category:</label>
		</div>
		<div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="fas fa-list-alt"></i></div>
				</div>
				<select class="form-control" id="gari_cat" name="gari_cat">
					<option>Select Category</option>

					<?php
                    $getCatsQuery = "select * from categori";
                    $getCatsResult = mysqli_query($con, $getCatsQuery);
                    while ($row = mysqli_fetch_assoc($getCatsResult)) {
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];
                        if (@$response["type"] == "warning" && $cat_id == $gari_cat) {
                            echo "<option value='$cat_id' selected>$cat_title</option>";
					} else {
					echo "<option value='$cat_id'>$cat_title</option>";
					}
					}
					?>
				</select>
			</div>
		</div>
	</div>
	<div class="row my-3">
		<div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
			<label for="gari_brand" class="float-md-right"> <span class="d-sm-none d-md-inline"> GARI </span>
				Brand:</label>
		</div>
		<div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="fas fa-stamp"></i></div>
				</div>
				<select class="form-control" id="gari_brand" name="gari_brand">
					<option>Select Brand</option>
					<?php
                    $getBrandsQuery = "select * from brand";
                    $getBrandsResult = mysqli_query($con, $getBrandsQuery);
                    while ($row = mysqli_fetch_assoc($getBrandsResult)) {
                        $brand_id = $row['brand_id'];
                        $brand_title = $row['brand_title'];

                        if ($response["type"] == "warning" && $brand_id == $gari_brand) {
                            echo "<option value='$brand_id' selected>$brand_title</option>";
					} else {
					echo "<option value='$brand_id'>$brand_title</option>";
					}

					}
					?>
				</select>
			</div>
		</div>
		<div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
			<label for="pro_img" class="float-md-right"><span class="d-sm-none d-md-inline"> GARI </span>
				Image:</label>
		</div>
		<div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="far fa-image"></i></div>
				</div>
				<input class="form-control" type="file" id="gari_image" name="gari_image">
			</div>
		</div>
	</div>
	<div class="row my-3">
		<div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
			<label for="gari_price" class="float-md-right"> <span class="d-sm-none d-md-inline"> GARI </span>
				Price:</label>
		</div>
		<div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="fas fa-money-bill"></i></div>
				</div>
				<input class="form-control" id="gari_price" name="gari_price" placeholder="Enter Product Price"
				<?php
                    if (@$response["type"] == "warning") {
                        echo "value='$gari_price'";
                    }
                    ?>
				>
			</div>
		</div>
		<div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
			<label for="pro_kw" class="float-md-right"><span class="d-sm-none d-md-inline"> GARI </span>
				Keyword:</label>
		</div>
		<div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="fas fa-key"></i></div>
				</div>
				<input class="form-control" type="text" id="gari_keyword" name="gari_keyword"
					   placeholder="Enter Product Keywords">
			</div>
		</div>
	</div>
	<div class="row my-3">
		<div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
			<label for="pro_desc" class="float-md-right"><span class="d-sm-none d-md-inline"> GARI </span>
				Model:</label>
		</div>
		<div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="far fa-comment-alt"></i></div>
				</div>
				<textarea class="form-control" type="file" id="gari_model" name="gari_model"
						  placeholder="Enter Product Detail"></textarea>
			</div>
		</div>
	</div>
	<div class="row my-3">
		<div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
		<div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
			<button type="submit" name="insert_gari" class="btn btn-primary btn-block"><i class="fas fa-plus"></i>
				Insert Now
			</button>
		</div>
	</div>
</form>













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
