<!DOCTYPE html>
<html>
<head>
	<title>E-Election Voting System</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="cust_style.css">
	<link rel="stylesheet" type="text/css" href="fullpage.min.css">
</head>
<body>
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

		<div id="fullpage">
		<section class="section s1">
		<div class="row align-text-center">
			<div class="jumbotron container col-lg-6 shadow animate head-delay fadeInLeft" id="welcome">
		  		<h1 class="display-4">Hello, Welcome!</h1>
		  		<p class="lead">A platform for various organisations to conduct their polls
					with an easy-go process.</p>
		  		<hr class="my-4">
		  		<p>Register, sign-in at one go!</p>
		  		<p class="lead">
		   		<a class="btn btn-dark btn-lg" href="About_page.php" role="button">Learn more</a>
		  		</p>
		  	</div>

		  	<!-- <div class="col-lg-6" id="vote_img" class="rounded border float-right shadow-lg p-3 mb-5 bg-white">
		  		<img src="voting_img.jpg" alt="voting">
		  	</div> -->
		</div>
		</section>

		<section class="section s2">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="card" style="width: 23rem;">
						  <div class="card-body">
						    <h5 class="card-title"><b>Are you a voter?</b>	</h5>
						    <p class="card-text">Please register if you are a new user, or log in if you've already registered, through the link below!</p>
						    <a href="VoterLoginRegistration.php" class="card-link"><button class="btn btn-dark btn-primary">Proceed to Voter Page</button></a>
						  </div>
						</div>

						<div class="card mt-5" style="width: 25rem;">
						  <div class="card-body">
						    <h5 class="card-title"><b>New Organisation registration? </b> </h5>
						    <p class="card-text">Access the link below, provide your details and have your own platform for an election!</p>
						    <a href="CompanyLoginRegistration.php" class="card-link"><button class="btn btn-dark btn-primary">Organisation registration</button></a>
						  </div>
						</div>
					</div>

					<!-- <div class="col-lg-6">
						<img class="rounded border float-right shadow-lg p-3 mb-5 bg-white" id ="vote_img" src="https://images.unsplash.com/photo-1540910419892-4a36d2c3266c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="Voting">
					</div> -->
				</div>
			</div>
				
			</div>

</div>








	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="fullpage.min.js"></script>
	<script src="app.js"></script>
	
	<script>
    
    $(function() {
      $(document).scroll(function() {
        var $nav = $('#mainNavBar');
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        
      });
    });
    </script>
</body>
</html>