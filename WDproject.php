<!DOCTYPE html>
<html lang="en">
<head>
<!-- Metas -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Maintenance System</title>
  <!-- Externals link -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="Customize.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="javascript.js"></script>
  <script src="ajax.js"></script>
 
  <!-- Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
</head>
<body id="gradient" data-spy="scroll" data-target=".navbar" data-offset="50">
<!-- Modal -->
<button id="modaltrigger" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Machine report</h4>
      </div>
      <div class="modal-body">
        <ul class="map-status">
          <li><p id="status_id">Machine ID:</p></li>
          <li><p id="status_state">Status:</p></li>
          <li><p id="next_maintenance">Next scheduled maintenance: </p></li>
          <li id="error_code"><p>Error code: </p></li>
        </ul>
      </div>
      <div class="modal-footer">
        <button id="closemodal" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- nav -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid" id="nav-container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--a class="navbar-brand" href="#"-->
      <a href="#about"><img src="primapower.jpeg" alt="logo" width="50" height="50" class="img-rounded"></a>
      <!--/a-->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">HOME</a></li>
        <li><a href="#skills">MAP <span class="glyphicon glyphicon-map-marker"></span></a></li>
        <li><a href="#plans">DATA BASE <span class="glyphicon glyphicon-th-list"></span></a></li>
        <li><a href="#reportN">FAULT REPORT <span class="glyphicon glyphicon-bullhorn"></span></a></li>
        <li><a href="#chart-area">STATISTICS <span class="glyphicon glyphicon-stats"></span></a></li>
        <li><a href="#member">FORUM <span class="glyphicon glyphicon-user"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid bannercon" id="about" ><img src="mockup-Recovered.jpg" alt="mockup-Recovered" class="banneri"></div>
<div class="container text-center map-container" id="skills">

  <h1>MAP REPRESENTATON</h1>
  <h4> A visual guide to where needs fixing </h4>
  <img id="mapimg" width="1315" height="580" src="map.PNG" alt="The Scream">
  <canvas id="map" width="1315" height="580"></canvas>
  </div>
<div class="container text-center table-container" id="plans">
<div class="col-sm-12"> 

        <h1>DATA TABLE</h1>
        <h4> A detailed information sheet of the 10 devices with the closest maintenance schedule </h4>
        <table class='table table-hover'><thead><tr><th>Area</th><th>Machine ID</th><th>Maintenance Date</th><th>Latest Fault ID</th></tr></thead><tbody><tr><td></td><td>0</td><td></td><td></td></tr><tr><td></td><td>0</td><td></td><td></td></tr><tr><td>A1002</td><td>2</td><td>2016-04-02</td><td>F108</td></tr><tr><td>A1003</td><td>3</td><td>2016-04-17</td><td>F001</td></tr><tr><td>A1004</td><td>4</td><td>2016-05-20</td><td>F107</td></tr><tr><td>A1004</td><td>5</td><td>2016-06-30</td><td>F003</td></tr><tr><td>B1001</td><td>6</td><td>2016-07-01</td><td>F001</td></tr><tr><td>B1002</td><td>7</td><td>2016-07-01</td><td>F108</td></tr><tr><td>B1003</td><td>8</td><td>2017-07-01</td><td>F794</td></tr><tr><td>TKa00</td><td>1</td><td>2017-08-01</td><td>F001</td></tr></tbody></table>        </div></div>
<div class="container form-container" id="reportN">
   <div class="col-sm-12">
            <h1 style="text-align: center">STAFF REPORT FORM</h1>
            <h4 style="text-align: center"> Fill in this form if any fault is found for urgent maintenance. </h4>
            <form action="report.php" method="POST" id="report">
			  <div class="col-sm-4">
                <label>Name*:</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name">
			  </div>
			  <div class="col-sm-4">
                <label>Email*:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
			  </div>
			  <div class="col-sm-4">
                <label>ID*:</label>
                <input type="text" class="form-control" name="id" placeholder="Enter ID">
			  </div>
                <div class="col-sm-6">
                  <label>Room*:</label>
                  <input type="text" class="form-control" name="room" placeholder="Enter room">
                </div>
                <div class="col-sm-6">
                  <label>Machine ID*:</label>
                  <input type="text" class="form-control" name="machine_id" placeholder="Enter ID">
                </div>
                 <!--<div class="col-sm-3"> 
                  <label for="next_maintain">Next maintainance date</label>
                  <input type="date" class="form-control" name="next_maintain" placeholder="YYYY-MM-DD">
                </div> -->
                <label>Details*:</label>
                <textarea class="form-control" name="details" placeholder="Type your details here!" rows="5"></textarea>
                <label>Solution:</label>
                <textarea class="form-control" name="solution" placeholder="Type your solution here!" rows="5"></textarea>
                <p style="text-align:right"> * Required information</p>
                <button type="submit" class="btn btn-default">Submit</button>
             </form>
			<div id="report_error"></div>
        </div>
</div>
<!-- Chart -->
<div class="container-fluid text-center chart-container" id="chart-area">
<h1>CHART</h1>
<h4> A graphical representation of the error tendency in areas. </h4>
<div id="chart_div" class="chart"></div></div>

<!-- Member login -->
<div class="container form-container member-container" id="member">
   <div class="col-sm-12 member-container">
            <h1 style="text-align: center">ERROR FORUM</h1>
            <h4 style="text-align: center"> Error Discussion for All Employee </h4>
            <h4 style="text-align: center"> Username: user, Password: user OR Username: user01, Password: pw01 OR Username: user02, Password: pw02 </h4>
            <label>Username:</label>
                <form  method="POST" action='member.php'>
                <input type="text" class="form-control" name="mid" placeholder="Enter ID">
                <label>Password:</label>
                <input type="password" class="form-control" name="mpassword" placeholder="Enter Password">
                <br>
                <button type="submit" class="btn btn-default">Log in</button>
                </form><br><br>
        </div>
</div>

<!-- Admin login -->
<div class="container form-container admin-container" id="admin">
   <div class="col-sm-12 admin-container">
            <h1 style="text-align: center">ADMIN LOGIN</h1>
            <h4 style="text-align: center"> The id and passwords are both "admin" </h4>
            <form  method="POST" action='admin.php'>
                <label>Username:</label>
                <input type="text" class="form-control" name="id" placeholder="Enter ID">
                <label>Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                <br>
                <button type="submit" class="btn btn-default">Log in</button>
                </form><br><br>
        </div>
</div>


<div class="footer container">
  <footer>&copy; NGUYEN HA, NGUYEN THANH, PHAM CHINH</footer>
</div>
</body>
</html>