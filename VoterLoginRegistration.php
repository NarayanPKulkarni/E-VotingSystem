<!DOCTYPE html>
<html lang="en" dir="ltr">
    
    <head>
        <meta charset="utf-8">
        <title>Voter Login and Registration</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="cust_style.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
        <script>
            function tosubmit(){
                var user = document.getElementById("name").value;
                localStorage.setItem("user",user);
                
                return true;
            }
        </script>
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
        
        <div class="vl"></div>
        

        <form action="VoterRegistration1.php" class="reg-form" method="post" onsubmit="tosubmit()">
            <h1>Register</h1>

            <div class="txtb">
                <input type="text" name="user" id="name" required>
                <span data-placeholder="Username"></span>
            </div>

            <div class="txtb">
                <div class="dateplace">
                    Date of Birth
                </div>
                <input type="date" name="dobirth" id="dob" required>
                <!-- <span data-placeholder="Date of Birth"></span> -->
            </div>

            <div class="txtb">
                <input type="email" name="emailid" id="email" required>
                <span data-placeholder="E-Mail ID"></span>
            </div>

            <input type="submit" class="regbtn" value="Continue">

        </form>
        
        
        
        <form action="VoterLoginValidation.php" method="post" class="login-form">
            
            <h1><strong>Login</strong></h1>
            
            <div class="txtb">
                <input type="text" name="username" required>
                <span data-placeholder="Username"></span>
            </div>

            <div class="txtb">
                <input type="password" name="pass" required>
                <span data-placeholder="Password"></span>
            </div>

            <input type="submit" class="logbtn" value="Login">

        </form>
      

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