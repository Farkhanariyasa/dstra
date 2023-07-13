<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
        <h6 style="color: #4b395f;"><strong>Karakteristik Kesiapan Unit Usaha Pariwisata (UUP)</strong>
        </h6>
      </header>
    <hr class="hrjudul">
    <?php include('grafik_karakteristik_kesiapan_uup.php') ?>
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
  const jk = <?= json_encode($jk) ?>;
  const pendidikan = <?= json_encode($pendidikan) ?>;
  const jenis = <?= json_encode($jenis) ?>;
  const skala = <?= json_encode($skala) ?>;
  const umurIKUPTIK = <?= json_encode($umurIKUPTIK) ?>;
  const ikuptik = <?= json_encode($ikuptik) ?>;
</script>

<!-- Impor Chart -->
<script src="<?= base_url('pvd/js/riset4/boxplot_jenis_kelamin.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset4/scatter_plot_usia_ikuptik.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset4/boxplot_pendidikan.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset4/boxplot_jenis_usaha.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset4/boxplot_skala.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset4/boxplot_ikuptik.js') ?>"></script>

<!-- <script src="< ?= base_url('pvd/js/riset4/stacked_jenis_kelamin_tingkat.js') ?>"></script>
<script src="< ?= base_url('pvd/js/riset4/stacked_usia_tingkat.js') ?>"></script>
<script src="< ?= base_url('pvd/js/riset4/stacked_pendidikan_tingkat.js') ?>"></script>
<script src="< ?= base_url('pvd/js/riset4/stacked_jenis_usaha_tingkat.js') ?>"></script>
<script src="< ?= base_url('pvd/js/riset4/stacked_skala_tingkat.js') ?>"></script> -->

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset4/button_download_3.js') ?>"></script>
</section>
<?= $this->endSection(); ?>