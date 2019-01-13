<?php 
	session_start();
	if( $_SESSION['logged'] == false ) {
		$_SESSION['error'] = "ΠΡΕΠΕΙ ΝΑ ΣΥΝΔΕΘΕΙΤΕ ΓΙΑ ΝΑ ΧΡΗΣΙΜΟΠΟΙΗΣΕΤΕ ΑΥΤΗΝ ΤΗΝ ΕΦΑΡΜΟΓΗ";
		header("location: ../error.php");
	}
	if($_SESSION['type']== 'PUBLISHER' ) { 
		header("location: ../apps/Publ-Man.php");
	}
	else {
		$_SESSION['error'] = "ΠΡΕΠΕΙ ΝΑ ΕΙΣΤΕ ΕΚΔΟΤΗΣ ΓΙΑ ΝΑ ΧΡΗΣΙΜΟΠΟΙΗΣΕΤΕ ΑΥΤΗΝ ΤΗΝ ΕΦΑΡΜΟΓΗ";
		header("location: ../error.php");
	}
?>