<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
        <h6 style="color: #4b395f;"><strong>IKUPTIK Berdasarkan Jenis Unit Usaha</strong>
        </h6>
    </header>
    <hr class="hrjudul">

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters" role="tablist">
            <li data-filter="*" class="filter-active" type="button" role="tab">Semua Visualisasi</li>
            <li data-filter=".filter-riset4-jenis-uup-1" class="filter" type="button" role="tab">Jasa Transportasi Wisata</li>
            <li data-filter=".filter-riset4-jenis-uup-2" class="filter" type="button" role="tab">Jasa Penyedia Makanan dan Minuman</li>
            <li data-filter=".filter-riset4-jenis-uup-3" class="filter" type="button" role="tab">Penyedia Akomodasi</li>
            <li data-filter=".filter-riset4-jenis-uup-4" class="filter" type="button" role="tab">Total</li>
        </ul>
      </div>
    </div>
    <div class="row portfolio-container">
      <?php include('grafik_jenis_unit_usaha.php') ?>
    </div>
  </div>
</section>

<!-- Istope -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<!-- Chart JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Chart JS Plugin Sankey Chart -->
<script src="https://cdn.jsdelivr.net/npm/chartjs-chart-sankey"></script>
<!-- Highchart -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<!-- Data Chart -->
<script>
  const total = <?= json_encode($total); ?>;
  const transportasi = <?= json_encode($transportasi); ?>;
  const makan = <?= json_encode($makan); ?>;
  const akomodasi = <?= json_encode($akomodasi); ?>;
</script>

<!-- Impor Chart -->
<script src="<?= base_url('pvd/js/riset4/ikuptik_jenis_unit_usaha_1.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset4/ikuptik_jenis_unit_usaha_2.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset4/ikuptik_jenis_unit_usaha_3.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset4/ikuptik_jenis_unit_usaha_4.js') ?>"></script>

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset4/button_download_4_4.js') ?>"></script>

<?= $this->endSection(); ?>

