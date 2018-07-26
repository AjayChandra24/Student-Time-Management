<?php
session_start();
require('connection.php');
require('functions.php');

$e = $_SESSION['email'];


require('homeheader1.html');

echo $_SESSION['email'];
$e = $_SESSION['email'];

$sql = "SELECT * FROM usertable WHERE email = '$e' ";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

?>

<link rel="stylesheet" type="text/css" href="seetableedit.css">
	<link rel="stylesheet" type="text/css" href="ptt.css">
	<link rel="shortcut icon" type="image/jpg" href="clock.jpg">


<body style="background-image:url('clockwallpaper.jpg');font:400 14px 'Calibri','Arial';position: relative; ">
	<form method="post" action="edittable1.php">
		<fieldset>
		
			<legend style=" color:#000033;
    font-size: 25px; margin-left: 30%; font-weight: bold;
    font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, 'AppleGothic', sans-serif;">Edit Your TimeTable</legend>
			<table>
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
					<td>
						<input type="text" name="m1" value="<?php echo $data['m1']; ?> ">
					</td>
					<td>
						<input type="text" name="m2" value="<?php echo $data['m2']; ?> ">
					</td>
					<td>
						<input type="text" name="m3" value="<?php echo $data['m3']; ?> ">
					</td>
					<td>
						<input type="text" name="m4" value="<?php echo $data['m4']; ?> ">
					</td>
					<td>
						Recess
					</td>
					<td>
						<input type="text" name="m5" value="<?php echo $data['m5']; ?> ">
					</td>
					<td>
						<input type="text" name="m6" value="<?php echo $data['m6']; ?> ">
					</td>
					<td>
						<input type="text" name="m7" value="<?php echo $data['m7']; ?> ">
					</td>
					<td>
						<input type="text" name="m8" value="<?php echo $data['m8']; ?> ">
					</td>
				</tr>
				<tr>
					<td>
						Tuesday
					</td>
					<td>
						<input type="text" name="t1" value="<?php echo $data['t1']; ?> ">
					</td>
					<td>
						<input type="text" name="t2" value="<?php echo $data['t2']; ?> ">
					</td>
					<td>
						<input type="text" name="t3" value="<?php echo $data['t3']; ?> ">
					</td>
					<td>
						<input type="text" name="t4" value="<?php echo $data['t4']; ?> ">
					</td>
					<td>
						Recess
					</td>
					<td>
						<input type="text" name="t5" value="<?php echo $data['t5']; ?> ">
					</td>
					<td>
						<input type="text" name="t6" value="<?php echo $data['t6']; ?> ">
					</td>
					<td>
						<input type="text" name="t7" value="<?php echo $data['t7']; ?> ">
					</td>
					<td>
						<input type="text" name="t8" value="<?php echo $data['t8']; ?> ">
					</td>
				</tr>
				<tr>
					<td>
						Wednesday
					</td>
					<td>
						<input type="text" name="w1" value="<?php echo $data['w1']; ?> ">
					</td>
					<td>
						<input type="text" name="w2" value="<?php echo $data['w2']; ?> ">
					</td>
					<td>
						<input type="text" name="w3" value="<?php echo $data['w3']; ?> ">
					</td>
					<td>
						<input type="text" name="w4" value="<?php echo $data['w4']; ?> ">
					</td>
					<td>
						Recess
					</td>
					<td>
						<input type="text" name="w5" value="<?php echo $data['w5']; ?> ">
					</td>
					<td>
						<input type="text" name="w6" value="<?php echo $data['w6']; ?> ">
					</td>
					<td>
						<input type="text" name="w7" value="<?php echo $data['w7']; ?> ">
					</td>
					<td>
						<input type="text" name="w8" value="<?php echo $data['w8']; ?> ">
					</td>
				</tr>
				<tr>
					<td>
						Thrusday
					</td>
					<td>
						<input type="text" name="th1" value="<?php echo $data['th1']; ?> ">
					</td>
					<td>
						<input type="text" name="th2" value="<?php echo $data['th2']; ?> ">
					</td>
					<td>
						<input type="text" name="th3" value="<?php echo $data['th3']; ?> ">
					</td>
					<td>
						<input type="text" name="th4" value="<?php echo $data['th4']; ?> ">
					</td>
					<td>
						Recess
					</td>
					<td>
						<input type="text" name="th5" value="<?php echo $data['th5']; ?> ">
					</td>
					<td>
						<input type="text" name="th6" value="<?php echo $data['th6']; ?> ">
					</td>
					<td>
						<input type="text" name="th7" value="<?php echo $data['th7']; ?> ">
					</td>
					<td>
						<input type="text" name="th8" value="<?php echo $data['th8']; ?> ">
					</td>
				</tr>
				<tr>
					<td>
						Friday
					</td>
					<td>
						<input type="text" name="f1" value="<?php echo $data['f1']; ?> ">
					</td>
					<td>
						<input type="text" name="f2" value="<?php echo $data['f2']; ?> ">
					</td>
					<td>
						<input type="text" name="f3" value="<?php echo $data['f3']; ?> ">
					</td>
					<td>
						<input type="text" name="f4" value="<?php echo $data['f4']; ?> ">
					</td>
					<td>
						Recess
					</td>
					<td>
						<input type="text" name="f5" value="<?php echo $data['f5']; ?> ">
					</td>
					<td>
						<input type="text" name="f6" value="<?php echo $data['f6']; ?> ">
					</td>
					<td>
						<input type="text" name="f7" value="<?php echo $data['f7']; ?> ">
					</td>
					<td>
						<input type="text" name="f8" value="<?php echo $data['f8']; ?> ">
					</td>
				</tr>
				<tr>
					<td>
						Saturday
					</td>
					<td>
						<input type="text" name="s1" value="<?php echo $data['s1']; ?> ">
					</td>
					<td>
						<input type="text" name="s2" value="<?php echo $data['s2']; ?> ">
					</td>
					<td>
						<input type="text" name="s3" value="<?php echo $data['s3']; ?> ">
					</td>
					<td>
						<input type="text" name="s4" value="<?php echo $data['s4']; ?> ">
					</td>
					<td>
						Recess
					</td>
					<td>
						<input type="text" name="s5" value="<?php echo $data['s5']; ?> ">
					</td>
					<td>
						<input type="text" name="s6" value="<?php echo $data['s6']; ?> ">
					</td>
					<td>
						<input type="text" name="s7" value="<?php echo $data['s7']; ?> ">
					</td>
					<td>
						<input type="text" name="s8" value="<?php echo $data['s8']; ?> ">
					</td>
				</tr>
			</tbody>
			</table>
			<input style="margin-left: 26%;" type="submit" name="submit3" value="Submit Your Changes">
		</fieldset>
	</form>






 <?php 

 require('homefooter.html');

 ?>