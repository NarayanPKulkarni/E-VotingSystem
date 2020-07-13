<!-- <?php
	
	session_start();
	$con = mysqli_connect('localhost','root','') or die(mysql_error());
	mysqli_select_db($con,'votingsystem');
	
	$user = $_SESSION['name'];
	$_SESSION['name'] = $user;
?> -->


<html>
<head>
	<title>Unique ID AUthentication</title>
	<link rel="stylesheet" type="text/css" href="enterid.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>

	<form action="check_id.php" method="post" class="comp-login-form">

            <h1>Unique ID Authentication</h1>

            <div class="cmptxtb">
                <input type="text" name="unique">
                <span data-placeholder="Enter the Unique ID to vote:"></span>
            </div>

            <input type="submit" class="cmplogbtn" value="Confirm"><br>
            
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
</body>
</html>