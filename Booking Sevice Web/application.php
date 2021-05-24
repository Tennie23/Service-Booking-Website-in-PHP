<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link href="custom.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<?php


include 'includes/database_include.php';

if (!isset($_SESSION))
{
	session_start();
}

function showNav() {
?>



<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

<!-- Bootstrap navbar -->
  <a class="navbar-brand" href="#"></a>
      <img src="logoWP.png" width="70" height="50" class="d-inline-block align-top" alt="">
  <button class="navbar-toggler" type="button"  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" style="font-size:200%;" href="index.php">Home</a>
      </li>
          <li class="nav-item">
            <a class="nav-link" style="font-size:200%;" href="cart.php" >Cart</a>
        </li>
          <li class="nav-item">
			<a class="nav-link" style="font-size:200%;" href="myAccount.php">My Account</a>
		</li>
          <li class="nav-item">
			<a class="nav-link" style="font-size:200%;" href="staff.php">Staff</a>
		</li>
      </ul>
       <li class="dropdown" class="nav-item">
        <a href="#" style="font-size:200%;" class="dropdown-toggle" data-toggle="dropdown">Search</a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="category1.php" >Pool A</a></li>
          <li><a href="category2.php" >Pool B</a></li>
          <li><a href="category3.php" >Pool C</a></li>
        </ul>
      </li>

<?php     
//check if logged in
if (isset($_SESSION['u_id']) ) {
?>

<form class="form-inline my-2 my-lg-0" action="includes/logout_include.php" method="POST">
	<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Logout</button>
</form>

<?php
} else {
?>
<div class="content">
	<form class="form-inline my-2 my-lg-0" action="includes/login_include.php" method="POST">
		<input class="form-control mr-sm-2" type="text" name="u_uid" placeholder="Username/e-mail" arial-label="username">
		<input class="form-control mr-sm-2" type="password" name="u_passw" placeholder="Password" arial-label="password">
		<button class="btn btn-outline-success my-2 my-sm-0" type="sumbit" name="submit">Login</button>
	</form>
</div>

	<li> &nbsp;</li>

<form class="form-inline my-2 my-lg-0" action="register.php" method="POST">
	<button class="btn btn-outline-success my-2 my-sm-2" id="signup" name="submit" value="ADD" type="submit">Register</button>
</form>

<?php 
}
?>
</div>  
</nav>

<?php 
}
?>

