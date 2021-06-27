<!doctype html>

<html lang="en">
  <head>
    
	
	
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/adminstylesheet.css" rel="stylesheet">

	<title>Add Book</title>
	
	<style>
	body
	{
		background-image:url("images/add_book_pic_1400.jpg");
	}
		
	</style>
	
	<?php
	error_reporting(0);
	$msg="";
	
	include ('connection.php');
	
	$name = $_POST['b_name'];
	$price = $_POST['b_price'];
	$descrip = $_POST['b_description'];
	
	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "images/".$filename;
	
	$sql = "INSERT INTO product(name,image,price,description) VALUES ('$name','$filename','$price','$descrip')";
	    
	
	if(!$_POST['Add'])
	{
		echo "all fields required";
	}
	else
	{	

		if(mysqli_query($con,$sql))
		{
			echo "data created success";
			if (move_uploaded_file($tempname, $folder))  
			{
				$msg = "Image uploaded successfully";
			}
			else
			{
				$msg = "Failed to upload image";
			}
		}
		else
		{
			echo "wrong";
		}
	}
	
	?>
	
  
  </head>
	
  <body>
    
	
	<center>	
	<h1 style="color:#3498db"> ADD BOOK </h1>
	</center>
	<div class="container" style="color:#e74c3c">
	 <div class="row">
	
		<div class="col-md-12">
		<form action="Admin_AddItem.php" method="POST" enctype="multipart/form-data"> 	
			
			<div class="form-group mb-3">
					<label>Name</label>
					<input type="text" name="b_name" class="form-control" required></input>
			</div>
			
			<div class="form-group mb-3">
					<label>Select image</label>
					<input type="file" name="uploadfile" class="form-control required" value=""/>
			</div>
			
			<div class="form-group mb-3">
			         <label>Price</label>
			         <input type="number_format" name="b_price" class="form-control" required></input>
			</div>
			<div class="form-group mb-3">
					<label>Description</label>
	               <input type="text" name="b_description" class="form-control" required></input>
			</div>
			
			 
			<div class="form-group mb-3">
				<input type="Submit" name="Add" value="Create" class="btn btn-success">
			</div> 
			
			
			<!--<div class="form-group mb-3">
				<button onclick="myFunction()" value="Create" class="btn btn-success">Add</button>
				<script>
				function myFunction() 
				{	
					alert("Hello\nHow are you?");
				}
				</script>
			</div>-->
			
			</form>
			</div>	
		
		
	</div>
	</div>
	
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
  </body>
</html>