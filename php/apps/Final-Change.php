<?php 
	session_start();
	if (empty($_SESSION['submited'])){
		header("location: Change-New-Sem.php");
	}
	include("../connect.php");
	?><script type="text/javascript">alert("Η ΤΡΟΠΟΠΟΙΗΣΗ ΟΛΟΚΛΗΡΩΘΗΚΕ ΜΕ ΕΠΙΤΥΧΙΑ");</script><?php
	$username = $_SESSION['login_user'];
	$sql = "SELECT * FROM submissions WHERE username LIKE '$username' ORDER BY submission_id DESC";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$pin = $row["pin"];
	$id = $row["submission_id"];

	$sql = "DELETE FROM submissions WHERE submission_id='$id'";
	mysqli_query($db,$sql);

	foreach($_SESSION['submited'] as $product) {
		$sql = "INSERT INTO submissions(submission_id,username,book,pin) VALUES ('$id','$username','$product','$pin')";
		mysqli_query($db,$sql);
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
				<a class="active" style="margin-right: 300px;width: 300px;background-color: lightgreen;color: black;" href="../index.php">ΑΡΧΙΚΗ</a>
			</div>
			<div class="topnav" >
				<a  style="margin-top: 10px;margin-right: 300px;width: 300px;background-color: lightgreen;" href="Stud-Sub.php">ΕΠΙΣΤΡΟΦΗ ΣΤΗΝ ΕΦΑΡΜΟΓΗ ΔΗΛΩΣΕΩΝ</a>
			</div>
			
			<div class="top-header">
				<h1>
					<a style="color: black;background-color:lightgray;border-radius:5pt;font-size: 30pt;">ΠΛΗΡΟΦΟΡΙΕΣ ΔΗΛΩΣΗΣ</a>
				</h1>
			</div>
		</section>
		<section class="mid-section">
			
			<div class="app-box" >
				<div class="sub-box" style="width: 30%;float: left;text-align: center;">
					<h3 style="margin-top: 100px;">Το pin σας έιναι : <?php echo $pin;?></h3>
				</div>
				<div class="sub-box" style="width: 60%;float: right;">
					<h1 class="subbox-header" >ΣΗΜΕΙΑ ΠΑΡΑΛΑΒΗΣ</h1>
					<div style="width: 90%;height: 70%;border-radius: 25pt;background-color: #FFFCB7;overflow: auto;">
						<ul style="margin-top: 20px;">
							<?php 
								foreach($_SESSION['submited'] as $product) {
									?>
									<li style="margin-bottom: 5px;"><?php echo $product;?> :<?php 
										$sql = "SELECT * FROM BOOKS WHERE book_name LIKE '$product'";
										$result = mysqli_query($db,$sql);
										$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
										$p = $row["book_ekdoseis"];
										$sql = "SELECT * FROM publisher_address WHERE publishers LIKE '$p'";
										$result = mysqli_query($db,$sql);
										$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
										echo $row["adresses"];?> <?php
										echo $row["adress_numbers"];
									?></li>
									<?php
								}
							?>
						</ul>
						<?php $_SESSION['submited'] = array();?>
					</div>
				</div>
			</div>
		</section>	

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>

</html>
