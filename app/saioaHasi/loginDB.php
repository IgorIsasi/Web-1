<?php //Para evitar que de problemas con el header
ob_start();
  include '../config.php';
  session_start();
  $email = $_POST['email'];
  $_SESSION['email'] = $email;
  $pasahitza = $_POST['pasahitza'];
  $emaitza = mysqli_query($conn,"SELECT * FROM usuarios WHERE email = '$email' AND pasahitza = '$pasahitza'");
  $zutabekop= mysqli_num_rows($emaitza);
  echo $zutabekop;
if($zutabekop <= 0){
  echo("<script>window.location = 'index.html;;</script>");
}else{
  header('Location: ../web/web.php');
}
//Para evitar que de problemas con el header
ob_end_flush();
?>