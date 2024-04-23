<?php
$namaErr = $nimErr = $genErr = "";
$nama = $nim = $gender = "";

if (isset($_POST["submit"])) {
    if (empty($_POST["nama"])) {
        $namaErr = "nama tidak boleh kosong";
    }
    if (empty($_POST["nim"])) {
        $nimErr = "nim tidak boleh kosong";
    }
    if (empty($_POST["gender"])) {
        $genErr = "jenis kelamin tidak boleh kosong";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error {
            color: red;
        }
    </style>
    <title>PRAK202</title>
</head>

<body>
    <form action="" method="post">
        Nama:
        <input type="text" name="nama" value="<?= isset($_POST['nama']) ? $_POST['nama'] : '' ?>"><span class="error">* <?php echo $namaErr; ?></span> <br>
        Nim:
        <input type="text" name="nim" value="<?= isset($_POST['nim']) ? $_POST['nim'] : '' ?>"><span class="error">* <?php echo $nimErr; ?></span> <br>
        Jenis Kelamin: <span class="error">*<?php echo $genErr; ?></span> <br>
        <input type="radio" name="gender" value="Laki-Laki" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Laki-Laki') echo 'checked'; ?>>Laki-Laki<br>
        <input type="radio" name="gender" value="Perempuan" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Perempuan') echo 'checked'; ?>>Perempuan<br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        if (!empty($_POST["nama"]) && !empty($_POST["nim"]) && !empty($_POST["gender"])) {
            echo "<h2>Output: </h2>";
            echo $_POST["nama"], "<br>";
            echo $_POST["nim"], "<br>";
            echo $_POST["gender"], "<br>";
        }
    }


    ?>
</body>

</html>