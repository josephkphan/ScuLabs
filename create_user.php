<?php


	$servername = "dbserver.engr.scu.edu";
	$username = "jphan1";
	$password = "sandbox";
	$db_name = "sdb_jphan1";

	$conn = new mysqli($servername, $username, $password, $db_name);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
    }

	$flag = true;

	//if (isset($_POST['signup'])) {

		// eliminate white space, NULL bytes, and unneccessary characters from name
		$name = trim($_POST['name']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);

		// eliminate white space, NULL bytes, and unneccessary characters from email
		$uname = trim($_POST['uname']);
		$uname = strip_tags($uname);
		$uname = htmlspecialchars($uname);

		// eliminate white space, NULL bytes, and unneccessary characters from password
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);

		// eliminate white space, NULL bytes, and unneccessary characters from password 2
		$pass2 = trim($_POST['pass2']);
		$pass2 = strip_tags($pass2);
		$pass2 = htmlspecialchars($pass2);


		if (empty($uname) or !filter_var($uname,FILTER_VALIDATE_EMAIL) ) {
			$flag = false;
			echo "<script>alert('Please enter valid email address');window.location.href='register.php';</script>";
		} else {
			//$query = "SELECT email FROM Users u where u.Email='$uname'";
			$sql_query = $conn->query("SELECT Email FROM User u where u.Email='$uname'");

			$num_rows = $sql_query->num_rows;

			// if there are any other users with the same email, error out
			if ($num_rows != 0) {
				$flag = false;
				echo "<script>alert('Email already in use');window.location.href='register.php';</script>";
			}

		}

		// if any of input are empty or passwords don't match, error out
		if (empty($name)) {
			$flag = false;
			echo "<script>alert('Please enter Name');window.location.href='register.php';</script>";
		}

		if (empty($pass)){
			$flag = false;
			echo "<script>alert('Please enter Password');window.location.href='register.php';</script>";
		}

		if (empty($pass2)){
			$flag = false;
			echo "<script>alert('Please Retype Password');window.location.href='register.php';</script>";
		}

		if ($pass != $pass2) {
			$flag = false;
			echo "<script>alert('Passwords do not match');window.location.href='register.php';</script>";
		}


		// if no errors, input new user
		if ($flag) {

			$sql_query = $conn->query("INSERT INTO User(Email, Pass, Name, Type, MonLab1, MonLab2, MonLab3, TueLab1, TueLab2, TueLab3, WedLab1, WedLab2, WedLab3, ThuLab1, ThuLab2, ThuLab3, FriLab1, FriLab2, FriLab3) VALUES('$uname', '$pass', '$name', 'TA', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available')");

			if ($sql_query) {
				echo "<script>alert('Registration successful, please contact admin to validate');window.location.href='login.php';</script>";
				// reset variables
			} else {
				echo "<script>alert('Registration not successful, please try again.');window.location.href='login.php';</script>";
			}

		}

//	}

?>
