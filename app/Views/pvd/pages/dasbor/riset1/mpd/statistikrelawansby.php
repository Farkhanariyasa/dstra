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
            </ul>
        </div>
    </div>
    <div class="row" id="row">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="row portfolio-container" id="test">
        <?php include('dummy_statsrelawansby.php') ?>
      </div>
    </div>
  </div>


</section>



<?= $this->endSection(); ?>