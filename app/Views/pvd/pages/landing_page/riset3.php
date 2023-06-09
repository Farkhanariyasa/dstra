<?= $this->extend('pvd/layout/landing_page/template'); ?>

<?= $this->section('content'); ?>
<?php include(APPPATH . 'Views/pvd/pages/dasbor/riset3/hasilkajian/modal_landing_3.php') ?>
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

<section>
    <section id="hero" class="hero d-flex align-items-center">
        <!-- Judul Landing Page -->
        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up" class="titleRiset4Top">Riset 3</h1>
                    <h5 data-aos="fade-up" data-aos-delay="400" class="descRiset4">
                        Tenaga Kerja di Industri Pariwisata
                    </h5>
                    <p data-aos="fade-up" data-aos-delay="400" class="text-justify">
                        Pariwisata merupakan <i>leading sector</i> pembangunan di Indonesia yang menjadi salah satu
                        penyumbang devisa terbesar di Indonesia. Peningkatan kontribusi pariwisata terhadap perekonomian
                        dapat dilakukan dengan meningkatkan kualitas tenaga kerja. Sehingga diperlukan data terkait
                        karakteristik dan kualitas tenaga kerja di industri pariwisata. Riset ini bertujuan untuk memperoleh
                        gambaran sosiodemografi dan kualitas tenaga kerja di industri pariwisata, menganalisis dinamika tenaga
                        kerja di industri pariwisata, menganalisis faktor-faktor yang memengaruhi jam kerja tenaga kerja di
                        industri pariwisata, dan mengukur tingkat sadar wisata dari tenaga kerja industri pariwisata dengan
                        indeks komposit.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a id="tombol" href="<?= base_url('hasil-pkl/riset3/dasbor') ?>" class="tombol btn-for text-decoration-none">
                                <span>Hasil PKL</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?= base_url('pvd/img/landingpage/riset3/riset3.png') ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
    <!-- Latar Belakang -->
    <section class="hero">
        <section class="offset-header">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center pt-5">Latar Belakang</h1>
                    </div>
                </div>
                <div class="konten third5 shadow box par m-auto p-4 p-md-5 mt-4" data-aos="zoom-in" data-aos-duration="1000">
                    <p class="text-justify">
                        Indonesia sebagai salah satu negara kepulauan terbesar di dunia dengan berbagai kekayaan
                        sumber daya alam dan keunikan budaya memiliki banyak potensi yang dapat dikembangkan
                        terkait sektor pariwisata. Potensi tersebut meliputi:
                        <a id="latarBelakangAtas" onclick="ubahKelas1(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            [<strong><i>Tampilkan Semua</i></strong>]
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <ol class="text-justify">
                            <li>Kemampuan dalam hal pembangunan destinasi pariwisata</li>
                            <li>Potensi pembangunan pemasaran pariwisata yang nilainya terus naik dari tahun ke tahun</li>
                            <li>Pembangunan industri pariwisata</li>
                        </ol>
                        <p class="text-justify">
                            Untuk dapat mengembangkan potensi pariwisata di Indonesia dan meninjau berbagai hal
                            tersebut, perlu adanya ketersediaan data dan informasi terkait tenaga kerja di sektor
                            pariwisata yang dapat menjadi dasar dalam pengambilan kebijakan oleh pemerintah.
                            <a id="latarBelakangBawah" onclick="ubahKelas2(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                [<strong><i>Tampilkan Sebagian</i></strong>]
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tujuan Penelitian -->
        <section class="offset-header">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Tujuan Penelitian</h1>
                    </div>
                </div>
                <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                    <ol class="text-justify">
                        <li>Memperoleh gambaran sosiodemografi dan kualitas tenaga kerja di industri pariwisata.</li>
                        <li>Menganalisis dinamika tenaga kerja di industri pariwisata.</li>
                        <li>Menganalisis faktor-faktor yang memengaruhi jam kerja tenaga kerja lokal di industri pariwisata.</li>
                        <li>Mengukur tingkat sadar wisata dari tenaga kerja industri pariwisata dengan indeks komposit.</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Batasan -->
        <section class="offset-header">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Batasan Penelitian</h1>
                    </div>
                </div>

                <div class="konten third5 par d-flex flex-row m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="col">
                        <div class="row align-items-center text-center">
                            <div class="col-lg-6 align-items-center d-flex flex-column mt-3">
                                <div class="card">
                                    <h5 class="card-header">Objek</h5>
                                    <div class="card-body">
                                        <p class="card-text">Tenaga Kerja di Industri Pariwisata</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 align-items-center d-flex flex-column mt-3">
                                <div class="card">
                                    <h5 class="card-header">Cakupan Penelitian</h5>
                                    <div class="card-body">
                                        <p class="card-text">Kabupaten Malang</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Metode -->
        <section class="offset-header">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Metode</h1>
                    </div>
                </div>
                <!-- metode-->
                <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box text-light" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="text-center mb-3">
                        <h5 class="badge badge-pill badge-primary metode text-light">Three Stage Cluster Sampling</h5>
                    </div>
                    <!--first section-->
                    <div class="row align-items-center how-it-works d-flex">
                        <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                            <div class="circle font-weight-bold">1</div>
                        </div>
                        <div class="col-6">
                            <h5>Tahap I</h5>
                            <h4>PPS WR</h4>
                            <p>size: jumlah objek wisata & akomodasi</>
                        </div>
                    </div>
                    <!--path between 1-2-->
                    <div class="row timeline">
                        <div class="col-2">
                            <div class="corner top-right"></div>
                        </div>
                        <div class="col-8">
                            <hr />
                        </div>
                        <div class="col-2">
                            <div class="corner left-bottom"></div>
                        </div>
                    </div>
                    <!--second section-->
                    <div class="row align-items-center justify-content-end how-it-works d-flex">
                        <div class="col-6 text-right">
                            <h5>Tahap II</h5>
                            <h4>PPS WR</h4>
                            <p>size: jumlah usaha sektor pariwisata</p>
                        </div>
                        <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                            <div class="circle font-weight-bold">2</div>
                        </div>
                    </div>
                    <!--path between 2-3-->
                    <div class="row timeline">
                        <div class="col-2">
                            <div class="corner right-bottom"></div>
                        </div>
                        <div class="col-8">
                            <hr />
                        </div>
                        <div class="col-2">
                            <div class="corner top-left"></div>
                        </div>
                    </div>
                    <!--third section-->
                    <div class="row align-items-center how-it-works d-flex">
                        <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
                            <div class="circle font-weight-bold">3</div>
                        </div>
                        <div class="col-6">
                            <h5>Tahap III</h5>
                            <h4>Systematic Sampling</h4>
                            <p>dengan <i>implicit stratification</i> berupa penggolongan "sedang bekerja" dan "pernah bekerja"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ruang Lingkup -->
        <section class="offset-header">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Ruang Lingkup Penelitian</h1>
                    </div>
                </div>
                <div class="konten third5 par d-flex flex-row m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                    <div class=" col">
                        <div class="row">
                            <div class="col-lg-4 align-items-center d-flex flex-column mt-3">
                                <div class="ruang">
                                    <p style="font-size: 22px; cursor: pointer;" class="text-white" data-bs-toggle="modal" data-bs-target="#populasiModal">Populasi</p>
                                </div>
                            </div>
                            <div class="col-lg-4 align-items-center d-flex flex-column mt-3">
                                <div class="ruang">
                                    <p style="font-size: 22px; cursor: pointer;" class="text-white" data-bs-toggle="modal" data-bs-target="#poptarModal">Populasi Target</p>
                                </div>
                            </div>
                            <div class="col-lg-4 align-items-center d-flex flex-column mt-3">
                                <div class="ruang">
                                    <p style="font-size: 22px; cursor: pointer;" class="text-white" data-bs-toggle="modal" data-bs-target="#unitobsModal">Unit Observasi</p>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col align-items-center d-flex flex-column mt-3">
                                <div class="ruang pt-2">
                                    <div class="row backrow">
                                        <div class="col-2 sidebuttonl">
                                            <button class="slideButton" onclick="plusDivs(-1)">&#10094;</button>
                                        </div>
                                        <div class="col-8 boxkerangka d-flex justify-content-center align-items-center">
                                            <p style="font-size: 22px;" class="mySlides text-white text-center">Unit Sampling</p>
                                            <p style="font-size: 20px; cursor: pointer;" class="mySlides text-white text-center resizefont" data-bs-toggle="modal" data-bs-target="#unsampModal1">Primary</p>
                                            <p style="font-size: 20px; cursor: pointer;" class="mySlides text-white text-center resizefont" data-bs-toggle="modal" data-bs-target="#unsampModal2">Secondary</p>
                                            <p style="font-size: 20px; cursor: pointer;" class="mySlides text-white text-center resizefont" data-bs-toggle="modal" data-bs-target="#unsampModal3">Ultimate</p>
                                        </div>
                                        <div class="col-2 sidebuttonr">
                                            <button class="slideButtonR" onclick="plusDivs(1)">&#10095;</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-items-center d-flex flex-column mt-3">
                                <div class="ruang">
                                    <p style="font-size: 22px; cursor: pointer;" class="text-white" data-bs-toggle="modal" data-bs-target="#unitanaModal">Unit Analisis</p>
                                </div>
                            </div>
                            <div class="col align-items-center d-flex flex-column mt-3">
                                <div class="ruang pt-2">
                                    <div class="row backrow">
                                        <div class="col-2 sidebuttonl">
                                            <button class="slideButton" onclick="plusDivs2(-1)">&#10094;</button>
                                        </div>
                                        <div class="col-8 boxkerangka d-flex justify-content-center align-items-center">
                                            <p style="font-size: 22px;" class="mySlides2 text-white text-center">Kerangka Sampel</p>
                                            <p style="font-size: 20px; cursor: pointer;" class="mySlides2 text-white text-center resizefont" data-bs-toggle="modal" data-bs-target="#krsampModal1">Primary</p>
                                            <p style="font-size: 20px; cursor: pointer;" class="mySlides2 text-white text-center resizefont" data-bs-toggle="modal" data-bs-target="#krsampModal2">Secondary</p>
                                            <p style="font-size: 20px; cursor: pointer;" class="mySlides2 text-white text-center resizefont" data-bs-toggle="modal" data-bs-target="#krsampModal3">Ultimate</p>
                                        </div>
                                        <div class="col-2 sidebuttonr">
                                            <button class="slideButtonR" onclick="plusDivs2(1)">&#10095;</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="populasiModal" tabindex="-1" aria-labelledby="populasiModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="populasiModalLabel">Populasi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Seluruh penduduk di Kabupaten Malang.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="poptarModal" tabindex="-1" aria-labelledby="poptarModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="poptarModalLabel">Populasi Target</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Penduduk usia 15 tahun ke atas di Kabupaten Malang yang sedang bekerja (Tahun 2023) atau 3 tahun sebelum pencacahan (2020-2023) pernah bekerja di industri pariwisata.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="unitobsModal" tabindex="-1" aria-labelledby="unitobsModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="unitobsModalLabel">Unit Observasi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Kepala rumah tangga atau anggota rumah tangga yang sedang bekerja atau 3 tahun sebelum pencacahan pernah bekerja di industri pariwisata.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="unsampModal1" tabindex="-1" aria-labelledby="unsampModal1Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="unsampModal1Label">Primary Sampling Unit</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Kecamatan</li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="unsampModal2" tabindex="-1" aria-labelledby="unsampModal2Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="unsampModal2Label">Secondary Sampling Unit</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Blok Sensus</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="unsampModal3" tabindex="-1" aria-labelledby="unsampModal3Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="unsampModal3Label">Ultimate Sampling Unit</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Rumah Tangga</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="unitanaModal" tabindex="-1" aria-labelledby="unitanaModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="unitanaModalLabel">Unit Analisis</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Anggota rumah tangga usia 15 tahun ke atas di Kabupaten Malang yang sedang bekerja atau 3 tahun sebelum pencacahan pernah bekerja di industri pariwisata.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="krsampModal1" tabindex="-1" aria-labelledby="krsampModal1Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="krsampModal1Label">Kerangka Sampel Tahap Pertama</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Daftar kecamatan di Kabupaten Malang.</li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="krsampModal2" tabindex="-1" aria-labelledby="krsampModal2Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="krsampModal2Label">Kerangka Sampel Tahap Kedua</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Daftar seluruh blok sensus pada kecamatan terpilih di Kabupaten Malang.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="krsampModal3" tabindex="-1" aria-labelledby="krsampModal3Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="krsampModal3Label">Kerangka Sampel Tahap Ketiga</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Seluruh rumah tangga yang memiliki anggota rumah tangga usia 10 tahun ke atas yang sedang bekerja atau 3 tahun sebelum pencacahan pernah bekerja di industri pariwisata.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <div class="">
        </div>

        <!-- Sumber Data -->
        <section class="offset-header">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Sumber Data</h1>
                    </div>
                </div>
                <!-- sumber data -->
                <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link pills-button shadow active" id="pills-primer-tab" data-bs-toggle="pill" data-bs-target="#pills-primer" type="button" role="tab" aria-controls="pills-primer" aria-selected="true">Primer</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link pills-button shadow" id="pills-sekunder-tab" data-bs-toggle="pill" data-bs-target="#pills-sekunder" type="button" role="tab" aria-controls="pills-sekunder" aria-selected="false">Sekunder</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-primer" role="tabpanel" aria-labelledby="pills-primer-tab">
                            <p class="text-justify"><b>Data primer</b> dikumpulkan dari unit observasi penelitian ini yaitu rumah tangga dengan metode wawancara menggunakan moda <b><i>Computer Assisted Personal Interview</i> (CAPI)</b> dan <b><i>Pen-and-Paper Personal Interview</i> (PAPI)</b>.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-sekunder" role="tabpanel" aria-labelledby="pills-sekunder-tab">
                            <p class="text-justify"><b>Data sekunder</b> dikumpulkan dari BPS yaitu <b>data Kecamatan</b> dan <b>Blok Sensus (BS)</b> yang tersedia di lokus penelitian yang digunakan sebagai dasar penentuan sampel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Hasil Penelitian -->
        <section id="portfolio" class="portfolio section-bg offset-header">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Hasil Penelitian</h1>
                    </div>
                </div>
                <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">Semua</li>
                                <li data-filter=".filter-tujuan1-1">Tujuan 1</li>
                                <li data-filter=".filter-tujuan2">Tujuan 2</li>
                                <li data-filter=".filter-tujuan3">Tujuan 3</li>
                                <li data-filter=".filter-tujuan4">Tujuan 4</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row portfolio-container">
                        <div class="portfolio-item filter-tujuan1-1">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <!-- <h3><b>Grafik</b></h3> -->
                                    <div class="card-body border rounded pt-5">
                                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                            <div class="me-1 mt-1 justify-content-end align-item-end">
                                                <button id="unduh-lp-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#ModalLp_1">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 grid stretch-card">
                                                <div class="card" style="border: 0">
                                                    <div class="card-body" style="padding: 16px;">
                                                        <div class="chartBox" style="height: 450px;">
                                                            <canvas class="mt1" id="tujuan1_1"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 grid stretch-card">
                                                <div class="card" style="border: 0">
                                                    <div class="card-body" style="padding: 16px;">
                                                        <div class="chartBox" style="height: 360px;">
                                                            <canvas class="mt1" id="tujuan1_2"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 grid stretch-card">
                                                <div class="card" style="border: 0">
                                                    <div class="card-body" style="padding: 16px;">
                                                        <div class="chartBox" style="height: 360px;">
                                                            <canvas class="mt1" id="tujuan1_3"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 grid stretch-card">
                                                <div class="card" style="border: 0">
                                                    <div class="card-body" style="padding: 16px;">
                                                        <div class="chartBox" style="height: 360px;">
                                                            <canvas class="mt1" id="tujuan1_4"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <canvas style="display: none;" id="mergedCanvas"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item filter-tujuan2">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <!-- <h3><b>Grafik</b></h3> -->
                                    <div class="card-body border rounded pt-5">
                                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                            <div class="me-1 mt-1 justify-content-end align-item-end">
                                                <button id="unduh-lp-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#ModalLp_2">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 grid stretch-card">
                                                <div class="card" style="border: 0">
                                                    <div class="card-body" style="padding: 16px;">
                                                        <div class="chartBox" style="height: 360px;">
                                                            <canvas class="mt1" id="lp_tujuan2"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item filter-tujuan3">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body border rounded">
                                        <div class="row">
                                            <div class="col-lg-6 grid stretch-card">
                                                <div class="card" style="border: 0">
                                                    <div class="card-body">
                                                        <div class="chartBox">
                                                            <div>
                                                                <p style="font-weight: bold;">Persamaan Regresi Logistik</p>
                                                                <!-- <div>
                                                                    <p>$$\ln\left(\frac{p}{1-p}\right) = \beta_0 + \beta_1X_1 + \ldots + \beta_nX_n$$</p>
     
                                                                 </div> -->
                                                                 <div >
                                                                    <p style= "">$$\ln\left(\frac{p}{1-p}\right) = -1,263 + 1,597ind(1)^*$$
                                                                        $$+ 1,750ind(2)^* + 0,648ind(3)^*- $$
                                                                        $$0,010ind(4) + 0,721ind(5) + 0,347jk + $$
                                                                        $$0,106didik- 0,021usia^*+ 0,437kawin + $$
                                                                        $$  0,319latih + 0,256umr + $$
                                                                        $$ 0,817geo^* + 0,850wil^*$$</p>
                                                                 </div>
                                                                 <p>Ket: * signifikan pada tingkat signifikansi 5%</p>
                                                            </div>
                                                            <div>
                                                                <p style="font-weight: bold;">Variabel yang signifikan</p>
                                                                <ul>
                                                                    <li>Jenis industri (Penyediaan jasa makan dan minum serta perdagangan barang-barang pariwisata)</li>
                                                                    <li>Usia</li>
                                                                    <li>Letak geografis</li>
                                                                    <li>Wilayah tempat tinggal</li>
                                                                </ul> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 grid stretch-card">
                                                <div class="card" style="border: 0">
                                                    <div class="card-body">
                                                        <div class="chartBox">
                                                            <p style="font-weight: bold;">Kerangka Pikir</p>
                                                            <img src="<?= base_url('pvd/img/landingpage/riset3/kerangkapikir_riset3.png') ?>" class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item filter-tujuan4">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card d-flex justify-content-center flex-column align-item-center flex-md primary pb-2 pt-5 shadow">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <h1 class="chart-title judul-chart text-center" style="font-size: 20px; font-weight: 600; text-align: left;">
                                            Indeks Sadar Wisata (ISW) Kabupaten Malang
                                        </h1>
                                    </div>
                                    <div class="mb-5 d-flex flex-row align-item-center justify-content-center" style="width: 100%; height:80vh;">
                                        <div id="chart_isw" style="width: 100%; height:80vh; z-index:0;"></div>
                                    </div>
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <h1 class="chart-title judul-chart text-center" style="font-size: 20px; font-weight: 600; text-align: left;">
                                            Indeks Sadar Wisata (ISW) per Dimensi Kabupaten Malang
                                        </h1>
                                        <div class="col-lg-12 grid stretch-card">
                                            <div class="card" style="border: 0">
                                                <div class="card-body" style="padding: 16px;">
                                                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                                        <div class="me-1 mt-1 justify-content-end align-item-end">
                                                            <button id="unduh-lp-4" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#ModalLp_4">
                                                                <i class="fa-solid fa-download"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="chartBox" style="height: 360px;">
                                                        <canvas class="mt1" id="lp_tujuan4"></canvas>
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
            </div>
        </section>

        <!-- Infografis -->
        <section class="offset-header">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Infografis</h1>
                    </div>
                </div>
                <div class="konten third5 par m-auto p-4 p-md-5 shadow box d-flex flex-column flex-lg-row justify-content-lg-center panel" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                    <!-- <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, perferendis. Quia harum qui ipsum nihil odio, perspiciatis architecto asperiores quam. Architecto, enim dolor cupiditate harum ipsam quibusdam consequuntur temporibus totam, dolorem consectetur quod maiores, obcaecati saepe velit. Laboriosam ad impedit corrupti error perspiciatis nemo tempore quae possimus, obcaecati numquam ullam recusandae dolore maiores doloribus quasi animi asperiores! Quasi culpa exercitationem officiis sit magni voluptatem, reiciendis unde! Similique minima, dignissimos repellat veniam laboriosam odit maiores illum alias doloribus, beatae, labore unde porro? Incidunt, assumenda explicabo. Eaque nisi, impedit repellendus fugiat laborum in soluta? Dolores dolorum ex recusandae atque quidem aliquid placeat?
                </p> -->
                    <div class="info-item m-1" style="background-color: #ffbc33; height: 500px"></div>
                    <div class="info-item m-1" style="background-color: #ffbc33; height: 500px"></div>
                </div>
            </div>
        </section>

        <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

    </section>

</section><!-- End -->
<script src="<?= base_url('pvd/js/riset3/slider_landingpage.js') ?>"></script>
<!-- Isotope -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script src="<?= base_url('pvd/js/main.js') ?>"></script>
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<!-- Chart JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Impor Chart -->
<script src="<?= base_url('pvd/js/riset3/hasilPKLRiset3_mading.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset3/peta_malang.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset3/layer_dasar_peta_malang.js') ?>"></script>
<!-- fungsi unduh -->
<script src="<?= base_url('pvd/js/riset3/btn_Download_landing.js') ?>"></script>

<!-- Rumus Reglog -->
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>

<?= $this->endSection(); ?>