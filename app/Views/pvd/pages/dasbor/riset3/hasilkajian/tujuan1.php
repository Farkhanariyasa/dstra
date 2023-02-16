<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<div class="container px-0">
      <header class="section-header">
        <h6 style="color: #4b395f;"><strong>Tenaga Kerja di Industri Pariwisata</strong></h6>
      </header>
    <hr class="hrjudul">

    <div class="accordion" id="accordionExample">
      <div class="accordion-item my-3">
        <h3 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Gambaran Umum
          </button>
        </h3>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p class="text-justify">Tenaga kerja di industri pariwisata menggunakan pendekatan industri, yaitu
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
      </div>
      <div class="accordion-item my-3">
        <h3 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Tujuan 1
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <a class="nav-link" href="<?= base_url('hasil-pkl/riset3/hasilkajian1') ?>">Memperoleh gambaran sosiodemografi dan kualitas tenaga kerja di industri pariwisata.</a>
          </div>
        </div>
      </div>
      <div class="accordion-item my-3">
        <h3 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Tujuan 2
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <a class="nav-link" href="<?= base_url('hasil-pkl/riset3/hasilkajian2') ?>">Menganalisis dinamika tenaga kerja di industri pariwisata.</a>      
          </div>
        </div>
      </div>
      <div class="accordion-item my-3">
        <h3 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Tujuan 3
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <a class="nav-link" href="<?= base_url('hasil-pkl/riset3/hasilkajian3') ?>">Menganalisis faktor-faktor yang memengaruhi jam kerja tenaga kerja lokal di industri pariwisata.
            </a>
          </div>
        </div>
      </div>
      <div class="accordion-item my-3">
        <h3 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Tujuan 4
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <a class="nav-link" href="<?= base_url('hasil-pkl/riset3/hasilkajian4') ?>">Mengukur tingkat sadar wisata dari tenaga kerja industri pariwisata dengan indeks komposit.
            </a>
          </div>
        </div>
      </div>
    </div>
</div>

<?= $this->endSection(); ?>

