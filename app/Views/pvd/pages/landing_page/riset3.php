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
                        <h1 class="headline text-center">Batasan</h1>
                    </div>
                </div>

                <div class="konten third5 par d-flex flex-row m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="col">
                        <div class="row align-items-center text-center">
                            <div class="col-lg-6 align-items-center d-flex flex-column mt-3">
                                <div class="card" style="max-width: 242px; border: 2px solid #506396; border-radius: 25px;">
                                  <h5 class="card-header text-center text-light" style="line-height: 20px; background-color: #506396; border-top-left-radius: 22px; border-top-right-radius: 22px;"><strong>Objek Penelitian</strong></h5>
                                  <div class="card-body text-center" style="background-color: #dce0ea50;">
                                      <div class="row-6 d-flex align-items-center justify-content-center img-ruang">
                                          <img src="<?= base_url('pvd/img/landingpage/riset3/objek_penelitian.png') ?>" class="img-fluid">
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-lg-6 align-items-center d-flex flex-column mt-3">
                                <div class="card" style="max-width: 242px; border: 2px solid #506396; border-radius: 25px;">
                                  <h5 class="card-header text-center text-light" style="line-height: 20px; background-color: #506396; border-top-left-radius: 22px; border-top-right-radius: 22px;"><strong>Lokasi Penelitian</strong></h5>
                                  <div class="card-body text-center" style="background-color: #dce0ea50;">
                                      <div class="row-6 d-flex align-items-center justify-content-center img-ruang">
                                          <img src="<?= base_url('pvd/img/landingpage/riset3/lokasi_penelitian.png') ?>" class="img-fluid">
                                      </div>
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
                            <h5 class="fw-bold">Tahap I: Kecamatan</h5>
                            <h4 class="badge badge-pill badge-primary metode text-light">PPS WR</h4>
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
                            <h5 class="fw-bold">Tahap II: Blok Sensus</h5>
                            <h4 class="badge badge-pill badge-primary metode text-light">PPS WR</h4>
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
                            <h5 class="fw-bold">Tahap III: Rumah Tangga</h5>
                            <h4 class="badge badge-pill badge-primary metode text-light">Systematic Sampling</h4>
                            <p style="max-width: 360px;">dengan <i>implicit stratification</i> berupa penggolongan "sedang bekerja" dan "pernah bekerja"</p>
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
                        <h1 class="headline text-center">Ruang Lingkup</h1>
                    </div>
                </div>
                <div class="konten third5 par d-flex flex-row m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="col">
                        <div class="row align-items-center text-center">
                            <div class="col align-items-center d-flex flex-column mt-3">
                                <div class="card" style="max-width: 242px; border: 2px solid #506396; border-radius: 25px;">
                                  <h5 class="card-header text-center text-light" style="line-height: 20px; background-color: #506396; border-top-left-radius: 22px; border-top-right-radius: 22px;"><strong>Populasi</strong></h5>
                                  <div class="card-body text-center" style="background-color: #dce0ea50;">
                                      <div class="row-6 d-flex align-items-center justify-content-center img-ruang">
                                          <img src="<?= base_url('pvd/img/landingpage/riset3/populasi.png') ?>" class="img-fluid">
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col align-items-center d-flex flex-column mt-3">
                                <div class="card" style="max-width: 242px; border: 2px solid #506396; border-radius: 25px;">
                                  <h5 class="card-header text-center text-light" style="line-height: 20px; background-color: #506396; border-top-left-radius: 22px; border-top-right-radius: 22px;"><strong>Populasi Target</strong></h5>
                                  <div class="card-body text-center" style="background-color: #dce0ea50;">
                                      <div class="row-6 d-flex align-items-center justify-content-center img-ruang">
                                          <img src="<?= base_url('pvd/img/landingpage/riset3/populasi_target.png') ?>" class="img-fluid">
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col align-items-center d-flex flex-column mt-3">
                                <div class="card" style="max-width: 242px; border: 2px solid #506396; border-radius: 25px;">
                                  <h5 class="card-header text-center text-light" style="line-height: 20px; background-color: #506396; border-top-left-radius: 22px; border-top-right-radius: 22px;"><strong>Unit Observasi</strong></h5>
                                  <div class="card-body text-center" style="background-color: #dce0ea50;">
                                      <div class="row-6 d-flex align-items-center justify-content-center img-ruang">
                                          <img src="<?= base_url('pvd/img/landingpage/riset3/unit_observasi.png') ?>" class="img-fluid">
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col align-items-center d-flex flex-column mt-3">
                                <div class="card" style="border: 2px solid #506396; border-radius: 25px;">
                                  <h5 class="card-header text-center text-light" style="line-height: 20px; background-color: #506396; border-top-left-radius: 22px; border-top-right-radius: 22px;"><strong>Unit Sampling</strong></h5>
                                  <div class="card-body text-center px-0" style="background-color: #dce0ea50;">
                                      <div class="row-6 d-flex align-items-center justify-content-center">
                                        <div class="col-1 sidebuttonl">
                                          <button class="slideButton" style="color: #506396;" onclick="plusDivs(-1)">&#10094;</button>
                                        </div>
                                        <div class="col d-flex px-0 justify-content-center align-items-center img-ruang">
                                              <img src="<?= base_url('pvd/img/landingpage/riset3/unitsampling_1.png') ?>" class="mySlides img-fluid">
                                              <img src="<?= base_url('pvd/img/landingpage/riset3/unitsampling_2.png') ?>" class="mySlides img-fluid">
                                              <img src="<?= base_url('pvd/img/landingpage/riset3/unitsampling_3.png') ?>" class="mySlides img-fluid">
                                        </div>
                                        <div class="col-1 sidebuttonr">
                                            <button class="slideButtonR" style="color: #506396;" onclick="plusDivs(1)">&#10095;</button>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col align-items-center d-flex flex-column mt-3">
                                <div class="card" style="max-width: 242px; border: 2px solid #506396; border-radius: 25px; height: 286px;">
                                  <h5 class="card-header text-center text-light" style="line-height: 20px; background-color: #506396; border-top-left-radius: 22px; border-top-right-radius: 22px;"><strong>Unit Analisis</strong></h5>
                                  <div class="card-body text-center" style="background-color: #dce0ea50;">
                                      <div class="row-6 d-flex align-items-center justify-content-center img-ruang">
                                          <img src="<?= base_url('pvd/img/landingpage/riset3/unit_analisis.png') ?>" class="img-fluid">
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col align-items-center d-flex flex-column mt-3">
                                <div class="card" style="border: 2px solid #506396; border-radius: 25px;">
                                  <h5 class="card-header text-center text-light" style="line-height: 20px; background-color: #506396; border-top-left-radius: 22px; border-top-right-radius: 22px;"><strong>Kerangka Sampel</strong></h5>
                                  <div class="card-body text-center px-0" style="background-color: #dce0ea50;">
                                      <div class="row-6 d-flex align-items-center justify-content-center">
                                        <div class="col-1 sidebuttonl">
                                          <button class="slideButton" style="color: #506396;" onclick="plusDivs2(-1)">&#10094;</button>
                                        </div>
                                        <div class="col d-flex px-0 justify-content-center align-items-center img-ruang">
                                              <img src="<?= base_url('pvd/img/landingpage/riset3/kerangkasampel_1.png') ?>" class="mySlides2 img-fluid">
                                              <img src="<?= base_url('pvd/img/landingpage/riset3/kerangkasampel_2.png') ?>" class="mySlides2 img-fluid">
                                              <img src="<?= base_url('pvd/img/landingpage/riset3/kerangkasampel_3.png') ?>" class="mySlides2 img-fluid">
                                        </div>
                                        <div class="col-1 sidebuttonr">
                                            <button class="slideButtonR" style="color: #506396;" onclick="plusDivs2(1)">&#10095;</button>
                                        </div>
                                      </div>
                                  </div>
                                </div>
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
                                                    <div class="card-body px-0">
                                                        <div class="chartBox">
                                                            <div>
                                                                <p style="font-weight: bold;">Persamaan Regresi Logistik</p>
                                                                <div id="reglogContainer"></div>
                                                                <p>Keterangan: * signifikan pada tingkat signifikansi 5%</p>
                                                            </div>
                                                            <div>
                                                                <p style="font-weight: bold;">Variabel yang signifikan</p>
                                                                <ul class="text-left">
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
                                                        <p style="font-weight: bold;">Kerangka Pikir</p>
                                                        <div class="chartBox img-hasil">
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
                <div class="konten2 third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 1.5;" data-aos="zoom-in" data-aos-duration="1000" id="fourthSec">
                    <p class="text-justify">
                        <div>
                            <div class="text-center text-lg-start kontener">
                                <img src="<?= base_url('pvd/img/landingpage/riset3/infografis_riset3.png') ?>" class="img-fluid rounded-3 mx-auto d-block shadow" alt="">
                                <div class="overlay rounded-3 d-block mx-auto d-flex justify-content-center">
                                    <div class="d-flex justify-content-center my-auto">
                                        <a href="<?= 'https://drive.google.com/file/d/1RvMQVUOJ_lIS98v9WO50NTH_dl6sU8ah/view' ?>" class="bukulaporan mx-auto">
                                            <div class="text-center">
                                                <button class="btn btn-primary gdrive" type="button">
                                                    <div>
                                                        <i class="fas fa-download"></i>
                                                        Unduh
                                                    </div>
                                                </button>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>
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
<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    jax: ["input/TeX","output/HTML-CSS"],
    displayIndent: "-3em"
  });
