<?php
    // $host = "localhost";
    // $user = "root";
    // $password = "";
    // $dbname = "goldenlightdb";

    // $con = mysqli_connect("localhost", "root", "", "goldenlightdb");

    // if (!$con) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $con = mysqli_connect("localhost", "root", "", "goldenlightdb") or die("Connection Failed:" .my_sqli_connection_error());
        if(isset($_POST['fName']) && isset($_POST['lName']) && isset($_POST['email']) && isset($_POST['mnum']) && isset($_POST['message'])){
            $fname = $_POST['fName'];
            $lname = $_POST['lName'];
            $email = $_POST['email'];
            $mnum = $_POST['mnum'];
            $message = $_POST['message'];

            $insert = "INSERT INTO `users` (`fname`, `lname`, `email`, `mnum`, `message`) VALUES ('$fname', '$lname', '$email', '$mnum', '$message')";
            $check = mysqli_query($con, $insert);

            if($check){
                // alert("Account Created Successfully");
                echo 'Entry Successful';
            } else {
                // alert("Error Occurred");
                echo 'Error';
            }
        }
    }
?>