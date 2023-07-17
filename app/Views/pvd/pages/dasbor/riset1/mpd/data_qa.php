<div class="tab-content" id="pills-tabContent">
    <!-- Output 1 -->
    <div class="tab-pane fade show active" id="pills-output1" role="tabpanel" aria-labelledby="pills-output1-tab" tabindex="0">
        <div class="isi-tujuan shadow mt-0 mb-0">
            <h4 class="card-title judul-card">Distribusi Jumlah Records</h4>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas id="qa_output1_1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas id="qa_output1_2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-0 col-lg-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <h3 class="text-center"><b>Interpretasi</b></h3>
                                <p class="text-justify">
                                Distribusi jumlah records pada data Telkomsel setiap bulannya selama Desember 2021—November 2022 relatif datar (stabil). Sedangkan, distribusi jumlah records pada data Indosat Ooredoo berfluktuasi. Hal ini menunjukkan bahwa kualitas data MPD Telkomsel lebih baik daripada kualitas data MPD Indosat Ooredoo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Output 2 -->
    <div class="tab-pane fade " id="pills-output2" role="tabpanel" aria-labelledby="pills-output2-tab" tabindex="0">
        <div class="isi-tujuan shadow mt-0 mb-0">
            <h4 class="card-title judul-card">Jumlah Records Duplicate</h4>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-3" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas id="qa_output2_1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-4" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas id="qa_output2_2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-0 col-lg-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <h3 class="text-center"><b>Interpretasi</b></h3>
                                <p class="text-justify">
                                Selama periode Desember 2021—November 2022, provider Telkomsel tidak memiliki record yang duplikat. Sedangkan, provider Indosat Ooredoo memiliki jumlah record duplikat yang berfluktuasi, dan jumlah records duplicate terbanyak ada pada bulan November 2022. Hal ini menunjukkan bahwa kualitas data MPD provider Telkomsel jauh lebih baik daripada kualitas data MPD Indosat Ooredoo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Output 3 -->
    <div class="tab-pane fade " id="pills-output3" role="tabpanel" aria-labelledby="pills-output3-tab" tabindex="0">
        <div class="isi-tujuan shadow mt-0 mb-0">
            <h4 class="card-title judul-card">Latitude Longitude & LAC Not NULL</h4>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-5" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas id="qa_output3_1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-6" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas id="qa_output3_2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-0 col-lg-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <h3 class="text-center"><b>Interpretasi</b></h3>
                                <p class="text-justify">
                                Data koordinat latitude dan longitude dalam data provider Telkomsel hampir seluruhnya terisi dengan lengkap. Selain itu, data mengenai id provinsi, id kabupaten, dan id kecamatan yang memiliki nilai null hanya sedikit. Dapat disimpulkan bahwa kualitas data MPD provider Telkomsel sangat baik.</p>
                                <p>Data koordinat latitude dan longitude dalam data provider Indosat Ooredoo terisi dengan lengkap secara keseluruhan. Selain itu, data pada record seperti provinsi, kabupaten, dan kecamatan terisi dengan lengkap secara keseluruhan. Hasil ini menunjukkan bahwa kualitas data MPD provider Indosat Ooredoo juga sangat baik.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Output 4 -->
    <div class="tab-pane fade " id="pills-output4" role="tabpanel" aria-labelledby="pills-output4-tab" tabindex="0">
        <div class="isi-tujuan shadow mt-0 mb-0">
            <h4 class="card-title judul-card">Jumlah Records dan Subscribers per Hari Berdasarkan Tipe Data Source</h4>
            <h3 class="text-center"><b>Telkomsel</b></h3>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-7" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas id="qa_output4_1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-8" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas id="qa_output4_2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-0 col-lg-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <h3 class="text-center"><b>Interpretasi</b></h3>
                                <p class="text-justify">
                                Provider Telkomsel memiliki records terbanyak dari source LBA, sedangkan jumlah records paling sedikit adalah data source CHG. Jumlah record untuk source CHG relatif konstan, sedangkan untuk source LBA dan UPCC terdapat perubahan yang cukup signifikan. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="isi-tujuan shadow mt-5 mb-0">
            <h4 class="card-title judul-card">Jumlah Records dan Subscribers per Hari Berdasarkan Tipe Data Source</h4>
            <h3 class="text-center"><b>Indosat</b></h3>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-9" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal9">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas id="qa_output4_3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-10" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal10">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas id="qa_output4_4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-0 col-lg-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <h3 class="text-center"><b>Interpretasi</b></h3>
                                <p class="text-justify">
                                Provider Indosat Ooredoo hanya memiliki tipe data source LBA yang jumlah records dan subscriber-nya konstan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Output 5 -->
    <div class="tab-pane fade " id="pills-output5" role="tabpanel" aria-labelledby="pills-output5-tab" tabindex="0">
        <div class="isi-tujuan shadow mt-0 mb-0">
            <h4 class="card-title judul-card">Jumlah Provinsi, Kabupaten, Kecamatan yang Unik per-Hari</h4>
            <div class="card-body">
                <div class="row">
                <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-11" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal11">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas id="qa_output5_1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-12" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal12">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas id="qa_output5_2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-0 col-lg-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <h3 class="text-center"><b>Interpretasi</b></h3>
                                <p class="text-justify">
                                Baik pada data MPD Telkomsel maupun Indosat, fluktuasi tertinggi terjadi pada jumlah kecamatan, disusul dengan jumlah kabupaten, hal ini menunjukkan subscriber pada tiap harinya melakukan mobilitas pada tingkat kecamatan (bepergian di dalam kota) dan pada tingkat kabupaten (bepergian ke luar kota) tapi masih dalam provinsi yang sama.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Output 7 -->
    <div class="tab-pane fade " id="pills-output7" role="tabpanel" aria-labelledby="pills-output7-tab" tabindex="0">
        <div class="isi-tujuan shadow mt-0 mb-0">
            <h4 class="card-title judul-card">Rata-Rata Jumlah Record per-Jam Selama Satu Tahun</h4>
            <div class="card-body">
                <h3 class="text-center"><b>Telkomsel</b></h3>
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-13" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal13">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox " style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-14" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal14">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-15" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal15">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-16" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal16">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-17" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal17">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_5"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-18" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal18">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_6"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-19" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal19">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_7"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-20" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal20">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_8"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-21" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal21">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_9"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-22" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal22">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_10"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-23" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal23">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_11"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-24" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal24">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_12"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-0 col-lg-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <h3 class="text-center"><b>Interpretasi</b></h3>
                                <p class="text-justify">Data MPD Telkomsel menunjukkan kenaikan rata-rata jumlah records secara signifikan pada pukul enam pagi. Banyaknya rata-rata jumlah record pada pukul 6 pagi hingga 20 (pukul 8 malam) menandakan banyaknya transaksi/aktivitas yang terjadi pada jam tersebut.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="isi-tujuan shadow mt-5 mb-0">
            <h4 class="card-title judul-card">Rata-Rata Jumlah Record per-Jam
            </h4>
            <div class="card-body">
                <h3 class="text-center"><b>Indosat</b></h3>
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-25" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal25">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox " style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_13"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-26" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal26">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_14"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-27" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal27">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_15"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-28" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal28">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_16"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-29" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal29">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_17"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-30" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal30">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_18"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-31" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal31">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_19"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-32" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal32">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_20"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-33" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal33">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_21"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-34" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal34">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_22"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-35" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal35">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_23"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-36" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal36">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas class="mt1" id="qa_output6_24"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-0 col-lg-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <h3 class="text-center"><b>Interpretasi</b></h3>
                                <p class="text-justify">
                                    Data MPD Indosat Ooredoo menunjukkan adanya peningkatan dan penurunan rata-rata jumlah records yang signifikan pada pukul 3 pagi dan 17 (pukul 5 sore). Banyaknya rata-rata jumlah record pada pukul 3 pagi hingga 17 (pukul 5 sore) menandakan banyaknya transaksi/aktivitas yang terjadi pada jam tersebut.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Output 6 -->
    <div class="tab-pane fade " id="pills-output6" role="tabpanel" aria-labelledby="pills-output6-tab" tabindex="0">
        <div class="isi-tujuan shadow mt-0 mb-0">
            <h4 class="card-title judul-card">Jumlah Subscriber/MSISDN yang Hadir</h4>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-37" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal37">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas id="qa_output7_1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="qa-38" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal38">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="chartBox" style=" height:400px;">
                                    <canvas id="qa_output7_2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-0 col-lg-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <h3 class="text-center"><b>Interpretasi</b></h3>
                                <p class="text-justify">
                                    Mayoritas pengguna (baik provider Telkomsel ataupun Indosat) hadir secara lengkap atau menyeluruh pada setiap bulan dalam rentang waktu Desember 2021—November 2022
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<?php include('modal_qa.php') ?>