<?= $this->extend('pvd/layout/landing_page/template'); ?>

<?= $this->section('content'); ?>

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
            <div class="konten third5 shadow box par m-auto p-4 p-md-5 mt-4" data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                    Jawa Timur termasuk ke dalam dua besar provinsi dengan jumlah perjalanan wisatawan nusantara tertinggi sejak tahun 2015. 
                    Salah satu tujuan wisata unggulan di Jawa Timur adalah Kota Batu dengan pariwisata sebagai sektor andalan dalam menunjang 
                    perekonomian daerahnya.
                    <a id="latarBelakangAtas" onclick="ubahKelas1(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        [<strong><i>Tampilkan Semua</i></strong>]
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <canvas id='latbel-linechart'>
                    </canvas>
                    <p class="text-justify">
                        <strong>Batu memiliki posisi dan peran sebagai Kota Wisata</strong>, bahkan pemerintah Kota Batu berencana untuk meningkatkan 
                        peranan Kota Batu dari Kota Wisata menjadi Sentra Wisata yang tertuang dalam Peraturan Daerah Kota Batu Nomor 7 Tahun 2011 tentang 
                        Rencana Tata Ruang Wilayah Kota Batu Tahun 2010-2030. Dengan adanya peran Kota Batu sebagai Kota Wisata, maka akan dilhat kesiapan 
                        Kota Batu dalam menerapkan <i>Smart Tourism Destination</i>. Menurut Wibowo (2020), terdapat beberapa aspek yang dapat digunakan untuk 
                        mengukur kesiapan STD, salah satunya dapat dilihat dari sisi <i>enterprise</i> (unit usaha). Pada saat pandemi Covid-19, unit usaha 
                        merupakan salah satu aspek dalam sektor pariwisata yang mengalami kontraksi cukup signifikan. Grafik berikut menggambarkan adanya 
                        kontraksi beberapa unit usaha pariwisata di Kota Batu pada periode 2019-2020.
                    </p>
                    <p class="text-justify">
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
            <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                <b>Jenis Usaha Pariwisata</b> dibatasi pada tiga jenis usaha antara lain Jasa Transportasi Wisata, Jasa Makanan dan Minuman, serta Penyediaan Akomodasi.
                <br>
                <b>Skala Usaha</b> yang digunakan dalam penelitian ini yaitu skala usaha mikro dan kecil.               
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
            <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                <b>Belom ada konten :(</b>              
                </p>
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
                    <li>Mengetahui karakteristik tiga unit usaha pariwisata skala mikro dan kecil di Kota Batu yang meliputi Jasa Transportasi Wisata, Jasa Makanan dan Minuman, serta Penyediaan Akomodasi dalam menerapkan <i>Smart Tourism Destination</i>.</li>                 
                    <li>Menganalisis tingkat kesiapan pemanfaatan TIK dari tiga unit usaha pariwisata skala mikro dan kecil di Kota Batu yang meliputi Jasa Transportasi Wisata, Jasa Makanan dan Minuman, serta Penyediaan Akomodasi dalam menerapkan <i>Smart Tourism Destination</i>.</li>                    
                    <li>Menganalisis faktor-faktor yang memengaruhi kesiapan unit usaha pariwisata skala mikro dan kecil di Kota Batu dalam pemanfaatan TIK.</li>
                    <li>
                        Menganalisis perbedaan rata-rata omzet berdasarkan kategori kesiapan pemanfaatan TIK dari unit usaha pariwisata skala mikro dan kecil di Kota Batu.
                        <!-- <span id="goToMetodologi" class="invisilbe"></span> -->
                    </li>
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
            <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <!-- <p class="text-justify">
                    Kegiatan pengumpulan data dilakukan di Kota Batu, Provinsi Jawa Timur. Kota Batu terdiri dari 3 kecamatan yaitu 
                    Kecamatan Batu, Kecamatan Bumiaji, dan Kecamatan Junrejo. Data yang digunakan bersumber dari data primer yang 
                    didapatkan dari wawancara langsung CAPI terhadap pemilik atau pengelola usaha pariwisata yang terpilih sebagai sampel 
                    dan menggunakan data sekunder yang diperoleh dari BPS berupa daftar jumlah usaha mikro dan kecil yang meliputi tiga 
                    usaha pariwisata yang tercakup dalam penelitian ini. 
                    <a id="metodologiAtas" onclick="ubahKelas1(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseMetodologi" aria-expanded="false" aria-controls="collapseMetodologi">
                        [<strong><i>Tampilkan Semua</i></strong>]
                    </a>
                </p> -->
                <!-- <div class="collapse" id="collapseMetodologi">
                    <p class="text-justify">    
                        Populasi dalam penelitian ini adalah seluruh unit usaha pariwisata skala mikro dan kecil di Kota Batu tahun 2023. Populasi Target adalah 
                        seluruh unit usaha pariwisata skala mikro dan kecil yang meliputi Jasa Transportasi Wisata, Jasa Makanan dan Minuman, serta Penyediaan Akomodasi 
                        di Kota Batu pada tahun 2023. Unit Observasi adalah pemilik atau pengelola usaha pariwisata skala mikro dan kecil yang meliputi Jasa Transportasi 
                        Wisata, Jasa Makanan dan Minuman, serta Penyediaan Akomodasi di Kota Batu pada tahun 2023. Metode Penarikan Sampel yang digunakan adalah 
                        <i>Two Stage Sampling</i>. Untuk pemilihan sampel tahap pertama, dari kerangka sampel blok sensus di Kota Batu, dipilih sejumlah 
                        blok sensus secara PPS WR. Kemudian tahap kedua, dari blok sensus terpilih, dipilih sejumlah usaha pariwisata melalui pendekatan 
                        pemilik atau pengelola dari seluruh penduduk di Kota Batu tahun 2023 meliputi tiga usaha pariwisata yang tercakup dalam penelitian. 
                        Tahap kedua ini dilakukan secara <i>systematic</i> dengan <i>implicit stratification</i> berdasarkan jenis usahanya.               
                        <a id="metodologiBawah" onclick="ubahKelas2(this.id);" style="color: #4b395f;" class="collapsed text-decoration-none" data-bs-toggle="collapse" href="#collapseMetodologi" aria-expanded="false" aria-controls="collapseMetodologi">
                                [<strong><i>Tampilkan Sebagian</i></strong>]
                        </a>
                    </p>
                </div> -->
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

    <!-- Hasil Penelitian -->
    <section class="offset-header">
        <div class="container-fluid turun">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-12 col-sm-12">
                    <h1 class="headline text-center">Hasil Penelitian</h1>
                </div>
            </div>
            <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, perferendis. Quia harum qui ipsum nihil odio, perspiciatis architecto asperiores quam. Architecto, enim dolor cupiditate harum ipsam quibusdam consequuntur temporibus totam, dolorem consectetur quod maiores, obcaecati saepe velit. Laboriosam ad impedit corrupti error perspiciatis nemo tempore quae possimus, obcaecati numquam ullam recusandae dolore maiores doloribus quasi animi asperiores! Quasi culpa exercitationem officiis sit magni voluptatem, reiciendis unde! Similique minima, dignissimos repellat veniam laboriosam odit maiores illum alias doloribus, beatae, labore unde porro? Incidunt, assumenda explicabo. Eaque nisi, impedit repellendus fugiat laborum in soluta? Dolores dolorum ex recusandae atque quidem aliquid placeat?
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
            <div class="konten third5 par m-auto p-4 p-md-5 shadow box d-flex flex-column flex-lg-row justify-content-lg-center panel" style="line-height: 30px;"
                data-aos="zoom-in" data-aos-duration="1000">
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="<?= base_url('pvd/js/riset4/latbel_linechart.js') ?>"></script>
</section><!-- End -->

<?= $this->endSection(); ?>