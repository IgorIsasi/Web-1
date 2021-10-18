<?php
  include 'config.php';

  $email = $_POST['email'];
  $pasahitza = $_POST['pasahitza'];


  $emaitza = mysqli_query($conn,"SELECT * FROM usuarios WHERE email = '$email' AND pasahitza = '$pasahitza'");
  $zutabekop= mysqli_num_rows($emaitza);
  echo $zutabekop;
if($zutabekop <= 0){
  echo $email;
  echo $pasahitza;
  echo("AAA<script>alert('Erabiltzaile edo pasahitza okerra!')</script>");
  echo("<script>window.location = 'index.html;;</script>");
}
else{
  header('Location: web/web.php');
  exit;
}
?>