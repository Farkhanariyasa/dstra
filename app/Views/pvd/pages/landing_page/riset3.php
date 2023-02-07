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

    <!-- Metodologi -->
    <section class="offset-header">
        <div class="container-fluid turun">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-12 col-sm-12">
                    <h1 class="headline text-center">Metodologi</h1>
                </div>
            </div>
            <!-- batasan penelitian -->
            <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" 
                data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    <b>BATASAN PENELITIAN</b>
                </p>
                <p class="text-justify">
                Dalam penelitian ini, dipandang perlu untuk melakukan pembatasan terhadap masalah yang akan diteliti. Adapun batasan yang pertama adalah terkait objek dari penelitian ini yang berupa tenaga kerja pada industri pariwisata dengan meninjau luasnya cakupan dari sektor pariwisata di mana beberapa sektor umum yang juga berkaitan dengan aktivitas turis dapat tergolong ke dalam sektor ini. Industri Pariwisata yang dicakup mengacu pada KBLI 2015 Bidang Pariwisata. KBLI 2015 Bidang Pariwisata disusun menurut IRTS 2008 dan Undang-Undang Nomor 10 Tahun 2009 Tentang Pariwisata. Sumber pendukungnya adalah Peraturan Menteri Pariwisata No. 10 Tahun 2018 Tentang Pelayanan Perizinan Berusaha Terintegrasi Secara Elektronik Sektor Pariwisata dan Klasifikasi Baku Lapangan Usaha Indonesia 2015.</p>
                <p class="text-justify">
                Kemudian, cakupan wilayah dari penelitian ini hanya akan meliputi Kabupaten Malang, di mana wilayah ini dikenal sebagai daerah tujuan wisata utama Jawa Timur. Jenis destinasi wisata yang dimiliki cukup beragam, mulai dari kebun teh, gunung, pantai, museum, kuliner, dan taman rekreasi. Adapun wisata unggulan dari Kabupaten Malang di antaranya adalah air terjun Coban Glotak yang terletak di Desa Bedalisodo, Kecamatan Wagir, Kabupaten Malang. Wisata unggulan lainnya yang merupakan keunikan dari daerah Kabupaten Malang adalah pantai-pantai yang terdapat di wilayah selatannya, seperti Pantai Batu Bengkung dan Pantai Bowele.
                </p>
            </div>
            <!-- ruang lingkup -->
            <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" 
                data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    <b>RUANG LINGKUP</b>
                </p>
                <ol type="a" class="text-justify">
                <b><li>Lokus penelitian</li></b>
                <p>Kabupaten Malang dipilih sebagai lokus penelitian karena memiliki potensi pariwisata yang besar, yang mana tercatat memiliki jumlah wisatawan terbanyak di Jawa Timur pada tahun 2021, yaitu sekitar 1,5 juta wisatawan.</p> 
                <b><li>Waktu penelitian</li></b>
                <p>Waktu penelitian adalah dimulai sejak tanggal 12 Oktober 2022 hingga Maret 2023, yang dialokasikan pada 3 kegiatan utama, yaitu kegiatan pra-pencacahan (12 Oktober 2022 - 20 Januari 2023), kegiatan pencacahan (23 Januari - 3 Februari 2023), dan kegiatan pasca-pencacahan (10 Februari - Maret 2023).</p> 
                <b><li>Data yang dikumpulkan</li></b> 
                <p>Data dan keterangan yang dikumpulkan adalah karakteristik perumahan, keterangan ART yang bekerja di industri pariwisata, keterangan pekerjaan utama di industri pariwisata, keterangan ART yang selama tiga tahun terakhir pernah bekerja di Industri pariwisata, keterangan informasi pribadi ART, dan tingkat sadar wisata ART yang bekerja dan pernah bekerja di industri pariwisata.</p> 
                <b><li>Cakupan penelitian</li></b> 
                <p>Populasi: seluruh penduduk di Kabupaten Malang.<br>
                Populasi Target: penduduk usia 15 tahun ke atas di Kabupaten Malang yang sedang bekerja (Tahun 2023) atau 3 tahun sebelum pencacahan (2020-2023) pernah bekerja di industri pariwisata.<br>
                Unit Observasi: kepala rumah tangga atau anggota rumah tangga yang sedang bekerja atau 3 tahun sebelum pencacahan pernah bekerja di industri pariwisata.<br>
                Unit Sampling: <br>
                Unit sampling pada penelitian ini terdiri atas tiga tahap, yaitu sebagai berikut.
                <ol>
                    <li>Primary sampling unit: Kecamatan</li> 
                    <li>Secondary sampling unit: Blok Sensus</li>
                    <li>Ultimate sampling unit: Rumah Tangga</li>
                </ol>
                </p> 
                <p>Unit Analisis: anggota rumah tangga usia 15 tahun ke atas di Kabupaten Malang yang sedang bekerja atau 3 tahun sebelum pencacahan pernah bekerja di industri pariwisata.<br>
                Kerangka Sampel:<br>
                Kerangka sampel yang digunakan dalam penelitian ini adalah sebagai berikut.
                <ol>
                    <li>Tahap pertama: daftar kecamatan di Kabupaten Malang.</li> 
                    <li>Tahap kedua: daftar seluruh blok sensus pada kecamatan terpilih di Kabupaten Malang.</li>
                    <li>Tahap ketiga: seluruh rumah tangga yang memiliki anggota rumah tangga usia 10 tahun ke atas yang sedang bekerja atau 3 tahun sebelum pencacahan pernah bekerja di industri pariwisata.</li> 
                </ol>
                </p>
            </div>
            <!-- instrumen penelitian -->
            <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" 
                data-aos="zoom-in" data-aos-duration="1000">
                <p>
                    <b>INSTRUMEN PENELITIAN</b>
                </p>
                <p class="text-justify">
                Penelitian ini menggunakan sumber data primer dan sekunder. Data primer dikumpulkan dari unit observasi penelitian ini yaitu rumah tangga dengan metode wawancara menggunakan moda <i>Computer Assisted Personal Interview</i> (CAPI) dan <i>Pen-and-Paper Personal Interview</i> (PAPI). Data sekunder dikumpulkan dari BPS yaitu data Kecamatan dan Blok Sensus (BS) yang tersedia di lokus penelitian yang digunakan sebagai dasar penentuan sampel.</p>
                <p class="text-justify">Moda pengumpulan data primer yang digunakan adalah <i>Computer Assisted Personal Interview</i> (CAPI). Pada moda pengumpulan data dengan CAPI, Petugas menggunakan kuesioner elektronik dalam gawai (HP) mereka dalam melakukan wawancara. Dengan CAPI, pewawancara melakukan wawancara dan entri data secara bersamaan.
                </p>
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