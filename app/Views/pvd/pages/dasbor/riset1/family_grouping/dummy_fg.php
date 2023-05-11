<!-- Algoritma 1 -->
<div class="portfolio-item filter-riset1-hasil1" onresize="responsivefonts()">
    <div class="card-body">
        <div class="row">
            <div class="col-6 grid-margin stretch-card">
                <div class="card shadow rounded-4">
                    <div class="card-body">
                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                            <div class="me-1 mt-1 justify-content-end align-item-end">
                                <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    <i class="fa-solid fa-download"></i>
                                </button>
                            </div>
                        </div>
                        <div>
                            <canvas class="mt1" id="riset1_hasil1"></canvas>
                        </div><br>
                        <div>
                            <p class="card-text text-justify">
                                Grafik menunjukkan banyaknya rumah tangga berdasarkan
                                jumlah anggota rumah tangga yang melakukan perjalanan wisata.
                                Terlihat bahwa hanya 5 rumah tangga (5,9%) yang
                                jumlah anggotanya sebesar 5 orang yang melakukan perjalanan wisata.
                            </p>
                        </div>
                        <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                            <div class="form-check form-switch me-3">
                                <input class="form-check-input" onchange="update_value(this);" type="checkbox" id="forBarChartLegend" value="show" checked>
                                <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legend</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 grid-margin stretch-card">
                <div class="card shadow rounded-4">
                    <div class="card-body">
                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                            <div class="me-1 mt-1 justify-content-end align-item-end">
                                <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    <i class="fa-solid fa-download"></i>
                                </button>
                            </div>
                        </div>

                        <div>
                            <div>
                                <div class="card">
                                    <div class="card-body konten-teks">
                                        <p class="card-title">Jumlah RT <br>21 (24,7%) <br></p>
                                        <p class="card-text subs">Dengan ART sebanyak 4 orang</p>
                                        <p class="card-text text-justify">
                                            Banyaknya Rumah Tangga (RT) dengan anggota
                                            rumah tangga (ART) sebanyak 4 orang yang melakukan perjalanan
                                            yaitu sebesar 21 rumah tangga (24,7%) dari total 85 rumah tangga yang
                                            melakukan perjalanan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Algoritma 2 -->
<div class="portfolio-item filter-riset1-hasil2" onresize="responsivefonts()">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card shadow rounded-4">
                    <div class="card-body">
                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                            <div class="me-1 mt-1 justify-content-end align-item-end">
                                <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    <i class="fa-solid fa-download"></i>
                                </button>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="card">
                                    <div class="card-body konten-teks">
                                        <p class="card-title">80 Perjalanan</p>
                                        <p class="card-text subs">Dari Sukun ke Klojen</p>
                                        <p class="card-text text-justify">
                                            Dari banyaknya jumlah perjalanan wisata yang dilakukan,
                                            sebanyak 80 perjalanan terjadi dari kecamatan Sukun ke kecamatan Klojen.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card shadow rounded-4">
                    <div class="card-body">
                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                            <div class="me-1 mt-1 justify-content-end align-item-end">
                                <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    <i class="fa-solid fa-download"></i>
                                </button>
                            </div>
                        </div>
                        <div>
                            <canvas class="mt1" id="sankey"></canvas>
                        </div><br>
                        <div>
                            <p class="card-text text-justify">
                                Diagram Sankey menunjukkan jumlah perjalanan wisata
                                menurut kecamatan asal dan kecamatan tujuan wisata
                                di daerah Jawa Timur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Algoritma 3 -->
<div class="portfolio-item filter-riset1-hasil3" onresize="responsivefonts()">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow rounded-4">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="wisnus-3" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt1" id="wisnus_output3"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value_output3(this);" type="checkbox" id="forBarChartAxis_output3" value="show" checked>
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Sumbu</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>