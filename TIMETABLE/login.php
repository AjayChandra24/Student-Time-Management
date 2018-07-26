<?php
session_start();
//if (isset($_SESSION['email'])) {
//	unset($_SESSION['email']);
//}
if (isset($_POST['submit'])) {
	require('functions.php');
	require('connection.php');
	if (isnotempty($_POST)) {
		$e = testinput($_POST['email']);
		$p = testinput($_POST['password']);
		echo $e;echo "<br>";echo $p;
		//echo $p;
		$sql = "SELECT * FROM user WHERE email = '$e' ";
		$result = $conn->query($sql);
		$data = $result->fetch_assoc();
		if (is_array($data)) {
			echo "<br>";
			//echo "hammaya";
			$a = md5($p); // md5($p);
			$pass = $data['password'];
			echo "<br>";
			echo $a;
			echo "<br>";
			echo $pass;
			if ($a == $pass) {
				echo "<br>";

				$_SESSION['email'] = $e;
				$_SESSION['password'] = $a;
				echo "<br>";
				echo $_SESSION['password'];
				
				$_SESSION['fname'] = $data['fname'];
				$_SESSION['lname'] = $data['lname'];
				$_SESSION['gender'] = $data['gender'];
				$_SESSION['college'] = $data['college'];
				$_SESSION['course'] = $data['course'];
				echo $_SESSION['email'];
				echo "<br>";
				echo $e;
				//function tableexist($conn,$e){
    				$sql1 = "SELECT * FROM usertable WHERE email = '$e' ";
    				$result1 = $conn->query($sql1);
    				$data1 = $result1->fetch_assoc();
    				if(is_array($data1)){
    					echo "<br>";
    					echo "You Already Created Your TimeTable.";
    					require('seetable.php');
    					
					}else {
    					echo "<br>";
    					echo "You Haven't Created Your TimeTable Yet. Please Create First.";
    					require('createtableptt.php');  // require('creatingtable.php');
    				}
   			 //}		
			}else {
				echo "<br>";
				echo "The Password Doesn't Matches With The Password Which You Set On The Time Of Registration.";
				require('logingin.php');
			}
		}else {
			echo "<br";
			echo "The Email You Entered Is Not Registered Yet.<br>";
			echo "Please Register Before LogIn.";
			require('registering.php');
			require('logingin.php');
		}
	}else {
		echo "<br>";
		echo "You Are Required To Enter Both Email And Password.";
		require('logingin.php');
	}
}else {
	echo "<br>";
	echo "You Didn't Entered The Correct Page! Please LogIn Below.";
	require('logingin.php');
}
?>