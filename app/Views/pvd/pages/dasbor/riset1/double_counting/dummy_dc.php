<div class="portfolio-item filter-riset1-hasil1" onresize="responsivefonts()">
    <div class="col-12 grid-margin stretch-card">
        <div class="card shadow">
            <div class="card-body">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                    <div class="selectBox mt-2 me-2">
                        <form action="">
                            <select class="dropdownunduh1 w-100" id="forBarChart">
                                <option value="a">Jumlah ART Melakukan Perjalanan Wisata</option>
                                <option value="b">Jenis Kelamin</option>
                            </select>
                        </form>
                    </div>
                    <div class="me-1 mt-1 justify-content-end align-item-end">
                        <button id="unduh-1-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-download"></i>
                        </button>
                    </div>
                </div>
                <div style=" height:500px;">
                    <canvas class="mt1" id="riset1_hasil1"></canvas>
                </div>

                <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                    <div class="form-check form-switch me-3">
                        <input class="form-check-input" onchange="update_value2(this);" type="checkbox" id="forPieChartLegend" value="show" checked>
                        <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                    </div>
                </div>
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


<div class="portfolio-item filter-riset1-hasil2" onresize="responsivefonts()">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-1-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt1" id="riset1_hasil2"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value_mpw(this);" type="checkbox" id="forBarChartAxis_mpw" value="show" checked>
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Sumbu</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-6 my-2">
            <div class="card shadow">
                <div class="card-body">
                    <p class="card-text text-center">Grafik<br><br>
                    <h2 class="text-center">Python script <a href="<?= base_url('/hasil-pkl/riset1/python-script') ?>">kesini</a></h2>
                    <br><br><br><br><br><br><br><br><br></p>
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
    </div>
</div>


<div class="portfolio-item filter-riset1-hasil3" onresize="responsivefonts()">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-1-3" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt1" id="riset1_hasil3"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value_sim(this);" type="checkbox" id="forBarChartAxis_sim" value="show" checked>
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Sumbu</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
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
    </div>
</div>

<div class=" portfolio-item filter-riset1-hasil4" onresize="responsivefonts()">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-1-4" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt1" id="riset1_hasil4"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value_stack(this);" type="checkbox" id="forBarChartAxis_stack" value="show" checked>
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Sumbu</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class=" portfolio-item filter-riset1-hasil5" onresize="responsivefonts()">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4">
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
</div>

<div class=" portfolio-item filter-riset1-hasil5" onresize="responsivefonts()">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div>
                        <iframe src="https://kepler.gl/#/demo?mapUrl=https://raw.githubusercontent.com/giswqs/leafmap/master/examples/data/world_cities.geojson"
                            style="width:100%; height:500px;"
                            ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal Riset 1 -->
<?php include('modal_dc.php') ?>