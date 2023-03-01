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
                        Dalam bidang pariwisata, pemanfaatan <i>mobile positioning data</i> (MPD), yaitu
                        salah satu jenis big data yang berisi data lokasi dari pengguna provider tertentu,
                        menjadi salah satu opsi <i>official statistics</i> dalam mengestimasi statistik pariwisata
                        untuk menggontikan survei konvensional yang membutuhkan waktu dan biaya yang tidak sedikit.
                        Namun banyak keterbatasan dari MPD yang masih perlu dipertimbangkan untuk mendapatkan statistik
                        yang akurat. Beberapa diantaranya adalah adanya kemungkinan seseorang memiliki lebih dari satu
                        nomor
                        HP dan belum tercakupnya penduduk yang belum memiliki HP seperti anak-anak di bawah 10 tahun.
                        Pada penelitian ini,
                        kami melakukan kajian pemanfaatan MPD untuk statistik pariwisata dengan tujuan memperbaiki
                        cakupan MPD
                        dengan menganalisis MPD dari beberapa nomor HP yang dimiliki orang yang sama dan MPD dciri
                        beberapa nomor
                        yang termasuk dalam satu keluarga.

                    </p>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a id="tombol" href="<?= base_url('hasil-pkl/riset1/dasbor') ?>" class="tombol btn-for text-decoration-none">
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
                <div class="konten third5 shadow box par m-auto p-4 p-md-5 mt-4" data-aos="zoom-in" data-aos-duration="1000">
                    <p class="text-justify">
                        Terdapat sebuah fenomena yang cukup sering ditemui, dimana seseorang yang melakukan perjalanan
                        wisata sebagian besar melakukan perjalanan wisata bersama keluarga atau kerabat terdekatnya
                        (Koranti, Sriyanto & Sidik, 2017). Hal ini penting untuk dianalisis apakah untuk menentukan
                        seseorang termasuk ke dalam satu keluarga dapat diidentifikasi berdasarkan usual environment
                        dan
                        pola perjalanan wisata yang dilakukan melalui MPD.
                        <a id="latarBelakangAtas" onclick="ubahKelas1(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            [<strong><i>Tampilkan Semua</i></strong>]
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <p class="text-justify">
                            Setiap operator baik Telkomsel maupun Indosat memungkinkan mempunyai hasil mobile
                            positioning
                            berbeda satu sama lain, bahkan juga di operator itu sendiri meskipun orang tersebut berada
                            di lokasi
                            dan waktu yang sama. Penyebabnya adalah jarak tower seluler (BTS) tiap operator dan
                            aktivitas
                            seluler masing-masing pengguna berpengaruh, sehingga data mobile positioning yang dihasilkan
                            tidak
                            sama. Jika seorang wisatawan menggunakan dua nomor berbeda dalam satu ponsel sebagai penentu
                            mobile
                            positioning, wisatawan tersebut akan terhitung sebanyak dua kali sehingga seolah-olah kedua
                            nomor
                            tersebut dimiliki oleh dua orang yang berbeda, atau dengan kata lain terjadi double counting
                            pada data MPD.
                        </p>
                        <p class="text-justify">
                            Dibalik kelebihan yang ditawarkannya, MPD juga memiliki kelemahan dalam mengumpulkan data
                            wisatawan.
                            Salah satunya adalah informasi mengenai karakteristik pengguna tidak dapat diperoleh jika
                            hanya
                            menggunakan MPD tanpa melakukan survei. Hal ini diperkuat juga dengan sulitnya mengestimasi
                            jumlah
                            perjalanan wisata di dalam kabupaten/kota (setingkat kecamatan) yang disebabkan tidak
                            meratanya
                            ketersediaan Base Transceiver Station (BTS) di setiap kecamatan di Indonesia. Apabila data
                            wisata
                            dalam kabupaten/kota ini tidak tertangkap, kekurangan data wisatawan akan terjadi. Selain
                            itu, MPD
                            juga tidak bisa menangkap jumlah perjalanan wisata yang tidak melibatkan penggunaan telepon
                            seluler.
                            Beberapa kekurangan MPD tersebut menjadi cukup merugikan mengingat dibutuhkannya data wisata
                            yang
                            komprehensif dalam hal pengembangan wisata guna memulihkan sektor pariwisata.
                            <a id="latarBelakangBawah" onclick="ubahKelas2(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
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
                <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                    <ol class="text-justify">
                        <li>Membangun metode untuk mengelompokkan individu yang termasuk dalam satu rumah tangga
                            berdasarkan
                            usual environment dan pola perjalanan wisata (family grouping).
                        </li>
                        <li>Membangun metode untuk mengidentifikasi double counting berdasarkan pola perjalanan individu
                            yang menggunakan lebih dari satu nomor Telkomsel dan/atau Indosat berbeda dalam satu
                            perangkat.
                        </li>
                        <li>Menyajikan statistik wisatawan nusantara melalui pendekatan Mobile Positioning Data (MPD)
                            dan
                            survei konvensional di Kota Malang tahun 2022.
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

        <!-- Metodologi Slider -->

        <section class="offset-header">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Metodologi</h1>
                    </div>
                </div>

                <section class="offset-header mt-5">
                    <div class="container-fluid turun">
                        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                            <div class="col-12 col-sm-12">
                                <h1 class="headline text-center">Metodologi</h1>
                            </div>
                        </div>

                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">



                                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link pills-button shadow active" id="pills-primer-tab" data-bs-toggle="pill" data-bs-target="#pills-primer" type="button" role="tab" aria-controls="pills-primer" aria-selected="true">Primer</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link pills-button shadow" id="pills-sekunder-tab" data-bs-toggle="pill" data-bs-target="#pills-sekunder" type="button" role="tab" aria-controls="pills-sekunder" aria-selected="false">Sekunder</button>
                                    </li>
                                </ul>
                                <!-- Button Metodologi -->

                                <div class="tab-content" id="pills-tabContent">
                                    <!-- Survei 1 - Copy -->
                                    <div class="tab-pane fade show active" id="pills-primer" role="tabpanel" aria-labelledby="pills-primer-tab">
                                        <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                                            Data primer dikumpulkan dari unit observasi
                                            penelitian ini yaitu rumah tangga dengan metode wawancara menggunakan moda
                                            <i>Computer Assisted Personal Interview</i> (CAPI) dan <i>Pen-and-Paper Personal
                                                Interview</i> (PAPI).
                                        </div>
                                        <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                                            Data primer dikumpulkan dari unit observasi
                                            penelitian ini yaitu rumah tangga dengan metode wawancara menggunakan moda
                                            <i>Computer Assisted Personal Interview</i> (CAPI) dan <i>Pen-and-Paper Personal
                                                Interview</i> (PAPI).
                                        </div>
                                    </div>
                                    <!-- Survei 2 - Copy -->
                                    <div class="tab-pane fade" id="pills-sekunder" role="tabpanel" aria-labelledby="pills-sekunder-tab">
                                        <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                                            Data sekunder dikumpulkan dari BPS yaitu
                                            data Kecamatan dan Blok Sensus (BS) yang tersedia di lokus penelitian yang
                                            digunakan sebagai dasar penentuan sampel.</div>
                                        <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                                            Data sekunder dikumpulkan dari BPS yaitu
                                            data Kecamatan dan Blok Sensus (BS) yang tersedia di lokus penelitian yang
                                            digunakan sebagai dasar penentuan sampel.</div>
                                        <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                                            Data sekunder dikumpulkan dari BPS yaitu
                                            data Kecamatan dan Blok Sensus (BS) yang tersedia di lokus penelitian yang
                                            digunakan sebagai dasar penentuan sampel.</div>
                                    </div>
                                </div>

                                <!-- Carousel Metodologi -->
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <!-- Survei 1 -->
                                        <div class="carousel-item active">
                                            <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                                                <p class="text-justify" style="font-weight: bold">
                                                    Survei 1: Survei Relawan dan Ruta Pegawai BPS Kota Surabaya dan Provinsi Jawa Timur
                                                    Metode Pengambilan Sampel: Purposive Sampling
                                                <ul>
                                                    <li class="text-justify">Tahap pertama, Dari daftar pegawai diambil pegawai yang
                                                        eligible, yaitu
                                                        pegawai dengan provider
                                                        telkomsel dan/atau indosat sebagai relawan dan dilakukan pencacahan tahap
                                                        Pegawai.
                                                    </li>
                                                    <li class="text-justify">Tahap kedua, Dari pencacahan tahap pegawai dilakukan
                                                        pencacahan ke
                                                        level
                                                        keluarga pegawai
                                                        tersebut. Pada penelitian ini, keluarga pegawai yang dicacah dibatasi hanya yang
                                                        berdomisili
                                                        di
                                                        Surabaya atau beberapa kecamatan (Kecamatan Taman, Sukodono, Buduran, Waru,
                                                        Gedangan, dan
                                                        Sedati) di
                                                        Sidoarjo.
                                                    </li>
                                                </ul>
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Survei 2 -->
                                        <div class="carousel-item">
                                            <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                                                <p class="text-justify" style="font-weight: bold">
                                                    Survei 2: Survei Integrasi (Pilot Survei Riset 2)
                                                    Metode Pengambilan Sampel: Two Stage Sampling
                                                <ul>
                                                    <li class="text-justify">Tahap pertama, mengambil sejumlah blok sensus dengan
                                                        Probability
                                                        Proportional to Size With
                                                        Replacement dengan size jumlah keluarga di tiap blok sensus hasil pemutakhiran
                                                        Sensus
                                                        Penduduk
                                                        2020
                                                    </li>
                                                    <li class="text-justify">Tahap kedua, mengambil rumah tangga menggunakan Systematic
                                                        Sampling
                                                        dengan
                                                        jumlah anggota rumah
                                                        tangga sebagai variabel dasar pengurutan
                                                    </li>
                                                </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>

                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>


                                <!-- end konten -->
                            </div>
                </section>

                <!-- Metodologi (Tujuan 1 dan Tujuan 2 Data training) -->
                <section class="offset-header">
                    <div class="container-fluid turun">
                        <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                            <p>
                                <b>Tujuan 1 Dan Tujuan 2 (Data Training) </b>
                            </p>

                            <!-- Populasi -->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Populasi</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Populasi dari penelitian ini adalah seluruh mahasiswa Tingkat III Politeknik Statistika STIS Tahun Akademik 2022/2023, seluruh mahasiswa Politeknik Statistika STIS Tahun Akademik 2022/2023 yang berdomisili di Jakarta (selain Tingkat III), dan seluruh dosen Politeknik Statistika STIS beserta anggota keluarganya.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Populasi Target-->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Populasi Target</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Populasi target dari penelitian ini adalah seluruh mahasiswa Tingkat III Prodi D-IV Politeknik Statistika STIS Tahun Akademik 2022/2023, seluruh mahasiswa Politeknik Statistika STIS Tahun Akademik 2022/2023 yang berdomisili di Jakarta (selain Tingkat III), dan seluruh dosen Politeknik Statistika STIS beserta anggota keluarganya yang pernah melakukan perjalanan wisata nusantara dalam satu tahun terakhir.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Populasi Survei-->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Populasi Survei</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Populasi dari penelitian ini adalah seluruh mahasiswa Tingkat III Prodi D-IV Politeknik Statistika STIS Tahun Akademik 2022/2023, seluruh mahasiswa Politeknik Statistika STIS Tahun Akademik 2022/2023 yang berdomisili di Jakarta (selain Tingkat III), dan seluruh dosen Politeknik Statistika STIS beserta anggota keluarganya yang pernah melakukan perjalanan wisata nusantara dalam satu tahun terakhir.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Unit Observasi -->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit Observasi</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Unit observasi dari penelitian ini adalah mahasiswa Tingkat III Prodi D-IV Politeknik Statistika STIS Tahun Akademik 2022/2023, mahasiswa Politeknik Statistika STIS Tahun Akademik 2022/2023 yang berdomisili di Jakarta (selain Tingkat III), dan dosen Politeknik Statistika STIS beserta anggota keluarganya yang menggunakan provider Telkomsel dan atau Indosat 2 tahun terakhir serta bersedia datanya digunakan untuk penelitian.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Unit Sampling-->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit Sampling</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Unit sampling dari penelitian ini adalah mahasiswa Tingkat III Prodi D-IV Politeknik Statistika STIS Tahun Akademik 2022/2023, mahasiswa Politeknik Statistika STIS Tahun Akademik 2022/2023 yang berdomisili di Jakarta (selain Tingkat III), dan dosen Politeknik Statistika STIS beserta anggota keluarganya yang menggunakan provider Telkomsel dan atau Indosat 2 tahun terakhir serta bersedia datanya digunakan untuk penelitian.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Unit Analisis-->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit Analisis</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Unit analisis dari penelitian ini adalah mahasiswa Tingkat III Prodi D-IV Politeknik Statistika STIS Tahun Akademik 2022/2023, mahasiswa Politeknik Statistika STIS Tahun Akademik 2022/2023 yang berdomisili di Jakarta (selain Tingkat III), dan dosen Politeknik Statistika STIS beserta anggota keluarganya yang pernah melakukan perjalanan wisata nusantara setahun terakhir yang menggunakan provider Telkomsel dan atau Indosat 2 tahun terakhir serta bersedia datanya digunakan untuk penelitian.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Kerangka Sampel-->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Kerangka Sampel</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Kerangka sampel dari penelitian ini adalah daftar mahasiswa Tingkat III Prodi D-IV Politeknik Statistika STIS Tahun Akademik 2022/2023, daftar mahasiswa Politeknik Statistika STIS Tahun Akademik 2022/2023 yang berdomisili di Jakarta (selain Tingkat III), dan daftar dosen Politeknik Statistika STIS.
                                    </div>
                                    </p>
                                </div>
                            </div>


                        </div>
                </section>

                <!-- Metodologi (Tujuan 1 dan Tujuan 2 Data testing) -->
                <section class="offset-header">
                    <div class="container-fluid turun">
                        <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                            <p>
                                <b>Tujuan 1 Dan Tujuan 2 (Data Testing) </b>
                            </p>

                            <!-- Populasi -->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Populasi</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Populasi dari penelitian ini adalah seluruh pegawai BPS Kota Surabaya, pegawai BPS Provinsi Jawa Timur, dan mahasiswa Politeknik Statistika STIS yang berdomisili di Provinsi Jawa Timur (selain Tingkat III) beserta anggota rumah tangganya.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Populasi Target-->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Populasi Target</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Populasi target dari penelitian ini adalah seluruh pegawai BPS Kota Surabaya, pegawai BPS Provinsi Jawa Timur, dan mahasiswa Politeknik Statistika STIS yang berdomisili di Provinsi Jawa Timur (selain Tingkat III) beserta anggota rumah tangganya yang pernah melakukan perjalanan wisata nusantara dalam satu tahun terakhir
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Populasi Survei-->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Populasi Survei</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Populasi dari penelitian ini adalah seluruh pegawai BPS Kota Surabaya, pegawai BPS Provinsi Jawa Timur, dan mahasiswa Politeknik Statistika STIS yang berdomisili di Provinsi Jawa Timur (selain Tingkat III) beserta anggota rumah tangganya yang pernah melakukan perjalanan wisata nusantara dalam satu tahun terakhir.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Unit Observasi -->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit Observasi</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Unit observasi dari penelitian ini adalah pegawai BPS Kota Surabaya, pegawai BPS Provinsi Jawa Timur, dan mahasiswa Politeknik Statistika STIS yang berdomisili di Provinsi Jawa Timur (selain Tingkat III) beserta anggota rumah tangganya yang menggunakan provider Telkomsel atau Indosat 2 tahun terakhir serta bersedia datanya digunakan untuk penelitian.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Unit Sampling-->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit Sampling</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Unit sampling dari penelitian ini adalah pegawai BPS Kota Surabaya, pegawai BPS Provinsi Jawa Timur, dan mahasiswa Politeknik Statistika STIS yang berdomisili di Provinsi Jawa Timur (selain Tingkat III) beserta anggota rumah tangganya yang menggunakan provider Telkomsel atau Indosat 2 tahun terakhir serta bersedia datanya digunakan untuk penelitian.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Unit Analisis-->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit Analisis</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Unit analisis dari penelitian ini adalah pegawai BPS Kota Surabaya, pegawai BPS Provinsi Jawa Timur, dan mahasiswa Politeknik Statistika STIS yang berdomisili di Provinsi Jawa Timur (selain Tingkat III) beserta anggota rumah tangganya yang pernah melakukan perjalanan wisata nusantara dalam satu tahun terakhir yang menggunakan provider Telkomsel atau Indosat 2 tahun terakhir serta bersedia datanya digunakan untuk penelitian.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Kerangka Sampel-->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Kerangka Sampel</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Kerangka sampel dari penelitian ini adalah daftar pegawai BPS Kota Surabaya, Provinsi Jawa Timur pada tahun 2022, daftar pegawai BPS Provinsi Jawa Timur pada tahun 2022, dan daftar mahasiswa Politeknik Statistika STIS yang berdomisili di Provinsi Jawa Timur (selain Tingkat III).
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Metodologi (Tujuan 3) -->
                <section class="offset-header">
                    <div class="container-fluid turun">
                        <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                            <p>
                                <b>Tujuan 3</b>
                            </p>

                            <!-- Populasi -->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Populasi</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Populasi dari penelitian ini adalah seluruh anggota rumah tangga di Kota Malang.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Populasi Target-->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Populasi Target</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Populasi target dari penelitian ini adalah seluruh anggota rumah tangga di Kota Malang yang minimal salah satu anggota rumah tangganya pernah melakukan perjalanan wisata nusantara selama Triwulan IV 2022.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Populasi Survei-->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Populasi Survei</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Populasi dari penelitian ini adalah seluruh anggota rumah tangga di Kota Malang yang minimal salah satu anggota rumah tangganya pernah melakukan perjalanan wisata nusantara selama Triwulan IV 2022.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Unit Observasi -->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit Observasi</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Unit observasi dari penelitian ini adalah anggota rumah tangga di Kota Malang yang pernah melakukan perjalanan wisata nusantara selama Triwulan IV 2022 yang keberadaannya telah divalidasi.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Unit Sampling-->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit Sampling</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Unit sampling dari penelitian ini adalah rumah tangga di Kota Malang yang minimal salah satu anggota rumah tangganya pernah melakukan perjalanan wisata nusantara selama Triwulan IV 2022.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Unit Analisis-->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit Analisis</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Unit analisis dari penelitian ini adalah anggota rumah tangga di Kota Malang yang pernah melakukan perjalanan wisata nusantara selama Triwulan IV 2022.
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <!-- Kerangka Sampel-->
                            <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 w-100 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                                <div class="card-body text-center">
                                    <i class="fas fa-clipboard-list ikon"></i>
                                    <h5 class="card-title text-center" style="line-height: 20px;"><strong>Kerangka Sampel</strong></h5>
                                    <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Kerangka sampel dari penelitian ini adalah daftar blok sensus dari Sensus Penduduk 2020 di Kota Malang, Provinsi Jawa Timur.
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Desain Sampling Tujuan 1 dan Tujuan 2 -->
                <section class="offset-header">
                    <div class="container-fluid turun">
                        <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                            <p>
                                <b>Desain Sampling Tujuan 1 dan Tujuan 2</b>
                            </p>
                            <p class="text-justify">
                                Metode penarikan sampel yang digunakan adalah
                                <i>Judgment (Purposive) Sampling</i>.
                                <i>Judgment (Purposive) Sampling</i>
                                adalah metodologi pengambilan sampel secara acak dimana kelompok sampel yang ditargetkan memiliki atribut-atribut tertentu. Metode ini dapat digunakan pada banyak populasi, tetapi lebih efektif dengan ukuran sampel yang lebih kecil dan populasi yang lebih homogen. Cara yang dilakukan pada
                                <i><b>Judgment (Purposive) Sampling</b></i>
                                penelitian ini adalah pengambilan sampel yang homogen. Dengan sampling homogen, sekelompok orang dengan usia, jenis kelamin, latar belakang, atau pekerjaan yang sama akan dipilih. Pada penelitian ini, dipilih sampel dengan pekerjaan yang sama, yaitu orang yang bekerja di BPS Kota Surabaya dan BPS Provinsi Jawa Timur, dan sampel dengan latar belakang yang sama, yaitu orang yang sedang berkuliah di Politeknik Statistika STIS.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Desain Sampling Tujuan 3 -->
                <section class="offset-header">
                    <div class="container-fluid turun">
                        <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                            <p>
                                <b>Desain Sampling Tujuan 3</b>
                            </p>
                            <p class="text-justify">
                                Metode penarikan sampel yang digunakan adalah Multistage Random Sampling karena populasi heterogen dan berukuran sangat besar. Berikut tahapan penarikan sampel dengan Multistage Random Sampling:

                            <ul>
                                <li class="text-justify">
                                    Tahap Pertama: Melakukan pemilihan n blok sensus (BS) dari semua kecamatan secara Probability Proportional to Size (PPS WR-Systematic) dengan size jumlah keluarga di tiap blok sensus di Kota Malang hasil pemutakhiran Sensus Penduduk 2020.

                                </li>

                                <li class="text-justify">
                                    Tahap Kedua: Melakukan pemilihan n rumah tangga dari blok sensus (BS) terpilih secara Systematic Sampling dengan variabel dasar pengurutan jumlah anggota rumah tangga yang minimal salah satu anggota rumah tangganya pernah melakukan perjalanan wisata selama Triwulan IV 2022.
                                </li>
                            </ul>

                            </p>
                        </div>
                    </div>
                </section>



                <!-- <section class="offset-header">
            <div class="container-fluid turun">               
