<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand font-weight-bold text-light" href="#">
            <img src="<?= base_url('images/Logo Admin.svg') ?>" alt="Book Catalog Logo" width="30" height="24" class="d-inline-block align-text-top">
            Admin Book
        </a>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/') ?>">Kembali Book Catalog</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= base_url('admin/BooksController/new') ?>" class="btn btn-primary mr-3">New Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('logout'); ?>">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>