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


		// if (empty($uname) or !filter_var($uname,FILTER_VALIDATE_EMAIL) ) {
		// 	$flag = false;
		// 	echo "Please enter valid email address. ";
		// }

		if (empty($pass)){
			$flag = false;
			echo "Please enter password. ";
		}

		// if no error inputting information, continue
		if ($flag) {

			// fetch password and name from mysql Database where Email == entered email: uname
			$query = "SELECT Email as email, Type as type FROM User u WHERE u.Email='$uname' AND u.Pass='$pass'";
			$query_enabled =  "SELECT Email as email FROM EnabledUser u WHERE u.Email='$uname' ";
			$sql_query = $conn->query($query);
			$sql_query_enabled = $conn->query($query_enabled);

			if ($sql_query) {
				$row = $sql_query->fetch_assoc();
				$num_rows = $sql_query->num_rows;

				$row_enabled = $sql_query_enabled->fetch_assoc();
				$num_rows_enabled = $sql_query_enabled->num_rows;

				// if only one user in Database with provided information and passwords match, login valid
				if ($num_rows != 1) {
					echo "Invalid Login Information";
					//invalid user, error out *** NEED TO IMPLEMENT ***
				} else{

					if($num_rows_enabled != 1 ){
						echo "User Not Enabled Yet. Contact Admin";
					}else{
						$username = $row["email"];
						$type = $row["type"];
						setcookie("TA_SESSION",3000,time()+(86400));
						if ($type == "TA"){
							header("Location: home.php?user=" . $username); //TODO IF TA THEN GO TO HOME ELSE GO TO ADMIN VIEW
						}else{
							header("Location: admin.php");
						}
					}
				}

			} else echo "Invalid Credentials"; //I believe this is running right, need to check with valid credentials
		}


	//}
?>
