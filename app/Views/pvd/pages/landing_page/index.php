<?= $this->extend('pvd/layout/landing_page/template'); ?>

<?= $this->section('content'); ?>
<section id="hero" class="hero d-flex align-items-center">

    <!-- PKL 62 -->
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6  d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Praktik Kerja Lapangan</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Politeknik Statistika STIS TA 2022/2023</h2><br><br>
                <p data-aos="fade-up" data-aos-delay="400">
                    Praktik Kerja Lapangan Mahasiswa Tingkat &#8546; Politeknik Statistika STIS
                    <strong> TA 2022/2023</strong> diadakan di empat Kabupaten/Kota terpilih di
                    Provinsi Jawa Timur, yaitu <strong>Kabupaten Malang</strong>, <strong>Kota
                        Batu</strong>, <strong>Kota Malang</strong>, dan <strong>Kota Surabaya</strong>.
                    PKL tahun ini mengambil tema <strong>Pariwisata</strong> dengan slogan
                    "<i>Bersinergi Dengan Data, Majukan Pariwisata Nusantara</i>".
                </p>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center text-lg-start my-5">
                        <a href="#riset1" class="tombol btn-for">
                            <span>Selengkapnya</span>
                            <i class="bi bi-arrow-right fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 hero-img flex-column d-flex align-items-center justify-content-center mt-1 mb-1 "
                data-aos="zoom-out" data-aos-delay="200">
                <div class="row-6 d-flex align-items-center justify-content-center">
                    <img src="<?= base_url('pvd/img/landingpage/logolanding_top.png') ?>" class="img-fluid" alt="">
                </div>
                <div class="row-6">
                    <div class="row">
                        <span class="fs-6 text-center logoslogantop">
                            Bersinergi dengan Data,
                        </span>
                    </div>
                    <div id="about" class="row">
                        <span class="fs-6 text-center logosloganbot">
                            Majukan Pariwisata Nusantara
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<section class="hero d-flex align-items-center">
    <!-- About STIS & Angkatan 62 -->
    <div class="container ">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-2 d-flex align-items-center flex-row justify-content-end "
                data-aos="zoom-out" data-aos-delay="200">
                <div data-aos="fade-up" class="card62 shadow">
                    <div class="card-body d-grid rounded pr-4 pl-4">
                        <h5 class="card-title text-center h5judullp mt-4">Politeknik Statistika STIS</h5>
                        <p class="card-text text-justify pdesclp">Politeknik Statistika STIS adalah perguruan tinggi
                            kedinasan di lingkungan Badan Pusat Statistik. Pembinaan secara fungsional Politeknik
                            Statistika STIS dilaksanakan oleh Kepala Badan Pusat Statistik, namun secara pembinaan
                            secara teknis akademik dilaksanakan oleh menteri yang menyelenggarakan urusan pemerintahan
                            di bidang pendidikan tinggi dalam hal ini adalah Menteri Riset, Teknologi, dan Pendidikan
                            Tinggi.
                        </p>
                        <div class="img text-center mb-4">
                            <img src="<?= base_url('pvd/img/landingpage/logostis.png') ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-2 d-flex align-items-center justify-content-start " data-aos="zoom-out"
                data-aos-delay="200">
                <div data-aos="fade-up" class="card62 shadow">
                    <div class="card-body d-grid rounded pr-4 pl-4 ">
                        <h5 class="card-title text-center h5judullp mt-4">Angkatan 62</h5>
                        <p class="card-text text-justify pdesclp">Politeknik Statistika STIS adalah perguruan tinggi
                            kedinasan di lingkungan Badan Pusat Statistik. Pembinaan secara fungsional Politeknik
                            Statistika STIS dilaksanakan oleh Kepala Badan Pusat Statistik, namun secara pembinaan
                            secara teknis akademik dilaksanakan oleh menteri yang menyelenggarakan urusan pemerintahan
                            di bidang pendidikan tinggi dalam hal ini adalah Menteri Riset, Teknologi, dan Pendidikan
                            Tinggi.
                        </p>
                        <div class="img text-center mb-4">
                            <img src="<?= base_url('pvd/img/landingpage/logo62.png') ?>" alt="">
                        </div>
                        <br id="riset1">
                    </div>
                </div>
            </div>
        </div>
