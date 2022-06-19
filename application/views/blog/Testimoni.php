<?php
foreach ($wisata as $key) {
?>
    <div class="jumbotron jumbotron-fluid detile1">
        <div class="container">
            <p class="display-4"><?= $key->nama ?></p>
        </div>
    </div>
    <div class="container">
        <div class="desk">
            <div class="news3 alert alert-dark">
                <form action="<?= site_url('/testimoni/store') ?>" method="post">
                    <div class="row">
                        <div class="col-2">
                            <label for="">Rating</label>
                        </div>
                        <div class="col-8 mb-4">
                            <input type="text" name="rating" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            <input type="hidden" name="username" id="" class="form-control" value="<?= $user['username'] ?>">
                            <input type="hidden" name="email" id="" class="form-control" value="<?= $user['email'] ?>">
                            <input type="hidden" name="id_profesi" id="" class="form-control" value="<?= $user['id_profesi'] ?>">
                            <input type="hidden" name="id_wisata" id="" class="form-control" value="<?= $key->id_wisata ?>">
                        </div>
                        <div class="col-2">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <label for="">Testimoni</label>
                        </div>
                        <div class="col-8 mb-4">
                            <textarea class="form-control" name="komentar" id="" rows="3"></textarea>
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-success">Kirim</button>
                            <button type="reset" class="btn btn-danger">Batal</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    <?php
}
    ?>