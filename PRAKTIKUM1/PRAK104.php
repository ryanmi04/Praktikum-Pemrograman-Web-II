<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK104</title>
    <style>
        table, th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
    $samsung = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samung Galaxy A03", "Samung Galaxy Xcover5"];
    ?>

    <table>
        <tr>
            <td>
                <b>Daftar Smartphone Samsung</b>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo($samsung[0]) ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo($samsung[1]) ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo($samsung[2]) ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo($samsung[3]) ?>
            </td>
        </tr>
    </table>
    
</body>
</html>