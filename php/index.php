
 <?php 
	session_start();
	if(empty($_SESSION['logged'])){
		$_SESSION['logged']=false;
	}

?>
<!doctype html>
<html lang="el">
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/index.css">
	</head>

	<body class="background-color">

		<section class= "top-section"  style="outline-style: solid;">

			<a href="index.php">
				<img src="../images/eudoxus-logo.png" alt="LOGO" class="LOGO">
			</a>
				
			<div class="topnav">
				<input type="text" placeholder="Search.." class="search">
				<a class='active'>
				  <?php 
				  if($_SESSION['logged']==true)
				    { 
				      echo $_SESSION['login_user'];
				      echo '<a href="logout.php"><span>Logout</span></a></li>';
				    }
				  elseif($_SESSION['logged']==false)
				    {
				      echo '<a href="Login.php"><span>Login/Register</span></a></li>';
				    }
				  ?>
				 </a>
				<a href="Comm.php">ΕΠΙΚΟΙΝΩΝΙΑ</a>
				<a href="Ann.php">ΑΝΑΚΟΙΝΩΣΕΙΣ</a>
				<a href="FAQ.php">FAQ</a>
				<a class="active" href="index.php">ΑΡΧΙΚΗ</a>
			</div>
			
			<div class="top-header">
				<h1>
					<a href="index.php" style="color: black;background-color:lightgray;border-radius:5pt;font-size: 30pt;">ΑΡΧΙΚΗ ΣΕΛΙΔΑ</a>
				</h1>
			</div>
		</section>

		<section class="mid-section" style="outline-style: solid;">
			
			<div class="app-box" >
				<h1 class="box-header">
					ΕΦΑΡΜΟΓΕΣ
				</h1>
				<div class="sub-box" style="border-left-color: black">
					<h1 class="subbox-header">
						<button>
							<a href="index.php" style="color: black">
								ΦΟΙΤΗΤΕΣ
							</a>
						</button>
					</h1>
					<div class="apps">
						<ul>
							<button onclick="window.location.href='FAQ.php'">ΔΗΛΩΣΗ ΣΥΓΓΡΑΜΜΑΤΩΝ</button>
							<button>ΑΝΤΑΛΛΑΓΗ ΣΥΓΓΡΑΜΜΑΤΩΝ</button>
						</ul>
					</div>
				</div>
				<div class="sub-box">
					<h1 class="subbox-header">
						<button>
							<a href="index." style="color: black">
								ΕΚΔΟΤΕΣ
							</a>
						</button>
					</h1>
					<div class="apps">
						<ul>
							<button>ΔΙΑΧΕΙΡΗΣΗ ΣΥΓΓΡΑΜΜΑΤΩΝ</button>
							<button>ΥΠΗΡΕΣΙΑ ΤΑΧΥΜΕΤΑΦΟΡΑΣ</button>
							<button>ΚΟΣΤΟΛΟΓΗΣΗ</button>
						</ul>
					</div>
				</div>
				<div class="sub-box">
					<h1 class="subbox-header">
						<button>
							<a href="index." style="color: black">
								ΓΡΑΜΜΑΤΕΙΑ
							</a>
						</button>
					</h1>
					<div class="apps">
						<ul>
							<button>ΔΙΑΧΕΙΡΗΣΗ ΜΑΘΗΜΑΤΩΝ/ΣΥΓΓΡΑΜΜΑΤΩΝ</button>
						</ul>
					</div>
				</div>
				<div class="sub-box">
					<h1 class="subbox-header">
						<button>
							<a href="index." style="color: black">
								ΔΙΑΘΕΤΕΣ ΣΥΓΓΡΑΜΜΑΤΩΝ
							</a>
						</button>
					</h1>
					<div class="apps">
						<ul>
							<button>ΔΙΑΧΕΙΡΗΣΗ ΣΗΜΕΙΩΣΕΩΝ</button>
						</ul>
					</div>
				</div>
				<div class="sub-box">
					<h1 class="subbox-header">
						<button>
							<a href="index." style="color: black">
								ΣΗΜΕΙΑ ΔΙΑΝΟΜΗΣ
							</a>
						</button>
					</h1>
					<div class="apps">
						<ul>
							<button>ΠΑΡΑΔΟΣΗ ΣΥΓΓΡΑΜΑΤΩΝ</button>
						</ul>
					</div>
				</div>
			</div>

			<div class="info-box" >
				<h1 class="box-header">
					ΓΕΝΙΚΕΣ ΠΛΗΡΟΦΟΡΙΕΣ
				</h1>
				<div class="info">
					Πρόκειται για μία πρωτοποριακή υπηρεσία για την άμεση και ολοκληρωμένη παροχή των Συγγραμμάτων των προπτυχιακών φοιτητών των Πανεπιστημίων, των Τεχνολογικών Εκπαιδευτικών Ιδρυμάτων (Τ.Ε.Ι.) και των Ανώτατων Εκκλησιαστικών Ακαδημιών (Α.Ε.Α.) της επικράτειας καθώς και του Ελληνικού Ανοιχτού Πανεπιστημίου (Ε.Α.Π.).
				</div>
			</div>

			<div class="ann-box" >
				<h1 class="box-header">
					ΑΝΑΚΟΙΝΩΣΕΙΣ
				</h1>
				<ul>
					<li>Coffee</li>
					<li>Tea</li>
					<li>Milk</li>
					<li>Coffee</li>
					<li>Tea</li>
					<li>Milk</li>
					<li>Coffee</li>
					<li>Tea</li>
					<li>Milk</li>
					<li>Coffee</li>
					<li>Tea</li>
					<li>Milk</li>
					<li>Coffee</li>
					<li>Tea</li>
					<li>Milk</li>
				</ul>
			</div>

		</section>
		




		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>

</html>
