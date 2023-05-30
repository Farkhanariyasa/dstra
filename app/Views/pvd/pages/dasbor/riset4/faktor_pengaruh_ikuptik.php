<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
      <h6 style="color: #4b395f;"><strong>Faktor-faktor yang memengaruhi IKUPTIK</i></strong>
      </h6>
    </header>
    <hr class="hrjudul">
    <!-- Charts and Interpretations -->
    <div class="portfolio-item filter-riset4-semua" onresize="responsivefonts()">
    <div class="isi-tujuan shadow mt-0 mb-0">
        <h4 class="card-title judul-card">Faktor-Faktor yang Memengaruhi IKUPTIK</h4>
        <div class="card-body">
            <div class="row">
            <!-- Part 1 -->
            <div class="col-12 grid-margin stretch-card">
              <div class="card shadow">
                  <div class="pb-2 card-body">
                      <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                          <div class="me-1 mt-1 justify-content-end align-item-end">
                              <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                  <i class="fa-solid fa-download"></i>
                              </button>
                          </div>
                      </div>
                      <div class="row">
                          <!-- Judul -->
                          <!-- <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                              <div>
                                  <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                  Persentase Pemilik atau Pengelola Unit Usaha Pariwisata di Kota Batu</h1>
                                  <subtitle>Berdasarkan Jenis Kelamin dan Kelompok Usia</subtitle>
                              </div>
                          </div> -->
                          <div class="mb-0 col-lg-12 grid-margin">
                              <div>
                                  <div class = "chartBox"> 
                                    <img src="<?= base_url('pvd/img/dasbor/riset4/octopus_chart.jpg') ?>" class="img-fluid" alt="" style="height: 300px;">
                                  </div>
                              </div>
                          </div>
                          <div class="mt-1 mb-0 col-lg-12 grid-margin stretch-card">
                              <div>
                                  <h4>Interpretasi Disini</h4>
                                  <p class="text-justify">
                                      Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
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
            </div>
        </div>
    </div>
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

  <!-- Data Chart -->

  <!-- Import Chart -->

  <!-- Fungsi Unduh Chart -->
  <script src="<?= base_url('pvd/js/riset4/btn_Download.js') ?>"></script>
</section>

<?= $this->endSection(); ?>