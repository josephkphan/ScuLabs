
  <?php
  if (!isset($_COOKIE["TA_SESSION"])){
    header('Location: login.php');
  }

  $servername = "dbserver.engr.scu.edu";
  $username = "jphan1";
  $password = "sandbox";
  $db_name = "sdb_jphan1";
  $conn = new mysqli($servername, $username, $password, $db_name);


  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }


  $sql = "INSERT INTO  EnabledUser(Email) VALUES (\"".$_REQUEST['email']."\");";
  echo $sql;
  #echo "<p>",$sql,  " </p>";
  $result = $conn->query($sql);
  mysqli_close($conn);
  if($result){
    return "success";
  }else{
    return "failed";
  }

  ?>
