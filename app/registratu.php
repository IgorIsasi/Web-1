
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registratu</title>
</head> 
<body>
<div>
  <?php
  include 'config.php'; //Konexioa egiteko
  if(isset($_POST['Sartu'])){ //'Sartu' botoiari klik egiterakoan
    $erabiltzailea=$_POST['txtErabiltzailea'];
    $izenAbizena=$_POST['txtIzenAbizena'];
    $email=$_POST['txtEmail'];
    $nan=$_POST['txtNan'];
    $jaiotzeData=$_POST['txtJaiotzeData'];
    $pasahitza=$_POST['txtPasahitza'];
    $telefonoa=$_POST['txtTelefonoa'];

    $query=mysqli_query($conn,"SELECT * FROM usuarios WHERE 
    erabiltzailea='$erabiltzailea'
    or email='$email'
    or telefonoa='$telefonoa'");
    $nr=mysqli_num_rows($query);
    if($nr>0){
      echo"Erabiltzailea / email / telefonoa erabilita daude jadanik";
    }else{
      $query=mysqli_query($conn,"INSERT INTO `usuarios` VALUES 
      ('$erabiltzailea','$izenAbizena','$email','$nan','$jaiotzeData','$pasahitza','$telefonoa')");
      echo"Datuak sartuta!";
    }

    
  }
  ?>
</div>


  
<div class="wrapper">

  <div id="formContent">
    <!-- Tabs Titles -->
    <a href="hasiSaioa.php" class="inactive underlineHover">Hasi saioa </a>
    <h2 class="active"> Registratu </h2>

    <!-- Icon -->
    

    <!-- Login Form -->
    <form method="post" action="registratu.php">
      <input type="text" id="erabiltzailea" class="fadeIn first" name="txtErabiltzailea" placeholder="Erabiltzailea" required>
      <input type="text" id="izenAbizena" class="fadeIn first" name="txtIzenAbizena" placeholder="Izen Abizena (Adb: Mikel Busturia)" required>
      <input type="text" id="email" class="fadeIn first" name="txtEmail" placeholder="Email-a (xxx@yyy.zzz)" required>
      <input type="text" id="telefonoa" class="fadeIn first" name="txtTelefonoa" placeholder="Telefonoa (Adb: 670929543)" required>
      <input type="text" id="nan" class="fadeIn first" name="txtNan" placeholder="NAN (Adb: 123456789X)" required>
      <input type="text" id="jaiotzeData" class="fadeIn first" name="txtJaiotzeData" placeholder="Jaiotze data (Adb:1990-09-04)" required>
      <input type="password" id="pasahitza" class="fadeIn first" name="txtPasahitza" placeholder="Pasahitza" required>
      <input type="submit" class="fadeIn fourth" value="Sartu" name="Sartu">
    </form>

    <!-- Remind Passowrd -->
    

  </div>
</div>
  
</body>
</html>



