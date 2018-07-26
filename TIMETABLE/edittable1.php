<?php
session_start();
if (isset($_POST['submit3'])) {
	require('functions.php');
	require('connection.php');
	$email = $_SESSION['email'];
	echo "<br>";
	echo $email;
	$m1 = testinput($_POST['m1']);
	$m2 = testinput($_POST['m2']);
	$m3 = testinput($_POST['m3']);
	$m4 = testinput($_POST['m4']);
	$m5 = testinput($_POST['m5']);
	$m6 = testinput($_POST['m6']);
	$m7 = testinput($_POST['m7']);
	$m8 = testinput($_POST['m8']);
	$t1 = testinput($_POST['t1']);
	$t2 = testinput($_POST['t2']);
	$t3 = testinput($_POST['t3']);
	$t4 = testinput($_POST['t4']);
	$t5 = testinput($_POST['t5']);
	$t6 = testinput($_POST['t6']);
	$t7 = testinput($_POST['t7']);
	$t8 = testinput($_POST['t8']);
	$w1 = testinput($_POST['w1']);
	$w2 = testinput($_POST['w2']);
	$w3 = testinput($_POST['w3']);
	$w4 = testinput($_POST['w4']);
	$w5 = testinput($_POST['w5']);
	$w6 = testinput($_POST['w6']);
	$w7 = testinput($_POST['w7']);
	$w8 = testinput($_POST['w8']);
	$th1 = testinput($_POST['th1']);
	$th2 = testinput($_POST['th2']);
	$th3 = testinput($_POST['th3']);
	$th4 = testinput($_POST['th4']);
	$th5 = testinput($_POST['th5']);
	$th6 = testinput($_POST['th6']);
	$th7 = testinput($_POST['th7']);
	$th8 = testinput($_POST['th8']);
	$f1 = testinput($_POST['f1']);
	$f2 = testinput($_POST['f2']);
	$f3 = testinput($_POST['f3']);
	$f4 = testinput($_POST['f4']);
	$f5 = testinput($_POST['f5']);
	$f6 = testinput($_POST['f6']);
	$f7 = testinput($_POST['f7']);
	$f8 = testinput($_POST['f8']);
	$s1 = testinput($_POST['s1']);
	$s2 = testinput($_POST['s2']);
	$s3 = testinput($_POST['s3']);
	$s4 = testinput($_POST['s4']);
	$s5 = testinput($_POST['s5']);
	$s6 = testinput($_POST['s6']);
	$s7 = testinput($_POST['s7']);
	$s8 = testinput($_POST['s8']);
	/*$sql = "INSERT INTO `usertable` (m1,m2,m3,m4,m5,m6,m7,m8,t1,t2,t3,t4,t5,t6,t7,t8,w1,w2,w3,w4,w5,w6,w7,w8,th1,th2,th3,th4,th5,th6,th7,th8,f1,f2,f3,f4,f5,f6,f7,f8,s1,s2,s3,s4,s5,s6,s7,s8,email) VALUES ('$m1','$m2','$m3','$m4','$m5','$m6','$m7','$m8','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$w1','$w2','$w3','$w4','$w5','$w6','$w7','$w8','$th1','$th2','$th3','$th4','$th5','$th6','$th7','$th8','$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$email') ";
	echo "<br>";*/
    /*	echo $m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$th1,$th2,$th3,$th4,$th5,$th6,$th7,$th8,$f1,$f2,$f3,$f4,$f5,$f6,$f7,$f8,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$email;*/

    $sql = "UPDATE usertable SET m1 = '$m1',m2 = '$m2',m3 = '$m3',m4 = '$m4',m5 = '$m5',m6 = '$m6',m7 = '$m7',m8 = '$m8',t1 = '$t1',t2 = '$t2',t3 = '$t3',t4 = '$t4',t5 = '$t5',t6 = '$t6',t7 = '$t7',t8 = '$t8',w1 = '$w1',w2 = '$w2',w3 = '$w3',w4 = '$w4',w5 = '$w5',w6 = '$w6',w7 = '$w7',w8 = '$w8',th1 = '$th1',th2 = '$th2',th3 = '$th3',th4 = '$th4',th5 = '$th5',th6 = '$th6',th7 = '$th7',th8 = '$th8',f1 = '$f1',f2 = '$f2',f3 = '$f3',f4= '$f4',f5 = '$f5',f6 = '$f6',f7 = '$f7',f8 = '$f8',s1 = '$s1',s2 = '$s2',s3 = '$s3',s4 = '$s4',s5 = '$s5',s6 = '$s6',s7 = '$s7',s8 = '$s8' WHERE email = '$email' ";



	echo $sql;
	$result = $conn->query($sql);
	//$result=mysqli_query($conn,$sql);
	//$data = $conn->fetch_assoc();
	echo "<br>";
	if ($result) {
		echo "<br>";
		echo "Your TimeTable Updated Successfully. Please LogIn Again To Check Your Updated TimeTable.";
		require('logingin.php'); //require('seetable.php');
	}else {
		echo "<br>";
		echo "There Is Problem In Updating Your TimeTable. Please Try Again By LogingIn.";
		require('logingin.php');
	}
}
?>