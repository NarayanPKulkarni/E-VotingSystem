<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Company Full Registration</title>
        <link rel="stylesheet" href="Samplestyle.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

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

        <form action="CompanyRegistration2.php" method="post" class="cmp-reg-form-full" onsubmit="tosubmit()">
            
        <div class="fullregcomp">
            <p class="head">Registration</p>

            <div class="cmptxtb">
                <input type="text" id="organisationname" name="organization" required>
                <span data-placeholder="Organisation Name"></span>
            </div>

            <div class="cmptxtb">
                <div class="txtardsc">
                    Company Address
                </div>
                <textarea class="txtar" name="address" required></textarea>
                <!-- <span data-placeholder="Company Address"></span> -->
            </div>

            <div class="cmptxtb">
                <input type="text" id="mobile" name="tele" required>
                <span data-placeholder="Telephone Number"></span>
            </div>

            <div class="cmptxtb">
                    <div class="dateplace">
                        Polling Date
                    </div>
                    <input type="date" id="dob" name="poll" required>
            </div>

            <div class="cmptxtb">
                    <div class="dateplace">
                        Result Date
                    </div>
                    <input type="date" id="dob" name="result" required>
            </div>

            <div class="cmptxtb">
                <input type="password">
                <span data-placeholder="Enter Password"></span>
            </div>

            <div class="cmptxtb">
                <input type="password" name="password">
                <span data-placeholder="Confirm Password"></span>
            </div>
        </div>


        <div class="canddesc">
            <p class="head">Candidate Registration</p>

            <div class="cmptxtb">
                <input type="text" id="candname" name="cand1">
                <span data-placeholder="Candidate-I Name"></span>
            </div>
            <div class="cmptxtb">
                <div class="txtardsc">
                    Description
                </div>
                <br>
                <textarea class="txtar" name="desc1"></textarea>
                <!-- <span data-placeholder="Description"></span> -->
            </div>

            <div class="cmptxtb">
                <input type="text" id="candname" name="cand2">
                <span data-placeholder="Candidate-II Name"></span>
            </div>
            <div class="cmptxtb">
                <div class="txtardsc">
                    Description
                </div>
                <br>
                <textarea class="txtar" name="desc2"></textarea>
                <!-- <span data-placeholder="Description"></span> -->
            </div>

            <div class="cmptxtb">
                <input type="text" id="candname" name="cand3">
                <span data-placeholder="Candidate-III Name"></span>
            </div>
            <div class="cmptxtb">
                <div class="txtardsc">
                    Description
                </div>
                <br>
                <textarea class="txtar" name="desc3"></textarea>
                <!-- <span data-placeholder="Description"></span> -->
            </div>

            <input type="submit" class="cmpfullregbtn" value="Confirm and Register">
        </form>
        </div>

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