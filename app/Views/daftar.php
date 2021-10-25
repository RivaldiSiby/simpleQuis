<?= $this->extend('layout/template.php'); ?>

<?= $this->section('content'); ?>
<div style="height:100vh" class="container-fluid bg-danger">
    <div class="row bg-danger pt-5">
        <div class="col-sm-5 mx-auto mt-5 p-2 shadow bg-white">
            <form action="/regis" method="post">
                <h1 class="text-danger m-3 text-center">Daftar</h1>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-1 col-form-label "><i class="fas fa-user-tie"></i></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" name="email" placeholder="Masukan Email" value="<?= old('email'); ?>">
                        <div id=" validationServer03Feedback" class="invalid-feedback ms-3">
                            <?= $validation->getError('email'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-1 col-form-label"><i class="fas fa-key"></i></label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" name="password" placeholder="Masukan Password">
                        <div id=" validationServer03Feedback" class="invalid-feedback ms-3">
                            <?= $validation->getError('password'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="profesi" class="col-sm-1 col-form-label"><i class="fas fa-id-card-alt"></i></label>
                    <div class="col-sm-10">
                        <select class="form-select <?= ($validation->hasError('profesi')) ? 'is-invalid' : '' ?>" aria-label="Default select example " name="profesi">
                            <option value="" selected>Pilih Profesi</option>
                            <option value="Pelajar">Pelajar</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Dosen">Dosen</option>
                            <option value="Guru">Guru</option>
                            <option value="Akademisi">Akademisi</option>
                            <option value="Pebisnis">Pebisnis</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <div id=" validationServer03Feedback" class="invalid-feedback ms-3">
                            <?= $validation->getError('profesi'); ?>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row p-3 pb-0">
                    <button type="submit" class="btn btn-danger">Daftar</button>
                </div>
                <div class="mb-3 row ">
                    <a href="/" class="text-decoration-none text-secondary text-center">Kembali</a>
                </div>
            </form>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>