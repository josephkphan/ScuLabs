<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/login.css">

    <style>
        body {
            background: #e9e9e9;
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
    <h1>Scu Labs</h1><span>Innovation coming to you</span>
</div>
<!-- Form Module-->
<div class="module form-module">

    <div class="form"> </div>
    <!--DON'T DELETE THE DIV ABOVE. IS CRITICAL TO THIS PAGE-->
    <div class="form">
        <h2>Sign In</h2>
        <form action="check_credentials.php" method="post">
            <input name="uname" type="text" placeholder="Scu Username"/>
            <input name="pass" type="password" placeholder="Password"/>
            <button class="button" type="submit">Login</button>
        </form>
        <br>
    </div>
    <div class="cta"><a href="register.php">Register Here</a></div>

</div>


</body>
</html>
