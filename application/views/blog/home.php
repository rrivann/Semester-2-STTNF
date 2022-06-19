        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <p class="display-4">Sistem Informasi <span>Wisata</span> Kota Depok</p>
                <img src="<?php echo base_url()?>public/assets/depok.png" alt="" class="depok">
            </div>
        </div>
        <!-- info card -->
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-10 info-panel">
                    <div class="row">
                        <div class="col-lg">
                          <img src="<?php echo base_url()?>public/assets/24-hour-service.png" alt="" class="float-left">
                          <h4>Jadwal Buka Tempat wisata</h4>
                          <p>Hari dan Jam buka tempat wisata yang akurat ada disini</p>
                        </div>
                        <div class="col-lg">
                          <img src="<?php echo base_url()?>public/assets/newspaper.png" alt="" class="float-left">
                          <h4>Info Terkini</h4>
                          <p>Info tentang tempat wisata rekeasi maupun kuliner</p>
                        </div>
                        <div class="col-lg">
                          <img src="<?php echo base_url()?>public/assets/recommended.png" alt="" class="float-left">
                          <h4>Rekomendasi</h4>
                          <p>dapatkan rekomendasi tepat wisata rekreasi dan kuliner disini</p>
                       </div>
                    </div>
                </div>
            </div>
            <!-- list -->
    <div class="wrapper">
        <h3 class="subtitle">Wisata Rekreasi & Kuliner Unggulan Kota Depok</h3>
        <?php
            foreach ($wisata as $key){
        ?>
        <div class="row">
            <div class="col-sm ">
                <div class=" news ">
                    <div class="row no-gutters">
                        <div class="col-md-4 pr-4 mt-2">
                            <img src="<?php echo base_url()?>public/assets/senja.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-8">
                            <h4><?= $key->nama?></h4>
                            <p><?= $key->deskripsi?></p>
                            <a class="btn btn-primary" href="<?=site_url('blog/wisata/detail/'.$key->id_wisata)?>"> <i class="fas fa-info-circle"></i> Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
            }
    ?>
        <!-- Footer -->
        