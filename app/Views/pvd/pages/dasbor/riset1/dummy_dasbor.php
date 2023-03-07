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

<div class="portfolio-item filter-riset1-dc" onresize="responsivefonts()">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModaldc">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt1" id="riset1_hasil5"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value_line(this);" type="checkbox" id="forLineChartAxis_line" value="show" checked>
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Sumbu Line</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card shadow">
            <div class="card-body">
                <p class="card-text text-center">Story<br><br><br><br><br><br><br><br><br><br><br></p>
            </div>
        </div>
    </div>

    <!-- <div class="row mt-5">
        <div class="col-sm-6 my-2">
            <div class="card shadow">
                <div class="card-body">
                    <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 my-2">
            <div class="card shadow">
                <div class="card-body">
                    <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
                </div>
            </div>
        </div>
    </div> -->
</div>
<div class="portfolio-item filter-riset1-fg" onresize="responsivefonts()">
    <div class="row mt-3">
        <div class="col-sm-6 my-2">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModalfg1">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div>
                        <canvas class="mt1" id="riset1_hasil1"></canvas>
                    </div><br>
                    <div>
                        <p class="card-text text-justify">
                            Grafik menunjukkan banyaknya rumah tangga berdasarkan
                            jumlah anggota rumah tangga yang melakukan perjalanan wisata.
                            Terlihat bahwa hanya 5 rumah tangga (5,9%) yang
                            jumlah anggotanya sebesar 5 orang yang melakukan perjalanan wisata.
                        </p>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value(this);" type="checkbox" id="forBarChartLegend" value="show" checked>
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legend</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 my-2">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModalfg2">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-item filter-riset1-wisnus" onresize="responsivefonts()">
    <!-- < class="row"> -->
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModalwisnus">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt1" id="riset1_hasil4"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value_data(this);" type="checkbox" id="forBarChartAxis_data" value="show" checked>
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Sumbu</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- <> -->
</div>

<!-- Modal Dasbor -->
<?php include('modal_dasbor.php') ?>