<!-- Visualisasi 1 -->
<div class="portfolio-item filter-riset2-hasil1">
    <!-- <div class="row mt-5">
        <div class="col-sm-6 my-2">
            <div class="card">
                <div class="card-body">
                    <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 my-2">
            <div class="card">
                <div class="card-body">
                    <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
                </div>
            </div>
        </div>
    </div> -->

    <div class="row mt-3">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0 end-0 d-flex flex-row justify-content-center align-item-center ">
                        <!-- <div class="selectBox mt-2 me-2">
                            <form action="">
                                <select class="dropdownunduh1" id="forBarChart">
                                    <option value="a">Jenis Industri</option>
                                    <option value="b">Pendidikan Tertinggi</option>
                                    <option value="c">Jenis Kelamin</option>
                                </select>
                            </form>
                        </div> -->
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-3-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="chartBox" style="height:500px;">
                        <canvas class="mt1" id="pw_sankey"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Visualisasi 2 -->
<div class="portfolio-item filter-riset2-hasil2">
    <!-- <div class="row mt-5">
        <div class="col-sm-6 my-2">
            <div class="card">
                <div class="card-body">
                    <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 my-2">
            <div class="card">
                <div class="card-body">
                    <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
                </div>
            </div>
        </div>
    </div> -->

    <div class="row mt-3">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0 end-0 d-flex flex-row justify-content-center align-item-center ">
                        <!-- <div class="selectBox mt-2 me-2">
                            <form action="">
                                <select class="dropdownunduh1" id="forBarChart">
                                    <option value="a">Jenis Industri</option>
                                    <option value="b">Pendidikan Tertinggi</option>
                                    <option value="c">Jenis Kelamin</option>
                                </select>
                            </form>
                        </div> -->
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-3-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>

                    <div style=" height:500px;">
                        <canvas class="mt1" id="jk_bar"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Visualisasi 3 -->
<div class="portfolio-item filter-riset2-hasil3">
    <!-- <div class="row mt-5">
        <div class="col-sm-6 my-2">
            <div class="card">
                <div class="card-body">
                    <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 my-2">
            <div class="card">
                <div class="card-body">
                    <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
                </div>
            </div>
        </div>
    </div> -->

    <div class="row mt-3">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0 end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="selectBox mt-2 me-2">
                            <form action="">
                                <select class="dropdownunduh1" id="forBarChart">
                                    <option value = 1>Jenis Pekerjaan Utama</option>
                                    <option value = 2>Tingkat Pendidikan Tertinggi</option>
                                </select>
                            </form>
                        </div>

                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-3-3" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>

                    <div style=" height:500px;">
                        <canvas class="mt1" id="bar_horizontal"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Visualisasi 4 -->
<div class="portfolio-item filter-riset2-peta" onresize="responsivefonts()">
    <div class="container mt-5">
        <div class="card d-flex justify-content-center flex-column align-item-center flex-md primary pb-5 pt-5 ">
            <p class="card-text text-center">
                <strong>Kota Malang</strong>
            </p>
            <div class="d-flex flex-row align-item-center justify-content-center">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                    <div class="me-1 mt-1 justify-content-end align-item-end">
                        <button id="unduh-3-4" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                            <i class="fa-solid fa-download"></i>
                        </button>
                    </div>
                </div>
                <div id="peta_malang" style="width: 95%; height:80vh;"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Riset 2  -->
<?php include(APPPATH . 'Views/pvd/pages/dasbor/riset2/modal_riset2.php') ?>