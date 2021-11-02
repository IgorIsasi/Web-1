<?php

include '../config.php';
$izena=$_POST['izena'];
$abizenak = $_POST['abizenak'];
$nan = $_POST['nan'];
$telefonoa = $_POST['telefonoa'];
$jaiotzeData = $_POST['jaiotzeData'];
$email = $_POST['email'];
$pasahitza = $_POST['pasahitza'];


$sql = "UPDATE usuarios SET izena='$izena', abizenak='$abizenak', nan='$nan', jaiotzeData='$jaiotzeData', pasahitza='$pasahitza', telefonoa='$telefonoa', email='$email') 
WHERE email='$email'";

if (mysqli_query($conn, $sql)) {
    
  } else{
    printf("Errormessage: %s\n", $conn->error);
  }
?>