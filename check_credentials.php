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
			echo "<script>alert('Please enter password');window.location.href='login.php';</script>";
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
					echo "<script>alert('Invalid Login Information');window.location.href='login.php';</script>";
				} else{

					if($num_rows_enabled != 1 ){
						echo "<script>alert('User Not Enabled Yet. Contact Admin.');window.location.href='login.php';</script>";
					}else{
						$username = $row["email"];
						$type = $row["type"];
							setcookie("MY_SESSION",$username,time()+(86400));
						if ($type == "TA"){
							header("Location: home.php"); //TODO IF TA THEN GO TO HOME ELSE GO TO ADMIN VIEW
						}else{
							setcookie("ADMIN_SESSION",$username,time()+(86400));
							header("Location: admin.php");
						}
					}
				}

			} else echo "<script>alert('Invalid Credentials');window.location.href='login.php';</script>";
		}


	//}
?>
