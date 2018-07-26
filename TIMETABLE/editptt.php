<?php
session_start();
require('connection.php');
require('functions.php');

$e = $_SESSION['email'];


require('homeheader3.html');

echo $_SESSION['email'];
$e = $_SESSION['email'];

$sql = "SELECT * FROM personaltt WHERE email = '$e' ";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

function ts($data){
	$tt = date('h:i',strtotime($data));
	return $tt;
}




$from11 = ts($data['timefrom1']);
$from2 = ts($data['timefrom2']);
$from3 = ts($data['timefrom3']);
$from4 = ts($data['timefrom4']);
$from5 = ts($data['timefrom5']);
$from6 = ts($data['timefrom6']);
$from7 = ts($data['timefrom7']);
$from8 = ts($data['timefrom8']);
$from9 = ts($data['timefrom9']);
$from10 = ts($data['timefrom10']);
$to1 = ts($data['timeto1']);
$to2 = ts($data['timeto2']);
$to3 = ts($data['timeto3']);
$to4 = ts($data['timeto4']);
$to5 = ts($data['timeto5']);
$to6 = ts($data['timeto6']);
$to7 = ts($data['timeto7']);
$to8 = ts($data['timeto8']);
$to9 = ts($data['timeto9']);
$to10 = ts($data['timeto10']);



?>


