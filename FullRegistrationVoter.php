<!DOCTYPE html>
<html lang="en" dir="ltr">
    
    <head>
        <meta charset="utf-8">
        <title>Voter Full Registration</title>
        <link rel="stylesheet" href="FRVstyle.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="cust_style.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
        <script type="text/javascript">
            function tosubmit(){
                var mytext = document.getElementById("orgname").value;
                localStorage.setItem("orgname",mytext);
                var mytext = document.getElementById("usrname").value;
                localStorage.setItem("usrname",mytext);
                var mytext = document.getElementById("gend").value;
                localStorage.setItem("gend",mytext);
                return true;
            }

            function validate()
            {
                var p1 = document.getElementById('pass1').value;
                var p2 = document.getElementById('pass2').value;
                if(p1!=p2)
                    alert('Passwords do not match. Please Check!');
            }
        </script>
        <style type="text/css">
            .reg-form{
                width: 500px;
                background: #f1f1f1;
                height: 650px;
                padding: 80px 40px;
                border-radius: 10px;
                position: absolute;
                left: 47.5%;
                top: 55%;
                transform: translate(-50%,-50%);
            }
        </style>
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
        
        <form action="VoterRegistration2.php" class="reg-form" method="post" onsubmit="tosubmit()">
            
            <h1>Full Registration</h1>

            <div class="txtb">
                <input type="text" name="organization" id="orgname">
                <span data-placeholder="Organization name"></span>
            </div>

            <div class="txtb">
                <input type="text" name="fullname" id="usrname">
                <span data-placeholder="User Full Name"></span>
            </div>

            <div class="radbox">
                <p>Gender</p>
                <label>
                    <input type="radio" name="gender" value="Male">
                    <span class="Male">Male</span>
                </label>
                <label>
                    <input type="radio" name="gender" value="Female">
                    <span class="Female">Female</span>
                </label>
            </div>

            <!-- <div class="txtb">
                <h1>Gender</h1>
                <input type="radio" name="gender" value="male">Male<br>
            </div>

            <div class="txtb">
                <input type="radio" name="gender" value="female">Female<br>
            </div> -->

            <div class="txtb">
                <input type="password" id="pass1">
                <span data-placeholder="Enter Password"></span>
            </div>

            <div class="txtb">
                <input type="password" name="password" id="pass2" onchange="validate()">
                <span data-placeholder="Confirm Password"></span>
            </div>

            <input type="submit" class="cnfmbtn" value="Confirm and Register">

        </form>

        <!-- <div class="det">
            <p>Enter the name of the organization you belong to</p>  
        </div> -->

        <script type="text/javascript">
            $(".txtb input").on("focus",function(){
                $(this).addClass("focus");
            });

            $(".txtb input").on("blur",function(){
                if($(this).val()=="")
                $(this).removeClass("focus");
            });


            
        </script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        

    </body>

</html>