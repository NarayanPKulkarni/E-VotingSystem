<?php

	session_start();
	$con = mysqli_connect('localhost','root','') or die(mysql_error());
	mysqli_select_db($con,'votingsystem');
	
	$user = $_SESSION['name'];

	$s = "SELECT * FROM voters where username='$user';";
	$result = mysqli_query($con, $s);
	$row = mysqli_fetch_row($result);
	$organization = $row[3];

	$s1 = "SELECT * FROM companies where organization='$organization';";
	$result1 = mysqli_query($con, $s1);
	$row1 = mysqli_fetch_row($result1);

    $designation = $row1[3];
    $cand1 = $row1[9];
    $cand2 = $row1[11];
    $cand3 = $row1[15];

    //$_SESSION['voted'] = $_POST['voted'];
    $_SESSION['organization'] = $organization;
    $_SESSION['cand1'] = $cand1;
    $_SESSION['cand2'] = $cand2;
    $_SESSION['cand3'] = $cand3;

?>

<html>
<head>
	<title>Voting</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="voting_style.css">
	
</head>
<body>
	<div>
	<div class="intro">
		<h1>Poll</h1>
		<div class="details">
			<p>Here is the list of candidates contesting for the poll being held by your respsective organisation. Please feel wise and choose the right leader!
			</p>
			<h4> Organisation </h4><?php echo $organization ?>
			<h4> Designation </h4><?php echo $designation ?>
		</div>
	</div>	

	<form class="list" method="post" action="VotingValidation.php">
		<table class="table-cand">
			<tr>
				<th> Sl. No. </th>
				<th> Candidate Name </th>
				<th> </th>
			</tr>
			<tr>
				<td>1</td>
				<td><?php echo $cand1 ?></td>
				<td><input type="radio" value="candidate1" name="voted"></td>
			</tr>
			<tr>
				<td>2</td>
				<td><?php echo $cand2 ?></td>
				<td><input type="radio" value="candidate2" name="voted"></td>
			</tr>
			<tr>
				<td>3</td>
				<td><?php echo $cand3 ?></td>
				<td><input type="radio" value="candidate3" name=voted></td>
			</tr>
		</table>
		<br>
		<input type="submit" name="" class="sub-btn">
	</form>

	</div>


</body>
</html>