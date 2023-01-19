<!-- Riset 1 Hasil 1 -->
<div class="portfolio-item filter-hasil1">
    <div class="container mt-5">
        <!-- <button onclick="showmsg();" class="tombol btn-for" >Download image</button> -->
        <div class="card d-flex justify-content-center flex-column align-item-center flex-md primary pb-5 pt-5 ">
            <div class="d-flex flex-row align-item-center justify-content-center container text-center" style="width: 95%;height:80vh">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                    <div class="selectBox mt-2 me-2">
                        <form action="">
                            <select id="forBarChart">
                                <option value="a">Jumlah ART Perjalanan Wisata</option>
                                <option value="b">Jenis Kelamin</option>
                            </select>
                        </form>
                    </div>
                    <div class="me-1 mt-1 justify-content-end align-item-end">
                        <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal1">
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
    <div class="container mt-5">
        <!-- <button onclick="showmsg();" class="tombol btn-for" >Download image</button> -->
        <div class="card d-flex justify-content-center flex-column align-item-center flex-md primary pb-5 pt-5 ">
            <div class="d-flex flex-row align-item-center justify-content-center container text-center" style="width: 95%;height:80vh">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                    <div class="selectBox mt-2 me-2">
                        <form action="">
                            <select id="forhasil2Chart">
                                <option value="a">Tindakan Perjalanan</option>
                                <option value="b">Jumlah Simcard</option>
                            </select>
                        </form>
                    </div>
                    <div class="me-1 mt-1 justify-content-end align-item-end">
                        <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            <i class="fa-solid fa-download"></i>
                        </button>
                    </div>
                </div>
                <canvas id="jk_batang"></canvas>
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

                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Riset 1  -->
<?php include('modal_riset1.php') ?>