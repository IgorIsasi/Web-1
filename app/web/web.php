<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="webItxura.css">
        <title> Liburuen katalogoa </title>
    </head>

    <body>
    <?php $email=$_SESSION['email']?>
    <ul>
        <li><a class="active" href="#home">Nire liburuak</a></li>
        <li><a href="#home">Liburu katalogoa</a></li>
        <li style="float:right"><a class="active" href="#about"><?php echo $email?></a></li>
    </ul>
    
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
                            <form method="post" action="liburuaErreserbatu.php">
                                <input class="botoia" type="submit" value="Erreserbatu">
                                <input type='hidden' name='izena' value='<?php echo $row['izena']; ?>'>
                                <input type='hidden' name='egilea' value='<?php echo $row['egilea']; ?>'>
                            </form>
                            <?php if ($_SESSION['email'] == 'admin@gmail.com'){ ?>
                                <form method="post" action="liburuaEzabatu.php">
                                <input class="botoia" type="submit" value="Ezabatu">
                                <input type='hidden' name='izena' value='<?php echo $row['izena']; ?>'>
                                <input type='hidden' name='egilea' value='<?php echo $row['egilea']; ?>'>
                            </form>
                            <?php } ?>                        
                        </div>                            
                    </div>
                </div> 
        <?php
            }
        ?>
    </div>

    <div>
        <div class = "liburuaSartu" ><input type="button" value = "Liburua sartu" onclick = "location.href = 'liburuaSartu.html'"></div>
        <div class = "erreserbakKudeatu"><input type="button" value = "Erreserbak kudeatu" onclick = "location.href = 'erreserbakKudeatu.php'"></div>
        <div class = "sesioaItxi"><input type="button" value = "Sesioa itxi" onclick = "location.href = 'sesioaItxi.php'"></div>
    </div>
    </body>     
</html>