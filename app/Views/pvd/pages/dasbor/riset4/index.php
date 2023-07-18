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
        <?php include('dasbor_riset4.php') ?>
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
      const uupKotaBatu = <?= json_encode($uupKotaBatu) ?>;    
      const uupKecBatu = <?= json_encode($uupKecBatu) ?>;    
      const uupKecJunrejo = <?= json_encode($uupKecJunrejo) ?>;    
      const uupKecBumiaji = <?= json_encode($uupKecBumiaji) ?>;
      const uupKotaBatuProduksi = <?= json_encode($uupKotaBatuProduksi) ?>;    
      const uupKecBatuProduksi = <?= json_encode($uupKecBatuProduksi) ?>;    
      const uupKecJunrejoProduksi = <?= json_encode($uupKecJunrejoProduksi) ?>;    
      const uupKecBumiajiProduksi = <?= json_encode($uupKecBumiajiProduksi) ?>;
      const uupKotaBatuSkala = <?= json_encode($uupKotaBatuSkala) ?>;    
      const uupKecBatuSkala = <?= json_encode($uupKecBatuSkala) ?>;    
      const uupKecJunrejoSkala = <?= json_encode($uupKecJunrejoSkala) ?>;    
      const uupKecBumiajiSkala = <?= json_encode($uupKecBumiajiSkala) ?>;
      const ikuptikPerDimensi = <?= json_encode($ikuptikPerDimensi) ?>;
      const tingkatPendidikan = <?= json_encode($tingkatPendidikan) ?>;
      const pemanfaatanTik = <?= json_encode($pemanfaatanTik) ?>;
      const pemanfaatanTikJenis = <?= json_encode($pemanfaatanTikJenis) ?>;
      const pemanfaatanTikSkala = <?= json_encode($pemanfaatanTikSkala) ?>;
      const pemanfaatanTikKegiatan = <?= json_encode($pemanfaatanTikKegiatan) ?>;
      const usiaPemilikPengelola = <?= json_encode($usiaPemilikPengelola) ?>;
    </script>

    <!-- Import Chart -->
    <script src="<?= base_url('pvd/js/riset4/doughnut_kota_batu.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/pie_kota_batu_skala.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/peta_batu_ikuptik.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/layer_dasar_peta_batu.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/bar_kota_batu_pendidikan.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/pie_kota_batu_pemanfaatan.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/bar_kota_batu_pemanfaatan.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/gantt_jenis_kelamin_usia.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dasbor_doughnut_6.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dasbor_doughnut_7.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dasbor_doughnut_8.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dasbor_doughnut_9.js') ?>"></script>

    <!-- Fungsi Unduh Chart -->
    <script src="<?= base_url('pvd/js/riset4/button_download_1.js') ?>"></script>
  </section>
<?= $this->endSection(); ?>