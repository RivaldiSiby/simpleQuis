<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/nav'); ?>
<div style="min-height:100vh;" class="dashboard bg-danger">
    <div class="container">
        <div style="padding:30px 20px;" class="row d-flex justify-content-center">
            <div class="col-sm-5 p-3 bg-white rounded shadow m-3 ">
                <div class="col-12 text-center">
                    <h4 class="bg-danger p-2 text-white shadow">Quis yang Dibuat</h4>
                </div>
                <div class="col-12 d-flex justify-content-evenly">
                    <h1 style="font-size:80px"><i class="fas fa-clipboard-list"></i></h1>
                    <h1 style="font-size:80px"></i><span>3</span></h1>
                </div>
                <div class="col-12 text-center">
                    <a href="" class="btn btn-success fw-bold d-block">Lihat</a>
                </div>
            </div>
            <div class="col-sm-5 p-3 bg-white rounded shadow m-3 ">
                <div class="col-12 text-center">
                    <h4 class="bg-danger p-2 text-white shadow">Quis yang Diikuti</h4>
                </div>
                <div class="col-12 d-flex justify-content-evenly">
                    <h1 style="font-size:80px"><i class="fas fa-clipboard-check"></i></h1>
                    <h1 style="font-size:80px"></i><span>3</span></h1>
                </div>
                <div class="col-12 text-center">
                    <a href="" class="btn btn-success fw-bold d-block">Lihat</a>
                </div>
            </div>
            <div class="col-sm-5 p-3 bg-white rounded shadow m-3 ">
                <div class="col-12 text-center">
                    <h4 class="bg-danger p-2 text-white shadow">Nilai Quis Yang diIkuti</h4>
                </div>
                <div class="col-12 d-flex justify-content-evenly">
                    <h1 style="font-size:80px"><i class="fas fa-trophy"></i></h1>
                    <h1 style="font-size:80px"></i><span>5</span></h1>
                </div>
                <div class="col-12 text-center">
                    <a href="" class="btn btn-success fw-bold d-block">Lihat</a>
                </div>
            </div>
            <div class="col-sm-5 p-3 bg-white rounded shadow m-3 ">
                <div class="col-12 text-center">
                    <h4 class="bg-danger p-2 text-white shadow">Nilai Quis Yang dibuat</h4>
                </div>
                <div class="col-12 d-flex justify-content-evenly">
                    <h1 style="font-size:80px"><i class="fas fa-star"></i></h1>
                    <h1 style="font-size:80px"></i><span>3</span></h1>
                </div>
                <div class="col-12 text-center">
                    <a href="" class="btn btn-success fw-bold d-block">Lihat</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>