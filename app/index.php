<?php
session_abort();
?>

<html>
    
<head>
<link rel="stylesheet" href="indexStyle.css">
  <!--Para evitar tener que recargar la caché  -->
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <!--Para evitar tener que recargar la caché  -->
</head>
    <body>
        <div class="padre">
            <h1>Ongi etorri!</h1>
            <button class="formulario__btn" onclick="location.href= 'saioaHasi/login.html'">Saioa hasi</button>
            <button class="formulario__btn" onclick="location.href= 'erregistratu/erregistroa.html'">Erregistratu</button>
            <input type="hiden" class="formulario__btn" onclick="location.href= 'erregistratu/erregistroa.html'">Erregistratu</button>

            <button class="formulario__btn" onclick="location.href= 'web/web.php'">Katalogoa</button>
        </div>
    </body>
</html>