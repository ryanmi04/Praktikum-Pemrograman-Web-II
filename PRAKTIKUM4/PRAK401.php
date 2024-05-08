<?php
$length = "";
$width = "";
$value = "";

if (isset($_POST["cetak"])) {
    $length = $_POST["length"];
    $width = $_POST["width"];
    $value = $_POST["value"];
}
?>

<html>
<head>
    <title>PRAK401</title>

    <style>
        table,
        tr,
        td {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>

<body>

    <form action="" method="post">
        Panjang : <input type="text" name="length" value="<?= $length; ?>"><br>
        Lebar : <input type="text" name="width" value="<?= $width; ?>"><br>
        Nilai : <input type="text" name="value" value="<?= $value; ?>"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <?php

    if (isset($_POST["cetak"])) {
        $fillValue = explode(" ", $value);
        $total_Value = count($fillValue);
        if ($length * $width == $total_Value) {
            $count = 0;
            for ($i = 0; $i < $length; $i++) {
                for ($j = 0; $j < $width; $j++) {
                    $valueOutput[$i][$j] = $fillValue[$count];
                    $count++;
                }
            }
            echo "<table>";
            for ($i = 0; $i < $length; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $width; $j++) {
                    echo "<td>" . $valueOutput[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    }
    ?>
</body>


