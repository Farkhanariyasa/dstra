<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
      <p>Estimasi Banyak Perjalanan</p>
    </header>
    <hr class="hrjudul">

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-riset2-hasilkajian2-1">Lama Kunjungan</li>
          <li data-filter=".filter-riset2-hasilkajian2-2">Lama Perjalanan</li>
        </ul>
      </div>
    </div>
    <div class="row portfolio-container">
      <?php include('dummy_hasil2.php') ?>
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
<!-- Data Chart -->
<script>
  const datajeniskelamin = <?= json_encode($jk); ?>;
  const datajenispekerjaanutama = <?= json_encode($jpu); ?>;
  const datapendidikantertinggi_riset2 = <?= json_encode($pt_2); ?>;
  const datatujuanutama = <?= json_encode($tu); ?>;
</script>
<!-- Impor Chart -->
<script src="<?= base_url('pvd/js/riset2/hasilPKLRiset2_t2_bar1.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset2/hasilPKLRiset2_t2_bar2.js') ?>"></script>

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset2/btn_Download.js') ?>"></script>

<?= $this->endSection(); ?>

