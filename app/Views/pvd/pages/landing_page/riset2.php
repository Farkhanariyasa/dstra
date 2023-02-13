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
            <div class="konten2 third5 shadow box par m-auto p-4 p-md-5 mt-4"  data-aos-duration="1000">
                <p class="text-justify">
                    Indonesia memiliki potensi pariwisata yang sangat besar baik dari segi alam maupun dari 
                    segi budaya. Hal ini didukung oleh laporan Travel & Tourism Development Index 2021 World 
                    Economic Forum (WEF) edisi Mei 2022 yang menyatakan bahwa industri pariwisata tanah air 
                    menempati peringkat ke-32 dari total 117 negara di dunia dan peringkat ke-8 di Asia Pasifik. 
                    <a id="latarBelakangAtas" onclick="ubahKelas1(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        [<strong><i>Tampilkan Semua</i></strong>]
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <p class="text-justify">
                        Sejalan dengan yang dikemukakan oleh Pendit (2006) bahwa kehadiran pariwisata dapat mempercepat 
                        pertumbuhan ekonomi, penyediaan lapangan pekerjaan, meningkatkan penghasilan, meningkatkan standar 
                        hidup, serta merangsang sektor-sektor produktif lainnya. Menurut Archer (2000), jumlah pengeluaran 
                        wisatawan dapat meningkatkan PDRB melalui sektor perdagangan, hotel, dan restoran. Potensi dari 
                        sektor pariwisata dapat juga dilihat performanya dari nilai kontribusi Tourism Direct Gross Domestic 
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
                        <a id="latarBelakangBawah" onclick="ubahKelas2(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            [<strong><i>Tampilkan Sebagian</i></strong>]
                        </a>
                    </p>
                </div>    
            </div>
        </div>
    </section>

    <!-- Identifikasi dan Batasan Penelitian -->
    <section class="offset-header mt-5">
        <div class="container-fluid turun">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-12 col-sm-12">
                    <h1 class="headline text-center">Identifikasi dan Batasan Penelitian</h1>
                </div>
            </div>
            <div class="konten2 third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                    Berdasarkan data dari BPS terjadi penurunan jumlah wisatawan nusantara yang drastis pada tahun 2020 sebesar 28,19% dan pemulihannya pada tahun 2021 belum mampu mengembalikan performa wisata sebelum pandemi terjadi. Oleh karena itu, perlu diketahui faktor-faktor utama yang menjadi penentu jumlah perjalanan wisata yang dilakukan oleh individu guna mempercepat tindakan pemulihan sektor pariwisata ini. Penelitian di Riset II berfokus untuk mendapatkan gambaran karakteristik dan estimasi mengenai jumlah perjalanan wisata wisatawan nusantara dalam kabupaten/kota pada triwulan terakhir tahun 2022. Unit analisis yang digunakan pada penelitian ini adalah individu yang melakukan perjalanan wisata dalam kabupaten/kota.
                </p>
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
            <div class="konten2 third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
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
    <section class="offset-header mt-5">
        <div class="container-fluid turun">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-12 col-sm-12">
                    <h1 class="headline text-center">Manfaat Penelitian</h1>
                </div>
            </div>
            <div class="konten2 third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <ol class="text-justify">
                    <li>Bagi mahasiswa Politeknik Statistika STIS, sebagai salah satu sarana untuk mengimplementasikan ilmu dari mata kuliah yang sudah dipelajari di Politeknik Statistika STIS melalui Praktik Kerja Lapangan (PKL);</li>
                    <li>Bagi Badan Pusat Statistik (BPS), dapat menambah kajian dan pertimbangan mengenai Survei Wisatawan Nusantara dan penyediaan data statistik wisatawan nusantara dalam kabupaten/kota; dan</li>
                    <li>Bagi peneliti, penelitian ini dapat digunakan sebagai referensi untuk penelitian selanjutnya. </li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Metodologi -->
    <section class="offset-header mt-5">
        <div class="container-fluid turun">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-12 col-sm-12">
                    <h1 class="headline text-center">Metodologi</h1>
                </div>
            </div>
            <!-- Ruang lingkup penelitian -->
            <div class="konten2 third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    <b>RUANG LINGKUP PENELITIAN</b>
                </p>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, quas autem quisquam ad fugiat aliquam. Ducimus in voluptatibus dolores saepe rem vero cumque voluptate sequi. Quos dicta quasi eius cum.
                </p>
            </div>

            <!-- SUMBER DATA DAN CARA PENGUMPULAN DATA -->
            <div class="konten2 third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    <b>SUMBER DATA DAN CARA PENGUMPULAN DATA</b>
                </p>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, maiores ipsum qui quae eum mollitia facere reprehenderit quia dolores. Necessitatibus officia iste voluptatem quo ipsum consectetur magni ab illo vero inventore perferendis praesentium nulla a exercitationem veritatis, odit, adipisci provident! Quae nam placeat, totam sapiente quisquam culpa nulla quibusdam vel!
                </p>
            </div>

            <!-- Cakupan penelitian -->
            <div class="konten2 third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    <b>CAKUPAN PENELITIAN</b>
                </p>
                <ul class="text-justify">
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
                </ul>
            </div>

            <!-- DESAIN SAMPLING -->
            <div class="konten2 third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    <b>DESAIN SAMPLING</b>
                </p>

                <!-- bagan masih berantakan-->
                <p class="text-justify">
                <div class="tree">
                    <ul>
                        <li>
                            <a href="#">Kabupaten/Kota</a>
                            <ul>
                                <li>
                                    <a href="#">N <br>Jumlah Blok Sensus <br> Di Kecamatan</a>
                                </li>
                                <li>
                                    <a href="#">N <br>Jumlah Blok Sensus <br> Di Kecamatan</a>
                                    <ul>
                                        <!-- <ul> -->
                                            <li>
                                                <a href="#">n1 <br>Sampel blok sensus terpilih</a>
                                            </li>
                                            <li>
                                                <a href="#">n2 <br>Sampel blok sensus terpilih</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">M <br>Jumlah rumah tangga pada <br> blok sensus terpilih</a>
                                                        <ul>
                                                            <!-- <ul> -->
                                                                <li>
                                                                    <a href="#">m1 <br>Sampel rumah tangga terpilih</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">m2 <br>Sampel rumah tangga terpilih</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">mi <br>Sampel rumah tangga terpilih</a>
                                                                </li>
                                                            <!-- </ul> -->
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">ni <br>Sampel blok sensus terpilih</a>
                                            </li>
                                        <!-- </ul> -->
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">N <br>Jumlah Blok Sensus <br> Di Kecamatan</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                </p>

                <p class="text-justify">
                    <p>Two Stage Sampling</p>
                    <ul class="text-justify">
                        <li>
                            Tahap pertama, mengambil sejumlah blok sensus di Kota Malang dengan Probability Proportional to Size With Replacement dengan size <b>jumlah keluarga</b> di tiap blok sensus hasil pemutakhiran Sensus Penduduk 2020.
                        </li>
                        <li>
                            Tahap kedua, mengambil rumah tangga di blok sensus terpilih menggunakan Systematic Sampling dengan <b>jumlah anggota rumah tangga</b> sebagai variabel dasar pengurutan.
                        </li> 
                    </ul>
                </p>
            </div>

            <!-- TEKNIK ESTIMASI PARAMETER -->
            <div class="konten2 third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    <b>TEKNIK ESTIMASI PARAMETER</b>
                </p>
                <ul class="text-justify">
                    <li>
                        <strong>Skema Sampling</strong> <br>
                        <div class="text-justify">
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, harum.
                                <div class="rumus text-center"><h4>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</h4></div>
                                <!-- Keterangan:  -->
                                <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                    <strong>Keterangan :</strong>
                                </a>
                            </p>
                            <div class="collapse" id="collapseKeterangan">
                                <p class="text-justify">
                                    n		: sampel minimum <br>
                                    r		: proporsi kejadian terhadap populasi target <br>
                                    deff	: design effect <br>
                                    RME	    : relative margin <br>
                                    pb		: proporsi populasi target terhadap populasi penelitian <br>
                                    AveSize	: rata-rata jumlah ART <br>
                                    RR		: response rate <br> <br>
                                    <!-- <a id="keteranganBawah" onclick="keteranganBawah(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                            [<strong><i>Sembunyikan</i></strong>]
                                    </a> -->
                                </p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, nemo ut? Deserunt necessitatibus dolorum atque eveniet quasi eaque soluta temporibus.
                            </p>
                        </div>
                    </li>
                    <br>
                    <li>
                        <strong>Rumus Overall Sampling Fraction</strong> <br>
                        <div class="text-justify">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, necessitatibus.
                                <div class="rumus text-center"><h4>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</h4></div>
                                <!-- Keterangan:  -->
                                <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                    <strong>Keterangan :</strong>
                                </a>
                            </p>
                            <div class="collapse" id="collapseKeterangan">
                                <p class="text-justify">
                                    n		: sampel minimum <br>
                                    r		: proporsi kejadian terhadap populasi target <br>
                                    deff	: design effect <br>
                                    RME	    : relative margin <br>
                                    pb		: proporsi populasi target terhadap populasi penelitian <br>
                                    AveSize	: rata-rata jumlah ART <br>
                                    RR		: response rate <br> <br>
                                    <!-- <a id="keteranganBawah" onclick="keteranganBawah(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                            [<strong><i>Sembunyikan</i></strong>]
                                    </a> -->
                                </p>
                            </div>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima quaerat aut quas ipsam! Vero accusantium cum alias numquam unde voluptatum?
                            </p>
                        </div>
                    </li> 
                    <br>
                    <li>
                        <strong>Rumus Design Weight</strong> <br>
                        <div class="text-justify">
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione, deserunt.
                                <div class="rumus text-center"><h4>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</h4></div>
                                <!-- Keterangan:  -->
                                <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                    <strong>Keterangan :</strong>
                                </a>
                            </p>
                            <div class="collapse" id="collapseKeterangan">
                                <p class="text-justify">
                                    n		: sampel minimum <br>
                                    r		: proporsi kejadian terhadap populasi target <br>
                                    deff	: design effect <br>
                                    RME	    : relative margin <br>
                                    pb		: proporsi populasi target terhadap populasi penelitian <br>
                                    AveSize	: rata-rata jumlah ART <br>
                                    RR		: response rate <br> <br>
                                    <!-- <a id="keteranganBawah" onclick="keteranganBawah(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                            [<strong><i>Sembunyikan</i></strong>]
                                    </a> -->
                                </p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et repudiandae officia sint repellat aspernatur culpa quam perferendis rerum distinctio ea.
                            </p>
                        </div>
                    </li>
                    <br>
                    <li>
                        <strong>Rumus Penduga Total Karakteristik</strong> <br>
                        <div class="text-justify">
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga, molestiae!
                                <div class="rumus text-center"><h4>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</h4></div>
                                <!-- Keterangan:  -->
                                <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                    <strong>Keterangan :</strong>
                                </a>
                            </p>
                            <div class="collapse" id="collapseKeterangan">
                                <p class="text-justify">
                                    n		: sampel minimum <br>
                                    r		: proporsi kejadian terhadap populasi target <br>
                                    deff	: design effect <br>
                                    RME	    : relative margin <br>
                                    pb		: proporsi populasi target terhadap populasi penelitian <br>
                                    AveSize	: rata-rata jumlah ART <br>
                                    RR		: response rate <br> <br>
                                    <!-- <a id="keteranganBawah" onclick="keteranganBawah(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                            [<strong><i>Sembunyikan</i></strong>]
                                    </a> -->
                                </p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque veritatis magni saepe dolorum quae, aspernatur maxime praesentium asperiores corporis quisquam?
                            </p>
                        </div>
                    </li>
                    <br>
                    <li>
                        <strong>Rumus Penduga Rata-Rata Karakteristik</strong> <br>
                        <div class="text-justify">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sint?
                                <div class="rumus text-center"><h4>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</h4></div>
                                <!-- Keterangan:  -->
                                <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                    <strong>Keterangan :</strong>
                                </a>
                            </p>
                            <div class="collapse" id="collapseKeterangan">
                                <p class="text-justify">
                                    n		: sampel minimum <br>
                                    r		: proporsi kejadian terhadap populasi target <br>
                                    deff	: design effect <br>
                                    RME	    : relative margin <br>
                                    pb		: proporsi populasi target terhadap populasi penelitian <br>
                                    AveSize	: rata-rata jumlah ART <br>
                                    RR		: response rate <br> <br>
                                    <!-- <a id="keteranganBawah" onclick="keteranganBawah(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                            [<strong><i>Sembunyikan</i></strong>]
                                    </a> -->
                                </p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit animi amet repellendus fuga sed, quo consectetur. Commodi nulla facere hic.
                            </p>
                        </div>
                    </li>
                    <br>
                    <li>
                        <strong>Rumus Jumlah Sampel Minimum</strong> <br>
                        <div class="text-justify">
                            <p>
                                Menggunakan metode Multiple Indicator Cluster Survey (MICS) versi 6
                                <div class="rumus text-center"><h4>\(n=\frac{4\:r\:(1-r)\:deff}{(RME\:r)^{2}\:pb\:AveSize\:RR}\)</h4></div>
                                <!-- Keterangan:  -->
                                <a id="keterangan" onMouseOver="this.style.color='#b35c74'" onMouseOut="this.style.color='#493A5A'" onclick="keterangan(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                    <strong>Keterangan :</strong>
                                </a>
                            </p>
                            <div class="collapse" id="collapseKeterangan">
                                <p class="text-justify">
                                    n		: sampel minimum <br>
                                    r		: proporsi kejadian terhadap populasi target <br>
                                    deff	: design effect <br>
                                    RME	    : relative margin <br>
                                    pb		: proporsi populasi target terhadap populasi penelitian <br>
                                    AveSize	: rata-rata jumlah ART <br>
                                    RR		: response rate <br> <br>
                                    <!-- <a id="keteranganBawah" onclick="keteranganBawah(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" aria-expanded="false" aria-controls="collapseKeterangan">
                                            [<strong><i>Sembunyikan</i></strong>]
                                    </a> -->
                                </p>
                            </div>
                            <p>
                                Berdasarkan penghitungan dari rumus di atas, didapatkan sampel blok sensus sejumah 347 blok sensus dengan 3470 rumah tangga.
                            </p>
                        </div>
                    </li>
                </ul>
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
            <div class="konten2 third5 par m-auto p-4 p-md-5 shadow box d-flex flex-column flex-lg-row justify-content-lg-center panel" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <!-- <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, perferendis. Quia harum qui ipsum nihil odio, perspiciatis architecto asperiores quam. Architecto, enim dolor cupiditate harum ipsam quibusdam consequuntur temporibus totam, dolorem consectetur quod maiores, obcaecati saepe velit. Laboriosam ad impedit corrupti error perspiciatis nemo tempore quae possimus, obcaecati numquam ullam recusandae dolore maiores doloribus quasi animi asperiores! Quasi culpa exercitationem officiis sit magni voluptatem, reiciendis unde! Similique minima, dignissimos repellat veniam laboriosam odit maiores illum alias doloribus, beatae, labore unde porro? Incidunt, assumenda explicabo. Eaque nisi, impedit repellendus fugiat laborum in soluta? Dolores dolorum ex recusandae atque quidem aliquid placeat?
                </p> -->
                <div class="info-item m-1" style="background-color: #ffbc33; height: 500px"></div>
                <div class="info-item m-1" style="background-color: #ffbc33; height: 500px"></div>
            </div>
        </div>
    </section>

    <!-- Buku Laporan -->
    <section class="offset-header mt-5">
        <div class="container-fluid turun">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-12 col-sm-12">
                    <h1 class="headline text-center">Buku Laporan</h1>
                </div>
            </div>
            <!-- <div class="konten2 third5 par m-auto p-4 p-md-5 shadow box d-flex flex-column flex-lg-row justify-content-lg-center panel" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000"> -->
            <div class="konten2 third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    <img src="<?= base_url('pvd/img/landingpage/riset2/buku_laporan.png') ?>" class="img-fluid rounded-3 w-75 mx-auto d-block" alt="" >
                </p>
                <p class="text-justify">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="text-center text-lg-start">
                            <a href="<?= base_url("hasil-pkl/riset2") ?>" class="tombol btn-for text-decoration-none">
                                <span>Unduh</span>
                                <i class="fas fa-download"></i>
                            </a>
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </section>
    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

</section>

</section><!-- End -->


<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script type="text/javascript" id="MathJax-script" async
  src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js">
</script>

<?= $this->endSection(); ?>