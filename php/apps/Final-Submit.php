<?php 
	session_start();
	$username = $_SESSION['login_user'];
	$sql = "SELECT * FROM submissions WHERE username LIKE '$username' ORDER BY submission_id DESC";
	$result = mysqli_query($db,$sql);

	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);

	if ( $count == 0 ) {  //THE USER DOESNT HAVE ANY PREVIOUS SUBMISSIONS
	}
	else {
	$new_id = $row["submission_id"] + 1;
	foreach($_SESSION['submited'] as $product) {
		$sql = "INSERT INTO submissions";
	}
	}


	//ΝΑ ΣΒΗΣΟΥΜΕ ΤΟΝ ΠΙΝΑΚΑ
?>