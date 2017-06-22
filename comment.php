<?php
 	
 	session_start();
	 $con = mysqli_connect("mysql.cc.puv.fi","e1500968","aFqJhmAmQepx","e1500968_forum");
	 if (mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		

	 $comment = $_POST['comment'];
	 $post_id = $_SESSION['post_id'];
	 $author = $_SESSION['username'];
	 $res = mysqli_query($con, "SELECT * FROM users WHERE username LIKE '$author'");
	 $row = mysqli_fetch_array($res);
	 $author_id = $row['id'];
	 

	 if ($comment!=""){
	 $result = mysqli_query($con,"INSERT INTO comment (post_id, author_id, `content`) VALUES ('$post_id', '$author_id', '$comment')");
	 if (!$result) {
    	die('Invalid query ' . mysql_error());
		}
		else{
			echo "<p> Comment added, click <a href='forum.php'> here</a> to check other problems.</p>";
		}}
  	else{
  	  echo 'Please fill in your comment';  
  	echo $author_id;
   	 }


?>