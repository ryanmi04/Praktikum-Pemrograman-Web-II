<?php
require 'Koneksi.php';
require 'Model.php';


$form = $_GET['form'];
if ($form != 'tambah')
    $id = $_GET['id_peminjaman'];

if ($form == 'tambah') {
    if (isset($_POST['id_peminjaman']) && isset($_POST['tgl_pinjam'])  && isset($_POST['tgl_kembali'])) {
        $id_peminjaman = $_POST['id_peminjaman'];
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];
        AddPeminjaman($conn, $id_peminjaman, $tgl_pinjam, $tgl_kembali);
    }
} else if ($form == 'update') {
    $dataPeminjaman = GetAllDataPeminjamanById($conn, $id);
    if (isset($_POST['id_peminjaman']) && isset($_POST['tgl_pinjam'])  && isset($_POST['tgl_kembali'])) {
        $id_peminjaman = $_POST['id_peminjaman'];
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];
        UpdatePeminjaman($conn, $id_peminjaman, $tgl_pinjam, $tgl_kembali, $id);
    }
} else if ($form == 'delete') {
    DeletePeminjaman($conn, $id);
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
                <h1>Tambah Data Peminjaman</h1>
                <div class="form-row">
                    <div class="form-group">
                        <label>ID Peminjaman</label>
                        <input type="number" name="id_peminjaman" id="id_peminjaman" class="form-control" placeholder="Masukan Id Peminjaman">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Peminjaman</label>
                        <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pengembalian</label>
                        <input type="date" name="tgl_kembali" id="tgl_kembali" class="form-control">
                    </div>
                </div>
                <div class="button-action">
                    <a href="Peminjaman.php"><button type="button" class="btn btn-warning">Kembali</button></a>
                    <button type="submit" onclick="return confirm('Tambah Data?')" name='tambah' type="submit" class="btn btn-primary ">Tambah</button>
                </div>
        </form>

    <?php elseif ($form == 'update') : ?>
        <form method="post">
            <div class="container">
                <h1>Edit Data Peminjaman</h1>
                <div class="form-row">
                    <div class="form-group">
                        <label>ID Peminjaman</label>
                        <input type="text" value="<?php echo $dataPeminjaman->id_peminjaman; ?>" name="id_peminjaman" id="id_peminjaman" class="form-control" placeholder="Masukan Id Peminjaman">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Peminjaman</label>
                        <input type="date" value="<?php echo $dataPeminjaman->tgl_pinjam; ?>" name="tgl_pinjam" id="tgl_pinjam" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pengembalian</label>
                        <input type="date" value="<?php echo $dataPeminjaman->tgl_kembali; ?>" name="tgl_kembali" id="tgl_kembali" class="form-control">
                    </div>
                </div>
                <div class="button-action">
                    <a href="Peminjaman.php"><button type="button" class="btn btn-warning">Kembali</button></a>
                    <button type="submit" onclick="return confirm('Update Data?')" name="tambah" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>


    <?php endif; ?>

</body>

</html>