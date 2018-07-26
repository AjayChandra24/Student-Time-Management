<!DOCTYPE html>
<html>
<head>
	<title>StudentTimeTable</title>
	<link rel="stylesheet" type="text/css" href="seetable1.css">
	<link rel="shortcut icon" type="image/jpg" href="clock.jpg">

</head>
<body style="background-image:url('clockwallpaper.jpg');font:400 14px 'Calibri','Arial';position: relative; ">
	<form method="post" action="createtable.php">
		
			<legend></legend>
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
						<input type="text" name="m1">
					</td>
					<td>
						<input type="text" name="m2">
					</td>
					<td>
						<input type="text" name="m3">
					</td>
					<td>
						<input type="text" name="m4">
					</td>
					<td>
						Recess
					</td>
					<td>
						<input type="text" name="m5">
					</td>
					<td>
						<input type="text" name="m6">
					</td>
					<td>
						<input type="text" name="m7">
					</td>
					<td>
						<input type="text" name="m8">
					</td>
				</tr>
				<tr>
					<td>
						Tuesday
					</td>
					<td>
						<input type="text" name="t1">
					</td>
					<td>
						<input type="text" name="t2">
					</td>
					<td>
						<input type="text" name="t3">
					</td>
					<td>
						<input type="text" name="t4">
					</td>
					<td>
						Recess
					</td>
					<td>
						<input type="text" name="t5">
					</td>
					<td>
						<input type="text" name="t6">
					</td>
					<td>
						<input type="text" name="t7">
					</td>
					<td>
						<input type="text" name="t8">
					</td>
				</tr>
				<tr>
					<td>
						Wednesday
					</td>
					<td>
						<input type="text" name="w1">
					</td>
					<td>
						<input type="text" name="w2">
					</td>
					<td>
						<input type="text" name="w3">
					</td>
					<td>
						<input type="text" name="w4">
					</td>
					<td>
						Recess
					</td>
					<td>
						<input type="text" name="w5">
					</td>
					<td>
						<input type="text" name="w6">
					</td>
					<td>
						<input type="text" name="w7">
					</td>
					<td>
						<input type="text" name="w8">
					</td>
				</tr>
				<tr>
					<td>
						Thrusday
					</td>
					<td>
						<input type="text" name="th1">
					</td>
					<td>
						<input type="text" name="th2">
					</td>
					<td>
						<input type="text" name="th3">
					</td>
					<td>
						<input type="text" name="th4">
					</td>
					<td>
						Recess
					</td>
					<td>
						<input type="text" name="th5">
					</td>
					<td>
						<input type="text" name="th6">
					</td>
					<td>
						<input type="text" name="th7">
					</td>
					<td>
						<input type="text" name="th8">
					</td>
				</tr>
				<tr>
					<td>
						Friday
					</td>
					<td>
						<input type="text" name="f1">
					</td>
					<td>
						<input type="text" name="f2">
					</td>
					<td>
						<input type="text" name="f3">
					</td>
					<td>
						<input type="text" name="f4">
					</td>
					<td>
						Recess
					</td>
					<td>
						<input type="text" name="f5">
					</td>
					<td>
						<input type="text" name="f6">
					</td>
					<td>
						<input type="text" name="f7">
					</td>
					<td>
						<input type="text" name="f8">
					</td>
				</tr>
				<tr>
					<td>
						Saturday
					</td>
					<td>
						<input type="text" name="s1">
					</td>
					<td>
						<input type="text" name="s2">
					</td>
					<td>
						<input type="text" name="s3">
					</td>
					<td>
						<input type="text" name="s4">
					</td>
					<td>
						Recess
					</td>
					<td>
						<input type="text" name="s5">
					</td>
					<td>
						<input type="text" name="s6">
					</td>
					<td>
						<input type="text" name="s7">
					</td>
					<td>
						<input type="text" name="s8">
					</td>
				</tr>
			</tbody>
			</table>
			<input type="submit" name="submit" value="Create Your Table">
		
	</form>
	<blockquote>Create Your Own TimeTable</blockquote>
	<br>
	<a class="personaltt" href='personaltt1.php'>Create PersonalTimeTable</a>
	<br>
	<a class="personaltt" href='personalttsee1.php'>Check Your PersonalTimeTable</a>
</body>
</html>