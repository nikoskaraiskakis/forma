<?php
    include("connect.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") {   
        $username=$_POST['user'];
        $password=$_POST['pass'];
        $password_cor=$_POST['pass_cor'];
        $email=$_POST['em'];
        $cname=$_POST['cname'];
        $afm=$_POST['afm'];
        $sql1 = "SELECT * FROM Users WHERE User_Name LIKE '$username'";
        $result = mysqli_query($db,$sql1);
        if ( mysqli_num_rows($result) != 0 ) {
            $_SESSION['error']="To username ειναι ηδη πιασμενο";
            header("location: error.php");
        }
        else {
            $sql = "INSERT INTO publishers(username,password,email,companyname,afm) VALUES ('$username','$password','$email','$cname','$afm')";
            mysqli_query($db,$sql);
            $sql = "INSERT INTO Users(User_Name,Pass,User_Type) VALUES ('$username','$password','PUBLISHER')";
            mysqli_query($db,$sql);
            header("location: index.php");
        }
    }
?>