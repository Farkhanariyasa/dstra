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
                    Pariwisata merupakan <i>leading sector</i> pembangunan di Indonesia yang menjadi salah satu penyumbang devisa terbesar di Indonesia. Untuk meningkatkan kontribusi pariwisata terhadap perekonomian Indonesia dapat dilakukan dengan meningkatkan jumlah dan kualitas tenaga kerja di sektor pariwisata. Sehingga riset ini bertujuan untuk menganalisis karakteristik tenaga kerja di industri pariwisata, menganalisis faktor-faktor yang memengaruhi tenaga kerja di industri pariwisata untuk bekerja paruh waktu, menganalisis faktor-faktor yang memengaruhi kontrak kerja tenaga kerja di industri pariwisata, menganalisis dinamika tenaga kerja di industri pariwisata, menganalisis kualitas tenaga kerja di industri pariwisata, menganalisis tenaga kerja pariwisata menurut sadar wisata.
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
            <!-- konten -->
            <div class="konten third5 par mx-auto mb-3 p-4 p-md-5 shadow box" style="line-height: 30px;" 
                data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, perferendis. Quia harum qui ipsum nihil odio, perspiciatis architecto asperiores quam. Architecto, enim dolor cupiditate harum ipsam quibusdam consequuntur temporibus totam, dolorem consectetur quod maiores, obcaecati saepe velit. Laboriosam ad impedit corrupti error perspiciatis nemo tempore quae possimus, obcaecati numquam ullam recusandae dolore maiores doloribus quasi animi asperiores! Quasi culpa exercitationem officiis sit magni voluptatem, reiciendis unde! Similique minima, dignissimos repellat veniam laboriosam odit maiores illum alias doloribus, beatae, labore unde porro? Incidunt, assumenda explicabo. Eaque nisi, impedit repellendus fugiat laborum in soluta? Dolores dolorum ex recusandae atque quidem aliquid placeat?
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