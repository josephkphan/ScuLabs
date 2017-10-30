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

	//if (isset($_POST['scu_login'])) {
		
		// eliminate white space  and prevent mysql injection from email
		$uname = trim($_POST['uname']);
		$uname = strip_tags($uname);
		$uname = htmlspecialchars($uname);

		// eliminate white space and prevent mysql injection from password
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);


		if (empty($uname) or !filter_var($uname,FILTER_VALIDATE_EMAIL) ) {
			$flag = false;
			echo "Please enter valid email address. ";
		} 
		
		if (empty($pass)){
			$flag = false;
			echo "Please enter password. ";
		}

		// if no error inputting information, continue
		if ($flag) {

			// fetch password and name from mysql Database where Email == entered email: uname
			$sql_query = $conn->query("SELECT Pass, Name FROM Users u WHERE u.Email='$uname' AND u.Pass='$pass'");
			if ($sql_query) {
				$row = $sql_query->fetch_array($sql_query);
				$num_rows = $sql_query->num_rows($sql_query);
			
				// if only one user in Database with provided information and passwords match, login valid
				if ($num_rows != 1) { 
					echo "Invalid Login Information";			
					//invalid user, error out *** NEED TO IMPLEMENT ***
				} else header('Location: home.php');

			} else echo "Invalid Credentials"; //I believe this is running right, need to check with valid credentials
		}

		//header('Location: home.php');
		
	//}
?>


