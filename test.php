<?php
$servername = "dbserver.engr.scu.edu";
$username = "jphan1";
$password = "sandbox";
$db_name = "sdb_jphan1";
?>

<script>
window.alert = function(msg) {
    console.log(msg);
}
</script>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Scu Labs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="courses_filter_search.js"></script>
  </head>
  <body>
  	<h1> COEN Graduate Course Equivalence</h1>


    <!doctype html>
    <html>
    <head>
        <title>Timetable</title>
        <style type="text/css">
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
            padding: 5px 10px;
        }

        th
        {
            background: #666;
            color: white;
            padding: 5px 10px;
        }

        td:hover
        {
            cursor: pointer;
            background: #666;
            color: white;
        }
        </style>

    </head>
    <body>
        <table width="80%" align="center" >
        <div id="head_nav">
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thrusday</th>
            <th>Friday</th>
            <th>Saturday</th>
        </tr>
    </div>

        <tr>
            <th>10:00 - 11:00</th>

                <td>Physics-1</td>
                <td>English</td>
                <td title="No Class" class="Holiday"></td>
                <td>Chemestry-1</td>
                <td>Alzebra</td>
                <td>Physical</td>
            </div>
        </tr>

        <tr>
            <th>11:00 - 12:00</td>

                <td>Math-2</td>
                <td>Chemestry-2</td>
                <td>Physics-1</td>
                <td>Hindi</td>
                <td>English</td>
                <td>Soft Skill</td>
            </div>
        </tr>

        <tr>
            <th>12:00 - 01:00</td>

                <td>Hindi</td>
                <td>English</td>
                <td>Math-1</td>
                <td>Chemistry</td>
                <td>Physics</td>
                <td>Chem.Lab</td>

            </div>
        </tr>

        <tr>
            <th>01:00 - 02:00</td>

                <td>Cumm. Skill</td>
                <td>Sports</td>
                <td>English</td>
                <td>Computer Lab</td>
                <td>Header</td>
                <td>Header</td>

            </div>
        </tr>

        <tr>
            <th>02:00 - 03:00</td>

                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
                <td>Header</td>
            </div>
        </tr>
    </table>
  </body>
</html>
