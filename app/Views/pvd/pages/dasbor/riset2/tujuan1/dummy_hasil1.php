<!-- Estimasi Banyak Wisatawan -->
<div class="portfolio-item filter-riset2-hasiltujuan1-1">
    <div class="row mt-3 tujuan1hasil1">
        <div class="col-sm-4 my-2 ">
            <div class="card shadow rounded-5">
                <div class="card-body">
                    <div class="text-center">
                        <!-- <i class="fas fa-user-alt col-1 ikon" style="font-size: 30px; line-height:30px;"></i> -->
                        <div class="row-6 d-flex align-items-center justify-content-center">
                            <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_9.png') ?>" class="img-fluid" alt="" style="height: 100px; width: auto;">
                        </div>
                        <div class="card-text text-center">
                            Estimasi Total Jumlah Wisatawan
                        </div>
                        <div>
                            <div class="" style="color: #4b395f; font-size: 50px;"><strong>131,097</strong></div>orang 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8 my-2">
            <div class="card shadow rounded-5">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-t1-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal_t1_hasil1">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt-1" id="riset2_t1_hasil1"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5 mt-2">
        <div class="card d-flex justify-content-center flex-column align-item-center flex-md primary pb-5 pt-5 shadow rounded-5">
            <p class="card-text text-center">
                <strong>Sebaran Wisatawan dalam Kota Malang menurut Kecamatan Asal <br>Wisatawan di Kota Malang Bulan Oktober-Desember 2022</strong>
            </p>
            <div class="d-flex flex-row align-item-center justify-content-center">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                    <div class="me-1 mt-1 justify-content-end align-item-end">
                        <button id="unduh-t1-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal_t1_hasil2" hidden>
                            <i class="fa-solid fa-download"></i>
                        </button>
                    </div>
                </div>
                <div id="riset2_t1_hasil2" style="width: 95%; height:80vh; z-index:0;"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Riset 2 -->
<?php include('modal_tujuan1.php') ?>