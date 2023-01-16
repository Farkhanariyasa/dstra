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

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- const for chart -->
<script>
    const jumlahanggota = <?= json_encode($ja) ?>;
    
</script>

<!-- chart -->
<script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_ja_pie.js') ?>"></script>

<!-- for download chart -->
<script src="<?= base_url('pvd/js/riset1/btn_Download.js') ?>"></script>








</section><!-- End -->

<?= $this->endSection(); ?>