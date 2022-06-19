<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Management Users </h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Profesi</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($users as $key) {

                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $key->username ?></td>
                                        <td><?= $key->email ?></td>
                                        <td><?= $key->profesi ?></td>
                                        <td><?php
                                            if ($key->is_active == 1) { ?>
                                                <span class="badge badge-primary">Active</span>
                                            <?php
                                            } else {
                                            ?>
                                                <span class="badge badge-danger">Not active</span>
                                        </td>
                                    <?php
                                            }
                                    ?>
                                    <td>
                                        <a href="<?= site_url('/Users/activate/' . $key->id_user) ?>" class="btn btn-primary">Activate</a> <a href="<?= site_url('/Users/delete/' . $key->id_user) ?>" class="btn btn-danger">delete</a>
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