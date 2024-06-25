<?php

if(isset($_GET["id"]))
{
    $id = $_GET["id"];

    $host= "localhost";
    $user= "root";
    $password= "";
    $db = "goldenlightdb";

    $connect = new mysqli($host, $user, $password, $db);

    $sql = "DELETE FROM users WHERE id=$id";
    $connect->query($sql);
}

header("location:../index.php");
exit;

?>