  <?php
    foreach ($detail as $key) {
    ?>
      <div class="jumbotron jumbotron-fluid detile1">
          <div class="container">
              <p class="display-4"><?= $key->nama ?></p>
          </div>
      </div>
      <div class="container">
          <nav aria-label="breadcrumb" style="margin-right: -15px">
              <ol class="breadcrumb justify-content-end" style="background-color: transparent;">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Wisata Rekreasi</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Library</li>
              </ol>
          </nav>

          <h3><?= $key->nama ?></h3>
          <div class="desk">
              <div class="news3 bg-light">
                  <h4>Galery Photo</h4>
                  <div class="row ">
                      <div class="col-sm-2"><img src="<?php echo base_url() ?>public/assets/detail2/1.jpg" class="img-thumbnail gallery" alt=""></div>
                      <div class="col-sm-2"><img src="<?php echo base_url() ?>public/assets/detail2/2.jpg" class="img-thumbnail gallery" alt=""></div>
                      <div class="col-sm-2"><img src="<?php echo base_url() ?>public/assets/detail2/3.jpg" class="img-thumbnail gallery" alt=""></div>
                      <div class="col-sm-2"><img src="<?php echo base_url() ?>public/assets/detail2/4.jpg" class="img-thumbnail gallery" alt=""></div>
                      <div class="col-sm-2"><img src="<?php echo base_url() ?>public/assets/detail2/5.jpg" class="img-thumbnail gallery" alt=""></div>
                      <div class="col-sm-2"><img src="<?php echo base_url() ?>public/assets/detail2/6.jpg" class="img-thumbnail gallery" alt=""></div>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-sm-12">
                  <div class="card-body news3">
                      <h5 class="card-title">Deskripsi</h5>
                      <p><?= $key->deskripsi ?></p>
                      <hr>
                      <h5>Fasilitas</h5>
                      <p><?= $key->fasilitas ?></p>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-8">
                  <div class="card-body  news3">
                      <h5 class="card-title">Alamat Peta dan Lokasi</h5>
                      <div class="row">
                          <div class="col-sm-6">
                              <p class="card-text"><?= $key->alamat ?></p>
                          </div>
                          <div class="col-sm-6">
                              <div id="map-container-google-1" class="z-depth-1-half map-container">
                                  <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="card-body news3">
                      <h5 class="card-title">Rating</h5>
                      <div class="row p-3 ">
                          <?php
                            for ($i = 0; $i < $key->bintang; $i++) {
                            ?>
                              <p class="border border-secondary p-2"><i class="fas fa-star text-warning"></i></p>
                          <?php
                            }
                            ?>
                      </div>
                      <h5 class="card-title">Kontak</h5>
                      <div class="row">
                          <ul style="list-style-type:none;">
                              <li><i class="fas fa-phone m-2"></i><?= $key->kontak ?></li>
                              <li><i class="fas fa-envelope m-2"></i><?= $key->email ?></li>
                              <li><i class="fab fa-chrome m-2"></i><?= $key->email ?></li>
                          </ul>

                      </div>
                  </div>
              </div>
          </div>
          <div class="testi news3 bg-light">
              <h4>Testimoni dan Komentar</h4>
              <div class="row-cols-3 ">
                  <?php
                    foreach ($testi as $row) {
                        if ($row->wisata_id == $key->id_wisata) {
                    ?>
                          <div class="col">
                              <div class="mb-3 py-3 px-3">
                                  <h5><?= $row->username ?></h5>
                                  <div class="row no-gutters">
                                      <div class="col-md-4 pr-4 mt-2">
                                          <img src="<?php echo base_url() ?>public/assets/detai1/testimoni.jpeg" class="foto img-fluid" alt="">
                                      </div>
                                      <div class="col-md-8">
                                          <p><?= $row->komentar ?></p>
                                      </div>
                                  </div>
                                  <?php
                                    if ($user != NULL) {
                                    ?>
                                      <a href="<?= site_url('/Testimoni/create/' . $key->id_wisata) ?>" class="mt-2 btn btn-primary"><i class="fas fa-edit"></i> Berikan Testimoni</a>
                                  <?php
                                    }
                                    if ($user['username'] == $row->username) {
                                    ?>
                                      <a href="<?= site_url('/Testimoni/delete/' . $row->id_komentar) ?>" class="mt-2 btn btn-danger"><i class="fas fa-trash"></i></a>
                                  <?php
                                    }
                                    ?>
                              </div>
                          </div>
              <?php
                        }
                    }
                }
                ?>
              </div>
          </div>
      </div>