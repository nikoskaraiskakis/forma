<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href='../css/Publisher-SignUp.css'>
		<script type="text/javascript" src="../JAVAscripts/validate-user.js"></script>
		<script type="text/javascript" src="../JAVAscripts/validate-fname.js"></script>
		<script type="text/javascript" src="../JAVAscripts/validate-lname.js"></script>
		<script type="text/javascript" src="../JAVAscripts/validate-email.js"></script>
	    <script type="text/javascript" src="../JAVAscripts/validate-pass.js"></script>
	    <script type="text/javascript" src="../JAVAscripts/validate-passcor.js"></script>
	    <script type="text/javascript" src="../JAVAscripts/validate-am.js"></script>
	    <script type="text/javascript" src="../JAVAscripts/validate-uni.js"></script>
	    <script type="text/javascript" src="../JAVAscripts/val-signup.js"></script>
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
			<div class="signup-box" ">
				<form method = "post" onsubmit="return re2('uname_inp','pass_inp','cpass_inp','fname_inp','lname_inp','em_inp','am_inp','uni_inp','alert_box')" action = "stud-signup.php" >  
					<div class="form-subbox">
                  		<label class="signup-info" style="margin-top: 60px;"><a style="font-size: 12PT;">ΟΝΟΜΑ ΧΡΗΣΤΗ :</a></label><input style="height: 30px;" id="uname_inp" onChange="val_user('uname_inp','uname_err');" type = "text" name = "user" class = "box"/><br /><br />

                  			<div id="uname_err" style="color: red;font-size: 12pt;"></div>

                 		<label class="signup-info" ><a style="font-size: 12pt;">ΚΩΔΙΚΟΣ ΠΡΟΣΒΑΣΗΣ :</a></label><input style="height: 30px;" id="pass_inp" onChange="val_pass('pass_inp','pass_err');" type = "password" name = "pass" class = "box" /><br/><br />

                 			<div id="pass_err" style="color: red;font-size: 12pt;"></div>

                 		<label class="signup-info" ><a style="font-size: 12pt;">ΕΠΑΛΗΘΕΥΣΗ ΚΩΔΙΚΟΥ ΠΡΟΣΒΑΣΗΣ :</a></label><input style="height: 30px;" id="cpass_inp" type = "password" name = "pass_cor" class = "box" /><br/><br />

                 			<div id="cpass_err" style="color: red;font-size: 12pt;"></div>

                 		<label class="signup-info" ><a style="font-size: 12pt;">ΟΝΟΜΑ :</a></label><input style="height: 30px;" type = "text" name = "fname" class = "box" id="fname_inp" onChange="val_fname('fname_inp','fname_err');"/><br/><br />

                 			<div id="fname_err" style="color: red;font-size: 12pt;"></div>

                 		<label class="signup-info" ><a style="font-size: 12pt;">ΕΠΙΘΕΤΟ :</a></label><input style="height: 30px;" type = "text" name = "lname" class = "box" id="lname_inp" onChange="val_lname('lname_inp','lname_err');"/><br/><br />

                 			<div id="lname_err" style="color: red;font-size: 12pt;"></div>

                 		<label class="signup-info" ><a style="font-size: 12pt;">EMAIL :</a></label><input style="height: 30px;" type = "email" name = "em" class = "box" id="em_inp" onChange="val_em('em_inp','em_err');"/><br/><br />

                 			<div id="em_err" style="color: red;font-size: 12pt;"></div>

                 		<label class="signup-info" ><a style="font-size: 12pt;">ΑΡΙΘΜΟΣ ΜΤΡΩΟΥ :</a></label><input style="height: 30px;" type = "text" name = "am" class = "box" id="am_inp" onChange="val_am('am_inp','am_err');"/><br/><br />

                 			<div id="am_err" style="color: red;font-size: 12pt;"></div>

                 		<label class="signup-info" ><a style="font-size: 12pt;">ΕΚΠΕΔΕΥΤΙΚΟ ΙΔΡΥΜΑ :</a></label><input style="height: 30px;" type = "text" name = "uni" class = "box" id="uni_inp" onChange="val_am('am_inp','am_err');"/><br/><br />

                  	</div>
                  	<div style=" float: right;width: 30%;height: 600px;">
                  		<input type = "submit" value = "ΕΓΓΡΑΦΗ" style="margin-top: 250px;font-size: 20pt;" /><br />
                      <div id="alert_box" style="margin-right: 10px;background-color: white;color: red;font-size: 12pt;"></div>
                  	</div>
               	</form>
			</div>
		</section>
	</body>
</html>