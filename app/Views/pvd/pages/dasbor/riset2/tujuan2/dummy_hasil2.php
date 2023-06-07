<!-- Visualisasi 2 new -->
<div class="portfolio-item filter-riset2-hasilkajian2-2">
    <div class="row mt-3">

        <div class="col-sm-8 my-2">
            <div class="card shadow rounded-5">
                <div class="card-body">
                    <div
                        class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="selectBox mt-2 me-2">
                            <form action="">
                                <select class="dropdownunduh1" id="forBarChart">
                                    <option value="a">Satuan Malam</option>
                                    <option value="b">Satuan Jam</option>
                                </select>
                            </form>
                        </div>
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-t2-1" type="button" class="tombol btn-for" data-bs-toggle="modal"
                                data-bs-target="#exampleModal_t2_hasil1">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>

                    <div style=" height:500px;">
                        <canvas class="mt1" id="riset2_t2_hasil1"></canvas>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="color:#506396">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-bepergian-tab" data-bs-toggle="pill" data-bs-target="#pills-bepergian" type="button" role="tab" aria-controls="pills-bepergian" aria-selected="true">Bepergian</button>
                                </li>
                                <li class="nav-item" role="presen12wqetation">
                                    <button class="nav-link" id="pills-kunjungan-tab" data-bs-toggle="pill" data-bs-target="#pills-kunjungan" type="button" role="tab" aria-controls="pills-kunjungan" aria-selected="false">Kunjungan</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-sm-4 my-2">
            <div class="card shadow rounded-5">
                <!-- Turis -->
                <div class="card-body">
                    <div style="line-height: 40px; color: #4b395f; font-size:25px;">
                        <!-- <i class="fas fa-city col-1 ikon"></i> -->
                        <!-- <div class="row-6 d-flex align-items-center justify-content-center"> -->
                        <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_10.png') ?>" class="img-fluid" alt="" style="height: 50px;">
                        <!-- </div> -->
                        <strong>Pelancong</strong>
                    </div>
                    <div style="font-size:15px;" class="mt-2 text-justify">
                        Pelancong merupakan wisatawan nusantara yang melakukan perjalanan terakhir kurang dari 1 malam.
                    </div>
                </div>
            </div>

            <!-- <div class="card shadow rounded-5 my-4"> -->
                <!-- Pelancong -->
                <!-- <div class="card-body">
                    <div style="line-height: 40px; color: #4b395f; font-size:25px;">
                        <i class="fas fa-city col-1 ikon"></i><strong> &nbsp; Pelancong</strong>
                    </div>
                    <div style="font-size:15px;">
                        Pelancong merupakan wisatawan nusantara yang melakukan perjalanan terakhir kurang dari 1 malam.
                    </div>
                </div>
            </div> -->

            <!-- <div class="card shadow rounded-5"> -->
                <!-- Malam -->
                <!-- <div class="card-body">
                    <div style="line-height: 40px; color: #4b395f; font-size:25px;">
                        <i class="fas fa-city col-1 ikon"></i><strong> &nbsp; Malam</strong>
                    </div>
                    <div style="font-size:15px;">
                        Lama perjalanan dan kunjungan wisata diukur dalam malam atau jam. Dalam hal ini, malam
                        didefinisikan ketika terjadi pergantian tanggal atau melewati pukul 00.00.
                    </div>
                </div>
            </div> -->

        </div>


    </div>
</div>

<!-- Modal Riset 2 -->
<?php include('modal_tujuan2.php') ?>