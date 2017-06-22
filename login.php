<!DOCTYPE html>
<html lang="en">
<head>
<!-- Metas -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Database System</title>
  <!-- Externals link -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="Custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js.js"></script>
  
  <!-- Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="tab-container">
  <h1>Database Management System</h1>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Report</a></li>
    <li><a data-toggle="tab" href="#menu1">Maintenance</a></li>


  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Reports</h2>
      <h3>Search</h3>
      <form role="form" id="rsearch"  method="POST">
      			<input type="radio" name="all" value="y"> View All<br>
      			<input type="radio" name="all" value=""> Normal Search<br>
                <div class = "col-sm-3">
                  <label for="name">Name</label>
                  <input type="name" class="form-control" name="name" placeholder="Enter name">
                </div>
                <div class = "col-sm-3">
                  <label for="id">Fault ID</label>
                  <input type="name" class="form-control" name="id" placeholder="Enter id">
                </div>
                <div class = "col-sm-3">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter email">
             </div>
                <div class = "col-sm-3">
                <label for="id">Room</label>
                <input type="text" class="form-control" name="room" placeholder="Enter room ID">
                </div>
                <div class="col-sm-3">
                  <label for="machine">Machine ID</label>
                  <input type="text" class="form-control" name="machine" placeholder="Enter ID">
                </div>

                <button type="submit" class="btn btn-lg btn-default cus-s-btn">Search</button>
             </form> 
           <div id="rresult"></div>
           </div>


    <div id="menu1" class="tab-pane fade">
      <h2>Maintain</h2>
      <h3>Search</h3>
      <form role="form" id="msearch"  method="POST">
      			<input type="radio" name="all" value="y"> View All<br>
      			<input type="radio" name="all" value=""> Normal Search<br>
                <div class = "col-sm-3">
                <label for="machine">Machine ID</label>
                <input type="text" class="form-control" name="machine" placeholder="Enter ID" >
                </div>
                <div class = "col-sm-3">
                  <label for="room">Room ID</label>
                  <input type="room" class="form-control" name="room" id="name" placeholder="Enter ID">
                </div>
                <div class = "col-sm-3">
                  <label for="fault">Latest Fault</label>
                  <input type="text" class="form-control" name="fault" placeholder="Enter ID">
                </div>
                <div class="col-sm-3">
                  <label for="next">Next Maintainence</label>
                  <input type="next" class="form-control" name="next" placeholder="Enter date in the form yyyy-mm-dd">
                </div>
                <button type="submit" class="btn btn-lg btn-default cus-s-btn">Search</button>
             </form> 
           <div id="mresult"></div>
               
     
             <h3>Change</h3>
            <form role="form" id="mchange" method="POST">
              <div class = "col-sm-3">
                  <label for="id">Machine ID</label>
                  <input type="number" class="form-control" name="id" placeholder="Enter ID">
                </div>

                <div class="col-sm-3">
                  <label for="column">Column Name</label>
                   <select name="column">
                    <option value="">Select a column:</option>
                    <option value="room">Room</option>
                    <option value="latest_fault">Latest Fault</option>
                    <option value="next_maintain">Next Maintenance</option>
                  </select>
                </div>
                 <div class="col-sm-3">
                  <label for="value">New value</label>
                  <input type="text" class="form-control" name="value" placeholder="Enter new value">
                </div>
                <button type="submit" class="btn btn-lg btn-default">Change</button>
            </form>
            <div id="m2result"></div>


</div>
</body>
</html>