<!-- Tab 1 -->
<div class="portfolio-item filter-riset2-hasiltujuan1-1">
    <div class="row mt-3">
        <div class="col-sm-4 my-2">
            <div class="card shadow rounded-5">
                <div class="card-body">
                    <div class="text-center">
                        <i class="fas fa-user-alt col-1 ikon" style="font-size: 30px; line-height:30px;"></i>
                        <div class="card-text text-center">
                            Estimasi Total Jumlah Wisatawan
                        </div>
                        <div>
                            <div class="" style="color: #4b395f; font-size: 50px;"><strong>2180</strong></div>orang 
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
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModalfg2">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt-1" id=""></canvas>
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
                        <button id="" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="">
                            <i class="fa-solid fa-download"></i>
                        </button>
                    </div>
                </div>
                <div id="petatematik1" style="width: 95%; height:80vh; z-index:0;"></div>
            </div>
        </div>
    </div>
</div>

<!-- Tab 2 new -->
<div class="portfolio-item filter-riset2-hasiltujuan1-2">
    <div class="row mt-3">
        <div class="col-sm-4 my-2 ">
            <div class="card shadow rounded-5">
                <div class="card-body">
                    <div class="text-center">
                        <i class="fas fa-user-alt col-1 ikon" style="font-size: 30px; line-height:30px;"></i>
                        <div class="card-text text-center">
                            Estimasi Total Jumlah Perjalanan
                        </div>
                        <div>
                            <div class="" style="color: #4b395f; font-size: 50px;"><strong>2180</strong></div>perjalanan 
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
                            <button id="unduh-2-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt-1" id="t1_sankey"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5 mt-2">
        <div class="card d-flex justify-content-center flex-column align-item-center flex-md primary pb-5 pt-5 shadow rounded-5">
            <p class="card-text text-center">
                <strong>Jumlah Perjalanan dalam Kota Malang menurut Kecamatan Asal <br>Wisatawan di Kota Malang Bulan Oktober-Desember 2022</strong>
            </p>
            <div class="d-flex flex-row align-item-center justify-content-center">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                    <div class="me-1 mt-1 justify-content-end align-item-end">
                        <button id="" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="">
                            <i class="fa-solid fa-download"></i>
                        </button>
                    </div>
                </div>
                <div id="petatematik2" style="width: 95%; height:80vh; z-index:0;"></div>
            </div>
        </div>
    </div>
</div>

<!-- Tab 3 new -->
<div class="portfolio-item filter-riset2-hasiltujuan1-3">
    <div class="row mt-3">
        <div class="col-sm-5 my-2">
            <div class="card shadow rounded-5">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-2-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt-1" id="t1_pie"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value1(this);" type="checkbox" id="forPieChartLegend" value="show">
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legend</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-7 my-2">           
            <div class="card d-flex justify-content-center flex-column align-item-center flex-md primary pb-5 pt-5 shadow rounded-5">
                <div class="d-flex flex-row align-item-center justify-content-center">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-2-3" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt-1" id="t1_twowaybar"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value2(this);" type="checkbox" id="forBarChartLegend" value="show">
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legend</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tab 2 -->
<!-- <div class="portfolio-item filter-riset2-hasiltujuan1-2">
    <div class="container mt-5 mb-5">
        <div class="card d-flex justify-content-center flex-column align-item-center flex-md primary pb-5 pt-5 shadow">
            <p class="card-text text-center">
                <strong>Jumlah Perjalanan dalam Kota Malang menurut Kecamatan Asal Wisatawan di Kota Malang Bulan Oktober-Desember 2022</strong>
            </p>
            <div class="d-flex flex-row align-item-center justify-content-center">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                    <div class="me-1 mt-1 justify-content-end align-item-end">
                        <button id="" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="">
                            <i class="fa-solid fa-download"></i>
                        </button>
                    </div>
                </div>
                <div id="petatematik2" style="width: 95%; height:80vh; z-index:0;"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-2-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt-1" id="pw_sankey"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Tab 3 -->
<!-- <div class="portfolio-item filter-riset2-hasiltujuan1-3">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-2-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt-1" id="tp_pie"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value1(this);" type="checkbox" id="forPieChartLegend" value="show">
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legend</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-2-3" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt-1" id="jp_twowaybar"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value2(this);" type="checkbox" id="forBarChartLegend" value="show">
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legend</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> -->

<!-- Modal Riset 2 -->
<?php include('modal_hp.php') ?>