<!-- Persamaan Regresi -->
<div class="portfolio-item filter-riset2-hasil1">
    <div class="col-12 col-sm-12">
        <h1 class="headline">Model Regresi</h1>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow rounded-5">
                <div class="card-body">
                    <div class="text-justify" style="color: #4b395f;">
                        Model terbaik yang dapat menjelaskan jumlah perjalanan wisata dalam kota adalah regresi Zero-Inflated Negative Binomial. Terdapat dua model yang terbentuk pada regresi Zero-Inflated Negative Binomial, yaitu model <i> zero-inflation</i> dengan fungsi penghubung binomial dan model <i>count</i> dengan fungsi penghubung negatif binomial.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Variabel -->
<div class="portfolio-item filter-riset2-hasil1">
    <div class="col-12 col-sm-12">
        <h1 class="headline">Kerangka Pikir</h1>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow rounded-5" style="background-color: #dce0ea;">
                <div class="card-body">

                    <!-- <div class="row-6 d-flex align-items-center justify-content-center"> -->
                    <img src="<?= base_url('pvd/img/dasbor/riset2/kerangka_pikir.png') ?>" class="img-fluid" alt="">
                    <!-- </div> -->

                    <!-- <p>
                        <b>VARIABEL BEBAS</b>
                    </p> -->

                    <!-- <div class="col varbebas">
                        <div class="row justify-content-center "> -->
                    <!-- Jenis Kelamin -->
                    <!-- <div class="col align-items-center d-flex align-self-center mb-4 shadow rounded-4 mx-4">
                                <div class="card-body p-3">
                                    <div class="col">
                                        <p class="card-title  ">
                                        <div style="line-height: 20px; color: #4b395f;"><i
                                                class="fas fa-city col-1 ikon"></i><strong> Jenis Kelamin</strong></div>
                                        </p>
                                    </div>
                                </div>
                            </div> -->

                    <!-- Jenis Pekerjaan KRT -->
                    <!-- <div class="col align-items-center d-flex align-self-center mb-4 shadow rounded-4 mx-4">
                                <div class="card-body p-3">
                                    <div class="col">
                                        <p class="card-title  ">
                                        <div style="line-height: 20px; color: #4b395f;"><i
                                                class="fas fa-city col-1 ikon"></i><strong> Jenis Pekerjaan KRT</strong>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    <!-- <div class="row justify-content-center "> -->
                    <!-- Umur -->
                    <!-- <div class="col align-items-center d-flex align-self-center mb-4 shadow  rounded-4 mx-4">
                                <div class="card-body p-3">
                                    <div class="col">
                                        <p class="card-title  ">
                                        <div style="line-height: 20px; color: #4b395f;"><i
                                                class="fas fa-city col-1 ikon"></i><strong> Umur</strong></div>
                                        </p>
                                    </div>
                                </div>
                            </div> -->

                    <!-- Gangguan Disabilitas -->
                    <!-- <div class="col align-items-center d-flex align-self-center mb-4 shadow  rounded-4 mx-4">
                                <div class="card-body p-3">
                                    <div class="col">
                                        <p class="card-title  ">
                                        <div style="line-height: 20px; color: #4b395f;"><i
                                                class="fas fa-city col-1 ikon"></i><strong> Gangguan
                                                Disabilitas</strong></div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center "> -->
                    <!-- Tingkat Pendidikan -->
                    <!-- <div class="col align-items-center d-flex align-self-center mb-4 shadow  rounded-4 mx-4">
                                <div class="card-body p-3">
                                    <div class="col">
                                        <p class="card-title  ">
                                        <div style="line-height: 20px; color: #4b395f;"><i
                                                class="fas fa-city col-1 ikon"></i><strong> Tingkat Pendidikan</strong>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div> -->

                    <!-- Kepemilikan Mobil -->
                    <!-- <div class="col align-items-center d-flex align-self-center mb-4 shadow  rounded-4 mx-4">
                                <div class="card-body p-3">
                                    <div class="col">
                                        <p class="card-title  ">
                                        <div style="line-height: 20px; color: #4b395f;"><i
                                                class="fas fa-city col-1 ikon"></i><strong> Kepemilikan Mobil</strong>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center "> -->
                    <!-- Kepemilikan Motor -->
                    <!-- <div class="col align-items-center d-flex align-self-center mb-4 shadow rounded-4 mx-4">
                                <div class="card-body p-3">
                                    <div class="col text-center">
                                        <p class="card-title">
                                        <div style="line-height: 20px; color: #4b395f;"><i
                                                class="fas fa-city col-1 ikon"></i><strong>Kepemilikan Motor</strong>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Banyak Perjalanan-->
                    <!-- <div
                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                        <div class="card-body text-center">
                            <i class="fas fa-user-alt col-1 ikon" style="font-size: 30px;"></i>
                            <p class="card-text text-center">
                            <div class="text-center">
                                Variabel Tidak Bebas
                            </div>
                            </p>
                            <div class="" style="color: #4b395f; font-size: 30px;"><strong>Banyak Perjalanan</strong>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Persamaan Regresi -->
