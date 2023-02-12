<?= $this->extend('pvd/layout/dasbor/template'); ?>
<?= $this->section('content'); ?>
<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
      <p>Tenaga Kerja di Industri Pariwisata</p>
    </header>
    <hr class="hrjudul">
    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-riset3-hasil1">Hasil 1</li>
          <li data-filter=".filter-riset3-hasil2">Hasil 2</li>
          <li data-filter=".filter-riset3-hasil3">Hasil 3</li>
          <li data-filter=".filter-riset3-hasil4">Hasil 4</li>
          <li data-filter=".filter-riset3-hasil5">Hasil 5</li>
          <li data-filter=".filter-riset3-hasil6">Hasil 6</li>
          <li data-filter=".filter-riset3-peta">Peta Lokus</li>
          <li data-filter=".filter-riset3-tabeldummy">Hasil 7</li>
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
<!-- Chart JS Plugin Boxplotchart -->
<script src="https://unpkg.com/@sgratzl/chartjs-chart-boxplot"></script>
<!-- Chart JS Plugin Sankey Chart -->
<script src="https://cdn.jsdelivr.net/npm/chartjs-chart-sankey"></script>

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

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset3/btn_Download.js') ?>"></script>
</section><!-- End -->
<?= $this->endSection(); ?>