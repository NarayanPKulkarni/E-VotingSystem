<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="about_style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Google Font -->
	<link rel="stylesheet" type="text/css" href="cust_style.css">
</head>
<body onload="head_load()">
	<nav class="navbar navbar-dark navbar-expand-md fixed-top" id="mainNavBar" style="background-color: #2f3640 ">
		<a href="#" class="navbar-brand"><b>Voting System</b></a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="container">
		<div class="collapse navbar-collapse" id="navLinks">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item mr-4">
					<button type="button" class="btn btn-outline-light p-0"><a href="index.php" class="nav-link"><b>HOME</b></a>
					</button>
				</li>
				<li class="nav-item mr-4">
					<button type="button" class="btn btn-outline-light p-0"><a href="About_page.php" class="nav-link"><b>ABOUT</b></a>
					</button>
				</li>
				<li class="nav-item mr-4">
					<button type="button" class="btn btn-outline-light p-0"><a href="#" class="nav-link"><b>CONTACT US</b></a>
					</button>
				</li>
			</ul>
		</div>
		</div>

	</nav>
	<div class="about">
		<h1 class="head animate fadeInLeft head-delay">About</h1>

		<div class="text-box animate fadeInLeft tb-delay">
			<p>
			This E – Voting application aims at making polls easier, accessible and quicker. The main motive is to set up polling platforms for different organisations or collaborators, so as to make their job simpler, to improve transparency and hence, reduce their administrative costs. The process is made quicker by the immediate declaration of results, right after the voting ends. 
			</p>
			<p>
				Perks of this application: <br>
				•	Eliminate paper in the voting process.<br>
				•	Ensures transparency. <br>
				•	No delays in the results. <br>

			</p>
		</div>

	</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>