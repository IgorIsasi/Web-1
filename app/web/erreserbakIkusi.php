<?php
    include '../config.php';
    session_start();
    $email = $_SESSION['email'];
    $query = mysqli_query($conn, "SELECT liburuIzena, liburuEgilea FROM erreserba WHERE erabEmail = '$email'")
    or die (mysqli_error($conn));
    
        while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class = "textua">
                    <p class = "izena"><?php echo $row['liburuIzena']; ?></p>
                    <p class = "egilea"><?php echo ($row['liburuEgilea']); ?></p>
                </div>
            </div>
    <?php
        }
?>