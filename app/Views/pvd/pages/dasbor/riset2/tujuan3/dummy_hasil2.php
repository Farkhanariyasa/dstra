<div class="portfolio-item filter-riset2-hasilkajian3-2">
    <div class="row t3h2 mt-3 tujuan3hasil2">
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

                    <div style="height:500px;">
                        <canvas class="mt1" id="riset2_t3_hasil1"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 my-2">

            <div class="row m-auto">
                <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_12.png') ?>" class="img-fluid" alt="" style="height: auto;">
            </div>

            <div class="selectBox mt-2 d-flex flex-row justify-content-center align-item-center ">
                <form action="">
                    <select class="dropdownunduh1" id="forBarChart" style="width: 200px;">
                        <option value="a">Maksud Utama</option>
                        <option value="b">Akomodasi Utama</option>
                        <option value="c">Angkutan Utama</option>
                        <option value="d">Jenis Kegiatan Wisata</option>
                        <option value="e">Media Informasi Utama</option>
                        <option value="f">Rata-rata Biaya yang Dikeluarkan Turis</option>
                        <option value="g">Rata-rata Biaya yang Dikeluarkan Pelancong</option>
                    </select>
                </form>
            </div>
        </div>

    </div>
</div>

<!-- Modal Riset 2 -->
<?php include('modal_tujuan3.php') ?>