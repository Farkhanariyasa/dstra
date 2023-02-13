<?= $this->extend('pvd/layout/landing_page/template'); ?>

<?= $this->section('content'); ?>

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
            <!-- batasan-->
            <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" 
                data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                Dalam penelitian ini, dipandang perlu untuk melakukan pembatasan terhadap masalah yang akan diteliti. Adapun batasan yang pertama adalah terkait objek dari penelitian ini yang berupa tenaga kerja pada industri pariwisata dengan meninjau luasnya cakupan dari sektor pariwisata di mana beberapa sektor umum yang juga berkaitan dengan aktivitas turis dapat tergolong ke dalam sektor ini. Industri Pariwisata yang dicakup mengacu pada KBLI 2015 Bidang Pariwisata. KBLI 2015 Bidang Pariwisata disusun menurut IRTS 2008 dan Undang-Undang Nomor 10 Tahun 2009 Tentang Pariwisata. Sumber pendukungnya adalah Peraturan Menteri Pariwisata No. 10 Tahun 2018 Tentang Pelayanan Perizinan Berusaha Terintegrasi Secara Elektronik Sektor Pariwisata dan Klasifikasi Baku Lapangan Usaha Indonesia 2015.</p>
                <p class="text-justify">
                Kemudian, cakupan wilayah dari penelitian ini hanya akan meliputi Kabupaten Malang, di mana wilayah ini dikenal sebagai daerah tujuan wisata utama Jawa Timur. Jenis destinasi wisata yang dimiliki cukup beragam, mulai dari kebun teh, gunung, pantai, museum, kuliner, dan taman rekreasi. Adapun wisata unggulan dari Kabupaten Malang di antaranya adalah air terjun Coban Glotak yang terletak di Desa Bedalisodo, Kecamatan Wagir, Kabupaten Malang. Wisata unggulan lainnya yang merupakan keunikan dari daerah Kabupaten Malang adalah pantai-pantai yang terdapat di wilayah selatannya, seperti Pantai Batu Bengkung dan Pantai Bowele.
                </p>
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
            <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box text-light" style="line-height: 30px;" 
                data-aos="zoom-in" data-aos-duration="1000">
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
                        <p>size: jumlah objek wisata & akomodasi</p>
                    </div>
                </div>
                <!--path between 1-2-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
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
                        <hr/>
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
                    <h1 class="headline text-center">Ruang Lingkup</h1>
                </div>
            </div>
            <!-- ruang lingkup -->
            <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" 
                data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                Dalam penelitian ini, dipandang perlu untuk melakukan pembatasan terhadap masalah yang akan diteliti. Adapun batasan yang pertama adalah terkait objek dari penelitian ini yang berupa tenaga kerja pada industri pariwisata dengan meninjau luasnya cakupan dari sektor pariwisata di mana beberapa sektor umum yang juga berkaitan dengan aktivitas turis dapat tergolong ke dalam sektor ini. Industri Pariwisata yang dicakup mengacu pada KBLI 2015 Bidang Pariwisata. KBLI 2015 Bidang Pariwisata disusun menurut IRTS 2008 dan Undang-Undang Nomor 10 Tahun 2009 Tentang Pariwisata. Sumber pendukungnya adalah Peraturan Menteri Pariwisata No. 10 Tahun 2018 Tentang Pelayanan Perizinan Berusaha Terintegrasi Secara Elektronik Sektor Pariwisata dan Klasifikasi Baku Lapangan Usaha Indonesia 2015.</p>
                <p class="text-justify">
                Kemudian, cakupan wilayah dari penelitian ini hanya akan meliputi Kabupaten Malang, di mana wilayah ini dikenal sebagai daerah tujuan wisata utama Jawa Timur. Jenis destinasi wisata yang dimiliki cukup beragam, mulai dari kebun teh, gunung, pantai, museum, kuliner, dan taman rekreasi. Adapun wisata unggulan dari Kabupaten Malang di antaranya adalah air terjun Coban Glotak yang terletak di Desa Bedalisodo, Kecamatan Wagir, Kabupaten Malang. Wisata unggulan lainnya yang merupakan keunikan dari daerah Kabupaten Malang adalah pantai-pantai yang terdapat di wilayah selatannya, seperti Pantai Batu Bengkung dan Pantai Bowele.
                </p>
            </div>
        </div>
    </section>

    <!-- Sumber Data -->
    <section class="offset-header">
        <div class="container-fluid turun">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-12 col-sm-12">
                    <h1 class="headline text-center">Sumber Data</h1>
                </div>
            </div>
            <!-- sumber data -->
            <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" 
                data-aos="zoom-in" data-aos-duration="1000">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link pills-button shadow active" id="pills-primer-tab" data-bs-toggle="pill" data-bs-target="#pills-primer" type="button" role="tab" aria-controls="pills-primer" aria-selected="true">Primer</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link pills-button shadow" id="pills-sekunder-tab" data-bs-toggle="pill" data-bs-target="#pills-sekunder" type="button" role="tab" aria-controls="pills-sekunder" aria-selected="false">Sekunder</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-primer" role="tabpanel" aria-labelledby="pills-primer-tab">Data primer dikumpulkan dari unit observasi penelitian ini yaitu rumah tangga dengan metode wawancara menggunakan moda <i>Computer Assisted Personal Interview</i> (CAPI) dan <i>Pen-and-Paper Personal Interview</i> (PAPI).</div>
                <div class="tab-pane fade" id="pills-sekunder" role="tabpanel" aria-labelledby="pills-sekunder-tab">Data sekunder dikumpulkan dari BPS yaitu data Kecamatan dan Blok Sensus (BS) yang tersedia di lokus penelitian yang digunakan sebagai dasar penentuan sampel.</div>
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
            <div class="konten third5 par m-auto p-4 p-md-5 shadow box" style="line-height: 30px;" 
                data-aos="zoom-in" data-aos-duration="1000">
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

</section><!-- End -->

<?= $this->endSection(); ?>