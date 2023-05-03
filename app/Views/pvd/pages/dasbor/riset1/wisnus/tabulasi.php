<?= $this->extend('pvd/layout/dasbor/template'); ?>


<?= $this->section('content'); ?>
<header class="section-header">
    <p>Kajian Pemanfaatan MPD dalam Menunjang Statistik Pariwisata</p>
</header>
<hr class="hrjudul">

<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <!-- <li data-filter="*">Semua</li> -->
                    <li data-filter=".filter-riset1-hasil1" class="filter-active">Tabulasi A</li>
                    <li data-filter=".filter-riset1-hasil2">Tabulasi B</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            <?php include('dummy_submenu2.php') ?>
        </div>
    </div>
</section>


<!-- Datatable Instal -->
<script src="<?= base_url('pvd/js/riset1/hasilPKLRiset1_datatable.js'); ?>"></script>

<!-- Istope -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

<?= $this->endSection(); ?>