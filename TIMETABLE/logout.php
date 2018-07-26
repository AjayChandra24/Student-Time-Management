<?php
if (isset($_POST['logout'])) {
	session_unset();
	session_destroy();
	require('firstpage.html');
}
require('home3.php');
?>