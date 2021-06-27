<?php
session_start();
	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
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
					<li>REGISTER</li>
					<li>ADMIN PANEL</li>
					<li>ALL PRODUCT</li>
					
				</ul>
			</div>
		</div>
	</div>
	
	<div class="au_banner">
		<div class="au_banner-text">ABOUT US</div>
	</div>
	
	<div class="au_text">
		<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,<br> 
		   cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.<br>
		   No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. <br>
		   Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición,<br>
		   como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
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