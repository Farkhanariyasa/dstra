<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
      <h6 style="color: #4b395f;"><strong>Faktor-faktor yang Memengaruhi Indeks Kesiapan Unit Usaha Pariwisata dalam Pemanfaatan TIK (IKUPTIK)</i></strong>
      </h6>
    </header>
    <hr class="hrjudul">
    <!-- Charts and Interpretations -->
    <div class="portfolio-item" onresize="responsivefonts()">
    <div class="row">
        <!-- Part A -->
        <div class="col-12 grid-margin stretch-card">
            <div class="card shadow rounded-4">
                <div class="px-0 py-1 card-body">
                    <div class="row">
                        <div class="mb-0 col-lg-12 grid-margin">
                            <div>
                                <div class="chartBox text-center mt-3">
                                <img id="viz-1" src="<?= base_url('pvd/img/dasbor/riset4/faktor_pengaruh.png') ?>" class="img-fluid text-center" alt="" style="width: auto; height: auto;">
                                </div>
                            </div>
                        </div>
                            <div class="accordion" id="accordionExample">
                                <!-- Faktor 1 -->
                                <div class="accordion-item my-3 mx-4 rounded-5 shadow">
                                    <h3 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <span class="fa-solid fa-users-gear pe-2"></span>
                                        Jumlah Tenaga Kerja
                                    </button>
                                    </h3>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Jika jumlah tenaga kerja bertambah satu orang, akan meningkatkan kesiapan unit usaha pariwisata dalam memanfaatkan TIK sebesar 1,078 secara rata-rata dengan asumsi bahwa variabel lain konstan.</p>
                                    </div>
                                    </div>
                                </div>

                                <!-- Faktor 2 -->
                                <div class="accordion-item my-3 mx-4 rounded-5 shadow">
                                    <h3 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="fa-solid fa-user-graduate pe-2"></span>
                                        Tingkat Pendidikan Pemilik/Pengelola 
                                    </button>
                                    </h3>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Jika capaian pendidikan pemilik/pengelola bertambah satu jenjang (maksimal lulusan SD &#8594; lulusan SMP dan SMA &#8594; sarjana), akan meningkatkan kesiapan unit usaha pariwisata dalam memanfaatkan TIK sebesar 7,790 secara rata-rata dengan asumsi bahwa variabel lain konstan.</p>      
                                    </div>
                                    </div>
                                </div>

                                <!-- Faktor 3 -->
                                <div class="accordion-item my-3 mx-4 rounded-5 shadow">
                                    <h3 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span class="fa-solid fa-calendar-week pe-2"></span>
                                        Usia Pemilik/Pengelola
                                    </button>
                                    </h3>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Jika usia pemilik/pengelola bertambah satu tahun, akan menurunkan kesiapan unit usaha pariwisata dalam memanfaatkan TIK sebesar 0,415 secara rata-rata dengan asumsi bahwa variabel lain konstan.</p>
                                    </div>
                                    </div>
                                </div>

                                <!-- Faktor 4 -->
                                <div class="accordion-item my-3 mx-4 rounded-5 shadow">
                                    <h3 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span class="fa-solid fa-venus-mars pe-2"></span>
                                        Jenis Kelamin Pemilik/Pengelola
                                    </button>
                                    </h3>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Pemilik/pengelola yang berjenis kelamin perempuan secara rata-rata akan memiliki kesiapan sebesar 1,932 lebih rendah dibandingkan laki-laki dengan asumsi bahwa variabel lain konstan.</p>
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

  <!-- Fungsi Unduh Chart -->
  <script src="<?= base_url('pvd/js/riset4/button_download_5.js') ?>"></script>
</section>

<?= $this->endSection(); ?>