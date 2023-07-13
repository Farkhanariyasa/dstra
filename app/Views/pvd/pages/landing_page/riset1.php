<?= $this->extend('pvd/layout/landing_page/template'); ?>

<?= $this->section('content'); ?>

<section>
    <section id="hero" class="hero d-flex align-items-center">
        <!-- Judul Landing Page -->
        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up" class="titleRiset4Top">Riset 1</h1>
                    <h5 data-aos="fade-up" data-aos-delay="400" class="descRiset4">
                        Kajian Pemanfaatan MPD dalam Menunjang Statistik Pariwisata
                    </h5>
                    <p data-aos="fade-up" data-aos-delay="400" class="text-justify">
                        Dalam bidang pariwisata, pemanfaatan <i>Positioning Data</i> (MPD), yaitu suatu dataset berskala
                        besar (<i>big data</i>) mengenai catatan transaksi dan lokasi dari operator seluler (<i>Mobile
                            Network
                            Operator</i>/MNO), menjadi salah satu opsi <i>official statistics</i> dalam mengestimasi
                        statistik
                        pariwisata untuk menggatikan survei konvensional yang memiliki kelemahan seperti bergantung pada
                        daya ingat responden serta memiliki peluang terjadinya sampling & <i>non-sampling error</i>.
                        Kelemahan
                        survei konvensional tersebut membuat pengembangan MPD menjadi sebuah inovasi untuk mendapatkan
                        data statistik yang akurat. Hal inilah yang menjadi latar belakang kami dalam melakukan
                        pengembangan MPD dengan melakukan pembangunan algoritma <i>family grouping</i> dan <i>double
                            counting</i>
                        menggunakan data MPD yang sudah terlebih dahulu dipastikan kualitasnya melalui tahapan
                        <i>quality
                            assurance</i>. Berangkat dari sana, untuk melengkapi karakteristik wisatawan nusantara yang
                        tidak
                        bisa didapatkan melalui data MPD, penelitian ini juga melakukan survei konvensional di Kota
                        Malang dengan <i>time reference</i> triwulan IV tahun 2022.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a id="tombol" href="<?= base_url('hasil-pkl/riset1/dasbor') ?>"
                                class="tombol btn-for text-decoration-none">
                                <span>Hasil PKL</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?= base_url('pvd/img/landingpage/riset1/riset1.png') ?>" class="img-fluid" alt="">
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
                <div class="konten third5 shadow box par m-auto p-4 p-md-5 mt-4" data-aos="zoom-in"
                    data-aos-duration="1000">
                    <p class="text-justify">
                        Sebagai salah satu sumber big data, MPD juga memiliki masalah terkait karakteristik
                        <i>veracity</i>,
                        yaitu perihal kualitas, keakuratan dan ketidakpastian data. Oleh karena itu penting untuk
                        memeriksa apakah data MPD memiliki kualitas yang cukup baik dan dapat digunakan untuk pemrosesan
                        analisis lebih lanjut dengan melakukan penjaminan kualitas (<i>Quality Assurance</i>).
                        <a id="latarBelakangAtas" onclick="ubahKelas1(this.id);" style="color: #4b395f;"
                            class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseExample"
                            aria-expanded="false" aria-controls="collapseExample">
                            [<strong><i>Tampilkan Semua</i></strong>]
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <p class="text-justify">
                            Menurut data BPS pada tahun 2022, proporsi individu yang memiliki telepon genggam pada
                            kelompok umur kurang dari 15 tahun adalah sekitar 40,25%. Sementara pada kelompok umur 15-24
                            tahun sebesar 91,82 % dan umur 25-64 tahun sebesar 74,09 %. Di sisi lain, sebanyak 27,46%
                            individu dengan umur lebih dari 65 tahun memiliki telepon genggam. Statistik ini menunjukkan
                            bahwa tidak semua penduduk memiliki telepon genggam. Jika perjalanan wisata dihitung
                            menggunakan MPD, perjalanan individu yang tidak memiliki telepon genggam tidak dapat
                            direkam. Pendekatan lain yang dapat dilakukan adalah dengan mengestimasi perjalanan wisata
                            yang dilakukan bersama orang terdekatnya, seperti keluarga. Hal ini sejalan dengan sebuah
                            fenomena yang cukup sering ditemui, dimana seseorang yang melakukan perjalanan wisata
                            sebagian besar melakukan perjalanan wisatanya bersama keluarga atau kerabat terdekatnya
                            (Koranti, Sriyanto & Sidik, 2017). Oleh karena itu, penentuan individu ke dalam suatu
                            keluarga (<i>family grouping</i>) berdasarkan <i>usual environment</i> dan pola perjalanan
                            menggunakan MPD
                            menarik untuk dilakukan.
                        </p>
                        <p class="text-justify">
                            Dalam menganalisis dan mendapatkan jumlah perjalanan wisata dengan MPD, terdapat sebuah
                            tantangan yaitu data <i>mobile positioning</i> seseorang yang dihasilkan oleh operator dapat
                            berbeda meskipun orang tersebut berada di lokasi dan waktu yang sama. Hal ini dipengaruhi
                            oleh jangkauan dan lokasi tower seluler (BTS) tiap operator serta aktivitas seluler untuk
                            nomor masing-masing. Jika seorang wisatawan menggunakan dua nomor berbeda dalam satu ponsel
                            sebagai penentu <i>mobile positioning</i>, wisatawan tersebut akan terhitung sebanyak dua
                            kali.
                            Selain itu, jumlah perjalanan wisata yang dilakukan wisatawan tersebut juga akan terhitung
                            sebanyak dua kali. Hal inilah yang kemudian disebut dengan <i>double counting</i> pada data
                            MPD.
                            Untuk mengatasi hal ini, diperlukan metode atau penanganan terhadap data MPD yang sebenarnya
                            merepresentasikan satu individu namun seolah-olah terhitung layaknya dua individu (<i>double
                                counting</i>), sehingga data MPD tersebut dapat menentukan posisi dan aktivitas
                            wisatawan secara
                            akurat untuk kepentingan lebih lanjut.
                        </p>
                        <p class="text-justify">
                            Dibalik kelebihan yang ditawarkannya, MPD juga memiliki kelemahan dalam mengumpulkan data
                            wisatawan. Salah satunya adalah informasi mengenai karakteristik pengguna tidak dapat
                            diperoleh jika hanya menggunakan MPD tanpa melakukan survei (Ahas et al., 2009). Selain itu,
                            MPD juga tidak bisa menangkap jumlah perjalanan wisata yang tidak melibatkan penggunaan
                            telepon seluler. Beberapa kekurangan MPD tersebut menjadi cukup merugikan mengingat data
                            wisata yang komprehensif dibutuhkan dalam hal pengembangan wisata guna memulihkan sektor
                            pariwisata. Oleh karena itu, diperlukan pengumpulan data lain untuk melengkapi data
                            wisatawan nusantara yang belum mampu dihasilkan oleh pendekatan MPD melalui survei
                            konvensional.
                            <a id="latarBelakangBawah" onclick="ubahKelas2(this.id);" style="color: #4b395f;"
                                class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseExample"
                                aria-expanded="false" aria-controls="collapseExample">
                                [<strong><i>Tampilkan Sebagian</i></strong>]
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tujuan Penelitian -->
        <section class="offset-header mt-5">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Tujuan Penelitian</h1>
                    </div>
                </div>
                <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;"
                    data-aos="zoom-in" data-aos-duration="1000">
                    <ol class="text-justify">
                        <li>Menerapkan penjaminan kualitas (<i>quality assurance</i>) <i>Mobile Positioning Data</i>
                            (MPD) yang
                            dihasilkan dari nomor-nomor relawan.
                        </li>
                        <li>Membangun algoritma untuk mengelompokkan individu yang termasuk dalam satu keluarga
                            berdasarkan <i>usual environment</i> dan pola perjalanan wisata (<i>family grouping</i>).
                        </li>
                        <li>Membangun algoritma untuk mengidentifikasi <i>double counting</i> berdasarkan pola
                            perjalanan
                            individu yang menggunakan lebih dari satu nomor Telkomsel dan/atau Indosat berbeda dalam
                            satu perangkat.
                        </li>
                        <li>Menyajikan statistik wisatawan nusantara melalui pendekatan <i>Mobile Positioning Data</i>
                            (MPD)
                            dan survei konvensional di Kota Malang selama Triwulan IV 2022.
                        </li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Metodologi -->
        <!-- <section class="offset-header">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Metodologi</h1>
                    </div>
                </div> -->
        <!-- konten -->
        <!-- <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;"
                    data-aos="zoom-in" data-aos-duration="1000">
                    <p class="text-justify" style="font-weight: bold">
                        Survei 1: Survei Relawan dan Ruta Pegawai BPS Kota Surabaya dan Provinsi Jawa Timur
                        Metode Pengambilan Sampel: Purposive Sampling
                    <ul>
                        <li class="text-justify">Tahap pertama, Dari daftar pegawai diambil pegawai yang eligible, yaitu
                            pegawai dengan provider
                            telkomsel dan/atau indosat sebagai relawan dan dilakukan pencacahan tahap Pegawai.
                        </li>
                        <li class="text-justify">Tahap kedua, Dari pencacahan tahap pegawai dilakukan pencacahan ke
                            level
                            keluarga pegawai
                            tersebut. Pada penelitian ini, keluarga pegawai yang dicacah dibatasi hanya yang berdomisili
                            di
                            Surabaya atau beberapa kecamatan (Kecamatan Taman, Sukodono, Buduran, Waru, Gedangan, dan
                            Sedati) di
                            Sidoarjo.
                        </li>
                    </ul>
                    </p>
                </div>
                <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;"
                    data-aos="zoom-in" data-aos-duration="1000">
                    <p class="text-justify" style="font-weight: bold">
                        Survei 2: Survei Integrasi (Pilot Survei Riset 2)
                        Metode Pengambilan Sampel: Two Stage Sampling
                    <ul>
                        <li class="text-justify">Tahap pertama, mengambil sejumlah blok sensus dengan Probability
                            Proportional to Size With
                            Replacement dengan size jumlah keluarga di tiap blok sensus hasil pemutakhiran Sensus
                            Penduduk
                            2020
                        </li>
                        <li class="text-justify">Tahap kedua, mengambil rumah tangga menggunakan Systematic Sampling
                            dengan
                            jumlah anggota rumah
                            tangga sebagai variabel dasar pengurutan
                        </li>
                    </ul>
                    </p>
                </div> -->
        <!-- end konten -->
        <!-- </div>
        </section> -->

        <!-- Metodologi-->
        <section class="offset-header mt-5">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Metodologi</h1>
                    </div>
                </div>
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link pills-button shadow active" id="pills-primer-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-primer" type="button" role="tab" aria-controls="pills-primer"
                            aria-selected="true">Survei Kajian MPD</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link pills-button shadow" id="pills-sekunder-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-sekunder" type="button" role="tab" aria-controls="pills-sekunder"
                            aria-selected="false">Survei Wisatawan Nusantara</button>
                    </li>
                </ul>

                <!-- Button Metodologi -->
                <div class="tab-content" id="pills-tabContent">

                    <!-- Kota Surabaya -->
                    <div class="tab-pane fade show active" id="pills-primer" role="tabpanel"
                        aria-labelledby="pills-primer-tab">



                        <!-- Carousel Metodologi -->
                        <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner"> -->
                        <!-- Survei 1 -->
                        <!-- <div class="carousel-item active">
                                    <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                                        <p class="text-justify" style="font-weight: bold">
                                            Tujuan 1 Dan Tujuan 2 (Data Training)
                                        <ul>
                                            <li class="text-justify">Tahap pertama, Dari daftar pegawai diambil pegawai
                                                yang
                                                eligible, yaitu
                                                pegawai dengan provider
                                                telkomsel dan/atau indosat sebagai relawan dan dilakukan pencacahan
                                                tahap
                                                Pegawai.
                                            </li>
                                            <li class="text-justify">Tahap kedua, Dari pencacahan tahap pegawai
                                                dilakukan
                                                pencacahan ke
                                                level
                                                keluarga pegawai
                                                tersebut. Pada penelitian ini, keluarga pegawai yang dicacah dibatasi
                                                hanya yang
                                                berdomisili
                                                di
                                                Surabaya atau beberapa kecamatan (Kecamatan Taman, Sukodono, Buduran,
                                                Waru,
                                                Gedangan, dan
                                                Sedati) di
                                                Sidoarjo.
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div> -->

                        <!-- Survei 2 -->
                        <!-- <div class="carousel-item">
                                    <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                                        <p class="text-justify" style="font-weight: bold">
                                            Survei 2: Survei Integrasi (Pilot Survei Riset 2)
                                            Metode Pengambilan Sampel: Two Stage Sampling
                                        <ul>
                                            <li class="text-justify">Tahap pertama, mengambil sejumlah blok sensus
                                                dengan
                                                Probability
                                                Proportional to Size With
                                                Replacement dengan size jumlah keluarga di tiap blok sensus hasil
                                                pemutakhiran
                                                Sensus
                                                Penduduk
                                                2020
                                            </li>
                                            <li class="text-justify">Tahap kedua, mengambil rumah tangga menggunakan
                                                Systematic
                                                Sampling
                                                dengan
                                                jumlah anggota rumah
                                                tangga sebagai variabel dasar pengurutan
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div> -->

                        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div> -->

                        <!-- Cakupan Penelitian -->

                        <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 1.5;"
                            data-aos="zoom-in" data-aos-duration="1000">
                            <p>
                                <b>Cakupan Penelitian</b>
                            </p>
                            <div id="carouselKontenMetodologi" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <!-- Populasi -->
                                    <div class="carousel-item active">
                                        <div
                                            class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                            <div class="card-body text-center">
                                                <div class="row-6 d-flex align-items-center justify-content-center">
                                                    <img src="<?= base_url('pvd/img/landingpage/riset1/populasi.png') ?>"
                                                        class="img-fluid" alt="" style="height: 50px; width:auto;">
                                                </div>
                                                <h5 class="card-title text-center" style="line-height: 20px;">
                                                    <strong>Populasi</strong>
                                                </h5>
                                                <p class="card-text text-justify">
                                                <div class="text-justify" style="line-height: 25px;">
                                                    Populasi dari penelitian ini adalah seluruh pegawai BPS Kota
                                                    Surabaya, pegawai BPS Provinsi Jawa Timur, mahasiswa Tingkat III
                                                    Tahun Akademik 2022/2023 Politeknik Statistika STIS, mahasiswa
                                                    selain Tingkat III (Tingkat I, II, dan IV) Tahun Akademik 2022/2023
                                                    Politeknik Statistika STIS yang berdomisili DKI Jakarta dan Jawa
                                                    Timur, serta dosen Politeknik Statistika STIS beserta anggota rumah
                                                    tangganya.
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Populasi Target -->
                                    <div class="carousel-item">
                                        <div
                                            class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                            <div class="card-body text-center">
                                                <div class="row-6 d-flex align-items-center justify-content-center">
                                                    <img src="<?= base_url('pvd/img/landingpage/riset1/populasi_target.png') ?>"
                                                        class="img-fluid" alt="" style="height: 50px; width:auto;">
                                                </div>
                                                <h5 class="card-title text-center" style="line-height: 20px;">
                                                    <strong>Populasi Target</strong>
                                                </h5>
                                                <p class="card-text text-justify">
                                                <div class="text-justify" style="line-height: 25px;">
                                                    Populasi target dari penelitian ini adalah seluruh pegawai BPS Kota
                                                    Surabaya, pegawai BPS Provinsi Jawa Timur, mahasiswa Tingkat III
                                                    Tahun Akademik 2022/2023 Politeknik Statistika STIS, mahasiswa
                                                    selain Tingkat III (Tingkat I, II, dan IV) Tahun Akademik 2022/2023
                                                    Politeknik Statistika STIS yang berdomisili DKI Jakarta dan Jawa
                                                    Timur, serta dosen Politeknik Statistika STIS beserta anggota rumah
                                                    tangganya yang pernah melakukan perjalanan wisata nusantara dalam
                                                    satu tahun terakhir.
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Populasi Survei -->
                                    <div class="carousel-item">
                                        <div
                                            class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                            <div class="card-body text-center">
                                                <div class="row-6 d-flex align-items-center justify-content-center">
                                                    <img src="<?= base_url('pvd/img/landingpage/riset2/populasi.png') ?>"
                                                        class="img-fluid" alt="" style="height: 50px; width:auto;">
                                                </div>
                                                <h5 class="card-title text-center" style="line-height: 20px;">
                                                    <strong>Populasi Survei</strong>
                                                </h5>
                                                <p class="card-text text-justify">
                                                <div class="text-justify" style="line-height: 25px;">
                                                    Populasi dari penelitian ini adalah seluruh pegawai BPS Kota
                                                    Surabaya, pegawai BPS Provinsi Jawa Timur, mahasiswa Tingkat III
                                                    Tahun Akademik 2022/2023 Politeknik Statistika STIS, mahasiswa
                                                    selain Tingkat III (Tingkat I, II, dan IV) Tahun Akademik 2022/2023
                                                    Politeknik Statistika STIS yang berdomisili DKI Jakarta dan Jawa
                                                    Timur, serta dosen Politeknik Statistika STIS beserta anggota rumah
                                                    tangganya yang pernah melakukan perjalanan wisata nusantara dalam
                                                    satu tahun terakhir.
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Unit Observasi -->
                                    <div class="carousel-item">
                                        <div
                                            class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                            <div class="card-body text-center">
                                                <div class="row-6 d-flex align-items-center justify-content-center">
                                                    <img src="<?= base_url('pvd/img/landingpage/riset1/unit_observasi.png') ?>"
                                                        class="img-fluid" alt="" style="height: 50px; width:auto;">
                                                </div>
                                                <h5 class="card-title text-center" style="line-height: 20px;">
                                                    <strong>Unit Observasi</strong>
                                                </h5>
                                                <p class="card-text text-justify">
                                                <div class="text-justify" style="line-height: 25px;">
                                                    Unit observasi dari penelitian ini adalah pegawai BPS Kota Surabaya,
                                                    pegawai BPS Provinsi Jawa Timur, mahasiswa Tingkat III Tahun
                                                    Akademik 2022/2023 Politeknik Statistika STIS, mahasiswa selain
                                                    Tingkat III (Tingkat I, II, dan IV) Tahun Akademik 2022/2023
                                                    Politeknik Statistika STIS yang berdomisili DKI Jakarta dan Jawa
                                                    Timur, serta dosen Politeknik Statistika STIS beserta anggota rumah
                                                    tangganya yang menggunakan provider Telkomsel dan atau Indosat 2
                                                    tahun terakhir serta bersedia datanya digunakan untuk penelitian.
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Unit Sampling-->
                                    <div class="carousel-item">
                                        <div
                                            class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                            <div class="card-body text-center">
                                                <div class="row-6 d-flex align-items-center justify-content-center">
                                                    <img src="<?= base_url('pvd/img/landingpage/riset1/unit_sampling.png') ?>"
                                                        class="img-fluid" alt="" style="height: 50px; width:auto;">
                                                </div>
                                                <h5 class="card-title text-center" style="line-height: 20px;">
                                                    <strong>Unit Sampling</strong>
                                                </h5>
                                                <p class="card-text text-justify">
                                                <div class="text-justify" style="line-height: 25px;">
                                                    Unit sampling dari penelitian ini adalah pegawai BPS Kota Surabaya,
                                                    pegawai BPS Provinsi Jawa Timur, mahasiswa Tingkat III Tahun
                                                    Akademik 2022/2023 Politeknik Statistika STIS, mahasiswa selain
                                                    Tingkat III (Tingkat I, II, dan IV) Tahun Akademik 2022/2023
                                                    Politeknik Statistika STIS yang berdomisili DKI Jakarta dan Jawa
                                                    Timur, serta dosen Politeknik Statistika STIS beserta anggota rumah
                                                    tangganya yang menggunakan provider Telkomsel dan atau Indosat 2
                                                    tahun terakhir serta bersedia datanya digunakan untuk penelitian.
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Unit Analisis -->
                                    <div class="carousel-item">
                                        <div
                                            class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                            <div class="card-body text-center">
                                                <div class="row-6 d-flex align-items-center justify-content-center">
                                                    <img src="<?= base_url('pvd/img/landingpage/riset1/unit_analisis.png') ?>"
                                                        class="img-fluid" alt="" style="height: 50px; width:auto;">
                                                </div>
                                                <h5 class="card-title text-center" style="line-height: 20px;">
                                                    <strong>Unit Analisis</strong>
                                                </h5>
                                                <p class="card-text text-justify">
                                                <div class="text-justify" style="line-height: 25px;">
                                                    Unit analisis dari penelitian ini adalah pegawai BPS Kota Surabaya,
                                                    pegawai BPS Provinsi Jawa Timur, mahasiswa Tingkat III Tahun
                                                    Akademik 2022/2023 Politeknik Statistika STIS, mahasiswa selain
                                                    Tingkat III (Tingkat I, II, dan IV) Tahun Akademik 2022/2023
                                                    Politeknik Statistika STIS yang berdomisili DKI Jakarta dan Jawa
                                                    Timur, serta dosen Politeknik Statistika STIS beserta anggota rumah
                                                    tangganya yang pernah melakukan perjalanan wisata nusantara setahun
                                                    terakhir yang menggunakan provider Telkomsel dan atau Indosat 2
                                                    tahun terakhir serta bersedia datanya digunakan untuk penelitian.
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Kerangka Sampel -->
                                    <div class="carousel-item">
                                        <div
                                            class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                            <div class="card-body text-center">
                                                <div class="row-6 d-flex align-items-center justify-content-center">
                                                    <img src="<?= base_url('pvd/img/landingpage/riset1/kerangka_sampel.png') ?>"
                                                        class="img-fluid" alt="" style="height: 50px; width:auto;">
                                                </div>
                                                <h5 class="card-title text-center" style="line-height: 20px;">
                                                    <strong>Kerangka Sampel</strong>
                                                </h5>
                                                <p class="card-text text-justify">
                                                <div class="text-justify" style="line-height: 25px;">
                                                    Kerangka sampel dari penelitian ini adalah daftar pegawai BPS Kota
                                                    Surabaya, Provinsi Jawa Timur pada tahun 2022, daftar pegawai BPS
                                                    Provinsi Jawa Timur pada tahun 2022, daftar mahasiswa Politeknik
                                                    Statistika STIS, dan daftar dosen Politeknik Statistika STIS.
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselKontenMetodologi" data-bs-slide="prev" style="width: 5%;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselKontenMetodologi" data-bs-slide="next" style="width: 5%;">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>



                        <!-- Populasi -->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;">
                                                <strong>Populasi</strong>
                                            </h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Populasi dari penelitian ini adalah seluruh mahasiswa Tingkat III
                                                Politeknik Statistika STIS Tahun Akademik 2022/2023, seluruh mahasiswa
                                                Politeknik Statistika STIS Tahun Akademik 2022/2023 yang berdomisili di
                                                Jakarta (selain Tingkat III), dan seluruh dosen Politeknik Statistika
                                                STIS beserta anggota keluarganya.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->

                        <!-- Populasi Target-->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;">
                                                <strong>Populasi Target</strong>
                                            </h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Populasi target dari penelitian ini adalah seluruh mahasiswa Tingkat III
                                                Prodi D-IV Politeknik Statistika STIS Tahun Akademik 2022/2023, seluruh
                                                mahasiswa Politeknik Statistika STIS Tahun Akademik 2022/2023 yang
                                                berdomisili di Jakarta (selain Tingkat III), dan seluruh dosen
                                                Politeknik Statistika STIS beserta anggota keluarganya yang pernah
                                                melakukan perjalanan wisata nusantara dalam satu tahun terakhir.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->

                        <!-- Populasi Survei-->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;">
                                                <strong>Populasi Survei</strong>
                                            </h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Populasi dari penelitian ini adalah seluruh mahasiswa Tingkat III Prodi
                                                D-IV Politeknik Statistika STIS Tahun Akademik 2022/2023, seluruh
                                                mahasiswa Politeknik Statistika STIS Tahun Akademik 2022/2023 yang
                                                berdomisili di Jakarta (selain Tingkat III), dan seluruh dosen
                                                Politeknik Statistika STIS beserta anggota keluarganya yang pernah
                                                melakukan perjalanan wisata nusantara dalam satu tahun terakhir.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->

                        <!-- Unit Observasi -->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit
                                                    Observasi</strong></h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Unit observasi dari penelitian ini adalah mahasiswa Tingkat III Prodi
                                                D-IV Politeknik Statistika STIS Tahun Akademik 2022/2023, mahasiswa
                                                Politeknik Statistika STIS Tahun Akademik 2022/2023 yang berdomisili di
                                                Jakarta (selain Tingkat III), dan dosen Politeknik Statistika STIS
                                                beserta anggota keluarganya yang menggunakan provider Telkomsel dan atau
                                                Indosat 2 tahun terakhir serta bersedia datanya digunakan untuk
                                                penelitian.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->

                        <!-- Unit Sampling-->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit
                                                    Sampling</strong></h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Unit sampling dari penelitian ini adalah mahasiswa Tingkat III Prodi
                                                D-IV Politeknik Statistika STIS Tahun Akademik 2022/2023, mahasiswa
                                                Politeknik Statistika STIS Tahun Akademik 2022/2023 yang berdomisili di
                                                Jakarta (selain Tingkat III), dan dosen Politeknik Statistika STIS
                                                beserta anggota keluarganya yang menggunakan provider Telkomsel dan atau
                                                Indosat 2 tahun terakhir serta bersedia datanya digunakan untuk
                                                penelitian.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->

                        <!-- Unit Analisis-->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit
                                                    Analisis</strong></h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Unit analisis dari penelitian ini adalah mahasiswa Tingkat III Prodi
                                                D-IV Politeknik Statistika STIS Tahun Akademik 2022/2023, mahasiswa
                                                Politeknik Statistika STIS Tahun Akademik 2022/2023 yang berdomisili di
                                                Jakarta (selain Tingkat III), dan dosen Politeknik Statistika STIS
                                                beserta anggota keluarganya yang pernah melakukan perjalanan wisata
                                                nusantara setahun terakhir yang menggunakan provider Telkomsel dan atau
                                                Indosat 2 tahun terakhir serta bersedia datanya digunakan untuk
                                                penelitian.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->

                        <!-- Kerangka Sampel-->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;">
                                                <strong>Kerangka Sampel</strong>
                                            </h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Kerangka sampel dari penelitian ini adalah daftar mahasiswa Tingkat III
                                                Prodi D-IV Politeknik Statistika STIS Tahun Akademik 2022/2023, daftar
                                                mahasiswa Politeknik Statistika STIS Tahun Akademik 2022/2023 yang
                                                berdomisili di Jakarta (selain Tingkat III), dan daftar dosen Politeknik
                                                Statistika STIS.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->
                        <!-- </div> -->

                        <!-- Batas Metodologi (Tujuan 1 dan Tujuan 2 Data testing) -->
                        <!-- <section class="offset-header">
                            <div class="container-fluid turun">
                                <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;"
                                    data-aos="zoom-in" data-aos-duration="1000">
                                    <p>
                                        <b>Tujuan 1 Dan Tujuan 2 (Data Testing) </b>
                                    </p> -->
                        <!-- Populasi -->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;">
                                                <strong>Populasi</strong>
                                            </h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Populasi dari penelitian ini adalah seluruh pegawai BPS Kota Surabaya,
                                                pegawai BPS Provinsi Jawa Timur, dan mahasiswa Politeknik Statistika
                                                STIS yang berdomisili di Provinsi Jawa Timur (selain Tingkat III)
                                                beserta anggota rumah tangganya.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->

                        <!-- Populasi Target-->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;">
                                                <strong>Populasi Target</strong>
                                            </h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Populasi target dari penelitian ini adalah seluruh pegawai BPS Kota
                                                Surabaya, pegawai BPS Provinsi Jawa Timur, dan mahasiswa Politeknik
                                                Statistika STIS yang berdomisili di Provinsi Jawa Timur (selain Tingkat
                                                III) beserta anggota rumah tangganya yang pernah melakukan perjalanan
                                                wisata nusantara dalam satu tahun terakhir
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->

                        <!-- Populasi Survei-->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;">
                                                <strong>Populasi Survei</strong>
                                            </h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Populasi dari penelitian ini adalah seluruh pegawai BPS Kota Surabaya,
                                                pegawai BPS Provinsi Jawa Timur, dan mahasiswa Politeknik Statistika
                                                STIS yang berdomisili di Provinsi Jawa Timur (selain Tingkat III)
                                                beserta anggota rumah tangganya yang pernah melakukan perjalanan wisata
                                                nusantara dalam satu tahun terakhir.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->

                        <!-- Unit Observasi -->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit
                                                    Observasi</strong></h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Unit observasi dari penelitian ini adalah pegawai BPS Kota Surabaya,
                                                pegawai BPS Provinsi Jawa Timur, dan mahasiswa Politeknik Statistika
                                                STIS yang berdomisili di Provinsi Jawa Timur (selain Tingkat III)
                                                beserta anggota rumah tangganya yang menggunakan provider Telkomsel atau
                                                Indosat 2 tahun terakhir serta bersedia datanya digunakan untuk
                                                penelitian.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->

                        <!-- Unit Sampling-->
                        <!-- <div
                            class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                            <div class="card-body text-center">
                                <i class="fas fa-clipboard-list ikon"></i>
                                <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit
                                        Sampling</strong></h5>
                                <p class="card-text text-justify">
                                <div class="text-justify" style="line-height: 25px;">
                                    Unit sampling dari penelitian ini adalah pegawai BPS Kota Surabaya,
                                    pegawai BPS Provinsi Jawa Timur, dan mahasiswa Politeknik Statistika
                                    STIS yang berdomisili di Provinsi Jawa Timur (selain Tingkat III)
                                    beserta anggota rumah tangganya yang menggunakan provider Telkomsel atau
                                    Indosat 2 tahun terakhir serta bersedia datanya digunakan untuk
                                    penelitian.
                                </div>
                                </p>
                            </div>
                        </div> -->

                        <!-- Unit Analisis-->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit
                                                    Analisis</strong></h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Unit analisis dari penelitian ini adalah pegawai BPS Kota Surabaya,
                                                pegawai BPS Provinsi Jawa Timur, dan mahasiswa Politeknik Statistika
                                                STIS yang berdomisili di Provinsi Jawa Timur (selain Tingkat III)
                                                beserta anggota rumah tangganya yang pernah melakukan perjalanan wisata
                                                nusantara dalam satu tahun terakhir yang menggunakan provider Telkomsel
                                                atau Indosat 2 tahun terakhir serta bersedia datanya digunakan untuk
                                                penelitian.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->
                        <!-- Kerangka Sampel-->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;">
                                                <strong>Kerangka Sampel</strong>
                                            </h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Kerangka sampel dari penelitian ini adalah daftar pegawai BPS Kota
                                                Surabaya, Provinsi Jawa Timur pada tahun 2022, daftar pegawai BPS
                                                Provinsi Jawa Timur pada tahun 2022, dan daftar mahasiswa Politeknik
                                                Statistika STIS yang berdomisili di Provinsi Jawa Timur (selain Tingkat
                                                III).
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> -->

                        <!-- Desain Sampling-->
                        <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 1.5;"
                            data-aos="zoom-in" data-aos-duration="1000">
                            <div
                                class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <!-- <i class="fas fa-cubes ikon"></i> -->
                                    <div class="row-6 d-flex align-items-center justify-content-center">
                                        <img src="<?= base_url('pvd/img/landingpage/riset2/metode_penarikan_sampel.png') ?>"
                                            class="img-fluid" alt="" style="height: 50px; width:auto;">
                                    </div>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Desain
                                            Sampling</strong></h5>
                                    <p class="card-text text-center">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Metode penarikan sampel yang digunakan adalah <i>Judgment (Purposive)
                                            Sampling</i>. <i>Judgment (Purposive) Sampling</i> adalah metodologi
                                        pengambilan
                                        sampel secara acak dimana kelompok sampel yang ditargetkan memiliki
                                        atribut-atribut
                                        tertentu. Metode ini dapat digunakan pada banyak populasi, tetapi lebih efektif
                                        dengan
                                        ukuran sampel yang lebih kecil dan populasi yang lebih homogen. Cara yang
                                        dilakukan
                                        pada
                                        <i><b>Judgment (Purposive) Sampling</b></i> penelitian ini adalah pengambilan
                                        sampel
                                        yang homogen. Dengan sampling homogen, sekelompok orang dengan usia, jenis
                                        kelamin,
                                        latar belakang, atau pekerjaan yang sama akan dipilih. Pada penelitian ini,
                                        dipilih
                                        sampel dengan pekerjaan yang sama, yaitu orang yang bekerja di BPS Kota Surabaya
                                        dan
                                        BPS
                                        Provinsi Jawa Timur, dan sampel dengan latar belakang yang sama, yaitu orang
                                        yang
                                        sedang
                                        berkuliah di Politeknik Statistika STIS.
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kota Malang -->
                    <div class="tab-pane fade" id="pills-sekunder" role="tabpanel" aria-labelledby="pills-sekunder-tab">
                        <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 1.5;"
                            data-aos="zoom-in" data-aos-duration="1000">
                            <p>
                                <b>Cakupan Penelitian</b>
                            </p>
                            <div id="carouselKontenMetodologi3" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">

                                    <!-- Populasi -->
                                    <div class="carousel-item active">
                                        <div
                                            class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                            <div class="card-body text-center">
                                                <div class="row-6 d-flex align-items-center justify-content-center">
                                                    <img src="<?= base_url('pvd/img/landingpage/riset1/populasi.png') ?>"
                                                        class="img-fluid" alt="" style="height: 50px; width:auto;">
                                                </div>
                                                <h5 class="card-title text-center" style="line-height: 20px;">
                                                    <strong>Populasi</strong>
                                                </h5>
                                                <p class="card-text text-justify">
                                                <div class="text-justify" style="line-height: 25px;">
                                                    Populasi dari penelitian ini adalah seluruh anggota rumah
                                                    tangga di Kota
                                                    Malang.
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Populasi Target -->
                                    <div class="carousel-item">
                                        <div
                                            class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                            <div class="card-body text-center">
                                                <div class="row-6 d-flex align-items-center justify-content-center">
                                                    <img src="<?= base_url('pvd/img/landingpage/riset1/populasi_target.png') ?>"
                                                        class="img-fluid" alt="" style="height: 50px; width:auto;">
                                                </div>
                                                <h5 class="card-title text-center" style="line-height: 20px;">
                                                    <strong>Populasi Target</strong>
                                                </h5>
                                                <p class="card-text text-justify">
                                                <div class="text-justify" style="line-height: 25px;">
                                                    Populasi target dari penelitian ini adalah seluruh anggota
                                                    rumah tangga
                                                    di Kota Malang yang minimal salah satu anggota rumah
                                                    tangganya pernah
                                                    melakukan perjalanan wisata nusantara selama Triwulan IV
                                                    2022.
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Populasi Survei -->
                                    <div class="carousel-item">
                                        <div
                                            class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                            <div class="card-body text-center">
                                                <div class="row-6 d-flex align-items-center justify-content-center">
                                                    <img src="<?= base_url('pvd/img/landingpage/riset1/populasi.png') ?>"
                                                        class="img-fluid" alt="" style="height: 50px; width:auto;">
                                                </div>
                                                <h5 class="card-title text-center" style="line-height: 20px;">
                                                    <strong>Populasi Survei</strong>
                                                </h5>
                                                <p class="card-text text-justify">
                                                <div class="text-justify" style="line-height: 25px;">
                                                    Populasi dari penelitian ini adalah seluruh anggota rumah
                                                    tangga di Kota
                                                    Malang yang minimal salah satu anggota rumah tangganya
                                                    pernah melakukan
                                                    perjalanan wisata nusantara selama Triwulan IV 2022.
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Unit Observasi -->
                                    <div class="carousel-item">
                                        <div
                                            class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                            <div class="card-body text-center">
                                                <div class="row-6 d-flex align-items-center justify-content-center">
                                                    <img src="<?= base_url('pvd/img/landingpage/riset1/unit_observasi.png') ?>"
                                                        class="img-fluid" alt="" style="height: 50px; width:auto;">
                                                </div>
                                                <h5 class="card-title text-center" style="line-height: 20px;">
                                                    <strong>Unit Observasi</strong>
                                                </h5>
                                                <p class="card-text text-justify">
                                                <div class="text-justify" style="line-height: 25px;">
                                                    Unit observasi dari penelitian ini adalah anggota rumah
                                                    tangga di Kota
                                                    Malang yang pernah melakukan perjalanan wisata nusantara
                                                    selama Triwulan
                                                    IV 2022 yang keberadaannya telah divalidasi.
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Unit Sampling-->
                                    <div class="carousel-item">
                                        <div
                                            class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                            <div class="card-body text-center">
                                                <div class="row-6 d-flex align-items-center justify-content-center">
                                                    <img src="<?= base_url('pvd/img/landingpage/riset1/unit_sampling.png') ?>"
                                                        class="img-fluid" alt="" style="height: 50px; width:auto;">
                                                </div>
                                                <h5 class="card-title text-center" style="line-height: 20px;">
                                                    <strong>Unit Sampling</strong>
                                                </h5>
                                                <p class="card-text text-justify">
                                                <div class="text-justify" style="line-height: 25px;">
                                                    Unit sampling dari penelitian ini adalah rumah tangga di
                                                    Kota Malang
                                                    yang minimal salah satu anggota rumah tangganya pernah
                                                    melakukan
                                                    perjalanan wisata nusantara selama Triwulan IV 2022.
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Unit Analisis -->
                                    <div class="carousel-item">
                                        <div
                                            class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                            <div class="card-body text-center">
                                                <div class="row-6 d-flex align-items-center justify-content-center">
                                                    <img src="<?= base_url('pvd/img/landingpage/riset1/unit_analisis.png') ?>"
                                                        class="img-fluid" alt="" style="height: 50px; width:auto;">
                                                </div>
                                                <h5 class="card-title text-center" style="line-height: 20px;">
                                                    <strong>Unit Analisis</strong>
                                                </h5>
                                                <p class="card-text text-justify">
                                                <div class="text-justify" style="line-height: 25px;">
                                                    Unit analisis dari penelitian ini adalah anggota rumah
                                                    tangga di Kota
                                                    Malang yang pernah melakukan perjalanan wisata nusantara
                                                    selama Triwulan
                                                    IV 2022.
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Kerangka Sampel -->
                                    <div class="carousel-item">
                                        <div
                                            class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                            <div class="card-body text-center">
                                                <div class="row-6 d-flex align-items-center justify-content-center">
                                                    <img src="<?= base_url('pvd/img/landingpage/riset1/kerangka_sampel.png') ?>"
                                                        class="img-fluid" alt="" style="height: 50px; width:auto;">
                                                </div>
                                                <h5 class="card-title text-center" style="line-height: 20px;">
                                                    <strong>Kerangka Sampel</strong>
                                                </h5>
                                                <p class="card-text text-justify">
                                                <div class="text-justify" style="line-height: 25px;">
                                                    Kerangka sampel dari penelitian ini adalah daftar blok
                                                    sensus dari
                                                    Sensus Penduduk 2020 di Kota Malang, Provinsi Jawa Timur.
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row justify-content-center">
                                            <!-- Primary Sampling Unit -->
                                            <div class="col-5 align-items-center d-flex align-self-center">
                                                <div class="card-body text-center batasan2 shadow">
                                                    <div class="row-6 d-flex align-items-center justify-content-center">
                                                        <img src="<?= base_url('pvd/img/landingpage/riset1/primary_sampling_unit.png') ?>"
                                                            class="img-fluid" alt="" style="height: 50px; width:auto;">
                                                    </div>
                                                    <div class="col">
                                                        <p class="card-title text-center">
                                                        <div style="line-height: 20px; color: #4b395f;"><strong>Primary
                                                                Sampling Unit</strong></div>
                                                        <div class="angka">347</div>
                                                        <div style="line-height: 20px;">Blok Sensus</div>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Secondary Sampling Unit -->
                                            <div class="col-5 align-items-center d-flex align-self-center">
                                                <div class="card-body text-center batasan2 shadow">
                                                    <div class="row-6 d-flex align-items-center justify-content-center">
                                                        <img src="<?= base_url('pvd/img/landingpage/riset1/secondary_sampling_unit.png') ?>"
                                                            class="img-fluid" alt="" style="height: 50px; width:auto;">
                                                    </div>
                                                    <div class="col">
                                                        <p class="card-title text-center">
                                                        <div style="line-height: 20px; color: #4b395f;">
                                                            <strong>Secondary
                                                                Sampling Unit</strong>
                                                        </div>
                                                        <div class="angka">10</div>
                                                        <div style="line-height: 20px;">Rumah Tangga</div>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselKontenMetodologi3" data-bs-slide="prev" style="width: 5%;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselKontenMetodologi3" data-bs-slide="next" style="width: 5%;">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>




                        <!-- Populasi -->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;">
                                                <strong>Populasi</strong>
                                            </h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Populasi dari penelitian ini adalah seluruh anggota rumah tangga di Kota
                                                Malang.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->

                        <!-- Populasi Target-->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;">
                                                <strong>Populasi Target</strong>
                                            </h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Populasi target dari penelitian ini adalah seluruh anggota rumah tangga
                                                di Kota Malang yang minimal salah satu anggota rumah tangganya pernah
                                                melakukan perjalanan wisata nusantara selama Triwulan IV 2022.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->

                        <!-- Populasi Survei-->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;">
                                                <strong>Populasi Survei</strong>
                                            </h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Populasi dari penelitian ini adalah seluruh anggota rumah tangga di Kota
                                                Malang yang minimal salah satu anggota rumah tangganya pernah melakukan
                                                perjalanan wisata nusantara selama Triwulan IV 2022.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->

                        <!-- Unit Observasi -->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit
                                                    Observasi</strong></h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Unit observasi dari penelitian ini adalah anggota rumah tangga di Kota
                                                Malang yang pernah melakukan perjalanan wisata nusantara selama Triwulan
                                                IV 2022 yang keberadaannya telah divalidasi.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->

                        <!-- Unit Sampling-->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit
                                                    Sampling</strong></h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Unit sampling dari penelitian ini adalah rumah tangga di Kota Malang
                                                yang minimal salah satu anggota rumah tangganya pernah melakukan
                                                perjalanan wisata nusantara selama Triwulan IV 2022.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->

                        <!-- Unit Analisis-->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit
                                                    Analisis</strong></h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Unit analisis dari penelitian ini adalah anggota rumah tangga di Kota
                                                Malang yang pernah melakukan perjalanan wisata nusantara selama Triwulan
                                                IV 2022.
                                            </div>
                                            </p>
                                        </div>
                                    </div> -->

                        <!-- Kerangka Sampel-->
                        <!-- <div
                                        class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                        <div class="card-body text-center">
                                            <i class="fas fa-clipboard-list ikon"></i>
                                            <h5 class="card-title text-center" style="line-height: 20px;">
                                                <strong>Kerangka Sampel</strong>
                                            </h5>
                                            <p class="card-text text-justify">
                                            <div class="text-justify" style="line-height: 25px;">
                                                Kerangka sampel dari penelitian ini adalah daftar blok sensus dari
                                                Sensus Penduduk 2020 di Kota Malang, Provinsi Jawa Timur.
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> -->


                        <!-- Desain Sampling Tujuan 3 -->
                        <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;"
                            data-aos="zoom-in" data-aos-duration="1000">
                            <!-- DESAIN SAMPLING -->
                            <p>
                                <b>Desain Sampling</b>
                            </p>

                            <p class="text-justify">
                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <div class="text-center text-lg-start">
                                    <a class="bagan text-decoration-none">
                                        <img style="cursor: pointer;" data-bs-toggle="modal"
                                            data-bs-target="#baganSkema"
                                            src="<?= base_url('pvd/img/landingpage/riset1/bagan_riset1.png') ?>"
                                            class="img-fluid rounded-3 w-75 mx-auto d-block" alt="">
                                    </a>
                                </div>
                            </div>
                            </p>



                            <section class="text-justify">
                                <p class="text-justify">Metode penarikan sampel yang digunakan adalah
                                    Multistage
                                    Random Sampling karena
                                    populasi heterogen dan berukuran sangat besar. Berikut tahapan penarikan
                                    sampel
                                    dengan Multistage Random Sampling:</p>
                                <ul class="text-justify">
                                    <li>
                                        <b>Tahap Pertama</b> : Melakukan pemilihan n blok sensus (BS) dari semua
                                        kecamatan
                                        secara Probability Proportional to Size (PPS WR-Systematic) dengan
                                        size
                                        jumlah keluarga di tiap blok sensus di Kota Malang hasil
                                        pemutakhiran
                                        Sensus
                                        Penduduk 2020.
                                    </li>
                                    <li>
                                        <b>Tahap Kedua</b> : Melakukan pemilihan n rumah tangga dari blok sensus
                                        (BS)
                                        terpilih secara Systematic Sampling dengan variabel dasar pengurutan
                                        jumlah
                                        anggota rumah tangga yang minimal salah satu anggota rumah tangganya
                                        pernah
                                        melakukan perjalanan wisata selama Triwulan IV 2022.
                                    </li>
                                </ul>
                            </section>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="baganSkema" tabindex="-1" aria-labelledby="baganModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-sm modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="baganModalLabel">Skema Sampling
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="<?= base_url('pvd/img/landingpage/riset1/bagan_riset1.png') ?>"
                                            class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cakupan Penelitian -->
                        <!-- <div class="konten third5 par mt-3 mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 1.5;"
                            data-aos="zoom-in" data-aos-duration="1000">
                            <-- DESAIN SAMPLING -->
                        <!-- <p>
                                <b>Cakupan Penelitian</b>
                            </p> -->

                        <!-- Primary & Secondary Sampling Unit -->
                        <!-- <div class="col"> -->
                        <!-- <div class="row"> -->
                        <!-- Populasi -->
                        <!-- <div class="col-lg-4 align-items-center d-flex flex-column mt-3">
                                    <div class="card-body text-center batasan2 shadow">
                                        <i class="fas fa-users col-1 ikon"></i>
                                        <div class="col">
                                            <p class="card-title text-center">
                                            <div style="line-height: 20px; color: #4b395f;"><strong>Populasi</strong></div>
                                            <div class="angka">2180</div>
                                            <div class="text-center" style="line-height: 20px;">Anggota Rumah Tangga</div>
                                            </p>
                                        </div>
                                    </div>
                                </div> -->

                        <!-- Populasi Target -->
                        <!-- <div class="col-lg-4 align-items-center d-flex flex-column mt-3">
                                    <div class="card-body text-center batasan2 shadow">
                                        <i class="fas fa-user-friends col-1 ikon"></i>
                                        <div class="col">
                                            <p class="card-title text-center">
                                            <div style="line-height: 20px; color: #4b395f;"><strong>Populasi Target</strong></div>
                                            <div class="angka">2180</div>
                                            <div style="line-height: 20px;">Anggota Rumah Tangga</div>
                                            </p>
                                        </div>
                                    </div>
                                </div> -->

                        <!-- Unit Observasi -->
                        <!-- <div class="col-lg-4 align-items-center d-flex flex-column mt-3">
                                    <div class="card-body text-center batasan2 shadow">
                                        <i class="fas fa-user-alt col-1 ikon"></i>
                                        <div class="col">
                                            <p class="card-title text-center">
                                            <div style="line-height: 20px; color: #4b395f;"><strong>Unit Observasi</strong></div>
                                            <div class="angka">2180</div>
                                            </p>
                                        </div>
                                    </div>
                                </div> -->
                        <!-- </div> -->

                        <!-- <div class="row justify-content-center"> -->
                        <!-- Primary Sampling Unit -->
                        <!-- <div class="col-5 align-items-center d-flex align-self-center">
                                        <div class="card-body text-center batasan2 shadow">
                                            <i class="fas fa-home col-1 ikon"></i>
                                            <div class="col">
                                                <p class="card-title text-center">
                                                <div style="line-height: 20px; color: #4b395f;"><strong>Primary
                                                        Sampling Unit</strong></div>
                                                <div class="angka">346</div>
                                                <div style="line-height: 20px;">Blok Sensus</div>
                                                </p>
                                            </div>
                                        </div>
                                    </div> -->

                        <!-- Secondary Sampling Unit -->
                        <!-- <div class="col-5 align-items-center d-flex align-self-center">
                                        <div class="card-body text-center batasan2 shadow">
                                            <i class="fas fa-city col-1 ikon"></i>
                                            <div class="col">
                                                <p class="card-title text-center">
                                                <div style="line-height: 20px; color: #4b395f;"><strong>Secondary
                                                        Sampling Unit</strong></div>
                                                <div class="angka">3364</div>
                                                <div style="line-height: 20px;">Rumah Tangga</div>
                                                </p>
                                            </div>
                                        </div>
                                    </div> -->

                        <!-- Unit Analisis -->
                        <!-- <div class="col-lg-4 align-items-center d-flex flex-column mt-3">
                                    <div class="card-body text-center batasan2 shadow">
                                        <i class="fas fa-user-alt col-1 ikon"></i>
                                        <div class="col">
                                            <p class="card-title text-center">
                                            <div style="line-height: 20px; color: #4b395f;"><strong>Unit Analisis</strong></div>
                                            <div class="angka">2180</div>
                                            <div style="line-height: 20px;">Anggota Rumah Tangga</div>
                                            </p>
                                        </div>
                                    </div>
                                </div> -->
                        <!-- </div>
                            </div> -->

                        <!-- Metode Penarikan Sampel -->
                        <!-- <div
                                class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-cubes ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Metode
                                            Penarikan Sampel</strong></h5>
                                    <p class="card-text text-center">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Metode penarikan sampel yang digunakan adalah Judgment (Purposive) Sampling.
                                        Judgment (Purposive) Sampling adalah metodologi pengambilan sampel secara acak
                                        dimana kelompok sampel yang ditargetkan memiliki atribut-atribut tertentu.
                                        Metode ini dapat digunakan pada banyak populasi, tetapi lebih efektif dengan
                                        ukuran sampel yang lebih kecil dan populasi yang lebih homogen. Cara yang
                                        dilakukan pada Judgment (Purposive) Sampling penelitian ini adalah pengambilan
                                        sampel yang homogen. Dengan sampling homogen, sekelompok orang dengan usia,
                                        jenis kelamin, latar belakang, atau pekerjaan yang sama akan dipilih. Pada
                                        penelitian ini, dipilih sampel dengan pekerjaan yang sama, yaitu orang yang
                                        bekerja di BPS Kota Surabaya dan BPS Provinsi Jawa Timur, dan sampel dengan
                                        latar belakang yang sama, yaitu orang yang sedang berkuliah di Politeknik
                                        Statistika STIS.
                                    </div>
                                    </p>
                                </div>
                            </div>

                        </div> -->

                        <!-- <p>
                                        <b>Desain Sampling Tujuan 3</b>
                                    </p>
                                    
                                    <p class="text-justify">
                                        Metode penarikan sampel yang digunakan adalah Multistage Random Sampling karena
                                        populasi heterogen dan berukuran sangat besar. Berikut tahapan penarikan sampel
                                        dengan Multistage Random Sampling:
                                    <ul>
                                        <li class="text-justify">
                                            Tahap Pertama: Melakukan pemilihan n blok sensus (BS) dari semua kecamatan
                                            secara Probability Proportional to Size (PPS WR-Systematic) dengan size
                                            jumlah keluarga di tiap blok sensus di Kota Malang hasil pemutakhiran Sensus
                                            Penduduk 2020.

                                        </li>

                                        <li class="text-justify">
                                            Tahap Kedua: Melakukan pemilihan n rumah tangga dari blok sensus (BS)
                                            terpilih secara Systematic Sampling dengan variabel dasar pengurutan jumlah
                                            anggota rumah tangga yang minimal salah satu anggota rumah tangganya pernah
                                            melakukan perjalanan wisata selama Triwulan IV 2022.
                                        </li>
                                    </ul>
                                    </p> -->



                    </div>
                </div>
            </div>
        </section>


        <!-- Hasil Penelitian -->
        <!-- <section class="offset-header mt-5">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Hasil Penelitian</h1>
                    </div>
                </div>
                <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                    <p class="text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, perferendis. Quia
                        harum qui
                        ipsum
                        nihil odio, perspiciatis architecto asperiores quam. Architecto, enim dolor cupiditate
                        harum
                        ipsam
                        quibusdam consequuntur temporibus totam, dolorem consectetur quod maiores, obcaecati
                        saepe
                        velit.
                        Laboriosam ad impedit corrupti error perspiciatis nemo tempore quae possimus, obcaecati
                        numquam
                        ullam recusandae dolore maiores doloribus quasi animi asperiores! Quasi culpa
                        exercitationem
                        officiis sit magni voluptatem, reiciendis unde! Similique minima, dignissimos repellat
                        veniam
                        laboriosam odit maiores illum alias doloribus, beatae, labore unde porro? Incidunt,
                        assumenda
                        explicabo. Eaque nisi, impedit repellendus fugiat laborum in soluta? Dolores dolorum ex
                        recusandae
                        atque quidem aliquid placeat?
                    </p>
                </div>
            </div>
        </section> -->

        <!-- Infografis -->
        <!-- <section class="offset-header mt-5">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Infografis</h1>
                    </div>
                </div>
                <div class="konten third5 par m-auto p-4 p-md-5 shadow box d-flex flex-column flex-lg-row justify-content-lg-center panel" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="info-item m-1" style="background-color: #ffbc33; height: 500px"></div>
                    <div class="info-item m-1" style="background-color: #ffbc33; height: 500px"></div>
                </div>
            </div>
        </section> -->
    </section>
</section>

</section><!-- End -->
</section>

<?= $this->endSection(); ?>