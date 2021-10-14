<!DOCTYPE html>

<?php
    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";

    $conn = mysqli_connect($hostname,$username,$password,$db);
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    //$liburua = 

    $query = mysqli_query($conn, "UPDATE liburua SET kopurua = kopurua - 1 WHERE izena = '$liburua'")
        or die (mysqli_error($conn));    
?>