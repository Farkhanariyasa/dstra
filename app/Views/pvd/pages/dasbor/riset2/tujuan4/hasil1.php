<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <p>Model Zero-Inflation ZINB</p>
        </header>

        <hr class="hrjudul">

        <div class="row portfolio-container">
            <?php include('dummy_hasil1.php') ?>
        </div>
    </div>
</section>

<!-- Istope -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

<?= $this->endSection(); ?>