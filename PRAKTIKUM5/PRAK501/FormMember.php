<?php
require 'Koneksi.php';
require 'Model.php';


$form = $_GET['form'];
if ($form != 'tambah')
    $id = $_GET['id_member'];

if ($form == 'tambah') {
    if (isset($_POST['id_member']) && isset($_POST['nama_member'])  && isset($_POST['nomor_member']) && isset($_POST['alamat']) && isset($_POST['tgl_mendaftar']) && isset($_POST['tgl_terakhir_bayar'])) {
        $id_member = $_POST['id_member'];
        $nama_member = $_POST['nama_member'];
        $nomor_member = $_POST['nomor_member'];
        $alamat = $_POST['alamat'];
        $tgl_mendaftar = $_POST['tgl_mendaftar'];
        $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
        AddMember($conn, $id_member, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
    }
} else if ($form == 'update') {
    $dataMember = GetAllDataMemberByID($conn, $id);
    if (isset($_POST['id_member']) && isset($_POST['nama_member'])  && isset($_POST['nomor_member']) && isset($_POST['alamat']) && isset($_POST['tgl_mendaftar']) && isset($_POST['tgl_terakhir_bayar'])) {
        $id_member = $_POST['id_member'];
        $nama_member = $_POST['nama_member'];
        $nomor_member = $_POST['nomor_member'];
        $alamat = $_POST['alamat'];
        $tgl_mendaftar = $_POST['tgl_mendaftar'];
        $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
        UpdateMember($conn, $id_member, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar, $id);
    }
} else if ($form == 'delete') {
    DeleteMember($conn, $id);
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
                <h1>Tambah Data Member</h1>
                <div class="form-row">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="number" name="id_member" id="id_member" class="form-control" id="inputEmail4" placeholder="Masukan Id Member">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="nama_member" id="nama_member" type="text" class="form-control" id="inputPassword4" placeholder="Masukan Nama Member">
                    </div>
                    <div class="form-group">
                        <label>Nomor</label>
                        <input name="nomor_member" id="nomor_member" type="text" class="form-control" id="inputAddress" placeholder="Masukan Nomor Member">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" id="alamat" type="text" class="form-control" id="inputAddress2" placeholder="Masukan Alamat">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Mendaftar</label>
                        <input name="tgl_mendaftar" id="tgl_mendaftar" type="datetime-local" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Terakhir Bayar</label>
                        <input name="tgl_terakhir_bayar" id="tgl_terakhir_bayar" type="date" class="form-control" id="inputCity">
                    </div>
                </div>
            </div>
            <div class="button-action">
                <a href="Member.php"><button type="button" class="btn btn-warning">Kembali</button></a>
                <button type="submit" onclick="return confirm('Tambah Data?')" name='tambah' type="submit" class="btn btn-primary ">Tambah</button>
            </div>
            </div>
        </form>

    <?php elseif ($form == 'update') : ?>
        <form method="post">
            <div class="container">
                <h1>Edit Data Member</h1>
                <div class="form-row">
                    <div class="form-group">
                        <label>ID</label>
                        <input value="<?php echo $dataMember->id_member; ?>" type="number" name="id_member" id="id_member" class="form-control" id="inputEmail4" placeholder="Masukan Id Member">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input value="<?php echo $dataMember->nama_member; ?>" name="nama_member" id="nama_member" type="text" class="form-control" id="inputPassword4" placeholder="Masukan Nama Member">
                    </div>
                    <div class="form-group">
                        <label>Nomor</label>
                        <input value="<?php echo $dataMember->nomor_member; ?>" name="nomor_member" id="nomor_member" type="text" class="form-control" id="inputAddress" placeholder="Masukan Nomor Member">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input value="<?php echo $dataMember->alamat; ?>" name="alamat" id="alamat" type="text" class="form-control" id="inputAddress2" placeholder="Masukan Alamat">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Mendaftar</label>
                        <input value="<?php echo $dataMember->tgl_mendaftar; ?>" name="tgl_mendaftar" id="tgl_mendaftar" type="datetime-local" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Terakhir Bayar</label>
                        <input value="<?php echo $dataMember->tgl_terakhir_bayar; ?>" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar" type="date" class="form-control" id="inputCity">
                    </div>
                </div>
            </div>
            <div class="button-action">
                <a href="Member.php"><button type="button" class="btn btn-warning">Kembali</button></a>
                <button type="submit" onclick="return confirm('Update Data?')" name='update' type="submit" class="btn btn-primary ">Update</button>
            </div>
            </div>
        </form>
    <?php endif; ?>

</body>

</html>