<?php
  include 'config.php';

  $email = $_POST['email'];
  $pasahitza = $_POST['pasahitza'];

  $zutabekop = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email' AND pasahitza = '$pasahitza'"));

if($zutabekop <= 0){
  echo("<script>alert('Erabiltzaile edo pasahitza okerra!')</script>");
  echo("<script>window.location = 'index.html;;</script>");
}
else{
  header('Location: web/web.php');
  exit;
}
?>