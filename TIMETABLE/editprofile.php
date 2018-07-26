<?php
session_start();
require('connection.php');
require('functions.php');

$e = $_SESSION['email'];


$sql = "SELECT * FROM usertable WHERE email = '$e' ";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
if(is_array($data)){
	require('homeheader1.html');
}else {
	require('homeheader3.html');
}

echo $_SESSION['email'];
$e = $_SESSION['email'];

$sql = "SELECT * FROM user WHERE email = '$e' ";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

?>
<link rel="stylesheet" type="text/css" href="editprofile.css">
<section>
	<form method="post" action="editprofile1.php">
		<fieldset>
			<legend><i><b>Edit Your Profile</b></i></legend>
			<br><br>
			<h3>If You Don't Want To Change Any Of The Fields. Please Let The Field Be Empty <br>So That The Old Value Will Be Updated Into The Respective Field.<br><br></h3>
			<label class="left">FirstName:<span><?php echo " " .$data['fname']. "" ; ?></span><br> </label><label for="fname1">New First Name</label><br><input type="text" name="fname1" placeholder="NewFirstName..."><br><br>
			<label class="left">LastName:<span><?php echo " " .$data['lname']. "" ; ?></span></label><br>   <label for="lname1">New Last Name</label><br><input type="text" name="lname1" placeholder="NewLastName..."><br><br>
			<label class="left">Gender:<span><?php echo " " .$data['gender']. "" ; ?></span></label><br><label for="gender1">Gender</label><br><input type="radio" name="gender1" value="Male">Male
			<input type="radio" name="gender1" value="Female">Female<br><br>
			<label class="left">College:<span><?php echo " " .$data['college']. "" ; ?></span></label><br><label for="college1">New College</label><br><input type="text" name="college1" placeholder="NewCollegeName..."><br><br>
			<label class="left">Course:<span><?php echo " " .$data['course']. "" ; ?></span></label><br><label for="course1">New Course</label><br><input type="text" name="course1" placeholder="NewCourse..."><br><br>
			<h3><?php echo "Your Email: <span>&nbsp;" .$data['email'].  "</span>&nbsp; Can't Be Changed For This Account.<br> If You Really Want To Change Please Create A Sepearte Account By Using Your New Email-Id";  ?></h3><br><br>
			<label for="password">Current Password</label><br><input type="password" name="password1" placeholder="*****" required><br>
			<label for="password">New Password</label><br><input type="password" name="password2" placeholder="*****"><br><br>

			<h3>After Submitting The Changes You Are Required To LogIn Again With Your<br> New Submitted (if not changed, then old) Password. </h3>

			<input type="submit" name="submit2" value="Submit Your Changes">

			<br>
		</fieldset>
	</form>

</section>
 


 <?php 

 require('homefooter.html');

 ?>