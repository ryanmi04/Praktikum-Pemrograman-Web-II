<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Catalog</title>
    <style>
        body {
            background: url('images/background.jpg') center/cover no-repeat fixed;
            font-family: Arial, sans-serif;
        }

        .card-container {
            margin: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }

        .card-container .cardBook {
            min-width: 20rem;
            max-width: 20rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
            padding: 20px;
            color: #fff;
        }

        .card-container .cardBook:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .admin-link {
            border-bottom: 1px solid whitesmoke;
        }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand font-weight-bold text-light" href="#">
                <img src="<?= base_url('images/Logo Buku.svg') ?>" alt="Book Catalog Logo" width="30" height="24" class="d-inline-block align-text-top">
                Book Catalog
            </a>
            <li class="admin-link nav-item d-flex">
                <a class="nav-link text-light" href="<?= base_url('admin/BooksController') ?>">Admin</a>
            </li>
        </div>
    </nav>

    <?= $this->renderSection('content') ?>

    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>