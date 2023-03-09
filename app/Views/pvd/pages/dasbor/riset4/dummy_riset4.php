<!-- Riset 4 Hasil DOughnut -->
<div class="portfolio-item filter-riset4-hasil1">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="selectBox mt-2 me-2">
                            <form action="">
                                <select class="dropdownunduh1" id="pieChart">
                                    <option value="uu">Unit Usaha</option>
                                    <option value="b401a">Adanya Gadget</option>
                                    <option value="b407a">Pemanfaatan TIK</option>
                                </select>
                            </form>
                        </div>
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div class="chartBox" style=" height:500px;">
                        <canvas class="mt1" id="hasil1"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value(this);" type="checkbox" id="pieChartLegend" value="show" checked>
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                        </div>
                        <!-- <input type="radio" name="forPieChartLegend" value="tampil">Tampil
                        <input type="radio" name="forPieChartLegend" value="tidak">Tidak Tampil -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>




<!-- Riset 4 Hasil Boxplot -->

<body onresize="responsivefonts()">
    <div class="portfolio-item filter-riset4-hasil2">
        <div class="col-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-boxplot">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas id="hasil2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Riset 4 Hasil ScatterPlot -->

<body onresize="responsivefonts()">
    <div class="portfolio-item filter-riset4-hasil4">
        <div class="col-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-scatter">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas id="hasil4"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Riset 4 Hasil Bar Plot -->

<body onresize="responsivefonts()">
    <div class="portfolio-item filter-riset4-hasil5">
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
                    <div style=" height:500px;">
                        <canvas id="hasil5"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Riset 4 Hasil Heat Map -->

<body onresize="responsivefonts()">
    <div class="portfolio-item filter-riset4-hasil6">
        <div class="col-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <!-- <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-heatmap">
                                <i class="fa-solid fa-download"></i>
                            </button> -->
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <figure class="heatmap-figure">
                            <div id="container"></div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Riset 4 Hasil Peta Batu -->

<body onresize="responsivefonts()">
    <div class="portfolio-item filter-riset4-hasil7">
        <div class="col-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <p class="card-text text-center">Kota Batu</p>
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <!-- <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-peta">
                                <i class="fa-solid fa-download"></i>
                            </button> -->
                        </div>
                    </div>
                    <div id="map" style="width: 95%; height:50vh;"></div>
                </div>
            </div>
        </div>
    </div>
</body>

<div class="portfolio-item filter-riset4-hasil8">
    <!-- Visualisasi 1.5 -->
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-3-5" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-radar">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div class="chartBox">
                        <canvas id="radar" style="width: 95%; height:80vh;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dodge Bar Chart: SDM -> Ekonomi -->
<div class="portfolio-item filter-riset4-hasil10" onresize="responsivefonts()">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-boxplot">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt1" id="sdm-ekonomi"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3 m-10">
                            <input class="form-check-input" onchange="update_value_axis_dodge_bar_sdm_ekonomi(this);" type="checkbox" id="forDodgeBarSdmEkonomiAxis" value="show" checked>
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Sumbu</label>
                        </div>
                        <div class="form-check form-switch me-3 m-10">
                            <input class="form-check-input" onchange="update_value_legend_dodge_bar_sdm_ekonomi(this);" type="checkbox" id="forDodgeBarSdmEkonomiLegend" value="show" checked>
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-item filter-riset4-hasil11" onresize="responsivefonts()">
    <div class="container mt-5 mb-5">
        <div class="card d-flex justify-content-center flex-column align-item-center flex-md primary pb-5 pt-5 shadow">
            <p class="card-text text-center">
                <strong>Kota Malang</strong>
            </p>
            <div class="d-flex flex-row align-item-center justify-content-center">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                    <div class="me-1 mt-1 justify-content-end align-item-end">
                        <button id="" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="">
                            <i class="fa-solid fa-download"></i>
                        </button>
                    </div>
                </div>
                <div id="peta1111" style="width: 95%; height:80vh;"></div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-item filter-riset4-hasil12" onresize="responsivefonts()">
    <div class="container mt-5 mb-5">
        <div class="card d-flex justify-content-center flex-column align-item-center flex-md primary pb-5 pt-5 shadow">
            <p class="card-text text-center">
                <strong>Persentase UUP yang Menggunakan TIK dalam Kegiatan Usaha</strong>
            </p>
            <div class="d-flex flex-row align-item-center justify-content-center">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                    <div class="me-1 mt-1 justify-content-end align-item-end">
                        <button id="" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="">
                            <i class="fa-solid fa-download"></i>
                        </button>
                    </div>
                </div>
                <div id="peta-batu" style="width: 95%; height:80vh;"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Riset 4  -->
<?php include('modal_riset4.php') ?>