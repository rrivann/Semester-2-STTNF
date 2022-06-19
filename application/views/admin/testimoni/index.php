<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2>Testimoni Tempat Wisata</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Profesi</th>
                    <th>Rating</th>
                    <th>Komentar</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      foreach ($komentar as $key) {
                      
                      ?>
                  <tr>
                    <td><?=$no++?></td>
                    <td><?=$key->username?></td>
                    <td><?=$key->email?></td>
                    <td><?=$key->profesi?></td>
                    <td><?=$key->rating?></td>
                    <td><?=$key->komentar?></td>
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