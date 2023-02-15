<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
      <p>Lama Kunjungan & Lama Bepergian Wisata</p>
    </header>
    <hr class="hrjudul">

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
            <li data-filter=".filter-riset2-hasilkajian2-1" class="filter-active">Lama Kunjungan</li>
            <li data-filter=".filter-riset2-hasilkajian2-2">Lama Perjalanan</li>
        </ul>
      </div>
    </div>
    <div class="row portfolio-container">
      <?php include('dummy_kajian2.php') ?>
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
<script src="<?= base_url('pvd/js/riset2/hasilSPRiset2_jk_bar.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset2/hasilSPRiset2_barhorizontal.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset2/hasilSPRiset2_tu_bar.js') ?>"></script>

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset2/btn_Download.js') ?>"></script>

<!-- <h2>Kuesioner Listing</h2>
<div class="tab-pane active p-2" id="tab1" role="tabpanel" aria-labelledby="tab-1" style="height: auto;">
    <div class="row">
        <div style="width: 100%;">
            <embed src="https://drive.google.com/file/d/1jfvZHFY-ovdka5aRW413RVrplv6zWD0u/preview" type="application/pdf" width=100% height="600px" />
        </div>
    </div>
</div>


<h2>Kuesioner Pencacahan</h2>
<div class="tab-pane active p-2" id="tab1" role="tabpanel" aria-labelledby="tab-1" style="height: auto;">
    <div class="row">
        <div style="width: 100%;">
            <embed src="https://drive.google.com/file/d/1R0pWJ2IbRJr9GJsCkdRzKq_FzCkRN3ox/preview" type="application/pdf" width=100% height="600px" />
        </div>
    </div>
</div> -->

<?= $this->endSection(); ?>