<!-- <div class="portfolio-item filter-riset2-hasil1">
    <div class="col-12 col-sm-12">
        <h1 class="headline text-center">Persamaan Regresi</h1>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow rounded-5">
                <div class="card-body">
                    <div class="text-center" style="color: #4b395f; font-size: 25px;">
                        <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, impedit!</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Interpretasi -->
<div class="portfolio-item filter-riset2-hasil1">
    <div class="col-12 col-sm-12">
        <h1 class="headline">Interpretasi</h1>
    </div>

    <div class="row">
        <div class="col-6 interpretasi">
            <!-- Jenis Kelamin -->
            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                <div class="card-body text-center">
                    <!-- <i class="fas fa-user-alt col-1 ikon " style="font-size: 25px;"></i> -->
                    <div class="row-6 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_4.png') ?>" class="img-fluid" alt="" style="height: 75px;">
                    </div>
                    <div class="text-center" style="color: #4b395f; font-size: 25px;"><strong>Jenis Kelamin</strong>
                    </div>
                    <div class="row mt-2" style="color: #4b395f; font-size:25px; ">
                        <!-- <i class="fas fa-city col-1 ikon my-auto"></i> -->
                        <div class="col-lg-3 grid-margin" style="margin-left: -1rem;">
                            <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_14.png') ?>" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-10 grid-margin text-start" style="font-size:15px; margin-left: -1rem;">
                            Laki-laki dan perempuan cenderung memiliki rata-rata perjalanan wisata yang sama.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Umur -->
            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-4 align-items-center d-flex flex-column">
                <div class="card-body text-center">
                    <!-- <i class="fas fa-user-alt col-1 ikon " style="font-size: 25px;"></i> -->
                    <div class="row-6 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_9.png') ?>" class="img-fluid" alt="" style="height: 75px;">
                    </div>
                    <div class="text-center" style="color: #4b395f; font-size: 25px;"><strong>Umur</strong>
                    </div>
                    <div class="row mt-2" style="color: #4b395f; font-size:25px;">
                        <!-- <i class="fas fa-city col-1 ikon my-auto"></i> -->
                        <div class="col-lg-3 grid-margin" style="margin-left: -1rem;">
                            <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_15.png') ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-10 grid-margin text-start pl-0" style="font-size:15px; margin-left: -1rem;">
                            Usia tidak berpengaruh pada besarnya rerata frekuensi perjalanan wisata.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 interpretasi">
            <!-- Tingkat Pendidikan -->
            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                <div class="card-body text-center">
                    <!-- <i class="fas fa-user-alt col-1 ikon " style="font-size: 25px;"></i> -->
                    <div class="row-6 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_5.png') ?>" class="img-fluid" alt="" style="height: 75px;">
                    </div>
                    <div class="text-center" style="color: #4b395f; font-size: 25px;"><strong>Tingkat Pendidikan</strong>
                    </div>
                    <div class="row mt-2" style="color: #4b395f; font-size:25px;">
                        <!-- <i class="fas fa-city col-1 ikon my-auto"></i> -->
                        <div class="col-lg-3 grid-margin" style="margin-left: -1rem;">
                            <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_21.png') ?>" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-10 grid-margin text-start pl-0" style="font-size:15px; margin-left: -1rem;">
                            Penduduk tamatan SD dan penduduk yang tidak/belum sekolah/tidak tamat SD/MI cenderung memiliki rata-rata perjalanan wisata yang sama.
                        </div>
                    </div>
                    <div class="row mt-2" style="color: #4b395f; font-size:25px;">
                        <!-- <i class="fas fa-city col-1 ikon my-auto"></i> -->
                        <div class="col-lg-3 grid-margin" style="margin-left: -1rem;">
                            <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_22.png') ?>" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-10 grid-margin text-start pl-0" style="font-size:15px; margin-left: -1rem;">
                            Penduduk tamatan SMP cenderung memiliki rata-rata perjalanan wisata <b style="color: green;">1,5 kali</b> lebih banyak daripada penduduk yang tidak/belum sekolah/tidak tamat SD/MI.
                        </div>
                    </div>
                    <div class="row mt-2" style="color: #4b395f; font-size:25px;">
                        <!-- <i class="fas fa-city col-1 ikon my-auto"></i> -->
                        <div class="col-lg-3 grid-margin" style="margin-left: -1rem;">
                            <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_23.png') ?>" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-10 grid-margin text-start pl-0" style="font-size:15px; margin-left: -1rem;">
                            Penduduk tamatan SMA cenderung memiliki rata-rata perjalanan wisata <b style="color: green;">1,76 kali</b> lebih banyak daripada penduduk yang tidak/belum sekolah/tidak tamat SD/MI.
                        </div>
                    </div>
                    <div class="row mt-2" style="color: #4b395f; font-size:25px;">
                        <!-- <i class="fas fa-city col-1 ikon my-auto"></i> -->
                        <div class="col-lg-3 grid-margin" style="margin-left: -1rem;">
                            <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_24.png') ?>" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-10 grid-margin text-start pl-0" style="font-size:15px; margin-left: -1rem;">
                            Penduduk tamatan Perguruan Tinggi cenderung memiliki rata-rata perjalanan wisata <b style="color: green;">2,03 kali</b> lebih banyak daripada penduduk yang tidak/belum sekolah/tidak tamat SD/MI.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6 interpretasi">
            <!-- Jenis Pekerjaan KRT -->
            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                <div class="card-body text-center">
                    <!-- <i class="fas fa-user-alt col-1 ikon " style="font-size: 25px;"></i> -->
                    <div class="row-6 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_6.png') ?>" class="img-fluid" alt="" style="height: 75px;">
                    </div>
                    <div class="text-center" style="color: #4b395f; font-size: 25px;"><strong>Jenis Pekerjaan KRT</strong>
                    </div>
                    <div class="row mt-2" style="color: #4b395f; font-size:25px;">
                        <!-- <i class="fas fa-city col-1 ikon my-auto"></i> -->
                        <div class="col-lg-3 grid-margin" style="margin-left: -1rem;">
                            <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_16.png') ?>" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-10 grid-margin text-start pl-0" style="font-size:15px; margin-left: -1rem;">
                            Penduduk dengan KRT kategori pekerjaan formal cenderung memiliki rata-rata perjalanan wisata <b style="color: green;">1,18 kali</b> lebih banyak daripada penduduk dengan KRT kategori pekerjaan informal.

                        </div>
                    </div>
                    <div class="row mt-2" style="color: #4b395f; font-size:25px;">
                        <!-- <i class="fas fa-city col-1 ikon my-auto"></i> -->
                        <div class="col-lg-3 grid-margin" style="margin-left: -1rem;">
                            <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_17.png') ?>" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-10 grid-margin text-start pl-0" style="font-size:15px; margin-left: -1rem;">
                            Penduduk dengan KRT yang menganggur cenderung memiliki rata-rata perjalanan wisata <b style="color: red;">0,83 kali</b> lebih sedikit daripada penduduk dengan KRT kategori pekerjaan informal.
                        </div>
                    </div>
                    <div class="row mt-2" style="color: #4b395f; font-size:25px;">
                        <!-- <i class="fas fa-city col-1 ikon my-auto"></i> -->
                        <div class="col-lg-3 grid-margin" style="margin-left: -1rem;">
                            <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_18.png') ?>" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-10 grid-margin text-start pl-0" style="font-size:15px; margin-left: -1rem;">
                            Antara penduduk dengan KRT kategori pekerjaan lainnya dan penduduk dengan KRT kategori pekerjaan informal cenderung memiliki rata-rata perjalanan wisata yang sama.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 interpretasi">
            <!-- Jenis Pekerjaan ART -->
            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                <div class="card-body text-center">
                    <!-- <i class="fas fa-user-alt col-1 ikon " style="font-size: 25px;"></i> -->
                    <div class="row-6 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_13.png') ?>" class="img-fluid" alt="" style="height: 75px;">
                    </div>
                    <div class="text-center" style="color: #4b395f; font-size: 25px;"><strong>Jenis Pekerjaan ART</strong>
                    </div>
                    <div class="row mt-2" style="color: #4b395f; font-size:25px;">
                        <!-- <i class="fas fa-city col-1 ikon my-auto"></i> -->
                        <div class="col-lg-3 grid-margin" style="margin-left: -1rem;">
                            <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_16.png') ?>" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-10 grid-margin text-start pl-0" style="font-size:15px; margin-left: -1rem;">
                            Antara ART kategori pekerjaan formal dan ART kategori pekerjaan informal cenderung memiliki rata-rata perjalanan wisata yang sama.
                        </div>
                    </div>
                    <div class="row mt-2" style="color: #4b395f; font-size:25px;">
                        <!-- <i class="fas fa-city col-1 ikon my-auto"></i> -->
                        <div class="col-lg-3 grid-margin" style="margin-left: -1rem;">
                            <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_17.png') ?>" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-10 grid-margin text-start pl-0" style="font-size:15px; margin-left: -1rem;">
                            Antara ART yang menganggur dan ART kategori pekerjaan informal cenderung memiliki rata-rata perjalanan wisata yang sama.
                        </div>
                    </div>
                    <div class="row mt-2" style="color: #4b395f; font-size:25px;">
                        <!-- <i class="fas fa-city col-1 ikon my-auto"></i> -->
                        <div class="col-lg-3 grid-margin" style="margin-left: -1rem;">
                            <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_18.png') ?>" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-10 grid-margin text-start pl-0" style="font-size:15px; margin-left: -1rem;">
                            Antara ART kategori pekerjaan lainnya dan ART kategori pekerjaan informal cenderung memiliki rata-rata perjalanan wisata yang sama.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6 interpretasi">
            <!-- Gangguan Disabilitas -->
            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                <div class="card-body text-center">
                    <!-- <i class="fas fa-user-alt col-1 ikon " style="font-size: 25px;"></i> -->
                    <div class="row-6 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_7.png') ?>" class="img-fluid" alt="" style="height: 75px;">
                    </div>
                    <div class="text-center" style="color: #4b395f; font-size: 25px;"><strong>Gangguan Disabilitas</strong>
                    </div>
                    <div class="row mt-2" style="color: #4b395f; font-size:25px;">
                        <!-- <i class="fas fa-city col-1 ikon my-auto"></i> -->
                        <div class="col-lg-3 grid-margin" style="margin-left: -1rem;">
                            <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_19.png') ?>" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-10 grid-margin text-start pl-0" style="font-size:15px; margin-left: -1rem;">
                            Penduduk yang bukan penyandang disabilitas cenderung memiliki rata-rata perjalanan wisata <b style="color: green;">1,15 kali</b> lebih banyak daripada penduduk penyandang disabilitas.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 interpretasi">
            <!-- Kepemilikan Mobil -->
            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                <div class="card-body text-center">
                    <!-- <i class="fas fa-user-alt col-1 ikon " style="font-size: 25px;"></i> -->
                    <div class="row-6 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_8.png') ?>" class="img-fluid" alt="" style="height: 75px;">
                    </div>
                    <div class="text-center" style="color: #4b395f; font-size: 25px;"><strong>Kepemilikan Mobil</strong>
                    </div>
                    <div class="row mt-2" style="color: #4b395f; font-size:25px;">
                        <!-- <i class="fas fa-city col-1 ikon my-auto"></i> -->
                        <div class="col-lg-3 grid-margin" style="margin-left: -1rem;">
                            <img src="<?= base_url('pvd/img/dasbor/riset2/artboard_20.png') ?>" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-10 grid-margin text-start pl-0" style="font-size:15px; margin-left: -1rem;">
                            Penduduk yang dalam rumah tangganya memiliki mobil cenderung memiliki rata-rata perjalanan wisata <b style="color: green;">1,07 kali</b> lebih banyak daripada penduduk yang dalam rumah tangganya tidak memiliki mobil
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row mt-3">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow rounded-5">
                <div class="card-body">
                    <div class="text-justify">
                        <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere rem maxime autem
                            soluta. Velit est dolor nulla aperiam ipsam voluptate sequi accusantium consequatur odio a,
                            ea distinctio cupiditate, iste nisi!</strong>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>