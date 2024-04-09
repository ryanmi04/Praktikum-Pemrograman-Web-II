<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK105</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        .judul{
            background-color: red;
        }
    </style>
</head>

<body>
    <?php
    $samsung = ["SAMS22" => "Samsung Galaxy S22", "SAMS22+" => "Samsung Galaxy S22+", "SAM03" => "Samung Galaxy A03", "SAMX5" => "Samung Galaxy Xcover5"];
    ?>

    <table>
        <tr class="judul">
            <td>
                <h2>Daftar Smartphone Samsung</h2>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo ($samsung["SAMS22"]) ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo ($samsung["SAMS22+"]) ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo ($samsung["SAM03"]) ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo ($samsung["SAMX5"]) ?>
            </td>
        </tr>
    </table>

</body>
</html>