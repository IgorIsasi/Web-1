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
        <?php if (isset($_SESSION['email'])){ ?> 
            <li style="float:right"><a class="active" href="#about"><?php echo $email?></a></li>
        <?php }
        else{ ?>
            <li style="float:right"><a class="active" href="#about" onclick="location.href='../saioaHasi/login.html'">Saioa hasi</a></li>
       <?php } ?>
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
                        <?php if (isset($_SESSION['email'])){ ?>  
                            <div class="botoiak">
                                <?php if ($row['kopurua'] > 0){ ?>
                                    <form method="post" action="liburuaErreserbatu.php">
                                        <input class="botoiaErreserbatu" type="submit" value="Erreserbatu">
                                        <input type='hidden' name='izena' value='<?php echo $row['izena']; ?>'>
                                        <input type='hidden' name='egilea' value='<?php echo $row['egilea']; ?>'>
                                        <input type='hidden' name='kopurua' value='<?php echo $row['kopurua']; ?>'>
                                    </form>
                                <?php } ?>
                                <?php if ($_SESSION['email'] == 'admin@gmail.com'){ ?>
                                    <form method="post" action="liburuaEzabatu.php">
                                        <input class="botoiaEzabatu" type="submit" value="Ezabatu">
                                        <input type='hidden' name='izena' value='<?php echo $row['izena']; ?>'>
                                        <input type='hidden' name='egilea' value='<?php echo $row['egilea']; ?>'>
                                    </form>
                                    <form method="post" action="stockEguneratu.php">
                                        <input class="botoiaStock" type="submit" value="Stock eguneratu">
                                        <input class="stockForm" type="number" name='stock' min="0">
                                        <input type='hidden' name='izena' value='<?php echo $row['izena']; ?>'>
                                        <input type='hidden' name='egilea' value='<?php echo $row['egilea']; ?>'>
                                    </form>
                                <?php } ?>                        
                            </div>  
                        <?php } ?>                          
                    </div>
                </div> 
        <?php
            }
        ?>
    </div>
    <div>
        <?php if (isset($_SESSION['email'])){ ?>
            <?php if ($_SESSION['email'] == 'admin@gmail.com'){ ?>
                <input class="botoiaSartu" type="button" value = "Liburua sartu" onclick = "location.href = 'liburuaSartu.html'"></div>
            <?php } ?>
            <input class="botoiaErreserbak" type="button" value = "Erreserbak kudeatu" onclick = "location.href = 'erreserbakKudeatu.php'"></div>
            <input class="botoiaSaioa" type="button" value = "Saioa itxi" onclick = "location.href = 'sesioaItxi.php'"></div>
        <?php } ?>
    </div>
    </body>     
</html>