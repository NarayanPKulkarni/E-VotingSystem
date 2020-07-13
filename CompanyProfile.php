<?php

	session_start();
	$con = mysqli_connect('localhost','root','') or die(mysql_error());
	mysqli_select_db($con,'votingsystem');
	
	$user = $_SESSION['name'];

	$s = "SELECT * FROM companies WHERE username='$user';";
	$result = mysqli_query($con,$s);
	$row = mysqli_fetch_row($result);

	
	$emailid = $row[2];
	$designation = $row[3];
	$organization = $row[4];
	$address = $row[5];
	$telephone = $row[6];
	$poll = $row[7];
	$res = $row[8];

	$_SESSION['name'] = $user ;


	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="profile_style.css">

	
</head>
<body>

	<div class="profile">
		<h1 class="animate fadeInLeft head1-delay">Profile Information</h1>
		<div class="text-box animate fadeInLeft detail-delay">
            <h3> Organisation Name : </h3> <span> <?php echo $organization; ?> </span>
            <h3> Address :</h3> <span> <?php echo $address; ?>  </span><br>
            <h3> Telephone Number :</h3> <span> <?php echo $telephone; ?> </span>
			<h3> Username :</h3> <span> <?php echo $user; ?> </span>
			<h3> Email ID :</h3> <span> <?php echo $emailid; ?> </span>
			<h3> Designation for election :</h3> <span> <?php echo $designation; ?></span>
            <h3> Polling Date :</h3> <span> <?php echo $poll; ?></span>
            <h3> Result Date :</h3> <span> <?php echo $res; ?>  </span>
		</div>
		<div class="vl"></div>
	</div>
	
	<div class="actions">
		<h1 class="animate fadeInLeft head2-delay">Actions</h1>
		
		<button class="btn-link animate fadeInLeft op1-delay">Edit Profile</button>
		<a href="Result_page.php"><button class="btn-link animate fadeInLeft op4-delay">Results</button></a>
		<a href="logout.php"><button class="btn-link animate fadeInLeft op4-delay">Logout</button></a>

	</div>



</body>
</html>