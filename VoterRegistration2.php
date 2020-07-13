<?php 

  session_start();
  header('location:Acknowledgement.php');

  $con = mysqli_connect('localhost','root','') or die(mysql_error());
  mysqli_select_db($con,'votingsystem');
  
  $organization = $_POST['organization'];
  $fullname = $_POST['fullname'];
  $gender = $_POST['gender'];
  $password = $_POST['password'];


  $s = " SELECT * FROM voters WHERE id=(SELECT MAX(id) FROM voters); " ;
  $result = mysqli_query($con,$s);
  $user = (mysqli_fetch_assoc($result))['username'];
          



   // $result = mysqli_query($con, $s);

           // $num = mysqli_num_rows($result);


           
  $reg = "UPDATE voters SET organization = '$organization', fullname = '$fullname', gender= '$gender', password = '$password' WHERE username='$user';";
    mysqli_query($con, $reg);
    $_SESSION['username'] = $user;
            
    //echo($user);
               
    
           
?>