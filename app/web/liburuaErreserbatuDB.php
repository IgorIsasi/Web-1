<?php
    include '../config.php';
    session_start();
    $liburua = $_POST['izena'];
    $egilea = $_POST['egilea'];
    $email = $_SESSION['email'];

    $query = mysqli_query($conn, "INSERT INTO erreserba (liburuIzena, liburuEgilea, erabEmail) VALUES ('$liburua', '$egilea', '$email')")
        or die (mysqli_error($conn)); 
    $query = mysqli_query($conn, "UPDATE liburua SET kopurua = kopurua - 1 WHERE izena = '$liburua'")
        or die (mysqli_error($conn));
        
    header('Location: web.php');
?>