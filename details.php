<?php
session_start();
	include("connection.php");
	
	$id=$_GET['id'];
	
	$query="select * from product where id=$id";
	
	$result=mysqli_query($con,$query) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($result);
	


?>

<!doctype html>
<html>
<head>
    <title>HELLO READER</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/customstylesheet.css" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
			<img src="images/booklogo.png" class="logo">
			<h1 class="heading">HELLO READER</h1>
			</div>
		
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul>
					<li><a href="homepage.php">HOME</a></li>
					<li><a href="aboutpage.php">ABOUT US</a></li>
					<li><a href="teampage.php">TEAM</a></li>
					<li><a href="contactpage.php">CONTACT US</a></li>
					<li><a href="signup.php">REGISTER</a></li>
					<li><a href="admin_LogIn.php">ADMIN PANEL</a></li>
					<li><a href="productpage.php">ALL PRODUCT</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
					
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="title text-center" style="color:red;">PRODUCT DETAILS</h1>
				<div class="image-heading text-center" style="font-size:30px;text-align:center;
															color:gray;
															background-color:#EEE9F3;
														">
					<?php echo $row["name"]; ?>
				</div>
				
				<div class="image text-center" style="width:100%; margin-top:20px;font-size:30px;">
					<img src="images/<?php echo $row["image"]; ?>"/> <br/>
				</div>
				<div class="desc-heading text-center" style="font-size:30px;background-color:#EEE9F3;color:gray;margin-top:20px;">
				<h3>DESCRIPTION</h4>
				</div>
				<div class="desc-text" style="font-size:22px;">
					<p><?php echo $row["description"];?></p>
				</div>
			
			</div>
		</div>
	
	</div>
	
		
	
	 <div class="ash">

        <div class="col-md-12 p text-center ">
            <div>

                <h4 style="color: white ">© Copyright 2021 All Rights Reserved</h4>
            </div>
        </div>

    </div>
	
	<script type="text/javascript " src="js/bootstrap.min.js "></script>


</body>



</html>
