<?php
	session_start();
	$con = mysqli_connect('localhost','root','') or die(mysql_error());
	mysqli_select_db($con,'votingsystem');
	
	$user = $_SESSION['username'];
	$unique_id = $_POST['idname'];
	//echo $unique_id;

	$s = "UPDATE voters SET uniqueid='$unique_id' WHERE username='$user';";
	$result = mysqli_query($con,$s);



?>