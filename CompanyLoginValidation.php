<?php

session_start();


$con = mysqli_connect('localhost','root','') or die(mysql_error());
mysqli_select_db($con,'votingsystem');

$user = $_POST['user'];
$password = $_POST['pass'];


$s = " SELECT * from companies where username = '$user' and password='$password';";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num == 1 ){

	$_SESSION['name'] = $user;
	header('location:CompanyProfile.php');
}else{
	header('location:CompanyLoginRegistration.php');
	
}

?>
