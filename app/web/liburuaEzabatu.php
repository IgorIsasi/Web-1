<!DOCTYPE html>
<html>
    <body>
    <?php
    session_start();
    include '../config.php';
    $email = $_SESSION['email'];
    $izena = $_POST['izena'];
    $egilea = $_POST['egilea'];
            $zutabekop = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM liburua WHERE izena = '$izena' AND egilea = '$egilea'"));
            if ($zutabekop <= 0){ ?>
                <script>
                    alert('Liburua ez dago katalogoan');
                    window.location = 'web.php';
                </script>
                <?php
            }
            else{
                mysqli_query($conn, "DELETE FROM liburua WHERE izena = '$izena' AND egilea = '$egilea'");
            }?>
                <script>
                    alert('Liburua behar bezala ezabatu da');
                    window.location = 'web.php';
                </script>
                <?php
            } ?>
    </body>
</html>