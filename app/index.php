<?php
session_abort();
?>

<html>
    <head>

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