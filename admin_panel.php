<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/adminstylesheet.css" rel="stylesheet">

	<title>Admin Panel</title>
	
	
	
  </head>
	
  <body>
    
	<div id="header">
		<center> 
			<img src="images/admin_pic_50.png" alt="adminLogo" id="adminLogo">
			<br> Admin panel
		</center>
	</div>
	
	<div id="sidebar">
		<ul>
			<li><a href="Admin_AddItem.php"	>ADD</a></li>
			<li><a href="Admin_DeleteItem.php">Delete</a></li>
			<li><a href="Admin_UpdateItem.php">Update</a></li>
		</ul>
	</div>
	
	<div id="data">
		<br><br>
		<center>
		
		<form action="" method="POST" enctype="multipart/form-data">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Image</th>
						<th>Price</th>
						<th>Description</th>
					</tr>
				</thead>
				<?php
			
			include 'connection.php';
			$sql = "SELECT id, name, image, price,description FROM product";
			
			$result = mysqli_query($con, $sql);
			
			while($row = mysqli_fetch_array($result))
			{
				?>
				<tr>
					<td> <?php echo $row['id'];?> </td>
					<td> <?php echo $row['name'];?> </td>
					<td> <?php echo	 '<img src="images/' .$row['image'].'" width:"150px;" height="150px;" alt="Image">'?> </td>
					<td> <?php echo $row['price'];?> </td>
					<td> <?php echo $row['description'];?> </td>
				</tr>
				<?php
				
			 }
			 ?>
			</table>
			</form>
			</center>	
		
	</div>
	
	
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
  </body>
</html>