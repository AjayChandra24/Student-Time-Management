<?php
if (isset($_POST['submit'])) {
	require('functions.php');
	require('connection.php');
	if (isnotempty($_POST)) {
 	    $e = testinput($_POST['email']);
	    //echo $e;
	    if(notexist($conn,$e)){
	    	echo "<br>See Your Result In Submitting :";
	    	$a = testinput($_POST['fname']);
	    	$b = testinput($_POST['lname']);
	    	$g = testinput($_POST['gender']);
	    	$c = testinput($_POST['college']);
	    	$d = testinput($_POST['course']);
	    	$e = testinput($_POST['email']);
	    	echo $_POST['password'];
	    	$f = md5(testinput($_POST['password'])); //  md5(testinput($_POST['password']));
	    	$sql = "INSERT INTO user (fname,lname,college,course,email,password,gender) VALUES ('$a','$b','$c','$d','$e','$f','$g') ";
	    	echo "<br>";
	    	echo $a;echo "<br>";
	    	echo $b;echo "<br>";
	    	echo $c;echo "<br>";
	    	echo $d;echo "<br>";
	    	echo $e;echo "<br>";
	    	echo $f;echo "<br>";
	    	echo $g;echo "<br>";
	    	$result = $conn->query($sql);
	    	if ($result) {
	    		echo "<br>";
	    		echo "Your Data Registered Successfully! Now You Can Login In Below.";
	    		require('logingin.php');
	    	}else {
	    		echo "<br>";
	    		echo "Problem In Registeration. Please Try Again.";
	    		require('registering.php');
	    	}
	    }else {
	    	echo "<br>";
	    	echo "Email Already Exists. Try Using Another Email.";
	    	require('registering.php');
	    }
    }else {
    	echo "<br>";
    	echo "You Are Required To Enter All The Fields.";
    	require('registering.php');
    }
}else {
	echo "<br>";
	echo "You Didn't Entered The Correct Page! Please Register Below.";
	require('registering.php');
}
?>