<?php
$servername = "dbserver.engr.scu.edu";
$username = "jphan1";
$password = "sandbox";
$db_name = "sdb_jphan1";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Scu Labs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
    <head>
        <title>Timetable</title>
        <style type="text/css">

        table
        {
          margin-left: 5%;
          clear: boht
        }

        body
        {
            font-family: arial;
        }

        th,td
        {
            margin: 0;
            text-align: center;
            border-collapse: collapse;
            outline: 1px solid #e3e3e3;
        }

        td
        {
            padding: 0px 0px;
        }

      th
      {
          background: #9a2035;
          color: white;
          padding: 30px 0px 30px 0px;
      }

      td:hover
      {
          cursor: pointer;
          background: #d1465a;
          color: white;
      }

      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            color: #1A72CB;
        }

      </style>

  </head>


  <?php

  $conn = new mysqli($servername, $username, $password, $db_name);


  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }


  $sql = "SELECT * FROM User";
  $result = $conn->query($sql);
  $table = array();
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        array_push($table,$row);
      }
  }

  mysqli_close($conn);

  ?>

  <h3>Scu Labs : TA Contact Sheet</h3>
  <ul>
    <li><a id="home_href" href="home.php?user=jphan@scu.edu">Other's Availability</a></li>
    <li><a id="avail_href" href="availability.php?user=jphan@scu.edu" style="color: #19C5D3">My Availability</a></li>
    <li><a href="login.php">Logout</a></li>
  </ul>

  <body>
    <p> Click on the time slot to change your availability
        <br> Green : Available
        <br> Red   : Unavailable
    </p>
    <br>
      <table width="90%" align="center" >
      <div id="head_nav" class="green">
      <tr>
          <th>Time</th>
          <th>Mon</th>
          <th>Tues</th>
          <th>Wed</th>
          <th>Thu</th>
          <th>Fri</th>
      </tr>
  </div>

      <tr>
          <th>09:15 - 12:00</th>
              <td id="MonLab1">Monday<br>Morning Lab</td>
              <td id="TueLab1">Tuesday<br>Morning Lab</td>
              <td id="WedLab1">Wednesday<br>Morning Lab</td>
              <td id="ThuLab1">Thursday<br>Morning Lab</td>
              <td id="FriLab1">Friday<br>Morning Lab</td>
          </div>
      </tr>

      <tr>
          <th>02:15 - 5:00</td>
              <td id="MonLab2">Monday<br>Afternoon Lab</td>
              <td id="TueLab2">Tuesday<br>Afternoon Lab</td>
              <td id="WedLab2">Wednesday<br>Afternoon Lab</td>
              <td id="ThuLab2">Thursday<br>Afternoon Lab</td>
              <td id="FriLab2">Friday<br>Afternoon Lab</td>
              <td></td>
          </div>
      </tr>

      <tr>
          <th>05:15 - 08:00</td>

              <td id="MonLab3">Monday<br>Night Lab</td>
              <td id="TueLab3">Tuesday<br>Night Lab</td>
              <td id="WedLab3">Wednesday<br>Night Lab</td>
              <td id="ThuLab3">Thursday<br>Night Lab</td>
              <td id="FriLab3">Friday<br>Night Lab</td>
              <td></td>

          </div>
      </tr>

  </table>


</body>

<script>

function myFunction(lab_name) {
  var current_color = document.getElementById(lab_name).style.backgroundColor
  if (current_color === "rgb(139, 218, 97)")
    document.getElementById(lab_name).style.backgroundColor = "rgb(201, 81, 55)"
  else
    document.getElementById(lab_name).style.backgroundColor = "rgb(139, 218, 97)"

}

document.getElementById("MonLab1").addEventListener("click", function(){
  myFunction("MonLab1")
});
document.getElementById("MonLab2").addEventListener("click", function(){
  myFunction("MonLab2")
});
document.getElementById("MonLab3").addEventListener("click", function(){
  myFunction("MonLab3")
});

document.getElementById("TueLab1").addEventListener("click", function(){
  myFunction("TueLab1")
});
document.getElementById("TueLab2").addEventListener("click", function(){
  myFunction("TueLab2")
});
document.getElementById("TueLab3").addEventListener("click", function(){
  myFunction("TueLab3")
});

document.getElementById("WedLab1").addEventListener("click", function(){
  myFunction("WedLab1")
});
document.getElementById("WedLab2").addEventListener("click", function(){
  myFunction("WedLab2")
});
document.getElementById("WedLab3").addEventListener("click", function(){
  myFunction("WedLab3")
});

document.getElementById("ThuLab1").addEventListener("click", function(){
  myFunction("ThuLab1")
});
document.getElementById("ThuLab2").addEventListener("click", function(){
  myFunction("ThuLab2")
});
document.getElementById("ThuLab3").addEventListener("click", function(){
  myFunction("ThuLab3")
});

document.getElementById("FriLab1").addEventListener("click", function(){
  myFunction("FriLab1")
});
document.getElementById("FriLab2").addEventListener("click", function(){
  myFunction("FriLab2")
});
document.getElementById("FriLab3").addEventListener("click", function(){
  myFunction("FriLab3")
});




</script>

<script>
var urlParams;
(window.onpopstate = function () {


    var match,
        pl     = /\+/g,
        search = /([^&=]+)=?([^&]*)/g,
        decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
        query  = window.location.search.substring(1);

    urlParams = {};
    while (match = search.exec(query))
       urlParams[decode(match[1])] = decode(match[2]);

    console.log(urlParams)
    document.getElementById("home_href").href = "home.php?user=" + urlParams['user']
    document.getElementById("avail_href").href = "availability.php?user="+ urlParams['user']

    var ar = <?php echo json_encode($table) ?>;
    console.log(ar)
    var counter = 0;
    for (var i in ar){
      console.log(ar[counter]['Email'],urlParams['user'] )
      if (ar[counter]['Email'] == urlParams['user'] && ar[counter]['Type'] == 'TA'){
        var current_user = ar[counter];
        var lab_sections = ['MonLab1', 'MonLab2', 'MonLab3', 'TueLab1', 'TueLab2', 'TueLab3', 'WedLab1', 'WedLab2', 'WedLab3', 'ThuLab1', 'ThuLab2', 'ThuLab3', 'FriLab1', 'FriLab2', 'FriLab3']
        lab_sections.forEach(function(lab_name) {
          if(current_user[lab_name] == "Available")
              document.getElementById(lab_name).style.backgroundColor = "rgb(139, 218, 97)";
          else
              document.getElementById(lab_name).style.backgroundColor = "rgb(201, 81, 55)";
        });

      }
      counter ++;
    }

})();

</script>



</html>
