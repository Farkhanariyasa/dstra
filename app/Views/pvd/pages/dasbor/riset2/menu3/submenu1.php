<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <p>Pilot Survei Wisatawan Nusantara</p>
        </header>
        
        <hr class="hrjudul">

        <!-- <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Semua</li>
            <li data-filter=".filter-riset2-hasil1">Hasil 1</li>
            <li data-filter=".filter-riset2-hasil2">Hasil 2</li>
            <li data-filter=".filter-riset2-hasil3">Hasil 3</li>
            <li data-filter=".filter-riset2-tabel">Tabel dummy</li>
            </ul>
        </div>
        </div> -->
    </div>
</section>

<div class="card">
    <div class="card-header">
        <strong>Data Responden Hasil Survei Pendahuluan Riset 2</strong>
    </div>
    <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
        <table class="table table-hover table-bordered table-responsive" id="table_id" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Blok Sensus</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Umur</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                    foreach ($data_tabel_sp_riset2 as $v) :
                ?>
                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $v["BS"]; ?></td>
                        <td><?php echo $v["b502"]; ?></td>
                        <td><?php echo $v["b103_kec"]; ?></td>
                        <td><?php echo $v["b505"]; ?></td>
                    </tr>
                <?php
                    $i++;
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>

