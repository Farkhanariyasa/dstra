<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container" data-aos="fade-up">
    <div class="judulriset3">riset 3</div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-riset3-hasil1">Hasil 1</li>
          <li data-filter=".filter-riset3-hasil2">Hasil 2</li>
          <li data-filter=".filter-riset3-hasil3">Hasil 3</li>
          <li data-filter=".filter-riset3-tabeldummy">Hasil 4</li>

        </ul>
      </div>
    </div>
    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
    </div>
  </div>


</section>

</section><!-- End -->

<?= $this->endSection(); ?>