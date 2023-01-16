<?= $this->extend('pvd/layout/landing_page/template'); ?>

<?= $this->section('content'); ?>

<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-7 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up" class="titleRiset4Top">Riset 2</h1>
                <h5 data-aos="fade-up" data-aos-delay="400" class="descRiset4">
                    Pilot Survei Wisatawan Nusantara
                </h5>
                <p data-aos="fade-up" data-aos-delay="400">
                    Indonesia memiliki potensi pariwisata yang sangat besar baik dari segi alam maupun dari segi budaya. Terkait adanya dampak kepariwisataan terhadap perekonomian, perlu diperhatikan bagaimana perkembangan jumlah kunjungan wisatawannya. Penurunan jumlah perjalanan wisata yang sangat drastis pada tahun 2020 merupakan dampak dari adanya pandemi Covid-19. Ketersediaan data wisnus sangat dibutuhkan untuk dapat meninjau terjadinya peningkatan dan penurunan perjalanan pariwisata. MPD (Mobile Positioning Data) dapat digunakan dalam mengumpulkan data sebagai pendekatan baru. Namun, pendekatan MPD sendiri masih memiliki kekurangan sehingga diperlukan alternatif pengumpulan data lain untuk melengkapi data wisnus yang belum mampu dihasilkan oleh pendekatan MPD, yaitu data perjalanan wisata di dalam kabupaten/kota.  
                </p>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="<?= base_url('pvd/riset2/dasbor') ?>" class="tombol btn-for">
                            <span>Hasil PKL</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="<?= base_url('pvd/img/landingpage/riset2/riset2.png') ?>" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
    <section id="firstSec" class="offset-header">
        <div class="container-fluid turun">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-12 col-sm-12">
                    <h1 class="headline text-center pt-5">Latar Belakang</h1>
                </div>
                <div class="garis">
                </div>
            </div>
            <div class="konten third5 shadow box par m-auto p-4 p-md-5 mt-4 w-75" data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                    Indonesia memiliki potensi pariwisata yang sangat besar baik dari segi alam maupun dari segi budaya. 
                    Hal ini didukung oleh laporan Travel & Tourism Development Index 2021 World Economic Forum (WEF) edisi 
                    Mei 2022 yang menyatakan bahwa industri pariwisata tanah air menempati peringkat ke-32 dari total 117 
                    negara di dunia dan peringkat ke-8 di Asia Pasifik. Sejalan dengan yang dikemukakan oleh Pendit (2006) bahwa 
                    kehadiran pariwisata dapat mempercepat pertumbuhan ekonomi, penyediaan lapangan pekerjaan, meningkatkan 
                    penghasilan, meningkatkan standar hidup, serta merangsang sektor-sektor produktif lainnya. Menurut Archer 
                    (2000), jumlah pengeluaran wisatawan dapat meningkatkan PDRB melalui sektor perdagangan, hotel, dan restoran. 
                    Potensi dari sektor pariwisata dapat juga dilihat performanya dari nilai kontribusi Tourism Direct Gross Domestic 
                    Product (TDGDP) Indonesia.
                </p>
                <p class="text-justify">
                    Terkait adanya dampak kepariwisataan terhadap perekonomian, perlu diperhatikan bagaimana perkembangan jumlah 
                    kunjungan wisatawannya. Wisatawan adalah seseorang yang melakukan perjalanan untuk mengunjungi suatu lokasi yang 
                    bukan tempat tinggal kesehariannya dengan periode dan tujuan tertentu, selain untuk memperoleh penghasilan di 
                    tempat dikunjungi (BPS, 2022). Di Indonesia, wisatawan dapat dikelompokkan menjadi wisatawan nusantara (wisnus) 
                    dan wisatawan mancanegara (wisman). Wisnus menjadi penyumbang proporsi wisatawan terbanyak untuk setiap tahunnya (BPS, 2022). 
                    Perkembangan jumlah perjalanan wisata wisnus diduga memiliki hubungan yang kuat dengan kontribusi sektor pariwisata (TDGDP) terhadap PDB.
                </p>
                <p class="text-justify">
                    Penurunan jumlah perjalanan wisata yang sangat drastis pada tahun 2020 merupakan dampak dari adanya 
                    pandemi Covid-19. Dengan adanya pandemi, pemerintah terpaksa mengeluarkan kebijakan pembatasan kegiatan 
                    masyarakat guna mencegah semakin luasnya penyebaran virus ini. Kebijakan pembatasan dan adanya kekhawatiran 
                    masyarakat untuk bepergian berdampak pada menurunnya volume arus perlintasan manusia dan volume penerbangan 
                    secara drastis sehingga memberikan hantaman besar bagi sektor pariwisata nasional (Drajat, 2021). Selain itu, 
                    konsumsi rumah tangga sebagai sisi pengeluaran rumah tangga yang merupakan pendorong utama pariwisata juga 
                    mengalami kontraksi sehingga jumlah kunjungan wisata ikut mengalami penurunan (Rusiawan, 2021). Oleh karena itu, 
                    ketersediaan data wisnus sangat dibutuhkan untuk dapat meninjau terjadinya peningkatan dan penurunan perjalanan 
                    pariwisata. Dari sisi wisatawan atau pengunjung, informasi dibutuhkan untuk merencanakan perjalanan dari tempat 
                    tinggal atau asal hingga ke tempat tujuan dan perencanaan selama berada di sana hingga kembali ke tempat asal atau 
                    tempat tinggal (Manongga et al., 2010). Data dan informasi karakteristik wisnus dan kegiatan perjalanan pariwisata 
                    harus dikumpulkan secara lengkap dan berkesinambungan.
                </p>
                <p class="text-justify">
                    Untuk memenuhi kebutuhan tersebut, Badan Pusat Statistik (BPS) telah melakukan kegiatan 
                    pendataan wisnus sejak tahun 1981 (BPS, 2020). Dalam perkembangannya, kegiatan pendataan 
                    ini mengalami beberapa perubahan metode. Pada tahun 1981 yang merupakan awal pelaksanaannya, 
                    pendataan wisnus dilakukan pada kegiatan Survei Sosial Ekonomi Nasional (Susenas) sebagai salah 
                    satu modul pada kegiatan tersebut. Namun, adanya urgensi kebutuhan data wisnus yang tidak cukup 
                    jika hanya mengandalkan Susenas KOR, BPS melakukan kegiatan Kajian Data Pariwisata Nusantara bersama 
                    dengan Kementerian Pariwisata untuk melengkapi pendataan Susenas KOR pada tahun 2016 dan 2017 (BPS, 2020).  
                </p>
                <p class="text-justify">
                    Penggunaan MPD sebagai pendekatan baru dalam mengumpulkan data wisnus masih memiliki beberapa kelemahan. 
                    Salah satu kelemahannya adalah tidak mampu mendapatkan karakteristik rinci dari wisnus (BPS, 2022). Hal ini 
                    diperkuat juga dengan sulitnya mengestimasi perjalanan wisata di dalam kabupaten/kota meskipun level penyajian 
                    data sudah mampu pada tingkat kabupaten/kota. Apabila data wisata dalam kabupaten/kota ini tidak tertangkap, 
                    kekurangan data wisatawan akan terjadi. Hal ini didukung oleh temuan Richards (2017) bahwa masyarakat sekarang 
                    ini cenderung bekerja di suatu bagian kota dan akan mengunjungi bagian lain kota dengan rasa ingin tahu dan 
                    penjelajahan yang sama seperti saat berlibur di tempat lain. Selain itu, kekurangan data wisnus dalam kabupaten/kota 
                    akan sangat merugikan mengingat pengembangan wisata dalam kabupaten/kota menjadi hal terdekat yang dapat dilakukan 
                    guna memulihkan sektor pariwisata.  Oleh karena itu, diperlukan alternatif pengumpulan data lain untuk melengkapi 
                    data wisnus yang belum mampu dihasilkan oleh pendekatan MPD, yaitu data perjalanan wisata di dalam kabupaten/kota.  
                </p>
            </div>
        </div>
    </section>

    <section id="firstSecB" class="offset-header">
        <div class="container-fluid turun pb-5">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-12 col-sm-12">
                    <h1 class="headline text-center">Tujuan Penelitian</h1>
                </div>
                <div class="garis">
                </div>
            </div>
            <div class="konten third5 par m-auto p-4 p-md-5 w-75 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <ol>
                    <li>Mendapatkan estimasi banyaknya wisatawan dan jumlah perjalanan wisata dalam kota di Kota Malang.</li>
                    <li>Mendapatkan estimasi rata-rata lama perjalanan dan rata-rata lama kunjungan wisata dalam kota yang dilakukan wisatawan Kota Malang.</li>
                    <li>Mendapatkan gambaran karakteristik wisatawan nusantara dalam Kota Malang.</li>
                    <li>Mengetahui faktor-faktor yang memengaruhi jumlah perjalanan wisata wisatawan nusantara dalam kabupaten/kota.</li>
                </ol>
            </div>
            <br><br><br>
        </div>
    </section>

    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

    <section id="fourthSec" class="offset-header">
        <div class="container-fluid py-3 mt-5 mb-5">
            <div class="row konten">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <h3 class="headline text-center">Batasan Penelitian</h3>
                </div>
            </div>
            <div class="fourth">
                <div class="row align-items-center">
                    <div class="col-md-1 text-center mt-2" data-aos="zoom-in" data-aos-duration="1000">
                        <!-- <img class="chart img-fluid" src="<?= base_url("pvd/img/LogoPKL.png") ?>" alt="Nothing "> -->
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block fourth mt-5 mb-3">
                <div class="row konten justify-content-center">
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                        <div class="card text-center third5 shadow box">
                            <div class="card-body p-3">
                                <p class="card-title text-uppercase"><strong>Unit Analisis</strong></p>
                                <p class="card-text">Unit analisis yang digunakan pada penelitian ini adalah individu yang melakukan perjalanan wisata dalam kabupaten/kota.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                        <div class="card text-center third5 shadow box">
                            <div class="card-body p-3">
                                <p class="card-title text-uppercase"><strong>Wilayah Penelitian</strong></p>
                                <p class="card-text">Penelitian ini berfokus pada kegiatan wisata yang terjadi di Kota Malang, Jawa Timur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                        <div class="card text-center third5 shadow box">
                            <div class="card-body p-3">
                                <p class="card-title text-uppercase"><strong>Referensi Waktu Penelitian</strong></p>
                                <p class="card-text">Referensi waktu yang digunakan dalam penelitian ini adalah triwulan terakhir pada tahun 2022.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-md-none fourth mt-5">
                <div class="row fourth2">
                    <div class="col-md-12">
                        <div id="batasan-penelitian" class="carousel slide" data-ride="carousel" data-bs-interval="false" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card crsl text-center shadow box">
                                        <div class="card-body">
                                            <p class="card-title text-uppercase"><strong>Place</strong></p>
                                            <p class="card-text text-center">Urban dan Lahan Terbatas. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card crsl text-center third5 shadow box">
                                        <div class="card-body">
                                            <p class="card-title text-uppercase"><strong>Product</strong></p>
                                            <p class="card-text text-center">Hasil pertanian yang dapat dikonsumsi atau memiliki nilai jual baik sebagian atau seluruhnya (Tanaman Pangan, Tanaman Hortikultura, Peternakan dan Budidaya Perikanan Air Tawar).</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card crsl text-center third5 shadow box">
                                        <div class="card-body">
                                            <p class="card-title text-uppercase"><strong>Scale</strong></p>
                                            <p class="card-text text-center">Rumah tangga dan Community Gardening.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card crsl text-center third5 shadow box">
                                        <div class="card-body">
                                            <p class="card-title text-uppercase"><strong>Technology</strong></p>
                                            <p class="card-text text-center">Minimal 1 teknik/inovasi/teknologi/penerapan metode selain konvensional.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#batasan-penelitian" role="button" data-slide="prev">
                                <span><i class="fa fa-arrow-circle-left sliderButton2"></i></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#batasan-penelitian" role="button" data-slide="next">
                                <span><i class="fa fa-arrow-circle-right sliderButton2"></i></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

    <section id="fifthSec" class="offset-header">
        <div class="container-fluid py-5 mb-5 mt-5">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <h3 class="headline text-center">Ruang Lingkup</h3>
                </div>
            </div>
            <div class="d-none d-md-block fifth mt-5">
                <div class="row konten justify-content-center">
                    <div class="col-lg-4 col-md-6 mb-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                        <div class="card text-center third5 shadow box pt-4">
                            <div class="card-body p-3">
                                <h6 class="card-title text-uppercase"><strong>Populasi</strong></h6>
                                <p class="card-text text-center">Seluruh rumah tangga di Kota Malang yang minimal salah satu anggota rumah tangganya pernah melakukan perjalanan  wisata dalam kota dan telah kembali pada Triwulan IV tahun 2022.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                        <div class="card text-center third5 shadow box pt-4">
                            <div class="card-body p-3">
                                <h6 class="card-title text-uppercase"><strong>Populasi Target</strong></h6>
                                <p class="card-text text-center">Seluruh rumah tangga di Kota Malang yang minimal salah satu anggota rumah tangganya pernah melakukan perjalanan  wisata dalam kota dan telah kembali pada Triwulan IV  tahun 2022.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                        <div class="card text-center third5 shadow box pt-4">
                            <div class="card-body p-3">
                                <h6 class="card-title text-uppercase"><strong>Unit Analisis</strong></h6>
                                <p class="card-text text-center">Anggota rumah tangga di Kota Malang yang pernah melakukan perjalanan wisata dalam kota dan telah kembali pada Triwulan IV tahun 2022.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                        <div class="card text-center third5 shadow box pt-5">
                            <div class="card-body p-3">
                                <h6 class="card-title text-uppercase"><strong>Lokus Penelitian</strong></h6>
                                <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                        <div class="card text-center third5 shadow box pt-5">
                            <div class="card-body p-3">
                                <h6 class="card-title text-uppercase"><strong>Waktu Penelitian</strong></h6>
                                <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-md-none fifth">
                <div class="row">
                    <div class="col-md-12">
                        <div id="ruang-lingkup" class="carousel slide" data-ride="carousel" data-bs-interval="false" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card text-center third5 shadow box">
                                        <div class="card-body">
                                            <h6 class="card-title text-uppercase"><strong>Populasi</strong></h6>
                                            <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card text-center third5 shadow box">
                                        <div class="card-body">
                                            <h6 class="card-title text-uppercase"><strong>Populasi Target</strong></h6>
                                            <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card text-center third5 shadow box">
                                        <div class="card-body">
                                            <h6 class="card-title text-uppercase"><strong>Unit Analisis</strong></h6>
                                            <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card text-center third5 shadow box">
                                        <div class="card-body">
                                            <h6 class="card-title text-uppercase"><strong>Lokus Penelitian</strong></h6>
                                            <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card text-center third5 shadow box">
                                        <div class="card-body">
                                            <h6 class="card-title text-uppercase"><strong>Waktu Penelitian</strong></h6>
                                            <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#ruang-lingkup" role="button" data-slide="prev">
                                <span><i class="fa fa-arrow-circle-left sliderButton2"></i></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#ruang-lingkup" role="button" data-slide="next">
                                <span><i class="fa fa-arrow-circle-right sliderButton2"></i></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
    <section id="thirdSec" class="offset-header">
        <!-- <img class="orn img-fluid mx-auto d-block" src="/img/landing_page/riset1/Ornamen Responden.png" alt="Ornamen"> -->
        <div class="instrumen">
            <div class="col-md-12 col-sm-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <h1 class="headline text-center" style="color: dark;">Instrumen Penelitian</h1>
                <div class="garis"> </div>
            </div>
            <div class="konten third3 mx-auto w-75" data-aos="zoom-in" data-aos-duration="1000">
                <div class="row">
                    <div class="col-12 col-md-10 p-3 p-md-5">
                        <h2><b>Coverage Error</b></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-md-2 d-md-block d-none py-5">
                        <img src="<?= base_url('pvd/img/Riset 3.png') ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="konten fourth3 mx-auto my-5 w-75" data-aos="zoom-in" data-aos-duration="1000">
                <div class="row">
                    <div class="col-12 col-md-10 p-3 p-md-5">
                        <h2><b>BS VS SLS</b></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-md-2 d-md-block d-none py-5">
                        <img src="<?= base_url('pvd/img/Riset 2.png') ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="konten third3 mx-auto my-5 w-75" data-aos="zoom-in" data-aos-duration="1000">
                <div class="row">
                    <div class="col-12 col-md-10 p-3 p-md-5">
                        <h2><b>Content Error</b></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-md-2 d-md-block d-none py-5">
                        <img src="<?= base_url('pvd/img/Riset 1.png') ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="konten fourth3 mx-auto my-5 w-75" data-aos="zoom-in" data-aos-duration="1000">
                <div class="row">
                    <div class="col-12 col-md-10 p-3 p-md-5">
                        <h2><b>Paradata</b></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-md-2 d-md-block d-none py-5">
                        <img src="<?= base_url('pvd/img/Riset 4.png') ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->


    <section id="fourthSec" class="offset-header">
        <div data-aos="fade-down " data-aos-easing="linear" data-aos-duration="1000">
            <div class="col-12 col-sm-12">
                <h1 class="headline text-center">Hasil Penelitian</h1>
            </div>

            <div class="garis mb-5">
            </div>
        </div>

        <div class="container-fluid turun">
            <div class="kontenH mx-auto position-relative" data-aos="zoom-in" data-aos-duration="1000">
                <img src="" class="d-md-block d-none ornamen3" alt="">
                <div class="row py-5 d-flex justify-content-center">
                    <div class="mx-3 my-3 my-lg-0 d-flex align-items-center justify-content-center info">
                        <h1 class="text-center fw-bold">Infografis</h1>
                    </div>
                    <div class="card mx-3 p-1 p-md-3 kgambar">
                        <div class="card-body kontener">
                            <!-- <img src="/img/landing_page/riset1/infografis_riset1_cut.png" class="d-block w-100 gambar " alt="Ornamen"> -->
                            <div class="overlay">
                                <h1 class="text-center fw-bold">Judul</h1>
                                <div class="d-grid gap-2 mx-auto">
                                    <a href="/img/landing_page/riset1/infografis_riset1.png" download="Infografis Riset 1" class="mx-auto">
                                        <button class="btn btn-primary" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                            </svg> Unduh</button>
                                    </a>
                                    <a href="/img/landing_page/riset1/infografis_riset1.png" data-toggle="lightbox" class="mx-auto">
                                        <button class="btn btn-primary" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                            </svg> Lihat Ukuran Besar
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid turun">
            <div class="kontenH mx-auto position-relative" data-aos="zoom-in" data-aos-duration="1000">
                <img src="" class="d-md-block d-none ornamen3" alt="">
                <div class="row py-5 d-flex justify-content-center">
                    <div class="mx-3 my-3 my-lg-0 d-flex align-items-center justify-content-center info">
                        <h1 class="text-center fw-bold">Grafik</h1>
                    </div>
                    <div class="card mx-3 p-1 p-md-3 kgambar">
                        <div class="card-body kontener">
                            <!-- <img src="/img/landing_page/riset1/infografis_riset1_cut.png" class="d-block w-100 gambar " alt="Ornamen"> -->
                            <div class="overlay">
                                <h1 class="text-center fw-bold">Judul</h1>
                                <div class="d-grid gap-2 mx-auto">
                                    <a href="/img/landing_page/riset1/infografis_riset1.png" download="Infografis Riset 1" class="mx-auto">
                                        <button class="btn btn-primary" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                            </svg> Unduh</button>
                                    </a>
                                    <a href="/img/landing_page/riset1/infografis_riset1.png" data-toggle="lightbox" class="mx-auto">
                                        <button class="btn btn-primary" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                            </svg> Lihat Ukuran Besar
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid turun">
            <div class="kontenH mx-auto position-relative" data-aos="zoom-in" data-aos-duration="1000">
                <img src="" class="d-md-block d-none ornamen3" alt="">
                <div class="row py-5 d-flex justify-content-center">
                    <div class="mx-3 my-3 my-lg-0 d-flex align-items-center justify-content-center info">
                        <h1 class="text-center fw-bold">Tabel</h1>
                    </div>
                    <div class="card mx-3 p-1 p-md-3 kgambar">
                        <div class="card-body kontener">
                            <!-- <img src="/img/landing_page/riset1/infografis_riset1_cut.png" class="d-block w-100 gambar " alt="Ornamen"> -->
                            <div class="overlay">
                                <h1 class="text-center fw-bold">Judul</h1>
                                <div class="d-grid gap-2 mx-auto">
                                    <a href="/img/landing_page/riset1/infografis_riset1.png" download="Infografis Riset 1" class="mx-auto">
                                        <button class="btn btn-primary" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                            </svg> Unduh</button>
                                    </a>
                                    <a href="/img/landing_page/riset1/infografis_riset1.png" data-toggle="lightbox" class="mx-auto">
                                        <button class="btn btn-primary" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                            </svg> Lihat Ukuran Besar
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid turun">
            <div class="kontenH mx-auto position-relative" data-aos="zoom-in" data-aos-duration="1000">
                <img src="" class="d-md-block d-none ornamen3" alt="">
                <div class="row py-5 d-flex justify-content-center">
                    <div class="mx-3 my-3 my-lg-0 d-flex align-items-center justify-content-center info">
                        <h1 class="text-center fw-bold">Peta Tematik</h1>
                    </div>
                    <div class="card mx-3 p-1 p-md-3 kgambar">
                        <div class="card-body kontener">
                            <!-- <img src="/img/landing_page/riset1/infografis_riset1_cut.png" class="d-block w-100 gambar " alt="Ornamen"> -->
                            <div class="overlay">
                                <h1 class="text-center fw-bold">Judul</h1>
                                <div class="d-grid gap-2 mx-auto">
                                    <a href="/img/landing_page/riset1/infografis_riset1.png" download="Infografis Riset 1" class="mx-auto">
                                        <button class="btn btn-primary" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                            </svg> Unduh</button>
                                    </a>
                                    <a href="/img/landing_page/riset1/infografis_riset1.png" data-toggle="lightbox" class="mx-auto">
                                        <button class="btn btn-primary" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                            </svg> Lihat Ukuran Besar
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <div class="container card">
        <div style="width: 800px;">
            <canvas id="myChart"></canvas>
        </div>
    </div> -->
    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

    <section id="seventhSec" class="offset-header">
        <div class="container-fluid">
            <div class="d-flex flex-column justify-content-center align-items-center text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                <h3 class="headline mb-3">
                    Hasil Penelitian
                </h3>
                <div class="garis"></div>
            </div>

            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="hasilP d-flex flex-column justify-content-center align-items-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row d-flex  justify-content-center">
                                <div class="card mx-3 p-md-3 my-lg-0 image">
                                    <div class="card-body">
                                        <!-- <img src="/img/landing_page/riset5/Hasil1.png" alt="Hasil1"> -->
                                    </div>
                                </div>

                                <div class="card mx-3 p-md-3 hasilP">
                                    <div class="card-body">
                                        <h5 class="card-title tittleH ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h5>

                                        <p class="card-text paragh">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <i>online</i>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row d-flex  justify-content-center">
                                <div class="card mx-3 p-md-3 my-lg-0 image">
                                    <div class="card-body">
                                        <img src="/img/landing_page/riset5/Hasil2.png" alt="Hasil2">
                                    </div>
                                </div>

                                <div class="card mx-3 p-md-3 hasilP">
                                    <div class="card-body">
                                        <h5 class="card-title tittleH">Analisis metode pengumpulan data wawancara langsung, <i>telephone interview</i>, dan <i>self-enumeration</i></h5>

                                        <p class="card-text paragh"><b>Metode wawancara langsung memberikan tingkat respons yang sangat tinggi</b> karena petugas dan responden dapat bertemu secara langsung, sehingga dapat meminimalisir hal-hal yang mengakibatkan menurunnya tingkat respon. <b>Pada metode <i>telephone interview</i> penerapan mekanisme <i>callback</i>–bagian dari pencacahan</b> untuk melakukan panggilan ulang kepada responden yang belum menyelesaikan atau memulai wawancara kuesioner–cukup efektif dalam meningkatkan tingkat respons. <b>Pada metode <i>self-enumeration</i> jenis pengingat yang diberikan melalui email sore memiliki tingkat respons lebih tinggi</b> daripada pengingat lain dan yang paling cepat membuat responden untuk login adalah e-mail siang. Selain itu, juga terdapat preferensi fitur bantuan untuk membantu responden dalam mengisi kuesioner yang paling diminati adalah teks dibandingkan dengan suara..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row d-flex  justify-content-center">
                                <div class="card mx-3 p-md-3 my-lg-0 image">
                                    <div class="card-body">
                                        <img src="/img/landing_page/riset5/Hasil3.png" alt="Hasil3">
                                    </div>
                                </div>

                                <div class="card mx-3 p-md-3 hasilP">
                                    <div class="card-body">
                                        <h5 class="card-title tittleH">Perbandingan tingkat respons, analisis <i>break-off</i>, dan evaluasi metode pengumpulan data <i>self-enumeration</i> dan <i>telephone interview</i></h5>

                                        <p class="card-text paragh">Berdasarkan analisis yang telah dilakukan pada sampel di Kabupaten Subang dan Indramayu, jika ditinjau dari <b>tingkat respons dan proporsi responden terkendala</b> menjawab kuesioner, <b>moda TI lebih baik untuk diterapkan sebagai alternatif metodologi Sensus Pertanian Online 2023 Petani Subsektor Tanaman Pangan</b> daripada moda <i>self-enumeration</i>. <b>Jika dilihat berdasarkan blok terakhir yang dijawab responden</b> metode <i>self-enumeration</i> dan <i>telephone interview</i> responden <i>break-off</i> <b>paling banyak berhenti pada blok 2</b>, mengenai keterangan anggota rumah tangga. Responden metode <i>self-enumeration</i> berkumpul pada blok awal, sedangkan responden metode <i>telephone interview</i> menyebar sampai blok 8.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row d-flex justify-content-center">
                                <div class="card mx-3 p-md-3 my-lg-0 image">
                                    <div class="card-body">
                                        <!-- <img src="/img/landing_page/riset5/Hasil4.png" alt="Hasil4"> -->
                                    </div>
                                </div>

                                <div class="card mx-3 p-md-3 hasilP">
                                    <div class="card-body">
                                        <h5 class="card-title tittleH">Kajian kendala yang dihadapi rumah tangga usaha pertanian subsektor tanaman pangan dalam mengisi isian kuesioner Sensus Pertanian 2023</h5>

                                        <p class="card-text paragh"><b>Proporsi responden CAPI yang terkendala hanya sekitar 24%</b>. Adapun jenis kendala yang didapat oleh responden sebagian besar karena bahasa. <b>Persentase yang terkendala pada metode <i>telephone interview</i> sebesar 20,10%</b> dengan kendala yang paling umum dialami adalah kendala teknis seperti server down atau jaringan/sinyal yang kurang stabil. Sedangkan, <b>persentase responden yang terkendala dalam <i>self-enumeration</i> sebesar 60%</b> dengan kendala yang paling banyak adalah tidak memahami pertanyaan pada kuesioner.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                    <span><i class="fas fa-arrow-left sliderButton2"></i></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                    <span><i class="fas fa-arrow-right sliderButton2"></i></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
    </section>
</section>





</script>



</section>

<?= $this->endSection(); ?>