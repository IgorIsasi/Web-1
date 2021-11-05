<?php
session_abort();
?>

<html>
    
<head>
<link rel="stylesheet" href="formStyle.css">
  <!--Para evitar tener que recargar la caché  -->
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <!--Para evitar tener que recargar la caché  -->
</head>
    <body>
        <h1>Ongi etorri!</h1>
        <div class="botoiak-hasiSaioa">
            <button class="formulario__btn" onclick="location.href= 'saioaHasi/login.html'">Saioa hasi</button>
            <button class="formulario__btn" onclick="location.href= 'erregistratu/erregistroa.html'">Erregistratu</button>
            <button class="formulario__btn" onclick="location.href= 'web/web.php'">Liburuen katalogoa ikusi</button>
        </div>
    </body>
</html>