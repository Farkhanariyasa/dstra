<?= $this->extend('pvd/layout/dasbor/template'); ?>
<?= $this->section('content'); ?>
<section id="portfolio" class="portfolio section-bg">
    <div class="container">
        <header class="section-header">
            <h6 style="color: #4b395f;"><strong>Pemanfaatan Teknologi Informasi dan Komunikasi (TIK)</strong>
            </h6>
        </header>
        <hr class="hrjudul">

        <div class="row portfolio-container">
            <style>
                .konten-teks {
                    padding: 10%;
                    color: #506396;
                    /* font-family: 'Poppins', 'Courier', 'monospace'; */
                }

                .konten-teks .card-title {
                    font-weight: bold;
                    font-size: 50px;
                    /* font-family: 'Poppins', 'Courier', 'monospace'; */
                    color: #493a5a;

                }

                .konten-teks .subs {
                    font-weight: bold;
                    font-size: 30px;

                }

                .card-text {
                    /* font-family: 'Poppins', 'Courier', 'monospace'; */
                    color: #506396;
                }
            </style>

            <!-- Charts and Interpretations Batch 1 -->
            <div class="portfolio-item filter-riset4-semua" onresize="responsivefonts()">
                <div class="row">
                    <!-- Part A -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-1">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Pemanfaatan TIK Pada Unit Usaha Pariwisata</h1>
                                            <subtitle>Berdasarkan Jenis Usaha Pariwisata</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Berdasarkan grafik, terlihat bahwa dari 86% dari keseluruhan total responden unit usaha pariwisata sudah memanfaatkan TIK. Sedangkan hanya 14% yang tidak memanfaatkan TIK sama sekali. Dapat dikatakan bahwa mayoritas dari keseluruhan sampel sudah menerapkan teknologi informasi dalam kegiatan usahanya. Jika dirinci menurut jenis usaha pariwisatanya beserta skala usaha pariwisata, dapat tercermin pada kedua grafik di bawah.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Part B -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-2">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Jumlah Unit Usaha Pariwisata di Kota Batu</h1>
                                            <subtitle>Berdasarkan Pemanfaatan TIK menurut Jenis Usaha Pariwisata</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:400px;">
                                                <canvas id="chart-2"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Berdasarkan unit usaha pariwisata, setiap jenis unit usaha pariwisata sebagian besar telah memanfaatkan TIK dalam menunjang usahanya. Pada grafik di atas ditunjukkan bahwa pada jasa transportasi wisata sebesar 89,634% (147 dari 164) telah memanfaatkan TIK, jasa penyedia makanan dan minuman sebesar 84,672% (580 dari 685 UUP) telah memanfaatkan TIK, dan jasa penyediaan akomodasi merupakan yang tertinggi proporsinya dalam memanfaatkan TIK yaitu sebesar 94,737% (72 dari 76 UUP).
                                            Para pemilik usaha pastinya telah mempertimbangkan kelebihan-kelebihan dalam pemanfaatan TIK, seperti dalam jasa transportasi wisata dan penyediaan akomodasi memudahkan informasi mengenai usahanya tersebar lebih luas dan dijangkau oleh banyak orang, selain itu pelanggan juga dimudahkan dengan cara dapat memesan jauh hari (booking), cara transaksi yang lebih cepat, dan sebagainya. Kemudian pada jasa penyediaan makanan dan minuman, selain informasi mengenai usahanya lebih mudah tersebar, pelanggan dimudahkan dalam melakukan transaksi pembayaran, seperti melalui transfer bank atau scan QRIS.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part C -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-3" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-3">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Persentase Unit Usaha Pariwisata di Kota Batu</h1>
                                            <subtitle>Berdasarkan Pemanfaatan TIK menurut Jenis Usaha Pariwisata</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-3"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Berdasarkan skala usaha mikro dan kecil, sebagian besar juga telah memanfaatkan TIK dalam menunjang usahanya. Ditunjukkan dengan grafik di atas, skala mikro telah memanfaatkan TIK sebesar 85,862% dan skala kecil sebesar 94,545% sesuai dengan proporsinya. Usaha dengan skala kecil dengan tenaga kerja sebanyak 5-19 tenaga kerja memang sangat membutuhkan pemanfaatan TIK agar semua tenaga kerja terkoordinasi dengan baik dalam melakukan bagiannya masing-masing. Namun, tabel dan grafik di atas menunjukkan usaha dengan skala mikro juga telah memanfaatkan TIK, 
                                            pastinya pemilik usaha telah menyadari kebermanfaatan pemanfaatan TIK dalam menunjang usahanya, meskipun dalam usahanya hanya melibatkan 1-4 tenaga kerja.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part D -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-4" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-4">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Pemanfaatan TIK pada Unit Usaha Pariwisata</h1>
                                            <subtitle>Berdasarkan Jenis Perangkat Digital yang Dimiliki dan Digunakan</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-4"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Dari 799 sampel yang memanfaatkan TIK dalam usahanya terdapat kategori jenis peringkat yang digunakan yaitu PC, Laptop, Tablet, dan Handphone. Berdasarkan grafik di atas diperlihatkan jumlah perangkat digital dari kategori perangkat digital yang digunakan oleh unit usaha  terdapat  sebanyak 32 PC, 110 Laptop, 20 Tablet, dan 781 Smartphone. Tiap unit usaha yang menggunakan perangkat digital bisa hanya memiliki satu atau lebih perangkat digital dalam unit usahanya. Dengan demikian, penggunaan Smartphone sebagai perangkat digital menjadi pilihan paling banyak unit usaha pariwisata di Kota Batu.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part E -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-5" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-5">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Jumlah Unit Usaha Pariwisata di Kota Batu</h1>
                                            <subtitle>Berdasarkan Jenis Perangkat Digital yang Dimiliki dan Digunakan menurut Jenis Usaha Pariwisata</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-5"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Pada jenis usaha akomodasi terdapat 74 unit usaha akomodasi pariwisata di Kota Batu yang menggunakan smartphone sebagai perangkat digital utama. Di samping itu, penggunaan perangkat digital dalam sektor makanan dan minuman di Kota Batu juga terlihat signifikan. Terdapat 609 unit usaha yang mengandalkan smartphone. Demikian pula, dalam jenis sektor jasa transportasi wisata, 153 unit usaha pariwisata di Kota Batu menggunakan smartphone sebagai perangkat digital utama.Dapat disimpulkan bahwa perangkat digital yang paling umum digunakan di ketiga jenis usaha pariwisata tersebut adalah smartphone, diikuti oleh laptop, tablet, dan PC.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part F -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-6" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-6">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Jumlah Unit Usaha Pariwisata di Kota Batu</h1>
                                            <subtitle>Berdasarkan Jenis Perangkat Digital yang Dimiliki dan Digunakan menurut Skala Usaha</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-6"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Berdasarkan grafik, pada unit usaha pariwisata dengan skala kecil terdapat 49 unit usaha akomodasi pariwisata di Kota Batu yang menggunakan smartphone sebagai perangkat digital utama. Sedangkan, terdapat 19 unit usaha yang menggunakan laptop, 10 unit usaha dengan tablet, dan 8 unit usaha menggunakan perangkat digital PC. Selain itu, unit usaha pariwisata dengan skala mikro yang menggunakan smartphone sebagai perangkat digital utama terdapat 783 unit, ini jumlah yang sangat banyak dibandingkan perangkat digital lainnya yakni 93 unit usaha menggunakan laptop, 10 unit usaha menggunakan table, dan 24 unit usaha yang menggunakan PC. Dapat disimpulkan berdasarkan skala unit usaha pariwisata, jenis perangkat digital yang digunakan didominasi oleh penggunaan smartphone.                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part G -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-7" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-7">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Pemanfaatan TIK pada Unit Usaha Pariwisata</h1>
                                            <subtitle>Berdasarkan Jenis Aplikasi Komunikasi yang Digunakan</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:350px;">
                                                <canvas id="chart-7"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Pemanfaatan TIK pada unit usaha pariwisata di Kota Batu yang mencapai 86% menunjukkan adanya keragaman aplikasi komunikasi yang digunakan. Berdasarkan  grafik hasil visualisasi, sebanyak 722 unit usaha telah menggunakan Whatsapp sebagai bentuk pemanfaatan TIK. Kemudian, 131 unit usaha menggunakan Instagram, 117 unit usaha menggunakan Facebook, dan 91 unit usaha menggunakan Telepon. Keempat aplikasi tersebut merupakan aplikasi yang paling banyak digunakan oleh unit usaha pariwisata di Kota Batu sebagai bentuk pemanfaatan TIK. Di samping itu, terdapat 43 unit usaha menggunakan Email, 15 unit usaha menggunakan Telegram, 3 unit usaha menggunakan Line, dan 3 unit usaha menggunakan Twitter. Keragaman tersebut juga tercermin pada kategori aplikasi Lainnya yang mencapai 70 unit usaha. Hal tersebut menyatakan bahwa terdapat aplikasi yang digunakan oleh unit usaha pariwisata di Kota Batu yang tidak termasuk dalam kategori jenis perangkat digital yang telah didefinisikan pada Riset 4. Meskipun demikian, sebagian besar bentuk pemanfaatan TIK pada unit usaha pariwisata di Kota Batu tetap berada pada penggunaan aplikasi Whatsapp.                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part H -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-8" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-8">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Jumlah Unit Usaha Pariwisata di Kota Batu</h1>
                                            <subtitle>Berdasarkan Aplikasi Komunikasi yang Digunakan menurut Jenis Usaha Pariwisata</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:500px;">
                                                <canvas id="chart-8"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Hasil analisis data menunjukkan bahwa pemanfaatan Teknologi Informasi dan Komunikasi (TIK) 
                                            dalam aplikasi komunikasi pada berbagai jenis usaha pariwisata bervariasi. Dalam jasa 
                                            transportasi wisata, Whatsapp adalah aplikasi yang paling banyak digunakan, dengan 120 
                                            unit usaha menggunakannya, diikuti oleh telepon yang digunakan oleh 28 unit usaha. 
                                            Pada jasa penyediaan makanan dan minuman, Whatsapp kembali menjadi aplikasi komunikasi 
                                            yang dominan dengan 532 unit usaha menggunakannya. Sementara itu, dalam usaha penyediaan 
                                            akomodasi, Whatsapp tetap menjadi aplikasi komunikasi yang paling sering digunakan dengan 
                                            70 unit usaha menggunakannya. </p>
                                            <p class="text-justify">
                                            Secara keseluruhan, Whatsapp adalah aplikasi komunikasi yang paling dominan dalam ketiga 
                                            jenis usaha pariwisata yang dipelajari. Penggunaan telepon juga tetap signifikan dalam 
                                            semua jenis usaha tersebut. Selain itu, email, Instagram, dan Facebook juga menjadi pilihan 
                                            umum dalam komunikasi dengan pelanggan di industri pariwisata.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part I -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-9" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-9">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Jumlah Unit Usaha Pariwisata di Kota Batu</h1>
                                            <subtitle>Berdasarkan Aplikasi Komunikasi yang Digunakan menurut Skala Usaha Pariwisata</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:500px;">
                                                <canvas id="chart-9"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Berdasarkan grafik, dapat dilihat bahwa pada skala usaha mikro, Whatsapp adalah aplikasi komunikasi yang paling banyak digunakan oleh 671 unit usaha. Selain itu, Instagram (115 unit usaha), 
                                            Facebook (110 unit usaha), dan Telepon (88 unit usaha) juga digunakan oleh unit usaha dalam jumlah yang signifikan. Pada skala usaha kecil, Whatsapp tetap menjadi aplikasi komunikasi yang dominan dengan 51 unit usaha yang memanfaatkannya. Instagram (16 unit usaha) dan Facebook (6 unit usaha) juga digunakan secara aktif oleh unit usaha dalam skala kecil.</p>
                                            <p class="text-justify">
                                            Secara keseluruhan, Whatsapp tetap menjadi aplikasi 
                                            komunikasi yang paling dominan di kedua skala usaha pariwisata, baik mikro maupun kecil. Unit usaha juga memanfaatkan aplikasi komunikasi lain seperti Instagram, Facebook, Email, dan Telepon dalam jumlah yang cukup signifikan dalam skala usaha yang berbeda.                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part J -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-10" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-10">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Pemanfaatan TIK pada Unit Usaha Pariwisata</h1>
                                            <subtitle>Berdasarkan Jenis Kegiatan</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-10"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Pemanfaatan TIK dalam menunjang usaha pariwisata di Kota Batu cukup beragam. Namun, berdasarkan grafik hasil visualisasi 
                                            terdapat tiga jenis kegiatan pemanfaatan yang paling banyak digunakan, antara lain penjualan sebanyak 596, 
                                            promosi sebanyak 546, dan untuk kegiatan transaksi sebanyak 446. Sementara itu, untuk jenis kegiatan yang 
                                            jarang memanfaatkan TIK oleh unit usaha pariwisata adalah perencanaan keuangan sebanyak 111 unit. Hal ini menunjukkan bahwa unit usaha pariwisata banyak 
                                            memanfaatkan TIK dalam kegiatan yang berkaitan langsung dengan konsumen. Selain itu, terlihat bahwa 86% unit usaha pariwisata di Kota Batu telah memanfaatkan 
                                            TIK dalam menunjang usahanya, sedangkan 14% tidak menggunakan TIK sama sekali.                                            
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part K -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="selectBox mt-2 me-2">
                                        <form action="">
                                            <select style="width: 250px" class="dropdownunduh1" id="bar-kecamatan-1">
                                                <option value="dimensi1">Pilih Jenis Usaha:</option>
                                                <option value="dimensi1">Jasa Transportasi Wisata</option>
                                                <option value="dimensi2">Jasa Penyedia Makanan dan Minuman</option>
                                                <option value="dimensi3">Penyedia Akomodasi</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-11" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-11">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Pemanfaatan TIK pada Unit Usaha Pariwisata Berdasarkan Kegiatan</h1>
                                            <subtitle id="sub-11">Pada Usaha Jasa Transportasi Wisata</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:350px;">
                                                <canvas id="chart-11"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p id="interpretasi-11" class="text-justify">
                                            Dalam jenis usaha jasa transportasi wisata, kegiatan promosi adalah kegiatan yang paling banyak digunakan, dengan 74 unit usaha menggunakannya, diikuti oleh kegiatan penjualan yang digunakan oleh 72 unit usaha serta untuk kegiatan 
                                            pembuatan dan pengiriman faktur atau tagihan dilakukan oleh 59 unit usaha. Sedangkan jenis 
                                            kegiatan pada jenis usaha jasa transportasi wisata yang jarang memanfaatkan TIK adalah kegiatan 
                                            manajemen tenaga kerja yaitu hanya sebesar 13 unit usaha yang melakukannya.
                                            </p>
                                            <p class="text-justify">
                                            Secara keseluruhan, promosi adalah jenis kegiatan yang paling dominan dalam memanfaatkan TIK pada ketiga jenis usaha pariwisata. Kemudian disusul oleh kegiatan penjualan dan 
                                            pembuatan dan pengiriman faktur atau tagihan, Sehingga dapat disimpulkan bahwa pemanfaatan TIK 
                                            ini banyak dilakukan pada kegiatan yang berhubungan langsung dengan konsumen.                                            
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part L -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="selectBox mt-2 me-2">
                                        <form action="">
                                            <select style="width: 250px" class="dropdownunduh1" id="bar-kecamatan-2">
                                                <option value="dimensi1">Pilih Skala Usaha:</option>
                                                <option value="dimensi1">Mikro</option>
                                                <option value="dimensi2">Kecil</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-12" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-12">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Jumlah Unit Usaha Pariwisata di Kota Batu</h1>
                                            <subtitle id="sub-12">Berdasarkan Jenis Kegiatan Pemanfaatan pada Skala Usaha Mikro</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:350px;">
                                                <canvas id="chart-12"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p id="interpretasi-12" class="text-justify">
                                            Berdasarkan grafik hasil visualisasi, pemanfaatan TIK pada unit usaha pariwisata di kota Batu berdasarkan skala usaha yaitu skala usaha mikro mayoritas melakukan kegiatan penjualan dengan 
                                            memanfaatkan TIK yaitu sebesar 550 unit, kemudian disusul oleh kegiatan promosi sebesar 499 unit usaha, 
                                            dan pada urutan ketiga kegiatan transaksi sebesar 402 unit usaha. Sedangkan kegiatan yang paling jarang 
                                            memanfaatkan TIK adalah kegiatan perencanaan keuangan hanya sebesar 93 unit usaha mikro.
                                            </p>
                                            <p class="text-justify">
                                            Secara keseluruhan, unit usaha pariwisata dengan skala usaha mikro maupun skala usaha kecil banyak memanfaatkan TIK dalam kegiatan yang berkaitan langsung dengan konsumen seperti penjualan, promosi dan transaksi. Dan secara keseluruhan kegiatan yang paling dominan dalam memanfaatkan TIK adalah kegiatan penjualan.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part M -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-13" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-13">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Pemanfaatan TIK pada Unit Usaha Pariwisata</h1>
                                            <subtitle>Berdasarkan Sarana Promosi</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-13"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Berdasarkan grafik, dari 546 Unit usaha pariwisata yang memanfaatkan TIK untuk kegiatan promosi, sekitar 54,76% menggunakan sarana media sosial. Media sosial dimanfaatkan dalam upaya untuk mengenalkan produk atau jasa kepada pada lingkup yang lebih luas dibandingkan hanya di sekitar keluarga. 
                                            </p>
                                            <p class="text-justify">
                                            Pada penggunaan sarana Marketplace dalam kegiatan promosi, 81 unit usaha pariwisata dari total 546 Unit usaha pariwisata yang memanfaatkan TIK untuk kegiatan promosi atau sekitar 14,84%.  Kategori ini didominasi oleh jenis usaha pariwisata jasa transportasi wisata karena berbagai aplikasi marketplace seperti Gojek, Grab, dan Maxim yang memang dalam fiturnya sudah mempromosikan para driver untuk dapat digunakan jasanya. 
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-12 grid-margin stretch-card">
                                        <div>
                                            <p class="text-justify">
                                            Sekitar 30,4% unit usaha pariwisata sudah menggunakan kedua jenis sarana baik media sosial maupun marketplace. Hal ini bertujuan untuk memaksimalkan dalam pengenalan produk ataupun jasa yang ditawarkan sehingga dapat menjangkau pasar yang lebih luas.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part N -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-14" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-14">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Jumlah UUP di Kota Batu yang Memanfaatkan TIK untuk Kegiatan Promosi menurut Sarana</h1>
                                            <subtitle>Berdasarkan Jenis Usaha Pariwisata</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-14"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                                Dari 82 unit usaha jasa transportasi wisata yang memanfaatkan TIK sebagai sarana promosi, Terlihat bahwa sarana marketplace paling banyak digunakan oleh unit usaha jasa transportasi wisata sebagai sarana promosi unit usaha.
                                            </p>
                                            <p class="text-justify">
                                                Kemudian, dari 407 unit usaha jasa penyediaan makanan dan minuman yang memanfaatkan TIK sebagai sarana promosi. Terlihat bahwa sarana media sosial paling banyak digunakan oleh unit usaha jasa penyediaan makanan dan minuman sebagai sarana promosi unit usaha.
                                            </p>
                                            <p class="text-justify">
                                                Sementara itu, dari 57 unit usaha jasa penyediaan akomodasi yang memanfaatkan TIK sebagai sarana promosi, Terlihat bahwa unit usaha penyediaan akomodasi menggunakan media sosial dan marketplace secara bersamaan untuk kegiatan promosi unit usaha.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part O -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-15" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-15">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                            Jumlah UUP di Kota Batu yang Memanfaatkan TIK untuk Kegiatan Promosi menurut Sarana</h1>
                                            <subtitle>Berdasarkan Skala Usaha Pariwisata</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-15"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Berdasarkan grafik hasil visualisasi, dari 546 unit usaha pariwisata yang memanfaatkan TIK sebagai sarana promosi, sebanyak 499 unit merupakan unit usaha mikro, dan 47 unit merupakan unit usaha kecil. Terlihat bahwa sarana media sosial paling banyak digunakan oleh unit usaha mikro sebagai sarana 
                                            promosi unit usaha. Sementara itu,  unit usaha kecil menggunakan media sosial dan marketplace secara bersamaan untuk kegiatan promosi unit usaha.                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part P -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-16" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-16">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Pemanfaatan TIK pada Unit Usaha Pariwisata</h1>
                                            <subtitle>Berdasarkan Sarana Penjualan</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:325px;">
                                                <canvas id="chart-16"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Mayoritas para pemilik atau pengelola unit usaha pariwisata juga menggunakan sarana media sosial dalam melakukan 
                                            penjualan produk atau jasa. Media sosial 
                                            banyak digunakan karena kemudahan dan familiaritas fiturnya bagi pemilik 
                                            atau pengelola usaha pariwisata di Kota Batu dalam melakukan proses penjualan dan kesepakatan dengan pembeli. 
                                            </p>
                                            <p class="text-justify">
                                            Pada penggunaan Marketplace untuk penjualan, sekitar 20,3% dari total seluruh sampel pemilik atau pengelola 
                                            unit usaha pariwisata di kota Batu yang memanfaatkan TIK untuk kegiatan penjualan. Sejalan dengan kegiatan promosi, Kategori ini 
                                            didominasi oleh jenis usaha pariwisata jasa transportasi karena pada aplikasi Marketplace sudah menyediakan fitur untuk melakukan kesepakatan dengan para pengguna jasa. 
                                            Sedangkan pada unit usaha pariwisata yang melakukan proses penjualan produk atau jasa dengan memanfaatkan kedua sarana baik media sosial maupun marketplace sekitar 31,04% 
                                            atau 185 unit usaha pariwisata.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part Q -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-17" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-17">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Jumlah UUP di Kota Batu yang Memanfaatkan TIK untuk Kegiatan Penjualan menurut Sarana</h1>
                                            <subtitle>Berdasarkan Jenis Usaha Pariwisata</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-17"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Berdasarkan grafik, pada jenis usaha makanan dan minuman mayoritas menggunakan media sosial dalam 
                                            kegiatan penjualan produk mereka dengan rincian 225 unit usaha. Sedangkan pada jasa transportasi wisata sebagian 
                                            besar menggunakan sarana marketplace karena banyak transportasi berbasis online yang menggunakan 
                                            aplikasi tersendiri dan tidak menggunakan media sosial dalam menawarkan jasa antar jemput penumpang. 
                                            Pada penyediaan akomodasi, mayoritas sudah menggunakan media sosial maupun marketplace.                                            
                                            </p> 
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part R -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-18" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-18">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                            Jumlah UUP di Kota Batu yang Memanfaatkan TIK untuk Kegiatan Penjualan menurut Sarana</h1>
                                            <subtitle>Berdasarkan Skala Usaha Pariwisata</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-18"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Jika melihat dari sisi skala usaha, baik pada skala mikro maupun kecil memiliki karakteristik yang 
                                            sama dalam pemanfaatan TIK untuk kegiatan penjualan dengan sarana yang tersedia. Media sosial 
                                            menjadi sarana utama dalam melakukan kegiatan penjualan baik skala mikro maupun kecil berturut sebanyak 360 unit 
                                            usaha dan 110 unit usaha.                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part S -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-19" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-19">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Pemanfaatan TIK pada Unit Usaha Pariwisata</h1>
                                            <subtitle>Berdasarkan Jenis Pembayaran</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-19"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Berdasarkan data seluruh sampel amatan dari unit usaha pariwisata di kota Batu, terlihat bahwa mayoritas unit usaha 
                                            pariwisata menyediakan metode pembayaran saat kegiatan transaksi menggunakan jasa transfer bank dan e-wallet. Penggunaan 
                                            jasa transfer bank menjadi sarana utama karena prosedurnya sudah banyak dikenal baik oleh pemilik atau pengelola unit usaha pariwisata maupun konsumen. Selain itu, dana yang diterima langsung masuk ke rekening pemilik atau pengelola dan dapat ditukar menjadi bentuk tunai dengan mudah. Metode transfer bank juga memiliki prosedur yang mudah karena hanya dengan mengirimkan rekening milik pemilik atau 
                                            pengelola kepada pembeli dan proses transaksi dapat dilakukan.                   
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-12 grid-margin stretch-card">
                                        <div>
                                            <p class="text-justify">
                                            Sarana E-Wallet berada pada peringkat dua sebagai sarana dalam melakukan transaksi yang memanfaatkan TIK. 
                                            E-wallet sendiri mulai menjamur sejalan dengan berkembangnya smartphone dan proses digitalisasi masyarakat. Sarana ini 
                                            menjadi primadona bagi sebagian konsumen karena tidak perlu membawa uang dalam bentuk tunai dan cukup menggunakan 
                                            smartphone yang dimiliki saja. Selain itu banyak fitur maupun promo yang disediakan oleh tiap penyedia jasa 
                                            E-wallet dalam berupa cashback maupun fasilitas lainnya yang dapat ditukar seiring banyaknya transaksi yang 
                                            dilakukan. Sarana ini biasanya dikombinasikan dengan QRIS yang mempermudah dalam proses transaksi antar jenis E-Wallet. Hal ini juga menjadikan 
                                            sarana QRIS berada pada rank ketiga yang paling banyak digunakan oleh pemilik atau pengelola unit usaha pariwisata dalam proses transaksi.               
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part T -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-20" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-20">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                                Jumlah UUP di Kota Batu yang Memanfaatkan TIK untuk Kegiatan Transaksi menurut Sarana</h1>
                                            <subtitle>Berdasarkan Jenis Usaha Pariwisata</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:350px;">
                                                <canvas id="chart-20"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Berdasarkan grafik hasil visualisasi, jika dilihat berdasarkan jenis usaha pariwisatanya, dapat terlihat 
                                            bahwa penggunaan sarana transaksi pada jasa penyediaan makanan dan minuman didominasi oleh transfer bank 
                                            dan e-wallet.
                                            </p> 
                                            <p class="text-justify">
                                            Di sisi lain, pada jasa transportasi wisata, sebagian besar unit usaha menggunakan sarana transaksi 
                                            e-wallet, yaitu sebanyak 89 unit usaha. Pada jasa penyediaan akomodasi, penggunaan sarana transaksi didominasi oleh sarana transfer bank, 
                                            yaitu sebanyak 54 unit usaha. Hanya sebagian kecil unit usaha yang 
                                            menggunakan sarana transaksi e-wallet, kartu, dan QRIS. 
                                            </p>
                                            <p class="text-justify">
                                            Dengan demikian, dapat disimpulkan bahwa sarana transaksi berupa 
                                            transfer bank merupakan sarana yang paling banyak digunakan. Selanjutnya, sarana 
                                            transaksi e-wallet menjadi sarana kedua yang paling banyak digunakan. Di samping itu, hanya sebagian 
                                            kecil unit usaha yang menggunakan sarana transaksi dengan kartu dan sarana lainnya.
                                            </p>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Part U -->
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button id="download-21" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-21">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                                        <div>
                                            <h1 class="chart-title judul-chart" style="font-size: 20px; font-weight: 600; text-align: left;">
                                            Jumlah UUP di Kota Batu yang Memanfaatkan TIK untuk Kegiatan Transaksi menurut Sarana</h1>
                                            <subtitle>Berdasarkan Skala Usaha Pariwisata</subtitle>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-21"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                        <div>
                                            <h4>Interpretasi</h4>
                                            <p class="text-justify">
                                            Berdasarkan hasil analisis, sarana transaksi berupa transfer bank dan e-wallet banyak 
                                            digunakan pada usaha mikro. Di sisi lain, penggunaan sarana transaksi yang digunakan pada unit usaha kecil 
                                            cenderung lebih merata. Berdasarkan grafik, terlihat bahwa 41 unit usaha menggunakan sarana transfer bank, 22 
                                            unit usaha menggunakan sarana transaksi QRIS, dan 11 unit usaha menggunakan sarana transaksi dengan kartu. Dengan demikian, 
                                            dapat disimpulkan bahwa sarana transaksi transfer bank dan e-wallet mendominasi untuk kedua skala unit usaha. 
                                            Penggunaan sarana transaksi QRIS dan kartu cukup banyak digunakan. Kemudian, hanya sebagian kecil unit usaha 
                                            yang menggunakan sarana transaksi lainnya.   
                                            </p>                                     
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Dasbor -->
                    <?php include('modal_pemanfaatan_tik.php') ?>
                </div>
            </div>

