<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <!-- /.row -->
        <div class="card border border-primary">
            <div class="card-header">
                <h3>Form Aktivasi Akun </h3>
            </div>
            <div class="card-body">
                <?php
                foreach ($users as $key) :
                ?>
                    <form action="<?= site_url('/users/update') ?>" method="post">
                        <div class="row">
                            <div class="col-2">
                                <label for="">Username</label>
                            </div>
                            <div class="col-8 mb-4">
                                <input type="text" disabled value="<?= $key->username ?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                <input type="hidden" value="<?= $key->id_user ?>" name="id_user" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <label for="">email</label>
                            </div>
                            <div class="col-8 mb-4">
                                <input type="text" disabled value="<?= $key->email ?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <label for="">profesi</label>
                            </div>
                            <div class="col-8">
                                <select class="custom-select" name="id_profesi" id="">
                                    <option selected>Pilih</option>
                                    <?php
                                    foreach ($profesi as $row) {
                                        if ($row->id_profesi == $key->id_profesi) {
                                    ?>
                                            <option value="<?= $row->id_profesi ?>" selected><?= $row->profesi ?></option>
                                        <?php
                                        }
                                        ?>
                                        <option value="<?= $row->id_profesi ?>"><?= $row->profesi ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-2">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">
                                <label for="">status</label>
                            </div>
                            <div class="col-8 mb-4">
                                <select class="custom-select" name="status" id="">
                                    <?php
                                    if ($row->is_active == 0) {
                                    ?>
                                        <option value="1" selected>Active</option>
                                    <?php
                                    }
                                    ?>
                                    <option value="0">Not Active</option>
                                </select>
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-success">Edit</button>
                                <button type="reset" class="btn btn-danger">Batal</button>
                            </div>
                        </div>

                    </form>
                <?php
                endforeach;
                ?>
                </fieldset>
            </div>
        </div>
</section>