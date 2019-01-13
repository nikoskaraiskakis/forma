<?php 
	if (empty($_SESSION['login_user'])){
		header("location: Stud-New-Sem.php");
	}
	session_start();
	include("../connect.php");
	$username = $_SESSION['login_user'];
	$sql = "SELECT * FROM submissions WHERE username LIKE '$username' ORDER BY submission_id DESC";
	$result = mysqli_query($db,$sql);

	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);

	

	if ( $count == 0 ) {  //THE USER DOESNT HAVE ANY PREVIOUS SUBMISSIONS
		$new_id = 1;
		foreach($_SESSION['submited'] as $product) {
			$sql = "INSERT INTO submissions(submission_id,username,book) VALUES ('$new_id','$username','$product')";
			mysqli_query($db,$sql);
			$_SESSION['submited'] = array();
			header("location: Stud-Sub.php");
		}
	}
	else {
	$new_id = $row["submission_id"] + 1;
		foreach($_SESSION['submited'] as $product) {
			$sql = "INSERT INTO submissions(submission_id,username,book) VALUES ('$new_id','$username','$product')";
			mysqli_query($db,$sql);
			$_SESSION['submited'] = array();
			header("location: Stud-Sub.php");
		}
	}
?>