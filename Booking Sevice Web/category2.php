<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>WildCards</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
<link href="custom.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
//connect to the application functions file
include ('application.php');
include 'includes/database_include.php';

//Start session
if (!isset($_SESSION)) {
  session_start();
}

 showNav();
 ?>
 <?php 
 if (isset($_GET['add'])) 
 {
   $_SESSION['item_'. $_GET['add']] += 1;
   echo 'add';
 }
  ?>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<body>
  <div class="col-sm-12">
    <h1 align="center" style="font-size:300%;"> Team Tickets </h1>
  </div>
 <div class="card">
  <img src="sponsor6.jpg" alt="Team5" style="width:100%">
  <h1>Team 5</h1>
  <form name="cart" action="includes/cart_include.php" method="POST">
  <input type="hidden" name="hidden_id" value="5"/>
  <p class="price">$20</p>
  <h2 style="font-size:100%;">Pool B</h2>
  <label for="quantity" style="font-size:150%;">Quantity</label>
  <input type="text" class="form-control" id="quantity" name="quantity" value="1">
  <input type="hidden" name="hidden_name" value="Team 5"/>
  <input type="hidden" name="hidden_price" value="20"/>
  <input type="hidden" name="hidden_category" value="Pool B"/>
  <button type="submit" name="add" class="btn btn-success">Add to Cart</button>
  </form>
</div>
<div class="card">
  <img src="sponsor7.jpg" alt="Team6" style="width:100%">
  <h1>Team 6</h1>
  <form name="cart" action="includes/cart_include.php" method="POST">
  <input type="hidden" name="hidden_id" value="6"/>
  <p class="price">$50</p>
  <h2 style="font-size:100%;">Pool B</h2>
  <label for="quantity" style="font-size:150%;">Quantity</label>
  <input type="text" class="form-control" id="quantity" name="quantity" value="1">
  <input type="hidden" name="hidden_name" value="Team 6"/>
  <input type="hidden" name="hidden_price" value="50"/>
  <input type="hidden" name="hidden_category" value="Pool B"/>
  <button type="submit" name="add" class="btn btn-success">Add to Cart</button>
  </form>
</div>
<div class="card">
  <img src="sponsor13.jpg" alt="Team7" style="width:100%">
  <h1>Team 7</h1>
  <form name="cart" action="includes/cart_include.php" method="POST">
  <input type="hidden" name="hidden_id" value="7"/>
  <p class="price">$30</p>
  <h2 style="font-size:100%;">Pool B</h2>
  <label for="quantity" style="font-size:150%;">Quantity</label>
  <input type="text" class="form-control" id="quantity" name="quantity" value="1">
  <input type="hidden" name="hidden_name" value="Team 7"/>
  <input type="hidden" name="hidden_price" value="30"/>
  <input type="hidden" name="hidden_category" value="Pool B"/>
  <button type="submit" name="add" class="btn btn-success">Add to Cart</button>
  </form>
</div>
<div class="card">
  <img src="sponsor14.jpg" alt="Team8" style="width:100%">
  <h1>Team 8</h1>
  <form name="cart" action="includes/cart_include.php" method="POST">
  <input type="hidden" name="hidden_id" value="8"/>
  <p class="price">$10</p>
  <h2 style="font-size:100%;">Pool B</h2>
  <label for="quantity" style="font-size:150%;">Quantity</label>
  <input type="text" class="form-control" id="quantity" name="quantity" value="1">
  <input type="hidden" name="hidden_name" value="Team 8"/>
  <input type="hidden" name="hidden_price" value="10"/>
  <input type="hidden" name="hidden_category" value="Pool B"/>
  <button type="submit" name="add" class="btn btn-success">Add to Cart</button>
  </form>
</div>
  
</body>
</html>