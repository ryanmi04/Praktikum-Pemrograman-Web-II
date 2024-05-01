<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK303</title>
</head>

<body>
    <form action="" method="post">
        Batas Bawah : <input type="number" name="b_bawah" value="<?= isset($_POST['b_bawah']) ? $_POST['b_bawah'] : '' ?>"> <br>
        Batas Atas : <input type="number" name="b_atas" value="<?= isset($_POST['b_atas']) ? $_POST['b_atas'] : '' ?>"> <br>
        <button type="submit" name="cetak">Cetak</button><br> <br>
    </form>

    <?php
    if (isset($_POST["cetak"])) {
        $b_bawah = ($_POST["b_bawah"]);
        $b_atas = ($_POST["b_atas"]);

        do {
            if (($b_bawah + 7) % 5 == 0) {
                echo '<img src="bintang.png" alt="Image" width="15" height="15"> ';
            } else {
                echo "$b_bawah ";
            }
            $b_bawah++;
        } while ($b_bawah <= $b_atas);
    }

    ?>

</body>

</html>