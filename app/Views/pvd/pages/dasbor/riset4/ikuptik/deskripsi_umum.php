<?= $this->extend('pvd/layout/dasbor/template'); ?>
<?= $this->section('content'); ?>
<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
        <h6 style="color: #4b395f;"><strong>Deskripsi Singkat Mengenai IKUPTIK</strong></h6>
    </header>
    <hr class="hrjudul">
    <?php include('ikuptik.php') ?>
      
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
  const ikuptikPerDimensi = <?= json_encode($ikuptikPerDimensi) ?>;
  const total = <?= json_encode($total); ?>;
</script>

<!-- Impor Chart -->
  <script src="<?= base_url('pvd/js/riset4/peta_batu_ikuptik.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/layer_dasar_peta_batu.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/ikuptik_1_1_pie.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/ikuptik_1_2_spider.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/ikuptik_1_3_bar.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/peta_batu_ikuptik_4_3_1.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/layer_dasar_peta_batu_4_3_1.js') ?>"></script>
<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset4/btn_Download.js') ?>"></script>
</section><!-- End -->
<?= $this->endSection(); ?>