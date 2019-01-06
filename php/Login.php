<?php
   include("connect.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT User_ID FROM Users WHERE User_Name = '$myusername' and Pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         $_SESSION['logged']=true;
         
		header("location: index.php");

      }else {
      	$_SESSION['logged']=false;
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
   }
   
?>




<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/Login.css">
	</head>

	<body class="background-color">

		<section class= "top-section" >

			<a href="index.php">
				<img src="../images/eudoxus-logo.png" alt="LOGO" class="LOGO">
			</a>
				
			<div class="topnav">
			  	<input type="text" placeholder="Search.." class="search">
				<a class="active" href="Login.php">ΣΥΝΔΕΣΗ/ΕΓΓΡΑΦΗ</a>
				<a href="Comm.php">ΕΠΙΚΟΙΝΩΝΙΑ</a>
				<a href="Ann.php">ΑΝΑΚΟΙΝΩΣΕΙΣ</a>
				<a href="FAQ.php">FAQ</a>
				<a href="index.php">ΑΡΧΙΚΗ</a>
			</div>
			
			<div class="top-header">
				<h1>
					<a href="Login.php" style="color: black;background-color:lightgray;border-radius:5pt;font-size: 30pt;">ΣΥΝΔΕΣΗ/ΕΓΓΡΑΦΗ</a>
				</h1>
			</div>
	
		</section>

		<section class ="mid-section">
			<div class="login-box">
				<div class="login-header">
					<b>ΣΥΝΔΕΣΗ</b>
				</div>
				<div class="login-subbox">
					<form action = "" method = "post">
                  		<label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                 		<label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  		<input type = "submit" value = " Submit "/><br />
               		</form>
				</div>
			</div>
			<div class="signup-box">
				<div class="signup-header">
					<b >ΕΓΓΡΑΦΗ</b>
				</div>
				<div class="signup-role">
					
				</div>
				<div class="signup-button">
					<button style="margin-top: 60%;width: 60%;margin-left: 5%;"><b>ΣΥΝΕΧΕΙΑ</b></button>
				</div>
			</div>
		</section>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>

</html>

