<?php
include_once 'atas.php';
?>




<div class="row">
  <div class="col-md-12 mb-5">
    <h2 class="mt-5 text-center text-secondary">Aplikasi Daftar Nilai Siswa</h2>
  </div>
  <div class="col-md-12 d-flex justify-content-center">
    <div class="card mb-3  w-75">
      <div class="card-header text-white bg-info">Form Input Nilai</div>
      <div class="card-body">
        <form action="nilai_siswa.php" method="POST">
          <div class="form-group row">
            <label class="col-4 col-form-label" for="name">Nama Lengkap</label>
            <div class="col-8">
              <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Mahasiswa">
            </div>
          </div>
          <div class="form-group row pt-4 pb-2">
            <label for="matkul" class="col-4 col-form-label ">Mata Kuliah</label>
            <div class="col-8">
              <select id="matkul" name="matkul" class="custom-select">
                <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                <option value="Basis Data">Basis Data</option>
                <option value="Pemrograman Web">Pemrograman Web</option>
              </select>
            </div>
          </div>
          <div class="form-group row pt-2 pb-4">
            <label for="uts" class="col-4 col-form-label">Nilai UTS</label>
            <div class="col-8">
              <input id="uts" name="uts" placeholder="Nilai Ujian Tengah Semester" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row  pb-4">
            <label for="uas" class="col-4 col-form-label">Nilai UAS</label>
            <div class="col-8">
              <input id="uas" name="uas" placeholder="Nilai Ujian Akhir Semester" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row  pb-4">
            <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label>
            <div class="col-8">
              <input id="tugas" name="tugas" placeholder="Nilai Tugas / Pratikum" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php
include_once 'bawah.php';
?>