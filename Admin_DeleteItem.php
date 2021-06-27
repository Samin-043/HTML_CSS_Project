<!doctype html>

<html lang="en">
  <head>
    
	
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/adminstylesheet.css" rel="stylesheet">

	<title>Untitle</title>
	
	
	<?php
	error_reporting(0);
	
	include ('connection.php');
	
	$ID = $_POST['b_id'];
	
	$sql = "DELETE FROM product WHERE id=$ID";
	    
	
	if(!$_POST['Add'])
	{
		echo "all fields required";
	}
	else
	{
		if(mysqli_query($con,$sql))
		{
			echo "Delete success";
		}
		else
		{
			echo "wrong";
		}
	}
	
	?>
	
  
  </head>
	
  <body>
    
	
	
	<div class="container">
	 <div class="row">
	
		<div class="col-md-12">
		<form action="Admin_DeleteItem.php" method="POST" enctype="multipart/form-data"> 	
			
			<div class="form-group mb-3">
					<label>ID</label>
					<input type="number_format" name="b_id" class="form-control"></input>
			</div>
			
			<div class="form-group mb-3">
				<input type="Submit" name="Add" value="Delete" class="btn btn-success">
			</div>
			
		</form> 
		</div>
		
	</div>
	</div>
		
	
	
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
  </body>
</html>