<?= $this->extend('pvd/layout/dasbor/template'); ?>
  <?= $this->section('content'); ?>
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">
        <header class="section-header">
          <h6 style="color: #4b395f;"><strong>Kesiapan Pemanfaatan TIK Unit Usaha Pariwisata Skala Mikro dan Kecil di Kota Batu dalam Menerapkan
              <i>Smart Tourism Destination</i></strong>
          </h6>
        </header>
        <hr class="hrjudul">

        <div class="row portfolio-container">
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
          <style>
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
        </style>

        <!-- Charts and Interpretations Batch 1 -->
        <div class="portfolio-item filter-riset4-semua" onresize="responsivefonts()">
            <div class="isi-tujuan shadow mt-0 mb-0">
                <h4 class="card-title judul-card">Statistik Pemanfaatan TIK</h4>
                <div class="card-body">
                    <div class="row">
                        <!-- Part 1 -->
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
                                                Pemanfaatan TIK Pada Unit Usaha Pariwisata</h1>
                                                <subtitle>Berdasarkan Jenis Usaha Pariwisata</subtitle>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="viz-2-3-1-A"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="viz-2-3-1-B"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin stretch-card">
                                            <div>
                                                <h4>Lorem ipsum is placeholder text commonly used in the graphic</h4>
                                                <p class="text-justify">
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Part 2 -->
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
                                                Pemanfaatan TIK Pada Unit Usaha Pariwisata</h1>
                                                <subtitle>Berdasarkan Jenis Skala Usaha</subtitle>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="viz-2-3-2-A"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="viz-2-3-2-B"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin stretch-card">
                                            <div>
                                                <h4>Lorem ipsum is placeholder text commonly used in the graphic</h4>
                                                <p class="text-justify">
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Part 3 -->
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
                                                Pemanfaatan TIK Pada Unit Usaha Pariwisata</h1>
                                                <subtitle>Berdasarkan Jenis Perangkat Digital yang Dimiliki dan Digunakan</subtitle>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="viz-2-3-3-A"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="viz-2-3-3-B"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin stretch-card">
                                            <div>
                                                <h4>Lorem ipsum is placeholder text commonly used in the graphic</h4>
                                                <p class="text-justify">
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Part 4 -->
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
                                                Pemanfaatan TIK Pada Unit Usaha Pariwisata</h1>
                                                <subtitle>Berdasarkan Jenis Aplikasi Komunikasi yang Digunakan</subtitle>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="viz-2-3-4-A"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="viz-2-3-4-B"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin stretch-card">
                                            <div>
                                                <h4>Lorem ipsum is placeholder text commonly used in the graphic</h4>
                                                <p class="text-justify">
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Part 5 -->
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
                                                Pemanfaatan TIK Pada Unit Usaha Pariwisata</h1>
                                                <subtitle>Berdasarkan Jenis Kegiatan Pemanfaatan</subtitle>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="viz-2-3-5-A"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="viz-2-3-5-B"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin stretch-card">
                                            <div>
                                                <h4>Lorem ipsum is placeholder text commonly used in the graphic</h4>
                                                <p class="text-justify">
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Part 6 -->
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="pb-2 card-body">
                                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                        <div class="me-1 mt-1 justify-content-end align-item-end">
                                            <button id="download-6" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-6">
                                                <i class="fa-solid fa-download"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                            <div>
                                                <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Pemanfaatan TIK Pada Unit Usaha Pariwisata</h1>
                                                <subtitle>Berdasarkan Sarana Promosi</subtitle>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="viz-2-3-6-A"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="viz-2-3-6-B"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin stretch-card">
                                            <div>
                                                <h4>Lorem ipsum is placeholder text commonly used in the graphic</h4>
                                                <p class="text-justify">
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Part 7 -->
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
                                                <subtitle>Berdasarkan Sarana Penjualan</subtitle>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="viz-2-3-7-A"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="viz-2-3-7-B"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin stretch-card">
                                            <div>
                                                <h4>Lorem ipsum is placeholder text commonly used in the graphic</h4>
                                                <p class="text-justify">
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Part 8 -->
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card shadow">
                                <div class="pb-2 card-body">
                                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                        <div class="me-1 mt-1 justify-content-end align-item-end">
                                            <button id="download-8" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-8">
                                                <i class="fa-solid fa-download"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                            <div>
                                                <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Pemanfaatan TIK Pada Unit Usaha Pariwisata</h1>
                                                <subtitle>Berdasarkan Jenis Pembayaran</subtitle>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="viz-2-3-8-A"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="viz-2-3-8-B"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-4 grid-margin stretch-card">
                                            <div>
                                                <h4>Lorem ipsum is placeholder text commonly used in the graphic</h4>
                                                <p class="text-justify">
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

        <!-- Modal Dasbor -->
        <?php include('modal_pemanfaatan_tik.php') ?>
        </div>
      </div>
    </section>

    <section>
      <!-- Istope -->
      <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
      <!-- Leaflet JS -->
      <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
      <!-- Chart JS -->
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- Chart JS Plugin Boxplotchart -->
      <script src="https://unpkg.com/@sgratzl/chartjs-chart-boxplot"></script>
      <!-- Highchartjs  -->
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <!-- Highchartjs Heatmap -->
      <script src="https://code.highcharts.com/modules/heatmap.js"></script>
      <!--  Highchartjs Plugin -->
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script src="https://code.highcharts.com/modules/export-data.js"></script>
      <script src="https://code.highcharts.com/modules/accessibility.js"></script>

      <!-- Data Chart -->
      <script>
        // const uupKotaBatu = < ?= json_encode($uupKotaBatu) ?>;
        const uupStatusMemanfaatkan = <?= json_encode($uupStatusMemanfaatkan) ?>;    
        const uupStatusMemanfaatkanJenis = <?= json_encode($uupStatusMemanfaatkanJenis) ?>;    
        const uupStatusMemanfaatkanJenisSkala = <?= json_encode($uupStatusMemanfaatkanJenisSkala) ?>;    
      </script>

      <!-- Import Chart -->
      <script src="<?= base_url('pvd/js/riset4/kuuu_3_1_A_doughnut.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/kuuu_3_1_B_doughnut.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/kuuu_3_2_A_doughnut.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/kuuu_3_2_B_doughnut.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/kuuu_3_3_A_doughnut.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/kuuu_3_3_B_bar.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/kuuu_3_4_A_doughnut.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/kuuu_3_4_B_bar.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/kuuu_3_5_A_doughnut.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/kuuu_3_5_B_bar.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/kuuu_3_6_A_doughnut.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/kuuu_3_6_B_bar.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/kuuu_3_7_A_doughnut.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/kuuu_3_7_B_bar.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/kuuu_3_8_A_doughnut.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/kuuu_3_8_B_bar.js') ?>"></script>

      <!-- Fungsi Unduh Chart -->
      <script src="<?= base_url('pvd/js/riset4/button_download_2_3.js') ?>"></script>
    </section>
  <?= $this->endSection(); ?>