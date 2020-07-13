<?php

session_start();
header('location:FullRegistrationCompany.php');

$con = mysqli_connect('localhost','root','') or die(mysql_error());
mysqli_select_db($con,'votingsystem');

$user = $_POST['username'];
$email = $_POST['emailid'];
$designation = $_POST['designation'];
echo($user);


$s = " SELECT * from companies where username = '$user' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num == 1 ){
	echo"Username already taken";
}else{
	$reg = "INSERT INTO companies (username,email,designation) values ('$user','$email','$designation');";
	mysqli_query($con, $reg);
	// echo(mysqli_error($con));
	
}

?>

