<?php
  include 'config.php';

  $izena = $_POST['izena'];
  $abizenak = $_POST['abizenak'];
  $NAN = $_POST['NAN'];
  $telefonoa = $_POST['telefonoa'];
  $jaiotzeData = $_POST['jaiotzeData'];
  $email = $_POST['email'];
  $pasahitza = $_POST['pasahitza'];

  $sql = "INSERT  INTO usuarios (izena, abizenak, NAN, telefonoa, jaiotzeData, email, pasahitza) VALUES ('$izena', '$abizenak', '$NAN', $telefonoa, '$jaiotzeData', '$email', '$pasahitza')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header('Location: web.php');
  } 
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
?>