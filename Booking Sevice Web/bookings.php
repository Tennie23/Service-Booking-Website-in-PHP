<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
<link href="custom.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php

//connect to the application functions file
include ('application.php');

//Start session
if (!isset($_SESSION)) {
	session_start();
}
?>

<h3>Order Details</h3>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<th width="40%">Item name</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
					<th width="15%">Total</th>
					<th width="5%">Action</th>
				</tr>
				<?php
				if (!empty($_SESSION["shopping_cart"])) 
				{
					$total = 0;
					foreach ($_SESSION["shopping_cart"] as $keys => $values) 
					{
						
					}
				?>
				<tr>
					<td><?php echo $values["item_name"]; ?></td>
					<td><?php echo $values["item_quantity"]; ?></td>
					<td>$ <?php echo $values["item_price"]; ?></td>
					<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
					<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
				</tr>
				<?php
				$total = $total + ($values["item_quantity"] * $values["item price"]);
			    }
				?>
				<tr>
					<td colspan="3" align="right">Total</td>
					<td align="right">$ <?php echo number_format($total, 2); ?></td>
				</tr>
				<?php

				?>

				}

				?>
			</table>
		</div>