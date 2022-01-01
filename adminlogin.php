<?php
session_start();
 $con= mysqli_connect("localhost", "root", "");
 mysqli_select_db($con, "hotel management");
 $name = $_POST["username"];
 $password = $_POST["password"];

 $v= "SELECT * FROM users WHERE username='$name' && password='$password' && user_level= '1'";
$result = mysqli_query($con, $v);
$n= mysqli_num_rows($result);

if ($n == 1) {
	$_SESSION['username'] = $name;

	header('location: Manager_Homepage.html');
}
else {
	header('location: admin_login.html');
	echo "Invalid";
}
?>