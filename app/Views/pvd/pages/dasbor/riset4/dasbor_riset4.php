<style>
    .konten-teks {
        padding: 10%;
        color: #506396;
        /* font-family: 'Poppins', 'Courier', 'monospace'; */
    }

    .konten-teks .card-title {
        font-weight: bold;
        font-size: 50px;
        /* font-family: 'Poppins', 'Courier', 'monospace'; */
        color: #493a5a;

    }

    .konten-teks .subs {
        font-weight: bold;
        font-size: 30px;

    }

    .card-text {
        /* font-family: 'Poppins', 'Courier', 'monospace'; */
        color: #506396;
    }
</style>

<!-- Semua -->
<div class="portfolio-item filter-riset4-semua" onresize="responsivefonts()">
    <div class="isi-tujuan shadow mt-0 mb-0">
        <h4 class="card-title judul-card">Semua</h4>

        <div class="card-body">
            <div class="row">
                <!-- Part 1 -->
                <div class="col-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div style=" height:300px;">
                                <canvas id="bar-kota-batu"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 grid-margin stretch-card ">
                    <div class="card shadow rounded-4">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div style=" height:300px;">
                                <canvas id="bar-kec-batu"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 grid-margin stretch-card ">
                    <div class="card shadow rounded-4">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div style=" height:300px;">
                                <canvas id="bar-kec-junrejo"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 grid-margin stretch-card ">
                    <div class="card shadow rounded-4">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div style=" height:300px;">
                                <canvas id="bar-kec-bumiaji"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Part 2 -->
                <div class="col-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div style=" height:300px;">
                                <canvas id="bar-kota-batu-produksi"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 grid-margin stretch-card ">
                    <div class="card shadow rounded-4">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div style=" height:300px;">
                                <canvas id="bar-kec-batu-produksi"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 grid-margin stretch-card ">
                    <div class="card shadow rounded-4">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div style=" height:300px;">
                                <canvas id="bar-kec-junrejo-produksi"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 grid-margin stretch-card ">
                    <div class="card shadow rounded-4">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div style=" height:300px;">
                                <canvas id="bar-kec-bumiaji-produksi"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Part 3 -->
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="pie-kota-batu-skala"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value1(this);" type="checkbox" id="pie-kota-batu-skala-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="pie-kota-batu-skala"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value1(this);" type="checkbox" id="pie-kota-batu-skala-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-lg-4 grid-margin stretch-card ">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="pie-kec-batu-skala"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value2(this);" type="checkbox" id="pie-kec-batu-skala-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 grid-margin stretch-card ">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="pie-kec-junrejo-skala"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value3(this);" type="checkbox" id="pie-kec-junrejo-skala-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 grid-margin stretch-card ">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="pie-kec-bumiaji-skala"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value4(this);" type="checkbox" id="pie-kec-bumiaji-skala-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jasa Transportasi Wisata -->
<div class="portfolio-item filter-riset4-transportasi" onresize="responsivefonts()">
    <div class="isi-tujuan shadow mt-0 mb-0">
        <h4 class="card-title judul-card">Jasa Transportasi Wisata</h4>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card h-100">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="chartBox">
                                <canvas class="mt1" id="riset1_hasil5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card h-100">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="chartBox">
                                <canvas class="mt1" id="riset1_hasil5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card h-100">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="chartBox">
                                <canvas class="mt1" id="riset1_hasil5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card h-100">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="chartBox">
                                <canvas class="mt1" id="riset1_hasil5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-relative bottom-0 end-0 mt-0 mr-4 d-flex flex-row justify-content-end align-items-end">
                    <a id="tombol" href="<?= base_url('hasil-pkl/riset1/MPD-doublecounting') ?>" class="tombol btn-for text-decoration-none">
                        <span>Selengkapnya</span>
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jasa Penyedia Makanan dan Minuman -->
<div class="portfolio-item filter-riset4-makan " onresize="responsivefonts()">
    <div class="isi-tujuan shadow mt-0 mb-0">
        <h4 class="card-title judul-card">Jasa Penyedia Makanan dan Minuman</h4>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card h-100">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="chartBox">
                                <canvas class="mt1" id="riset1_hasil5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card h-100">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="chartBox">
                                <canvas class="mt1" id="riset1_hasil5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card h-100">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="chartBox">
                                <canvas class="mt1" id="riset1_hasil5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card h-100">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="chartBox">
                                <canvas class="mt1" id="riset1_hasil5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-relative bottom-0 end-0 mt-0 mr-4 d-flex flex-row justify-content-end align-items-end">
                    <a id="tombol" href="<?= base_url('hasil-pkl/riset1/MPD-familygrouping') ?>" class="tombol btn-for text-decoration-none">
                        <span>Selengkapnya</span>
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Penyedia Akomodasi -->
<div class="portfolio-item filter-riset4-akomodasi" onresize="responsivefonts()">
    <div class="isi-tujuan shadow mt-0 mb-0">
        <h4 class="card-title judul-card">Penyedia Akomodasi</h4>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card h-100">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="chartBox">
                                <canvas class="mt1" id="riset1_hasil5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card h-100">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="chartBox">
                                <canvas class="mt1" id="riset1_hasil5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card h-100">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="chartBox">
                                <canvas class="mt1" id="riset1_hasil5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card h-100">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="chartBox">
                                <canvas class="mt1" id="riset1_hasil5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-relative bottom-0 end-0 mt-0 mr-4 d-flex flex-row justify-content-end align-items-end">
                    <a id="tombol" href="<?= base_url('hasil-pkl/riset1/MPD-familygrouping') ?>" class="tombol btn-for text-decoration-none">
                        <span>Selengkapnya</span>
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Dasbor -->
<?php include('modal_dasbor.php') ?>