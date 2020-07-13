<?php

session_start();
header('location:FullRegistrationVoter.php');

$con = mysqli_connect('localhost','root','') or die(mysql_error());
mysqli_select_db($con,'votingsystem');

$user = $_POST['user'];
$dob = $_POST['dobirth'];
$email = $_POST['emailid'];


$s = " SELECT * from voters where username = '$user' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num == 1 ){
	echo"Username already taken";
}else{
	$reg = "INSERT INTO voters (username,dob,email) values ('$user','$dob','$email')";
	mysqli_query($con, $reg);
	
	
}

?>

