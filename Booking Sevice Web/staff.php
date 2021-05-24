<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Staff</title>
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

<section>

 <?php
 showNav();
 ?>

 <article>

<!-- container to hold the current section of content -->
 	<div class="container-fluid">

<!-- defining a row -->
 		<div class="row">
<!-- bootstrap-->

	<div class="col-sm-4">
 		<h1> Our Staff </h1>
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


<!-- blank row for space -->
		<div class="row">
 			<div class="col-sm-12">
 			&nbsp;	
 		</div>
 		</div>



<!-- 3rd row-->
 	<div class="row">
 		<div class="col-sm-8">
 			<h3> Please contact our staff </h3> 
 			<p> Sue Beale - 8059</br>
 			    Romeo Levi - 0274257326</br> </p>
 		</div>
 		<div class="col-sm-4">
 			&nbsp;
 		</div>
 	</div> <!-- end 3rd row-->

 	</div>

 </article>
 <br /> <br/>

</section>
