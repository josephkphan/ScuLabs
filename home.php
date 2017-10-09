<!DOCTYPE html>
<html>
<head>
    <title>HTML5 Event Calendar</title>
	<!-- demo stylesheet -->
    	<link type="text/css" rel="stylesheet" href="media/layout.css" />

        <link type="text/css" rel="stylesheet" href="themes/calendar_g.css" />
        <link type="text/css" rel="stylesheet" href="themes/calendar_green.css" />
        <link type="text/css" rel="stylesheet" href="themes/calendar_traditional.css" />
        <link type="text/css" rel="stylesheet" href="themes/calendar_transparent.css" />
        <link type="text/css" rel="stylesheet" href="themes/calendar_white.css" />
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />


        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Animation library for notifications   -->
        <link href="assets/css/animate.min.css" rel="stylesheet"/>

        <!--  Light Bootstrap Table core CSS    -->
        <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="assets/css/demo.css" rel="stylesheet" />


        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

	<!-- helper libraries -->
	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>

	<!-- daypilot libraries -->
        <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>

</head>


<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />


<!-- Bootstrap core CSS     -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

<!-- Animation library for notifications   -->
<link href="assets/css/animate.min.css" rel="stylesheet"/>

<!--  Light Bootstrap Table core CSS    -->
<link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


<!--  CSS for Demo Purpose, don't include it in your project     -->
<link href="assets/css/demo.css" rel="stylesheet" />


<!--     Fonts and icons     -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
<div class="sidebar" data-color="red" data-image="assets/img/sidebar-6.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a class="simple-text">
                Scu Labs
            </a>
        </div>

        <ul class="nav">
            <li class="active">
                <a href="home.php">
                    <i class="pe-7s-home"></i>
                    <p>Home</p>
                </a>
            </li>
            <li>
                <a href="coen10.php">
                    <i class="pe-7s-box2"></i>
                    <p>Coen10</p>
                </a>
            </li>
            <li>
                <a href="Coen11.html">
                    <i class="pe-7s-box2"></i>
                    <p>Coen11</p>
                </a>
            </li>
            <li>
                <a href="Coen12.html">
                    <i class="pe-7s-box2"></i>
                    <p>Coen12</p>
                </a>
            </li>
            <li>
                <a href="settings.html">
                    <i class="pe-7s-config"></i>
                    <p>Settings</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="support.html">
                    <i class="pe-7s-users"></i>
                    <p>Product Support</p>
                </a>
            </li>

        </ul>
    </div>
</div>

<div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Dashboard</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-globe"></i>
                            <b class="caret hidden-sm hidden-xs"></b>
                            <span class="notification hidden-sm hidden-xs">5</span>
                            <p class="hidden-lg hidden-md">
                                5 Notifications
                                <b class="caret"></b>
                            </p>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Notification 1</a></li>
                            <li><a href="#">Notification 2</a></li>
                            <li><a href="#">Notification 3</a></li>
                            <li><a href="#">Notification 4</a></li>
                            <li><a href="#">Another notification</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <p>
                                Dropdown
                                <b class="caret"></b>
                            </p>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="login.html">
                            <p>Log out</p>
                        </a>
                    </li>
                    <li class="separator hidden-lg hidden-md"></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="content">
      <div id="header">
      </div>
      <div class="hideSkipLink">
      </div>
      <div class="main">

          <div style="float:left; width: 160px;">
              <div id="nav"></div>
          </div>
          <div style="margin-left: 160px;">

              <div class="space">
                  Theme: <select id="theme">
                      <option value="calendar_default">Default</option>
                      <option value="calendar_white">White</option>
                      <option value="calendar_g">Google-Like</option>
                      <option value="calendar_green">Green</option>
                      <option value="calendar_traditional">Traditional</option>
                      <option value="calendar_transparent">Transparent</option>
                  </select>
              </div>

              <div id="dp"></div>
          </div>

          <script type="text/javascript">

              var nav = new DayPilot.Navigator("nav");
              nav.showMonths = 3;
              nav.skipMonths = 3;
              nav.selectMode = "week";
              nav.onTimeRangeSelected = function(args) {
                  dp.startDate = args.day;
                  dp.update();
                  loadEvents();
              };
              nav.init();

              var dp = new DayPilot.Calendar("dp");
              dp.viewType = "Week";

              dp.onEventMoved = function (args) {
                  $.post("backend_move.php",
                          {
                              id: args.e.id(),
                              newStart: args.newStart.toString(),
                              newEnd: args.newEnd.toString()
                          },
                          function() {
                              console.log("Moved.");
                          });
              };

              dp.onEventResized = function (args) {
                  $.post("backend_resize.php",
                          {
                              id: args.e.id(),
                              newStart: args.newStart.toString(),
                              newEnd: args.newEnd.toString()
                          },
                          function() {
                              console.log("Resized.");
                          });
              };

              // event creating
              dp.onTimeRangeSelected = function (args) {
                  var name = prompt("New event name:", "Event");
                  dp.clearSelection();
                  if (!name) return;
                  var e = new DayPilot.Event({
                      start: args.start,
                      end: args.end,
                      id: DayPilot.guid(),
                      resource: args.resource,
                      text: name
                  });
                  dp.events.add(e);

                  $.post("backend_create.php",
                          {
                              start: args.start.toString(),
                              end: args.end.toString(),
                              name: name
                          },
                          function() {
                              console.log("Created.");
                          });

              };

              dp.onEventClick = function(args) {
                  alert("clicked: " + args.e.id());
              };

              dp.init();

              loadEvents();

              function loadEvents() {
                  var start = dp.visibleStart();
                  var end = dp.visibleEnd();

                  $.post("backend_events.php",
                  {
                      start: start.toString(),
                      end: end.toString()
                  },
                  function(data) {
                      //console.log(data);
                      dp.events.list = data;
                      dp.update();
                  });
              }

          </script>

          <script type="text/javascript">
          $(document).ready(function() {
              $("#theme").change(function(e) {
                  dp.theme = this.value;
                  dp.update();
              });
          });
          </script>

      </div>
      <div class="clear">
      </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <p class="copyright pull-right">
                &copy; <script>document.write(new Date().getFullYear())</script> My Smart Mirror
            </p>
        </div>
    </footer>

</div>
</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

<script type="text/javascript">
$(document).ready(function () {

    demo.initChartist();

    $.notify({
        icon: 'pe-7s-ribbon',
        message: "Welcome to <b>Scu Labs</b> "

    }, {
        type: 'info',
        timer: 4000
    });

});
</script>

</html>
