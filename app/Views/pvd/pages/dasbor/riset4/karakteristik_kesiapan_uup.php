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
    <?php include('grafik_karakteristik_kesiapan_uup.php') ?>
  </div>

  <!-- <div class="container px-0">
    <div class="row portfolio-container"> -->
      <!-- < ?php include('bar_chart_dimensi.php') ?> -->
    <!-- </div>
  </div> -->
</section>

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
<script>
  const jenisKelaminTingkat = <?= json_encode($jenisKelaminTingkat) ?>;
  const usiaTingkat = <?= json_encode($usiaTingkat) ?>;
  const pendidikanTingkat = <?= json_encode($pendidikanTingkat) ?>;
  const jenisUsahaTingkat = <?= json_encode($jenisUsahaTingkat) ?>;
  const skalaTingkat = <?= json_encode($skalaTingkat) ?>;
</script>

<!-- Impor Chart -->
<script src="<?= base_url('pvd/js/riset4/stacked_jenis_kelamin_tingkat.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset4/stacked_usia_tingkat.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset4/stacked_pendidikan_tingkat.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset4/stacked_jenis_usaha_tingkat.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset4/stacked_skala_tingkat.js') ?>"></script>

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset4/button_download_3.js') ?>"></script>
</section>
<?= $this->endSection(); ?>