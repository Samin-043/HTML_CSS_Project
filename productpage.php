<?php
session_start();
	include("connection.php");
	
	
	if(isset($_POST["add_to_cart"]))
	{
		if(isset($_SESSION["shopping_cart"]))
		{
			$item_array_id = array_column($_SESSION["shopping_cart"],"item_id");
			if(!in_array($_GET["id"],$item_array_id))
			{
				$count = count($_SESSION["shopping_cart"]);
				$item_array = array(
				'item_id'  => $_GET["id"],
				'item_name'  => $_POST["hidden_name"],
				'item_price'  => $_POST["hidden_price"],
				'item_quantity'  => $_POST["quantity"]
				);
				$_SESSION["shopping_cart"][$count] = $item_array;
			}else
			{
				echo '<script>alert("Item Already Added")</script>';
				echo '<script>window.location="productpage.php"</script>';
			}
			
		}else
		{
			$item_array = array(
				'item_id'  => $_GET["id"],
				'item_name'  => $_POST["hidden_name"],
				'item_price'  => $_POST["hidden_price"],
				'item_quantity'  => $_POST["quantity"]
			);
			$_SESSION["shopping_cart"][0] = $item_array;
		}
	}
	
	if(isset($_GET["action"]))
	{
		if($_GET["action"] == "delete")
		{
			foreach($_SESSION["shopping_cart"] as $keys => $values)
			{
				if($values["item_id"] == $_GET["id"])
				{
					unset($_SESSION["shopping_cart"][$keys]);
					echo '<script>alert("Item Removed")</script>';
					echo '<script>window.location="productpage.php"</script>';
				}
			}
		}
	}
	
	if(isset($_GET["action"]))
	{
		if($_GET["action"] == "clearall")
		{
			unset($_SESSION["shopping_cart"]);
		}
	}
	
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
	
	<div class="pr_banner">
		<div class="pr_banner-text text-center" style="font-size:50px; color:red;">ALL PRODUCT</div>
	</div>

	<div class="container" style="700px;">
		<div class="col-md-12">
			<div class="row">
				<?php 
					$query = "select * from product order by id asc";
					$result = mysqli_query($con,$query);
					if(mysqli_num_rows($result) > 0)
					{
						while($row = mysqli_fetch_array($result))
						{
							?>
					<div class="col-md-4">
						<form method = "POST" action="productpage.php?action=add&id=<?php echo $row["id"];?>">
							<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:20px;">
								<img src="images/<?php echo $row["image"]; ?>" class="img-responsive"/> <br/>
								<br><h4 class="text-info"><?php echo $row["name"];?></h4>
								<h4 class="text-danger">TK.<?php echo $row["price"];?></h4>
								<input type="text" name="quantity" class="form-control" value="1"/>
								<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
								<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
								<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart"/>
								<a href="details.php?action=select&id=<?php echo$row["id"];?>">DETAILS</a>
							</div>
						</form>
					</div>
					<?php
								
							}
						}
					
					?>
					
			</div>
		</div>
	</div>
	
	<div style="clear:both"></div>
	<br/>
		<h3 class="text-center">ORDER DETAILS</h3>
			<div class="table-responsive">
						<table class="table table-bordered">
							<tr>
								<th width="40%">Item Name</th>
								<th width="10%">Quantity</th>
								<th width="20%">Price</th>
								<th width="15%">Total</th>
								<th width="5%">Action</th>
							</tr>
						<?php
						if(!empty($_SESSION["shopping_cart"]))
						{
							$total = 0;
							foreach($_SESSION["shopping_cart"] as $keys => $values)
							{
						?>
						<tr>
							<td><?php echo $values["item_name"];?></td>	
							<td><?php echo $values["item_quantity"];?></td>
							<td>TK. <?php echo $values["item_price"];?></td>
							<td><?php echo number_format($values["item_quantity"] * $values["item_price"],2);?></td>
							<td><a href="productpage.php?action=delete&id=<?php echo $values["item_id"];?>"><span class="text-danger">Remove</span></a></td>
							
						</tr>
						<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
							
							}
						?>
						<tr>
							<td colspan="3" align = "right">Total</td>
							<td align="right">TK.<?php echo number_format($total,2);?></td>
							<td>
							<a href="productpage.php?action=clearall">
							<button class="btn btn-warning">Clear</button>
							</a>
							</td>
						</tr>
						
						<?php
						}						
						?>	
						
						</table>
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