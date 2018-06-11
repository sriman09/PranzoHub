<?php
	
	//Session start 
	session_start();
	if (isset($_SESSION['bazooka'])) {
		header('Location:index.php?message=You are already Logged in');
	}
	//include database
	include 'scripts/db_connection.php';

	//Declare Variables
	$email = "";
	$password = "";
	$salt = "";
	$encPassword = "";

	//Get data from POST
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
	}

	if (isset($_POST['password'])) {
		$password = $_POST['password'];
	}

	//Retrive data from table
	$selectSalt = "SELECT `salt` FROM `user` WHERE `email` = '$email';";
	$selectSaltResult = $conn->query($selectSalt);
	if($selectSaltResult) { //query Ran
		if($selectSaltResult->num_rows > 0) {
			$selectSaltData = $selectSaltResult->fetch_assoc();
			$salt = $selectSaltData['salt'];

		} else {

			header('Location:index.php?message=No User Found!');	exit();
		}
	} else {

		header('Location:index.php?message=Query Failed');	exit();
	}
	

	//encrypt password
    $encPassword = md5(md5($password).md5($salt).md5('123@')) ;
    
	//check 
	$selectUserQuery = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$encPassword';";
	$selectUserResult = $conn->query($selectUserQuery);

	if($selectUserResult) { // check if the query ran 

		if($selectUserResult->num_rows > 0) { //Match Found
			$_SESSION['bazooka'] = $email;
			
			header('Location:index.php?message=Login success!');
		} else { //no match found
				header('Location:index.php?message=Login Failed!');
		}

	} else {

		echo "Unable to run query";
	}
