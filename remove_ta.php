
  <?php
  if (!isset($_COOKIE["ADMIN_SESSION"])){
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

  $sql = "DELETE FROM  EnabledUser WHERE Email=\"".$_REQUEST['email']."\";";
  $sql2 = "DELETE FROM  User WHERE Email=\"".$_REQUEST['email']."\";";
  #echo "<p>",$sql,  " </p>";
  $result = $conn->query($sql);
  $result2 = $conn->query($sql2);
  mysqli_close($conn);
  if($result || $result2){
    return "success";
  }else{
    return "failed";
  }

  ?>
