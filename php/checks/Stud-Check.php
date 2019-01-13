<?php 
	session_start();
	if( $_SESSION['logged'] == false ) {
		$_SESSION['error'] = "ΠΡΕΠΕΙ ΝΑ ΣΥΝΔΕΘΕΙΤΕ ΓΙΑ ΝΑ ΧΡΗΣΙΜΟΠΟΙΗΣΕΤΕ ΑΥΤΗΝ ΤΗΝ ΕΦΑΡΜΟΓΗ";
		header("location: ../error.php");
	}
	if($_SESSION['type']== 'STUDENT' ) { 
		header("location: ../apps/Stud-Sub.php");
	}
	else {
		$_SESSION['error'] = "ΠΡΕΠΕΙ ΝΑ ΕΙΣΤΕ ΦΟΙΤΗΤΗΣ ΓΙΑ ΝΑ ΧΡΗΣΙΜΟΠΟΙΗΣΕΤΕ ΑΥΤΗΝ ΤΗΝ ΕΦΑΡΜΟΓΗ";
		header("location: ../error.php");
	}
?>