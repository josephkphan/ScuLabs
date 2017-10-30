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

		echo $name;
		echo $uname;
		echo $pass;
		echo $pass2;

		if (empty($uname) or !filter_var($uname,FILTER_VALIDATE_EMAIL) ) {
			$flag = false;
			echo "Please enter valid email address";
		} else {
			//$query = "SELECT email FROM Users u where u.Email='$uname'";
			$sql_query = $conn->query("SELECT Email FROM Users u where u.Email='$uname'");
			if (!$sql_query) {
				$flaf = false;
				echo "Email already in user";
			}
			//$num_rows = $sql_query->num_rows($sql_query);
			
			// if there are any other users with the same email, error out
			//if ($num_rows != 0) {
			//	$flag = false;
			//	echo "Email already in use";
				// *** NEED TO IMPLEMENT, EMAIL ALREADY IN USE ***
			//}
		}		
		
		echo $name;
		echo $uname;
		echo $pass;
		echo $pass2;
		
		// if any of input are empty or passwords don't match, error out
		if (empty($name)) {
			$flag = false;
			echo "Please enter Name";
		}	

		if (empty($pass)){
			$flag = false;
			echo "Please enter Password";
		}

		if (empty($pass2)){
			$flag = false;
			echo "Please enter Retype Password";
		}

		if ($pass != $pass2) {
			echo "Passwords do not match";
			// *** NEED TO IMPLEMENT, Passwords dont match, error out ***
		}


		// if no errors, input new user
		if ($flag) {
		
			$sql_query = $conn->query("INSERT INTO Users(Email, Pass, Name) VALUES('$uname', '$pass', '$name')"); 
			
			if ($sql_query) {
				echo "Login successful, please login now";
				// reset variables
				unset($name);
				unset($email);
				unset($pass);
				header('Location: home.php');
			} else {
				echo "Login not sucessful, please try again";
				// *** NEED TO IMPLEMENT, RETURN TO LOGIN PAGE ***	
			}

		}

//	}

?>

