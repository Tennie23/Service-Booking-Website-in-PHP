<?php 

session_start();

 ?>


<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 
<header>
	<nav>
		<div class = "main-wrapper">
		  <ul>
		  	<li><a href="index.php">Home</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="staff.php">Staff</a></li>
		  </ul>	
		  <div class = "nav-login">
		  	<?php
		  	 if (isset($_SESSION['user_id']))
		  	 {
		  	  	echo '<form action="includes/logout_include.php" method="POST">
		  		
		  		      <button type="submit" name="submit">Logout</button>
		  		
		  	          </form>';
		  	 } 
		  	 else
		  	 {
		  	 	echo '<form action="includes/login_include.php" method="POST">
		  		      <input type="text" name="uid" placeholder="Username/E-mail">
		  		      <input type="password" name="passw" placeholder="Password">
		  		      <button type="submit" name="submit">Login</button>
		  	          </form>
		  	          <a href="register.php">Register</a>';

		  	 }
		  	?>
		  	
		  </div>
		</div>
	</nav>
</header>