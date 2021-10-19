<!DOCTYPE html>

<?php
    //$liburua = 

    $query = mysqli_query($conn, "UPDATE liburua SET kopurua = kopurua - 1 WHERE izena = '$liburua'")
        or die (mysqli_error($conn));    
?>