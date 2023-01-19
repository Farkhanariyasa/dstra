<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
    <div class="container">

        <header class="section-header">
            <p>Kajian Pemanfaatan Mobile Positioning Data (MPD) dalam Menunjang Statistik Pariwisata</p>
        </header>
        <hr class="hrjudul">

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
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

        <div class="row portfolio-container">
            <?php include('dummy_riset1.php') ?>
</section>

<section id="hero" class="hero d-flex align-items-center">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- const for chart -->
    <script>
        const jumlahanggota = <?= json_encode($ja) ?>;
        const jeniskelamin = <?= json_encode($jk) ?>;
        const mpw1 = <?= json_encode($b524) ?>;
        const mpw2 = <?= json_encode($b525) ?>;
        const mpw3 = <?= json_encode($b526) ?>;
        const mpw4 = <?= json_encode($b527) ?>;
        const mpw5 = <?= json_encode($b528) ?>;
        const mpw6 = <?= json_encode($b529) ?>;
        const indosat = <?= json_encode($indosat) ?>;
        const xl = <?= json_encode($xl) ?>;
        const tri = <?= json_encode($tri) ?>;
        const smartfren = <?= json_encode($smartfren) ?>;
        const lainnya = <?= json_encode($lainnya) ?>;
    </script>

    <!-- chart -->
    <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_ja_pie.js') ?>"></script>
    <!-- <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_jk_bar.js') ?>"></script> -->
    <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_mpw_bar.js') ?>"></script>

    <!-- for download chart -->
    <script src="<?= base_url('pvd/js/riset1/btn_Download.js') ?>"></script>

</section><!-- End -->

<?= $this->endSection(); ?>