>>>>>>> 14599de19ca9b94bfb8c3ec44d6dd3ea10ddfe1a
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    </div>
                </div>
            </div>
        </section> -->
                <!-- Hasil Penelitian -->
                <section class="offset-header mt-5">
                    <div class="container-fluid turun">
                        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                            <div class="col-12 col-sm-12">
                                <h1 class="headline text-center">Hasil Penelitian</h1>
                            </div>
                        </div>
                        <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, perferendis. Quia harum qui
                                ipsum
                                nihil odio, perspiciatis architecto asperiores quam. Architecto, enim dolor cupiditate harum
                                ipsam
                                quibusdam consequuntur temporibus totam, dolorem consectetur quod maiores, obcaecati saepe
                                velit.
                                Laboriosam ad impedit corrupti error perspiciatis nemo tempore quae possimus, obcaecati numquam
                                ullam recusandae dolore maiores doloribus quasi animi asperiores! Quasi culpa exercitationem
                                officiis sit magni voluptatem, reiciendis unde! Similique minima, dignissimos repellat veniam
                                laboriosam odit maiores illum alias doloribus, beatae, labore unde porro? Incidunt, assumenda
                                explicabo. Eaque nisi, impedit repellendus fugiat laborum in soluta? Dolores dolorum ex
                                recusandae
                                atque quidem aliquid placeat?
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Infografis -->
                <section class="offset-header mt-5">
                    <div class="container-fluid turun">
                        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                            <div class="col-12 col-sm-12">
                                <h1 class="headline text-center">Infografis</h1>
                            </div>
                        </div>
                        <div class="konten third5 par m-auto p-4 p-md-5 shadow box d-flex flex-column flex-lg-row justify-content-lg-center panel" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                            <!-- <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, perferendis. Quia harum qui ipsum
                    nihil odio, perspiciatis architecto asperiores quam. Architecto, enim dolor cupiditate harum ipsam
                    quibusdam consequuntur temporibus totam, dolorem consectetur quod maiores, obcaecati saepe velit.
                    Laboriosam ad impedit corrupti error perspiciatis nemo tempore quae possimus, obcaecati numquam
                    ullam recusandae dolore maiores doloribus quasi animi asperiores! Quasi culpa exercitationem
                    officiis sit magni voluptatem, reiciendis unde! Similique minima, dignissimos repellat veniam
                    laboriosam odit maiores illum alias doloribus, beatae, labore unde porro? Incidunt, assumenda
                    explicabo. Eaque nisi, impedit repellendus fugiat laborum in soluta? Dolores dolorum ex recusandae
                    atque quidem aliquid placeat?
                </p> -->
                            <div class="info-item m-1" style="background-color: #ffbc33; height: 500px"></div>
                            <div class="info-item m-1" style="background-color: #ffbc33; height: 500px"></div>
                        </div>
                    </div>
                </section>
                <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

        </section>

    </section><!-- End -->

    <?= $this->endSection(); ?>