

<?php
include("connect.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") {   
        $username=$_POST['user'];
        $password=$_POST['pass'];
        $password_cor=$_POST['pass_cor'];
        if ($username == "" || $password == "") {
            echo "<script>alert(5).innerHTML;</script>";
        }
        $sql1 = "SELECT * FROM Users WHERE User_Name == $username";
        $result = mysqli_query($db,$sql1);
        if ( !empty($result) ) {
            echo "Το username που συμπληρώσατε είναι ήδη πιασμένο";
        }
        elseif ($password != $password_cor) {
            echo "Ο κωδικός επαλήθευσης είναι λάθος";
        }
        else {
            $sql = "INSERT INTO Users(User_Name,Pass) VALUES ('$username','$password')";
            mysqli_query($db,$sql);
            //header("location: index.php");
        }
    }
?>