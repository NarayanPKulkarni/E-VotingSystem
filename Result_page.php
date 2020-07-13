<?php

	session_start();
	$con = mysqli_connect('localhost','root','') or die(mysql_error());
	mysqli_select_db($con,'votingsystem');
	
	$user = $_SESSION['name'];

	$s = "SELECT * FROM companies WHERE username='$user';";
	$result = mysqli_query($con,$s);
	$row = mysqli_fetch_row($result);

	$votes1 = $row[16];
	$votes2 = $row[17];
	$votes3 = $row[18];
	$cand1 = $row[9];
	$cand2 = $row[11];
	$cand3 = $row[13];


?>




<html>
<head>
	<title>Results</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="result_style.css">
</head>
<body>
	
	<div class="result">
		<h1 class="head animate fadeInLeft head-delay">Result</h1>

		<div class="text-box animate fadeInLeft tb-delay">
			<h3> Candidate 1 : </h3> <span> <?php echo $cand1. " - " . $votes1; ?> votes </span>
            <h3> Candidate 2 :</h3> <span> <?php echo $cand2. " - " .$votes2; ?> votes  </span><br>
            <h3> Candidate 3 :</h3> <span> <?php echo $cand3. " - " . $votes3; ?> votes </span>
            <!-- <a href="CompanyProfile.php"><input type="submit" class="cnfrmbtn" value="Go back"></a> -->
            <a href="CompanyProfile.php"><button class="btn-link">Go Back</button></a>
			
		</div>
	</div>

</body>
</html>