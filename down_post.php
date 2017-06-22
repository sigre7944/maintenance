<?php
session_start();

$con=mysqli_connect("mysql.cc.puv.fi","e1500968","aFqJhmAmQepx","e1500968_forum");

if(isset($_GET['type'], $_GET['id'])){

	$type = $_GET['type'];
	$id = $_GET['id'];
	$author = $_SESSION['username'];
	$res = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM users WHERE username LIKE '$author'" ));
	$author_id = $res['id'];

	switch($type){
		case 'post':
			$result = mysqli_query($con, "
					INSERT INTO vote (post_id, voter_id) 
						SELECT {$id}, {$author_id}
						FROM post
						WHERE EXISTS (
							SELECT post_id
							FROM post
							WHERE post_id = {$id})
							AND NOT EXISTS(
								SELECT vote_id
								FROM vote
								WHERE voter_id = {$author_id}
								AND post_id = {$id})
							LIMIT 1");

			$result1 = mysqli_query($con, "
					UPDATE  post
						SET     down_vote = IF((
						SELECT 
   						 SUM(IF(voter_id = {$author_id} AND post_id = {$id} AND MOD(down_value, 2) = 1, 1, 0))
						FROM vote) > 0, down_vote - 1 , down_vote + 1)
					WHERE post_id = {$id}");

			$result2 = mysqli_query($con, "
					UPDATE  vote
						SET down_value = down_value + 1 WHERE voter_id = {$author_id} AND post_id = {$id}
");



		break;


		case 'comment':
			$cid = $_GET['cid'];
			$result = mysqli_query($con, "
					INSERT INTO cvote (comment_id, voter_id) 
						SELECT {$cid}, {$author_id}
						FROM comment
						WHERE EXISTS (
							SELECT comment_id
							FROM comment
							WHERE comment_id = {$cid})
							AND NOT EXISTS(
								SELECT vote_id
								FROM cvote
								WHERE voter_id = {$author_id}
								AND comment_id = {$cid})
							LIMIT 1");

			$result1 = mysqli_query($con, "
					UPDATE  comment
						SET     down_vote = IF((
						SELECT 
   						 SUM(IF(voter_id = {$author_id} AND comment_id = {$cid} AND MOD(down_value, 2) = 1, 1, 0))
						FROM cvote) > 0, down_vote - 1 , down_vote + 1)
					WHERE comment_id = {$cid}");

			$result2 = mysqli_query($con, "
					UPDATE  cvote
						SET down_value = down_value + 1 WHERE voter_id = {$author_id} AND comment_id = {$cid}");

		break;
		}
		
	if (!$result) {
    	die('Invalid query ' . mysql_error());
		}
		else{
			echo'Liked';
			header("Location: post.php?id=$id");
		}
	

	if (!$result1) {
    	die('Invalid query ' . mysql_error());
		}
		else{
			echo'Changed';
			//header("Location: post.php?id=$id");
		}

	if (!$result2) {
    	die('Invalid query ' . mysql_error());
		}
		else{
			echo'Changed2';
			header("Location: post.php?id=$id");
		}



	} //end of isset

?>