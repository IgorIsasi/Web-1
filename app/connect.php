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

  $query=mysqli_query($conn,"SELECT * FROM usuarios" ) or die (mysqli_error($query));

  while($row=mysqli_fetch_array($query)){
    echo
    "<b>{$row['erabiltzailea']}</b>
    <td>{$row['pasahitza']}</td>
    <br>";
  }

  




?>