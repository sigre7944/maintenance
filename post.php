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
  <script src="vote.js"></script>



	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  	<div class="container" id="content">

	<h1>EMPLOYEE'S ERROR FORUM</h1>

<?php
	session_start();

	$con=mysqli_connect("mysql.cc.puv.fi","e1500968","aFqJhmAmQepx","e1500968_forum");

	if (isset($_SESSION['username'])){
		echo "<p id='login'>You have been successfully login as ".$_SESSION['username']." &bull; <a href='logout.php'>Logout</a></p></dbr>";
		echo "<a href='forum.php'>Go back to problem list</a>";
		}
		else {
		echo "<p> Please click <a href='WDproject.php#member'>here</a> to log in to be able to post a comment or vote </p><br>";
		}

	$result = mysqli_query($con, "SELECT * FROM post ORDER BY title ASC ");
	$post ="";

	$id = $_GET['id'];

?>

	<div class="container" id="text">

	<?php
	$result = mysqli_query($con, "SELECT * FROM post WHERE post_id LIKE '$id' ");

	
	if (mysqli_num_rows($result) >0){
			$row = mysqli_fetch_array($result);
			$pid = $row['post_id'];
			$title = $row['title'];
			$user = $row['author_id'];
			$content = $row['content'];
			$up = $row['up_vote'];
			$down = $row['down_vote'];
			$name = mysqli_fetch_array(mysqli_query($con, "SELECT first_name, last_name FROM users WHERE id LIKE '$user'"));
			$heading = "<h2>".$title."</h2><br><h4>".$name['first_name']."&nbsp".$name['last_name']."</h4><br>";
			$post .="<p id='post_content'>".$content."</p></div>";
			$post .="<div align='right' id='post_vote'><p>".$up."&nbsp<a href='up_post.php?type=post&id=".$pid."'><img src='up.png' width='30px' height='30px'></a>&nbsp&nbsp".$down."&nbsp<a href='down_post.php?type=post&id=".$pid."'><img src='down.png' width='30px' height='30px'></a></p><br><p id='post_warning'></div>";
		echo $heading;
		echo $post;
	}
	else {
		echo "<p>You are trying to view a non-existing post, click <a href='forum.php'>here</a> to return and see more problem posts!.</p>";
	}

	$comment ="";

	$res = mysqli_query($con, "SELECT * from comment WHERE post_id LIKE '$id' ORDER BY comment_id ASC");
	echo "<div class='comment_container'>";
	if (mysqli_num_rows($res) >0){
		while ($row = mysqli_fetch_array($res)) {
		$cid = $row['comment_id'];
		$author = $row['author_id'];
		$content = $row['content'];
		$up = $row['up_vote'];
		$down = $row['down_vote'];
		$name = mysqli_fetch_array(mysqli_query($con, "SELECT first_name, last_name FROM users WHERE id LIKE '$author'"));
		$first = $name['first_name'];
		$last = $name['last_name'];
		$comment .= "<div  class='comment' id='comment_no".$cid."'><p>".$content."</p><br><p class='comment_author'>".$first."&nbsp".$last."</p><br></div>";
		$comment .="<div align='right' id='post_vote'><p>".$up."&nbsp<a href='up_post.php?type=comment&cid=".$cid."&id=".$pid."'><img src='up.png' width='22px' height='22px'></a>&nbsp&nbsp".$down."&nbsp<a href='down_post.php?type=comment&cid=".$cid."&id=".$pid."'><img src='down.png' width='22px' height='22px'></a></p><p id='warning_no".$cid."'></div>";
				}
		echo $comment;
	} 
	else {
		if (isset($_SESSION['username']))
			{
			echo "<p>There is no comment yet, feel free to post one if you have any good idea</p>";
			}
		else{
			echo "<p>You have not log gin yet, log in to post a comment!</p>";
		}
	}
	echo "</div><div id='comment_submit'>";

	if (isset($_SESSION['username'])){
		$_SESSION['post_id'] = $id;
		echo '<form  method="POST" action="comment.php">
                <label>Comment</label>
                <textarea name="comment" wrap="soft" type="text"></textarea> 
                <button type="submit" class="btn btn-default">Submit Comment</button>
                </form><br></div>';
	}

	?>

	

</div>
</html>