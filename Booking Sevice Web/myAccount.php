<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>My Account</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
<link href="custom.css" rel="stylesheet" type="text/css">
</head>
<body>
<section>

<?php

// deifing variable for Form
$userID=NULL;
$buttonLabel= "Register";

//connect to the application functions file
include ('application.php');

//connect to the database
include ('includes/database_include.php');


//Start session
if (!isset($_SESSION) ) {
	session_start();
}

//defining variables for Form
$userID=NULL;
$first=NULL;
$last=NULL;
$email=NULL;
$uphone=NULL;
$uid=NULL;
$passw=NULL;


IF ( ISSET($_SESSION['u_id']) ) {

	$userID=$_SESSION['u_id'];

	echo "Welcome" . $uid . "<br/>";

}

// Get the logged on users account details
IF ( ISSET($userID) ) {

	$sql="SELECT * FROM user WHERE userID = user_id;";

		echo "<br/>" . $sql;

		//getting the SELECT results
		$result=mysqli_query($conn, $sql);

		//should only get ONE row returned, using the Primary Key value
		if (mysqli_num_rows($result)==1) {

		$row=mysqli_fetch_assoc($result);

		//get the logged on users account details
		$first=$row['user_first'];
		$last=$row['user_last'];
		$email=$row['user_email'];
		$uphone=$row['user_phone'];
		$buttonLabel="Update Account";

} else {

	echo "couldnt find account details";
	}

}

?>

<section>

 	<?php
 		showNav();
 	?>

 <article>

<!-- container to hold the current section of content -->
<div class="container-fluid">

	<!--defining the row -->
	<div class="row">
	<!--Bootstrap -->
<div class="col-sm-4">
<h1> My Account </h1>
</div>
<div class="col-sm-8">
&nbsp;
</div>

</div>
	<?php
	IF (ISSET($userID) ) {
	?>
		<form id="accountForm" name="submit" method="POST" action="includes/accountProc_include.php">

	<!--Add the userID as a HIDDEN input-->
	<input type="hidden" id="userID" value="<?php echo $userID ?>">

	<?php
	} ELSE {
	?>
		<form id="accountForm" name="submit" method="POST" action="includes/register_include.php">

	<?php
	}
	?>
		<div class="form-group row">
        <label for="client" class="col-sm-2 col-form-label">Client</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="user" name="user" readonly placeholder="Client" value="<?php echo $userID; ?>">
      </div>
      </div>

    <div class="form-group row">
      <label for="firstName" class="col-sm-2 col-form-label">First Name</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="firstName" name="user_first" placeholder="First Name" value="<?php echo $first; ?>">
      </div>
      </div>
          <div class="form-group row">
      <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="lastName" name="user_last" placeholder="Last Name" value="<?php echo $last; ?>">
      </div>
      </div>  
          <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" id="email" name="user_email" placeholder="Email" value="<?php echo $email; ?>">
      </div>
      </div>
      <div class="form-group row">
      <label for="phone" class="col-sm-2 col-form-label">Phone</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="phone" name="user_phone"placeholder="Phone" value="<?php echo $uphone; ?>">
      </div>
   	  </div>


   	<?php
	IF (empty ($userID)) {
	?>

	<!-- username and password for the userLogon table-->
<div class="form-group row">
	 <label for="username" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="username" name="user_uid" placeholder="Username" value="<?php echo $uid; ?>">
        </div>
    </div>
<div class="form-group row">
	 <label for="password" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="password" name="user_passw" placeholder="Password" value="<?php echo $passw; ?>">
        </div>
    </div>

	<?php
	} ELSE {

	?>

	<?php
	}
	?>

	<div class="form-group row">
		<div class="col-sm-6 text-center">
			<button type="submit" id="accountBtn" name="submit" class="btn btn-success"><?php echo "Submit" ?></button>
		</div>
   	  	</div>	
   	  </form>


   	  	
		<!-- Blank Row for space -->
   	  	<div class="row">
   	  		<div class="col-sm-12">
   	  			&nbsp;
   	  		</div>
   	  	</div>  <!-- end of Blank Row -->


   	  </div>

   	</article>
   	<br/><br/>

   </section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn/bootstrap/4.1.2/js/bootstrap.min.js"></script>
</body>
</html>