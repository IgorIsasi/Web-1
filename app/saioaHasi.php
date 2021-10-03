<?php
  // phpinfo();
  $hostname = "db";
  $username = "admin";
  $password = "test";
  $db = "database";

  //Datu basearen konexioa
  
  $conn = mysqli_connect($hostname,$username,$password,$db);
  if (!$conn) {
    echo "No se pudo conectar con el servidor";
  }else{
    $base=mysqli_select_db($conn,$db);
    if(!$base){
      echo"No se encontró la base de datos";
    }
  }

  $erabiltzailea=$_POST['txtIzena'];
  $pasahitza=$_POST['txtPasahitza'];

  $result=mysqli_query($conn,"SELECT * FROM usuarios WHERE erabiltzailea='$erabiltzailea' and pasahitza='$pasahitza'");
  $nr=mysqli_num_rows($result);

  if($nr>=1){
    echo"Saioa hasita";
  }

  




?>