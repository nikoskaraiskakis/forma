<?php
    include("connect.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") { 
    	echo "asdasdas";     
        $username=$_POST['user'];
        $password=$_POST['pass'];
        $sql = "INSERT INTO Users(User_Name,Pass) VALUES ('$username','$password')";
   		mysqli_query($db,$sql);
        header("location: index.php");
    }
?>