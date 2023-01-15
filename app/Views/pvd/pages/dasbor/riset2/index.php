<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container" data-aos="fade-up">

    <br><br>
    <header class="section-header">
      <p>Pilot Survei Wisatawan Nusantara</p>
    </header>
    <hr class="hrjudul">

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-riset2-hasil1">Hasil 1</li>
          <li data-filter=".filter-riset2-hasil2">Hasil 2</li>
          <li data-filter=".filter-riset2-hasil3">Hasil 3</li>
          <li data-filter=".filter-riset2-tabel">Tabel dummy</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
      <?php include('dummy_riset3.php') ?>
    </div>
</section>

<!-- </section> End Portfolio Section -->

<?= $this->endSection(); ?>