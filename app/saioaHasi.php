<?php
  // phpinfo();
  include 'config.php';
  session_start();

  $erabiltzailea=$_POST['txtErabiltzailea'];
  $pasahitza=$_POST['txtPasahitza'];

  $result=mysqli_query($conn,"SELECT * FROM usuarios WHERE erabiltzailea='$erabiltzailea' and pasahitza='$pasahitza'");
  $nr=mysqli_num_rows($result);

  if($nr>=1){
    header("Location: ongiEtorri.php");
    
  }else{
    header("Location: datuakTxarto.php");
    
  }
