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


<!-- Modal Riset 4  -->
<?php include('modal_riset4.php') ?>