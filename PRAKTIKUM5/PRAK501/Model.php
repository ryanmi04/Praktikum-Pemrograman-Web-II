<?php

function GetAllDataPeminjaman($pdo)
{
    $sql = "SELECT * FROM peminjaman";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $peminjaman = $statement->fetchALL(PDO::FETCH_OBJ);
    $pdo = null;
    return $peminjaman;
}

function GetAllDataPeminjamanByID($pdo, $id)
{
    $sql = "SELECT * FROM peminjaman WHERE id_peminjaman = $id";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $peminjaman = $statement->fetch(PDO::FETCH_OBJ);
    $pdo = null;
    return $peminjaman;
}

function AddPeminjaman($pdo, $id_peminjaman, $tgl_pinjam, $tgl_kembali)
{
    $sql = "INSERT INTO peminjaman (id_peminjaman, tgl_pinjam, tgl_kembali) VALUES (?,?,?)";
    $statement = $pdo->prepare($sql);
    $statement->execute([$id_peminjaman, $tgl_pinjam, $tgl_kembali]);
    $pdo = null;
    header('Location: Peminjaman.php');
    exit();
}

function UpdatePeminjaman($pdo, $id_peminjaman, $tgl_pinjam, $tgl_kembali, $id)
{
    $sql = "UPDATE peminjaman SET id_peminjaman=?, tgl_pinjam=?, tgl_kembali=? WHERE id_peminjaman=?";
    $statement = $pdo->prepare($sql);
    $statement->execute([$id_peminjaman, $tgl_pinjam, $tgl_kembali, $id]);
    $pdo = null;
    header('Location: Peminjaman.php');
    exit();
}

function DeletePeminjaman($pdo, $id)
{
    $sql = "DELETE FROM peminjaman WHERE id_peminjaman=?";
    $statement = $pdo->prepare($sql);
    $statement->execute([$id]);
    $pdo = null;
    header('Location: Peminjaman.php');
    exit();
}

function GetAllDataMember($pdo)
{
    $sql = "SELECT * FROM member";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $member = $statement->fetchALL(PDO::FETCH_OBJ);
    $pdo = null;
    return $member;
}

function GetAllDataMemberByID($pdo, $id)
{
    $sql = "SELECT * FROM member WHERE id_member = $id";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $member = $statement->fetch(PDO::FETCH_OBJ);
    $pdo = null;
    return $member;
}

function AddMember($pdo, $id_member, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar)
{
    $sql = "INSERT INTO member (id_member, nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?,?,?,?,?,?)";
    $statement = $pdo->prepare($sql);
    $statement->execute([$id_member, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar]);
    $pdo = null;
    header('Location: Member.php');
    exit();
}

function UpdateMember($pdo, $id_member, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar, $id)
{
    $sql = "UPDATE member SET id_member=?, nama_member=?, nomor_member=?, alamat=?, tgl_mendaftar=?, tgl_terakhir_bayar=? WHERE id_member=?";
    $statement = $pdo->prepare($sql);
    $statement->execute([$id_member, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar, $id]);
    $pdo = null;
    header('Location: Member.php');
    exit();
}

function DeleteMember($pdo, $id)
{
    $sql = "DELETE FROM member WHERE id_member=?";
    $statement = $pdo->prepare($sql);
    $statement->execute([$id]);
    $pdo = null;
    header('Location: Member.php');
    exit();
}



function GetAllDataBuku($pdo)
{
    $sql = "SELECT * FROM buku";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $buku = $statement->fetchALL(PDO::FETCH_OBJ);
    $pdo = null;
    return $buku;
}

function GetAllDataBukuByID($pdo, $id)
{
    $sql = "SELECT * FROM buku WHERE id_buku = $id";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $buku = $statement->fetch(PDO::FETCH_OBJ);
    $pdo = null;
    return $buku;
}

function AddBuku($pdo, $id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit)
{
    $sql = "INSERT INTO buku (id_buku, judul_buku, penulis, penerbit, tahun_terbit) VALUES (?,?,?,?,?)";
    $statement = $pdo->prepare($sql);
    $statement->execute([$id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit]);
    $pdo = null;
    header('Location: Buku.php');
    exit();
}

function UpdateBuku($pdo, $id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit, $id)
{
    $sql = "UPDATE buku SET id_buku=?, judul_buku=?, penulis=?, penerbit=?, tahun_terbit=? WHERE id_buku=?";
    $statement = $pdo->prepare($sql);
    $statement->execute([$id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit, $id]);
    $pdo = null;
    header('Location: Buku.php');
    exit();
}

function DeleteBuku($pdo, $id)
{
    $sql = "DELETE FROM buku WHERE id_buku=?";
    $statement = $pdo->prepare($sql);
    $statement->execute([$id]);
    $pdo = null;
    header('Location: buku.php');
    exit();
}