<?= $this->extend('pvd/layout/dasbor/template'); ?>
<?= $this->section('content'); ?>
<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
      <p>Template visualisasi</p>
    </header>
    <hr class="hrjudul">
    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-riset3-hasil1">Column Chart</li>
          <li data-filter=".filter-riset3-hasil2">Doughnut & Pie Chart</li>
          <li data-filter=".filter-riset3-hasil3">Spider Chart</li>
          <li data-filter=".filter-riset3-hasil4">Stacked Bar Chart</li>
          <li data-filter=".filter-riset3-hasil5">Boxplot</li>
          <li data-filter=".filter-riset3-hasil6">Sankey Diagram</li>
          <li data-filter=".filter-riset3-hasil7">Waffle Chart</li>
          <li data-filter=".filter-riset3-peta">Peta Lokus</li>
        </ul>
      </div>
    </div>
    <div class="row portfolio-container">
      <?php include('dummy_riset3.php') ?>
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
<!-- Chart JS Plugin Boxplot -->
<script src="https://unpkg.com/@sgratzl/chartjs-chart-boxplot"></script>
<!-- Chart JS Plugin Sankey Chart -->
<script src="https://cdn.jsdelivr.net/npm/chartjs-chart-sankey"></script>
<!-- D3 JS -->
<script src="https://d3js.org/d3.v7.min.js"></script>

<!-- Riset 3 CSS -->
<link rel="stylesheet" href="<?= base_url('pvd/css/riset3/style3.css'); ?>">

<!-- Data Chart -->
<script>
  const datajenisindustri = <?= json_encode($ji); ?>;
  const datapendidikantertinggi = <?= json_encode($pt); ?>;
  const datajeniskelamin_riset3 = <?= json_encode($jk_1); ?>;
  const datapendapatan_riset3 = <?= json_encode($pd_1); ?>;
</script>
<!-- Impor Chart -->
<script src="<?= base_url('pvd/js/riset3/hasilSPRiset3_ji_pie.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset3/hasilSPRiset3_ji_doughnut.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset3/hasilSPRiset3_pt_bar.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset3/hasilSPRiset3_stackedbarchart.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset3/hasilSPRiset3_radar.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset3/hasilSPRiset3_pd_box.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset3/hasilSPRiset3_sankey.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset3/hasilSPRiset3_waffle.js') ?>"></script>

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset3/btn_Download.js') ?>"></script>
<?= $this->endSection(); ?>