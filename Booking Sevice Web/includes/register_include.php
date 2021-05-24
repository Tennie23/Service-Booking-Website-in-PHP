<?php 

if (isset($_POST['submit'])) 
{
	include_once 'database_include.php';

	$first  =  mysqli_real_escape_string($conn, $_POST['user_first']); 
	$last   =  mysqli_real_escape_string($conn, $_POST['user_last']);
	$email  =  mysqli_real_escape_string($conn, $_POST['user_email']);
	$uid    =  mysqli_real_escape_string($conn, $_POST['user_uid']);
	$uphone =  mysqli_real_escape_string($conn, $_POST['user_phone']);
	$passw  =  mysqli_real_escape_string($conn, $_POST['user_passw']);

	//Error Handlers
	//Checking for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($passw))
    {
		header("Location: ../register.php?register=empty");
	    exit();
	}
	else
	{
		//Checking if imput char are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) ||!preg_match("/^[a-zA-Z]*$/", $last))
		{
			header("Location: ../register.php?register=invalid");
	        exit();
		}
		else
		{
			//Checking if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				header("Location: ../register.php?register=email");
	            exit();
			}
			else
		    {
		    	$sql = "SELECT * FROM users WHERE user_uid = '$uid'";
		    	$result = mysqli_query($conn,$sql);
		    	$resultCheck = mysqli_num_rows($result);

		    	if ($resultCheck > 0 ) 
		    	{
		    		header("Location: ../register.php?register=usertaken");
		    		echo "<br />3.";
	                exit();
		    	}
		    	else
		    	{
		    		//Hashing the password
		    		$hashedPassw = password_hash($passw,PASSWORD_DEFAULT);
		    		//Insert the user into the database
		    		$sql = "INSERT INTO users (user_first, user_last, user_email, user_phone,user_uid, user_passw) VALUES ('$first', '$last', '$email', '$uphone', '$uid', '$hashedPassw');";
		    		// Checking query success
		    		$result=mysqli_query($conn,$sql); 
						if($result) 
						{
		    		        mysqli_query($conn, $sql);
		    		        header("Location: ../register.php?register=success");
	                        exit();
	                    }
		    	}
		    }
		}
	}
}
else
{
	header("Location: ../register.php");
	exit();
}


 ?>