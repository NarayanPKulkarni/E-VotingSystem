<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Organization Login and Registration</title>
        <link rel="stylesheet" href="company_style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="cust_style.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
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

        <form action="CompanyRegistration1.php" method="post" class="comp-reg-form">
            <h1>Register</h1>

            <div class="cmptxtb">
                <input type="text" id="cmpname" name="username" required>
                <span data-placeholder="Company Username"></span>
            </div>

            <div class="cmptxtb">
                <input type="text" id="cmpemail" name="emailid" required>
                <span data-placeholder="Company Email ID"></span>
            </div>

            <div class="cmptxtb">
                <input type="text" id="desig" name="designation" required>
                <span data-placeholder="Designation for Election"></span>
            </div>

            <input type="submit" class="cmpregbtn" value="Continue">
        </form>

        <form action="CompanyLoginValidation.php" method="post" class="comp-login-form">

            <h1>Login</h1>

            <div class="cmptxtb">
                <input type="text" name="user">
                <span data-placeholder="Company Username"></span>
            </div>

            <div class="cmptxtb">
                <input type="password" name="pass">
                <span data-placeholder="Password"></span>
            </div>

            <input type="submit" class="cmplogbtn" value="Login">
        </form>

        <script type="text/javascript">
            $(".cmptxtb input").on("focus",function(){
                $(this).addClass("focus");
            });

            $(".cmptxtb input").on("blur",function(){
                if($(this).val()=="")
                $(this).removeClass("focus");
            });
        </script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>