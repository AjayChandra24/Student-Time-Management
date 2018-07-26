<?php
session_start();
require('connection.php');
require('functions.php');
if (isset($_POST['submit2'])) {

echo $_POST['password1'];
echo "<br>";
echo $_SESSION['password'];
echo "<br>";
echo $_POST['password2'];
echo "<br>";


	$p1 = md5(testinput($_POST['password1'])); //   md5(testinput($_POST['password1']));
echo $p1;


	if($_SESSION['password'] == $p1){ 
	
		$fn1 = testinput($_POST['fname1']);
		$ln1 = testinput($_POST['lname1']);
		$ge1 = testinput($_POST['gender1']);
		$cg1 = testinput($_POST['college1']);
		$co1 = testinput($_POST['course1']);
		$e1 = $_SESSION['email'];
		$pa1 = (testinput($_POST['password2']));

		if(newvalue($pa1)){

			$paa1 = md5($pa1);

		}else {

			$paa1 = $pa1;

		}


		echo "<br>";echo $pa1; //    md5(testinput($_POST['password2']));


		if(newvalue($fn1)){

			$fn2 = $fn1;
		}else {

			$fn2 = $_SESSION['fname'];
		}
		$sql = "UPDATE user SET fname = '$fn2' WHERE email = '$e1' ";
		$result = $conn->query($sql);


		if(newvalue($ln1)){

			$ln2 = $ln1;
		}else {

			$ln2 = $_SESSION['lname'];
		}
		$sql = "UPDATE user SET lname = '$ln2' WHERE email = '$e1' ";
		$result = $conn->query($sql);
	


		if(newvalue($ge1)){

			$ge2 = $ge1;
		}else {

			$ge2 = $_SESSION['gender'];
		}
		$sql = "UPDATE user SET gender = '$ge2' WHERE email = '$e1' ";
		$result = $conn->query($sql);
		


		if(newvalue($cg1)){

			$cg2 = $cg1;
		}else {

			$cg2 = $_SESSION['college'];
		}
		$sql = "UPDATE user SET college = '$cg2' WHERE email = '$e1' ";
		$result = $conn->query($sql);
		


		if(newvalue($co1)){

			$co2 = $co1;
		}else {

			$co2 = $_SESSION['course'];
		}
		$sql = "UPDATE user SET course = '$co2' WHERE email = '$e1' ";
		$result = $conn->query($sql);
	


		if(newvalue($paa1)){

			$pa2 = $paa1;
			echo $pa2;
			echo $p1;
		}else {
			echo $p1;

			$pa2 = $p1;
			echo $pa2;
		}
		$sql = "UPDATE user SET password = '$pa2' WHERE email = '$e1' ";
		$result = $conn->query($sql);




echo "<br>";


session_unset();
session_destroy();

require('logingin.php');


}
}




?>

