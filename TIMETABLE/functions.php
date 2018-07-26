<?php
function testinput($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	function notexist($connection,$email){
		$sql = "SELECT * FROM user WHERE email='$email' ";
		$result = $connection->query($sql);
		$res = $result->fetch_assoc();
		if (empty($res)) {
			return true;
		}else {
			return false;
		}
	}
	function isnotempty($array){
	foreach($array as $a){
		if($a=="" || $a==null){
		return false;
	    }else {
		return true;
	    }
    }
    }

    function newvalue($data){


    	if($data == " " ||  $data == null){

    		return false;
    	}else {

    		return true;
    	}
    }

    function tableexist($connection,$email){
    	$sql = "SELECT * FROM usertable WHERE email = '$e' ";
    	$result = $connection->query($sql);
    	$data = $result->fetch_assoc();
    	if(empty($data)){
    		echo "<br>";
    		echo "You Haven't Created Your TimeTable Yet. Please Create First.";
    		require('createtable.html');
		}else {
    		echo "<br>";
    		echo "Your Already Created Your TimeTable.";
    		require('table.php');
    	}
    }
?>