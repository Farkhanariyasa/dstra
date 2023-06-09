<?= $this->extend('pvd/layout/dasbor/template'); ?>
<?= $this->section('content'); ?>
<?php include('modal_tujuan1.php') ?>
<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
      <h6 style="color: #4b395f;"><strong>Memperoleh gambaran sosiodemografi dan kualitas tenaga kerja di industri pariwisata</strong>
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
          <div class="card shadow">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12 grid-margin stretch-card h-100">
                  <?php include('tabplan_tujuan1.php') ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="portfolio-item filter-tujuan1-grafik"> <br>
        <br><br>
        <div class="col-lg-12 grid-margin stretch-card mt-5">
          <div class="card shadow">
            <div class="card-body">
              <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                <div class="selectBox mt-3 me-2 ">
                  <form action="">
                    <select class="dropdownunduhriset3 w-auto" id="filterValue">
                      <option value="T1_25">Persentase Rumah Tangga di Industri Pariwisata menurut Industri dan Sumber Air Minum Bersih dan Akses Air Minum Layak</option>
                      <option value="T1_26">Persentase Rumah Tangga di Industri Pariwisata menurut Industri dan Sanitasi Layak</option>
                      <option value="T1_24">Persentase Rumah Tangga di Industri Pariwisata menurut Industri dan Rumah Layak Huni</option>
                      <option value="T1_2"> Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Usia </option>
                      <option value="T1_1">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Hubungan dengan KRT</option>
                      <option value="T1_3"> Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Status Perkawinan</option>
                      <option value="T1_4"> Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Jenis Kelamin</option>
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