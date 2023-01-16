<div class="portfolio-item filter-riset3-hasil1">
    <!-- Visualisasi 1.1 -->
    <div class="container">
        <!-- <button onclick="showmsg();" class="tombol btn-for" >Download image</button> -->
        <div class="card d-flex justify-content-center align-item-center flex-md-row primary">
            <div style="width: 900px; height:500px;">
                <div class="position-relative">
                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-download"></i>
                    </button>
                    <div class="selectBox">
                        <form action="">
                            <select id="forBarChart">
                                <option value="a">Jenis Industri</option>
                                <option value="b">Pendidikan Tertinggi</option>
                            </select>
                        </form>
                    </div>
                </div>
                <canvas id="ji_batang"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-item filter-riset3-hasil2">
    <!-- Visualisasi 1.2 -->
    <div class="container">
        <!-- <button class="tombol btn-for" id="btndownload">Download image</button> -->
        <div class="card d-flex justify-content-center align-item-center flex-md-row primary">
            <div class="position-relative">
                <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    <i class="fa-solid fa-download"></i>
                </button>
            </div>
            <div style="width: 550px; height:600px;">
                <canvas id="tk_pie"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-item filter-riset3-hasil3">
    <!-- Visualisasi 1.4 -->
    <div class="container mt-5">
        <!-- <button class="tombol btn-for" id="btndownload2">Download image</button> -->
        <div class="card d-flex justify-content-center align-item-center flex-md-row primary">
            <div class="position-relative">
                <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                    <i class="fa-solid fa-download"></i>
                </button>
            </div>
            <div style="width: 550px; height:600px;">
                <canvas id="j_doughnut"></canvas>
            </div>
        </div>
    </div>
</div>
       

<!-- Tabel dummy -->
<div class="portfolio-item filter-riset3-tabeldummy">
    <div class="">
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
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
            </tbody>
        </table>
    </div><br><br>
    <!-- <div id="map" class="mt-4"></div>             -->
</div>

<?php var_dump($ji) ?>

<!-- Modal Riset 3  -->
<?php include('modal_riset3.php') ?>