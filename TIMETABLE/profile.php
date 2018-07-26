<?php

session_start();
require('connection.php');
$e = $_SESSION['email'];
$sql1 = "SELECT * FROM usertable WHERE email = '$e' ";
    				$result1 = $conn->query($sql1);
    				$data1 = $result1->fetch_assoc();
    				if(is_array($data1)){
    					echo "<br>";
    					require('homeheader1.html');
    					
					}else {
    					echo "<br>";
    					echo "You Haven't Created Your TimeTable Yet. Please Create First.";
    					require('homeheader3.html');
    				}

echo $_SESSION['email'];
$e = $_SESSION['email'];
$fn = $_SESSION['fname'];
$ln = $_SESSION['lname'];
$ge = $_SESSION['gender'];
$cg = $_SESSION['college'];
$co = $_SESSION['course'];
$pass = $_SESSION['password'];echo "<br>";
echo $pass;

echo " 
	<head>
		<link rel='stylesheet' type='text/css' href='seetable1.css'>
		<link rel='shortcut icon' type='image/jpg' href='clock.jpg'>
	</head>
	<body style=background-image:url('clockwallpaper.jpg');font:400 14px 'Calibri','Arial';position: relative;>	
	<section>

		<table>
			<caption>Your Deatils</caption>
			<thead>
				<tr>
					<th>
						First Name
					</th>
					<th>
						Last name
					</th>
					<th>
						Gender
					</th>
					<th>
						College
					</th>
					<th>
						Course
					</th>
					<th>
						E-Mail
					</th>
					<th rowspan='2'>
						<a class='edit' style='color:#00004d;text-decoration:underline;font-size:20px;' href='editprofile.php'>Edit Your Deatils</a>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>"
						.$fn."
					</td>
					<td>"
						.$ln."
						
					</td>
					<td>
						"
						.$ge."
					</td>
					<td>
						"
						.$cg."
						
					</td>
					<td>
						"
						.$co."
					</td>
					<td>
						"
						.$e."
					</td>

				</tr>
			</tbody>
		</table>
		
	</section>




";


require('homefooter.html');
?>