<link rel="stylesheet" type="text/css" href="seetableedit.css">
<link rel="stylesheet" type="text/css" href="seetable2.css">
<form method="post" action="editptt1.php">
	<table>
		<thead>
			<tr>
				<th colspan="3">
					<label style='margin-left: 30%;text-align: center; padding: 15px; font-size: 20px;'>From Date</label><input id="in" type="date" name="date" value="<?php echo $data['date']; ?>" style='background-color: rgba(255, 255, 255, 0.2);
  border-bottom: 1px solid blue;
  box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);text-align: center;border:none; padding: 15px; font-size: 20px;border-radius: 5px;'>
				</th>
				<th colspan="2">
					<label style="padding:15px;">To Date</label><input id="in" type="date" value="<?php echo $data['date1']; ?>" name="date1" style='background-color: rgba(255, 255, 255, 0.2);
  border-bottom: 1px solid blue;
  box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);text-align: center;border:none; padding: 15px; font-size: 20px;border-radius: 5px;'>
				</th>
			</tr>
			
			<tr>
				<th>
					Schedule
				</th>
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
					Schedule 1
				</td>
				<td>
					<input id="in" type="time" name="from1" value="<?php echo $from11; ?>">
				</td>
				<td>
					<input id="in" type="time" name="to1" value="<?php echo $to1; ?>">
				</td>
				<td>
					<input type="text" name="subject1" value="<?php echo $data['subject1']; ?>">
				</td>
				<td>
					<textarea id="in" name="note1" cols="30" >
						<?php echo $data['note1']; ?>
					</textarea>
			</tr>
			<tr>
				<td>
					Schedule 2
				</td>
				<td>
					<input id="in" type="time" name="from2" value="<?php echo $from2; ?>">
				</td>
				<td>
					<input id="in" type="time" name="to2" value="<?php echo $to2; ?>">
				</td>
				<td>
					<input type="text" name="subject2" value="<?php echo $data['subject2']; ?>">
				</td>
				<td>
					<textarea id="in" name="note2" cols="30" >
						<?php echo $data['note2']; ?>
					</textarea>
				</td>
			</tr>
			<tr>
				<td>
					Schedule 3
				</td>
				<td>

					<input id="in" type="time" name="from3" value="<?php echo $from3; ?>">
				</td>
				<td>
					<input id="in" type="time" name="to3" value="<?php echo $to3; ?>">
				</td>
				<td>
					<input type="text" name="subject3" value="<?php echo $data['subject3']; ?>">
				</td>
				<td>
					<textarea id="in" name="note3" cols="30" >
						<?php echo $data['note3']; ?>
					</textarea>
				</td>
			</tr>
			<tr>
				<td>
					Schedule 4
				</td>
				<td>
					<input id="in" type="time" name="from4" value="<?php echo $from4; ?>">
				</td>
				<td>
					<input id="in" type="time" name="to4" value="<?php echo $to4; ?>">
				</td>
				<td>
					<input type="text" name="subject4" value="<?php echo $data['subject4']; ?>">
				</td>
				<td>
					<textarea id="in" name="note4" cols="30">
						<?php echo $data['note4']; ?>
					</textarea>
				</td>
			</tr>
			<tr>
				<td>
					Schedule 5
				</td>
				<td>
					<input id="in" type="time" name="from5" value="<?php echo $from5; ?>">
				</td>
				<td>
					<input id="in" type="time" name="to5" value="<?php echo $to5; ?>">
				</td>
				<td>
					<input type="text" name="subject5" value="<?php echo $data['subject5']; ?>">
				</td>
				<td>
					<textarea id="in" name="note5" cols="30" >
						<?php echo $data['note5']; ?>
					</textarea>
				</td>
			</tr>
			<tr>
				<td>
					Schedule 6
				</td>
				<td>
					<input id="in" type="time" name="from6" value="<?php echo $from6; ?>">
				</td>
				<td>
					<input id="in" type="time" name="to6" value="<?php echo $to6; ?>">
				</td>
				<td>
					<input type="text" name="subject6" value="<?php echo $data['subject6']; ?>">
				</td>
				<td>
					<textarea id="in" name="note6" cols="30" >
						<?php echo $data['note6']; ?>
					</textarea>
				</td>
			</tr>
			<tr>
				<td>
					Schedule 7
				</td>
				<td>
					<input id="in" type="time" name="from7" value="<?php echo $from7; ?>">
				</td>
				<td>
					<input id="in" type="time" name="to7" value="<?php echo $to7; ?>">
				</td>
				<td>
					<input type="text" name="subject7" value="<?php echo $data['subject7']; ?>">
				</td>
				<td>
					<textarea id="in" name="note7" cols="30" >
						<?php echo $data['note7']; ?>
					</textarea>
				</td>
			</tr>
			<tr>
				<td>
					Schedule 8
				</td>
				<td>
					<input id="in"  type="time" name="from8" value="<?php echo $from8; ?>">
				</td>
				<td>
					<input id="in" type="time" name="to8" value="<?php echo $to8; ?>">
				</td>
				<td>
					<input type="text" name="subject8" value="<?php echo $data['subject8']; ?>">
				</td>
				<td>
					<textarea id="in" name="note8" cols="30" >
						<?php echo $data['note8']; ?>
					</textarea>
				</td>
			</tr>
			<tr>
				<td>
					Schedule 9
				</td>
				<td>
					<input id="in" type="time" name="from9" value="<?php echo $from9; ?>">
				</td>
				<td>
					<input id="in" type="time" name="to9" value="<?php echo $to9; ?>">
				</td>
				<td>
					<input type="text" name="subject9" value="<?php echo $data['subject9']; ?>">
				</td>
				<td>
					<textarea id="in" name="note9" cols="30" >
						<?php echo $data['note9']; ?>
					</textarea>
				</td>
			</tr>
			<tr>
				<td>
					Schedule 10
				</td>
				<td>
					<input id="in" type="time" name="from10" value="<?php echo $from10; ?>">
				</td>
				<td>
					<input id="in" type="time" name="to10" value="<?php echo $to10; ?>">
				</td>
				<td>
					<input type="text" name="subject10" value="<?php echo $data['subject10']; ?>">
				</td>
				<td>
					<textarea id="in" name="note10" cols="30" >
						<?php echo $data['note10']; ?>
					</textarea>
				</td>
			</tr>

		</tbody>
	</table>
	<input type="submit" name="submit4" value="Submit Your Changes" >



</form>

<?php include('homefooter.html'); ?>