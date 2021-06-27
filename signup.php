<?php
session_start();

	include("connection.php");
	include("functions.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		
		
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			$query = "insert into user (user_name,email,phone,password) values('$user_name','$email','$phone','$password')";
			
			mysqli_query($con,$query);
			
			header("Location:login.php");
			die;
			
		}else
		{
			echo "Please enter some valid information!";
		}
	}

	
?>

<!doctype html>
<html>
<head>
	
	<title>SIGNUP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/mystylesheet.css" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>

<body>

	<div class="signup-form">
		<form method="POST">
			<div class="title">
                <h2>SIGNUP</h2>
            </div>
			<div class="form-group">
				<label>Name</label>
                <input class="form-control" type="text" name="user_name" placeholder="Enter your name" required="required"></input>
            </div>
			<div class="form-group">
				<label>Email</label>
                <input class="form-control" type="email" name="email" placeholder="Enter your email" required="required"></input>
            </div>
            <div class="form-group">
				<label>Phone</label>
                <input class="form-control" type="phone" name="phone" placeholder="Enter your phone"></input>
            </div>
			<div class="form-group">
				<label>Password</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your password" required="required"></input>
            </div>
			<div class="form-group">
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
            </div>
			<a href="login.php">CLICK TO LOGIN</a>
		
		</form>
	
	</div>
	<script type="text/javascript " src="js/bootstrap.min.js "></script>

	
</body>

</html>