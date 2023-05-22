<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<style>
    .konten-teks {
        padding: 10%;
        color: #506396;
        /* font-family: 'Poppins', 'Courier', 'monospace'; */
    }

    .konten-teks .card-title {
        font-weight: bold;
        font-size: 50px;
        /* font-family: 'Poppins', 'Courier', 'monospace'; */
        color: #493a5a;

    }

    .konten-teks .subs {
        font-weight: bold;
        font-size: 30px;

    }

    .card-text {
        /* font-family: 'Poppins', 'Courier', 'monospace'; */
        color: #506396;
    }
</style>

<section id="portfolio" class="portfolio section-bg">
    <div class="container">
        <header class="section-header">
            <p>Family Grouping</p>
        </header>
        <hr class="hrjudul">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="color:#506396">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-algoritma1-tab" data-bs-toggle="pill" data-bs-target="#pills-algoritma1" type="button" role="tab" aria-controls="pills-algoritma1" aria-selected="true">Algoritma 1</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-algoritma2-tab" data-bs-toggle="pill" data-bs-target="#pills-algoritma2" type="button" role="tab" aria-controls="pills-algoritma2" aria-selected="false">Algoritma 2</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-algoritma3-tab" data-bs-toggle="pill" data-bs-target="#pills-algoritma3" type="button" role="tab" aria-controls="pills-algoritma3" aria-selected="false">Algoritma 3</button>
                </li>
            </ul>
            </div>
        </div>
        <div class="row" id="rowfg">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="row" id="containerfg">
                    <?php include('dummy_fg.php') ?>
                </div>
            </div>
        </div>
    </div>

</section>





<div class="col-sm-6 my-2">
    <div class="card shadow">

    </div>
</div>
</div>

</div>

<section>
    <script>
        const jumlahanggota = <?= json_encode($ja) ?>;
    </script>
    <!-- Istope -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- Chart JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Chart JS Plugin Sankey Chart -->
    <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-sankey"></script>
    <!-- Impor Grafik -->
    <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_ja_pie.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_sankey.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset1/btn_Download.js') ?>"></script>

</section>

<!-- Modal Riset 1 -->
<?php include('modal_fg.php') ?>
<?= $this->endSection(); ?>