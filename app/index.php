
<link rel="stylesheet" href="style.css">
<div class="wrapper fadeInDown">

  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Saioa hasi </h2>
    <a href="registratu.php" class="inactive underlineHover">Registratu </a>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/OOjs_UI_icon_userAvatar.svg/1200px-OOjs_UI_icon_userAvatar.svg.png" id="icon" alt="User Icon"/>
    </div>

    <!-- Login Form -->
    <form method="post" action="saioaHasi.php">
      <input type="text" id="login" class="fadeIn second" name="txtErabiltzailea" placeholder="Erabiltzailea">
      <input type="text" id="password" class="fadeIn third" name="txtPasahitza" placeholder="Pasahitza">
      <input type="submit" class="fadeIn fourth" value="Sartu">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Pasahitza ahaztuta?</a>
    </div>

    

  </div>
</div>
