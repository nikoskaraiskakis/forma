<?php 
	session_start();
	if($_SESSION['type']== 'PUBLISHER' ) { 
		header("location: ../apps/Publ-Man.php");
	}
	else {
		header("location: ../error.php");
	}
?>