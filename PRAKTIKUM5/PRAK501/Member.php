<?php
require 'Model.php';
require 'Koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Member</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            background-color: #344955;
            color: white;
            border-radius: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 50px;
            padding-right: 50px;
        }

        .nav-button {
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin-top: 20px;

        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Daftar Member</h1>
        <div class="nav-button">
            <a href="Index.php"><button type="button" class="btn btn-warning">Kembali</button></a>
            <a href='FormMember.php?form=tambah'><button class="btn btn-primary">Tambah Data</button></a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomor</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tanggal Mendaftar</th>
                    <th scope="col">Tanggal Terakhir Bayar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (GetAllDataMember($conn) as $row) : ?>
                    <tr>
                        <th scope='row'> <?= $row->id_member; ?> </th>
                        <td> <?= $row->nama_member; ?> </td>
                        <td> <?= $row->nomor_member; ?> </td>
                        <td> <?= $row->alamat; ?> </td>
                        <td> <?= $row->tgl_mendaftar; ?> </td>
                        <td> <?= $row->tgl_terakhir_bayar; ?> </td>
                        <td>
                            <a href='FormMember.php?id_member=<?= $row->id_member ?>&form=update'><button class='btn btn-success'>Edit</button></a>
                            <a onclick="return confirm('Apakah anda yakin untuk menghapus data?')" href='FormMember.php?id_member=<?= $row->id_member ?>&form=delete'><button class='btn btn-danger'>Delete</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>