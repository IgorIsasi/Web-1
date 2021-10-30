<?php
session_abort();
?>

<html>
    
<head>
  <!--Para evitar tener que recargar la caché  -->
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <!--Para evitar tener que recargar la caché  -->
</head>
    <body>
        <h1>Ongi etorri!</h1>
        <div class="botoiak">
            <input class="sesioaHasi" type="button" value="Saioa hasi" onclick="location.href= 'saioaHasi/login.html'">
            <input class="erregistratu" type="button" value="Erregistratu" onclick="location.href= 'erregistratu/erregistroa.html'">
            <input class="katalogoa" type="button" value="Liburuen katalogoa ikusi" onclick="location.href= 'web/web.php'">
        </div>
    </body>
</html>