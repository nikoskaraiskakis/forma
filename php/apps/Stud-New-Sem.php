<?php
	session_start();
?>

<!doctype html>
<html lang="el">
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="../../css/User-New.css">
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
				<h1>Επιλέξτε εξάμηνο</h1>
				<form method="POST" action="Stud-New-Sub.php">
					<select style="margin-left: 20px;width: 300px;margin-top: 100px;" id="sem" name="sem" onchange="document.getElementById('sel-sem').value=this.options[this.selectedIndex].text">
						<option>1ο Εξάμηνο</option>
						<option>2ο Εξάμηνο</option>
						<option>3ο Εξάμηνο</option>
						<option>4ο Εξάμηνο</option>
						<option>5ο Εξάμηνο</option>
						<option>6ο Εξάμηνο</option>
						<option>7ο Εξάμηνο</option>
						<option>8ο Εξάμηνο</option>
					</select>
					<input type="hidden" name="selected_text" id="sel-sem" value="" />
					<button style="float: right;background-color: lightgrey;margin-right: 600px;margin-top: 100px;width: 300px;height: 50px; type="submit" name="search" value="Search"><b>ΣΥΝΕΧΕΙΑ</b></button>
				</form>
			</div>
		</section>



		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>

</html>