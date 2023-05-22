<!-- Visualisasi 1 new -->
<div class="portfolio-item filter-riset2-hasilkajian2-1">
    <div class="row mt-3">

        <div class="col-sm-8 my-2 py-5">
            <div class="card shadow rounded-5">
                <div class="card-body">
                    <div
                        class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
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
                </div>
            </div>
        </div>

        <div class="col-sm-4 my-2">
            <div class="card shadow rounded-5">
                <!-- Turis -->
                <div class="card-body">
                    <div style="line-height: 40px; color: #4b395f; font-size:25px;">
                        <i class="fas fa-city col-1 ikon"></i><strong> &nbsp; Turis</strong>
                    </div>
                    <div style="font-size:15px;">
                        Turis merupakan wisatawan dalam kota yang melakukan perjalanan terakhir lebih dari 1 malam.
                    </div>
                </div>
            </div>

            <div class="card shadow rounded-5 my-4">
                <!-- Pelancong -->
                <div class="card-body">
                    <div style="line-height: 40px; color: #4b395f; font-size:25px;">
                        <i class="fas fa-city col-1 ikon"></i><strong> &nbsp; Pelancong</strong>
                    </div>
                    <div style="font-size:15px;">
                        Pelancong merupakan wisatawan nusantara yang melakukan perjalanan terakhir kurang dari 1 malam.
                    </div>
                </div>
            </div>

            <div class="card shadow rounded-5">
                <!-- Malam -->
                <div class="card-body">
                    <div style="line-height: 40px; color: #4b395f; font-size:25px;">
                        <i class="fas fa-city col-1 ikon"></i><strong> &nbsp; Malam</strong>
                    </div>
                    <div style="font-size:15px;">
                        Lama perjalanan dan kunjungan wisata diukur dalam malam atau jam. Dalam hal ini, malam
                        didefinisikan ketika terjadi pergantian tanggal atau melewati pukul 00.00.
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>

<!-- Modal Riset 2 -->
<?php include('modal_tujuan2.php') ?>