<?php
    include("connect.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") {   
        $username=$_POST['user'];
        $password=$_POST['pass'];
        $password_cor=$_POST['pass_cor'];
        $email=$_POST['em'];
        $cname=$_POST['cname'];
        $afm=$_POST['afm'];
        $sql1 = "SELECT * FROM publishers WHERE username == $username";
        $result = mysqli_query($db,$sql1);
        if ( !empty($result) ) {
            echo "Το username που συμπληρώσατε είναι ήδη πιασμένο";
        }
        elseif ($password != $password_cor) {
            echo "Ο κωδικός επαλήθευσης είναι λάθος";
        }
        else {
            $sql = "INSERT INTO publishers(username,password,email,companyname,afm) VALUES ('$username','$password','$email','$cname','$afm')";
            mysqli_query($db,$sql);
            header("location: index.php");
        }
    }
?>