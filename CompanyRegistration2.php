        <?php 

           session_start();
           header('location:CompAcknowledgement.php');

           $con = mysqli_connect('localhost','root','') or die(mysql_error());
           mysqli_select_db($con,'votingsystem');
           
           $organization = $_POST['organization'];
           $address = $_POST['address'];
           $telephone = $_POST['tele'];
           $poll = $_POST['poll'];
           $res = $_POST['result'];
           $cand1 = $_POST['cand1'];
           $desc1 = $_POST['desc1'];
           $cand2 = $_POST['cand2'];
           $desc2 = $_POST['desc2'];
           $cand3 = $_POST['cand3'];
           $desc3 = $_POST['desc3'];
           $password = $_POST['password'];



          
          $s = " SELECT * FROM companies WHERE id=(SELECT MAX(id) FROM companies); " ;
          $result = mysqli_query($con,$s);
          $user = (mysqli_fetch_assoc($result))['username'];

          



           // $result = mysqli_query($con, $s);

           // $num = mysqli_num_rows($result);


            
            $reg = "UPDATE companies SET organization = '$organization', address = '$address', telephone= '$telephone', polldate='$poll', password ='$password', candidate1='$cand1', candidate2='$cand2', candidate3='$cand3', description1='$desc1', description2='$desc2', description3='$desc3', resultdate = '$res' WHERE username = '$user'";
            mysqli_query($con, $reg);
            $_SESSION['username'] = $user;
            
            //echo mysqli_error($con);
               
    
           

        ?>