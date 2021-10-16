<?php

include 'config.php';

echo "New record created successfully";

$izenAbizen = $_POST['izenAbizen'];
$nan = $_POST['nan'];
$telefonoa = $_POST['telefonoa'];
$jaiotzeData = $_POST['jaiotzeData'];
$email = $_POST['email'];
$pasahitza = $_POST['pasahitza'];


$sql = "INSERT INTO `usuarios`(`izenAbizena`, `nan`, `jaiotzeData`, `pasahitza`, `telefonoa`, `email`) 
VALUES ('$izenAbizen','$nan','$jaiotzeData','$pasahitza','$telefonoa','$email')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header('Location: web.php');
  } 
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>