
<?php

 session_start();
 header('location: guest_login.html');
 $con= mysqli_connect("localhost", "root", "");
 mysqli_select_db($con, "hotel management");
 $Name = $_POST["Name"];
 $user = $_POST["user"];
 $password = $_POST["pass"];

 $var= "SELECT * FROM users WHERE username='$user'";
$result = mysqli_query($con, $var);
$n= mysqli_num_rows($result);

if ($n == 1){
	header('location: failed_registration.html');
	echo "Username is already taken";
}
else {
	$reg="INSERT INTO users (Name, username, password) values ('$Name', '$user', '$password')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
}

?>