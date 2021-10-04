
<link rel="stylesheet" href="style.css">
<div class="wrapper fadeInDown">

  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Registratu </h2>
    <a href="index.php" class="inactive underlineHover">Hasi saioa </a>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/OOjs_UI_icon_userAvatar.svg/1200px-OOjs_UI_icon_userAvatar.svg.png" id="icon" alt="User Icon"/>
    </div>

    <!-- Login Form -->
    <form method="post" action="saioaHasi.php">
      <input type="text" id="erabiltzailea" class="fadeIn second" name="txtErabiltzailea" placeholder="Erabiltzailea">
      <input type="text" id="izenAbizena" class="fadeIn second" name="txtIzenAbizena" placeholder="Izen Abizena (Adb: Mikel Busturia)">
      <input type="text" id="email" class="fadeIn second" name="txtEmail" placeholder="Email-a (xxx@yyy.zzz)">
      <input type="text" id="telefonoa" class="fadeIn second" name="txtTelefonoa" placeholder="Telefonoa (Adb: 670929543)">
      <input type="text" id="nan" class="fadeIn second" name="txtNan" placeholder="NAN (Adb: 123456789X)">
      <input type="text" id="jaiotzeData" class="fadeIn second" name="txtJaiotzeData" placeholder="Jaiotze data (Adb:1990-09-04)">
      <input type="password" id="pasahitza" class="fadeIn third" name="txtPasahitza" placeholder="Pasahitza">
      <input type="submit" class="fadeIn fourth" value="Sartu">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Pasahitza ahaztuta?</a>
    </div>

  </div>
</div>
