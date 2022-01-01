<?php

$con= mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "hotel management");

$sql="SELECT * FROM book";

if($result = mysqli_query($con, $sql)){

if(mysqli_num_rows($result) > 0){
echo "<table>";
echo "<tr>";
echo "<th> Room Number   </th>";
echo "<th> Guest Username  </th>";
echo "<th> Email </th>";
echo "<th> Number of Days </th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['room_id'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['numofdays'] . "</td>";
echo "</tr>";
}
echo "</table>";
// Free result set
mysqli_free_result($result);
} else{
echo "No records matching your query were found.";
}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
// Close connection
mysqli_close($con);
?>