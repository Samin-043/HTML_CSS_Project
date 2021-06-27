<?php
include("connection.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
		$query = "insert into contact(name,email,message) values ('$name','$email','$message')";
	    $result = mysqli_query($con,$query);
		if(!$result)
		{
			echo "something wrong";
		}else
		{
			echo "<h3>Thank you.Your request submitted</h3>";
		}
}

		
?>

<!doctype html>
<html>
<head>
	
	<title>CONTACT US</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/mystylesheet.css" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>

<body>

	<div class="contact-form">
		<form method="POST">
			<div class="title">
                <h2>CONTACT US</h2>
            </div>
			<div class="form-group">
				<label>Name</label>
                <input class="form-control" type="text" name="name" placeholder="Enter your name" required="required"></input>
            </div>
			<div class="form-group">
				<label>Email</label>
                <input class="form-control" type="email" name="email" placeholder="Enter your email" required="required"></input>
            </div>
			<div class="form-group">
				<label>Message</label>
                <textarea class="form-control" name="message" placeholder="Enter your message here" required="required""></textarea>
            </div>
			<div class="form-group">
                <button class="btn btn-primary" type="submit" name="submit">Send</button>
            </div>
			<a href="homepage.php">BACK TO HOME</a>
		
		</form>
	
	</div>
	<script type="text/javascript " src="js/bootstrap.min.js "></script>

	
</body>

</html>