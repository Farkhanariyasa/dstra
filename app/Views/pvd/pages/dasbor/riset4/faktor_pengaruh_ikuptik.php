<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
      <h6 style="color: #4b395f;"><strong>Faktor-Faktor yang Memengaruhi IKUPTIK</i></strong>
      </h6>
    </header>
    <hr class="hrjudul">
    <!-- Charts and Interpretations -->
    <div class="portfolio-item" onresize="responsivefonts()">
    <div class="row">
        <!-- Part A -->
        <div class="col-12 grid-margin stretch-card">
            <div class="card shadow rounded-4">
                <div class="pb-2 card-body">
                    <div class="row">
                        <!-- <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                            <div>
                                <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                    Pemanfaatan TIK Pada Unit Usaha Pariwisata</h1>
                                <subtitle>Berdasarkan Jenis Usaha Pariwisata</subtitle>
                            </div>
                        </div> -->
                        <div class="mb-0 col-lg-12 grid-margin">
                            <div>
                                <div class="chartBox" style="">
                                <img id="viz-1" src="<?= base_url('pvd/img/dasbor/riset4/faktor_pengaruh.png') ?>" class="img-fluid" alt="" style="max-width: 100%; height: auto;">
                                </div>
                            </div>
                        </div>
                        <div class="mb-0 col-lg-12 grid-margin stretch-card">
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
    </div>
  </div>
  <!-- Modal faktor pengaruh ikuptik -->
  <?php include('modal_faktor_pengaruh_ikuptik.php') ?>
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
  <script src="<?= base_url('pvd/js/riset4/button_download_5.js') ?>"></script>
</section>

<?= $this->endSection(); ?>