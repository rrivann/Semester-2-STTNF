<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Data Jenis Wisata Profesi</h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="<?= site_url('/master/create_profesi') ?>" class="btn btn-success">Tambah</a>
                        <br>
                        <br>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($profesi as $key) {

                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $key->profesi ?></td>
                                        <td>
                                            <a href="<?= site_url('/master/edit_profesi/' . $key->id_profesi) ?>" class="btn btn-primary">update</a>
                                            <a href="<?= site_url('/master/delete_profesi/' . $key->id_profesi) ?>" class="btn btn-danger">delete</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>