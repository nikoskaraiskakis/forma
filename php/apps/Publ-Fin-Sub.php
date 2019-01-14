<?php 
	session_start();
	include("../connect.php");

	$title = $_POST['title'];
	$writer = $_POST['writer'];
	$isbn = $_POST['isbn'];
	$ekdoseis = $_POST['ekdoseis'];
	

	$sql = "INSERT INTO BOOKS(book_name,book_writer,book_isbn,book_ekdoseis,book_subject) VALUES ('$title','$writer','$isbn','$isbn')";
	mysqli_query($db,$sql);
	header("location: ../index.php");
?>


