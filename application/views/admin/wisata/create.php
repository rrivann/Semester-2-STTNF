<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <!-- /.row -->
        <div class="card border border-primary">
            <div class="card-header">
                <h3>Form Registrasi Wisata <?= ucfirst($status) ?> </h3>
            </div>
            <div class="card-body">
                <form action="<?= site_url('/Wisata/store/' . $status) ?>" method="post">
                    <div class="row">
                        <div class="col-2">
                            <label for="">Nama Tempat Wisata</label>
                        </div>
                        <div class="col-8 mb-4">
                            <input type="text" name="nama" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
                    <?php
                    if ($status == 'rekreasi') :
                    ?>
                        <div class="row">
                            <div class="col-2">
                                <label for="">Jenis Wisata</label>
                            </div>
                            <div class="col-8">
                                <select class="custom-select" name="jenis_wisata_id" id="">
                                    <option selected>Pilih</option>
                                    <?php
                                    foreach ($jenis as $row) {
                                    ?>
                                        <option value="<?= $row->id_jenis ?>"><?= $row->nama_wisata ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-2">
                            </div>
                        </div>
                        <br>
                    <?php
                    elseif ($status == 'kuliner') :
                    ?>
                        <div class="row">
                            <div class="col-2">
                                <label for="">Jenis kuliner</label>
                            </div>
                            <div class="col-8">
                                <select class="custom-select" name="jenis_kuliner_id" id="">
                                    <option selected>Pilih</option>
                                    <?php
                                    foreach ($jenkul as $row) {
                                    ?>
                                        <option value="<?= $row->id_kuliner ?>"><?= $row->nama_kuliner ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-2">
                            </div>
                        </div>
                    <?php endif; ?>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="">Deskripsi Wisata</label>
                        </div>
                        <div class="col-8 mb-4">
                            <textarea class="form-control" name="deskripsi" id="" rows="3"></textarea>
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <label for="">Fasilitas</label>
                        </div>
                        <div class="col-8 mb-4">
                            <input type="text" class="form-control" name="fasilitas" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <label for="">Rating</label>
                        </div>
                        <div class="col-8 mb-4">
                            <input type="text" class="form-control" name="bintang" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <label for="">Kontak</label>
                        </div>
                        <div class="col-8 mb-4">
                            <input type="text" class="form-control" name="kontak" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <label for="">Email</label>
                        </div>
                        <div class="col-8 mb-4">
                            <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <label for="">Alamat Web</label>
                        </div>
                        <div class="col-8 mb-4">
                            <input type="text" class="form-control" name="web" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <label for="">Alamat Lengkap</label>
                        </div>
                        <div class="col-8 mb-4">
                            <textarea class="form-control" name="alamat" id="" rows="3"></textarea>
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <label for="">Upload foto</label>
                        </div>
                        <div class="col-8 mb-4">
                            <input type="file" name="image" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <label for="">Latitude, Longitude</label>
                        </div>
                        <div class="col-8 mb-4">
                            <input type="text" class="form-control" name="latlong" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-success">Daftar</button>
                            <button type="reset" class="btn btn-danger">Batal</button>
                        </div>
                    </div>

                </form>
                </fieldset>
            </div>

            <!-- /.row -->

            <!-- Main row -->
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
</section>