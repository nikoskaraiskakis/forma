<!doctype html>
<html lang="el">
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="../../css/Publ-Man.css">

		<script type="text/javascript" src="../JAVAscripts/validate-title.js"></script>
		<script type="text/javascript" src="../JAVAscripts/validate-writer.js"></script>
		<script type="text/javascript" src="../JAVAscripts/validate-isbn.js"></script>
	    <script type="text/javascript" src="../JAVAscripts/validate-ekdoseis.js"></script>
	</head>

	<body class="background-color">

		<section class= "top-section" >

			<a href="../index.php">
				<img src="../../images/eudoxus-logo.png" alt="LOGO" class="LOGO">
			</a>
				
			<div class="topnav" >
				<a  style="margin-right: 300px;width: 300px;background-color: lightgreen;" href="../index.php">ΑΡΧΙΚΗ</a>
			</div>
			
			<div class="top-header">
				<h1>
					<a style="color: black;background-color:lightgray;border-radius:5pt;font-size: 30pt;">KAΤΑΧΩΡΗΣΗ ΣΥΓΓΡΑΜΜΑΤΩΝ</a>
				</h1>
			</div>
		</section>
		<section class= "mid-section" >
			<div class="app-box">
				<form method = "post" onsubmit="return re('uname_inp','pass_inp','cpass_inp','em_inp','cname_inp','afm_inp','alert_box')" action = "publ-signup.php" >  
					<div class="form-subbox">


                  		<label class="signup-info" style="margin-top: 60px;"><a style="font-size: 12PT;">ΤΙΤΛΟΣ ΒΙΒΛΙΟΥ :</a></label><input style="height: 30px;" id="title_inp" onChange="val_title('title_inp','title_err');" type = "text" name = "title" class = "box"/><br /><br />

                  			<div id="title_err" style="color: red;font-size: 12pt;"></div>


                  		<label class="signup-info" style="margin-top: 60px;"><a style="font-size: 12PT;">ΣΥΓΓΡΑΦΕΑΣ :</a></label><input style="height: 30px;" id="title_inp" onChange="val_writer('writer_inp','writer_err');" type = "text" name = "writer" class = "box"/><br /><br />

                  			<div id="writer_err" style="color: red;font-size: 12pt;"></div>

                  		<label class="signup-info" style="margin-top: 60px;"><a style="font-size: 12PT;">ISBN :</a></label><input style="height: 30px;" id="isbn_inp" onChange="val_isbn('isbn_inp','isbn_err');" type = "text" name = "isbn" class = "box"/><br /><br />

                  			<div id="isbn_err" style="color: red;font-size: 12pt;"></div>

                  		<label class="signup-info" style="margin-top: 60px;"><a style="font-size: 12PT;">ΕΚΔΟΣΕΙΣ :</a></label><input style="height: 30px;" id="ekdoseis_inp" onChange="val_ekdoseis('ekdoseis_inp','ekdoseis_err');" type = "text" name = "ekdoseis" class = "box"/><br /><br />

                  			<div id="ekdoseis_err" style="color: red;font-size: 12pt;"></div>

                 	
                  	</div>
                  	<div style=" float: right;width: 30%;height: 600px;">
                  		<input type = "submit" value = "ΚΑΤΑΧΩΡΗΣΗ" style="margin-top: 250px;font-size: 20pt;" /><br />
                      <div id="alert_box" style="margin-right: 10px;background-color: white;color: red;font-size: 12pt;"></div>
                  	</div>
               	</form>
			</div>
		</section>



		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>

</html>