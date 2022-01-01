<?php

session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "hotel management");

$username = $_POST["username"];
$email = $_POST["email"];
$numofdays = $_POST["numofdays"];


$sql = "SELECT * FROM book WHERE username='$username'";

$result = mysqli_query($con, $sql);

$n = mysqli_num_rows($result);

if($n==1){
	echo "Record is already added.";
} 

else 
{
    $reg = "INSERT INTO book (username, email, numofdays) VALUES ('$username','$email', '$numofdays')"; 
    mysqli_query($con,$reg);
    echo "Records added sucessfully";
}

?>