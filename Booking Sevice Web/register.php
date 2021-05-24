<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
<link href="custom.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
  include 'application.php';
  include 'includes/database_include.php';
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
	<!--defining two columns, one 4 columns wide, one 8 columns wide-->
	<!--columnds in the GRID system need to be 12 wide -->
	<!--Bootstrap -->
<div class="col-sm-4">
<h1> Register </h1>
</div>
<div class="col-sm-8">
&nbsp;
</div>
<form id="accountForm" name="submit" method="POST" action="includes/register_include.php">
    <div class="form-group row">
      <label  class="col-sm-4 col-form-label">First Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="firstName" name="user_first" placeholder="First Name">
      </div>
      </div>
          <div class="form-group row">
      <label class="col-sm-4 col-form-label">Last Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="lastName" name="user_last" placeholder="Last Name">
      </div>
      </div>  
          <div class="form-group row">
      <label  class="col-sm-4 col-form-label">Email</label>
          <div class="col-sm-8">
            <input type="email" class="form-control" id="email" name="user_email" placeholder="Email">
      </div>
      </div>
      <div class="form-group row">
      <label class="col-sm-4 col-form-label">Phone</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="phone" name="user_phone"placeholder="Phone">
      </div>
   	  </div>
      <div class="form-group row">
      <label  class="col-sm-4 col-form-label">User Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="username" name="user_uid" placeholder="username">
      </div>
      </div>
      <div class="form-group row">
      <label class="col-sm-4 col-form-label">Password</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="password" name="user_passw"placeholder="Password">
      </div>
      </div>
   	  <div class="form-group row">
		<div class="col-sm-5 text-center">
			<button type="submit" id="accountBtn" name="submit" class="btn btn-success">Register</button>
		</div>
   	  	</div>
   	  </form>
   	  <div class="row">
   	  		<div class="col-sm-16">
   	  			&nbsp;
   	  		</div>
   	  	</div>
		<!--<form class="register-form" action="includes/register_include.php" method="POST">
			<input type="text"     name="user_first"    placeholder="First Name">
			<input type="text"     name="user_last"     placeholder="Last Name">
			<input type="text"     name="user_email"    placeholder="E-mail">
			<input type="text"     name="user_phone"    placeholder="Phone Number">
			<input type="text"     name="user_uid"      placeholder="UserName">
			<input type="password" name="user_passw"    placeholder="Password">
			<button type="submit" name="submit">Register</button>

		</form>
		-->

	</div>
	</div>
</article>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn/bootstrap/4.1.2/js/bootstrap.min.js"></script>
</body>
</html>