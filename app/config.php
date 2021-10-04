<?php
$hostname = "localhost";
$username = "root";
$password = "";
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
?>