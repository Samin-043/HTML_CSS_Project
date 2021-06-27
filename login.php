<?php
session_start();

	include("connection.php");
	include("functions.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		
		
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			$query = "select * from user where user_name = '$user_name' limit 1";
			
			$result = mysqli_query($con,$query);
			
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					if($user_data['password'] == $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location:homepage.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!doctype html>
<html>
<head>
	
	<title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/mystylesheet.css" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>

<body>

	<div class="login-form">
		<form method="POST">
			<div class="title">
                <h2>LOGIN</h2>
            </div>
			<div class="form-group">
				<label>Name</label>
                <input class="form-control" type="text" name="user_name" placeholder="Enter your name" required="required"></input>
            </div>
			<div class="form-group">
				<label>Password</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your password" required="required"></input>
            </div>
			<div class="form-group">
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
            </div>
			<a href="signup.php">CLICK TO SIGNUP</a>
			
			
		
		</form>
	
	</div>
	<script type="text/javascript " src="js/bootstrap.min.js "></script>

	
</body>

</html>