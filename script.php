<?php
 //include database
 include 'scripts/db_connection.php';

 //declare variables

 $firstName = '';
 $lastName = '';
 $email = '';
 $phone = '';
 $password = '';
 $encPassword = '';
 $salt = "";

//get data from post

 if(isset($_POST['firstName']))
 {
 	$firstName = $_POST['firstName'];
 }

 if (isset($_POST['lastName']))
  {

 	$lastName = $_POST['lastName'];
  }
 
 if (isset($_POST['email']))
  {
    $email = $_POST['email'];
  }

 if (isset($_POST['phone'])) 
 {
  $phone = $_POST['phone'];
 } 

 if (isset($_POST['password'])) 
 {
 	$password = $_POST['password'];
 }

//generate salt
 $salt = uniqid();

 //encrypt password
 $encPassword = md5(md5($password).md5($salt).md5('123@')) ;

//check all the data is present
 if($firstName != '' && $lastName != '' && $email != '' && $phone != '' && $password != '')
 {
 	$insertQuery = "INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `phone`, `password`, `last_updated_on`, `created_on`, `salt` , `email`) VALUES (NULL, '$firstName', '$lastName', '$phone', '$encPassword', '05/06/2018', '05/06/2018', '$salt' , '$email');";
 	$insertQueryResult = $conn->query($insertQuery);


	if($insertQueryResult) { //if succeded

		header('Location:index.php?message=Insertion success!');

	} else { //if failed

		header('Location:index.php?message=Unable to insert data.Please try again later.');
	}

} else { //if few data are missing

	header('Location:index.php?message=Please fill in the form properly!');

}

 
