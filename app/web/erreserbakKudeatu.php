<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="erreserbak.css">
        <title> Erreserbak kudeatu </title>
    </head>
    <body>
        <table>
            <th> Liburuaren izena </th>
            <th> Liburuaren egilea </th>
            <th> Prezioa </th>
            <th></th>
        <?php
            include '../config.php';
            $email = $_SESSION['email'];
            $query = mysqli_query($conn, "SELECT liburuIzena, liburuEgilea, prezioa FROM erreserba,liburua 
            WHERE liburuIzena=izena AND liburuEgilea=egilea AND erabEmail = '$email'")
                or die (mysqli_error($conn));
    
            while ($row = mysqli_fetch_array($query)) {
        ?>
                <tr>
                    <div class = "erreserba">
                        <td><?php echo $row['liburuIzena']; ?></td>
                        <td><?php echo $row['liburuEgilea']; ?></td>
                        <td><?php echo $row['prezioa']; ?>€</td>
                        <td>
                        <form method="post" action="erreserbaEzabatu.php">
                            <input class="ezabatuBotoia" type="submit" value="Ezabatu">
                            <input type='hidden' name='izena' value='<?php echo $row['liburuIzena']; ?>'>
                            <input type='hidden' name='egilea' value='<?php echo $row['liburuEgilea']; ?>'>
                        </form>  
                        </td>    
                    </div>
                </tr>
        <?php
        }
        ?>
        </table>
        <input class="bueltatuBotoia" type="button" value = "Katalogora bueltatu" onclick = "location.href = 'web.php'">
    </body>
</html>

