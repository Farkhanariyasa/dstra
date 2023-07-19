<div class="portfolio-item filter-riset3-hasil1">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">

                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="selectBox mt-2 me-2">
                            <form action="">
                                <select class="dropdownunduh1" id="forBarChart">
                                    <option value="a">Jenis Industri</option>
                                    <option value="b">Pendidikan Tertinggi</option>
                                    <option value="c">Jenis Kelamin</option>
                                </select>
                            </form>
                        </div>
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-3-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>

                    <div class="chartBox bar">
                        <canvas class="mt1" id="ji_batang" style="width: 95%; height:80vh;"></canvas>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-item filter-riset3-hasil2">
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="selectBox mt-2 me-2">
                            <form action="">
                                <select class="dropdownunduh1" id="forPieChart">
                                    <option value="a">Jenis Industri</option>
                                    <option value="b">Pendidikan Tertinggi</option>
                                    <option value="c">Jenis Kelamin</option>
                                </select>
                            </form>
                        </div>
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-3-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div class="chartBox">
                        <canvas class="mt1" id="tk_pie"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value1(this);" type="checkbox" id="forPieChartLegend" value="show" checked>
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legend</label>
                        </div>
                        <!-- <input type="radio" name="forPieChartLegend" value="tampil">Tampil
                        <input type="radio" name="forPieChartLegend" value="tidak">Tidak Tampil -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="selectBox mt-2 me-2">
                            <form action="">
                                <select class="dropdownunduh1" id="forDoughnutChart">
                                    <option value="a">Jenis Industri</option>
                                    <option value="b">Pendidikan Tertinggi</option>
                                    <option value="c">Jenis Kelamin</option>
                                </select>
                            </form>
                        </div>
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-3-3" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div class="chartBox">
                        <canvas id="j_doughnut" style="width: 95%; height:80vh;"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value2(this);" type="checkbox" id="forDoughnutChartLegend" value="show" checked>
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legend</label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-item filter-riset3-hasil4">
    <!-- Visualisasi 1.4 -->
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-3-4" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div class="chartBox bar">
                        <canvas id="stacked_barchart" style="width: 95%; height:80vh;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-item filter-riset3-hasil3">
    <!-- Visualisasi 1.5 -->
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-3-5" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal5">
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


<div class="portfolio-item filter-riset3-hasil5">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div class="chartBox bar">
                        <canvas id="boxplot_chart" style="width: 95%; height:80vh;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-item filter-riset3-hasil6">
    <div class="row mt-3">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0 end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="chartBox" style="height:500px;">
                        <canvas class="mt1" id="sankey_riset3"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-item filter-riset3-hasil7">
    <div class="row mt-3">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body waffle-chart-container">
                    <div class="position-absolute top-0 end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="selectBox mt-2 me-2">
                            <form action="">
                                <select class="dropdownunduh1" id="forWaffleChart">
                                    <option value="BA" name="radio-class">Jenis Industri</option>
                                    <option value="BEng" name="radio-class">Pendidikan Tertinggi</option>
                                    <option value="BMus" name="radio-class">Jenis Kelamin</option>
                                </select>
                            </form>
                        </div>
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <h4 class="card-title">Average number of <span id="degreeValue">BA</span> students per accommodation type</h4>
                    <div class="radio-buttons-container">
                        <div class="class-radio class-radio-inline">
                        <input type="radio" id="radio-BA" name="radio-class" value="BA" checked/>
                            <label for="radio-BA">BA</label>
                        </div>
                        <div class="class-radio class-radio-inline">
                            <input type="radio" id="radio-BEng" name="radio-class" value="BEng" />
                            <label for="radio-BEng">BEng</label>
                        </div>
                        <div class="class-radio class-radio-inline">
                            <input type="radio" id="radio-BMus" name="radio-class" value="BMus" />
                            <label for="radio-BMus">BMus</label>
                        </div>
                        <div class="class-radio class-radio-inline">
                            <input type="radio" id="radio-BSc" name="radio-class" value="BSc" />
                            <label for="radio-BSc">BSc</label>
                        </div>
                        <div class="class-radio class-radio-inline">
                            <input type="radio" id="radio-LLB" name="radio-class" value="LLB" />
                            <label for="radio-LLB">LLB</label>
                        </div>
                    </div>
                    <div class="chartBox" style="height:600px;">
                        <div class="mt1" id="waffle-charts"></div>
                        <br>
                        <div id="legend"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal Riset 3  -->
<?php include('modal_riset3.php') ?>