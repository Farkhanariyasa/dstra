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
    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-riset4-transportasi">Jasa Transportasi Wisata</li>
          <li data-filter=".filter-riset4-makan">Jasa Penyedia Makanan dan Minuman</li>
          <li data-filter=".filter-riset4-akomodasi">Penyedia Akomodasi</li>
        </ul>
      </div>
    </div>
    <div class="row portfolio-container">
      <?php include('dasbor_riset4.php') ?>
    </div>

    <!-- <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-riset4-hasil1">Pie Chart</li>
          <li data-filter=".filter-riset4-hasil2">BoxPlot</li>
          <li data-filter=".filter-riset4-hasil4">Scatter Plot</li>
          <li data-filter=".filter-riset4-hasil5">Bar Plot</li>
          <li data-filter=".filter-riset4-hasil6">Heat Map</li>
          <li data-filter=".filter-riset4-hasil7">Peta Batu</li>
          <li data-filter=".filter-riset4-hasil8">Radar Chart</li>
          <li data-filter=".filter-riset4-hasil9">Choropelth (Coming soon)</li>
          <li data-filter=".filter-riset4-hasil10">Dodge Bar</li>
          <li data-filter=".filter-riset4-hasil11">Map</li>
          <li data-filter=".filter-riset4-hasil12">Peta Kota Batu</li>
        </ul>
      </div>
    </div> -->

    <!-- <div class="row portfolio-container">
      < ?php include('dummy_riset4.php') ?>
    </div> -->
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

    // ke bawah adalah kode dummy
    // const unitUsahaTIK = < ?= json_encode($uu) ?>;
    // const pendapatan = < ?= json_encode($pd) ?>;
    // const b401a = < ?= json_encode($b401a) ?>;
    // const b407a = < ?= json_encode($b407a) ?>;
    // const umur = < ?= json_encode($umur) ?>;
    // const pendapatanNoFilter = < ?= json_encode($pdnf) ?>;
    // const kecamatanEkonomi = < ?= json_encode($kecamatanEkonomi) ?>;
    // const kecamatanArsipDiigital = < ?= json_encode($kecamatanArsipDiigital) ?>;
  </script>

  <!-- Import Chart -->
  <script src="<?= base_url('pvd/js/riset4/doughnut_kota_batu.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/doughnut_kec_batu.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/doughnut_kec_junrejo.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/doughnut_kec_bumiaji.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/bar_kota_batu_produksi.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/bar_kec_batu_produksi.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/bar_kec_junrejo_produksi.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/bar_kec_bumiaji_produksi.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/pie_kota_batu_skala.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/pie_kec_batu_skala.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/pie_kec_junrejo_skala.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/pie_kec_bumiaji_skala.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/peta_batu_ikuptik.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/layer_dasar_peta_batu.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/bar_kota_batu_ikuptik.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/bar_kota_batu_ikuptik_jenis.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/bar_kota_batu_pendidikan.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/pie_kota_batu_pemanfaatan.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/pie_kota_batu_pemanfaatan_jenis.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/pie_kota_batu_pemanfaatan_skala.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/bar_kota_batu_pemanfaatan.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset4/gantt_jenis_kelamin_usia.js') ?>"></script>

  <!-- ke bawah adalah kode dummy -->
  <!-- <script src="< ?= base_url('pvd/js/riset4/hasilRiset4_map.js') ?>"></script>
  <script src="< ?= base_url('pvd/js/riset4/hasilSPRiset4_uu_pie.js') ?>"></script>
  <script src="< ?= base_url('pvd/js/riset4/hasilSPRiset4_pd_box.js') ?>"></script>
  <script src="< ?= base_url('pvd/js/riset4/hasilSPRiset4_scatter.js') ?>"></script>
  <script src="< ?= base_url('pvd/js/riset4/hasilSPRiset4_b401a_pie.js') ?>"></script>
  <script src="< ?= base_url('pvd/js/riset4/hasilSPRiset4_b407a_bar.js') ?>"></script>
  <script src="< ?= base_url('pvd/js/riset4/hasilSPRiset4_heatmap.js') ?>"></script>
  <script src="< ?= base_url('pvd/js/riset4/hasilSPRiset4_radar.js') ?>"></script>
  <script src="< ?= base_url('pvd/js/riset4/dogde_bar_sdm_ekonomi.js') ?>"></script>
  <script src="< ?= base_url('pvd/js/riset4/kec_malang.js') ?>"></script>
  <script src="< ?= base_url('pvd/js/riset4/hasilSPRiset2_peta_kajian1_2.js') ?>"></script>
  <script src="< ?= base_url('pvd/js/riset4/peta_batu.js') ?>"></script>
  <script src="< ?= base_url('pvd/js/riset4/hasilSPRiset4_peta_kajian1_2.js') ?>"></script>  -->

  <!-- Fungsi Unduh Chart -->
  <script src="<?= base_url('pvd/js/riset4/btn_Download.js') ?>"></script>
</section>

<?= $this->endSection(); ?>