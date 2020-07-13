<?php
	
	session_start();
	$con = mysqli_connect('localhost','root','') or die(mysql_error());
	mysqli_select_db($con,'votingsystem');
	
	$user = $_SESSION['name'];

	$s = "SELECT * FROM voters WHERE username='$user';";
	$result = mysqli_query($con,$s);
	$row = mysqli_fetch_row($result);
	
	$unique_id = $row[7];

	$entered_id = $_POST['unique'];

	if(isset($entered_id)){
		if($unique_id==$entered_id){
			header('location:Voting_page.php');
		}
		else
		{	
			$message = "Wrong Unique ID";
			
			echo "<script type='text/javascript'>alert('$message');</script>";
		    header('refresh:1;enter_id.php');

		}
	}







?>