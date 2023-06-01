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
    <?php include('bar_chart_dimensi.php') ?>
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
  const dimensi_kecamatan = <?= json_encode($dimensi_kecamatan) ?>;
  const dimensi1_kecamatan = <?= json_encode($dimensi1_kecamatan) ?>;
  const dimensi2_kecamatan = <?= json_encode($dimensi2_kecamatan) ?>;
  const dimensi3_kecamatan = <?= json_encode($dimensi3_kecamatan) ?>;
  const dimensi4_kecamatan = <?= json_encode($dimensi4_kecamatan) ?>;
  const dimensi5_kecamatan = <?= json_encode($dimensi5_kecamatan) ?>;
  const dimensi6_kecamatan = <?= json_encode($dimensi6_kecamatan) ?>;
  const dimensi_jenis = <?= json_encode($dimensi_jenis) ?>;
  const dimensi1_jenis = <?= json_encode($dimensi1_jenis) ?>;
  const dimensi2_jenis = <?= json_encode($dimensi2_jenis) ?>;
  const dimensi3_jenis = <?= json_encode($dimensi3_jenis) ?>;
  const dimensi4_jenis = <?= json_encode($dimensi4_jenis) ?>;
  const dimensi5_jenis = <?= json_encode($dimensi5_jenis) ?>;
  const dimensi6_jenis = <?= json_encode($dimensi6_jenis) ?>;
  const ikuptikPerDimensi = <?= json_encode($ikuptikPerDimensi) ?>;
</script>

<!-- Impor Chart -->
<script src="<?= base_url('pvd/js/riset4/dodge_bar_dimensi_kecamatan.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset4/dodge_bar_dimensi_jenis.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset4/spider_dimensi.js') ?>"></script>

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset4/button_download_4_2.js') ?>"></script>
</section>
<?= $this->endSection(); ?>