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

<div class="portfolio-item filter-riset4-semua" onresize="responsivefonts()">
    <div class="isi-tujuan shadow mt-0 mb-0">
        <h4 class="card-title judul-card"><i>Dashboard</i> &nbsp; Unit Usaha Pariwisata (UUP) Kota Batu</h4>

        <div class="card-body">
            <div class="row">
                <!-- Part 1 - gantt chart -->
                <div class="col-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="pb-2 card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button id="download-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-1">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                    <div>
                                        <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                        Rentang Usia (Tahun) Pemilik atau Pengelola Unit Usaha Pariwisata di Kota Batu</h1>
                                        <subtitle>Berdasarkan Jenis Kelamin</subtitle>
                                    </div>
                                </div>
                                <div class="mb-0 col-lg-12 grid-margin">
                                    <div>
                                        <div class = "chartBox" style=" height:300px;"> 
                                            <canvas id="chart-1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="pb-2 card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button id="download-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-2">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                    <div>
                                        <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                        Pemilik atau Pengelola Unit Usaha Pariwisata di Kota Batu</h1>
                                        <subtitle>Berdasarkan Tingkat Pendidikan</subtitle>
                                    </div>
                                </div>
                                <div class="mb-0 col-lg-12 grid-margin">
                                    <div>
                                        <div class = "chartBox" style=" height:300px;"> 
                                            <canvas id="chart-2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="pb-2 card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button id="download-3" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-3">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                    <div>
                                        <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                        Persentase Unit Usaha Pariwisata di Kota Batu</h1>
                                        <subtitle>Berdasarkan Jenis Usaha Pariwisata</subtitle>
                                    </div>
                                </div>
                                <div class="mb-0 col-lg-12 grid-margin">
                                    <div>
                                        <div class = "chartBox" style=" height:300px;"> 
                                            <canvas id="chart-3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="pb-2 card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button id="download-4" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-4">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                    <div>
                                        <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                        Persentase Unit Usaha Pariwisata di Kota Batu</h1>
                                        <subtitle>Berdasarkan Skala Usaha</subtitle>
                                    </div>
                                </div>
                                <div class="mb-0 col-lg-12 grid-margin">
                                    <div>
                                        <div class = "chartBox" style=" height:300px;"> 
                                            <canvas id="chart-4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="pb-2 card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button id="download-5" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-5">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                    <div>
                                        <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                        Persentase Unit Usaha Pariwisata di Kota Batu</h1>
                                        <subtitle>Berdasarkan Status Pemanfaatan TIK</subtitle>
                                    </div>
                                </div>
                                <div class="mb-0 col-lg-12 grid-margin">
                                    <div>
                                        <div class = "chartBox" style=" height:300px;"> 
                                            <canvas id="chart-5"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Part 5.1 - doughnut 1-->
                <div class="col-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="pb-2 card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button id="download-7" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-7">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                    <div>
                                        <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                        Pemanfaatan TIK Pada Unit Usaha Pariwisata</h1>
                                        <subtitle>Berdasarkan Jenis Usaha Pariwisata</subtitle>
                                    </div>
                                </div>
                                <div class="mb-0 col-lg-6 grid-margin">
                                    <div>
                                        <div class = "chartBox" style=" height:300px;"> 
                                            <canvas id="chart-6"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-0 col-lg-6 grid-margin">
                                    <div>
                                        <div class = "chartBox" style=" height:300px;"> 
                                            <canvas id="chart-7"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Part 5.2 - doughnut 2-->
                <div class="col-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="pb-2 card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button id="download-9" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-9">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                    <div>
                                        <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                        Pemanfaatan TIK Pada Unit Usaha Pariwisata</h1>
                                        <subtitle>Berdasarkan Skala Usaha</subtitle>
                                    </div>
                                </div>
                                <div class="mb-0 col-lg-6 grid-margin">
                                    <div>
                                        <div class = "chartBox" style=" height:300px;"> 
                                            <canvas id="chart-8"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-0 col-lg-6 grid-margin">
                                    <div>
                                        <div class = "chartBox" style=" height:300px;"> 
                                            <canvas id="chart-9"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Part 6 - kegiatan pemanfaatan-->
                <div class="col-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="pb-2 card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button id="download-10" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-10">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                    <div>
                                        <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                        Pemanfaatan TIK pada Unit Usaha Pariwisata</h1>
                                        <subtitle>Berdasarkan Kegiatan Pemanfaatannya</subtitle>
                                    </div>
                                </div>
                                <div class="mb-0 col-lg-12 grid-margin">
                                    <div>
                                        <div class = "chartBox" style=" height:300px;"> 
                                            <canvas id="chart-10"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Part 7 - map ikuptik-->
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card d-flex justify-content-center flex-column align-item-center flex-md primary pb-5 pt-5 shadow">
                        <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                            <div style="padding-left: 2.5rem; padding-right: 2.5rem">
                                <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                IKUPTIK Unit Usaha Pariwisata di Kota Batu Per Kecamatan</h1>
                                <subtitle>
                                    <strong>
                                        <ul>
                                        <li style="float: left; margin: 0 20px;">10 &le; IKUPTIK &le; 40 (Kurang Siap)</li>
                                        <li style="float: left; margin: 0 20px;">40 &lt; IKUPTIK &le; 70 (Cukup Siap)</li>
                                        <li style="float: left; margin: 0 20px;">70 &lt; IKUPTIK &le; 100 (Siap)</li>
                                        </ul>   
                                    </strong>
                                </subtitle>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-item-center justify-content-center">
                            <div id="chart-11" style="width: 100%; height:80vh; z-index:0;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Dasbor -->
<?php include('modal_dasbor.php') ?>