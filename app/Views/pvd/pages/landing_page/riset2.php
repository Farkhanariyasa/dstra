<?= $this->extend('pvd/layout/landing_page/template'); ?>

<?= $this->section('content'); ?>

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
                    Indonesia memiliki potensi pariwisata yang sangat besar baik dari segi alam maupun dari segi budaya. Terkait adanya dampak kepariwisataan terhadap perekonomian, perlu diperhatikan bagaimana perkembangan jumlah kunjungan wisatawannya. Penurunan jumlah perjalanan wisata yang sangat drastis pada tahun 2020 merupakan dampak dari adanya pandemi Covid-19. Ketersediaan data wisnus sangat dibutuhkan untuk dapat meninjau terjadinya peningkatan dan penurunan perjalanan pariwisata. <i>Mobile Positioning Data</i> (MPD) dapat digunakan dalam mengumpulkan data sebagai pendekatan baru. Namun, pendekatan MPD sendiri masih memiliki kekurangan sehingga diperlukan alternatif pengumpulan data lain untuk melengkapi data wisnus yang belum mampu dihasilkan oleh pendekatan MPD, yaitu data perjalanan wisata di dalam kabupaten/kota.  
                </p>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="<?= base_url('hasil-pkl/riset2/dasbor') ?>" class="tombol btn-for">
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
            <div class="konten third5 shadow box par m-auto p-4 p-md-5 mt-4 w-75" data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                    Indonesia memiliki potensi pariwisata yang sangat besar baik dari segi alam maupun dari segi budaya. Hal ini didukung oleh laporan Travel & Tourism Development Index 2021 World Economic Forum (WEF) edisi Mei 2022 yang menyatakan bahwa industri pariwisata tanah air menempati peringkat ke-32 dari total 117 negara di dunia dan peringkat ke-8 di Asia Pasifik. Sejalan dengan yang dikemukakan oleh Pendit (2006) bahwa 
                    kehadiran pariwisata dapat mempercepat pertumbuhan ekonomi, penyediaan lapangan pekerjaan, meningkatkan penghasilan, meningkatkan standar hidup, serta merangsang sektor-sektor produktif lainnya. Menurut Archer (2000), jumlah pengeluaran wisatawan dapat meningkatkan PDRB melalui sektor perdagangan, hotel, dan restoran. Potensi dari sektor pariwisata dapat juga dilihat performanya dari nilai kontribusi Tourism Direct Gross Domestic Product (TDGDP) Indonesia.
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

    <!-- Tujuan Penelitian -->
    <section id="firstSecB" class="offset-header mt-5">
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
            <div class="konten third5 par m-auto p-4 p-md-5 w-75 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, perferendis. Quia harum qui ipsum nihil odio, perspiciatis architecto asperiores quam. Architecto, enim dolor cupiditate harum ipsam quibusdam consequuntur temporibus totam, dolorem consectetur quod maiores, obcaecati saepe velit. Laboriosam ad impedit corrupti error perspiciatis nemo tempore quae possimus, obcaecati numquam ullam recusandae dolore maiores doloribus quasi animi asperiores! Quasi culpa exercitationem officiis sit magni voluptatem, reiciendis unde! Similique minima, dignissimos repellat veniam laboriosam odit maiores illum alias doloribus, beatae, labore unde porro? Incidunt, assumenda explicabo. Eaque nisi, impedit repellendus fugiat laborum in soluta? Dolores dolorum ex recusandae atque quidem aliquid placeat?
                </p>
            </div>
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
            <div class="konten third5 par m-auto p-4 p-md-5 w-75 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, perferendis. Quia harum qui ipsum nihil odio, perspiciatis architecto asperiores quam. Architecto, enim dolor cupiditate harum ipsam quibusdam consequuntur temporibus totam, dolorem consectetur quod maiores, obcaecati saepe velit. Laboriosam ad impedit corrupti error perspiciatis nemo tempore quae possimus, obcaecati numquam ullam recusandae dolore maiores doloribus quasi animi asperiores! Quasi culpa exercitationem officiis sit magni voluptatem, reiciendis unde! Similique minima, dignissimos repellat veniam laboriosam odit maiores illum alias doloribus, beatae, labore unde porro? Incidunt, assumenda explicabo. Eaque nisi, impedit repellendus fugiat laborum in soluta? Dolores dolorum ex recusandae atque quidem aliquid placeat?
                </p>
            </div>
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
            <div class="konten third5 par m-auto p-4 p-md-5 w-75 shadow box" style="line-height: 30px;" data-aos="zoom-in" data-aos-duration="1000">
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, perferendis. Quia harum qui ipsum nihil odio, perspiciatis architecto asperiores quam. Architecto, enim dolor cupiditate harum ipsam quibusdam consequuntur temporibus totam, dolorem consectetur quod maiores, obcaecati saepe velit. Laboriosam ad impedit corrupti error perspiciatis nemo tempore quae possimus, obcaecati numquam ullam recusandae dolore maiores doloribus quasi animi asperiores! Quasi culpa exercitationem officiis sit magni voluptatem, reiciendis unde! Similique minima, dignissimos repellat veniam laboriosam odit maiores illum alias doloribus, beatae, labore unde porro? Incidunt, assumenda explicabo. Eaque nisi, impedit repellendus fugiat laborum in soluta? Dolores dolorum ex recusandae atque quidem aliquid placeat?
                </p>
            </div>
        </div>
    </section>
    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

</section>





</script>



</section>

<?= $this->endSection(); ?>