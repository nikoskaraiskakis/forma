<?php
	// formtest_2.php

	$name_vid = $name_type = $name_model = "";



	if (isset($_POST['vid'])) {
	    $name_vid = ($_POST['vid']);
	}
	else{
	    $name_vid = "no";
	}




	if($name_vid == 'f')
	{
		header('Location: Student-SignUp.php');
	}
	elseif($name_vid == 'e')
	{
	    header('Location: index.php');
	}
	elseif($name_vid == 'g')
	{
	    header('Location: index.php');
	}
	elseif($name_vid == 'd')
	{
	    header('Location: index.php');
	}
	elseif($name_vid == 's')
	{
	    header('Location: index.php');
	}
?>