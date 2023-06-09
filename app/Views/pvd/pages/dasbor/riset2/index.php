<?= $this->extend('pvd/layout/dasbor/template'); ?>
<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
      <p>Pilot Survei Wisatawan Nusantara</p>
    </header>

    <hr class="hrjudul">

    <section>
      <div class="container-fluid">
        <div class="shadow box par m-auto p-4 p-md-5 rounded-5 bg-body" style="line-height: 1.5;">
          <p class="text-justify">
          Wisatawan nusantara (wisnus) memiliki peran yang penting dalam pengembangan wisata nasional. Ketersediaan data wisnus seperti jumlah perjalanan wisnus, banyaknya wisnus serta karakteristiknya dapat membantu pemerintah dalam pengambilan kebijakan yang lebih terarah. Saat ini, pemenuhan data wisnus di Indonesia memanfaatkan data mobilisasi penduduk yang direkam jejaknya dari telepon genggam atau dikenal dengan istilah mobile positioning data (MPD). Namun, metode ini hanya dapat menyajikan data wisnus ke luar kabupaten/kota saja. Sementara itu, data wisnus di dalam kabupaten/kota juga tidak kalah penting keberadaannya. Oleh karena itu, Riset 2 fokus pada estimasi data wisnus dalam kabupaten/kota serta mendapatkan gambaran karakteristik sosiodemografi dan perjalanan dari wisatawan nusantara dalam kabupaten/kota. Riset ini juga dilakukan untuk mendapatkan faktor-faktor yang mempengaruhi jumlah perjalanan wisata dalam kabupaten/kota seseorang.
          </p>
        </div>
      </div>
    </section>

    <div class="accordion" id="accordionExample">
      <!-- Tujuan 1 -->
      <div class="accordion-item my-3 mx-4 rounded-5 shadow">
        <h3 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            <span class="fa-solid fa-map-location-dot pe-2"></span>  
            Tujuan 1 (Estimasi Banyak Wisatawan & Perjalanan Wisata)
          </button>
        </h3>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body rounded-bottom">
            <ul style="list-style-type: circle;" class="text-justify fs-5 ms-3">
              <li>
                <a href="<?= base_url('hasil-pkl/riset2/tujuan1-hasil1') ?>" class="text-decoration-none fs-5">Estimasi Banyak Wisatawan</a>
              </li>
              <li>
                <a href="<?= base_url('hasil-pkl/riset2/tujuan1-hasil2') ?>" class="text-decoration-none fs-5">Estimasi Banyak Perjalanan</a>
              </li>
              <li>
                <a href="<?= base_url('hasil-pkl/riset2/tujuan1-hasil3') ?>" class="text-decoration-none fs-5">Kategori Perjalanan</a>
              </li>
              <li>
                <a href="<?= base_url('hasil-pkl/riset2/tujuan1-tabulasi') ?>" class="text-decoration-none fs-5">Tabulasi</a>
              </li>
            </ol>
          </div>
        </div>
      </div>

      <!-- Tujuan 2 -->
      <div class="accordion-item my-3 mx-4 rounded-5 shadow">
        <h3 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <span class="fa-solid fa-calendar-week pe-2"></span>
            Tujuan 2 (Lama Kunjungan & Lama Bepergian Wisata)
          </button>
        </h3>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body rounded-bottom">
            <ul style="list-style-type: circle;" class="text-justify fs-5 ms-3">
              <li>
                <a href="<?= base_url('hasil-pkl/riset2/tujuan2-hasil1') ?>" class="text-decoration-none fs-5">Lama Kunjungan dan Bepergian Turis</a>
              </li>
              <li>
                <a href="<?= base_url('hasil-pkl/riset2/tujuan2-hasil2') ?>" class="text-decoration-none fs-5">Lama Kunjungan dan Bepergian Pelancong</a>
              </li>
              <li>
                <a href="<?= base_url('hasil-pkl/riset2/tujuan2-tabulasi') ?>" class="text-decoration-none fs-5">Tabulasi</a>
              </li>
            </ol>
          </div>
        </div>
      </div>

      <!-- Tujuan 3 -->
      <div class="accordion-item my-3 mx-4 rounded-5 shadow">
        <h3 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <span class="fa-solid fa-person-walking-luggage pe-2"></span>
            Tujuan 3 (Karakteristik Wisatawan & Perjalanan Wisata)
          </button>
        </h3>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body rounded-bottom">
            <ul style="list-style-type: circle;" class="text-justify fs-5 ms-3">
              <li>
                <a href="<?= base_url('hasil-pkl/riset2/tujuan3-hasil1') ?>" class="text-decoration-none fs-5">Karakteristik Wisatawan</a>
              </li>
              <li>
                <a href="<?= base_url('hasil-pkl/riset2/tujuan3-hasil2') ?>" class="text-decoration-none fs-5">Karakteristik Perjalanan</a>
              </li>
              <li>
                <a href="<?= base_url('hasil-pkl/riset2/tujuan3-tabulasi') ?>" class="text-decoration-none fs-5">Tabulasi</a>
              </li>
            </ol>
          </div>
        </div>
      </div>

      <!-- Tujuan 4 -->
      <div class="accordion-item my-3 mx-4 rounded-5 shadow">
        <h3 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <span class="fa-solid fa-chart-simple pe-2"></span>
            Tujuan 4 (Analisis Inferensia)
          </button>
        </h3>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="accordion-body rounded-bottom">
            <ul style="list-style-type: circle;" class="text-justify fs-5 ms-3">
              <li>
                <a href="<?= base_url('hasil-pkl/riset2/tujuan4-hasil1') ?>" class="text-decoration-none fs-5">Model Zero-Inflation ZINB</a>
              </li>
              <li>
                <a href="<?= base_url('hasil-pkl/riset2/tujuan4-hasil2') ?>" class="text-decoration-none fs-5">Model Count ZINB</a>
              </li>
              <li>
                <a href="<?= base_url('hasil-pkl/riset2/tujuan4-hasil2') ?>" class="text-decoration-none fs-5">Tabulasi</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?= $this->endSection(); ?>