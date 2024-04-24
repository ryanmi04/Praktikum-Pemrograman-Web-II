<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK204</title>
</head>

<body>
    <form action="" method="post">
        Nilai :
        <input type="text" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"> <br>
        <button type="submit" name="konversi">Konversi</button>
    </form>
</body>

<?php
if (isset($_POST["konversi"])) {
    echo "<h2>";
    if (!empty($_POST["nilai"] or empty($_POST["nilai"]))) {
        echo "Hasil: ";
    }

    if ($_POST["nilai"] == 0) {
        echo "Nol";
    } else if ($_POST["nilai"] > 0 && $_POST["nilai"] < 10) {
        echo "Satuan";
    } else if ($_POST["nilai"] > 9 && $_POST["nilai"] < 20) {
        echo "Belasan";
    } else if ($_POST["nilai"] > 19 && $_POST["nilai"] < 100) {
        echo "Puluhan";
    } else if ($_POST["nilai"] > 100 && $_POST["nilai"] < 1000) {
        echo "Ratusan";
    } else if ($_POST["nilai"] > 1000) {
        echo "Anda Menginput Melebihi Limit Bilangan";
    }
    echo "</h2>";
}
?>

</html>