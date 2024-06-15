<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<?php $validation = \Config\Services::validation(); ?>
<form action="" method="post" id="text-editor">
    <h4 class="text-center" style="font-weight: bold;">Tambah Buku</h4>
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" name="judul" class="form-control <?= isset($_POST['status']) && $validation->hasError('judul') ? 'is-invalid' : '' ?>" value="<?php old('judul') ?>" placeholder="Masukkan Judul Buku" autofocus>
        <div class="invalid-feedback">
            <?= $validation->getError('judul') ?>
        </div>

        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" class="form-control <?= isset($_POST['status']) && $validation->hasError('penulis') ? 'is-invalid' : '' ?>" value="<?= old('penulis') ?>" placeholder="Masukkan Penulis Buku">
        <div class="invalid-feedback">
            <?= $validation->getError('penulis') ?>
        </div>

        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" class="form-control <?= isset($_POST['status']) && $validation->hasError('penerbit') ? 'is-invalid' : '' ?>" value="<?= old('penerbit') ?>" placeholder="Masukkan Penerbit Buku">
        <div class="invalid-feedback">
            <?= $validation->getError('penerbit') ?>
        </div>

        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control <?= isset($_POST['status']) && $validation->hasError('tahun_terbit') ? 'is-invalid' : '' ?> <?php old('tahun_terbit') ?>" placeholder="Masukan Tahun Terbit">
        <div class="invalid-feedback">
            <?= $validation->getError('tahun_terbit') ?>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="<?= base_url('admin/BooksController') ?>"><button type="button" class="btn btn-warning">Kembali</button></a>
        </div>
        <div class="col text-right">
            <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
            <button type="submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
        </div>
    </div>
</form>

<?= $this->endSection() ?>