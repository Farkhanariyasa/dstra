<?= $this->extend('pvd/layout/dasbor/template'); ?>
  <?= $this->section('content'); ?>
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">
        <header class="section-header">
          <h6 style="color: #4b395f;"><strong>Unit Usaha Pariwisata (UUP)</strong>
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

          <!-- Charts and Interpretations -->
          <div class="portfolio-item filter-riset4-semua" onresize="responsivefonts()">
              <div class="isi-tujuan shadow mt-0 mb-0">
                  <h4 class="card-title judul-card">Statistik Unit Usaha Pariwisata di Kota Batu</h4>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card shadow">
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
                                                Persentase Unit Usaha Pariwisata di Kota Batu</h1>
                                                <subtitle>Berdasarkan Jenis Usaha Pariwisata</subtitle>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-6 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="chart-1"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                            <div>
                                                <h4>Interpretasi</h4>
                                                <p class="text-justify">
                                                Grafik di atas menunjukkan bahwa jasa penyediaan makanan dan minuman di Kota Batu sangat mendominasi dibandingkan jasa transportasi wisata serta penyediaan akomodasi, yaitu sebesar 74,1 persen dari 925 unit usaha, atau sebanyak 685 unit usaha di bidang jasa penyediaan makanan dan minuman. Sedangkan jasa transportasi serta penyediaan akomodasi hanya sebesar 17,7 persen dan 8,2 persen. Hal ini juga sejalan dengan adanya pusat kuliner seperti Alun-Alun Kota Batu, maupun penjual makanan dan minuman yang ada di tempat-tempat wisata lainnya.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 grid-margin stretch-card">
                            <div class="card shadow">
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
                                                Persentase Unit Usaha Pariwisata di Kota Batu</h1>
                                                <subtitle>Berdasarkan Skala Usaha</subtitle>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-6 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="chart-2"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                            <div>
                                                <h4>Interpretasi</h4>
                                                <p class="text-justify">
                                                Dari hasil lapangan menyatakan, berdasarkan total sampel yang terpilih sebanyak 925 unit usaha pariwisata, dapat diketahui bahwa sebanyak 870 orang atau sebesar 94.054% dari total sampel unit usaha pariwisata berskala Mikro, artinya 870 unit usaha pariwisata yang terpilih sebagai sample memiliki jumlah tenaga kerja 1-4 pekerja. Selain itu, terdapat 55 unit usaha pariwisata atau sebesar 5.946% yang unit usaha pariwisata berskala kecil , artinya 55 unit usaha pariwisata yang terpilih sebagai sample memiliki jumlah tenaga kerja lebih 5-19 pekerja. Dari hasil tersebut dapat dianalisis bahwa  terjadi ketimpangan pada kedua skala unit usaha pariwisata tersebut.                                                 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 grid-margin stretch-card">
                            <div class="card shadow">
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
                                                Jumlah Unit Usaha Pariwisata di Kota Batu</h1>
                                                <subtitle>Berdasarkan Skala Usaha Menurut Jenis Usaha Pariwisata</subtitle>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-7 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="chart-3"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                            <div>
                                                <h4>Interpretasi</h4>
                                                <p class="text-justify">
                                                Dari data hasil lapangan ditemukan bahwa jenis usaha pariwisata yaitu Jasa Transportasi Wisata 
                                                sebanyak 160 usaha Jasa Transportasi Wisata berskala mikro dan 4 usaha Jasa Transportasi Wisata 
                                                berskala kecil. Mayoritas pada usaha Jasa Transportasi Wisata di kota Batu dijalankan oleh pelaku 
                                                usaha Jasa Transportasi Wisata yang berbekal membutuhkan tenaga kerja 1-4 atau bahkan pelaku usaha 
                                                Jasa Transportasi Wisata sekaligus sebagai tenaga kerja. 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-12 grid-margin stretch-card">
                                            <div>
                                                <p class="text-justify">
                                                Kemudian untuk jenis usaha pariwisata 
                                                yaitu Jasa Penyediaan Makanan dan Minuman, Mayoritas pada usaha Jasa Penyediaan Makanan dan 
                                                Minuman berskala mikro karena banyak ditemukan usaha yang bergerak pada bidang warung makan, 
                                                Bakso, rujak, dan lain-lain dimana pada jenis usaha tersebut tidak terlalu banyak membutuhkan jumlah tenaga 
                                                kerja. Selanjutnya pada jenis usaha pariwisata yaitu Penyediaan Akomodasi, Mayoritas pada usaha 
                                                Penyediaan Akomodasi mikro ini karena banyak ditemukan bahwa jika pelaku usaha Penyediaan 
                                                Akomodasi berjibaku sekaligus menjadi pengelola usaha Penyediaan Akomodasi tersebut. Hal itu 
                                                menyebabkan bahwa pada tingkat tidak kebutuhan tenaga kerja lain pada usaha Penyediaan Akomodasi 
                                                ini.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 grid-margin stretch-card">
                            <div class="card shadow">
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
                                                Persentase Unit Usaha Pariwisata di Kota Batu</h1>
                                                <subtitle>Berdasarkan Lokasi Usaha</subtitle>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-6 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="chart-4"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                            <div>
                                                <h4>Interpretasi</h4>
                                                <p class="text-justify">
                                                Dari keseluruhan sampel, sebanyak 513 unit usaha pariwisata menetapkan lokasi bangunan usahanya berada pada lokasi ia bertempat tinggal. Hal ini dikarenakan banyak pemilik atau pengelola yang baru merintis usaha belum memiliki modal dalam menyewa tempat. Selain itu, pemilik atau pengelola unit usaha pariwisata merasa bahwa lebih hemat jika menggunakan rumahnya sebagai tempat untuk merintis usaha. Sedangkan, 45% sisanya memilih lokasi usaha untuk berjualan berada di luar bangunan fisik rumah tangga.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 grid-margin stretch-card">
                            <div class="card shadow">
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
                                                Persentase Unit Usaha Pariwisata di Kota Batu</h1>
                                                <subtitle>Berdasarkan Jenis Usaha Pariwisata Menurut Lokasi atau Tempat Usaha</subtitle>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-6 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="chart-5"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                            <div>
                                                <h4>Interpretasi</h4>
                                                <p class="text-justify">
                                                Jika dirinci lebih lanjut Lokasi Usaha Pariwisata dari segi  Jenis Usaha Pariwisata nya,  Rata - rata dari semua jenis usaha pariwisata berlokasi pada Bangunan Fisik Rumah. Hal itu dapat ditunjukkan pada tabel bahwa 89 dari 164 usaha Jasa Transportasi, 375 dari 685 usaha Jasa Penyediaan Makanan dan Minuman, dan 49 dari 76 usaha Penyediaan Akomodasi berlokasi pada Bangunan Fisik Rumah Tangga. Hal tersebut juga menandakan bahwa secara rata - rata rumah tangga yang memiliki usaha sekaligus memiliki aspek tempat / fasilitas pada bangunan fisik rumah tangga untuk menjalani usahanya sehari hari. Hal ini memungkinkan dikarenakan oleh kebanyakan rumah tangga fasilitas bangunan fisik yang dimiliki memadai dan mendukung untuk mendirikan usaha yang se bangunan fisik rumah tangga.                                                 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 grid-margin stretch-card">
                            <div class="card shadow">
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
                                                Persentase Unit Usaha Pariwisata di Kota Batu</h1>
                                                <subtitle>Berdasarkan Skala Usaha Menurut Lokasi atau Tempat Usaha</subtitle>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-6 grid-margin">
                                            <div>
                                                <div class = "chartBox" style=" height:300px;"> 
                                                    <canvas id="chart-6"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                            <div>
                                                <h4>Interpretasi</h4>
                                                <p class="text-justify">
                                                Jika dilihat berdasarkan skala usahanya, ditemukan bahwa secara rata - rata 
                                                dari semua skala usaha berlokasi pada Bangunan Fisik Rumah Tangga. 481 dari 
                                                870 usaha yang berskala mikro dan 32 dari 55 usaha yang berskala kecil berlokasi 
                                                di Luar Bangunan Fisik Rumah Tangga. Hal ini juga sejalan dengan analisis 
                                                sebelumnya bahwasannya secara rata - rata dari semua usaha pariwisata berlokasi 
                                                di Luar Bangunan Fisik Rumah Tangga.                                                  </p>
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

          <!-- Modal Dasbor -->
          <?php include('modal_usaha_pariwisata.php') ?>
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
        const uupKotaBatuJenis = <?= json_encode($uupKotaBatuJenis) ?>; 
        const uupKotaBatuSkala = <?= json_encode($uupKotaBatuSkala) ?>; 
        const uupKotaBatuLokasi = <?= json_encode($uupKotaBatuLokasi) ?>; 
        const uupKotaBatuJenisSkala = <?= json_encode($uupKotaBatuJenisSkala) ?>; 
        const uupKotaBatuJenisLokasi = <?= json_encode($uupKotaBatuJenisLokasi) ?>; 
        const uupKotaBatuSkalaLokasi = <?= json_encode($uupKotaBatuSkalaLokasi) ?>;  
      </script>

      <!-- Import Chart -->
      <script src="<?= base_url('pvd/js/riset4/doughnut_jenis.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/doughnut_skala.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/doughnut_lokasi.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/dodge_jenis_skala.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/dodge_jenis_lokasi.js') ?>"></script>
      <script src="<?= base_url('pvd/js/riset4/dodge_skala_lokasi.js') ?>"></script>

      <!-- Fungsi Unduh Chart -->
      <script src="<?= base_url('pvd/js/riset4/button_download_2_2.js') ?>"></script>
    </section>
  <?= $this->endSection(); ?>