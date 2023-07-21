<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
      <p>Tenaga Kerja di Industri Pariwisata</p>
    </header>

    <hr class="hrjudul">

    <section>
      <div class="container-fluid">
        <div class="shadow box par m-auto p-4 p-md-5 rounded-5 bg-body" style="line-height: 1.5;">
          <p class="text-justify">
              Tenaga kerja di industri pariwisata menggunakan pendekatan industri, yaitu
              mencakup semua orang yang terlibat dalam kegiatan industri pariwisata baik yang
              berpartisipasi dalam kegiatan yang bersifat pariwisata maupun kegiatan yang bersifat
              non-pariwisata. Orang-orang yang terlibat dalam kegiatan karakteristik pariwisata dari suatu
              perusahaan yang termasuk dalam industri non-pariwisata (misalnya, semua perusahaan
              yang kegiatan utamanya bukan merupakan kegiatan karakteristik pariwisata) tidak termasuk
              dalam tenaga kerja di industri pariwisata. Di sisi lain, orang-orang yang dipekerjakan di
              suatu perusahaan milik industri pariwisata yang berpartisipasi dalam kegiatan karakteristik
              non-pariwisata termasuk dalam tenaga kerja di industri pariwisata.
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
            Tujuan 1 (Gambaran Sosiodemografi dan Kualitas Tenaga Kerja di Industri Pariwisata)
          </button>
        </h3>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <a class="nav-link" href="<?= base_url('hasil-pkl/riset3/hasilkajian1') ?>">Memperoleh gambaran sosiodemografi dan kualitas tenaga kerja di industri pariwisata</a>
          </div>
        </div>
      </div>

      <!-- Tujuan 2 -->
      <div class="accordion-item my-3 mx-4 rounded-5 shadow">
        <h3 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <span class="fa-solid fa-person-walking-luggage pe-2"></span>
            Tujuan 2 (Dinamika Tenaga Kerja di Industri Pariwisata)
          </button>
        </h3>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <a class="nav-link" href="<?= base_url('hasil-pkl/riset3/hasilkajian2') ?>">Menganalisis dinamika tenaga kerja di industri pariwisata</a>      
          </div>
        </div>
      </div>

      <!-- Tujuan 3 -->
      <div class="accordion-item my-3 mx-4 rounded-5 shadow">
        <h3 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <span class="fa-solid fa-calendar-week pe-2"></span>
            Tujuan 3 (Faktor-Faktor yang Memengaruhi Jam Kerja Tenaga Kerja Lokal di Industri Pariwisata)
          </button>
        </h3>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <a class="nav-link" href="<?= base_url('hasil-pkl/riset3/hasilkajian3') ?>">Menganalisis faktor-faktor yang memengaruhi jam kerja tenaga kerja lokal di industri pariwisata</a>
          </div>
        </div>
      </div>

      <!-- Tujuan 4 -->
      <div class="accordion-item my-3 mx-4 rounded-5 shadow">
        <h3 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <span class="fa-solid fa-chart-simple pe-2"></span>
            Tujuan 4 (Tingkat Sadar Wisata Tenaga Kerja di Industri Pariwisata)
          </button>
        </h3>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <a class="nav-link" href="<?= base_url('hasil-pkl/riset3/hasilkajian4') ?>">Mengukur tingkat sadar wisata dari tenaga kerja industri pariwisata dengan indeks komposit</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>

