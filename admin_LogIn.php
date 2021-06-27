<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin_log_style.css" rel="stylesheet">
	<title>Admin Login page</title>
	
	<?php
		
		include ('connection.php');
		//$user = $con->real_escape_string(htmlspecialchars(trim($_POST['Name'])));
		//$password = function_that_encrypts($Password);
		
		$user = $con->real_escape_string(htmlspecialchars(trim($_POST['Name'])));
		$pass = $con->real_escape_string(htmlspecialchars(trim($_POST['Password'])));
		
		$query = "SELECT Name, Password FROM login WHERE Name = '$user' and Password = '$pass'";
		//$query = "SELECT `username` FROM `users` WHERE `username` = '$user'";

		$result = mysqli_query($con, $query);
		
		
		
			if(mysqli_num_rows($result) > 0)
				{
					echo "Welcome Admin";
					header('Location:admin_panel.php');
					die();
				}
				
			/*if(mysqli_query($con,$sql))
			{
				echo "data created success";
				
			
			}
			else
			{
				echo "wrong";
			}*/
		//}

	
	?>
  
  </head>
  <body>
 
  
		
			<form action="Admin_Login.php" method="POST" align="center" id="frm">
				<div class="form-group mb-3">
					<label>Name</label>
					<input type="text" name="Name" placeholder="Enter your name" class="form-control"></input>
				</div>

				<div class="form-group mb-3">
					<label>Password</label>
					<input type="password" name="Password" class="form-control" placeholder="Enter your password"></input>
				</div>
				<center>
				<div class="form-group mb-3">
					<input type="submit" value="Submit" class="btn btn-success">
				</div>
				</center>
			</form>
	

	
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>