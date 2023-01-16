<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>


<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <p>Kajian Pemanfaatan Mobile Positioning Data (MPD) dalam Menunjang Statistik Pariwisata</p>
        </header>
        <hr class="hrjudul">

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".filter-hasil1">Hasil 1</li>
                    <li data-filter=".filter-hasil2">Hasil 2</li>
                    <li data-filter=".filter-hasil3">Hasil 3</li>
                    <li data-filter=".filter-tabel">Tabel dummy</li>
                    <!-- <li data-filter=".filter-riset4">Riset 4</li>
                <li data-filter=".filter-umum">Umum</li>
                <li data-filter=".filter-ti">TI</li>
                <li data-filter=".filter-lainnya">Lainnya</li> -->
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
           <?php include('dummy_riset1.php') ?>
        </div>
</section>


<section id="hero" class="hero d-flex align-items-center">










</section><!-- End -->

<?= $this->endSection(); ?>