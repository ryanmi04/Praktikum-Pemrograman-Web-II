<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="kata">
        <button type="submit" name="submit">submit</button>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $kata = $_POST["kata"];
        echo "<h2>Input:</h2>";
        echo "$kata <br>";
        echo "<h2>Output:</h2>";

        for ($i = 0; $i < strlen($kata); $i++) {
            $huruf_kapital = strtoupper($kata);
            echo $huruf_kapital[$i];
            for ($j = 1; $j < strlen($kata); $j++) {
                $huruf_kecil = strtolower($kata);
                echo $huruf_kecil[$i];
            }
        }
    }
    ?>

</body>

</html>