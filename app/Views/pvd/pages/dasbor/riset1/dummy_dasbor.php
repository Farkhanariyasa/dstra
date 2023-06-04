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


<div class="tab-content" id="pills-tabContent">
    <!-- QUality Assurance -->
    <div class="tab-pane fade show active" id="pills-qa" role="tabpanel" aria-labelledby="pills-qa-tab" tabindex="0">
        <div class="isi-tujuan shadow mt-0 mb-0">
            <h4 class="card-title judul-card">Quality Assurance</h4>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card ">
                        <div class="card shadow rounded-4">
                            <div class="card-body">
                                <!-- <div>
                                    <canvas class="mt1" id="riset1_hasil1"></canvas>
                                </div><br>
                                <div>
                                    <p class="card-text text-justify">
                                        Grafik menunjukkan banyaknya rumah tangga berdasarkan
                                        jumlah anggota rumah tangga yang melakukan perjalanan wisata.
                                        Terlihat bahwa hanya 5 rumah tangga (5,9%) yang
                                        jumlah anggotanya sebesar 5 orang yang melakukan perjalanan wisata.
                                    </p>
                                </div> -->
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output1_1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card ">
                        <div class="card shadow rounded-4">
                            <div class="card-body">
                                <!-- <div>
                                    <div>
                                        <div class="card">
                                            <div class="card-body konten-teks">
                                                <p class="card-title">Jumlah RT <br>21 (24,7%) <br></p>
                                                <p class="card-text subs">Dengan ART sebanyak 4 orang</p>
                                                <p class="card-text text-justify">
                                                    Banyaknya Rumah Tangga (RT) dengan anggota
                                                    rumah tangga (ART) sebanyak 4 orang yang melakukan perjalanan
                                                    yaitu sebesar 21 rumah tangga (24,7%) dari total 85 rumah tangga yang
                                                    melakukan perjalanan.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output1_2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-0 end-0 mt-0 mr-4 d-flex flex-row justify-content-end align-items-end">
                        <a id="tombol" href="<?= base_url('hasil-pkl/riset1/mpd-qualityassurance') ?>" class="tombol btn-for text-decoration-none">
                            <span>Selengkapnya</span>
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Double Counting -->
    <div class="tab-pane fade " id="pills-dc" role="tabpanel" aria-labelledby="pills-dc-tab" tabindex="0">
        <div class="isi-tujuan shadow mt-0 mb-0">
            <h4 class="card-title judul-card">Double Counting</h4>
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
                        <a id="tombol" href="<?= base_url('hasil-pkl/riset1/mpd-doublecounting') ?>" class="tombol btn-for text-decoration-none">
                            <span>Selengkapnya</span>
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Family Grouping -->
    <div class="tab-pane fade " id="pills-fg" role="tabpanel" aria-labelledby="pills-fg-tab" tabindex="0">
        <div class="isi-tujuan shadow mt-0 mb-0">
            <h4 class="card-title judul-card">Family Grouping</h4>
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
                        <a id="tombol" href="<?= base_url('hasil-pkl/riset1/mpd-familygrouping') ?>" class="tombol btn-for text-decoration-none" target="_self">
                            <span>Selengkapnya</span>
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wisnus -->
    <div class="tab-pane fade " id="pills-wisnus" role="tabpanel" aria-labelledby="pills-wisnus-tab" tabindex="0">
        <div class="isi-tujuan shadow mt-0 mb-0">
            <h4 class="card-title judul-card">Statistik Wisatawan Nusantara</h4>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="card-body">
                                <div class="chartBox" style="height:400px">
                                    <canvas class="mt1" id="wisnus_output1"></canvas>
                                </div>
                                <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="form-check form-switch me-3">
                                        <input class="form-check-input" onchange="update_value_output1(this);" type="checkbox" id="forBarChartAxis_output1" value="show" checked>
                                        <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Sumbu</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="card-body">
                                <div class="chartBox" style="height:400px">
                                    <canvas class="mt1" id="wisnus_output2"></canvas>
                                </div>
                                <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="form-check form-switch me-3">
                                        <input class="form-check-input" onchange="update_value_output2(this);" type="checkbox" id="forBarChartAxis_output2" value="show" checked>
                                        <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Sumbu</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative bottom-0 end-0 mt-0 mr-4 d-flex flex-row justify-content-end align-items-end">
                        <a id="tombol" href="<?= base_url('hasil-pkl/riset1/wisnus-visualisasi') ?>" class="tombol btn-for text-decoration-none">
                            <span>Selengkapnya</span>
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- </div> -->

<!-- Modal Dasbor -->
<?php include('modal_dasbor.php') ?>