<?php

	session_start();
	//header('location:Profile_page.php');
	$con = mysqli_connect('localhost','root','') or die(mysql_error());
	mysqli_select_db($con,'votingsystem');

	$user = $_SESSION['name'];
	$organization = $_SESSION['organization'];

	$s = "SELECT * FROM voters WHERE username='$user';";
	$res = mysqli_query($con,$s);
	$row = mysqli_fetch_row($res);
	$has_voted = $row[9];

	
	
	$voted = $_POST['voted'];
	if($has_voted == 0){
		if($voted=='candidate1'){

			$reg = "UPDATE companies SET votes1=votes1+1 WHERE organization = '$organization';";
			$result = mysqli_query($con, $reg);
			$reg1 = "UPDATE voters SET has_voted=1 WHERE username='$user';";
			$result1 = mysqli_query($con, $reg1);
			header('location:Profile_page.php');
			// $message = "Thanks for Voting";
			// echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else if($voted=='candidate2'){
			$reg = "UPDATE companies SET votes2=votes2+1 WHERE organization = '$organization';";
			$result = mysqli_query($con, $reg);
			$reg1 = "UPDATE voters SET has_voted=1 WHERE username='$user';";
			$result1 = mysqli_query($con, $reg1);
			header('location:Profile_page.php');
			// $message = "Thanks for Voting";
			// echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else if($voted=='candidate3'){
			$reg = "UPDATE companies SET votes3=votes3+1 WHERE organization = '$organization';";
			$result = mysqli_query($con, $reg);
			$reg1 = "UPDATE voters SET has_voted=1 WHERE username='$user';";
			$result1 = mysqli_query($con, $reg1);
			header('location:Profile_page.php');
			// $message = "Thanks for Voting";
			// echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
	else{
		$message = "You have already voted.";
		
		echo "<script type='text/javascript'>alert('$message');</script>";
	    header('refresh:1;Profile_page.php');
	    

	}

		//echo "<script type='text/javascript'> alert('You have already voted.'') </script>" ;




?>
