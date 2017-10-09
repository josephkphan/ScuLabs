<?php session_start(); ?>
<html>
<body>
<?php
if(!isset($_POST['uname']) || !isset($_POST['pass'])){
  //Redirect somewhere
}

$myfile = $_POST['uname'] ."_pass.txt";
$username = $_POST['uname'];
$postpass = $_POST['pass']; //Above just helps tidy up
$exists = file_exists($myfile);
if($exists){ $file = $myfile;
$fh = fopen($file, 'r');
$pass = fread($fh, filesize($file));
fclose($fh); //Above checks if exists and sets pass as the real password
}
if(($exists) and ($pass == $postpass)){
//Above checks if the real pass is equal to the entered pass
$_SESSION['user'] = $username;
$_SESSION['logged'] = "yes";
//Above sets the session which is used to do stuff with the profiles (up next)
echo "Login Succesfull.";
}else{
print "Username or password was incorrect.";
}
?>
</body>
</html>
