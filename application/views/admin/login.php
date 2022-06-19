<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>public/Style/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/bootstrap/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

</head>

<body class="login">
    <div class="container-fluid">

        <div class="mt-4">
            <h2 class="title text-center">Sistem Informasi Wisata Kota Depok - SIWIKODE</h2>
        </div>


        <nav class="navbar py-4 navbar-expand-lg navbar-light pn">

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="<?= site_url('/blog/dashboard') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="wisataRekreasi.html">Wisata Rekreasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="wisataKuliner.html">Wisata Kuliner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="<?= site_url('/auth/register') ?>">Registrasi</a>
                    </li>
                </ul>
            </div>

        </nav>
        <h2 class="login text-center">Log in</h2>
        <?= $this->session->flashdata('message');
        ?>
        <div class="d-flex justify-content-center">
            <div class="login-form">
                <form action="<?= site_url('/auth') ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= set_value('email') ?>">
                        <small class="text-danger"><?= form_error('username') ?></small>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <small class="text-danger"><?= form_error('password') ?></small>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="signIn" class="btn btn-primary ">Log in</button>
                    </div>
                    <div class="clearfix">
                        <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                        <a href="#" class="float-right">Forgot Password?</a>
                    </div>
                </form>

            </div>
        </div>

        <!-- Footer -->
        <footer class="text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3">
                © 2020 Copyright:
                <a class="text-dark" href="#">Develop Mahasiswa STT NF</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>


</body>
<script src="<?php echo base_url() ?>public/bootstrap/jquery/jquery-3.5.1.min.js"></script>
<script src="<?php echo base_url() ?>public/bootstrap/js/bootstrap.js"></script>

</html>