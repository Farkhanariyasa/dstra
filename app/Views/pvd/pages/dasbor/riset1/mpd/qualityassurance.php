<?= $this->extend('pvd/layout/dasbor/template'); ?>
<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
    <div class="container">
        <header class="section-header">
            <p>Quality Assurance</p>
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
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-output6-tab" data-bs-toggle="pill" data-bs-target="#pills-output6" type="button" role="tab" aria-controls="pills-output6" aria-selected="false">Output 6</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-output7-tab" data-bs-toggle="pill" data-bs-target="#pills-output7" type="button" role="tab" aria-controls="pills-output7" aria-selected="false">Output 7</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="row " id="row">
        <div class="row col-lg-12 d-flex justify-content-center mt-2">
            <div class="row" id="test">
                <?php include('data_qa.php') ?>
            </div>
        </div>
    </div>
</section>

<section>
 <!-- Chart JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- import chart -->
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output1_1.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output1_2.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output2_1.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output2_2.js') ?>"></script>   
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output3_1.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output3_2.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output4_1.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output4_2.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output4_3.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output4_4.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output5_1.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output5_2.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_1.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_2.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_3.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_4.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_5.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_6.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_7.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_8.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_9.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_10.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_11.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_12.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_13.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_14.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_15.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_16.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_17.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_18.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_19.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_20.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_21.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_22.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_23.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output6_24.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output7_1.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilQA_Output7_2.js') ?>"></script>

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset1/btn_Download_qa.js') ?>"></script>



</section>
<?= $this->endSection(); ?>