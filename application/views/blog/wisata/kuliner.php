<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url() ?>public/assets/kuliner.jpg" alt="..." class="slide">
            <div class="carousel-caption d-none d-md-block caption">
                <h5 class="display-4">Restoran berkonsep nature</h5>
                <p>Rekomendasi Restoran berkonsep Nature di Depok</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url() ?>public/assets/kongkou.jpg" alt="..." class="slide">
            <div class="carousel-caption d-none d-md-block caption">
                <h5 class="display-4">Tempat Nongkrong Asik di Depok</h5>
                <p>Kedai kedai UMKM yang disulap jadi tempat yang Hybeast</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url() ?>public/assets/coffee.jpg" alt="..." class="slide">
            <div class="carousel-caption d-none d-md-block caption">
                <h5 class="display-4">Coffee Shop hits di depok</h5>
                <p>Hidden Gems di Depok</p>
            </div>
        </div>
    </div>
</div>

<nav aria-label="breadcrumb" style="margin-right: -15px">
    <ol class="breadcrumb justify-content-end" style="background-color: transparent;">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
</nav>
<div class="col  bg-light border">
    <h3 class="display-4">Daftar Wisata Kuliner Depok</h3>
    <?php
    foreach ($wisata as $key) :
    ?>
        <div class="row pt-3">
            <div class="col-sm">
                <div class="mb-3 py-3 px-3 news3">
                    <h4 class="subtitle"><?= $key->nama ?></h4>
                    <div class="row no-gutters">
                        <div class="col-md-4 pr-4 mt-2">
                            <img src="<?php echo base_url() ?>public/assets/kuliner.jpg" class="img-fluid image1" alt="">
                        </div>
                        <div class="col-md-8">
                            <p><?= $key->deskripsi ?></p>
                            <a class="btn btn-primary" href="<?= site_url('blog/wisata/detail/' . $key->id_wisata) ?>"><i class="fas fa-info-circle"></i> Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    endforeach;
    ?>
</div>