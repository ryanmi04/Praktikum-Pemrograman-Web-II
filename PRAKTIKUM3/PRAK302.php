<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
</head>

<body>
    <form action="" method="post">
        Tinggi : <input type="text" name="tinggi" value="<?= isset($_POST['tinggi']) ? $_POST['tinggi'] : '' ?>"> <br>
        Alamat Gambar : <input type="text" name="urlgambar" value="<?= isset($_POST['urlgambar']) ? $_POST['urlgambar'] : '' ?>"> <br>
        <button type="submit" name="cetak">Cetak</button><br> <br>
    </form>

    <?php
    if (isset($_POST["cetak"])) {
        $tinggi = ($_POST["tinggi"]);
        $urlgambar = ($_POST["urlgambar"]);
        $i = 1;
        while ($i <= $tinggi) {
            $j = 1;
            while ($j < $i) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                $j++;
            }
            $k = $i;
            while ($k <= $tinggi) {
                echo '<img src="' . $urlgambar . '" alt="Image" width="20" height="20">';
                $k++;
            }
            echo "<br>";
            $i++;
        }
    }
    ?>

</body>

</html>