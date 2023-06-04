<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
    <div class="container">
        <header class="section-header">
            <p>Tabulasi</p>
        </header>
        <hr class="hrjudul">

        <!-- <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*">Semua</li>
                    <li data-filter=".filter-riset2-hasil1" class="filter-active">Karakteristik Wisatawan</li>
                    <li data-filter=".filter-riset2-hasil2">Karakteristik Perjalanan</li>
                </ul>
            </div>
        </div> -->

        <?php include('dummy_tabulasi.php') ?>
        <!-- <div class="row portfolio-container">
        </div> -->
    </div>
</section>

<!-- Istope -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

<!-- Datatable Instal -->
<script src="<?= base_url('pvd/js/riset2/hasilPKLRiset2_t1_tabulasi.js'); ?>"></script>

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset2/btn_Download.js') ?>"></script>

<?= $this->endSection(); ?>