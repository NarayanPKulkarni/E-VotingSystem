<?php

    session_start();
    $con = mysqli_connect('localhost','root','') or die(mysql_error());
    mysqli_select_db($con,'votingsystem');

        
    $user = $_SESSION['username'];
    $s = "SELECT * FROM voters WHERE username='$user';";
    $result = mysqli_query($con,$s);
    $row = mysqli_fetch_row($result);
    $name = $row[4];
    $emailid = $row[2];
    $dob = $row[1];
    $organization = $row[3];
    $gen = $row[5];
    
    //$uniqueid = $_COOKIE['id'];
    // $dom->validate();
    // $p = $dom->getElementById('uni');
    // $uniqueid = $p->saveHTML();
    //echo($uniqueid);



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
            <p id="p0">Name: </p> <?php echo $name ?> <br><br>
            <p id="p1">Username: </p> <?php echo $user ?> <br><br>
            <p id="p2">Date of Birth: </p> <?php echo $dob ?> <br><br>
            <p id="p3">Gender: </p><?php echo $gen ?> <br><br>
            <p id="p4">Email: </p><?php echo $emailid ?> <br><br>
            <p id="p5">Organization name: </p><?php echo $organization ?> <br><br>
            <p>Unique ID: </p><p id="uni"></p><br><br>
            <a href="VoterLoginRegistration.php"><input type="submit" class="cnfrmbtn" value="Confirm"></a>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    <script>
        /*Fisher-Yates shuffling*/
        function shuffle(arr){
            for(let i=arr.length-1;i>0;i--)
            {
                let j = Math.floor(Math.random() * (i+1)); /*Random index less than i*/
                [arr[i], arr[j]] = [arr[j], arr[i]]; /*Swapping element at i and j*/
            } 
        }
        function generateID(){
            let id = '';
            type = [1,2,3,1,2,3]
            shuffle(type);
            for(i=0;i<type.length-1;i++)
            {
                if(type[i]==1)
                    id = id + String.fromCharCode(Math.floor(Math.random() * 26) + 97);
                else if(type[i]==2)
                    id = id + String.fromCharCode(Math.floor(Math.random() * 26) + 65);
                else
                    id = id + String.fromCharCode(Math.floor(Math.random() * 10) + 48);
            }
            console.log(id)
            document.cookie = "id:"+id;
            return id;
        
        }
        generateID();
        un = document.getElementById("uni")
        uniq = generateID();
         un.innerText = /*un.innerText + " " + */ uniq;
         //var $ = require('jQuery');       
         jQuery.post('add_id.php',{idname:uniq});

    </script>
</html>