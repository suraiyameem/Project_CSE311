<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Data fetched from Database</title>
    <style media="screen">
    	table{
    		border:1px solid black;border-collapse: collapse;
    		width: 1000px;
    		margin-left: 150px;
    		margin-bottom: 30px;
    	}
    	th{
    		border: 1px solid black;
            font-size: 20px;
            padding: 8px;
    	}
    	td{
    		border:1px solid black;
    		text-align: center;
    		padding: 6px;
    		font-size: 19px;
    	}
    	h2{
    		text-align: center;
    		padding: 6px;
    	}
    </style>
</head>
<body>

<?php

$con= mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "hotel management");

?>

<h2>Guest Information</h2>

<?php

$sql="SELECT * FROM users";

if($result = mysqli_query($con, $sql)){

if(mysqli_num_rows($result) > 0){
	
echo "<table>";
echo "<tr>";
echo "<th> Name </th>";
echo "<th> Username </th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
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

</table>

</body>
</html>