<?php
   include("connect.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM Users WHERE User_Name = '$myusername' and Pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $sql = "SELECT * FROM Users WHERE User_Name = '$myusername' and Pass = '$mypassword'";
         $result = mysqli_query($db,$sql);
         $row = mysqli_fetch_assoc($result);
         $_SESSION['type'] = $row["User_Type"];
         $_SESSION['login_user'] = $myusername;
         $_SESSION['logged']=true;
         echo $_SESSION['type'];
         header("location: index.php");

      }else {
      	$_SESSION['logged']=false;
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
    }
?>
