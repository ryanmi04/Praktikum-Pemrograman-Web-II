<?php
$data = [
    ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
    ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
    ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
    ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],
];

for ($i = 0; $i < count($data); $i++) {
    $data[$i]["nilaiAkhir"] = $data[$i]["uts"] * 0.4 + $data[$i]["uas"] * 0.6;
    if ($data[$i]["nilaiAkhir"] >= 80) {
        $data[$i]["huruf"] = "A";
    } elseif ($data[$i]["nilaiAkhir"] >= 70) {
        $data[$i]["huruf"] = "B";
    } elseif ($data[$i]["nilaiAkhir"] >= 60) {
        $data[$i]["huruf"] = "C";
    } elseif ($data[$i]["nilaiAkhir"] >= 50) {
        $data[$i]["huruf"] = "D";
    } elseif ($data[$i]["nilaiAkhir"] < 50) {
        $data[$i]["huruf"] = "E";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK404</title>
    <style>
        table,
        tr,
        td,
        th {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
            text-align: left;
        }

        table {
            width: 550px;
        }

        th {
            background-color: lightgray;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Nim</th>
            <th>Nilai UAS</th>
            <th>Nilai UTS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>

        <?php

        for ($i = 0; $i < count($data); $i++) {
            echo "<tr>";
            echo "<td>" . $data[$i]["nama"] . "</td>";
            echo "<td>" . $data[$i]["nim"] . "</td>";
            echo "<td>" . $data[$i]["uts"] . "</td>";
            echo "<td>" . $data[$i]["uas"] . "</td>";
            echo "<td>" . $data[$i]["nilaiAkhir"] . "</td>";
            echo "<td>" . $data[$i]["huruf"] . "</td>";
            echo "</tr>";
        }

        ?>

    </table>

</body>

</html>


