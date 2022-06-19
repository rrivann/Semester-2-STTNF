<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- <link rel="stylesheet" href="<?php echo base_url() ?>public/Admin/haloo/plugins/fontawesome-free/css/all.min.css"> -->
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/Admin/haloo/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/Admin/haloo/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <?= $user['username'] ?>
            <i class="far fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">profile</a>
            <div class="dropdown-divider"></div>
            <a href="<?= site_url('/auth/logout') ?>" class="dropdown-item dropdown-footer">logout</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.html" class="brand-link">
        <img src="<?php echo base_url() ?>public/Admin/haloo/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIWIKODE</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?= site_url('/Admin') ?>" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Home
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Daftar Wisata
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= site_url('/wisata/kuliner') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Wisata Kuliner</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= site_url('/wisata/rekreasi') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Wisata Rekreasi</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Table Mater
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= site_url('/master/kuliner') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jenis Wisata Kuliner</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= site_url('/master/rekreasi') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jenis Wisata Rekreasi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= site_url('/master/profesi') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Profesi</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('/testimoni') ?>" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Manajemen Testimoni
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('/users') ?>" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Manajemen Users
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('/Admin/aboutUs') ?>" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  About Us
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">