</script>
<script>
  function createMathJaxEquation(mathContainerId, equation) {
    var script = document.createElement("script");
    script.type = "math/tex; mode=display";
    script.appendChild(document.createTextNode(equation));
    var mathContainer = document.getElementById(mathContainerId);
    mathContainer.appendChild(script);
    MathJax.Hub.Queue(["Typeset", MathJax.Hub, mathContainer]);
  }
  function createMathJaxEquationBasedOnWidth(mathContainerId, equationSmall, equationLarge) {
    var windowWidth = window.innerWidth;

    if (windowWidth <= 450) {
      createMathJaxEquation(mathContainerId, equationSmall);
    } else {
      createMathJaxEquation(mathContainerId, equationLarge);
    }
  }
  var equationSmall = "\\begin{align}\\ln&(\\frac{p_{i}}{1-p_{i}}) = -1,263 + 1,597ind(1)^* \\\\ &+ 1,750ind(2)^* + 0,648ind(3) \\\\ &- 0,010ind(4) + 0,721ind(5) \\\\ &+ 0,347jk + 0,106didik \\\\ &- 0,021usia^* + 0,437kawin \\\\ &+ 0,319latih + 0,256umr \\\\ &+ 0,817geo^* + 0,850wil^* \\end{align}";
  var equationLarge = "\\begin{align}\\ln\\left(\\frac{p_{i}}{1-p_{i}}\\right) = &-1,263 + 1,597ind(1)^* + 1,750ind(2)^* \\\\ &+ 0,648ind(3) - 0,010ind(4) + 0,721ind(5) \\\\ &+ 0,347jk + 0,106didik - 0,021usia^* \\\\ &+ 0,437kawin + 0,319latih + 0,256umr \\\\ &+ 0,817geo^* + 0,850wil^* \\end{align}";
  createMathJaxEquationBasedOnWidth("reglogContainer", equationSmall, equationLarge);
</script>

<?= $this->endSection(); ?>