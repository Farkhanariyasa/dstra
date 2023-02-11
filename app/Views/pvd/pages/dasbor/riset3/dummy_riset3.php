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
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div class="chartBox">
                        <canvas class="mt1" id="tk_pie"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value(this);" type="checkbox" id="forPieChartLegend" value="show" checked>
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Show Legend</label>
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
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div class="chartBox">
                        <canvas id="j_doughnut" style="width: 95%; height:80vh;"></canvas>
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
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4">
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
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal5">
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

<div class=" portfolio-item filter-riset3-peta" onresize="responsivefonts()">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title text-center">Peta Kabupaten Malang</h4>
                    <div class="d-flex flex-row align-item-center justify-content-center">
                        <div class="position-absolute top-0 end-0 d-flex flex-row justify-content-center align-item-center">
                            <div class="me-1 mt-1 justify-content-end align-item-end">
                                <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-download"></i>
                                </button>
                            </div>
                        </div>
                        <div id="map" style="width: 95%; height:80vh;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tabel dummy
<div class="portfolio-item filter-riset3-tabeldummy">
    <div class="">
        <table id="example" class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Tingkat</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
            </tbody>
        </table>
    </div><br><br>
    <div id="map" class="mt-4"></div>            
</div> -->


<!-- Modal Riset 3  -->
<?php include('modal_riset3.php') ?>