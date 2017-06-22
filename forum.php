<!DOCTYPE html>
<html lang="en">
<head>
<!-- Metas -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Maintenance System</title>
  <!-- Externals link -->
  <link rel="stylesheet" href="forum.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  	<div class="container" id="content">

	<h1>EMPLOYEE'S ERROR FORUM</h1>
	<h3>Please choose a problem you are interested in bellow.</h3>

<?php
	session_start();

	$con=mysqli_connect("mysql.cc.puv.fi","e1500968","aFqJhmAmQepx","e1500968_forum");

	echo "<p id='login'>You have been successfully login as ".$_SESSION['username']." &bull; <a href='logout.php'>Logout</a></p><br>";
	$result = mysqli_query($con, "SELECT * FROM post ORDER BY title ASC ");
	$post ="";
	
	if (mysqli_num_rows($result) >0){
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['post_id'];
			$title = $row['title'];
			$user = $row['author_id'];
			$name = mysqli_fetch_array(mysqli_query($con, "SELECT first_name, last_name FROM users WHERE id LIKE '$user'"));
			$post .="<a href='post.php?id=".$id."' class='post_links container'>".$title."&nbsp"."-"."&nbsp".$name["first_name"]."&nbsp".$name["last_name"]."</a><br>";

		}
	echo $post;
	}
	else {
		echo "<p>There is no existing problem!</p>";
	}

?>

</div>
</html>