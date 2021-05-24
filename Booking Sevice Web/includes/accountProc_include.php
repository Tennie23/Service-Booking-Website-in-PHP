<?php

var_dump($_POST);


// defining variables
$resultCheck=NULL;





//isset is a PHPN function to check if something has been set

//IF check the button has been clicked before processing the form
if (isset($_POST['submit'])) {
	
//link to database connection file
	include_once 'connectDB.inc.php';

//get the valye from the first form input - firstname, was named first
	$first=mysqli_real_escape_string($conn,$_POST['user_first']); 

//test
	echo $first;

	//note the $_POST names are the same as the input naames from the form
	$userID=mysqli_real_escape_string($conn,$_POST['user_id']);
	$last=mysqli_real_escape_string($conn,$_POST['user_last']);
	$email=mysqli_real_escape_string($conn,$_POST['user_email']);
	$uphone=mysqli_real_escape_string($conn,$_POST['user_phone']);



//Error handler

//Check for empty fields
	//the Pipe symbol is OR, so need to check if at least one of the firelds are empty
	if (empty($first) || empty($last) || empty($email) || empty($phone) ) {
		//at least one field is empty, so send back error emssage

		//send the user back to the singup page using the PHP header function
		header("Location: ../register.php?regsiter=empty");
		exit(); //stop else statement from running

//test


		echo "<br/> fields are empty";

} else { //al fields have been filled in
	//activate this code if all the form input fields have been filled out
	//check if input characters are valid, using PHP function preg_match - this is a regular expression function to check cerain characters
	//check !preg_match to check for ERRORs first, ! means NOT



	//if (!preg_match("/^[a-zA-Z]*$/", $first)
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
	// /^ start if string ^
	//[a-zA-Z] allows lower and UPPER case alphabet characters
			//*$ one or more repetitions * and end of string $
			// $first is the varable to check the characters a to z or A to Z

			//send user back to the signup page using the PHP header function
			header("Location: ../regsiter.php?register=invalid"); //send error message
			exit(); //stop else statement

//test

		} else { // characters in first and last names are valid
			//check if email is NOT valid
			//use filter_var with the parameter of FILTER_VALIDATE_EMAIL - can validate other things, not just email

//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL) ) { //doesnt like an exttra -nz after first .ac
				//invalid email procescing here

//send the user back to the singip page using the PHP header function
				header("Location: ../regsiter.php?register=email"); //send back invalid email error message
				exit(); //stop else statement from running


				} else { //email is valid

					//insert the user into the Database
					//need valued in single wuotes as they are strings
					$sql = "UPDATE users
							SET user_first='$first',
							user_last='$last',
							user_email='$email',
							user_phone='$uphone'
							WHERE userID=$userID;";

							//test

							//test
							echo "<br/> sql is" .$sql;

							
					//run query

					//$result = mysqli_query($conn,$sql);
					$result = mysqli_query($conn,$sql); //use $result or and IF arund the query to check the success of the query
					//Always check the query sucess before moving on


					if($result) {

							echo "<br/> updated";

					}

//send the user back
						header("Location:../regsiter.php?regsiter=success"); //messagge
						exit(); //stop else statement from running


					}
				}
			}

} else {
	
}
?>
