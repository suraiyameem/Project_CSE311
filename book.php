<?php

session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "hotel management");

$room_id = $_POST["room_id"];
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
    $reg = "INSERT INTO book (room_id, username, email, numofdays) VALUES ('$room_id','$username','$email','$numofdays')"; 

    mysqli_query($con,$reg);
    echo "Your booking was successful!";
}

?>

