<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <p>Lama Kunjungan & Bepergian Pelancong</p>
        </header>

        <hr class="hrjudul">

        <div class="row portfolio-container">
            <?php include('dummy_hasil2.php') ?>
        </div>
    </div>
</section>

<!-- Istope -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

<!-- Chart JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Impor Chart -->
<script src="<?= base_url('pvd/js/riset2/hasilPKLRiset2_t2_bar2.js') ?>"></script>

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset2/btn_Download_t2.js') ?>"></script>


<?= $this->endSection(); ?>

