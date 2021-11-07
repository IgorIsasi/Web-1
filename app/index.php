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
        <h1>ONGI ETORRI!</h1>
        <img src="img/biblioteca.jpg" class="irudia">
        <div class="botoiak">
            <button class="botoiaSaioa" onclick="location.href= 'saioaHasi/login.html'">Saioa hasi</button>
            <button class="botoiaErregistratu" onclick="location.href= 'erregistratu/erregistroa.html'">Erregistratu</button>
            <button class="botoiaKatalogoa" onclick="location.href= 'web/web.php'">Liburuen katalogoa ikusi</button>
        </div>
    </body>
</html>