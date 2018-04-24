<?php 
	session_start();

	// variable declaration
	$firstname= "";
	$lastname    = "";
	$email = "";
	$password="";
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "abc");

	// REGISTER USER
	if (isset($_POST['submit'])) {
		// receive all input values from the form
		$lastname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
	




		// register user if there are no errors in the form
		if (count($errors) == 0) {
			//$password = ($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO test1 (firstname,lastname,email,password) 
					  VALUES('$firstname','$lalstname', '$email', '$password')";
			mysqli_query($db, $query);

								header('location: home.php');
		}

	}


?>