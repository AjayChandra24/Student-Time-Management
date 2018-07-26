s<?php
require('homeheader1.html');
echo "<br>ajay";
echo $_SESSION['email'];
require('connection.php');
$email = $_SESSION['email'];
echo "<br>";
echo $email;
$sql = "SELECT * FROM usertable WHERE email = '$email' ";
//echo $sql;
$result = $conn->query($sql);
$data = $result->fetch_assoc();
if(is_array($data)){
	echo "<br>";
	//echo $data['m1'];
	echo "<br>";
	//echo "<table><tr><th>Days\Periods</th><th>1stPeriod</th><th>2stPeriod</th><th>3stPeriod</th><th>4stPeriod</th><th>5stPeriod</th><th>6stPeriod</th><th>7stPeriod</th><th>8stPeriod</th> ";

	echo "<head>
			<title>StudentTimeTable</title>
			</head>
			<link rel='stylesheet' type='text/css' href='seetable1.css'>
			<link rel='stylesheet' type='text/css' href='ptt.css'>
			<link rel='shortcut icon' type='image/jpg' href='clock.jpg'>
			<body style=background-image:url('clockwallpaper.jpg');font:400 14px 'Calibri','Arial';position: relative;>	
			<table style='border:1px solid blue'>
				<thead>
				<tr>
					<th>
						Days\Periods
					</th>
					<th>
						1stPeriod
					</th>
					<th>
						2ndPeriod
					</th>
					<th>
						3rdPeriod
					</th>
					<th>
						4thPeriod
					</th>
					<th>
						Recess
					</th>
					<th>
						5thPeriod
					</th>
					<th>
						6thPeriod
					</th>
					<th>
						7thPeriod
					</th>
					<th>
						8thPeriod
					</th>
					
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>
						Monday
					</td>
					<td>"
						.$data['m1'].
					"</td>
					<td>
						"
						.$data['m2'].
					"
					</td>
					<td>
					"
						.$data['m3'].
					"	
					</td>
					<td>
					"
						.$data['m4'].
					"	
					</td>
					<td>
						Recess
					</td>
					<td>
					"
						.$data['m5'].
					"	
					</td>
					<td>
					"
						.$data['m6'].
					"	
					</td>
					<td>
					"
						.$data['m7'].
					"	
					</td>
					<td>
						"
						.$data['m8'].
					"
					</td>
				</tr>
				<tr>
					<td>
						Tuesday
					</td>
					<td>
						"
						.$data['t1'].
					"
					</td>
					<td>
						"
						.$data['t2'].
					"
					</td>
					<td>
						"
						.$data['t3'].
					"
					</td>
					<td>
						"
						.$data['t4'].
					"
					</td>
					<td>
						Recess
					</td>
					<td>
						"
						.$data['t5'].
					"
					</td>
					<td>
						"
						.$data['t6'].
					"
					</td>
					<td>
						"
						.$data['t7'].
					"
					</td>
					<td>
						"
						.$data['t8'].
					"
					</td>
				</tr>
				<tr>
					<td>
						Wednesday
					</td>
					<td>
						"
						.$data['w1'].
					"
					</td>
					<td>
					"
						.$data['w2'].
					"
					</td>
					<td>
						"
						.$data['w3'].
					"
					</td>
					<td>
						"
						.$data['w4'].
					"
					</td>
					<td>
						Recess
					</td>
					<td>
						"
						.$data['w5'].
					"
					</td>
					<td>
						"
						.$data['w6'].
					"
					</td>
					<td>
						"
						.$data['w7'].
					"
					</td>
					<td>
						"
						.$data['w8'].
					"
					</td>
				</tr>
				<tr>
					<td>
						Thrusday
					</td>
					<td>
						"
						.$data['th1'].
					"
					</td>
					<td>
						"
						.$data['th2'].
					"
					</td>
					<td>
						"
						.$data['th3'].
					"
					</td>
					<td>
						"
						.$data['th4'].
					"
					</td>
					<td>
						Recess
					</td>
					<td>
						"
						.$data['th5'].
					"
					</td>
					<td>
						"
						.$data['th6'].
					"
					</td>
					<td>
						"
						.$data['th7'].
					"
					</td>
					<td>
					"
						.$data['th8'].
					"
					</td>
				</tr>
				<tr>
					<td>
						Friday
					</td>
					<td>
						"
						.$data['f1'].
					"
					</td>
					<td>
						"
						.$data['f2'].
					"
					</td>
					<td>
					"
						.$data['f3'].
					"
					</td>
					<td>
						"
						.$data['f4'].
					"
					</td>
					<td>
						Recess
					</td>
					<td>
						"
						.$data['f5'].
					"
					</td>
					<td>
						"
						.$data['f6'].
					"
					</td>
					<td>
					"
						.$data['f7'].
					"
					</td>
					<td>
					"
						.$data['f8'].
					"
					</td>
				</tr>
				<tr>
					<td>
						Saturday
					</td>
					<td>
						"
						.$data['s1'].
					"
					</td>
					<td>
						"
						.$data['s2'].
					"
					</td>
					<td>
						"
						.$data['s3'].
					"
					</td>
					<td>
						"
						.$data['s4'].
					"
					</td>
					<td>
						Recess
					</td>
					<td>
						"
						.$data['s5'].
					"
					</td>
					<td>
						"
						.$data['s6'].
					"
					</td>
					<td>
					"
						.$data['s7'].
					"
					</td>
					<td>
					"
						.$data['s8'].
					"
					</td>
				</tr>
				</tbody>
			</table>
			<blockquote>Your TimeTable</blockquote><br>
			<a href='edittable.php' style='color:#00004d;text-decoration:underline;font-size:25px;margin-left:42%;'>Edit Your TimeTable</a>  " ;  
		}

			$sql1 = "SELECT * FROM personaltt WHERE email= '$email' ";
			$result1 = $conn->query($sql1);
			$data1 = $result1->fetch_assoc();
			if (is_array($data1)) {
				echo "<br>";

				echo " <a class='personaltt' href='personalttsee.php'>Check Your PersonalTimeTable</a> ";
			}else {

				echo "<br>";
				echo " <a class='personaltt' href='personaltt.php'>Create PersonalTimeTable</a>  ";


			} 


 








 require('homefooter.html');
?>