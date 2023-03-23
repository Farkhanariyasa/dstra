<?= $this->extend('pvd/layout/landing_page/template'); ?>

<?= $this->section('content'); ?>

<section>
    <section id="hero" class="hero d-flex align-items-center">
        <!-- Judul Landing Page -->
        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up" class="titleRiset4Top">Riset 2</h1>
                    <h5 data-aos="fade-up" data-aos-delay="400" class="descRiset4">
                        Pilot Survei Wisatawan Nusantara
                    </h5>
                    <p data-aos="fade-up" data-aos-delay="400" class="text-justify">
                        Wisatawan nusantara (wisnus) memiliki peran yang penting dalam pengembangan wisata nasional. Ketersediaan data wisnus seperti jumlah perjalanan wisnus, banyaknya wisnus serta karakteristiknya dapat membantu pemerintah dalam pengambilan kebijakan yang lebih terarah. Saat ini, pemenuhan data wisnus di Indonesia memanfaatkan data mobilisasi penduduk yang direkam jejaknya dari telepon genggam atau dikenal dengan istilah <i>mobile positioning data</i> (MPD). Namun, metode ini hanya dapat menyajikan data wisnus ke luar kabupaten/kota saja. Sementara itu, data wisnus di dalam kabupaten/kota juga tidak kalah penting keberadaannya. Oleh karena itu, Riset 2 fokus pada estimasi data wisnus dalam kabupaten/kota serta mendapatkan gambaran karakteristik sosiodemografi dan perjalanan dari wisatawan nusantara dalam kabupaten/kota. Riset ini juga dilakukan untuk mendapatkan faktor-faktor yang memengaruhi jumlah perjalanan wisata dalam kabupaten/kota seseorang.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a id="tombol" href="<?= base_url('hasil-pkl/riset2/dasbor') ?>" class="tombol btn-for text-decoration-none">
                                <span>Hasil PKL</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?= base_url('pvd/img/landingpage/riset2/riset2.png') ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="hero">
        <!-- Latar Belakang -->
        <section class="offset-header">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Latar Belakang</h1>
                    </div>
                </div>
                <div class="konten2 third5 shadow box par m-auto p-4 p-md-5 mt-4" data-aos-duration="1000" style="line-height: 1.5;">
                    <!-- <p class="text-justify">
                    Indonesia memiliki potensi pariwisata yang sangat besar baik dari segi alam maupun dari 
                    segi budaya. Hal ini didukung oleh laporan Travel & Tourism Development Index 2021 World 
                    Economic Forum (WEF) edisi Mei 2022 yang menyatakan bahwa industri pariwisata tanah air 
                    menempati peringkat ke-32 dari total 117 negara di dunia dan peringkat ke-8 di Asia Pasifik. 
                    <a id="latarBelakangAtas" onclick="ubahKelas1(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        [<strong><i>Tampilkan Semua</i></strong>]
                    </a>
                </p>
                <div class="collapse" id="collapseExample"> -->
                    <p class="text-justify">
                        Kota Malang merupakan salah satu kota di Jawa Timur yang mengalami penurunan jumlah perjalanan wisata secara drastis akibat pandemi Covid-19. Untuk mengatasi hal tersebut, pemerintah melakukan pemulihan yang salah satunya adalah membangun confidence atau rasa aman dan dilanjutkan dengan pemulihan pariwisata domestic yang sejalan dengan salah satu target kinerja Kemenparekraf/Baparekraf tahun 2020-2024 dalam sasaran strategis “Meningkatnya Kualitas dan Jumlah Wisatawan”, sehingga ketersediaan data wisnus sangat dibutuhkan. Pada tahun 2020, Badan Pusat Statistik melakukan Survei Wisatawan Nusantara dengan metode baru yakni Mobile Positioning Data (MPD). Metode ini masih memiliki kelemahan yaitu tidak mampu mendapatkan karakteristik rinci dari wisnus. Oleh karena itu, dilakukan survei yang dapat menghasilkan karakteristik dari wisatawan nusantara khususnya perjalanan dalam kota yang lebih rinci.
                    </p>
                </div>
            </div>
        </section>
    
        <!-- Identifikasi dan Batasan Penelitian -->
        <section class="offset-header mt-4">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Identifikasi dan Batasan Penelitian</h1>
                    </div>
                </div>
                <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 1.5; color:#4b395f;" data-aos="zoom-in" data-aos-duration="1000">
                    <p class="text-justify">
                        Berdasarkan data dari BPS terjadi penurunan jumlah wisatawan nusantara yang drastis pada tahun 2020 sebesar 28,19% dan pemulihannya pada tahun 2021 belum mampu mengembalikan performa wisata sebelum pandemi terjadi. Oleh karena itu, perlu diketahui faktor-faktor utama yang menjadi penentu jumlah perjalanan wisata yang dilakukan oleh individu guna mempercepat tindakan pemulihan sektor pariwisata ini. Penelitian di Riset II berfokus untuk mendapatkan gambaran karakteristik dan estimasi mengenai jumlah perjalanan wisata wisatawan nusantara dalam kabupaten/kota pada triwulan terakhir tahun 2022. Unit analisis yang digunakan pada penelitian ini adalah individu yang melakukan perjalanan wisata dalam kabupaten/kota.
                    </p>
                </div>
            </div>
        </section>

        <!-- Tujuan Penelitian -->
        <section class="offset-header mt-4">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Tujuan Penelitian</h1>
                    </div>
                </div>
                <div class="konten2 third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 1.5;" data-aos="zoom-in" data-aos-duration="1000">
                    <ol class="text-justify">
                        <li>Mendapatkan estimasi banyaknya wisatawan dan jumlah perjalanan wisata dalam kota di Kota Malang.</li>
                        <li>Mendapatkan estimasi rata-rata lama perjalanan dan rata-rata lama kunjungan wisata dalam kota yang dilakukan wisatawan Kota Malang.</li>
                        <li>Mendapatkan gambaran karakteristik wisatawan nusantara dalam Kota Malang.</li>
                        <li>Mengetahui faktor-faktor yang memengaruhi jumlah perjalanan wisata wisatawan nusantara dalam kabupaten/kota.</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Manfaat Penelitian -->
        <section class="offset-header mt-4">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Manfaat Penelitian</h1>
                    </div>
                </div>
                <div class="konten2 third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 1.5;" data-aos="zoom-in" data-aos-duration="1000">
                    <ol class="text-justify">
                        <li>Bagi mahasiswa Politeknik Statistika STIS, sebagai salah satu sarana untuk mengimplementasikan ilmu dari mata kuliah yang sudah dipelajari di Politeknik Statistika STIS melalui Praktik Kerja Lapangan (PKL);</li>
                        <li>Bagi Badan Pusat Statistik (BPS), dapat menambah kajian dan pertimbangan mengenai Survei Wisatawan Nusantara dan penyediaan data statistik wisatawan nusantara dalam kabupaten/kota; dan</li>
                        <li>Bagi peneliti, penelitian ini dapat digunakan sebagai referensi untuk penelitian selanjutnya. </li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Metodologi -->
        <section class="offset-header mt-4">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Metodologi</h1>
                    </div>
                </div>
                <!-- Ruang lingkup penelitian -->
                <div class="konten2 third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 1.5;" data-aos="zoom-in" data-aos-duration="1000">
                    <p>
                        <b>RUANG LINGKUP PENELITIAN</b>
                    </p>
                    <p class="text-justify">
                        Praktik Kerja Lapangan (PKL) Polstat STIS Riset II Tahun Akademik 2022/2023 dilaksanakan di Kota Malang, Jawa Timur dan mengangkat topik “Pilot Survei Wisatawan Nusantara” yang terdiri dari kegiatan pra-pencacahan, pencacahan, dan pasca pencacahan. Kegiatan pra-pencacahan yang dilaksanakan pada tanggal 28 Oktober 2022 sampai 22 Januari 2023 dilakukan untuk menyusun topik penelitian dan desain survei. Kemudian dilaksanakan survei pendahuluan di Kota Malang, Provinsi Jawa Timur pada tanggal 4 hingga 8 Januari 2023. Kegiatan selanjutnya adalah pencacahan lapangan yang dilakukan pada tanggal 23 Januari 2023 sampai 3 Februari 2023. Setelah pencacahan lapangan, kegiatan selanjutnya, yaitu pengolahan dan analisis data, penyusunan laporan, serta publikasi.
                    </p>
                </div>

                <!-- SUMBER DATA DAN CARA PENGUMPULAN DATA -->
                <div class="konten2 third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 1.5;" data-aos="zoom-in" data-aos-duration="1000">
                    <p>
                        <b>SUMBER DATA DAN CARA PENGUMPULAN DATA</b>
                    </p>
                    <div class="d-none d-md-block">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- SUMBER DATA -->
                                <div class="carousel-item active">
                                    <div class="konten2 row w-75 mx-auto">
                                        <div class="card kecil mx-2 p-3 rounded-5 shadow box">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    <strong>Sumber Data</strong>
                                                </h5>
                                                <p class="card-text text-center">
                                                <div class="text-center">
                                                    <p>
                                                        Primer
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- MODA PENGUMPULAN DATA -->
                                <div class="carousel-item ">
                                    <div class="konten2 row w-75 mx-auto">
                                        <div class="card kecil mx-2 p-3 rounded-5 shadow box">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    <strong>Moda Pengumpulan Data</strong>
                                                </h5>
                                                <p class="card-text text-center">
                                                <div class="text-center">
                                                    <p>
                                                        <i>Computer-Assisted Personal Interviewing</i> (CAPI), <i>Paper and Pencil Interviewing</i> (PAPI), <i>Telephone Interviewing</i> (CATI)
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
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
                    </div>

                    <div class="d-md-none d-block">
                        <div id="versi_kecil" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- SKEMA SAMPLING -->
                                <div class="carousel-item active">
                                    <div class="konten2 row w-75 mx-auto">
                                        <div class="card p-2 rounded-5 shadow box">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                <strong>Sumber Data</strong>
                                                </h5>
                                                <p class="card-text text-center">
                                                <div class="text-center">
                                                    <p>
                                                        Primer
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- MODA PENGUMPULAN DATA -->
                                <div class="carousel-item ">
                                    <div class="konten2 row w-75 mx-auto">
                                        <div class="card kecil mx-2 p-3 rounded-5 shadow box">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    <strong>Moda Pengumpulan Data</strong>
                                                </h5>
                                                <p class="card-text text-center">
                                                <div class="text-center">
                                                    <p>
                                                        <i>Computer-Assisted Personal Interviewing</i> (CAPI), <i>Paper and Pencil Interviewing</i> (PAPI), <i>Telephone Interviewing</i> (CATI)
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#versi_kecil" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#versi_kecil" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Cakupan penelitian -->
                <div class="konten2 third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 1.5;" data-aos="zoom-in" data-aos-duration="1000">
                    <p>
                        <b>CAKUPAN PENELITIAN</b>
                    </p>

                    <div>
                        <!-- Populasi -->
                        <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                            <div class="card-body text-center">
                                <i class="fas fa-users col-1 ikon"></i>
                                <h5 class="card-title text-center" style="line-height: 20px;"><strong>Populasi</strong></h5>
                                <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Seluruh rumah tangga di Kota Malang yang minimal salah satu anggota rumah tangganya pernah melakukan perjalanan  wisata dalam kota dan telah kembali pada Triwulan IV tahun 2022.
                                    </div>
                                </p>
                            </div>
                        </div>

                        <!-- Populasi Target-->
                        <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                            <div class="card-body text-center">
                                <i class="fas fa-user-friends col-1 ikon"></i>
                                <h5 class="card-title text-center" style="line-height: 20px;"><strong>Populasi Target</strong></h5>
                                <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                    Seluruh rumah tangga di Kota Malang yang minimal salah satu anggota rumah tangganya pernah melakukan perjalanan wisata dalam kota dan telah kembali pada Triwulan IV tahun 2022.
                                    </div>
                                </p>
                            </div>
                        </div>

                        <!-- Unit Observasi-->
                        <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                            <div class="card-body text-center">
                                <i class="fas fa-user-alt col-1 ikon"></i>
                                <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit Observasi</strong></h5>
                                <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Kepala atau anggota dari rumah tangga di Kota Malang yang minimal salah satu anggota rumah tangganya pernah melakukan perjalanan wisata dalam kota dan telah kembali pada Triwulan IV tahun 2022.
                                    </div>
                                </p>
                            </div>
                        </div>

                        <div class="col">
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

                            <div class="row justify-content-center">
                                <!-- Primary Sampling Unit -->
                                <div class="col-5 align-items-center d-flex align-self-center">
                                    <div class="card-body text-center batasan2 shadow">
                                        <i class="fas fa-home col-1 ikon"></i>
                                        <div class="col">
                                            <p class="card-title text-center">
                                            <div style="line-height: 20px; color: #4b395f;"><strong>Primary Sampling Unit</strong></div>
                                            <div class="angka">347</div>
                                            <div style="line-height: 20px;">Blok Sensus</div>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Secondary Sampling Unit -->
                                <div class="col-5 align-items-center d-flex align-self-center">
                                    <div class="card-body text-center batasan2 shadow">
                                        <i class="fas fa-city col-1 ikon"></i>
                                        <div class="col">
                                            <p class="card-title text-center">
                                            <div style="line-height: 20px; color: #4b395f;"><strong>Secondary Sampling Unit</strong></div>
                                            <div class="angka">10</div>
                                            <div style="line-height: 20px;">Rumah Tangga</div>
                                            </p>
                                        </div>
                                    </div>
                                </div>

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
                            </div>
                        </div>

                        <!-- Unit Analisis-->
                        <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                            <div class="card-body text-center">
                                <i class="fas fa-user-alt col-1 ikon"></i>
                                <h5 class="card-title text-center" style="line-height: 20px;"><strong>Unit Analisis</strong></h5>
                                <p class="card-text text-justify">
                                    <div class="text-justify" style="line-height: 25px;">
                                        Anggota rumah tangga di Kota Malang yang pernah melakukan perjalanan wisata dalam kota dan telah kembali pada Triwulan IV tahun 2022. 
                                    </div>
                                </p>
                            </div>
                        </div>

                        <!-- Kerangka Sampel -->
                        <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                            <div class="card-body text-center">
                                <i class="fas fa-clipboard-list ikon"></i>
                                <h5 class="card-title text-center" style="line-height: 20px;"><strong>Kerangka Sampel</strong></h5>
                                <p class="card-text text-justify">
                                
                                <div class="d-none d-md-block">
                                    <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <!-- Kerangka Sampel 1 -->
                                            <div class="carousel-item active">
                                                <div class="konten2 row w-75 mx-auto text-justify">
                                                    
                                                    Kerangka sampel blok sensus, yaitu daftar blok sensus di Kota Malang hasil pemutakhiran SP 2020 yang disertai dengan informasi jumlah keluarga di tiap blok sensus.

                                                </div>
                                            </div>

                                            <!-- Kerangka Sampel 2 -->
                                            <div class="carousel-item ">
                                                <div class="konten2 row w-75 mx-auto text-justify">
                                                   
                                                    Kerangka sampel rumah tangga, yaitu daftar rumah tangga biasa yang minimal satu anggota keluarganya pernah melakukan perjalanan wisata dalam kota dan telah kembali pada Triwulan IV tahun 2022, tidak termasuk institutional household dalam blok sensus sampel terpilih.

                                                </div>

                                            </div>
                                        </div>

                                        <button class="carousel-control-prev"   type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>

                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                                            <span   class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="d-md-none d-block">
                                    <div id="versi_kecil" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <!-- Kerangka Sampel 1 -->
                                            <div class="carousel-item active">
                                                <div class="konten2 row w-75 mx-auto text-justify">
                                                    
                                                    Kerangka sampel blok sensus, yaitu daftar blok sensus di Kota Malang hasil pemutakhiran SP 2020 yang disertai dengan informasi jumlah keluarga di tiap blok sensus.

                                                </div>

                                            </div>

                                            <!-- Kerangka Sampel 2 -->
                                            <div class="carousel-item ">
                                                <div class="konten2 row w-75 mx-auto text-justify">
                                                    
                                                    Kerangka sampel rumah tangga, yaitu daftar rumah tangga biasa yang minimal satu anggota keluarganya pernah melakukan perjalanan wisata dalam kota dan telah kembali pada Triwulan IV tahun 2022, tidak termasuk institutional household dalam blok sensus sampel terpilih.

                                                </div>

                                            </div>
                                        </div>

                                        <button class="carousel-control-prev" type="button" data-bs-target="#versi_kecil" data-bs-slide="prev">
                                            <span   class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>

                                        <button class="carousel-control-next" type="button" data-bs-target="#versi_kecil" data-bs-slide="next">
                                            <span   class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                </p>
                            </div>
                        </div>

                        <!-- Metode Penarikan Sampel -->
                        <div class="card konten2 third5 par mx-auto mb-3 p-1 p-md-1 shadow box rounded-5 mt-3 align-items-center d-flex flex-column">
                            <div class="card-body text-center">
                                <i class="fas fa-cubes ikon"></i>
                                <h5 class="card-title text-center" style="line-height: 20px;"><strong>Metode Penarikan Sampel</strong></h5>
                                <p class="card-text text-center">
                                <div class="text-justify" style="line-height: 25px;">
                                    Teknik penarikan sampel menggunakan two stage sampling  dengan stage pertama adalah PPS sampling dengan size jumlah keluarga di setiap blok sensus. Pada stage kedua menggunakan teknik systematic sampling dengan implicit stratification adalah jumlah anggota keluarga.
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- <ul class="text-justify">
                        <li>
                            <strong>Populasi</strong> <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus soluta odio tempora eligendi totam, numquam mollitia ipsa veritatis aliquid minus!
                        </li>
                        <br>
                        <li>
                            <strong>Populasi Target</strong> <br>
                            Seluruh rumah tangga di Kota Malang yang minimal salah satu anggota rumah tangganya pernah melakukan perjalanan  wisata dalam kota pada Triwulan IV tahun 2022.
                        </li> 
                        <br>
                        <li>
                            <strong>Unit Observasi</strong> <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus soluta odio tempora eligendi totam, numquam mollitia ipsa veritatis aliquid minus!
                        </li>
                        <br>
                        <li>
                            <strong>Unit Sampling</strong> <br>
                            Primary Sampling Unit	: Blok Sensus <br>
                            Secondary Sampling Unit	: Rumah Tangga di Blok Sensus terpilih
                        </li>
                        <br>
                        <li>
                            <strong>Unit Analisis</strong> <br>
                            Anggota rumah tangga di Kota Malang yang pernah melakukan perjalanan wisata dalam kota (untuk Riset II) atau luar kota (untuk Riset I) pada Triwulan IV tahun 2022.
                        </li>
                        <br>
                        <li>
                            <strong>Kerangka Sampel</strong> <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus soluta odio tempora eligendi totam, numquam mollitia ipsa veritatis aliquid minus!
                        </li>
                        <br>
                        <li>
                            <strong>Variabel Pembantu</strong> <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus soluta odio tempora eligendi totam, numquam mollitia ipsa veritatis aliquid minus!
                        </li>
                    </ul> -->
                </div>

                <!-- DESAIN SAMPLING -->
                <div class="konten2 third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 1.5;" data-aos="zoom-in" data-aos-duration="1000">
                    <p>
                        <b>DESAIN SAMPLING</b>
                    </p>

                    <p class="text-justify">
                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <div class="text-center text-lg-start">
                                <a class="bagan text-decoration-none">
                                    <img style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#baganSkema" src="<?= base_url('pvd/img/landingpage/riset2/bagan.png') ?>" class="img-fluid rounded-3 w-75 mx-auto d-block" alt="">
                                </a>
                            </div>
                        </div>    
                    </p>

                    

                    <section class="text-justify">
                        <p>Two Stage Sampling</p>
                        <ul class="text-justify">
                            <li>
                                Tahap pertama, mengambil sejumlah blok sensus di Kota Malang dengan Probability Proportional to Size With Replacement dengan size <b>jumlah keluarga</b> di tiap blok sensus hasil pemutakhiran Sensus Penduduk 2020.
                            </li>
                            <li>
                                Tahap kedua, mengambil rumah tangga di blok sensus terpilih menggunakan Systematic Sampling dengan <b>jumlah anggota rumah tangga</b> sebagai variabel dasar pengurutan.
                            </li>
                        </ul>
                    </section>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="baganSkema" tabindex="-1" aria-labelledby="baganModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="baganModalLabel">Skema Sampling</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" >
                                <img src="<?= base_url('pvd/img/landingpage/riset2/bagan.png') ?>"  class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TEKNIK ESTIMASI PARAMETER -->
                <div class="konten2 third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 1.5;" data-aos="zoom-in" data-aos-duration="1000">
                    <p>
                        <b>TEKNIK ESTIMASI PARAMETER</b>
                    </p>
                    <div class="d-none d-md-block">
                        <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- SKEMA SAMPLING -->
                                <div class="carousel-item active">
                                    <div class="konten2 row w-75 mx-auto">
                                        <div class="card kecil mx-2 p-3 rounded-5 shadow box">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    <strong>Skema Sampling</strong>
                                                </h5>
                                                <p class="card-text text-center">
                                                <div class="text-justify">
                                                    <p>
                                                        Menggunakan metode Multiple Indicator Cluster Survey (MICS) versi 6
                                                    <div class="rumus text-center" style="overflow-x:auto;">
                                                        <p>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</p>
                                                    </div>
                                                    <!-- Keterangan:  -->
                                                    <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                                        <strong>Keterangan :</strong>
                                                    </a>
                                                    </p>
                                                    <div class="collapse" id="collapseKeterangan">
                                                        <p class="text-justify">
                                                            n : sampel minimum <br>
                                                            r : proporsi kejadian terhadap populasi target <br>
                                                            deff : design effect <br>
                                                            RME : relative margin <br>
                                                            pb : proporsi populasi target terhadap populasi penelitian <br>
                                                            AveSize : rata-rata jumlah ART <br>
                                                            RR : response rate <br> <br>
                                                            
                                                        </p>
                                                    </div>
                                                    <p>
                                                        Berdasarkan penghitungan dari rumus di atas, didapatkan sampel blok sensus sejumah 347 blok sensus dengan 3470 rumah tangga.
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- RUMUS OVERALL SAMPLING FRACTION -->
                                <div class="carousel-item ">
                                    <div class="konten2 row w-75 mx-auto">
                                        <div class="card kecil mx-2 p-3 rounded-5 shadow box">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    <strong>Rumus Overall Sampling Fraction</strong>
                                                </h5>
                                                <p class="card-text text-center">
                                                <div class="text-justify">
                                                    <p>
                                                        Menggunakan metode Multiple Indicator Cluster Survey (MICS) versi 6
                                                    <div class="rumus text-center" style="overflow-x:auto;">
                                                        <p>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</p>
                                                    </div>
                                                    <!-- Keterangan:  -->
                                                    <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                                        <strong>Keterangan :</strong>
                                                    </a>
                                                    </p>
                                                    <div class="collapse" id="collapseKeterangan">
                                                        <p class="text-justify">
                                                            n : sampel minimum <br>
                                                            r : proporsi kejadian terhadap populasi target <br>
                                                            deff : design effect <br>
                                                            RME : relative margin <br>
                                                            pb : proporsi populasi target terhadap populasi penelitian <br>
                                                            AveSize : rata-rata jumlah ART <br>
                                                            RR : response rate <br> <br>
                                                            
                                                        </p>
                                                    </div>
                                                    <p>
                                                        Berdasarkan penghitungan dari rumus di atas, didapatkan sampel blok sensus sejumah 347 blok sensus dengan 3470 rumah tangga.
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- RUMUS DESIGN WEIGHT -->
                                <div class="carousel-item ">
                                    <div class="konten2 row w-75 mx-auto">
                                        <div class="card kecil mx-2 p-3 rounded-5 shadow box">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    <strong>Rumus Design Weight</strong>
                                                </h5>
                                                <p class="card-text text-center">
                                                <div class="text-justify">
                                                    <p>
                                                        Menggunakan metode Multiple Indicator Cluster Survey (MICS) versi 6
                                                    <div class="rumus text-center" style="overflow-x:auto;">
                                                        <p>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</p>
                                                    </div>
                                                    <!-- Keterangan:  -->
                                                    <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                                        <strong>Keterangan :</strong>
                                                    </a>
                                                    </p>
                                                    <div class="collapse" id="collapseKeterangan">
                                                        <p class="text-justify">
                                                            n : sampel minimum <br>
                                                            r : proporsi kejadian terhadap populasi target <br>
                                                            deff : design effect <br>
                                                            RME : relative margin <br>
                                                            pb : proporsi populasi target terhadap populasi penelitian <br>
                                                            AveSize : rata-rata jumlah ART <br>
                                                            RR : response rate <br> <br>
                                                            
                                                        </p>
                                                    </div>
                                                    <p>
                                                        Berdasarkan penghitungan dari rumus di atas, didapatkan sampel blok sensus sejumah 347 blok sensus dengan 3470 rumah tangga.
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- RUMUS PENDUGA TOTAL KARAKTERISTIK -->
                                <div class="carousel-item ">
                                    <div class="konten2 row w-75 mx-auto">
                                        <div class="card kecil mx-2 p-3 rounded-5 shadow box">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    <strong>Rumus Penduga Total Karakteristik</strong>
                                                </h5>
                                                <p class="card-text text-center">
                                                <div class="text-justify">
                                                    <p>
                                                        Menggunakan metode Multiple Indicator Cluster Survey (MICS) versi 6
                                                    <div class="rumus text-center" style="overflow-x:auto;">
                                                        <p>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</p>
                                                    </div>
                                                    <!-- Keterangan:  -->
                                                    <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                                        <strong>Keterangan :</strong>
                                                    </a>
                                                    </p>
                                                    <div class="collapse" id="collapseKeterangan">
                                                        <p class="text-justify">
                                                            n : sampel minimum <br>
                                                            r : proporsi kejadian terhadap populasi target <br>
                                                            deff : design effect <br>
                                                            RME : relative margin <br>
                                                            pb : proporsi populasi target terhadap populasi penelitian <br>
                                                            AveSize : rata-rata jumlah ART <br>
                                                            RR : response rate <br> <br>
                                                            
                                                        </p>
                                                    </div>
                                                    <p>
                                                        Berdasarkan penghitungan dari rumus di atas, didapatkan sampel blok sensus sejumah 347 blok sensus dengan 3470 rumah tangga.
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- RUMUS PENDUGA RATA-RATA KARAKTERISTIK -->
                                <div class="carousel-item ">
                                    <div class="konten2 row w-75 mx-auto">
                                        <div class="card kecil mx-2 p-3 rounded-5 shadow box">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    <strong>Rumus Penduga Rata-Rata Karakteristik</strong>
                                                </h5>
                                                <p class="card-text text-center">
                                                <div class="text-justify">
                                                    <p>
                                                        Menggunakan metode Multiple Indicator Cluster Survey (MICS) versi 6
                                                    <div class="rumus text-center" style="overflow-x:auto;">
                                                        <p>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</p>
                                                    </div>
                                                    <!-- Keterangan:  -->
                                                    <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                                        <strong>Keterangan :</strong>
                                                    </a>
                                                    </p>
                                                    <div class="collapse" id="collapseKeterangan">
                                                        <p class="text-justify">
                                                            n : sampel minimum <br>
                                                            r : proporsi kejadian terhadap populasi target <br>
                                                            deff : design effect <br>
                                                            RME : relative margin <br>
                                                            pb : proporsi populasi target terhadap populasi penelitian <br>
                                                            AveSize : rata-rata jumlah ART <br>
                                                            RR : response rate <br> <br>
                                                            
                                                        </p>
                                                    </div>
                                                    <p>
                                                        Berdasarkan penghitungan dari rumus di atas, didapatkan sampel blok sensus sejumah 347 blok sensus dengan 3470 rumah tangga.
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- RUMUS JUMLAH SAMPEL MINIMUM -->
                                <div class="carousel-item ">
                                    <div class="konten2 row w-75 mx-auto">
                                        <div class="card kecil mx-2 p-3 rounded-5 shadow box">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    <strong>Rumus Jumlah Sampel Minimum</strong>
                                                </h5>
                                                <p class="card-text text-center">
                                                <div class="text-justify">
                                                    <p>
                                                        Menggunakan metode Multiple Indicator Cluster Survey (MICS) versi 6
                                                    <div class="rumus text-center" style="overflow-x:auto;">
                                                        <p>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</p>
                                                    </div>
                                                    <!-- Keterangan:  -->
                                                    <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                                        <strong>Keterangan :</strong>
                                                    </a>
                                                    </p>
                                                    <div class="collapse" id="collapseKeterangan">
                                                        <p class="text-justify">
                                                            n : sampel minimum <br>
                                                            r : proporsi kejadian terhadap populasi target <br>
                                                            deff : design effect <br>
                                                            RME : relative margin <br>
                                                            pb : proporsi populasi target terhadap populasi penelitian <br>
                                                            AveSize : rata-rata jumlah ART <br>
                                                            RR : response rate <br> <br>
                                                            
                                                        </p>
                                                    </div>
                                                    <p>
                                                        Berdasarkan penghitungan dari rumus di atas, didapatkan sampel blok sensus sejumah 347 blok sensus dengan 3470 rumah tangga.
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="d-md-none d-block">
                        <div id="versi_kecil" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- SKEMA SAMPLING -->
                                <div class="carousel-item active">
                                    <div class="konten2 row w-75 mx-auto">
                                        <div class="card p-2 rounded-5 shadow box">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    <strong>Skema Sampling</strong>
                                                </h5>
                                                <p class="card-text text-center">
                                                <div class="text-justify">
                                                    <p>
                                                        Menggunakan metode Multiple Indicator Cluster Survey (MICS) versi 6
                                                    <div class="rumus text-center" style="overflow-x:auto;">
                                                        <p>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</p>
                                                    </div>
                                                    <!-- Keterangan:  -->
                                                    <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                                        <strong>Keterangan :</strong>
                                                    </a>
                                                    </p>
                                                    <div class="collapse" id="collapseKeterangan">
                                                        <p class="text-justify">
                                                            n : sampel minimum <br>
                                                            r : proporsi kejadian terhadap populasi target <br>
                                                            deff : design effect <br>
                                                            RME : relative margin <br>
                                                            pb : proporsi populasi target terhadap populasi penelitian <br>
                                                            AveSize : rata-rata jumlah ART <br>
                                                            RR : response rate <br> <br>
                                                            
                                                        </p>
                                                    </div>
                                                    <p>
                                                        Berdasarkan penghitungan dari rumus di atas, didapatkan sampel blok sensus sejumah 347 blok sensus dengan 3470 rumah tangga.
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- RUMUS OVERALL SAMPLING FRACTION -->
                                <div class="carousel-item ">
                                    <div class="konten2 row w-75 mx-auto">
                                        <div class="card p-2 rounded-5 shadow box">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    <strong>Rumus Overall Sampling Fraction</strong>
                                                </h5>
                                                <p class="card-text text-center">
                                                <div class="text-justify">
                                                    <p>
                                                        Menggunakan metode Multiple Indicator Cluster Survey (MICS) versi 6
                                                    <div class="rumus text-center" style="overflow-x:auto;">
                                                        <p>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</p>
                                                    </div>
                                                    <!-- Keterangan:  -->
                                                    <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                                        <strong>Keterangan :</strong>
                                                    </a>
                                                    </p>
                                                    <div class="collapse" id="collapseKeterangan">
                                                        <p class="text-justify">
                                                            n : sampel minimum <br>
                                                            r : proporsi kejadian terhadap populasi target <br>
                                                            deff : design effect <br>
                                                            RME : relative margin <br>
                                                            pb : proporsi populasi target terhadap populasi penelitian <br>
                                                            AveSize : rata-rata jumlah ART <br>
                                                            RR : response rate <br> <br>
                                                            
                                                        </p>
                                                    </div>
                                                    <p>
                                                        Berdasarkan penghitungan dari rumus di atas, didapatkan sampel blok sensus sejumah 347 blok sensus dengan 3470 rumah tangga.
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- RUMUS DESIGN WEIGHT -->
                                <div class="carousel-item ">
                                    <div class="konten2 row w-75 mx-auto">
                                        <div class="card p-2 rounded-5 shadow box">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    <strong>Rumus Design Weight</strong>
                                                </h5>
                                                <p class="card-text text-center">
                                                <div class="text-justify">
                                                    <p>
                                                        Menggunakan metode Multiple Indicator Cluster Survey (MICS) versi 6
                                                    <div class="rumus text-center" style="overflow-x:auto;">
                                                        <p>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</p>
                                                    </div>
                                                    <!-- Keterangan:  -->
                                                    <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                                        <strong>Keterangan :</strong>
                                                    </a>
                                                    </p>
                                                    <div class="collapse" id="collapseKeterangan">
                                                        <p class="text-justify">
                                                            n : sampel minimum <br>
                                                            r : proporsi kejadian terhadap populasi target <br>
                                                            deff : design effect <br>
                                                            RME : relative margin <br>
                                                            pb : proporsi populasi target terhadap populasi penelitian <br>
                                                            AveSize : rata-rata jumlah ART <br>
                                                            RR : response rate <br> <br>
                                                            
                                                        </p>
                                                    </div>
                                                    <p>
                                                        Berdasarkan penghitungan dari rumus di atas, didapatkan sampel blok sensus sejumah 347 blok sensus dengan 3470 rumah tangga.
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- RUMUS PENDUGA TOTAL KARAKTERISTIK -->
                                <div class="carousel-item ">
                                    <div class="konten2 row w-75 mx-auto">
                                        <div class="card p-2 rounded-5 shadow box">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    <strong>Rumus Penduga Total Karakteristik</strong>
                                                </h5>
                                                <p class="card-text text-center">
                                                <div class="text-justify">
                                                    <p>
                                                        Menggunakan metode Multiple Indicator Cluster Survey (MICS) versi 6
                                                    <div class="rumus text-center" style="overflow-x:auto;">
                                                        <p>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</p>
                                                    </div>
                                                    <!-- Keterangan:  -->
                                                    <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                                        <strong>Keterangan :</strong>
                                                    </a>
                                                    </p>
                                                    <div class="collapse" id="collapseKeterangan">
                                                        <p class="text-justify">
                                                            n : sampel minimum <br>
                                                            r : proporsi kejadian terhadap populasi target <br>
                                                            deff : design effect <br>
                                                            RME : relative margin <br>
                                                            pb : proporsi populasi target terhadap populasi penelitian <br>
                                                            AveSize : rata-rata jumlah ART <br>
                                                            RR : response rate <br> <br>
                                                            
                                                        </p>
                                                    </div>
                                                    <p>
                                                        Berdasarkan penghitungan dari rumus di atas, didapatkan sampel blok sensus sejumah 347 blok sensus dengan 3470 rumah tangga.
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- RUMUS PENDUGA RATA-RATA KARAKTERISTIK -->
                                <div class="carousel-item ">
                                    <div class="konten2 row w-75 mx-auto">
                                        <div class="card p-2 rounded-5 shadow box">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    <strong>Rumus Penduga Rata-Rata Karakteristik</strong>
                                                </h5>
                                                <p class="card-text text-center">
                                                <div class="text-justify">
                                                    <p>
                                                        Menggunakan metode Multiple Indicator Cluster Survey (MICS) versi 6
                                                    <div class="rumus text-center" style="overflow-x:auto;">
                                                        <p>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</p>
                                                    </div>
                                                    <!-- Keterangan:  -->
                                                    <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                                        <strong>Keterangan :</strong>
                                                    </a>
                                                    </p>
                                                    <div class="collapse" id="collapseKeterangan">
                                                        <p class="text-justify">
                                                            n : sampel minimum <br>
                                                            r : proporsi kejadian terhadap populasi target <br>
                                                            deff : design effect <br>
                                                            RME : relative margin <br>
                                                            pb : proporsi populasi target terhadap populasi penelitian <br>
                                                            AveSize : rata-rata jumlah ART <br>
                                                            RR : response rate <br> <br>
                                                            
                                                        </p>
                                                    </div>
                                                    <p>
                                                        Berdasarkan penghitungan dari rumus di atas, didapatkan sampel blok sensus sejumah 347 blok sensus dengan 3470 rumah tangga.
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- RUMUS JUMLAH SAMPEL MINIMUM -->
                                <div class="carousel-item ">
                                    <div class="konten2 row w-75 mx-auto">
                                        <div class="card p-2 rounded-5 shadow box">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    <strong>Rumus Jumlah Sampel Minimum</strong>
                                                </h5>
                                                <p class="card-text text-center">
                                                <div class="text-justify">
                                                    <p>
                                                        Menggunakan metode Multiple Indicator Cluster Survey (MICS) versi 6
                                                    <div class="rumus text-center" style="overflow-x:auto;">
                                                        <p>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</p>
                                                    </div>
                                                    <!-- Keterangan:  -->
                                                    <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                                        <strong>Keterangan :</strong>
                                                    </a>
                                                    </p>
                                                    <div class="collapse" id="collapseKeterangan">
                                                        <p class="text-justify">
                                                            n : sampel minimum <br>
                                                            r : proporsi kejadian terhadap populasi target <br>
                                                            deff : design effect <br>
                                                            RME : relative margin <br>
                                                            pb : proporsi populasi target terhadap populasi penelitian <br>
                                                            AveSize : rata-rata jumlah ART <br>
                                                            RR : response rate <br> <br>
                                                            
                                                        </p>
                                                    </div>
                                                    <p>
                                                        Berdasarkan penghitungan dari rumus di atas, didapatkan sampel blok sensus sejumah 347 blok sensus dengan 3470 rumah tangga.
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#versi_kecil" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#versi_kecil" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Infografis -->
        <section class="offset-header mt-4">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Infografis</h1>
                    </div>
                </div>
                <div class="konten2 third5 par m-auto p-4 p-md-5 shadow box d-flex flex-column flex-lg-row justify-content-lg-center panel" style="line-height: 1.5;" data-aos="zoom-in" data-aos-duration="1000">
                    <!-- <p class="text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, perferendis. Quia harum qui ipsum nihil odio, perspiciatis architecto asperiores quam. Architecto, enim dolor cupiditate harum ipsam quibusdam consequuntur temporibus totam, dolorem consectetur quod maiores, obcaecati saepe velit. Laboriosam ad impedit corrupti error perspiciatis nemo tempore quae possimus, obcaecati numquam ullam recusandae dolore maiores doloribus quasi animi asperiores! Quasi culpa exercitationem officiis sit magni voluptatem, reiciendis unde! Similique minima, dignissimos repellat veniam laboriosam odit maiores illum alias doloribus, beatae, labore unde porro? Incidunt, assumenda explicabo. Eaque nisi, impedit repellendus fugiat laborum in soluta? Dolores dolorum ex recusandae atque quidem aliquid placeat?
                    </p> -->
                    <div class="info-item m-1" style="background-color: #ffbc33; height: 500px"></div>
                    <div class="info-item m-1" style="background-color: #ffbc33; height: 500px"></div>
                </div>
            </div>
        </section>

        <!-- Buku Laporan -->
        <section class="offset-header mt-4">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Buku Laporan</h1>
                    </div>
                </div>

                <div class="konten2 third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 1.5;" data-aos="zoom-in" data-aos-duration="1000" id="fourthSec">
                    <p class="text-justify">
                    <div>
                        <div class="text-center text-lg-start kontener">
                            <!-- <a href="<?= base_url("hasil-pkl/riset2") ?>" class="bukulaporan text-decoration-none"> -->
                            <img src="<?= base_url('pvd/img/landingpage/riset2/buku_laporan.png') ?>" class="img-fluid rounded-3 w-50 mx-auto d-block shadow" alt="">
                            <div class="overlay rounded-3 w-50 d-block mx-auto d-flex justify-content-center">
                                <!-- <h1 class="text-center fw-bold">Buku Laporan</h1> -->
                                <div class="d-flex justify-content-center my-auto">
                                    <a href="<?= base_url("hasil-pkl/riset2") ?>" class="bukulaporan mx-auto">
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
                            <!-- </a> -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Kuesioner Pencacahan -->
        <section class="offset-header mt-4">
            <div class="container-fluid turun">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="col-12 col-sm-12">
                        <h1 class="headline text-center">Kuesioner Pencacahan</h1>
                    </div>
                </div>

                <div class="konten2 third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 1.5;" data-aos="zoom-in" data-aos-duration="1000" id="fourthSec">
                    <p class="text-justify">
                    <div>
                        <div class="text-center text-lg-start kontener">
                            <!-- <a href="<?= base_url("hasil-pkl/riset2") ?>" class="bukulaporan text-decoration-none"> -->
                            <div class="tab-pane active p-2" id="tab1" role="tabpanel" aria-labelledby="tab-1" style="height: auto; width: 100%">
                                <div class="row">
                                <div>
                                    <embed src="https://drive.google.com/file/d/1R0pWJ2IbRJr9GJsCkdRzKq_FzCkRN3ox/preview" type="application/pdf" width=100% height="600px" />
                                </div>
                                </div>
                            </div>
                            <!-- </a> -->
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </section>

</section>

<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js">
</script>

<?= $this->endSection(); ?>