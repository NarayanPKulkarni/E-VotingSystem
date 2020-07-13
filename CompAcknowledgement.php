<?php

    session_start();
    $con = mysqli_connect('localhost','root','') or die(mysql_error());
    mysqli_select_db($con,'votingsystem');

    $user = $_SESSION['username'];

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

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Acknowledgement</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="Acknowledgement_style.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="cust_style.css">

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
        <div class="info">
            <h3>Acknowledgement</h3><br><br>
            <p id="p0">Organisation Name: </p> <?php echo $organization ?><br><br>
            <p id="p1">Address: </p><?php echo $address ?><br><br>
            <p id="p2">Email ID: </p> <?php echo $emailid ?><br><br>
            <p id="p3">Telephone Number: </p><?php echo $telephone ?><br><br>
            <p id="p4">Designation for Election: </p><?php echo $designation ?><br><br>
            <p id="p5">Polling Date: </p><?php echo $poll ?><br><br>
            <p id="p6">Result Date: </p><?php echo $res ?><br><br>
            <a href="CompanyLoginRegistration.php"><input type="button" class="cnfrmbtn" value="Confirm"></a>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>