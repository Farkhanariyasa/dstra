<div class="tab-content" id="pills-tabContent">
    <!-- Algoritma 1 -->
    <div class="tab-pane fade show active" id="pills-algoritma1" role="tabpanel" aria-labelledby="pills-algoritma1-tab" tabindex="0">
        <div class="isi-tujuan shadow mt-0 mb-0">
            <h4 class="card-title judul-card">Algoritma Double Counting (Metode Penghitungan Jarak Antar Staypoint)</h4>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-0 col-lg-12 grid-margin">
                                        <div class="pr-3 pl-3">
                                            <h3 class="text-center"><b>Alur Algoritma</b></h3>
                                            <!-- <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-1"></canvas>
                                            </div> -->
                                            <div class="pt-3">
                                                <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">1.</span> <i>Data cleaning</i> dan pengecekan <i>quality assurance</i></p>
                                                <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">2.</span> Periode analisis dalam algoritma DC adalah selama sebulan dan setahun (akan dibandingkan)</p>
                                                <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">3.</span> Menentukan lokasi <i>home</i> dan <i>work</i> untuk setiap nomor dengan metode AMDA, sehingga diperoleh hasil sebagai berikut</p>
                                                <div class="row">
                                                    <div class="col-lg-12 grid-margin stretch-card">
                                                        <div class="card shadow rounded-4">
                                                            <div class="card-body">
                                                                <img src="<?= base_url('pvd/img/Riset1/algoritma1_1.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="text-left">kendala: beberapa nomor memiliki lokasi <i>home</i> atau <i>work</i> yang null di beberapa bulan (lebih banyak <i>work</i>), hal ini karena metode AMDA membutuhkan data <i>record</i> yang lengkap untuk setiap bulan. Lokasi home atau work yang bernilai null akan diimputasi menggunakan lokasi home atau work yang tidak bernilai null pada bulan yang bersesuaian.</p>
                                                <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">4.</span> Nomor-nomor yang telah dilakukan penentuan lokasi home per-bulan, akan diambil modus dari lokasi home-nya selama rentang waktu 12 bulan ke belakang (Des 2021-Nov 2022).</p>
                                                <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">5.</span> Jika didapati 2 atau lebih modus home, maka modus ditentukan berdasarkan banyaknya record yang muncul di setiap harinya (N_date) pada bulan-bulan yang memiliki lokasi home yang sama.</p>
                                                <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">6.</span> Modus lokasi home untuk setiap nomor akan dilakukan pengelompokan berdasarkan lokasi administratif setingkat provinsi, kemudian kabupaten/kota. Penggunaan home didasarkan pada keakuratan (akurasi) metode AMDA yang lebih baik dalam mengidentifikasi home pelanggan (province: 98,8%, district: 88,7%) dibandingkan mengidentifikasi work pelanggan (province: 98,9%, district: 70,4%)</p>
                                                <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">7.</span> Nomor-nomor yang memiliki lokasi home pada Provinsi dan Kabupaten/Kota yang sama (berada dalam 1 kelompok) akan dianalisis lebih lanjut. Contoh data:</p>
                                                <div class="row">
                                                    <div class="col-lg-12 grid-margin stretch-card">
                                                        <div class="card shadow rounded-4">
                                                            <div class="card-body">
                                                                <img src="<?= base_url('pvd/img/Riset1/algoritma1_2.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="text-left">Terdapat 7 kelompok yang berisikan nomor-nomor dengan lokasi home yang sama di setiap kelompoknya.</p>
                                                <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">8.</span> Tentukan bulan yang akan dianalisis berdasarkan banyaknya record yang muncul di setiap harinya (N_date). Bulan yang memiliki total N_date tertinggi dari seluruh nomor dalam satu kelompok akan menjadi bulan yang dilakukan analisis.</p>
                                                <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">9.</span> Akan digunakan data baru yang masih dalam bentuk raw data (bukan hasil dari preprocessing AMDA). Hal ini dikarenakan pada algoritma ini akan dianalisis untuk setiap event yang terjadi, termasuk juga pola perjalanan pelanggan (bukan hanya event yang terjadi setelah dilakukan eliminasi unusual speed < 10 km/jam) </p>
                                                        <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">10.</span> Untuk setiap kelompok, ambil 1 nomor yang akan dianalisis</p>
                                                        <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">11.</span> Dalam 1 hari dibagi menjadi 2 interval, dengan rincian Interval 1 (07.00-18.59) dan Interval 2 (19.00-06.59).</p>
                                                        <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">12.</span> Antar lokasi koordinat setiap record, secara berurutan dihitung speed-nya untuk mengeliminasi pergerakan yang tidak wajar karena adanya lag record. Contoh lag record:</p>
                                                        <div class="row">
                                                            <div class="col-lg-12 grid-margin stretch-card">
                                                                <div class="card shadow rounded-4">
                                                                    <div class="card-body">
                                                                        <img src="<?= base_url('pvd/img/Riset1/algoritma1_3.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="list-styled">
                                                            <li>Speed yang tidak wajar antara 2 lokasi koordinat record, yaitu lebih dari 100 km/jam akan dieliminasi.</li>
                                                            <li>Penghitungan jarak antara 2 lokasi koordinat menggunakan haversine distance.</li>
                                                        </ul>
                                                        <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">13.</span> Setelah dilakukan eliminasi pergerakan yang tidak wajar, kemudian untuk setiap interval, dihitung kemunculan setiap koordinat lokasi (anchor) di setiap harinya. Contoh:</p>
                                                        <div class="row">
                                                            <div class="col-lg-12 grid-margin stretch-card">
                                                                <div class="card shadow rounded-4">
                                                                    <div class="card-body">
                                                                        <img src="<?= base_url('pvd/img/Riset1/algoritma1_4.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="text-left">Pada Interval 1, terdapat 2 koordinat lokasi (anchor) yaitu (106.90133,-6.24925) dan (106.90658,-6.2501) dengan jumlah masing-masing record adalah:</p>
                                                        <ol class="list-styled">
                                                            <li>(106.90133,-6.24925) = 3</li>
                                                            <li>(106.90658,-6.2501) = 6</li>
                                                        </ol>
                                                        <p class="text-left">Anchor yang memiliki jumlah kemunculan record lebih banyak akan dijadikan sebagai kandidat utama. Dalam hal ini adalah anchor (106.90658,-6.2501)</p>
                                                        <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">14.</span> Hitung jarak antara anchor yang menjadi kandidat utama dengan anchor lainnya pada interval yang sama dengan menggunakan Haversine Distance dan lakukan eliminasi apabila anchor lainnya berjarak kurang dari 500 m. Formula Haversine merupakan suatu metode untuk mengetahui jarak antar dua titik dengan memperhitungkan bahwa bumi bukanlah sebuah bidang datar namun adalah sebuah bidang yang memiliki derajat kelengkungan. Penggunaan rumus ini mengasumsikan pengabaian efek ellipsoidal, cukup akurat untuk sebagian besar perhitungan, juga pengabaian ketinggian bukit dan kedalaman lembah di permukaan bumi.</p>
                                                        <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">15.</span> Anchor-anchor yang menjadi kandidat utama disebut sebagai staypoint.</p>
                                                        <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">16.</span> Setelah diperoleh staypoint untuk setiap interval di setiap harinya untuk seluruh nomor hasil dari penyaringan lokasi home yang sama, ambil 1 nomor yang akan dianalisis untuk dibandingkan dengan nomor-nomor lainnya.</p>
                                                        <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">17.</span> Hitung jarak haversine antara staypoint pada nomor yang akan dianalisis (nomor 1) dengan staypoint pada nomor lainnya (nomor 2) pada hari dan interval yang bersesuaian. Contoh:</p>
                                                        <div class="row">
                                                            <div class="col-lg-6 grid-margin stretch-card">
                                                                <div class="card shadow rounded-4">
                                                                    <div class="card-body">
                                                                        <h3 style="font-weight: bold;">Nomor 1</h3>
                                                                        <img src="<?= base_url('pvd/img/Riset1/algoritma1_4.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 grid-margin stretch-card">
                                                                <div class="card shadow rounded-4">
                                                                    <div class="card-body">
                                                                        <h3 style="font-weight: bold;">Nomor 2</h3>
                                                                        <img src="<?= base_url('pvd/img/Riset1/algoritma1_5.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="text-left"> Misal Nomor 1 memiliki 2 staypoint pada interval 1 dan Nomor 2 memiliki 3 staypoint pada interval 1. Maka untuk setiap kombinasi staypoint akan dihitung jarak haversinenya. yaitu d1 = hav(SP1No1 - SP1No2), d2 = hav(SP1No1 - SP2No2), d3 = hav(SP1No1 - SP3No2), d4 = hav(SP2No1 - SP1No2), d5 = hav(SP2No1 - SP2No2), d6 = hav(SP2No1 - SP3No2).</p>
                                                        <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">18.</span> Dari ke 6 kombinasi penghitungan jarak antar 2 staypoint, yaitu d1, d2, d3, d4, d5, dan d6. Pilih jarak terdekat antar 2 staypoint. Misal jarak terdekat adalah staypoint d3 = 0,02 Km = 20 m, maka untuk Interval 1 pada nomor 1 dan 2 di hari yang bersesuaian memiliki sekumpulan staypoint yang berjarak sekitar 20 m.</p>
                                                        <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">19.</span> Ulangi langkah 17 dan 18 untuk menghitung jarak haversine dari staypoint terpendek pada interval 2</p>
                                                        <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">20.</span> Ulangi langkah penghitungan jarak haversine dari staypoint terpendek pada interval 1 dan interval 2 di setiap harinya selama satu bulan dan satu tahun</p>
                                                        <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">21.</span> Hasil dari penghitungan jarak haversine di satu interval akan diselisihkan dengan hasil penghitungan jarak haversine di interval berikutnya. Misal pada interval 1 diperoleh d1 = 20 m dan pada interval 2 diperoleh d2=15 m, maka D = |d1 - d2| = |20-15| = 5, begitupun seterusnya</p>
                                                        <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">22.</span> Dari langkah 21, didapatkan sebuah variabel berupa rata-rata jarak kestabilan antar interval selama setahun untuk perbandingan nomor-nomor yang berada di kelompok yang sama (Memiliki lokasi home yang sama)</p>
                                                        <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">23.</span> Untuk menentukan entitas double counting, akan ditentukan threshold (ambang batas) rata-rata jarak kestabilan antar interval yang dapat mengklasifikasikan mana entitas double counting dan mana yang bukan entitas double counting dengan baik</p>
                                                        <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">24.</span> Penentuan threshold dilakukan dengan melakukan visualisasi decision tree yang dibangun dari variabel rata-rata jarak kestabilan antar interval dan variabel data kelas actual double counting. Contoh hasil pengolahan (10 perbandingan msisdn):</p>
                                                        <div class="row">
                                                            <div class="col-lg-12 grid-margin stretch-card">
                                                                <div class="card shadow rounded-4">
                                                                    <div class="card-body">
                                                                        <img src="<?= base_url('pvd/img/Riset1/algoritma1_6.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">25.</span> Penggunaan decision tree untuk menentukan threshold memanfaatkan gini impurity yang merupakan sebuah fungsi untuk menentukan seberapa baik decision tree di-split. Contoh hasil visualisasi decision tree dari data pada poin 24:</p>
                                                        <div class="row">
                                                            <div class="col-lg-12 grid-margin stretch-card">
                                                                <div class="card shadow rounded-4">
                                                                    <div class="card-body">
                                                                        <img src="<?= base_url('pvd/img/Riset1/algoritma1_7.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="text-left"> Dari hasil visualisasi decision tree diatas, untuk root node (root pertama), decision tree melakukan split dengan gini impurity di angka rata-rata jarak kestabilan antar interval <= 0.402 (yang artinya angka 0.402 merupakan rata-rata jarak kestabilan antar interval terbaik untuk membedakan kelas no dan kelas yes pada variabel is_double)</p>
                                                                <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">26.</span> Berdasarkan hasil dari poin 25, maka akan ditentukan threshold rata-rata jarak kestabilan antar interval <= 0.402 untuk kelas yang diprediksi yes (entitas double counting) dan rata-rata jarak kestabilan antar interval>0.402 untuk kelas yang diprediksi no (bukan entitas double counting)</p>
                                                                <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">27.</span> Terapkan langkah-langkah ini pada masing-masing waktu referensi yaitu sebulan dan setahun. Lakukan evaluasi waktu referensi mana yang memberikan hasil terbaik dalam mengidentifikasi nomor-nomor double counting dengan cara menghitung precision, recall, akurasi dan f1-score untuk masing-masing waktu referensi kemudian membandingkannya satu sama lain.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                        <div>
                                            <h3><b>Story</b></h3>
                                            <p class="text-justify">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.
                                            </p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-0 col-lg-7 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                        <div>
                                            <h3><b>Story</b></h3>
                                            <p class="text-justify">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Algoritma 2 -->
    <div class="tab-pane fade " id="pills-algoritma2" role="tabpanel" aria-labelledby="pills-algoritma2-tab" tabindex="0">
        <!-- Nav for types of Algorithm -->
        <div class="col-lg-12 d-flex justify-content-center">
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-primer-tab" data-bs-toggle="pill" data-bs-target="#pills-primer" type="button" role="tab" aria-controls="pills-primer" aria-selected="true">Tanpa Pembentukan Staypoint</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-sekunder-tab" data-bs-toggle="pill" data-bs-target="#pills-sekunder" type="button" role="tab" aria-controls="pills-sekunder" aria-selected="false">Pembentukan Staypoint</button>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <!-- Without forming staypoint -->
            <div class="tab-pane fade show active" id="pills-primer" role="tabpanel" aria-labelledby="pills-primer-tab">
                <div class="isi-tujuan shadow mt-0 mb-0">
                    <h4 class="card-title judul-card">Algortima Double Counting H3 Tanpa Pembentukan Staypoint</h4>
                    <div class="card-body">
                        <div class="row">
                            <!-- <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow rounded-4">
                                    <div class="pb-2 card-body">
                                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                            <div class="me-1 mt-1 justify-content-end align-item-end">
                                                <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-0 col-lg-7 grid-margin">
                                                <div>
                                                    <div class="chartBox" style=" height:300px;">
                                                        <canvas id="chart-1"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                                <div>
                                                    <h3><b>Story</b></h3>
                                                    <p class="text-justify">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow rounded-4">
                                    <div class="pb-2 card-body">
                                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                            <div class="me-1 mt-1 justify-content-end align-item-end">
                                                <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-0 col-lg-12 grid-margin">
                                                <div class="pr-3 pl-3">
                                                    <h3><b>Alur Algoritma</b></h3>
                                                </div>
                                                <div class="pt-3">
                                                    <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">1.</span> <i>Data cleaning</i> dan pengecekan <i>quality assurance</i></p>
                                                    <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">2.</span> Periode analisis dalam algoritma DC adalah selama sebulan dan setahun (akan dibandingkan)</p>
                                                    <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">3.</span> Menentukan lokasi <i>home</i> dan <i>work</i> untuk setiap nomor dengan metode AMDA, sehingga diperoleh hasil sebagai berikut</p>
                                                    <div class="row">
                                                        <div class="col-lg-12 grid-margin stretch-card">
                                                            <div class="card shadow rounded-4">
                                                                <div class="card-body">
                                                                    <img src="<?= base_url('pvd/img/Riset1/algoritma1_1.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-left lh-base">kendala: beberapa nomor memiliki lokasi home atau work yang null di beberapa bulan (lebih banyak work), hal ini karena metode AMDA membutuhkan data record yang lengkap untuk setiap bulan. Lokasi home atau work yang bernilai null akan diimputasi menggunakan lokasi home atau work yang tidak bernilai null pada bulan yang bersesuaian.</p>
                                                    <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">4.</span> Nomor-nomor yang telah dilakukan penentuan lokasi home, akan diambil modus dari lokasi home-nya selama rentang waktu 12 bulan ke belakang (Des 2021-Nov 2022).</p>
                                                    <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">5.</span> Jika didapati 2 atau lebih modus home, maka modus ditentukan berdasarkan banyaknya record yang muncul di setiap harinya (N_date) pada bulan-bulan yang memiliki lokasi home yang sama.</p>
                                                    <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">6.</span> Modus lokasi home untuk setiap nomor akan dilakukan pengelompokan berdasarkan lokasi administratif setingkat provinsi, kemudian kabupaten/kota. Penggunaan home didasarkan pada keakuratan (akurasi) metode AMDA yang lebih baik dalam mengidentifikasi home pelanggan (province: 98,8%, district: 88,7%) dibandingkan mengidentifikasi work pelanggan (province: 98,9%, district: 70,4%)</p>
                                                    <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold">7.</span> Nomor-nomor yang memiliki lokasi home pada Provinsi dan Kabupaten/Kota yang sama (berada dalam 1 kelompok) akan dianalisis lebih lanjut. Contoh data:</p>
                                                    <div class="row">
                                                        <div class="col-lg-12 grid-margin stretch-card">
                                                            <div class="card shadow rounded-4">
                                                                <div class="card-body">
                                                                    <img src="<?= base_url('pvd/img/Riset1/algoritma1_2.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">8.</span> Akan digunakan data baru yang masih dalam bentuk raw data (bukan hasil dari preprocessing AMDA). Hal ini dikarenakan pada algoritma ini akan dianalisis untuk setiap event yang terjadi, termasuk juga pola perjalanan pelanggan (bukan hanya event yang terjadi setelah dilakukan eliminasi unusual speed < 10 km/jam)</p>
                                                            <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">9.</span> Untuk masing-masing nomor di kelompok yang sama, antar lokasi koordinat setiap record, secara berurutan dihitung speed-nya untuk mengeliminasi pergerakan yang tidak wajar karena adanya lag record. Contoh lag record:</p>
                                                            <div class="row">
                                                                <div class="col-lg-12 grid-margin stretch-card">
                                                                    <div class="card shadow rounded-4">
                                                                        <div class="card-body">
                                                                            <img src="<?= base_url('pvd/img/Riset1/algoritma1_3.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="list-styled">
                                                                <li>Speed yang tidak wajar antara 2 lokasi koordinat record, yaitu lebih dari 100 km/jam akan dieliminasi.</li>
                                                                <li>Penghitungan jarak antara 2 lokasi koordinat menggunakan haversine distance.</li>
                                                            </ul>
                                                            <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">10.</span> Setelah dilakukan eliminasi pergerakan yang tidak wajar, setiap nomor yang ada di kelompok yang sama selama periode setahun (Desember 2021-November 2022), akan dikonversi ke dalam bentuk hexagon yang memiliki cell id unik.</p>
                                                            <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">11.</span> Resolusi H3 yang disarankan yaitu mulai dari resolusi 8 hingga 12. Pada langkah ini akan digunakan resolusi 8.</p>
                                                            <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">12.</span> Ambil 1 nomor yang akan di analisis (misal nomor 01)</p>
                                                            <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">13.</span> Eliminasi indeks h3 (hexagon) yang duplicate selama periode waktu referensi (setahun) sehingga hanya diperoleh indeks h3 yang unik</p>
                                                            <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">14.</span> Hitung jumlah hexagon milik nomor 01 yang beririsan dengan hexagon milik nomor lain (dalam kelompok yang sama)</p>
                                                            <p class="text-left">Contoh :</p>
                                                            <p class="text-left">Misal nomor 01 memiliki sebaran hexagon sebagai berikut:</p>
                                                            <div class="row">
                                                                <div class="col-lg-12 grid-margin stretch-card">
                                                                    <div class="card shadow rounded-4">
                                                                        <div class="card-body">
                                                                            <img src="<?= base_url('pvd/img/Riset1/algoritma2_1.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="text-left">Misal nomor 02 (nomor yang akan dibandingkan) memiliki sebaran hexagon sebagai berikut:</p>
                                                            <div class="row">
                                                                <div class="col-lg-12 grid-margin stretch-card">
                                                                    <div class="card shadow rounded-4">
                                                                        <div class="card-body">
                                                                            <img src="<?= base_url('pvd/img/Riset1/algoritma2_2.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="text-left">Maka jika kita meng-overlay-kan layer hexagon nomor 01 dengan layer hexagon nomor 02, akan didapatkan sebaran hexagon sebagai berikut:</p>
                                                            <div class="row">
                                                                <div class="col-lg-12 grid-margin stretch-card">
                                                                    <div class="card shadow rounded-4">
                                                                        <div class="card-body">
                                                                            <img src="<?= base_url('pvd/img/Riset1/algoritma2_3.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="text-left">Jumlah hexagon yang beririsan adalah sebagai berikut:</p>
                                                            <div class="row">
                                                                <div class="col-lg-12 grid-margin stretch-card">
                                                                    <div class="card shadow rounded-4">
                                                                        <div class="card-body">
                                                                            <img src="<?= base_url('pvd/img/Riset1/algoritma2_4.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="text-left">Sehingga antara nomor 01 dengan nomor 02 memiliki jumlah hexagon yang beririsan sebanyak 19 hexagon.</p>
                                                            <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">15.</span> Ulangi langkah 13 dengan menghitung jumlah hexagon nomor 01 yang beririsan dengan hexagon nomor lainnya selain nomor 02 (dalam kelompok yang sama)</p>
                                                            <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">16.</span> Dari langkah 13 dan 14, didapatkan sebuah variabel yaitu jumlah irisan untuk setiap 2 nomor yang dibandingkan dalam kelompok yang sama.</p>
                                                            <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">17.</span> Untuk menentukan entitas double counting, akan ditentukan threshold (ambang batas) jumlah irisan yang dapat mengklasifikasikan mana entitas double counting dan mana yang bukan entitas double counting dengan baik</p>
                                                            <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">18.</span> Penentuan threshold dilakukan dengan melakukan visualisasi decision tree yang dibangun dari variabel jumlah irisan dan variabel data kelas actual double counting. Contoh hasil pengolahan (10 perbandingan msisdn):</p>
                                                            <div class="row">
                                                                <div class="col-lg-12 grid-margin stretch-card">
                                                                    <div class="card shadow rounded-4">
                                                                        <div class="card-body">
                                                                            <img src="<?= base_url('pvd/img/Riset1/algoritma1_6.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">19.</span> Penggunaan decision tree untuk menentukan threshold memanfaatkan gini impurity yang merupakan sebuah fungsi untuk menentukan seberapa baik decision tree di-split.</p>
                                                            <div class="row">
                                                                <div class="col-lg-12 grid-margin stretch-card">
                                                                    <div class="card shadow rounded-4">
                                                                        <div class="card-body">
                                                                            <img src="<?= base_url('pvd/img/Riset1/algoritma2_5.jpeg') ?>" class="img-fluid text-center mt-2 ml-2 mr-2 mb-3" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="text-left">Dari hasil visualisasi decision tree diatas, untuk root node (root pertama), decision tree melakukan split dengan gini impurity di angka jumlah irisan <=79,5 (yang artinya angka 79,5 merupakan jumlah irisan terbaik untuk membedakan kelas no dan kelas yes pada variabel is_double)</p>
                                                            <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">20.</span> Berdasarkan hasil dari poin 18, maka akan ditentukan threshold jumlah irisan <= 79 untuk kelas yang diprediksi no (bukan entitas double counting) dan jumlah irisan >79 untuk kelas yang diprediksi yes (entitas double counting)</p>
                                                            <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">21.</span> Ulangi langkah 11 dengan menggunakan resolusi 9, begitu seterusnya hingga resolusi 12.</p>
                                                            <p class="text-left lh-base"><span style="font-size: 1.25rem; font-weight:bold;">22.</span> Lakukan evaluasi resolusi H3 mana yang memberikan hasil terbaik dalam mengidentifikasi nomor-nomor double counting dengan cara menghitung precision, recall, akurasi dan f1-score untuk masing-masing resolusi kemudian membandingkannya satu sama lain.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- With forming staypoint -->
            <div class="tab-pane fade show active" id="pills-sekunder" role="tabpanel" aria-labelledby="pills-sekunder-tab">
                <div class="isi-tujuan shadow mt-0 mb-0">
                    <h4 class="card-title judul-card">Algortima Double Counting H3 Dengan Pembentukan Staypoint</h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow rounded-4">
                                    <div class="pb-2 card-body">
                                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                            <div class="me-1 mt-1 justify-content-end align-item-end">
                                                <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-0 col-lg-7 grid-margin">
                                                <div>
                                                    <div class="chartBox" style=" height:300px;">
                                                        <canvas id="chart-1"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                                <div>
                                                    <h3><b>Story</b></h3>
                                                    <p class="text-justify">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow rounded-4">
                                    <div class="pb-2 card-body">
                                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                            <div class="me-1 mt-1 justify-content-end align-item-end">
                                                <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-0 col-lg-7 grid-margin">
                                                <div>
                                                    <div class="chartBox" style=" height:300px;">
                                                        <canvas id="chart-1"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                                <div>
                                                    <h3><b>Story</b></h3>
                                                    <p class="text-justify">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Algoritma 3 -->
    <div class="tab-pane fade " id="pills-algoritma3" role="tabpanel" aria-labelledby="pills-algoritma3-tab" tabindex="0">
        <div class="isi-tujuan shadow mt-0 mb-0">
            <h4 class="card-title judul-card">Algoritma 3</h4>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-0 col-lg-7 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                        <div>
                                            <h3><b>Story</b></h3>
                                            <p class="text-justify">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-0 col-lg-7 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                        <div>
                                            <h3><b>Story</b></h3>
                                            <p class="text-justify">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>