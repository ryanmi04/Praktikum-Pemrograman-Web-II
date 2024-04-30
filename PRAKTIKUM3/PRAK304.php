<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK304</title>
</head>

<body>
    <?php
    $bintang = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bintang = $_POST["bintang"];
    }

    if (isset($_POST['tambah'])) {
        $bintang += 1;
    }

    if (isset($_POST['kurang'])) {
        $bintang -= 1;
    }

    if (empty($bintang)) : 
    ?>
        <form action="" method="post">
            Jumlah bintang <input type="number" name="bintang" min="1"> <br>
            <button type="submit" name="submit">Submit</button>
        </form>
    <?php
    endif;
    if (!empty($bintang)) :
    ?>
        <?php
        echo "Jumlah bintang $bintang <br><br><br>";
        for ($i = 0; $i < $bintang; $i++) {
            echo '<img src="bintang.png" width="50px" height="50px">';
        }
        ?>
        <form action="" method="post">
            <input type="number" name="bintang" min="1" value="<?= $bintang ?>" hidden> <br>
            <button type="submit" name="tambah">Tambah</button>
            <button type="submit" name="kurang">Kurang</button>
        </form>
    <?php endif; ?>

</body>

</html>