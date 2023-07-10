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
            <button class="nav-link active" id="pills-algoritma1-tab" data-bs-toggle="pill" data-bs-target="#pills-algoritma1" type="button" role="tab" aria-controls="pills-algoritma1" aria-selected="true">Jarak Stay Point</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-algoritma2-tab" data-bs-toggle="pill" data-bs-target="#pills-algoritma2" type="button" role="tab" aria-controls="pills-algoritma2" aria-selected="false">Algoritma H3</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-algoritma3-tab" data-bs-toggle="pill" data-bs-target="#pills-algoritma3" type="button" role="tab" aria-controls="pills-algoritma3" aria-selected="false">DBSCAN Clustering & Pembentukan Matrix Distance</button>
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
    
  </script>
  <!-- Impor Chart -->
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_ja_pie.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_mpw_bar.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_simcard.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_stacked_bar.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_peta.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_line.js') ?>"></script>

  <!-- DC Algoritma 1 -->
  <script src="<?= base_url('pvd/js/riset1/evaluasiDC_algoritma1_1.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/evaluasiDC_algoritma1_2.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/evaluasiDC_algoritma1_3.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/evaluasiDC_algoritma1_4.js') ?>"></script>

  <!-- DC Algoritma 2 -->
  <script src="<?= base_url('pvd/js/riset1/evaluasiDC_algoritma2_1.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/evaluasiDC_algoritma2_2.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/evaluasiDC_algoritma2_3.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/evaluasiDC_algoritma2_4.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/evaluasiDC_algoritma2_5.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/evaluasiDC_algoritma2_6.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/evaluasiDC_algoritma2_7.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/evaluasiDC_algoritma2_8.js') ?>"></script>

  <!-- DC Output baru -->
  <script src="<?= base_url('pvd/js/riset1/hasilDC_output1.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilDC_output2.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilDC_output3.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilDC_output4.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilDC_output5.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilDC_output6.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilDC_output7.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilDC_output8.js') ?>"></script>



  <!-- Latex Math -->
  <script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js"></script>

  <!-- Fungsi Unduh Chart -->
  <script src="<?= base_url('pvd/js/riset1/btn_Download.js') ?>"></script>
</section><!-- End -->

<?= $this->endSection(); ?>