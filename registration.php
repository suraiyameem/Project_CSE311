
<?php

 session_start();
 header('location: guest_login.html');
 $con= mysqli_connect("localhost", "root", "");
 mysqli_select_db($con, "hotel management");
 $name = $_POST["user"];
 $password = $_POST["pass"];

 $var= "SELECT * FROM users WHERE username='$name'";
$result = mysqli_query($con, $var);
$n= mysqli_num_rows($result);

if ($n == 1){
	echo "Username is already taken";
}
else {
	$reg="INSERT INTO users (username, password) values ('$name', '$password')";
	mysqli_query($con, $reg);
	echo "Registration Succesful";
}

?>