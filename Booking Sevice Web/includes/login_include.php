<?php

session_start(); 

if (isset($_POST['submit']))
{
	include 'database_include.php';

	$uid   = mysqli_real_escape_string($conn, $_POST['u_uid']);
	$passw = mysqli_real_escape_string($conn, $_POST['u_passw']);
	
	//Error handlers
	//Check input empty

	if (empty($uid) || empty($passw))
	{
		header("Location: ../index.php?login=empty");
		exit();
	}
	else
	{
		$sql = "SELECT * FROM users WHERE user_uid =  '$uid' OR user_email = '$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1)
		{
			header("Location: ../index.php?login=error1");
			exit();
		}
		else
		{
			if ($row = mysqli_fetch_assoc($result)) 
			{
				//De-hashing the password
				$hashedPasswCheck = password_verify($passw, $row['user_passw']);
				if ($hashedPasswCheck == false)
				{
					header("Location: ../index.php?login=error3");
			        exit();
				}
				elseif ($hashedPasswCheck == true)
				{
					//Login in the user
					$_SESSION['u_id'] = $row['user_id'];
					/*
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					*/
					header("Location: ../index.php?login=success");
			        exit();
				}
			}
		}

	}
}
else
{
  header("Location: ../index.php?login=error2");
  exit();
}




