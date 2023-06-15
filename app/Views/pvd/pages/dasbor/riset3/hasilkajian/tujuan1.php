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
                      <p>Terlihat bahwa dimensi Kenangan memiliki nilai skor tertinggi dibandingkan dimensi lainnya, yaitu sebesar 66,37. Sementara itu, nilai skor terendah dimiliki oleh dimensi Sejuk-Indah-Ramah dengan nilai sebesar 48,65, lebih rendah 17,72 poin dibandingkan dimensi Kenangan. Hal ini menunjukkan bahwa upaya untuk meningkatkan sadar wisata tenaga kerja di industri pariwisata di Kabupaten Malang dapat difokuskan mulai dari dimensi Sejuk-Indah-Ramah.</p>
                      <p>Dimensi Sejuk-Indah-Ramah merupakan dimensi yang memiliki nilai indeks yang paling rendah. Hal ini disebabkan karena kesejukan dan keindahan yang sudah khas di daerah Kabupaten Malang menjadikan tenaga kerja di sana tidak terlalu menerapkan penjagaan kesejukan dan keindahan. Selain itu, rendahnya nilai dimensi ini disebabkan karena keramahan pada wisatawan yang masih kurang dari tenaga kerja pariwisata. Nilai dimensi sejuk-indah-ramah yang memiliki nilai paling rendah dibandingkan dimensi lainnya dapat ditingkatkan dengan melakukan sosialisasi kepada para tenaga kerja di bidang pariwisata untuk selalu menerapkan budaya 5S (Senyum, Salam, Sapa, Sopan, dan Santun) dalam melayani wisatawan atau pengunjung, serta meningkatkan kebiasaan untuk menanam dan merawat tanaman di sekitar tempat wisata guna meningkatkan keasrian dan kesejukan.</p>
                      <p>Di lain sisi, dimensi kenangan menjadi dimensi dengan nilai tertinggi. Hal ini berarti tenaga kerja di sektor pariwisata di Kabupaten Malang turut serta dalam mengenalkan kesenian dan kebudayaan yang berasal dari daerahnya kepada wisatawan dan juga mempromosikan makanan dan minuman khas maupun cindera mata dari kabupaten malang. Dimensi ini tetap perlu diperhatikan karena akan menentukan kesan positif yang akan disampaikan kepada orang lain dan kunjungan kembali dari wisatawan.</p>
                      <p>Selain itu, nilai indeks dimensi Aman-Tertib-Bersih memiliki nilai yang sedang, yaitu diantara dimensi Kenangan dan dimensi Sejuk-Indah-Ramah. Hal ini berarti tenaga kerja di sektor industri pariwisata sudah menerapkan sadar wisata pada dimensi Aman-Tertib-Bersih akan tetapi masih terdapat kekurangan. Bentuk tindak keamanan seperti sikap tidak mengganggu kenyamanan wisatawan, tidak membuat kegaduhan dan meminimalkan resiko kecelakaan telah dilakukan tenaga kerja di Kabupaten Malang.</p>
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

<!-- Istope -->
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