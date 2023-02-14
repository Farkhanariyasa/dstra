<!-- Tabulasi 1 -->
<div class="portfolio-item filter-riset2-hasil1">
    <div class="card">
        <div class="card-header">
            <div class="card-title text-center mt-2">Data Responden Hasil Survei Pendahuluan Riset 1 A</div>
            <!-- <button type="button" class="tombol btn-for text-right me-1 mt-1 justify-content-end align-item-end" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                            <i class="fa-solid fa-download"></i>
   </button> -->
        </div>
        <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
            <!-- style="padding:0px 0px 0px 0px;" -->
            <!-- <blockquote class="blockquote mb-0"> -->
            <table class="table table-hover table-bordered table-responsive" id="table_id" style="width:100%">
                <thead style="color: #fff; font-weight:bold;">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Desa/Kelurahan</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Indosat</th>
                        <th scope="col">Telkomsel</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($dataresponden as $v) :
                    ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $v["b108"]; ?></td>
                            <td><?php echo $v["b104_deskel"]; ?></td>
                            <td><?php echo $v["b103_kec"]; ?></td>
                            <td><?php echo $v["b201"]; ?></td>
                            <td><?php echo $v["b203"]; ?></td>
                        </tr>
                    <?php
                        $i++;
                    endforeach;
                    ?>
                </tbody>
            </table>
            <!-- </blockquote> -->
        </div>
    </div>
</div>

<div class="portfolio-item filter-riset2-hasil2">
    <div class="card">
        <div class="card-header">
            <div class="card-title text-center mt-2">Data Responden Hasil Survei Pendahuluan Riset 1 B</div>
            <!-- <button type="button" class="tombol btn-for text-right me-1 mt-1 justify-content-end align-item-end" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                            <i class="fa-solid fa-download"></i>
   </button> -->
        </div>
        <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
            <!-- style="padding:0px 0px 0px 0px;" -->
            <!-- <blockquote class="blockquote mb-0"> -->
            <table class="table table-hover table-bordered table-responsive" id="table_id" style="width:100%">
                <thead style="color: #fff; font-weight:bold;">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Desa/Kelurahan</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Blok Sensus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($dataresponden as $v) :
                    ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $v["b108"]; ?></td>
                            <td><?php echo $v["b104_deskel"]; ?></td>
                            <td><?php echo $v["b103_kec"]; ?></td>
                            <td><?php echo $v["b105"]; ?></td>
                        </tr>
                    <?php
                        $i++;
                    endforeach;
                    ?>
                </tbody>
            </table>
            <!-- </blockquote> -->
        </div>
    </div>
</div>