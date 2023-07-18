<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
    <div class="container">
        <header class="section-header">
            <p>Kajian Pemanfaatan MPD dalam Menunjang Statistik Pariwisata</p>
        </header>
        <hr class="hrjudul">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="color:#506396">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-output1-tab" data-bs-toggle="pill" data-bs-target="#pills-output1" type="button" role="tab" aria-controls="pills-output1" aria-selected="true">Output 1</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-output2-tab" data-bs-toggle="pill" data-bs-target="#pills-output2" type="button" role="tab" aria-controls="pills-output2" aria-selected="false">Output 2</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-output3-tab" data-bs-toggle="pill" data-bs-target="#pills-output3" type="button" role="tab" aria-controls="pills-output3" aria-selected="false">Output 3</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-output4-tab" data-bs-toggle="pill" data-bs-target="#pills-output4" type="button" role="tab" aria-controls="pills-output4" aria-selected="false">Output 4</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-output5-tab" data-bs-toggle="pill" data-bs-target="#pills-output5" type="button" role="tab" aria-controls="pills-output5" aria-selected="false">Output 5</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-output6-tab" data-bs-toggle="pill" data-bs-target="#pills-output6" type="button" role="tab" aria-controls="pills-output6" aria-selected="false">Output 6</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-output7-tab" data-bs-toggle="pill" data-bs-target="#pills-output7" type="button" role="tab" aria-controls="pills-output6" aria-selected="false">Output 7</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row" id="row">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="row" id="test">
                <?php include('data_visualisasi_wisnus.php') ?>
            </div>
        </div>
    </div>
</section>



<!-- Istope -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<!-- Chart JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Impor Chart -->
<script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_horizontalbar.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilWisnus_Output1.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilWisnus_Output2.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilWisnus_Output3.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilWisnus_Output4.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilWisnus_Output5.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilWisnus_Output6.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilWisnus_Output7.js') ?>"></script>


<script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_mpw_bar.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_simcard.js') ?>"></script>


<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset1/btn_Download_wisnus.js') ?>"></script>
</section><!-- End -->
<?= $this->endSection(); ?>