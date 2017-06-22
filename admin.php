<?php
$con=mysqli_connect("mysql.cc.puv.fi","e1500962","dF3VpugG7TEr","e1500962_Maintainance");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_POST['id'];
$password = $_POST['password'];

$result = mysqli_query($con, "SELECT * FROM admins WHERE id LIKE '$id' AND password LIKE '$password'");

if (mysqli_num_rows($result) > 0)
{
	header("location:login.php");
}
else {
echo "Wrong Username or Password, username is 'admin' and password is 'admin' ";
}
mysqli_close($con);
?>