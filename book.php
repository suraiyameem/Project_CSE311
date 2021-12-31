<?php

$link = mysqli_connect("localhost", "root", "", "hotel management");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$numofdays = mysqli_real_escape_string($link, $_REQUEST['numofdays']);
$comment = mysqli_real_escape_string($link, $_REQUEST['comment']);

// attempt insert query execution
$sql = "INSERT INTO book (name, email, numofdays, comment) VALUES ('$name',
'$email', '$numofdays','comment')";

if(mysqli_query($link, $sql)){
echo "Records added successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// close connection
mysqli_close($link);
?>
