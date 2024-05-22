<?php
require 'Koneksi.php';
require 'Model.php';


$form = $_GET['form'];
if ($form != 'tambah')
    $id = $_GET['id_buku'];

if ($form == 'tambah') {
    if (isset($_POST['id_buku']) && isset($_POST['judul_buku'])  && isset($_POST['penulis']) && isset($_POST['penerbit']) && isset($_POST['tahun_terbit'])) {
        $id_buku = $_POST['id_buku'];
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];
        AddBuku($conn, $id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit);
    }
} else if ($form == 'update') {
    $dataBuku = GetAllDataBukuById($conn, $id);
    if (isset($_POST['id_buku']) && isset($_POST['judul_buku'])  && isset($_POST['penulis']) && isset($_POST['penerbit']) && isset($_POST['tahun_terbit'])) {
        $id_buku = $_POST['id_buku'];
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];
        UpdateBuku($conn, $id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit, $id);
    }
} else if ($form == 'delete') {
    DeleteBuku($conn, $id);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Form Member</title>

    <style>
        body {
            background-color: #dddd;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            height: 100vh;
        }

        .container {
            width: 500px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        h1 {
            color: #35374B;
            text-align: center;
            font-weight: 800;
            margin-bottom: 10px;
            padding: 10px;
        }

        .form-group {
            margin-top: 10px;
        }

        .button-action {
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin-top: 20px;

        }
    </style>
</head>

<body>
    <?php if ($form == 'tambah') : ?>
        <form method="post">
            <div class="container">
                <h1>Tambah Data Buku</h1>
                <div class="form-row">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="number" name="id_buku" id="id_buku" class="form-control" placeholder="Masukan Id Buku">
                    </div>
                    <div class="form-group">
                        <label>Judul Buku</label>
                        <input type="text" name="judul_buku" id="judul_buku" class="form-control" placeholder="Masukan Judul Buku">
                    </div>
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" name="penulis" id="penulis" class="form-control" placeholder="Masukan Penulis">
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" name="penerbit" id="penerbit" class="form-control" placeholder="Masukan Penerbit">
                    </div>
                    <div class="form-group">
                        <label>Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" id="tahun_terbit" class="form-control" placeholder="YYYY">
                    </div>
                </div>
                <div class="button-action">
                    <a href="Buku.php"><button type="button" class="btn btn-warning">Kembali</button></a>
                    <button type="submit" onclick="return confirm('Tambah Data?')" name='tambah' type="submit" class="btn btn-primary ">Tambah</button>
                </div>
            </div>
        </form>


    <?php elseif ($form == 'update') : ?>
        <form method="post">
            <div class="container">
                <h1>Edit Data Buku</h1>
                <div class="form-row">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" value="<?php echo $dataBuku->id_buku; ?>" name="id_buku" id="id_buku" class="form-control" placeholder="Masukan Id Buku">
                    </div>
                    <div class="form-group">
                        <label>Judul Buku</label>
                        <input type="text" value="<?php echo $dataBuku->judul_buku; ?>" name="judul_buku" id="judul_buku" class="form-control" placeholder="Masukan Judul Buku">
                    </div>
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" value="<?php echo $dataBuku->penulis; ?>" name="penulis" id="penulis" class="form-control" placeholder="Masukan Penulis">
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" value="<?php echo $dataBuku->penerbit; ?>" name="penerbit" id="penerbit" class="form-control" placeholder="Masukan Penerbit">
                    </div>
                    <div class="form-group">
                        <label>Tahun Terbit</label>
                        <input type="Text" value="<?php echo $dataBuku->tahun_terbit; ?>" name="tahun_terbit" id="tahun_terbit" class="form-control" placeholder="YYYY">
                    </div>
                </div>
                <div class="button-action">
                    <a href="Buku.php"><button type="button" class="btn btn-warning">Kembali</button></a>
                    <button type="submit" onclick="return confirm('Update Data?')" name='update' type="submit" class="btn btn-primary ">Update</button>
                </div>
            </div>
        </form>

    <?php endif; ?>

</body>

</html>