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

<!-- style untuk gantt chart -->
<!-- <style>
      /* * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      } */
      /* .chartMenu {
        width: 100vw;
        height: 40px;
        background: #1A1A1A;
        color: rgba(54, 162, 235, 1);
      }
      .chartMenu p {
        padding: 10px;
        font-size: 20px;
      }
      .chartCard {
        width: 100vw;
        height: calc(100vh - 40px);
        background: rgba(54, 162, 235, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .chartBox {
        width: 700px;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgba(54, 162, 235, 1);
        background: white;
      } */
</style> -->

<div class="portfolio-item filter-riset4-semua" onresize="responsivefonts()">
    <div class="isi-tujuan shadow mt-0 mb-0">
        <h4 class="card-title judul-card"><i>Dashboard</i> &nbsp; Unit Usaha Pariwisata (UUP) Kota Batu</h4>

        <div class="card-body">
            <div class="row">

                <!-- Part 1 - gantt chart -->
                <!-- <div class="col-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class = "chartBox" style=" height:300px;"> 
                                <canvas id="gantt-kota-batu-jk-usia"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->

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

                <!-- Part 2 - bar pendidikan -->
                <!-- <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="bar-kota-batu-pendidikan"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value_legend_bar_pendidikan(this);" type="checkbox" id="bar-kota-batu-pendidikan-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

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

                <!-- Part 3 - jenis usaha -->
                <!-- <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="doughnut-kota-batu"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value_doughnut1(this);" type="checkbox" id="doughnut-kota-batu-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

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

                <!-- Part 4 - skala -->
                <!-- <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="pie-kota-batu-skala"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value1(this);" type="checkbox" id="pie-kota-batu-skala-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

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

                <!-- Part 5 - pemanfaatan -->
                <!-- <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="pie-kota-batu-pemanfaatan"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value_pemanfaatan1(this);" type="checkbox" id="pie-kota-batu-pemanfaatan-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

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

                <!-- <div class="col-lg-6 grid-margin stretch-card ">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="pie-kota-batu-pemanfaatan-jenis"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value_pemanfaatan_jenis1(this);" type="checkbox" id="pie-kota-batu-pemanfataan-jenis-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 grid-margin stretch-card ">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="pie-kota-batu-pemanfaatan-skala"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value_pemanfaatan_skala1(this);" type="checkbox" id="pie-kota-batu-pemanfaatan-skala-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

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
                <!-- <div class="col-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div style=" height:300px;">
                                <canvas id="bar-kota-batu-pemanfaatan"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->

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
                <!-- <div class="col-12 grid-margin stretch-card"> -->
                    <!-- <div class="card shadow">
                        <div class="card-body"> -->
                            <!-- <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div> -->
                            <!-- <div class="chartBox" style=" height:500px;">
                                <p class="card-text text-center">
                                    <strong>IKUPTIK Usaha Pariwisata di Kota Batu Per Kecamatan</strong>
                                </p>
                                <div class="d-flex flex-row align-item-center justify-content-center">
                                        <div class="mt1" id="peta-batu" style="width: 100%; height: 80vh; z-index: 0;"></div>
                                </div>
                            </div> -->
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card d-flex justify-content-center flex-column align-item-center flex-md primary pb-5 pt-5 shadow">
                                    <!-- <p class="card-text text-center">
                                        <strong></strong>
                                    </p> -->
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
                                        <!-- <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                                            <div class="me-1 mt-1 justify-content-end align-item-end">
                                                <button id="download-11" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-11">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div> -->
                                        <div id="chart-11" style="width: 100%; height:80vh; z-index:0;"></div>
                                    </div>
                                </div>
                            </div>
                        <!-- </div>
                    </div> -->
                <!-- </div> -->

                <!-- hapus -->
                <!-- <div class="col-lg-4 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="doughnut-kec-batu"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value_doughnut2(this);" type="checkbox" id="doughnut-kec-batu-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="doughnut-kec-junrejo"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value_doughnut3(this);" type="checkbox" id="doughnut-kec-junrejo-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="doughnut-kec-bumiaji"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value_doughnut4(this);" type="checkbox" id="doughnut-kec-bumiaji-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- hapus -->
                <!-- <div class="col-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div style=" height:300px;">
                                <canvas id="bar-kota-batu-produksi"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-lg-4 grid-margin stretch-card ">
                    <div class="card shadow rounded-4">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div style=" height:300px;">
                                <canvas id="bar-kec-batu-produksi"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-lg-4 grid-margin stretch-card ">
                    <div class="card shadow rounded-4">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div style=" height:300px;">
                                <canvas id="bar-kec-junrejo-produksi"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-lg-4 grid-margin stretch-card ">
                    <div class="card shadow rounded-4">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div style=" height:300px;">
                                <canvas id="bar-kec-bumiaji-produksi"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="pie-kota-batu-skala"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value1(this);" type="checkbox" id="pie-kota-batu-skala-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- hapus -->
                <!-- <div class="col-lg-4 grid-margin stretch-card ">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="pie-kec-batu-skala"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value2(this);" type="checkbox" id="pie-kec-batu-skala-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 grid-margin stretch-card ">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="pie-kec-junrejo-skala"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value3(this);" type="checkbox" id="pie-kec-junrejo-skala-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 grid-margin stretch-card ">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style=" height:300px;">
                                <canvas class="mt1" id="pie-kec-bumiaji-skala"></canvas>
                            </div>
                            <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" onchange="update_value4(this);" type="checkbox" id="pie-kec-bumiaji-skala-legend" value="show" checked>
                                    <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legenda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- hapus -->
                <!-- <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style="height:300px;">
                                <canvas id="bar-kota-batu-ikuptik"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                        <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style="height:300px;">
                                <canvas id="bar-kota-batu-ikuptik-jenis"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

<!-- Jasa Transportasi Wisata -->
<!-- <div class="portfolio-item filter-riset4-transportasi" onresize="responsivefonts()">
    <div class="isi-tujuan shadow mt-0 mb-0">
        <h4 class="card-title judul-card">Jasa Transportasi Wisata</h4>
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
                    <a id="tombol" href="< ?= base_url('hasil-pkl/riset1/MPD-doublecounting') ?>" class="tombol btn-for text-decoration-none">
                        <span>Selengkapnya</span>
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Jasa Penyedia Makanan dan Minuman -->
<!-- <div class="portfolio-item filter-riset4-makan " onresize="responsivefonts()">
    <div class="isi-tujuan shadow mt-0 mb-0">
        <h4 class="card-title judul-card">Jasa Penyedia Makanan dan Minuman</h4>
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
                    <a id="tombol" href="< ?= base_url('hasil-pkl/riset1/MPD-familygrouping') ?>" class="tombol btn-for text-decoration-none">
                        <span>Selengkapnya</span>
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Penyedia Akomodasi -->
<!-- <div class="portfolio-item filter-riset4-akomodasi" onresize="responsivefonts()">
    <div class="isi-tujuan shadow mt-0 mb-0">
        <h4 class="card-title judul-card">Penyedia Akomodasi</h4>
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
                    <a id="tombol" href="< ?= base_url('hasil-pkl/riset1/MPD-familygrouping') ?>" class="tombol btn-for text-decoration-none">
                        <span>Selengkapnya</span>
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Modal Dasbor -->
<?php include('modal_dasbor.php') ?>