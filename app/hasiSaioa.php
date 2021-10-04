<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasi saioa</title>
</head>

<body>
<div>
    <?php
    include 'config.php';
    session_start();
    if(isset($_POST['Sartu'])){
      $erabiltzailea=$_POST['txtErabiltzailea'];
      $pasahitza=$_POST['txtPasahitza'];
      $query=mysqli_query($conn,"SELECT * FROM usuarios WHERE erabiltzailea='$erabiltzailea' and pasahitza='$pasahitza'");
      $nr=mysqli_num_rows($query);
      if($nr>0){
        header("Location: ongiEtorri.php");
      }
    }
    ?>
</div>
<div class="wrapper">
<div id="formContent">
  <!-- Tabs Titles -->
  <h2 class="active"> Saioa hasi</h2>
  <a href="registratu.php" class="inactive underlineHover">Registratu </a>
  <!-- Icon -->
  <div class="fadeIn first">
    <img src="img/userlogo.png" id="logo" id="icon" alt="User Icon" width="100" height="100">
  </div>
  <form method="post" action="index.php">
    <input type="text" id="login" class="fadeIn second" name="txtErabiltzailea" placeholder="Erabiltzailea">
    <input type="password" id="password" class="fadeIn third" name="txtPasahitza" placeholder="Pasahitza">
    <input type="submit" class="fadeIn fourth" value="Sartu" name="Sartu">
  </form>
  <!-- Remind Passowrd -->
</div>
</div>
</body>
</html>