</section> <!-- End About -->


<section class="hero">
    <!-- riset 1 -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4 col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="d-flex flex-row align-items-center justify-content-center ">
                    <h1 data-aos="fade-up" class=" foreachriset">Riset 1</h1>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 d-flex flex-row  justify-content-center">
                <img src="<?= base_url('pvd/img/landingpage/Line 1.png') ?>" class="orangeline" alt="">
            </div>
            <div class="card62 col-lg-7 col-md-8" data-aos="zoom-out" data-aos-delay="200">
                <div class="card-body">
                    <div class="row-2 d-flex align-items-center flex-row justify-content-center ">
                        <h2 class="mt-0 mb-3" data-aos="fade-up">
                            Kajian Pemanfaatan MPD dalam Menunjang Statistik Pariwisata
                        </h2>
                    </div>
                    <div class="row-8 ">
                        <p class="card-text text-justify pdesclp">
                            Dalam bidang pariwisata, pemanfaatan <i>mobile positioning data</i> (MPD), yaitu salah satu jenis
                            big data yang berisi data lokasi dari pengguna provider tertentu, menjadi salah satu opsi
                            <i>official statistics</i> dalam mengestimasi statistik pariwisata untuk menggatikan survei
                            konvensional yang lama dan mahal. Hal ini membuat pengembangan MPD menjadi sebuah inovasi
                            untuk mendapatkan statistik yang akurat. Hal inilah yang menjadi latar belakang kami untuk
                            melakukan pengembangan MPD dengan melakukan analisis bagaimana dua nomor HP yang berbeda
                            menjadi satu orang untuk mengatasi double counting, analisis pengelompokkan individu menjadi
                            satu kelompok. Berangkat dari sana, kami melakukan perbaikan dalam melakukan estimasi
                            statistik pariwisata dengan pendekatan MPD.
                        </p>
                    </div>
                    <div class="row-2 d-flex flex-row justify-content-center align-items-center">
                        <!-- <div data-aos="fade-up" data-aos-delay="200"> -->
                        <div class="text-center text-lg-start my-5">
                            <a href="<?= base_url("hasil-pkl/riset1") ?>" class="tombol btn-for text-decoration-none">
                                <span>Selengkapnya</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- riset 2 -->
    <div class="container mt-3">
        <div class="row riset2">
            <div class="card62 col-lg-7 col-md-3" data-aos="zoom-out" data-aos-delay="200">
                <div class="card-body">
                    <div class="row-2 d-flex ">
                        <h2 class="mt-0 mb-3" data-aos="fade-up">
                            Pilot Survei Wisatawan Nusantara
                        </h2>
                    </div>
                    <div class="row-8 ">
                        <p class="card-text text-justify pdesclp">
                            Kota Malang merupakan salah satu kota di Jawa Timur yang mengalami penurunan jumlah
                            perjalanan wisata secara drastis akibat pandemi Covid-19. Untuk mengatasi hal tersebut,
                            pemerintah melakukan pemulihan yang salah satunya adalah membangun confidence atau rasa aman
                            dan dilanjutkan dengan pemulihan pariwisata domestic yang sejalan dengan salah satu target
                            kinerja Kemenparekraf/Baparekraf tahun 2020-2024 dalam sasaran strategis “Meningkatnya
                            Kualitas dan Jumlah Wisatawan”, sehingga ketersediaan data wisnus sangat dibutuhkan. Pada
                            tahun 2020, Badan Pusat Statistik melakukan Survei Wisatawan Nusantara dengan metode baru
                            yakni Mobile Positioning Data (MPD). Metode ini masih memiliki kelemahan yaitu tidak mampu
                            mendapatkan karakteristik rinci dari wisnus. Oleh karena itu, dilakukan survei yang dapat
                            menghasilkan karakteristik dari wisatawan nusantara khususnya perjalanan dalam kota yang
                            lebih rinci.
                        </p>
                    </div>
                    <div class="row-2 d-flex flex-row justify-content-center align-items-center">
                        <!-- <div data-aos="fade-up" data-aos-delay="200"> -->
                        <div class="text-center text-lg-start my-5">
                            <a href="<?= base_url("hasil-pkl/riset2") ?>" class="tombol btn-for text-decoration-none">
                                <span>Selengkapnya</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 d-flex flex-row justify-content-center">
                <img src="<?= base_url('pvd/img/landingpage/Line 1.png') ?>" class="orangeline" alt="">
            </div>
            <div class="col-lg-4 col-md-8 d-flex flex-column justify-content-center" data-aos="zoom-out"
                data-aos-delay="200">
                <div class="d-flex flex-row align-items-center justify-content-center ">
                    <h1 data-aos="fade-up" class=" foreachriset">Riset 2</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- riset 3 -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4 col-md-3 d-flex flex-column align-items-center justify-content-center ">
                <div data-aos="fade-up" class="d-flex flex-row align-items-center justify-content-center ">
                    <h1 class="text-center foreachriset">Riset 3</h1>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 d-flex flex-row justify-content-center">
                <img src="<?= base_url('pvd/img/landingpage/Line 1.png') ?>" class="orangeline" alt="">
            </div>
            <div class="card62 col-lg-7 col-md-8" data-aos="zoom-out" data-aos-delay="200">
                <div class="card-body">
                    <div class="row-2 d-flex flex-row ">
                        <h2 class="mt-0 mb-3" data-aos="fade-up">
                            Tenaga Kerja di Industri Pariwisata
                        </h2>
                    </div>
                    <div class="row-8 ">
                        <p class="card-text text-justify pdesclp">
                            Pariwisata merupakan <i>leading sector</i> pembangunan di Indonesia yang menjadi salah satu
                            penyumbang devisa terbesar di Indonesia. Untuk meningkatkan kontribusi pariwisata terhadap
                            perekonomian Indonesia dapat dilakukan dengan meningkatkan jumlah dan kualitas tenaga kerja
                            di sektor pariwisata. Sehingga riset ini bertujuan untuk menganalisis karakteristik tenaga
                            kerja di industri pariwisata, menganalisis faktor-faktor yang memengaruhi tenaga kerja di
                            industri pariwisata untuk bekerja paruh waktu, menganalisis faktor-faktor yang memengaruhi
                            kontrak kerja tenaga kerja di industri pariwisata, menganalisis dinamika tenaga kerja di
                            industri pariwisata, menganalisis kualitas tenaga kerja di industri pariwisata, menganalisis
                            tenaga kerja pariwisata menurut sadar wisata.
                        </p>
                    </div>
                    <div class="row-2 bforce ">
                        <!-- <div data-aos="fade-up" data-aos-delay="200"> -->
                        <div class="text-center text-lg-start my-5">
                            <a href="<?= base_url("hasil-pkl/riset3") ?>" class="tombol btn-for text-decoration-none">
                                <span>Selengkapnya</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- riset 4 -->
    <div class="container mt-3">
        <div class="row riset4">
            <div class="card62 col-lg-7 col-md-3" data-aos="zoom-out" data-aos-delay="200">
                <div class="card-body">
                    <div class="row-2 d-flex  flex-row justify-content-center ">
                        <h2 class="mt-0 mb-3" data-aos="fade-up">
                            Kesiapan Pemanfaatan TIK Unit Usaha Pariwisata Skala Mikro dan Kecil di Kota Batu dalam Menerapkan 
                            <i>Smart Tourism Destination</i>                        
                        </h2>
                    </div>
                    <div class="row-8 ">
                        <p class="card-text text-justify pdesclp">
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
                    </div>
                    <div class="row-2  d-flex flex-row justify-content-center align-items-center">
                        <!-- <div data-aos="fade-up" data-aos-delay="200"> -->
                        <div class="text-center text-lg-start my-5">
                            <a href="<?= base_url("hasil-pkl/riset4") ?>" class="tombol btn-for text-decoration-none">
                                <span>Selengkapnya</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 d-flex flex-row justify-content-center">
                <img src="<?= base_url('pvd/img/landingpage/Line 1.png') ?>" class="orangeline" alt="">
            </div>
            <div class="col-lg-4 col-md-8 d-flex flex-column justify-content-center " data-aos="zoom-out"
                data-aos-delay="200">
                <div class="d-flex flex-row align-items-center justify-content-center text-center ">
                    <h1 data-aos="fade-up" class=" foreachriset">Riset 4</h1>
                </div>
            </div>
        </div>
    </div>

</section>

<?= $this->endSection(); ?>