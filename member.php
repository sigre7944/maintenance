<?php 

session_start();
//error_reporting(E_ERROR | E_PARSE);
$con=mysqli_connect("mysql.cc.puv.fi","e1500968","aFqJhmAmQepx","e1500968_forum");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_POST['mid'];
$password = $_POST['mpassword'];

$result = mysqli_query($con, "SELECT * FROM users WHERE username LIKE '$id' AND pwd LIKE '$password' ");

if (mysqli_num_rows($result) == 1)
{
	$_SESSION['username'] = $id;
	header("location:forum.php");
}
else {
echo "Wrong Username or Password. Please return to previous page.";
}
?>