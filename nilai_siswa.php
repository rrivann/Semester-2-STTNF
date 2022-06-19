<?php

include_once 'libfungsi.php';
include_once 'atas.php';

$nama_siswa = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai_uts = $_POST['uts'];
$nilai_uas = $_POST['uas'];
$nilai_tugas = $_POST['tugas'];
$keterangan = 'Tidak Lulus';

$list1 = ['nama' => 'Rivan Albani Ray', 'matkul' => 'Pemrograman Web', 'nilai_uts' => 88, 'nilai_uas' => 87, 'nilai_tugas' => 88];
$list2 = ['nama' => $nama_siswa, 'matkul' => $matkul, 'nilai_uts' => $nilai_uts, 'nilai_uas' => $nilai_uas, 'nilai_tugas' => $nilai_tugas];

$list_siswa = [$list1, $list2];

?>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        DataTable
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Mata Kuliah</th>
                        <th>Nilai UTS</th>
                        <th>Nilai UAS</th>
                        <th>Nilai Tugas</th>
                        <th>Keterangan</th>
                        <th>Grade</th>
                        <th>Predikat</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($list_siswa as $action) {

                        $uts =  $action['nilai_uts'] * 30 / 100;
                        $uas =  $action['nilai_uas'] * 35 / 100;
                        $tugas =  $action['nilai_tugas'] * 35 / 100;
                        $nilai = $uts + $uas + $tugas;

                    ?>
                        <tr>

                            <th><?= $no++ ?></th>
                            <td><?= $action['nama'] ?></td>
                            <td><?= $action['matkul'] ?></td>
                            <td><?= $action['nilai_uts'] ?></td>
                            <td><?= $action['nilai_uts'] ?></td>
                            <td><?= $action['nilai_tugas'] ?></td>
                            <td><?= keterangan($nilai) ?></td>
                            <td><?= grade($nilai) ?></td>
                            <td><?= predikat(grade($nilai)) ?></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
include_once 'bawah.php';
?>