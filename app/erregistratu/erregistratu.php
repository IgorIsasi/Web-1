
<?php

include 'config.php';
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
  } else{
    printf("Errormessage: %s\n", $conn->error);
  }
  

?>