<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="webItxura.css">
        <script type="text/javascript" src="liburuaErosi.js"></script>
        <title> Liburuen katalogoa </title>
    </head>
    <body>
        <h1> Liburuen katalogoa </h1>
    <div class = "liburutegia">
    <?php
        include '../config.php';

        $query = mysqli_query($conn, "SELECT * FROM liburua")
        or die (mysqli_error($conn));
        
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <div class="liburuTxartela">
                    <img src="<?php echo $row['irudia']?>"> 
                    <div class="liburuDatuak">
                        <h4><b><?php echo $row['izena']; ?></b></h4>
                        <p><?php echo ($row['egilea']); ?></p>
                    </div>
                </div> 
        <?php
            }
        ?>
    </div>
    <div>
        <div class = "liburuaSartu" ><input type="button" value = "Liburua sartu" onclick = "location.href = 'liburuaSartu.html'"></div>
        <div class = "liburuaEzabatu"><input type="button" value = "Liburua ezabatu" onclick = "location.href = 'liburuaEzabatu.html'"></div>
        <div class = "liburuaErreserbatu"><input type="button" value = "Liburua erreserbatu" onclick = "location.href = 'liburuaErreserbatu.html'"></div>
        <div class = "sesioaItxi"><input type="button" value = "Sesioa itxi" onclick = "location.href = '../index.html'"></div>
    </div>
        </body>
            
</html>