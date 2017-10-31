<?php
if (!isset($_COOKIE["ADMIN_SESSION"])){
  header('Location: login.php');
}
?>

<!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <style>
        body {
            color: #666666;
            font-family: 'RobotoDraft', 'Roboto', sans-serif;
            font-size: 14px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Pen Title */
        .pen-title {
            padding: 50px 0;
            text-align: center;
            letter-spacing: 2px;
        }
        .pen-title h1 {
            margin: 0 0 20px;
            font-size: 48px;
            font-weight: 300;
        }
        .pen-title span {
            font-size: 12px;
        }

        .pen-title span a {
            color: #d05354;
            font-weight: 600;
            text-decoration: none;
        }

        /* Form Module */
        .form-module {
            position: relative;
            background: #ffffff;
            max-width: 320px;
            width: 100%;
            border-top: 5px solid #d05354;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
        }

        .form-module .form {
            display: none;
            padding: 40px;
        }
        .form-module .form:nth-child(2) {
            display: block;
        }
        .form-module h2 {
            margin: 0 0 20px;
            color: #d05354;
            font-size: 18px;
            font-weight: 400;
            line-height: 1;
        }
        .form-module input {
            outline: none;
            display: block;
            width: 100%;
            border: 1px solid #d9d9d9;
            margin: 0 0 20px;
            padding: 10px 15px;
            box-sizing: border-box;
            font-wieght: 400;
            -webkit-transition: 0.3s ease;
            transition: 0.3s ease;
        }
        .form-module input:focus {
            border: 1px solid #d05354;
            color: #333333;
        }
        .form-module button {
            cursor: pointer;
            background: #d05354;
            width: 100%;
            border: 0;
            padding: 10px 15px;
            color: #ffffff;
            -webkit-transition: 0.3s ease;
            transition: 0.3s ease;
        }
        .form-module button:hover {
            background: #d05354;
        }
        .form-module .cta {
            background: #f2f2f2;
            width: 100%;
            padding: 15px 40px;
            box-sizing: border-box;
            color: #666666;
            font-size: 12px;
            text-align: center;
        }
        .form-module .cta a {
            color: #333333;
            text-decoration: none;
        }
        body { padding: 2em; }


    </style>

</head>

<body>

<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
    <h1>Admin Page</h1><span>Add / Remove TAs</span>
</div>
<!-- Form Module-->
<div class="module form-module">

    <div class="form"> </div>
    <!--DON'T DELETE THE DIV ABOVE. IS CRITICAL TO THIS PAGE-->
    <div class="form">
        <h2>Add TA</h2>
            <input id="add_ta_param" name="uname" type="text" placeholder="Scu Username"/>
            <button id="add_ta_button" class="button" >Add TA</button>
        <br><br>
        <h2>Remove TA</h2>
            <input id="remove_ta_param" name="uname" type="text" placeholder="Scu Username"/>
            <button id="remove_ta_button" class="button" >Remove TA</button>
    </div>

</div>

<script>
document.getElementById("add_ta_button").addEventListener("click", function(){
  add_ta(document.getElementById("add_ta_param").value)
});

document.getElementById("remove_ta_button").addEventListener("click", function(){
  remove_ta(document.getElementById("remove_ta_param").value)
});
function remove_ta(email){
      console.log(email)
      $.ajax({
        type: "POST",
        url: "remove_ta.php",
        data: { email:email },
        success:function( msg ) {
          console.log(msg)
        }
       });
  }
  function add_ta(email){
    console.log(email);
        $.ajax({
          type: "POST",
          url: "add_ta.php",
          data: { email:email },
          success:function( msg ) {
            console.log(msg)
          }
         });
    }
</script>
</body>
</html>
