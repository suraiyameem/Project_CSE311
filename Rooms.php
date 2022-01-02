<?php

$con= mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "hotel management");

$sql="SELECT * FROM rooms";

if($result = mysqli_query($con, $sql)){

if(mysqli_num_rows($result) > 0){
echo "<table>";
echo "<tr>";
echo "<th> Room Id</th>";
echo "<th> Price  </th>";
echo "<th> Availability </th>";
echo "<th> Description </th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['room_id'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['availability'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
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