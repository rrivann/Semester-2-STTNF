<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <!-- /.row -->
        <div class="card border border-primary">
            <div class="card-header">
                <h3>Form Edit Wisata <?= ucfirst($status) ?> </h3>
            </div>
            <div class="card-body">
                <?php
                foreach ($edit as $row) {
                ?>
                    <form action="<?= site_url('/Wisata/update') ?>" method="post">
                        <div class="row">
                            <div class="col-2">
                                <label for="">Nama Tempat Wisata</label>
                            </div>
                            <div class="col-8 mb-4">
                                <input type="hidden" value="<?= $status ?>" name="status" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                <input type="text" value="<?= $row->nama ?>" name="nama" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                <input type="hidden" value="<?= $row->id_wisata ?>" name="id_wisata" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        <?php
                        if ($status == 'rekreasi') {

                        ?>
                            <div class="row">
                                <div class="col-2">
                                    <label for="">Jenis Wisata</label>
                                </div>
                                <div class="col-8">
                                    <select class="custom-select" name="jenis_wisata_id" id="">
                                        <?php
                                        foreach ($jenis as $a) {
                                            if ($a->id_jenis == $row->jenis_wisata_id) {
                                        ?>
                                                <option value="<?= $a->id_jenis ?>" selected><?= $a->nama_wisata ?></option>
                                        <?php
                                            }
                                            echo '<option value="<?= $a->id_jenis?>" >' . $a->nama_wisata . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-2">
                                </div>
                            </div>
                        <?php
                        } elseif ($status == 'kuliner') {
                        ?>
                            <div class="row">
                                <div class="col-2">
                                    <label for="">Jenis kuliner</label>
                                </div>
                                <div class="col-8">
                                    <select class="custom-select" name="jenis_kuliner_id" id="">
                                        <?php
                                        foreach ($jenkul as $b) {
                                            if ($b->id_kuliner == $row->jenis_kuliner_id) {
                                        ?>
                                                <option value="<?= $b->id_kuliner ?>" selected><?= $b->nama_kuliner ?></option>
                                        <?php
                                            }
                                            echo '<option value="<?= $b->id_kuliner?>" >' . $b->nama_kuliner . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-2">
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <br>
                        <div class="row">
                            <div class="col-2">
                                <label for="">Deskripsi Wisata</label>
                            </div>
                            <div class="col-8 mb-4">
                                <textarea class="form-control" name="deskripsi" id="" rows="3"><?= $row->deskripsi ?></textarea>
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <label for="">Fasilitas</label>
                            </div>
                            <div class="col-8 mb-4">
                                <input type="text" class="form-control" value="<?= $row->fasilitas ?>" name="fasilitas" id="" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <label for="">Rating</label>
                            </div>
                            <div class="col-8 mb-4">
                                <input type="text" class="form-control" value="<?= $row->bintang ?>" name="bintang" id="" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <label for="">Kontak</label>
                            </div>
                            <div class="col-8 mb-4">
                                <input type="text" class="form-control" value="<?= $row->kontak ?>" name="kontak" id="" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <label for="">Email</label>
                            </div>
                            <div class="col-8 mb-4">
                                <input type="text" class="form-control" value="<?= $row->email ?>" name="email" id="" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <label for="">Alamat Web</label>
                            </div>
                            <div class="col-8 mb-4">
                                <input type="text" class="form-control" value="<?= $row->web ?>" name="web" id="" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <label for="">Alamat Lengkap</label>
                            </div>
                            <div class="col-8 mb-4">
                                <textarea class="form-control" name="alamat" id="" rows="3"><?= $row->alamat ?></textarea>
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <label for="">Latitude, Longitude</label>
                            </div>
                            <div class="col-8 mb-4">
                                <input type="text" class="form-control" value="<?= $row->latlong ?>" name="latlong" id="" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-success">Edit</button>
                                <button type="reset" class="btn btn-danger">Batal</button>
                            </div>
                        </div>

                    </form>
                <?php
                }
                ?>
                </fieldset>
            </div>

            <!-- /.row -->

            <!-- Main row -->
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
</section>