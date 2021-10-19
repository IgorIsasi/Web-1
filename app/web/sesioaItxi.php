<?php
    session_start();
    echo("<script>window.alert('Saioa itxi duzu') </script>");
    session_destroy();
    echo("<script>window.location = '../saioaHasi'</script>");
?>