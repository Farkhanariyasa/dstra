
<!-- Riset 4 Hasil 1 -->
<div class="portfolio-item filter-hasil2">
<div class="container mt-5">
        <!-- <button onclick="showmsg();" class="tombol btn-for" >Download image</button> -->
        <div class="card d-flex justify-content-center flex-column align-item-center flex-md primary pb-5 pt-5 ">
            <div style="width: 900px; height:500px;" class="d-flex flex-row align-item-center justify-content-center">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                    <div class="me-1 mt-1 justify-content-end align-item-end">
                        <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-download"></i>
                        </button>
                    </div>
                </div>
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>

<!-- Riset 4 Hasil 2 -->
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


<!-- Modal Riset 4  -->
<?php include('modal_riset4.php') ?>