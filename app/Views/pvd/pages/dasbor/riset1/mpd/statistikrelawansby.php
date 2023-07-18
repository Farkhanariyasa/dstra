<?= $this->extend('pvd/layout/dasbor/template'); ?>
<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
    <div class="container">
        <header class="section-header">
            <p>Statistik Relawan Surabaya</p>
        </header>
        <hr class="hrjudul">
    </div>

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
            </ul>
        </div>
    </div>
    <div class="row " id="row">
        <div class="row col-lg-12 d-flex justify-content-center mt-2">
            <div class="row portfolio-container" id="test">
                <?php include('dummy_statsrelawansby.php') ?>
            </div>
        </div>
    </div>

<!-- Chart JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- import chart -->
<script src="<?= base_url('pvd/js/riset1/hasilRelawan_Output1.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilRelawan_Output2Rev.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilRelawan_Output3.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilRelawan_Output4Rev.js') ?>"></script>

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset1/btn_Download_relawan.js') ?>"></script>
</section>



<?= $this->endSection(); ?>