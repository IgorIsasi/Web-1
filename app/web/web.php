<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="webItxura.css">
        <title> Liburuen katalogoa </title>
        <script type="text/javascript" src="liburuaErreserbatu.js"></script>
    </head>
    <body>
        <h1 class="izenburua"> Liburuen katalogoa </h1>
    <div class = "liburutegia">
    <?php
        include '../config.php';

        $query = mysqli_query($conn, "SELECT * FROM liburua")
        or die (mysqli_error($conn));
        
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <div class="liburuTxartela">
                    <div class="liburuIrudia">
                        <img src="<?php echo $row['irudia']?>"> 
                    </div>
                    <div class="liburuDatuak">
                        <div class="izenaEgilea">
                            <p class="liburuIzena"><b><?php echo $row['izena']; ?></b><p>
                            <p><?php echo ($row['egilea']); ?></p>
                        </div>
                        <div class="prezioaStock">
                             <div class="stock">
                                Stock: <?php echo($row['kopurua']);?> 
                            </div>
                            <div class="prezioa">
                                <p><?php echo ($row['prezioa']); ?>€<p>
                            </div>
                        </div>  
                        <div class="botoiak">
                            <input class="botoia" type="button" value="Erreserbatu" onclick="erreserbatu('<?php echo ($row['izena']); ?>', '<?php echo ($row['egilea']); ?>')">
                        </div>                            
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
        <div class = "erreserbakIkusi"><input type="button" value = "Erreserbak ikusi" onclick = "location.href = 'erreserbakIkusi.php'"></div>
        <div class = "sesioaItxi"><input type="button" value = "Sesioa itxi" onclick = "location.href = '../index.html'"></div>
    </div>
        </body>
            
</html>