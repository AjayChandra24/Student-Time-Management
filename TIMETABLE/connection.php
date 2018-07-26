<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ajay";
$conn = new mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
	die("Connection Not Established :" .$conn->connect_error);
}else{
	//echo "Connection Established!";
	echo "<br>";
}
?>