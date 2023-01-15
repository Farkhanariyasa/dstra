<!-- Riset 1 Hasil 1 -->
<div class="portfolio-item filter-hasil1">
    <div class="container mt-5">
        <div class="card d-flex justify-content-center align-item-center flex-md-row primary" style="height: 600px;">
            <div class="content pl-4 mt-2" style="width: 800px; height:500px;">
                <div class="position-relative">
                    <div class="position-absolute top-0 end-0">
                        <!-- ganti modal -->
                        <!-- <button class="tombol btn-for" id="btndownload">
                            <i class="fa-solid fa-download"></i>
                        </button> --> 
                        <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal1-1">
                            <i class="fa-solid fa-download"></i>
                        </button>
                    </div>
                </div>
                <canvas id="riset1_hasil1"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Riset 1 Hasil 2 -->
<div class="portfolio-item filter-hasil2">
    <div class="content pl-4 mt-2">
        <div class="card d-flex justify-content-center align-item-center flex-md-row primary">
            <div class="content pl-4 mt-2" style="width: 800px; height:500px;">
                <div class="position-relative">
                    <div class="position-absolute top-0 end-0">
                         <!-- tambah modal -->
                        <!-- <button class="tombol btn-for" id="btndownload2"><i class="fa-solid fa-download"></i></button> -->
                        <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal1-2">
                            <i class="fa-solid fa-download"></i>
                        </button>
                    </div>
                </div>
                <canvas id="riset1_hasil2"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Riset 1 Hasil 3 -->
<div class="portfolio-item filter-hasil3">
    <div class="container mt-5">
        <div class="card d-flex justify-content-center align-item-center flex-md-row primary">
            <div class="content pl-4 mt-2" style="width: 800px; height:500px;">
                <div class="position-relative">
                    <div class="position-absolute top-0 end-0">
                         <!-- tambah modal -->
                        <!-- <button class="tombol btn-for" id="btndownload3"><i class="fa-solid fa-download"></i></button> -->
                        <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal1-3">
                            <i class="fa-solid fa-download"></i>
                        </button>
                    </div>
                </div>
                <canvas id="riset1_hasil3"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Tabel dummy -->
<div class="portfolio-item filter-tabel">
    <div class="container-fluid turun">
        <div class="kontenH mx-auto position-relative" data-aos="zoom-in" data-aos-duration="1000">
            <img src="" class="d-md-block d-none ornamen3" alt="">
            <div class="row py-5 d-flex justify-content-center">
                <div class="mx-3 my-3 my-lg-0 d-flex align-items-center justify-content-center info">
                    <h1 class="text-center fw-bold">Tabel</h1>
                </div>
                <div class="card mx-3 p-1 p-md-3 kgambar">
                    <div class="card-body kontener">
                        <table id="example" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Tingkat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($datamhs as $v) :
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $i; ?></th>
                                        <td><?php echo $v["nama"]; ?></td>
                                        <td><?php echo $v["jeniskelamin"]; ?></td>
                                        <td><?php echo $v["jurusan"]; ?></td>
                                        <td><?php echo $v["tingkat"]; ?></td>
                                    </tr>
                                <?php
                                    $i++;
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Riset 3  -->
<?php include('modal_riset1.php') ?>