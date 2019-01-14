<?php
    include("../connect.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") {   
        $title=$_POST['title'];
        $writer=$_POST['writer'];
        $isbn=$_POST['isbn'];
        $ekdoseis=$_POST['ekdoseis'];


        $subj_array = array('math1', 'science2', 'history1');
        $subject_pos = array_rand ($subj_array, 1);
        $subject = $subj_array[$subject_pos];

        $sql1 = "SELECT * FROM BOOKS WHERE book_name LIKE '$title'";
        $result = mysqli_query($db,$sql1);
        if ( mysqli_num_rows($result) != 0 ) {
            echo "asd";
            $_SESSION['error']="To σύγγραμμα είναι ήδη καταχωρημένο";
            header("location: ../error.php");
        }
        else {
            echo "asd2";
            $sql = "INSERT INTO BOOKS(book_name,book_writer,book_isbn,book_ekdoseis,book_subject) VALUES ('$title','$writer','$isbn','$ekdoseis','$subject')";
            mysqli_query($db,$sql);
            //header("location: ../index.php");
        }
    }
?>