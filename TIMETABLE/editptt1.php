<?php
session_start();
if (isset($_POST['submit4'])) {
	require('functions.php');
	require('connection.php');
	//$email = $_SESSION['email'];
	echo "<br>";
	echo $_SESSION['email'];
	//echo $email;
	$email = testinput($_SESSION['email']);
	$date = testinput($_POST['date']);
	echo "<br>";
	echo $date;
	$d = date("Y-m-d", strtotime($date));
	echo "<br>";
	echo $d;
	$date1 = testinput($_POST['date1']);
	echo "<br>";
	echo $date1;
	$d1 = date("Y-m-d", strtotime($date1));
	echo "<br>";
	echo $d1;
	$f1 = testinput($_POST['from1']);
	echo "<br>";
	echo $f1;
	$t1 = testinput($_POST['to1']);
	$s1 = testinput($_POST['subject1']);
	$n1 = testinput($_POST['note1']);
	$f2 = testinput($_POST['from2']);
	$t2 = testinput($_POST['to2']);
	$s2 = testinput($_POST['subject2']);
	$n2 = testinput($_POST['note2']);
	$f3 = testinput($_POST['from3']);
	$t3 = testinput($_POST['to3']);
	$s3 = testinput($_POST['subject3']);
	$n3 = testinput($_POST['note3']);
	$f4 = testinput($_POST['from4']);
	$t4 = testinput($_POST['to4']);
	$s4 = testinput($_POST['subject4']);
	$n4 = testinput($_POST['note4']);
	$f5 = testinput($_POST['from5']);
	$t5 = testinput($_POST['to5']);
	$s5 = testinput($_POST['subject5']);
	$n5 = testinput($_POST['note5']);
	$f6 = testinput($_POST['from6']);
	$t6 = testinput($_POST['to6']);
	$s6 = testinput($_POST['subject6']);
	$n6 = testinput($_POST['note6']);
	$f7 = testinput($_POST['from7']);
	$t7 = testinput($_POST['to7']);
	$s7 = testinput($_POST['subject7']);
	$n7 = testinput($_POST['note7']);
	$f8 = testinput($_POST['from8']);
	$t8 = testinput($_POST['to8']);
	$s8 = testinput($_POST['subject8']);
	$n8 = testinput($_POST['note8']);
	$f9 = testinput($_POST['from9']);
	$t9 = testinput($_POST['to9']);
	$s9 = testinput($_POST['subject9']);
	$n9 = testinput($_POST['note9']);
	$f10 = testinput($_POST['from10']);
	$t10 = testinput($_POST['to10']);
	$s10 = testinput($_POST['subject10']);
	$n10 = testinput($_POST['note10']);


	/*$sql = "INSERT INTO `personaltt` (email,date,date1,timefrom1,timeto1,subject1,note1,timefrom2,timeto2,subject2,note2,timefrom3,timeto3,subject3,note3,timefrom4,timeto4,subject4,note4,timefrom5,timeto5,subject5,note5,timefrom6,timeto6,subject6,note6,timefrom7,timeto7,subject7,note7,timefrom8,timeto8,subject8,note8,timefrom9,timeto9,subject9,note9,timefrom10,timeto10,subject10,note10) VALUES ('$email','$d','$d1', '$f1','$t1','$s1','$n1','$f2','$t2','$s2','$n2','$f3','$t3','$s3','$n3','$f4','$t4','$s4','$n4','$f5','$t5','$s5','$n5','$f6','$t6','$s6','$n6','$f7','$t7','$s7','$n7','$f8','$t8','$s8','$n8','$f9','$t9','$s9','$n9','$f10','$t10','$s10','$n10') ";
	echo "<br>";*/
    /*	echo $m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$th1,$th2,$th3,$th4,$th5,$th6,$th7,$th8,$f1,$f2,$f3,$f4,$f5,$f6,$f7,$f8,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$email;*/

    $sql = "UPDATE personaltt SET date='$d',date1='$d1',timefrom1='$f1',timeto1='$t1',subject1='$s1',note1='$n1',timefrom2='$f2',timeto2='$t2',subject2='$s2',note2='$n2',timefrom3='$f3',timeto3='$t3',subject3='$s3',note3='$n3',timefrom4='$f4',timeto4='$t4',subject4='$s4',note4='$n4',timefrom5='$f5',timeto5='$t5',subject5='$s5',note5='$n5',timefrom6='$f6',timeto6='$t6',subject6='$s6',note6='$n6',timefrom7='$f7',timeto7='$t7',subject7='$s7',note7='$n7',timefrom8='$f8',timeto8='$t8',subject8='$s8',note8='$n8',timefrom9='$f9',timeto9='$t9',subject9='$s9',note9='$n9',timefrom10='$f10',timeto10='$t10',subject10='$s10',note10='$n10'  WHERE email = '$email' ";


	echo $sql;
	$result = $conn->query($sql);
	//$result=mysqli_query($conn,$sql);
	//$data = $conn->fetch_assoc();
	echo "<br>";
	if ($result) {
		echo "<br>";
		echo "Your Personal TimeTable Updated Successfully. Please LogIn Again To Check Your Updated PersonalTimetable.";
		require('logingin.php');
	}else {
		echo "<br>";
		echo "There Is Problem In Updating Your Personal TimeTable. Please Try Again.";
		require('logingin.php');
	}
}
?>
