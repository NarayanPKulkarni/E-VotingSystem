<?php

	session_start();
	$con = mysqli_connect('localhost','root','') or die(mysql_error());
	mysqli_select_db($con,'votingsystem');
	
	$user = $_SESSION['name'];

	$s = "SELECT * FROM voters WHERE username='$user';";
	$result = mysqli_query($con,$s);
	$row = mysqli_fetch_row($result);
	$name = $row[4];
	$emailid = $row[2];
	$dob = $row[1];
	$organization = $row[3];
	$unique_id = $row[7];





?>



<html>
<head>
	<title>Profile</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="profile_style.css">
	<script type="text/javascript">
		function show()
		{
			alert ('UNIQUE ID: <?php echo $unique_id; ?>');
		}
	</script>
</head>
<body>
	<div class="profile">
		<h1 class="animate fadeInLeft head1-delay">Profile Information</h1>
		<div class="text-box animate fadeInLeft detail-delay">
			<h3> Name </h3> <span> <?php echo $name; ?>  </span> 
			<h3> Username </h3> <span> <?php echo $user; ?> </span>
			<h3> Email ID </h3> <span> <?php echo $emailid; ?> </span>
			<h3> Date of Birth </h3> <span> <?php echo $dob; ?></span>
			<h3> Organisation </h3> <span> <?php echo $organization; ?></span>
		</div>
		<div class="vl"></div>
	</div>
	
	<div class="actions">
		<h1 class="animate fadeInLeft head2-delay">Actions</h1>
		
		<button class="btn-link animate fadeInLeft op1-delay">Edit Profile</button>
		<button class="btn-link animate fadeInLeft op2-delay" onclick="show()">Forgot Unique ID</button>
		<a href="enter_id.php"><button class="btn-link animate fadeInLeft op3-delay">Proceed to Vote</button></a>
		<a href="logout.php"><button class="btn-link animate fadeInLeft op4-delay">Logout</button></a>

	</div>

</body>
</html>