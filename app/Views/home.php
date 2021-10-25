<?= $this->extend('layout/template.php'); ?>

<?= $this->section('content'); ?>
<div style="height:100vh" class="container-fluid bg-danger">
    <div class="row bg-danger pt-5">
        <div class="col-sm-5 mx-auto mt-5 p-2 shadow bg-white">
            <form action="/masuk" method="post">
                <h1 class="text-danger text-center m-3"><i class="fas fa-trophy"></i>SimpleQuis</h1>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="m-3 text-center alert alert-success">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="m-3 text-center alert alert-danger">
                        <?= session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-1 col-form-label fw-bold"><i class="fas fa-user-tie"></i></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?> <?= session()->getFlashdata('email') ? 'is-invalid' : ''; ?> " name="email" placeholder="Masukan Email" value="<?= old('email') ?>">
                        <div id=" validationServer03Feedback" class="invalid-feedback ms-3">
                            <?= $validation->getError('email'); ?>
                            <?= session()->getFlashdata('email') ?>
                        </div>
                    </div>

                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-1 col-form-label fw-bold"><i class="fas fa-key"></i></label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?> <?= session()->getFlashdata('pass') ? 'is-invalid' : ''; ?>" name="password" placeholder="Masukan Password">
                        <div id=" validationServer03Feedback" class="invalid-feedback ms-3">
                            <?= $validation->getError('password'); ?>
                            <?= session()->getFlashdata('pass') ?>
                        </div>
                    </div>

                </div>
                <div class="mb-3 row p-3 pb-0">
                    <button type="submit" class="btn btn-danger">Masuk</button>
                </div>
                <div class="mb-3 row ">
                    <a href="/daftar" class="text-decoration-none text-secondary text-center">Daftar</a>
                </div>
            </form>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>