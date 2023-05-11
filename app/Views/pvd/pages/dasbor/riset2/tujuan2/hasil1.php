<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <p>Lama Kunjungan</p>
        </header>

        <hr class="hrjudul">

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <!-- <li data-filter="*">Semua</li> -->
                    <li data-filter=".filter-riset2-hasil1" class="filter-active">Banyak Wisatawan</li>
                    <li data-filter=".filter-riset2-hasil2">Banyak Perjalanan</li>
                    <li data-filter=".filter-riset2-hasil3">Tujuan Utama</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            <?php include('dummy_hasil1.php') ?>
        </div>
    </div>
</section>

<!-- Datatable Instal -->
<script src="<?= base_url('pvd/js/riset2/hasilSPRiset2_tabelkajian1.js'); ?>"></script>
<!-- Istope -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

<?= $this->endSection(); ?>