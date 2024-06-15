<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="card-container">
    <?php foreach ($bookses as $books) : ?>
        <div class="cardBook card mb-3 text-white">
            <div class="card-header">
                <h5>Buku <?= $books['id'] ?> </h5>
            </div>
            <div class="card-body">
                <p class="card-text">Judul: <?= $books['judul'] ?> </p>
                <p class="card-text">Penulis: <?= $books['penulis'] ?> </p>
                <p class="card-text">Penerbit: <?= $books['penerbit'] ?> </p>
                <p class="card-text">Tahun Terbit: <?= $books['tahun_terbit'] ?> </p>
            </div>
        </div>
    <?php endforeach ?>
</div>

<?= $this->endSection() ?>