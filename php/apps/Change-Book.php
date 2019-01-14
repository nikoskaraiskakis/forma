<?php
	include("../connect.php");
	if(isset($_POST['search']))
	{
		session_start();
		$makerValue = $_POST['book'];
		$book = $makerValue;
		$sql = "SELECT * FROM BOOKS WHERE book_name LIKE '$book'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$sub1 = $row["book_subject"];
		$ar = $_SESSION['submited'];
		$count = key($ar);
		echo $count;
		if(!empty($ar)){
			foreach ($ar as $product) {
				$sql = "SELECT * FROM BOOKS WHERE book_name LIKE '$product'";
				$result = mysqli_query($db,$sql);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				$sub2 = $row["book_subject"];
				if ( $sub2 == $sub1 ){
					unset($ar[$count]);
				}
				$count = $count + 1;
			}
		}
		$_SESSION['submited'] = $ar;







		array_push($_SESSION['submited'],$makerValue);
		header("location: Change-New-Sem.php");
	}
?>
