<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIWIKODE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/Style/index.css">

    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#">SIWIKODE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="<?= site_url('/blog/dashboard') ?>">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="<?= site_url('/blog/wisata/rekreasi') ?>">Wisata Rekreasi</a>
                <a class="nav-item nav-link" href="<?= site_url('/blog/wisata/kuliner') ?>">Wisata Kuliner</a>
                <?php
                if ($user != NULL) {
                ?>
                    <a class="nav-item tombol btn btn-danger" href="<?= site_url('/auth/logout') ?>"><i class="fas fa-power-off"></i></a>
                <?php

                } else {
                ?>
                    <a class="nav-item nav-link" href="<?= site_url('/auth/register') ?>">Registrasi</a>
                    <a class="nav-item tombol btn btn-primary" href="<?= site_url('/auth') ?>">Login </a>
                <?php
                }
                ?>
            </div>
        </div>
    </nav>