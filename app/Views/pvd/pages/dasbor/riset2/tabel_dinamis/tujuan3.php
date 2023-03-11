<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <p>Karakteristik Wisatawan & Perjalanan Wisata</p>
        </header>

        <hr class="hrjudul">

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <!-- <li data-filter="*">Semua</li> -->
                    <li data-filter=".filter-riset2-hasil1" class="filter-active">Karakteristik Wisatawan</li>
                    <li data-filter=".filter-riset2-hasil2">Karakteristik Perjalanan</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            <?php include('dummy_kajian3.php') ?>
        </div>
    </div>
</section>

<!-- Datatable Instal -->
<script src="<?= base_url('pvd/js/riset2/hasilSPRiset2_tabelkajian3.js'); ?>"></script>
<!-- Istope -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

<?= $this->endSection(); ?>