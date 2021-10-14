<?php
        include '../config.php';

        $izena = $_POST['izena'];
        $egilea = $_POST['egilea'];
        $orriKop = $_POST['orriKop'];
        $prezioa = $_POST['prezioa'];
        $stock = $_POST['stock'];
        $irudiIzena = $_POST['irudia'];

    if (file_exists($_FILES['irudia']['var_tmp'])) {
        if (getimagesize($_FILES['irudia']['tmp_name']) == false) {
            echo '<br />Please Select An Image.';
            } 
        else {
            //declare variables
            $image = $_FILES['irudia']['tmp_name'];
            $name = $_FILES['irudia']['name'];
            $image = base64_encode(file_get_contents(addslashes($image)));
        //$irudi = file_get_contents($_FILES['irudia']['tmp_name']);
        //$irudia = base64_encode(file_get_contents(addslashes($image)));

        $query = mysqli_query($conn, "INSERT INTO liburua (izena, egilea, orriKop, prezioa, kopurua, irudia) VALUES ('$izena', '$egilea', $orriKop, $prezioa, $stock, '$irudia')")
        or die (mysqli_error($conn));

        header('Location: web.php');
        }
    }
    else{
        echo 'ez da sartu';
    }
?>