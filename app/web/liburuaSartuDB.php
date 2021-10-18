<?php
        include '../config.php';

        $izena = $_POST['izena'];
        $egilea = $_POST['egilea'];
        $orriKop = $_POST['orriKop'];
        $prezioa = $_POST['prezioa'];
        $stock = $_POST['stock'];

    if (file_exists($_FILES['irudia']['tmp_name'])) {
        if (getimagesize($_FILES['irudia']['tmp_name']) == false) {
            echo '<br />Please Select An Image.';
            } 
        else {
            //declare variables
            $irudiTmp = $_FILES['irudia']['tmp_name'];
            $irudiIzena = $_FILES['irudia']['name'];
            $query = mysqli_query($conn, "INSERT INTO liburua (izena, egilea, orriKop, prezioa, kopurua, irudia) VALUES ('$izena', '$egilea', $orriKop, $prezioa, $stock, '$irudiIzena')")
            or die (mysqli_error($conn));
            
            header('Location: web.php');
        }
    }
    else{
        echo 'fitxategia ez da aurkitu';
    }
?>