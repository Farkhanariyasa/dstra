<?= $this->extend('pvd/layout/landing_page/template'); ?>

<?= $this->section('content'); ?>

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
                    Kota Batu sebagai salah satu kota wisata di Indonesia turut merasakan dampak pandemi Covid-19,
                    khususnya pada unit usaha pariwisata. Pelaku dari unit usaha pariwisata belum memiliki kecakapan
                    dalam bidang teknis dalam hal penggunaan teknologi, termasuk di dalamnya meliputi penerimaan dan
                    pengadopsian TIK di bidang pariwisata. Menurunnya jumlah kunjungan wisatawan diikuti dengan
                    peningkatan penggunaan internet pada masa pandemi menjadi indikasi bahwa pemanfaatan internet serta
                    TIK dalam menunjang kegiatan pariwisata belum optimal.
                </p>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="<?= base_url('pvd/riset1/dasbor') ?>" class="tombol btn-for">
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
    <!-- Latar Belakang -->
    <section id="firstSec" class="offset-header">
        <div class="container-fluid turun">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-12 col-sm-12">
                    <h1 class="headline text-center pt-5">Latar Belakang</h1>
                </div>
                <div class="garis">
                </div>
            </div>
            <div class="konten third5 shadow box par m-auto p-4 p-md-5 mt-4 w-75" data-aos="zoom-in"
                data-aos-duration="1000">
                <p class="text-justify">
                    Terdapat sebuah fenomena yang cukup sering ditemui, dimana seseorang yang melakukan perjalanan
                    wisata sebagian besar melakukan perjalanan wisata bersama keluarga atau kerabat terdekatnya
                    (Koranti, Sriyanto & Sidik, 2017). Hal ini penting untuk dianalisis apakah untuk menentukan
                    seseorang termasuk ke dalam satu rumah tangga dapat diidentifikasi berdasarkan usual environment dan
                    pola perjalanan wisata yang dilakukan melalui MPD.
                </p>
                <p class="text-justify">
                    Setiap operator baik Telkomsel maupun Indosat memungkinkan mempunyai hasil mobile positioning
                    berbeda satu sama lain, bahkan juga di operator itu sendiri meskipun orang tersebut berada di lokasi
                    dan waktu yang sama. Penyebabnya adalah jarak tower seluler (BTS) tiap operator dan aktivitas
                    seluler masing-masing pengguna berpengaruh, sehingga data mobile positioning yang dihasilkan tidak
                    sama. Jika seorang wisatawan menggunakan dua nomor berbeda dalam satu ponsel sebagai penentu mobile
                    positioning, wisatawan tersebut akan terhitung sebanyak dua kali. Dengan kata lain akan terjadi
                    double counting pada data MPD.
                </p>
                <p class="text-justify">
                    Dibalik kelebihan yang ditawarkannya, MPD juga memiliki kelemahan dalam mengumpulkan data wisatawan.
                    Salah satunya adalah informasi mengenai karakteristik pengguna tidak dapat diperoleh jika hanya
                    menggunakan MPD tanpa melakukan survei. Hal ini diperkuat juga dengan sulitnya mengestimasi jumlah
                    perjalanan wisata di dalam kabupaten/kota (setingkat kecamatan) yang disebabkan tidak meratanya
                    ketersediaan Base Transceiver Station (BTS) di setiap kecamatan di Indonesia. Apabila data wisata
                    dalam kabupaten/kota ini tidak tertangkap, kekurangan data wisatawan akan terjadi. Selain itu, MPD
                    juga tidak bisa menangkap jumlah perjalanan wisata yang tidak melibatkan penggunaan telepon seluler.
                    Beberapa kekurangan MPD tersebut menjadi cukup merugikan mengingat dibutuhkannya data wisata yang
                    komprehensif dalam hal pengembangan wisata guna memulihkan sektor pariwisata.
                </p>
            </div>
        </div>
    </section>

    <!-- Tujuan Penelitian -->
    <section id="firstSecB" class="offset-header">
        <div class="container-fluid turun pb-5">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-12 col-sm-12">
                    <h1 class="headline text-center">Tujuan Penelitian</h1>
                </div>
                <div class="garis">
                </div>
            </div>
            <div class="konten third5 par m-auto p-4 p-md-5 w-75 shadow box" style="line-height: 30px;"
                data-aos="zoom-in" data-aos-duration="1000">
                <ol>
                    <li>Menemukan metode untuk mengelompokkan individu yang termasuk dalam satu rumah tangga berdasarkan
                        usual environment dan pola perjalanan wisata (family grouping).
                    </li>
                    <li>Menemukan metode untuk mengidentifikasi double counting berdasarkan pola perjalanan individu
                        yang menggunakan lebih dari satu nomor Telkomsel dan/atau Indosat berbeda dalam satu perangkat.
                    </li>
                    <li>Menyajikan statistik wisatawan nusantara melalui pendekatan Mobile Positioning Data (MPD) dan
                        survei konvensional di Kota Malang tahun 2022.</li>
                </ol>
            </div>
            <br><br><br>
        </div>
    </section>

    <!-- Metodologi -->
    <section id="firstSecB" class="offset-header">
        <div class="container-fluid turun pb-5">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-12 col-sm-12">
                    <h1 class="headline text-center">Metodologi</h1>
                </div>
                <div class="garis">
                </div>
            </div>
            <div class="konten third5 par m-auto p-4 p-md-5 w-75 shadow box" style="line-height: 30px;"
                data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                    Survei 1 : Survei Relawan dan Ruta Pegawai BPS Kota Surabaya dan Provinsi Jawa Timur
                    Metode Pengambilan Sampel : Purposive Sampling
                    <li class="text-justify">Tahap pertama, Dari daftar pegawai diambil pegawai yang eligible, yaitu
                        pegawai dengan provider
                        telkomsel dan/atau indosat sebagai relawan dan dilakukan pencacahan tahap Pegawai.
                    </li>
                    <li class="text-justify">Tahap kedua, Dari pencacahan tahap pegawai dilakukan pencacahan ke level
                        keluarga pegawai
                        tersebut. Pada penelitian ini, keluarga pegawai yang dicacah dibatasi hanya yang berdomisili di
                        Surabaya atau beberapa kecamatan (Kecamatan Taman, Sukodono, Buduran, Waru, Gedangan, dan
                        Sedati) di
                        Sidoarjo.
                    </li>
                </p>
            </div>

            <div class="konten third5 par m-auto p-4 p-md-5 w-75 shadow box" style="line-height: 30px;"
                data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                    Survei 2 : Survei Integrasi (Pilot Survei Riset 2)
                    Metode Pengambilan Sampel : Two Stage Sampling
                    <li class="text-justify">Tahap pertama, mengambil sejumlah blok sensus dengan Probability
                        Proportional to Size With
                        Replacement dengan size jumlah keluarga di tiap blok sensus hasil pemutakhiran Sensus Penduduk
                        2020
                    </li>
                    <li class="text-justify">Tahap kedua, mengambil rumah tangga menggunakan Systematic Sampling dengan
                        jumlah anggota rumah
                        tangga sebagai variabel dasar pengurutan
                    </li>
                </p>
            </div>
            <br><br><br>
        </div>
    </section>

    <!-- Hasil Penelitian -->
    <section id="firstSecB" class="offset-header">
        <div class="container-fluid turun pb-5">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-12 col-sm-12">
                    <h1 class="headline text-center">Hasil Penelitian</h1>
                </div>
                <div class="garis">
                </div>
            </div>
            <div class="konten third5 par m-auto p-4 p-md-5 w-75 shadow box" style="line-height: 30px;"
                data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, perferendis. Quia harum qui ipsum
                    nihil odio, perspiciatis architecto asperiores quam. Architecto, enim dolor cupiditate harum ipsam
                    quibusdam consequuntur temporibus totam, dolorem consectetur quod maiores, obcaecati saepe velit.
                    Laboriosam ad impedit corrupti error perspiciatis nemo tempore quae possimus, obcaecati numquam
                    ullam recusandae dolore maiores doloribus quasi animi asperiores! Quasi culpa exercitationem
                    officiis sit magni voluptatem, reiciendis unde! Similique minima, dignissimos repellat veniam
                    laboriosam odit maiores illum alias doloribus, beatae, labore unde porro? Incidunt, assumenda
                    explicabo. Eaque nisi, impedit repellendus fugiat laborum in soluta? Dolores dolorum ex recusandae
                    atque quidem aliquid placeat?
                </p>
            </div>
            <br><br><br>
        </div>
    </section>

    <!-- Infografis -->
    <section id="firstSecB" class="offset-header">
        <div class="container-fluid turun pb-5">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div class="col-12 col-sm-12">
                    <h1 class="headline text-center">Infografis</h1>
                </div>
                <div class="garis">
                </div>
            </div>
            <div class="konten third5 par m-auto p-4 p-md-5 w-75 shadow box" style="line-height: 30px;"
                data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, perferendis. Quia harum qui ipsum
                    nihil odio, perspiciatis architecto asperiores quam. Architecto, enim dolor cupiditate harum ipsam
                    quibusdam consequuntur temporibus totam, dolorem consectetur quod maiores, obcaecati saepe velit.
                    Laboriosam ad impedit corrupti error perspiciatis nemo tempore quae possimus, obcaecati numquam
                    ullam recusandae dolore maiores doloribus quasi animi asperiores! Quasi culpa exercitationem
                    officiis sit magni voluptatem, reiciendis unde! Similique minima, dignissimos repellat veniam
                    laboriosam odit maiores illum alias doloribus, beatae, labore unde porro? Incidunt, assumenda
                    explicabo. Eaque nisi, impedit repellendus fugiat laborum in soluta? Dolores dolorum ex recusandae
                    atque quidem aliquid placeat?
                </p>
            </div>
            <br><br><br>
        </div>
    </section>
    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

</section>





</script>



</section>

<?= $this->endSection(); ?>