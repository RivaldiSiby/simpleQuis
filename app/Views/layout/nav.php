<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
        <h4 class="text-danger text-center m-3"><i class="fas fa-trophy"></i>SimpleQuis</h4>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-3" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto text-center">
                <li class="nav-item">
                    <a class="nav-link fw-bold ms-2 me-2 <?= ($active == 'beranda') ? 'active bg-danger  rounded-pill text-white shadow' : '' ?> " aria-current="page" href="user">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold ms-2 me-2 <?= ($active == 'bquis') ? 'active bg-danger  rounded-pill text-white shadow' : '' ?>" href="Bquis">Buat Quis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold ms-2 me-2 <?= ($active == 'iquis') ? 'active bg-danger  rounded-pill text-white shadow' : '' ?>" href="Iquis">Ikuti Quis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold ms-2 me-2 <?= ($active == 'nquis') ? 'active bg-danger  rounded-pill text-white shadow' : '' ?>" href="Nquis">Nilai Quis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold ms-2 me-2 <?= ($active == 'profile') ? 'active bg-danger  rounded-pill text-white shadow' : '' ?>" href="profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold ms-2 me-2" href="/logout">Keluar</a>
                </li>

            </ul>
        </div>

    </div>
</nav>