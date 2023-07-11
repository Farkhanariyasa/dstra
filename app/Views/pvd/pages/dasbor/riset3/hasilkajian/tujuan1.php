<?= $this->extend('pvd/layout/dasbor/template'); ?>
<?= $this->section('content'); ?>
<?php include('modal_tujuan1.php') ?>
<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
      <h6 style="color: #4b395f;"><strong>Memperoleh gambaran sosiodemografi dan kualitas tenaga kerja di industri pariwisata.</strong>
      </h6>
    </header>
    <hr class="hrjudul">
    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <!-- <li data-filter="*" class="filter-active">Semua</li> -->
          <li data-filter=".filter-tujuan1-tabulasi" class="filter-active">Tabulasi</li>
          <li data-filter=".filter-tujuan1-grafik">Grafik & Interpretasi</li>
        </ul>
      </div>
    </div>
    <div class="row portfolio-container">
      <div class="portfolio-item filter-tujuan1-tabulasi">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card shadow" style="border-radius: 15px;">
            <div class="card-body">
              <div class="row" style="height:650px">
                <div class="col-lg-12 grid-margin stretch-card h-100">
                  <?php include('tabplan_tujuan1.php') ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="portfolio-item filter-tujuan1-grafik">
        <!-- <br><br> -->
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card shadow" style="border-radius: 15px;">
            <div class="card-body">
              <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                <div class="selectBox mt-3 me-2 ">
                  <form action="">
                    <select class="dropdownunduhriset3" id="filterValue">
                      <option value="T1_1">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Hubungan dengan KRT</option>
                      <option value="T1_2"> Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Usia </option>
                      <option value="T1_3"> Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Status Perkawinan</option>
                      <option value="T1_4"> Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Jenis Kelamin</option>
                      <option value="T1_5"> Persentase Tenaga Kerja di Industri Pariwisata menurut Jenis Industri dan Jumlah Pendapatan</option>
                      <option value="T1_6"> Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Tempat Bekerjanya Menggunakan Internet</option>
                      <option value="T1_7"> Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Tempat Bekerjanya Menggunakan Internet untuk Promosi</option>
                      <option value="T1_8"> Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Tempat Bekerjanya Menggunakan Internet untuk Komunikasi</option>
                      <option value="T1_9"> Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Tempat Bekerjanya Menggunakan Internet untuk Transaksi Barang/Jasa</option>
                      <option value="T1_10"> Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja dan Keinginan untuk Menambah Pekerjaan</option>
                      <option value="T1_11"> Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata menurut Industri Pariwisata dan Status Pekerjaan Utama</option>
                      <option value="T1_12"> Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja dan Lama Bekerja</option>
                      <option value="T1_13"> Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja dan Kepunyaan Pekerjaan Sebelumnya</option>
                      <option value="T1_14"> Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja dan Kepunyaan Pekerjaan di Sektor Pariwisata Sebelumnya</option>
                      <!-- <option value="T1_15">T1_15</option>
                      <option value="T1_16">T1_16</option>
                      <option value="T1_17">T1_17</option>
                      <option value="T1_18">T1_18</option>
                      <option value="T1_19">T1_19</option>
                      <option value="T1_20">T1_20</option> -->
                      <option value="T1_21">Persentase Tenaga Kerja yang Pernah Bekerja di Sektor Pariwisata dalam Tiga Tahun Terakhir Berdasarkan Jenis Industri dan Pendidikan Tertinggi yang Ditamatkan</option>
                      <option value="T1_22">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Keikutsertaan dalam Pelatihan</option>
                      <option value="T1_23">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Penggunaan Bahasa Asing di Tempat Bekerja</option>
                      <option value="T1_24">Persentase Rumah Tangga di Industri Pariwisata menurut Industri dan Rumah Layak Huni</option>
                      <option value="T1_25">Persentase Rumah Tangga di Industri Pariwisata menurut Industri dan Sumber Air Minum Bersih dan Akses Air Minum Layak</option>
                      <option value="T1_26">Persentase Rumah Tangga di Industri Pariwisata menurut Industri dan Sanitasi Layak</option>
                    </select>
                  </form>
                </div>
                <div class="me-1 mt-3 justify-content-end align-item-end">
                  <button id="unduh-1-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#Modal1_1">
                    <i class="fa-solid fa-download"></i>
                  </button>
                </div>
              </div>
              <div class="chartBox bar mt-4">
                <canvas class="mt1" id="tujuan1_1" style="width: 95%; height:80vh;"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="isi-tujuan bg-white shadow mt-4">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <h3><b>Interpretasi</b></h3>
                  <div class="card-body p-2 border rounded">
                    <p>
                      Dari hasil yang diperoleh, mayoritas pekerja dari seluruh jenis industri pariwisata merupakan bukan berstatus kepala rumah tangga (KRT) dengan persentase sebesar 60,97%. Bahkan pekerja yang berstatus KRT tidak lebih dari setengahnya yaitu hanya sebesar 39,03%.
                    </p>
                    <p>
                      Jumlah pekerja terus mengalami peningkatan mulai usia 15 tahun ke atas dan kembali mengalami penurunan pada usia 34 ke atas. Hal tersebut menunjukkan bahwa pada semua jenis industri mayoritas dipenuhi oleh tenaga kerja pada usia produktif dengan kelompok usia hingga 24 tahun memiliki jumlah orang bekerja terbanyak dari keseluruhan jenis industri pariwisata. 
                    </p>
                    <p>
                      Secara umum pekerja di industri pariwisata didominasi oleh orang yang Pernah Kawin sebanyak 73.5%. Dengan pekerja berjenis kelamin laki-laki lebih mendominasi sebanyak 59,69% dibandingkan pekerja berjenis kelamin perempuan sebanyak 40,31%. Hal tersebut terjadi pada beberapa jenis industri antara lain Penyedia jasa angkutan darat untuk penumpang, Penyediaan jasa kebudayaan, olahraga dan rekreasi dan Jenis industri lainnya. Namun pada sektor tertentu seperti penyediaan jasa makan dan minum dan aktivitas perdagangan barang-barang pariwisata lebih didominasi oleh pekerja berjenis kelamin. 
                    </p>
                    <p>
                      Lebih dari separuh pekerja pariwisata di Kabupaten Malang menerima pendapatan dibawah 2,5 juta rupiah setiap bulannya. Sekitar 3 dari 10 pekerja pariwisata di Kabupaten Malang bahkan hanya menerima pendapatan kurang dari 1,5 juta rupiah per bulannya, jauh lebih rendah dari upah minimum Provinsi Jawa Timur. Mayoritas pekerja berpendapatan rendah ini bekerja di industri penyediaan jasa makan dan minum. 
                    </p>
                    <p>
                      Selanjutnya, lebih dari setengah pekerja menyatakan tempat bekerjanya menggunakan internet yaitu sebesar 66,95%. Dari mayoritas industri tersebut, penyediaan jasa makan dan minum menjadi industri dengan tempat bekerja yang menggunakan internet terbanyak yang mencapai 25,53%, lalu disusul oleh industri penyediaan jasa kebudayaan, olahraga, dan rekreasi sebesar 20,21%. Sedangkan persentase paling sedikit adalah tempat bekerja di jenis industri lainnya yaitu hanya 11,49%. 
                    </p>
                    <p>
                      Mayoritas dari seluruh jenis industri pariwisata sudah menggunakan internet dalam pekerjaannya dengan persentase sebesar 66,95%. Dari 66,95% tersebut, 55,85% diantaranya menggunakan internet untuk promosi sedangkan 13,11% tidak menggunakannya untuk promosi. Industri penyediaan jasa makan dan minum dan industri penyediaan jasa kebudayaan, olahraga dan rekreasi merupakan industri pariwisata yang memiliki persentase tertinggi dalam menggunakan internet untuk promosi. Dari tingginya persentase tempat bekerja yang menggunakan internet tersebut, 65,38% diantaranya digunakan untuk komunikasi dan sisanya sebesar 1,57% tidak digunakan untuk komunikasi. Dari 66,95%, 48,29% diantaranya menggunakan internet untuk transaksi dan 18,66% tidak menggunakan internet untuk transaksi. 
                    </p>
                    <p>
                      Secara keseluruhan lebih dari setengah tenaga kerja yang telah bekerja di industri pariwisata tidak ingin menambah pekerjaan. Akan tetapi, industri penyediaan jasa makan dan minum juga merupakan industri pariwisata dengan persentase tenaga kerjanya yang ingin menambah pekerjaan terbanyak yakni sebesar 26,22 %. Sedangkan industri pariwisata dengan persentase tenaga kerjanya yang ingin menambah pekerjaan paling sedikit dan di bawah 10 % adalah industri penyediaan jasa akomodasi bagi wisatawan. 
                    </p>
                    <p>
                      Selanjutnya, 8-9 dari 10 orang yang bekerja di industri pariwisata menjadikan pekerjaan di industri pariwisata sebagai pekerjaan utama. Apabila dilihat dari jenis industri pariwisatanya, mayoritas pekerja di bidang penyediaan jasa makanan dan minuman menjadikan pekerjaannya industri pariwisata sebagai pekerjaan utamanya. 
                    </p>
                    <p>
                      Berdasarkan hasil pendataan, secara keseluruhan lebih dari separuh tenaga kerja telah bekerja di industri pariwisata selama lebih dari tiga tahun. Sekitar satu dari empat dari mereka bekerja di industri Penyediaan Jasa Makan dan Minum. Hanya terdapat sedikit tenaga kerja di industri pariwisata yang bekerja selama kurang dari tiga tahun yang bekerja di industri Penyediaan Jasa Angkutan Darat untuk Penumpang, yaitu 5,8 persen. 
                    </p>
                    <p>
                      Berdasarkan data yang dikumpulkan, hampir semua responden tidak memiliki pekerjaan sebelum melakoni  pekerjaan di industri pariwisata. Hal itu ditunjukkan dengan persentase yang memiliki pekerjaan sebelumnya hanya sebesar 18,38% dari semua responden. Jenis industri pariwisata dari responden yang tidak memiliki pekerjaan sebelumnya tertinggi adalah penyediaan jasa makan dan minum. Selain itu, hanya sedikit dari responden yang memiliki pekerjaan sebelum bekerja di industri pariwisata yaitu pada jenis industri penyediaan jasa angkutan darat untuk penumpang yaitu hanya sebesar 6,2%. Hampir seluruh tenaga kerja tidak memiliki pekerjaan di industri pariwisata sebelumnya. Sementara itu, hanya sebanyak 5,98% yang pernah bekerja di industri pariwisata sebelumnya.   
                    </p>
                    <p>
                      Berdasarkan data yang dikumpulkan, dapat diketahui bahwa jumlah sampel pekerja di industri pariwisata yang memiliki pekerjaan lainnya di samping pekerjaan yang berada pada industri pariwisata lebih dari setengah dari jumlah sampel yaitu sebesar 69,94%. Sedangkan sisanya yaitu sebesar 30,06% memiliki pekerjaan lainnya selain di industri pariwisata. Hal tersebut menunjukkan bahwa pekerja yang bekerja di industri pariwisata cenderung tidak memiliki pekerjaan lain selain di industri pariwisata.	 
                    </p>
                    <p>
                      Banyaknya tenaga kerja laki-laki di industri pariwisata yang memiliki pekerjaan lainnya (Multiple Jobs) adalah sebesar tiga kali banyaknya tenaga kerja perempuan di industri pariwisata yang juga memiliki pekerjaan lainnya (Multiple Jobs). Lebih dari satu per lima tenaga kerja laki-laki di industri pariwisata yang memiliki pekerjaan lainnya (Multiple Jobs) bekerja di jenis industri pariwisata penyediaan jasa kebudayaan, olahraga, dan rekreasi. Sementara itu, sekitar satu per sepuluh dari tenaga kerja laki-laki di Industri pariwisata yang memiliki pekerjaan lainnya (Multiple Jobs) bekerja di jenis industri pariwisata penyediaan jasa akomodasi bagi wisatawan. Lain halnya dengan tenaga kerja perempuan di industri pariwisata, mereka yang memiliki pekerjaan lainnya (Multiple Jobs) hampir separuhnya yaitu 42% bekerja di jenis industri pariwisata penyediaan jasa makan dan minum. Namun, hanya terdapat sedikit tenaga kerja perempuan yang bekerja di jenis industri pariwisata penyedia jasa angkutan darat untuk penumpang yang memiliki pekerjaan lainnya (Multiple Jobs) yaitu hanya sebesar 2% dari jumlah mereka. 
                    </p>
                    <p>
                      Lebih dari ¼ pekerja di sektor pariwisata memiliki pendapatan sampingan lebih besar daripada pendapatan utama. Tiga industri teratas yang memiliki pekerja terbanyak yang memiliki pendapatan sampingan lebih besar daripada pendapatan utama yaitu industri penyediaan jasa makan dan minum dengan 25.42%, lalu diikuti oleh industri penyediaan jasa, kebudayaan, olahraga dan rekreasi dengan 20,34% dan terakhir diikuti oleh penyediaan jasa angkutan darat untuk penumpang dengan nilai 16,95%.  
                    </p>
                    <p>
                      Lebih dari setengah atau sekitar 5-6 dari 10 pekerja dari industri pariwisata menamatkan pendidikan tertingginya SMP atau SMA, yaitu sebesar 52,4%. Dimana untuk pendidikan tertinggi SMP mayoritas bekerja di sektor penyedia jasa makan dan minum, yaitu hampir 40%. Untuk pekerja yang menamatkan pendidikan lebih dari SMA/SMK sangat minim, hanya sekitar 1 dari 10 pekerja saja. Sedangkan untuk pekerja yang belum SD ataupun belum sekolah, hanya sekitar 3%. Hal ini menandakan bahwa hanpir semua pekerja industri pariwisata berpendidikan sekurang-kurangnya SD. 
                    </p>
                    <p>
                      Secara keseluruhan terdapat 16,38 persen pekerja yang pernah mengikuti pelatihan. Dari 16,38 persen diantaranya, jenis industri pariwisata penyedia jasa makan dan minum menjadi yang terbanyak yang sudah pernah mengikuti pelatihan hampir sepertiga atau persen dari semua jenis industri. Artinya pekerja yang pernah mengikuti pelatihan didominasi oleh industri penyedia jasa makan dan minum. Sedangkan jenis industri yang yang tesedikit adalah jenis industri lainya sebesar seperlima atau sebesar 10,43% saja. 
                    </p>
                    <p>
                      Pada semua industri yang dicacah, diketahui bahwa sebagian besar pekerjanya tidak menggunakan bahasa asing di tempat kerja. Secara keseluruhan hanya terdapat 1 dari 5 pekerja atau hanya 20,8 persen pekerja yang menggunakan bahasa asing di tempat kerja. Dari semua industri yang dicacah, hampir sepertiga atau 27,4 persen yang pekerjanya menggunakan bahasa asing berasal dari industri penyedia jasa makan dan minum.  
                    </p>
                    <p>
                      Sebagian besar dari jumlah responden menyatakan bahwa diantara jenis industri pariwisata yang memiliki rumah tidak layak huni sebesar 68,23% dan sisanya rumah layak huni. Industri penyediaan jasa makan dan minum menjadi penyumbang persentase terbesar pada persentase rumah layak huni yaitu sekitar sepertiga dari jenis industri pariwisata lainnya. 
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
</section>

<!-- Isotope -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- dropdown show/hide content-->
<script src="<?= base_url('pvd/js/riset3/dropdown_showhide.js') ?>"></script>
<!-- Datatable Instal -->
<script src="<?= base_url('pvd/js/riset3/datatables_export.js'); ?>"></script>
<!-- Chart JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Impor Chart -->
<!-- <script src="<?= base_url('pvd/js/riset3/hasilPKLRiset3_1_5_pie.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset3/hasilPKLRiset3_stackedbarchart.js') ?>"></script> -->
<script src="<?= base_url('pvd/js/riset3/hasilPKLRiset3_tujuan1.js') ?>"></script>

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset3/btn_Download_tujuan1.js') ?>"></script>

<!-- Modal Riset 3  -->
<?= $this->endSection(); ?>