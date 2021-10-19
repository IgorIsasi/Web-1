<?php

include '../config.php';
$izena=$_POST['izena'];
$abizenak = $_POST['abizenak'];
$nan = $_POST['nan'];
$telefonoa = $_POST['telefonoa'];
$jaiotzeData = $_POST['jaiotzeData'];
$email = $_POST['email'];
$pasahitza = $_POST['pasahitza'];


$sql = "INSERT INTO `usuarios`(`izena`,`abizenak`, `nan`, `jaiotzeData`, `pasahitza`, `telefonoa`, `email`) 
VALUES ('$izena', '$abizenak','$nan','$jaiotzeData','$pasahitza','$telefonoa','$email')";

if (mysqli_query($conn, $sql)) {
    header('Location:../saioaHasi/');
  } else{
    printf("Errormessage: %s\n", $conn->error);
  }
?>