<?php
	include("../connect.php");
	if(isset($_POST['search']))
	{
		session_start();
		$makerValue = $_POST['book'];
		array_push($_SESSION['submited'],$makerValue);
		header("location: Stud-New-Sem.php");
	}
?>
