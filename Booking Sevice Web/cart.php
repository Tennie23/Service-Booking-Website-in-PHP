<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>My Bookings</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
<link href="custom.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php


//connect to the application functions file
include 'application.php';
include 'includes/database_include.php';

//Start session
if (!isset($_SESSION)) 
{
	session_start();
}
#after session start
if (isset($_POST["add"])) 
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array
			(
		      'item_id'         =>  $_GET["id"],
		      'item_name'       =>  $_POST["hidden_name"],
		      'item_price'      =>  $_POST["hidden_price"],
		      'item_quantity'   =>  $_POST["quantity"]
		    );
		    $_SESSION["shopping_cart"][$count] = $item_array;
      
	}
	else
	{
		$item_array = array 
		(
		      'item_id'         =>  $_GET["id"],
		      'item_name'       =>  $_POST["hidden_name"],
		      'item_price'      =>  $_POST["hidden_price"],
		      'item_quantity'   =>  $_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;

	}
}

if (isset($_GET["action"])) 
{
	if ($_GET["action"] == "delete") 
	{
		foreach ($_SESSION["shopping_cart"] as $keys => $values) 
		{
			if ($values["item_id"] == $_GET["id"]) 
			{
				unset($_SESSION["shopping_cart"][$keys]); 
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}


/*if (!isset($_POST['add']))
{
	$_SESSION['item_'.$_POST['add']] +=1;
	redirect('index.php');
}
$item_id = mysqli_real_escape_string($conn, $_POST['hidden_id']);
/*$item_id = $_POST['hidden_id'];*/
/*$quan = $_POST['quantity'];
$quan = (int)$quan;
echo $_SESSION['item_'];
echo $_POST['add'];
*/

?>

<section>

 <?php
 showNav();
 ?>

 <article>

<!-- container to hold the current section of content -->
 	<div class="container-fluid">

<!-- defining a row -->
 		<div class="row">
<!-- defining two columns -->
<!-- columns in the Grid system -->
<!-- bootstrap-->
	<div class="col-sm-4">
 		<h1> Cart </h1>
 	</div>
 	<div class="col-sm-8">
 		&nbsp;
 	</div>

 	</div> <!-- end of 1st row -->


<!-- blank row for space -->
 		<div class="row">
 			<div class="col-sm-12">
 			&nbsp;	
 		</div>
 		</div>

<!-- 2nd row -->
<!-- Adding the ADD button -->
<form method="POST" action="index.php">
	<div class="row">
		<div class="col-sm-8">
			<p><button name="add" value="ADD" class="btn btn-success">Add to cart</button></p>
 		</div>
 			<div class="col-sm-4">
 			&nbsp;	
 		</div>
 	</div>
 </form>



</div>
</article>
<br/><br/>
</section>


 <?php
?>

 	<!-- ********************************************* -->
 	<!--                                               -->
 	<!--               Data Headings                  -->
 	<!--                                               -->
 	<!-- ********************************************* -->

<!-- 3rd row-->
<div class="row">
	<div class="col-sm-1">&nbsp;</div>
	<div class="col-sm-2">Item name</div>
	<div class="col-sm-1">Quantity</div>
	<div class="col-sm-1">Price</div>
	<div class="col-sm-1">Total</div>
	<div class="col-sm-1">Action</div>

</div> 

<!-- Main Data Rows-->
 <?php
				if (!empty($_SESSION["shopping_cart"])) 
				{
					
					foreach ($_SESSION["shopping_cart"] as $keys => $values) 
					{
						$newval = number_format($values["item_quantity"] * $values["item_price"], 2);
						$desc = <<<Delimiter
						<div class="row">
												<div class="col-sm-1">&nbsp;</div>
	                <div class="col-sm-2">{$values["item_name"]}</div>
	                <div class="col-sm-1">{$values["item_quantity"]}</div>
	                <div class="col-sm-1">{$values["item_price"]}</div>
	                <div class="col-sm-1">{$newval}</div>
	                <div class="col-sm-1"><a href="cart.php?action=delete&id={$values["item_id"]}"><span class="text-danger">Remove</span></a></div>
	                </div>
Delimiter;
	                echo $desc;
					}
				
				
				
				$total = (int)0;
				$total = $total + ($values["item_quantity"] * $values["item_price"]);
			    }
				?>
 </article>
 <br /> <br/>
</section>


 <script src="js/customJS.js"></script>
 