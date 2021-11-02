<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="webItxura.css">
        <title> Liburuen katalogoa </title>
    </head>

    <body>
    <script>
        //Scroll posizioa gogoratzeko
        window.onload=function(){
        var pos=window.name || 0;
        window.scrollTo(0,pos);
        }
        window.onunload=function(){
        window.name=self.pageYOffset || (document.documentElement.scrollTop+document.body.scrollTop);
        }
    </script>
    
    <?php $email=$_SESSION['email']?>
    <ul>
        <li><a class="active" href="erreserbakKudeatu.php">Nire liburuak</a></li>
        <li><a>Liburu katalogoa</a></li>
        <?php if (isset($_SESSION['email'])){ ?> 
            <li style="float:right"><a href="../datuakAldatu/datuakAldatu.php" class="active"><?php echo $email?></a></li>
        <?php }
        else{ ?>
            <li style="float:right"><a class="active" href="../saioaHasi/login.html" ">Saioa hasi</a></li>
       <?php } ?>
    </ul>
    
    <div class = "liburutegia">
    
    <?php
        include '../config.php';
        $_SESSION['url']=$_SERVER['PHP_SELF'];
        $query = mysqli_query($conn, "SELECT * FROM liburua");
        
        
        
            while ($row = mysqli_fetch_array($query)) {
                $izena=$row['izena'];
                $orriKop=$row['orriKop'];
                $egilea=$row['egilea'];
                $kopurua=$row['kopurua'];
                $prezioa=$row['prezioa'];
                $irudia=$row['irudia'];
                ?>
                <div class="liburuTxartela">
                    <div class="liburuIrudia">
                        <img src="<?php echo $irudia?>"> 
                    </div>
                    <div class="liburuDatuak">
                        <div class="izenaEgilea">
                            <p class="liburuIzena"><b><?php echo $izena; ?></b><p>
                            <p><?php echo ($egilea); ?></p>
                        </div>
                        <div class="prezioaStock">
                             <div class="stock">
                                Stock: <?php echo($kopurua);?> 
                            </div>
                            <div class="prezioa">
                                <p><?php echo ($prezioa); ?>€<p>
                            </div>
                        </div>
                        <?php if (isset($email)){ ?>  
                            <?php
                            $query2=mysqli_query($conn, "SELECT * FROM erreserba WHERE liburuIzena='$izena' && liburuEgilea='$egilea' && erabEmail='$email'") or die (mysqli_error($conn));
                            $erreserbatuDu=mysqli_num_rows($query2);
                            ?>
                            <div class="botoiak">
                                <?php if ($erreserbatuDu == 0){ ?>
                                    <form method="post" action="liburuaErreserbatu.php">
                                        <input class="botoiaErreserbatu" type="submit" value="Erreserbatu">
                                        <input type='hidden' name='izena' value='<?php echo $izena; ?>'>
                                        <input type='hidden' name='egilea' value='<?php echo $egilea; ?>'>
                                        <input type='hidden' name='kopurua' value='<?php echo $egilea; ?>'>
                                    </form>
                                <?php }
                                else{ ?>
                                    <form method="post" action="erreserbaEzabatu.php">
                                        <input class="botoiaBueltatu" type="submit" value="Bueltatu">
                                        <input type='hidden' name='izena' value='<?php echo $izena; ?>'>
                                        <input type='hidden' name='egilea' value='<?php echo $egilea; ?>'>
                                        <input type='hidden' name='kopurua' value='<?php echo $egilea; ?>'>
                                    </form>
                                <?php } ?>
                                <?php if ($_SESSION['email'] == 'admin@gmail.com'){ ?>
                                    <form method="post" action="liburuaEzabatu.php">
                                        <input class="botoiaEzabatu" type="submit" value="Ezabatu">
                                        <input type='hidden' name='izena' value='<?php echo $izena; ?>'>
                                        <input type='hidden' name='egilea' value='<?php echo $egilea; ?>'>
                                    </form>
                                    <form method="post" action="stockEguneratu.php">
                                        <input class="botoiaStock" type="submit" value="Stock eguneratu">
                                        <input class="stockForm" type="number" name='stock' min="0">
                                        <input type='hidden' name='izena' value='<?php echo $izena; ?>'>
                                        <input type='hidden' name='egilea' value='<?php echo $egilea; ?>'>
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
            <input class="botoiaSaioa" type="button" value = "Saioa itxi" onclick = "location.href = 'sesioaItxi.php'"></div>
        <?php } ?>
    </div>
    </body>     
</html>