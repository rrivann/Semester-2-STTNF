<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Wisata Rekreasi Depok</h3>
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <a href="<?= site_url('/Wisata/create/rekreasi') ?>" class="btn btn-success mb-4">
              <i class="fas fa-plus-circle"></i>
              Tambah Data</a>
            <div class="row">
              <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                  <thead>
                    <tr role="row">
                      <th>No</th>
                      <th>Nama Wisata</th>
                      <th>Jenis Wisata</th>
                      <th>Rating</th>
                      <th>Kontak Person</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($wisata as $row) {
                    ?>
                      <tr role="row" class="odd">
                        <td class="dtr-control sorting_1" tabindex="0"><?php echo $no++ ?></td>
                        <td><?php echo $row->nama ?></td>
                        <td><?php echo $row->nama_wisata ?></td>
                        <td>
                          <?php
                          for ($i = 0; $i < $row->bintang; $i++) {
                            echo "*";
                          }
                          ?>
                        </td>
                        <td><?php echo $row->kontak ?></td>
                        <td><?php echo $row->email ?></td>
                        <td>
                          <a href="<?= site_url('/wisata/edit/' . $row->id_wisata . '/rekreasi') ?>" class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                          </a>
                          |
                          <a href="<?= site_url('/wisata/detail/' . $row->id_wisata) ?>" class="btn btn-warning">
                            <i class="fas fa-info-circle"></i>
                          </a>
                          |
                          <a href="<?= site_url('/wisata/delete/' . $row->id_wisata . '/rekreasi') ?>" onclick="return confirm('yakin ingin menghapus ini?');" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                          </a>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- Main row -->
  <!-- /.row -->
  </div>
  <!--/. container-fluid -->
</section>