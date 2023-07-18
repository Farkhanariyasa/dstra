<?= $this->extend('pvd/layout/dasbor/template'); ?>
<?= $this->section('content'); ?>


<section id="portfolio" class="portfolio section-bg">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <p>Kajian Pemanfaatan MPD dalam Menunjang Statistik Pariwisata</p>
    </header>
    <hr class="hrjudul">
  </div>
  <div class="row">
    <div class="col-lg-12 d-flex justify-content-center">
      <!-- <div class="navbar"> -->
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="color:#506396">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-qa-tab" data-bs-toggle="pill" data-bs-target="#pills-qa" type="button" role="tab" aria-controls="pills-qa" aria-selected="true">Quality Assurance</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-dc-tab" data-bs-toggle="pill" data-bs-target="#pills-dc" type="button" role="tab" aria-controls="pills-dc" aria-selected="false">Double Counting</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-fg-tab" data-bs-toggle="pill" data-bs-target="#pills-fg" type="button" role="tab" aria-controls="pills-fg" aria-selected="false">Family Grouping</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-wisnus-tab" data-bs-toggle="pill" data-bs-target="#pills-wisnus" type="button" role="tab" aria-controls="pills-wisnus" aria-selected="false">Statistik Wisatawan Nusantara</button>
        </li>
      </ul>
      <!-- </div> -->
    </div>
  </div>
  <div class="row" id="row">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="row" id="test">
        <?php include('data_dasbor.php') ?>
      </div>
    </div>
  </div>
</section>





<!-- Peta Lokus -->
<section>
  <!-- Istope -->
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
  <!-- Chart JS -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_peta.js') ?>"></script>

  <!-- Data Grafik -->
  <script>
    
  </script>
  <!-- Grafik Dasbor -->
  <script src="<?= base_url('pvd/js/riset1/hasilWisnus_Output1.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilDC_output8.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilFG_dasbor.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilWisnus_Output2.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilQA_Output1_1.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilQA_Output1_2.js') ?>"></script>

  <!-- Fungsi Unduh Chart -->
  <script src="<?= base_url('pvd/js/riset1/btn_Download_dasbor.js') ?>"></script>

</section>


<?= $this->endSection(); ?>