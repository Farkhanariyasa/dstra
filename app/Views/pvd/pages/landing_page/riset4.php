<?= $this->extend('pvd/layout/landing_page/template'); ?>

<?= $this->section('content'); ?>

<style>
    /* css untuk download */
    .fourthSec .kontener {
      position: relative;
    }

    .fourthSec .overlay {opacity: 0.5;
      position: absolute;
      top: 20;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100%;
      width: auto;
      opacity: 0;
      transition: 0.5s ease;
      border-radius: 25px;
      /* background-color: rgba(219, 215, 223, 0.65); */
      color: #ffffff;
    }

    .fourthSec button {
      color: #fff;
      background-color: #7382ab;
      border-color: #7382ab;
      border-radius: 2.75rem;
      align-items: center;
      font-size: x-large;
    }

    .fourthSec button:hover {
      color: #fff;
      background-color: #506396;
      border-color: #506396;
      text-decoration: none;
    }

    .fourthSec .kontener:hover .overlay {
      opacity: 1;
      text-decoration: none;
    }
</style>

<section>
    <section id="hero" class="hero d-flex align-items-center">
        <!-- Judul Landing Page -->
        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up" class="titleRiset4Top">Riset 4</h1>
                    <h5 data-aos="fade-up" data-aos-delay="400" class="descRiset4">
                        Kesiapan Pemanfaatan TIK Unit Usaha Pariwisata Skala Mikro dan Kecil di Kota Batu dalam Menerapkan
                        <i>Smart Tourism Destination</i>
                    </h5>
                    <p data-aos="fade-up" data-aos-delay="400" class="text-justify">
                        Kota Batu memiliki posisi dan peran sebagai Kota Wisata sehingga akan dilihat kesiapannya dalam menerapkan
                        <i>Smart Tourism Destination</i> dari sisi <i>enterprise</i> atau dalam penelitian ini adalah unit usaha pariwisata.
                        Pada saat pandemi Covid-19, unit usaha pariwisata mengalami kontraksi yang cukup signifikan. Padahal sektor
                        pariwisata memberikan kontribusi yang tinggi pada PAD Kota Batu melalui pajak hiburan, hotel, dan restoran,
                        sehingga sektor ini memerlukan upaya pemulihan. Salah satu faktor penting dalam pemulihan sektor pariwisata
                        adalah pemanfaatan TIK. Oleh karena itu, dilakukan analisis mengenai kesiapan pemanfaatan TIK dari sisi unit
                        usaha pariwisata di Kota Batu dalam menerapkan <i>Smart Tourism Destination</i>. Analisis kesiapan dilakukan melalui
                        Enterprise <i>E-Readiness Assessment Model</i> atau Model Kesiapan Unit Usaha Pariwisata yang terbentuk dari
                        beberapa dimensi dan akan menghasilkan suatu indeks yang dapat diukur tingkat kesiapannya.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a id="tombol" href="<?= base_url('hasil-pkl/riset4/dasbor') ?>" class="tombol btn-for text-decoration-none">
                                <span>Hasil PKL</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?= base_url('pvd/img/landingpage/riset4/riset4.png') ?>" class="img-fluid" alt="">
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
                <div class="konten third5 shadow box par m-auto p-4 p-md-5 mt-4 align-item-center" data-aos="zoom-in" data-aos-duration="1000">
                    <p class="text-justify" style="line-height: 25px;">
                        Jawa Timur termasuk ke dalam dua besar provinsi dengan jumlah perjalanan wisatawan nusantara tertinggi sejak tahun 2015.
                        Salah satu tujuan wisata unggulan di Jawa Timur adalah Kota Batu dengan pariwisata sebagai sektor andalan dalam menunjang
                        perekonomian daerahnya.
                        <a id="latarBelakangAtas" onclick="ubahKelas1(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            [<strong><i>Tampilkan Semua</i></strong>]
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample" style="width: 100%;">
                        <div class="col-12 grid-margin stretch-card p-0">
                            <div class="card shadow rounded-4">
                                <div class="p-0 card-body">
                                    <div class="row">
                                    <div class="mb-0 col-lg-12 grid-margin px-4 py-2">
                                        <div>
                                            <div class="chartBox text-center m-0">
                                            <img id="viz-1" src="<?= base_url('pvd/img/dasbor/riset4/image006.png') ?>" class="img-fluid text-center" alt="" style="width: auto; height: auto;">
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <p class="text-justify" style="line-height: 25px;">
                            <strong>Batu memiliki posisi dan peran sebagai Kota Wisata</strong>, bahkan pemerintah Kota Batu berencana untuk meningkatkan
                            peranan Kota Batu dari Kota Wisata menjadi Sentra Wisata yang tertuang dalam Peraturan Daerah Kota Batu Nomor 7 Tahun 2011 tentang
                            Rencana Tata Ruang Wilayah Kota Batu Tahun 2010-2030. Dengan adanya peran Kota Batu sebagai Kota Wisata, maka akan dilhat kesiapan
                            Kota Batu dalam menerapkan <i>Smart Tourism Destination</i>. Menurut Wibowo (2020), terdapat beberapa aspek yang dapat digunakan untuk
                            mengukur kesiapan STD, salah satunya dapat dilihat dari sisi <i>enterprise</i> (unit usaha). Pada saat pandemi Covid-19, unit usaha
                            merupakan salah satu aspek dalam sektor pariwisata yang mengalami kontraksi cukup signifikan. Grafik berikut menggambarkan adanya
                            kontraksi beberapa unit usaha pariwisata di Kota Batu pada periode 2019-2020.
                        </p>
                        <p class="text-justify" style="line-height: 25px;">
                            Sektor pariwisata masih menjadi penyumbang PAD terbesar di Kota Batu dari tahun ke tahun bahkan memberikan hampir 40 persen dari total PAD
                            Kota Batu tahun 2020 melalui pajak hiburan, hotel, dan restoran, sehingga berkontribusi besar terhadap laju pertumbuhan ekonomi dan pemulihan
                            ekonomi. Namun, pajak yang dihasilkan dari ketiga sektor tersebut ternyata masih belum memenuhi target. Salah satu faktor penting dalam pemulihan
                            sektor pariwisata adalah dengan melakukan <strong>Teknologi Informasi dan Komunikasi</strong>. Sehingga hal tersebut sejalan dengan konsep
                            <i>Smart Tourism Destination</i> yang menitikberatkan pada pemanfaatan TIK. Penerapan STD pada berbagai kota di Indonesia mengalami keberhasilan,
                            sehingga ketika diterapkan secara lebih optimal di Kota Batu, harapannya permasalahan di sektor pariwisata dapat teratasi dengan cepat dan efektif
                            khususnya pada unit usaha pariwisata. Salah satu aspek penting untuk mewujudkannya adalah adanya pemanfaatan TIK secara menyeluruh bagi masyarakat khususnya
                            <strong>usaha pariwisata melalui penerapan <i>Smart Tourism Destination</i></strong>. Oleh karena itu, perlu dilakukan analisis mengenai kesiapan pemanfaatan
                            TIK dari sisi unit usaha pariwisata di Kota Batu.
                            <a id="latarBelakangBawah" onclick="ubahKelas2(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                [<strong><i>Tampilkan Sebagian</i></strong>]
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Batasan Penelitian -->
        <section class="offset-header">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Batasan Penelitian</h1>
                    </div>
                </div>
                <div class="konten third5 shadow box par m-auto p-4 p-md-5 mt-4 align-item-center" style="line-height: 25px; color: #4b395f;" data-aos="zoom-in" data-aos-duration="1000">
                    <h5 class="text-center" style="line-height: 25px; font-weight: bold; font-size: 18px; text-align: center;">Jenis Usaha Pariwisata</h5>    
                    <p class="text-justify" style="line-height: 25px;">
                    Usaha pariwisata dibatasi pada tiga jenis usaha antara lain Jasa Transportasi Wisata, Jasa Makanan dan Minuman, serta Penyediaan Akomodasi.
                    <br>
                    </p>
                    <h5 class="text-center" style="line-height: 25px; font-weight: bold; font-size: 18px; text-align: center;">Skala Usaha</h5>    
                    <p class="text-justify" style="line-height: 25px;">
                    Skala usaha yang digunakan dalam penelitian ini hanya mengambil dua kategori skala usaha yaitu skala mikro dan kecil.
                    </p>
                </div>
            </div>
        </section>

        <!-- Cakupan Penelitian -->
        <section class="offset-header">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Cakupan Penelitian</h1>
                    </div>
                </div>
                <!-- Cakupan penelitian -->
                <div class="row">
                    <div class="konten2 third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 25px;" data-aos="zoom-in" data-aos-duration="1000">
                        <div>
                            <!-- Lokus dan Time -->
                            <div class="row justify-content-center">
                                <!-- Lokus Penelitian -->
                                <div class="col-6 align-items-center d-flex align-self-center">
                                    <div class="card-body text-center card rounded-5 shadow" style="height: auto; display: flex; border-radius: 15px; padding-left: 3px; padding-right: 3px;">
                                        <div class="row-3 d-flex align-items-center justify-content-center">
                                            <img src="<?= base_url('pvd/img/landingpage/riset4/lokasi.png') ?>" class="img-fluid" alt="" style="height: 50px; width: auto;">
                                        </div>
                                        <div class="col">
                                            <p class="card-title text-center">
                                            <div style="line-height: 20px; color: #4b395f;"><strong>Lokus Penelitian</strong></div>
                                            <!-- <div class="angka">347</div> -->
                                            <p style="line-height: 20px;">Kota Batu, Jawa Timur</p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
            
                                <!-- Time Reference -->
                                <div class="col-6 align-items-center d-flex align-self-center">
                                    <div class="card-body text-center card rounded-5 shadow" style="height: auto; display: flex; border-radius: 15px; padding-left: 3px; padding-right: 3px;">
                                        <!-- <i class="fas fa-city col-1 ikon"></i> -->
                                        <div class="row-3 d-flex align-items-center justify-content-center">
                                            <img src="<?= base_url('pvd/img/landingpage/riset4/time.png') ?>" class="img-fluid" alt="" style="height: 50px; width: auto;">
                                        </div>
                                        <div class="col">
                                            <p class="card-title text-center">
                                            <div style="line-height: 20px; color: #4b395f;"><strong>Time References</strong></div>
                                            <p style="line-height: 20px;">Oktober 2022 - Juli 2023</p>
                                            <!-- <div class="angka">23</div> -->
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Populasi Target -->
                            <div class="card konten2 third5 par col-12 mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <div class="row-6 d-flex align-items-center justify-content-center">
                                        <img src="<?= base_url('pvd/img/landingpage/riset4/populasi_target.png') ?>" class="img-fluid" alt="" style="height: 50px; width: auto;">
                                    </div>
                                    <h5 class="card-title text-center" style="line-height: 25px;"><strong>Populasi Target</strong></h5>
                                    <div class="card-text text-justify" style="margin: 30px;">
                                        <p class="text-justify" style="line-height: 25px;">
                                            Seluruh unit usaha pariwisata skala mikro dan kecil yang meliputi Jasa Transportasi Wisata, Jasa Makanan dan Minuman, serta Penyediaan Akomodasi di Kota Batu pada tahun 2023.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Unit Observasi -->
                            <div class="card konten2 third5 par col-12 mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <div class="row-6 d-flex align-items-center justify-content-center">
                                        <img src="<?= base_url('pvd/img/landingpage/riset4/unit_observasi.png') ?>" class="img-fluid" alt="" style="height: 50px; width: auto;">
                                    </div>
                                    <h5 class="card-title text-center" style="line-height: 25px;"><strong>Unit Observasi</strong></h5>
                                    <div class="card-text text-justify" style="margin: 30px;">
                                        <p class="text-justify" style="line-height: 25px;">
                                        Pemilik atau pengelola usaha pariwisata skala mikro dan kecil yang meliputi Jasa Transportasi Wisata, Jasa Makanan dan Minuman, serta Penyediaan Akomodasi di Kota Batu pada tahun 2023.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Unit Analisis -->
                            <div class="card konten2 third5 par col-12 mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <div class="row-6 d-flex align-items-center justify-content-center">
                                        <img src="<?= base_url('pvd/img/landingpage/riset4/unit_analisis.png') ?>" class="img-fluid" alt="" style="height: 50px; width: auto;">
                                    </div>
                                    <h5 class="card-title text-center" style="line-height: 25px;"><strong>Unit Analisis</strong></h5>
                                    <div class="card-text text-justify" style="margin: 30px;">
                                        <p class="text-justify" style="line-height: 25px;">
                                        Unit usaha mikro dan kecil pariwisata yang meliputi Jasa Transportasi Wisata, Jasa Makanan dan Minuman, serta Penyediaan Akomodasi di Kota Batu pada tahun 2023.
                                        </p>
                                    </div>
                                </div>
                            </div>                            

                            <!-- Unit Sampling -->
                            <div class="card konten2 third5 par col-12 mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <div class="row-6 d-flex align-items-center justify-content-center">
                                        <img src="<?= base_url('pvd/img/landingpage/riset4/unit_sampling.png') ?>" class="img-fluid" alt="" style="height: 50px; width: auto;">
                                    </div>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit Sampling</strong></h5>
                                    <div class="card-text text-justify" style="margin: 30px;">
                                        <p class="text-justify" style="line-height: 25px;">
                                        Metode penarikan sampel yang digunakan adalah Two Stage Sampling. Oleh karena itu, unit sampling dalam penelitian ini ada dua, yaitu :
                                        </p>
                                        <h5 class="text-left" style="line-height: 25px; font-weight: bold; font-size: 18px; text-align: left;">1. Primary Unit Sampling</h5>    
                                        <p class="text-justify" style="line-height: 25px;">
                                        Blok sensus dengan measure of size (MoS) jumlah unit usaha mikro dan kecil (UMK) yang meliputi Jasa Transportasi Wisata, Jasa Makanan dan Minuman, serta Penyediaan Akomodasi di Kota Batu.
                                        </p>

                                        <h5 class="text-left" style="line-height: 25px; font-weight: bold; font-size: 18px; text-align: left;">2. Ultimate Unit Sampling</h5>    
                                        <p class="text-justify" style="line-height: 25px;">
                                        Unit usaha mikro dan kecil dengan pendekatan pemilik atau pengelola dari seluruh penduduk yang meliputi Jasa Transportasi Wisata, Jasa Makanan dan Minuman, serta Penyediaan Akomodasi di Kota Batu tahun 2023.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 25px;" data-aos="zoom-in" data-aos-duration="1000">
                    <ol class="text-justify">
                        <li>Mengetahui <b>karakteristik</b> tiga unit usaha pariwisata skala mikro dan kecil di Kota Batu yang meliputi Jasa Transportasi Wisata, Jasa Makanan dan Minuman, serta Penyediaan Akomodasi dalam menerapkan <i>Smart Tourism Destination</i>.</li>
                        <li>Menganalisis <b>tingkat kesiapan pemanfaatan TIK</b> dari tiga unit usaha pariwisata skala mikro dan kecil di Kota Batu yang meliputi Jasa Transportasi Wisata, Jasa Makanan dan Minuman, serta Penyediaan Akomodasi dalam menerapkan <i>Smart Tourism Destination</i>.</li>
                        <li>Menganalisis <b>faktor-faktor yang memengaruhi kesiapan</b> unit usaha pariwisata skala mikro dan kecil di Kota Batu dalam pemanfaatan TIK.</li>
                            <!-- <span id="goToMetodologi" class="invisilbe"></span> -->
                    </ol>
                </div>
            </div>
        </section>

        <!-- Metodologi -->
        <section class="offset-header">

            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Metodologi</h1>
                    </div>
                </div>
                <!-- konten -->
                <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 25px;" data-aos="zoom-in" data-aos-duration="1000">
                    <p class="text-justify">
                        Kegiatan pengumpulan data dilakukan di Kota Batu, Provinsi Jawa Timur. Kota Batu terdiri dari 3 kecamatan yaitu
                        Kecamatan Batu, Kecamatan Bumiaji, dan Kecamatan Junrejo. Data yang digunakan bersumber dari data primer yang
                        didapatkan dari wawancara langsung CAPI terhadap pemilik atau pengelola usaha pariwisata yang terpilih sebagai sampel
                        dan menggunakan data sekunder yang diperoleh dari BPS berupa daftar jumlah usaha mikro dan kecil yang meliputi tiga
                        usaha pariwisata yang tercakup dalam penelitian ini.
                    </p>
                    <p class="text-justify">
                        Populasi dalam penelitian ini adalah seluruh unit usaha pariwisata skala mikro dan kecil di Kota Batu tahun 2023. Populasi Target adalah
                        seluruh unit usaha pariwisata skala mikro dan kecil yang meliputi Jasa Transportasi Wisata, Jasa Makanan dan Minuman, serta Penyediaan Akomodasi
                        di Kota Batu pada tahun 2023. Unit Observasi adalah pemilik atau pengelola usaha pariwisata skala mikro dan kecil yang meliputi Jasa Transportasi
                        Wisata, Jasa Makanan dan Minuman, serta Penyediaan Akomodasi di Kota Batu pada tahun 2023. Metode Penarikan Sampel yang digunakan adalah
                        <i>Two Stage Sampling</i>. Untuk pemilihan sampel tahap pertama, dari kerangka sampel blok sensus di Kota Batu, dipilih sejumlah
                        blok sensus secara PPS WR. Kemudian tahap kedua, dari blok sensus terpilih, dipilih sejumlah usaha pariwisata melalui pendekatan
                        pemilik atau pengelola dari seluruh penduduk di Kota Batu tahun 2023 meliputi tiga usaha pariwisata yang tercakup dalam penelitian.
                        Tahap kedua ini dilakukan secara <i>systematic</i> dengan <i>implicit stratification</i> berdasarkan jenis usahanya.
                    </p>
                </div>
                <!-- end konten -->
            </div>
        </section>

                <!-- Design Sampling -->
                <section class="offset-header">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center"><i>Design Sampling</i></h1>
                    </div>
                </div>
                <!-- metode-->
                <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box text-light" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="text-center mb-3">
                        <h5 class="badge badge-pill badge-primary metode text-light"><i>Two Stage Sampling</i></h5>
                    </div>
                    <!--first section-->
                    <div class="row align-items-center how-it-works d-flex">
                        <div class="col-2 bottom d-inline-flex justify-content-center align-items-center">
                            <div class="circle font-weight-bold">1</div>
                        </div>
                        <div class="col-6">
                            <h5>Tahap I</h5>
                            <h4><i>Probability Proportional to Size with Replacement</i> (PPS WR)</h4>
                            <p class="text-justify">Dari kerangka sampel blok sensus di Kota Batu, dipilih sejumlah blok sensus 
                                secara PPS WR dengan <i>measure of size</i> (MoS) yang digunakan adalah jumlah unit usaha mikro kecil 
                                (UMK) yang meliputi jasa transportasi wisata, jasa makanan dan minuman, dan 
                                penyediaan akomodasi.</p>
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
                            <h4><i>Systematic Sampling</i></h4>
                            <p class="text-justify">Dari blok sensus terpilih, dipilih sejumlah usaha pariwisata melalui pendekatan 
                                pemilik atau pengelola dari seluruh penduduk di Kota Batu tahun 2023 yang meliputi 
                                jasa transportasi wisata, jasa makanan dan minuman, dan penyediaan akomodasi secara 
                                <i>systematic</i> dengan <i>implicit stratification</i> berdasarkan jenis usahanya.</p>
                        </div>
                        <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
                            <div class="circle font-weight-bold">2</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hasil Penelitian -->
        <section class="offset-header">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Hasil Penelitian</h1>
                    </div>
                </div>
                <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 25px;" data-aos="zoom-in" data-aos-duration="1000">
                    <p class="text-justify">
                    Hasil penelitian menunjukkan dari sampel unit usaha pariwisata Kota Batu terpilih, 799 sampel atau 86% 
                    sudah memanfaatkan TIK dalam operasi unit usahanya. Hasil IKUPTIK di Kota Batu adalah sebesar 46,98 
                    yang menunjukkan secara keseluruhan unit usaha pariwisata di Kota Batu cukup siap dalam memanfaatkan TIK. Jika 
                    ditinjau dari jenis usahanya, ketiga jenis unit usaha di Kota Batu secara keseluruhan memiliki IKUPTIK dengan kategori 
                    cukup siap dengan nilai indeks Jasa Transportasi Wisata sebesar 51,10; Penyediaan Akomodasi sebesar 52,08 serta Jasa 
                    Makanan dan Minuman sebesar 45,51. Adapun faktor yang memengaruhi tingkat kesiapan unit usaha dalam memanfaatkan TIK 
                    antara lain usia, jenis kelamin, dan tingkat pendidikan pemilik/pengelola, serta jumlah tenaga kerja. Usia pemilik/pengelola 
                    memiliki pengaruh negatif sehingga semakin tua pemilik/pengelola maka kesiapan unit usahanya memanfaatkan TIK semakin rendah. 
                    Pemilik/pengelola perempuan memiliki tingkat kesiapan TIK yang lebih rendah daripada laki-laki. Tingkat pendidikan pemilik/pengelola 
                    memiliki pengaruh positif sehingga peningkatan tingkat pendidikan pemilik/pengelola akan meningkatkan kesiapan unit usaha dalam 
                    pemanfaatan TIK. Peningkatan jumlah tenaga kerja akan meningkatkan kesiapan unit usaha dalam memanfaatkan TIK.
                    </p>
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
                <div class="konten third5 par m-auto p-4 p-md-4 shadow box d-flex flex-column flex-lg-row justify-content-lg-center panel" style="line-height: 25px;" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="info-item m-1 shawdow-lg text-center">
                        <div class="fourthSec">
                            <div class="text-center text-lg-start kontener">
                                <div>
                                    <img class="shawdow-lg" id="viz-1" src="<?= base_url('pvd/img/landingpage/riset4/infografis_riset4_gambaranumum_rev1-4_1-01.png') ?>" class="img-fluid text-center" alt="Infografis 1" style="width: 80%; height: auto;">
                                    <div class="overlay rounded-3 d-block mx-0 d-flex justify-content-center">
                                        <div class="d-flex justify-content-center my-auto">
                                            <a href="<?= 'https://drive.google.com/file/d/1znN325vYddiaETgUiZJGCdvVaxIRXwg-/view?usp=sharing' ?>" class="bukulaporan mx-auto">
                                                <div class="text-center">
                                                    <button class="btn btn-primary gdrive" type="button">
                                                        <div>
                                                        <i class="fas fa-download"></i>
                                                        Download
                                                        </div>
                                                    </button>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                      
                    </div>
                    <div class="info-item m-1 shawdow-lg text-center">
                        <div class="fourthSec">
                            <div class="text-center text-lg-start kontener">
                                <div>
                                    <img class="shawdow-lg" id="viz-2" src="<?= base_url('pvd/img/landingpage/riset4/infografis_riset4_IKUPTIK_6-01.png') ?>" class="img-fluid text-center" alt="Infografis 2" style="width: 80%; height: auto;">
                                    <div class="overlay rounded-3 d-block mx-0 d-flex justify-content-center">
                                        <div class="d-flex justify-content-center my-auto">
                                            <a href="<?= 'https://drive.google.com/file/d/1r7MfzH35AAO7IBTYoGFTRF6qlGC2qSrt/view?usp=sharing' ?>" class="bukulaporan mx-auto">
                                                <div class="text-center">
                                                    <button class="btn btn-primary gdrive" type="button">
                                                        <div>
                                                        <i class="fas fa-download"></i>
                                                        Download
                                                        </div>
                                                    </button>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </section>

        <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

    </section>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</section><!-- End -->

<?= $this->endSection(); ?>