<?php
session_start();

require('connection.php');
echo "<br>";
echo $_SESSION['email'];
$e = $_SESSION['email'];

$sql2 = "SELECT * FROM usertable WHERE email = '$e' ";
$result2 = $conn->query($sql2);
$data2 = $result2->fetch_assoc();
if(is_array($data2)){
	echo "<br>";
	require('homeheader1.html');
}else {

	echo "<br>";
	require('homeheader3.html');
}







$sql = " SELECT * FROM personaltt WHERE email = '$e' ";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
if (is_array($data)) {
	echo "<br>";
	echo "




	<link rel='stylesheet' type='text/css' href='seetable1.css'>
	<link rel='stylesheet' type='text/css' href='seetable2.css'>

	<table>
		<thead>
			<tr>
				<th colspan='2'> 
					<span id='tabledate'>From:  ".$data['date']. "   </span> 
				</th>
				<th colspan='3'>
					<span id='tabledate'>To:  ".$data['date1']. "   </span> 
				</th>
			</tr>
			<tr>
				<th>
					TimeFrom
				</th>
				<th>
					Upto
				</th>
				<th>
					Subject
				</th>
				<th>
					Note
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					".$data['timefrom1']. "
				</td>
				<td>
					".$data['timeto1']. "
				</td>
				<td>
					".$data['subject1']. "
				</td>
				<td>
					".$data['note1']. "
					</td>
			</tr>
			<tr>
				<td>
					".$data['timefrom2']. "
				</td>
				<td>
					".$data['timeto2']. "
				</td>
				<td>
					".$data['subject2']. "
				</td>
				<td>
					".$data['note2']. "
					</td>
			</tr>
			<tr>
				<td>
					".$data['timefrom3']. "
				</td>
				<td>
					".$data['timeto3']. "
				</td>
				<td>
					".$data['subject3']. "
				</td>
				<td>
					".$data['note3']. "
					</td>
			</tr>
			<tr>
				<td>
					".$data['timefrom4']. "
				</td>
				<td>
					".$data['timeto4']. "
				</td>
				<td>
					".$data['subject4']. "
				</td>
				<td>
					".$data['note4']. "
					</td>
			</tr>
			<tr>
				<td>
					".$data['timefrom5']. "
				</td>
				<td>
					".$data['timeto5']. "
				</td>
				<td>
					".$data['subject5']. "
				</td>
				<td>
					".$data['note5']. "
					</td>
			</tr>
			<tr>
				<td>
					".$data['timefrom6']. "
				</td>
				<td>
					".$data['timeto6']. "
				</td>
				<td>
					".$data['subject6']. "
				</td>
				<td>
					".$data['note6']. "
					</td>
			</tr>
			<tr>
				<td>
					".$data['timefrom7']. "
				</td>
				<td>
					".$data['timeto7']. "
				</td>
				<td>
					".$data['subject7']. "
				</td>
				<td>
					".$data['note7']. "
					</td>
			</tr>
			<tr>
				<td>
					".$data['timefrom8']. "
				</td>
				<td>
					".$data['timeto8']. "
				</td>
				<td>
					".$data['subject8']. "
				</td>
				<td>
					".$data['note8']. "
					</td>
			</tr>
			<tr>
				<td>
					".$data['timefrom9']. "
				</td>
				<td>
					".$data['timeto9']. "
				</td>
				<td>
					".$data['subject9']. "
				</td>
				<td>
					".$data['note9']. "
					</td>
			</tr>
			<tr>
				<td>
					".$data['timefrom10']. "
				</td>
				<td>
					".$data['timeto10']. "
				</td>
				<td>
					".$data['subject10']. "
				</td>
				<td>
					".$data['note10']. "
					</td>
			</tr>
		</tbody>
	</table>
	<br>
	<a href='editptt.php' style='color:#00004d;text-decoration:underline;font-size:25px;margin-left:42%;'>Edit Your PersonalTimeTable</a> " ;
}

require('homefooter.html');
?>