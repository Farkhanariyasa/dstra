<!-- Visualisasi 1 -->
<div class="portfolio-item filter-riset2-hasilkajian3-1">
    <div class="row t3h1 mt-3 tujuan3hasil1">
        <div class="col-sm-8 my-2 grid-margin stretch-card">
            <div class="card shadow rounded-5">
                <div class="card-body">
                    <div class="position-absolute top-0 end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-t3-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal_t3_hasil1">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>

                    <div style=" height:500px;">
                        <canvas class="mt1" id="riset2_t3_hasil1"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="row m-auto">
                <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_11.png') ?>" class="img-fluid" alt="" style="height: auto;">
            </div>

            <div class="selectBox mt-2 d-flex flex-row justify-content-center align-item-center">
                <form action="">
                    <select class="dropdownunduh1" id="forBarChart">
                        <option value="a">Jenis Kelamin</option>
                        <option value="b">Kelompok Usia</option>
                        <option value="c">Kegiatan Utama</option>
                        <option value="d">Pekerjaan Utama</option>
                        <option value="e">Tingkat Pendidikan</option>
                        <option value="f">Menurut Provider</option>
                    </select>
                </form>
            </div>

            <!-- <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul class=" nav-pill mb-3 flex-column" id="pills-tab" role="tablist" style="color:#506396">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-bepergian-tab" data-bs-toggle="pill" data-bs-target="#pills-bepergian" type="button" role="tab" aria-controls="pills-bepergian" aria-selected="true">Jenis Kelamin</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-kunjungan-tab" data-bs-toggle="pill" data-bs-target="#pills-kunjungan" type="button" role="tab" aria-controls="pills-kunjungan" aria-selected="false">Kelompok Usia</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-kunjungan-tab" data-bs-toggle="pill" data-bs-target="#pills-kunjungan" type="button" role="tab" aria-controls="pills-kunjungan" aria-selected="false">Kegiatan Utama</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-kunjungan-tab" data-bs-toggle="pill" data-bs-target="#pills-kunjungan" type="button" role="tab" aria-controls="pills-kunjungan" aria-selected="false">Pekerjaan Utama</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-kunjungan-tab" data-bs-toggle="pill" data-bs-target="#pills-kunjungan" type="button" role="tab" aria-controls="pills-kunjungan" aria-selected="false">Tingkat Pendidikan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-kunjungan-tab" data-bs-toggle="pill" data-bs-target="#pills-kunjungan" type="button" role="tab" aria-controls="pills-kunjungan" aria-selected="false">Menurut Provider</button>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>




    <!-- <div class="row mt-3">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div
                        class="position-absolute top-0 end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-3-3" type="button" class="tombol btn-for" data-bs-toggle="modal"
                                data-bs-target="#exampleModal3">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>

                    <div style=" height:500px;">
                        <canvas class="mt1" id="riset2_hasil2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>

<!-- Modal Riset 2 -->
<?php include('modal_tujuan3.php') ?>