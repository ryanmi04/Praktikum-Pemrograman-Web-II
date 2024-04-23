<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK203</title>
</head>

<body>
    <form action="" method="post">
        Nilai:
        <input type="text" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"> <br>
        Dari: <br>
        <input type="radio" name="dari" value="celcius" <?php if (isset($_POST['dari']) && $_POST['dari'] == 'celcius') echo 'checked'; ?>>Celcius<br>
        <input type="radio" name="dari" value="fahrenheit" <?php if (isset($_POST['dari']) && $_POST['dari'] == 'fahrenheit') echo 'checked'; ?>>Fahrenheit<br>
        <input type="radio" name="dari" value="rheamur" <?php if (isset($_POST['dari']) && $_POST['dari'] == 'rheamur') echo 'checked'; ?>>Rheamur<br>
        <input type="radio" name="dari" value="kelvin" <?php if (isset($_POST['dari']) && $_POST['dari'] == 'kelvin') echo 'checked'; ?>>Kelvin<br>
        Ke: <br>
        <input type="radio" name="ke" value="celcius" <?php if (isset($_POST['ke']) && $_POST['ke'] == 'celcius') echo 'checked'; ?>>Celcius<br>
        <input type="radio" name="ke" value="fahrenheit" <?php if (isset($_POST['ke']) && $_POST['ke'] == 'fahrenheit') echo 'checked'; ?>>Fahrenheit<br>
        <input type="radio" name="ke" value="rheamur" <?php if (isset($_POST['ke']) && $_POST['ke'] == 'rheamur') echo 'checked'; ?>>Rheamur<br>
        <input type="radio" name="ke" value="kelvin" <?php if (isset($_POST['ke']) && $_POST['ke'] == 'kelvin') echo 'checked'; ?>>Kelvin<br>
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php

    if (isset($_POST["konversi"])) {
        if (!empty($_POST["nilai"]) && !empty($_POST["dari"]) && !empty($_POST["ke"])) {
            $nilai = $_POST["nilai"];

            $celciusKefahrenheit = 9 / 5 * $nilai + 32;
            $celciusKerheamur = 4 / 5 * $nilai;
            $celciusKekelvin = $nilai + 273;

            $fahrenheitKecelcius = 5 / 9 * ($nilai - 32);
            $fahrenheitKerheamur = 4 / 9 * ($nilai - 32);
            $fahrenheitKekelvin = 5 / 9 * ($nilai - 32) + 273;

            $rheamurKecelcius = 5 / 4 * $nilai;
            $rheamurKefahrenheit = (9 / 4 * $nilai) + 32;
            $rheamurKekelvin = 5 / 4 * $nilai + 273;

            $kelvinKecelcius = $nilai - 273;
            $kelvinKefahrenheit = 9 / 5 * ($nilai - 273) + 32;
            $kelvinKerheamur = 4 / 5 * ($nilai - 273);


            echo "<h2> Hasil Konversi: ";

            if (($_POST["dari"]) == "celcius" && ($_POST["ke"]) == "celcius") {
                echo $_POST["nilai"], "&degC";
            } else if (($_POST["dari"]) == "celcius" && $_POST["ke"] == "fahrenheit") {
                echo number_format($celciusKefahrenheit, 1), "&degF";
            } else if ($_POST["dari"] == "celcius" && $_POST["ke"] == "rheamur") {
                echo number_format($celciusKerheamur, 1), "&degR";
            } else if ($_POST["dari"] == "celcius" && $_POST["ke"] == "kelvin") {
                echo number_format($celciusKekelvin, 1), "&degK";
            } else if ($_POST["dari"] == "fahrenheit" && $_POST["ke"] == "fahrenheit") {
                echo $_POST["nilai"], "&degF";
            } else if ($_POST["dari"] == "fahrenheit" && $_POST["ke"] == "celcius") {
                echo number_format($rheamurKecelcius, 1), "&degC";
            } else if ($_POST["dari"] == "fahrenheit" && $_POST["ke"] == "fahrenheit") {
                echo number_format($rheamurKefahrenheit, 1), "&degR";
            } else if ($_POST["dari"] == "fahrenheit" && $_POST["ke"] == "kelvin") {
                echo number_format($rheamurKekelvin, 1), "&degK";
            } else if ($_POST["dari"] == "rheamur" && $_POST["ke"] == "rheamur") {
                echo $_POST["nilai"], "&degR";
            } else if ($_POST["dari"] == "rheamur" && $_POST["ke"] == "celcius") {
                echo number_format($rheamurKecelcius, 1), "&degC";
            } else if ($_POST["dari"] == "rheamur" && $_POST["ke"] == "fahrenheit") {
                echo number_format($rheamurKefahrenheit, 1), "&degF";
            } else if ($_POST["dari"] == "rheamur" && $_POST["ke"] == "kelvin") {
                echo number_format($rheamurKekelvin, 1), "&degK";
            } else if ($_POST["dari"] == "kelvin" && $_POST["ke"] == "kelvin") {
                echo $_POST["nilai"], "&degK";
            } else if ($_POST["dari"] == "kelvin" && $_POST["ke"] == "celcius") {
                echo number_format($kelvinKecelcius, 1), "&degC";
            } else if ($_POST["dari"] == "kelvin" && $_POST["ke"] == "fahrenheit") {
                echo number_format($kelvinKefahrenheit, 1), "&degF";
            } else if ($_POST["dari"] == "kelvin" && $_POST["ke"] == "rheamur") {
                echo number_format($kelvinKerheamur, 1), "&degR";
            }
            echo "</h2";
        }

        else{
            echo"Silahkan masukan input";
        }
    }
    ?>

</body>

</html>