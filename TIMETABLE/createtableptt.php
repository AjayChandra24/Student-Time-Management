<?php
session_start();
echo "<br>";
echo $_SESSION['email'];
require('homeheader3.html');
require('createtable.html');

echo "<br>";
require('connection.php');
$email = $_SESSION['email'];



$sql = "SELECT * FROM personaltt WHERE email='$email' ";
		$result = $conn->query($sql);
		$res = $result->fetch_assoc();
		if (empty($res)) {
			echo "<br>";

	echo " 
	<a href='personaltt1.php' class='personaltt'>Create PersonalTimetable</a><br>
	  ";
		}else {
			echo "<br>";
	echo "
	<a href='personalttsee1.php' class='personaltt'>Check Your PersonalTimeTable</a>

	";
		}




?>


<?php
require('homefooter.html');


/*
<a class="personaltt" href='personaltt1.php'>Create PersonalTimeTable</a>
	<br>
	<a class="personaltt" href='personalttsee1.php'>Check Your PersonalTimeTable</a> */

?>	