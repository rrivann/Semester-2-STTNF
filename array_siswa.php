<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <style>
    body {
      height: 100%;
    }

    .container {
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>

<?php

$nama_siswa = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai_uts = $_POST['uts'];
$nilai_uas = $_POST['uas'];
$nilai_tugas = $_POST['tugas'];

$list1 = ['nama' => 'Rivan Albani Ray', 'matkul' => 'Pemrograman Web', 'nilai_uts' => 88, 'nilai_uas' => 87, 'nilai_tugas' => 88];
$list2 = ['nama' => $nama_siswa, 'matkul' => $matkul, 'nilai_uts' => $nilai_uts, 'nilai_uas' => $nilai_uas, 'nilai_tugas' => $nilai_tugas];

$list_siswa = [$list1, $list2];

?>

<body>
  <div class="row">
    <div class="col-md-12 mb-5">
      <h2 class="mt-5 text-center text-secondary">Aplikasi Daftar Nilai Siswa</h2>
    </div>
    <div class="col-md-12 d-flex justify-content-center px-5">
      <div class="card mb-3  w-100">
        <div class="card-header text-white bg-info ">Daftar Nilai Siswa</div>
        <div class="card-body">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Nilai UTS</th>
                <th scope="col">Nilai UAS</th>
                <th scope="col">Nilai Tugas</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($list_siswa as $action) {
              ?>
                <tr>

                  <th scope="row"><?= $no++ ?></th>
                  <td><?= $action['nama'] ?></td>
                  <td><?= $action['matkul'] ?></td>
                  <td><?= $action['nilai_uts'] ?></td>
                  <td><?= $action['nilai_uts'] ?></td>
                  <td><?= $action['nilai_tugas'] ?></td>

                </tr>

              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>