<?php
	session_start(); 
	include("../connect.php");
	$username = $_SESSION['login_user'];
	$sql = "SELECT * FROM submissions WHERE username LIKE '$username' ORDER BY submission_id DESC";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
	if($count != 0 ){
		$fcount = $count - 1;
		$scount = 1;
	}
	else{
		header("location: Stud-Sub.php");
	}
?>


<!doctype html>
<html lang="el">
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="../../css/Publ-Man.css">
	</head>

	<body class="background-color">

		<section class= "top-section" >

			<a href="../index.php">
				<img src="../../images/eudoxus-logo.png" alt="LOGO" class="LOGO">
			</a>
				
			<div class="topnav" >
				<a class="active" style="margin-right: 300px;width: 300px;" href="../index.php">ΑΡΧΙΚΗ</a>
			</div>
			
			<div class="top-header">
				<h1>
					<a style="color: black;background-color:lightgray;border-radius:5pt;font-size: 30pt;">ΕΦΑΡΜΟΓΗ ΔHΛΩΣΗΣ ΣΥΓΓΡΑΜΜΑΤΩΝ</a>
				</h1>
			</div>
		</section>
		<section class="mid-section">
			
			<div class="app-box" >
				<div class="sub-box" style="background-color: #FFFCB7;width: 80%;height: 90%;margin-left: 10%;margin-top: 2.5%;border-radius: 25pt;overflow: auto;">
						<ul>
						<?php 
							for ($i = $scount; $i <= $fcount - 1; $i++) {
								?><li style="margin-left: 20px;font-size: 30pt;">ΔΗΛΩΣΗ <?php echo $i?></li>
										<ul><?php
												$sql = "SELECT * FROM submissions WHERE username LIKE '$username' ORDER BY submission_id DESC";
												$result = mysqli_query($db,$sql);
											    while ($row = mysqli_fetch_assoc($result)) {
												    if($row["submission_id"] == $i ){
												    	?><li style="margin-left: 20px;font-size: 15pt;"><?php echo $row["book"];?></li><?php
												    }
												}
											?>
										</ul><?php
							}	
						?>	
						</ul>

				</div>
			</div>
		</section>	

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>

</html>