</section>

<section>
    <!-- Istope -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <!-- Chart JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Chart JS Plugin Boxplotchart -->
    <script src="https://unpkg.com/@sgratzl/chartjs-chart-boxplot"></script>
    <!-- Highchartjs  -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- Highchartjs Heatmap -->
    <script src="https://code.highcharts.com/modules/heatmap.js"></script>
    <!--  Highchartjs Plugin -->
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <!-- Data Chart -->
    <script>
        const uupStatusMemanfaatkan = <?= json_encode($uupStatusMemanfaatkan) ?>;
        const uupStatusMemanfaatkanJenis = <?= json_encode($uupStatusMemanfaatkanJenis) ?>;
        const uupStatusMemanfaatkanJenisSkala = <?= json_encode($uupStatusMemanfaatkanJenisSkala) ?>;
    </script>

    <!-- Import Chart -->
    <script src="<?= base_url('pvd/js/riset4/doughnut_pemanfaatan.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dodge_jenis_status.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dodge_skala_status.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/bar_perangkat.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dodge_jenis_perangkat.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dodge_skala_perangkat.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/bar_aplikasi.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dodge_jenis_aplikasi.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dodge_skala_aplikasi.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/bar_kegiatan.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/bar_kegiatan.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dodge_bar_1.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dodge_bar_2.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/bar_media.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dodge_jenis_media.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dodge_skala_media.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/bar_media_penjualan.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dodge_jenis_media_penjualan.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dodge_skala_media_penjualan.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/bar_transaksi.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dodge_jenis_transaksi.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset4/dodge_skala_transaksi.js') ?>"></script>

    <!-- Fungsi Unduh Chart -->
    <script src="<?= base_url('pvd/js/riset4/button_download_2_3.js') ?>"></script>
</section>
<?= $this->endSection(); ?>