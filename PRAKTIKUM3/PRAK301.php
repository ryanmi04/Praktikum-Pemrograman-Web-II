<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301</title>
</head>
<body>
<form action="" method="post">
        Jumlah Peserta :  <input type="text" name="peserta" value="<?= isset($_POST['peserta']) ? $_POST['peserta'] : '' ?>"> <br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <?php
    if (isset($_POST["cetak"])) {
        $jumlah_peserta = ($_POST["peserta"]);
        $i = 1;
            while($i <= $jumlah_peserta){
                if($i % 2 != 0){
                    echo "<h2><font color='red'>Peserta Ke-$i</font></h2>";
                }
                else{
                    echo "<h2><font color='green'>Peserta Ke-$i</font></h2>";
                }
                $i++;
            }
        }
    ?>
    
</body>
</html>