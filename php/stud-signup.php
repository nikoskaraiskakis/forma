<?php
    include("connect.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") {   
        $username=$_POST['user'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $password=$_POST['pass'];
        $password_cor=$_POST['pass_cor'];
        $email=$_POST['em'];
        $am=$_POST['am'];
        $uni=$_POST['uni'];
        $sql1 = "SELECT * FROM Users WHERE User_Name LIKE '$username'";
        $result = mysqli_query($db,$sql1);
        if ( mysqli_num_rows($result) != 0 ) {
            $_SESSION['error']="To username ειναι ηδη πιασμενο";
            header("location: error.php");
        }
        else {
            $sql = "INSERT INTO Users(User_Name,Pass,User_Type) VALUES ('$username','$password','STUDENT')";
            mysqli_query($db,$sql);
            $sql = "INSERT INTO students(username,password,email,am,uni,firstname,lastname) VALUES ('$username','$password','$email','$am','$uni','$fname','$lname')";
            mysqli_query($db,$sql);
            header("location: index.php");
        }
    }
?>