<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
      <p>Double Counting</p>
    </header>
    <hr class="hrjudul">
    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="color:#506396">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-algoritma1-tab" data-bs-toggle="pill" data-bs-target="#pills-algoritma1" type="button" role="tab" aria-controls="pills-algoritma1" aria-selected="true">Algoritma 1</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-algoritma2-tab" data-bs-toggle="pill" data-bs-target="#pills-algoritma2" type="button" role="tab" aria-controls="pills-algoritma2" aria-selected="false">Algoritma 2</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-algoritma3-tab" data-bs-toggle="pill" data-bs-target="#pills-algoritma3" type="button" role="tab" aria-controls="pills-algoritma3" aria-selected="false">Algoritma 3</button>
          </li>
        </ul>
      </div>
    </div>
    <div class="row" id="rowdc">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="row" id="testdc">
          <?php include('data_dc.php') ?>
        </div>
      </div>
    </div>
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
  <!-- Data Chart -->
  <script>
    const jumlahanggota = <?= json_encode($ja) ?>;
    const jeniskelamin = <?= json_encode($jk) ?>;
    const mpw1 = <?= json_encode($b524) ?>;
    const mpw2 = <?= json_encode($b525) ?>;
    const mpw3 = <?= json_encode($b526) ?>;
    const mpw4 = <?= json_encode($b527) ?>;
    const mpw5 = <?= json_encode($b528) ?>;
    const mpw6 = <?= json_encode($b529) ?>;
    const indosat = <?= json_encode($indosat) ?>;
    const xl = <?= json_encode($xl) ?>;
    const tri = <?= json_encode($tri) ?>;
    const smartfren = <?= json_encode($smartfren) ?>;
    const lainnya = <?= json_encode($lainnya) ?>;
  </script>
  <!-- Impor Chart -->
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_ja_pie.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_mpw_bar.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_simcard.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_stacked_bar.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_peta.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_line.js') ?>"></script>

  <!-- Latex Math -->
  <script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js"></script>

  <!-- Fungsi Unduh Chart -->
  <script src="<?= base_url('pvd/js/riset1/btn_Download.js') ?>"></script>
</section><!-- End -->

<?= $this->endSection(); ?>