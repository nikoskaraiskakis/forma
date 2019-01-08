<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/Student-SignUp.css">
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
					<a href="Login.php" style="color: black;background-color:lightgray;border-radius:5pt;font-size: 30pt;">ΕΓΓΡΑΦΗ ΦΟΙΤΗΤΗ</a>
				</h1>
			</div>
	
		</section>
		<section class ="mid-section">
			<div class="signup-box">
				<div class="form-subbox">
					<form action = "signup.php" method = "post">
                  		<label>UserName  :</label><input type = "text" name = "user" class = "box"/><br /><br />
                 		<label>Password  :</label><input type = "password" name = "pass" class = "box" /><br/><br />
                  		<input type = "submit" value = "submit"/><br />
               		</form>
				</div>
				<div class="submit-subbox">
				</div>
			</div>
		</section>
	</body>
</html>