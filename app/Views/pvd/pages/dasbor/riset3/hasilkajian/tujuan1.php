<?= $this->extend('pvd/layout/dasbor/template'); ?>
<?= $this->section('content'); ?>
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
            <div class="card shadow">
                <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 grid-margin stretch-card h-100">
                    <?php include('tabplan_tujuan1.php'); 
                      tabplan1_blok3_1() ?>
                  </div>
                  </div>
                </div>
             </div>
           </div>
        </div>
      <div class="portfolio-item filter-tujuan1-grafik">
        <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow">
                <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 grid-margin stretch-card h-100">
          <div class="card">
              <h3><b>Grafik</b></h3>
              <div class="card-body border rounded">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                  <div class="me-1 mt-1 justify-content-end align-item-end">
                    <button id="unduh-3-4" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                      <i class="fa-solid fa-download"></i>
                    </button>
                  </div>
                </div>
                <div class="chartBox bar">
                  <canvas id="tujuan1_blok3_1" style="width: 95%; height:80vh;"></canvas>
                </div>
              </div>
            </div>
           </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <h3><b>Interpretasi</b></h3>
              <div class="card-body border rounded" style="padding: 1.5rem 0.5rem;">
                <div class="col-12 col-sm-12">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.</p>
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
<script src="<?= base_url('pvd/js/riset3/datatables_export_tujuan1.js'); ?>"></script>
<!-- Chart JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Impor Chart -->
<script src="<?= base_url('pvd/js/riset3/hasilPKLRiset3_1_5_pie.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset3/hasilPKLRiset3_stackedbarchart.js') ?>"></script>

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset3/btn_Download.js') ?>"></script>

<!-- Modal Riset 3  -->
<?php include(APPPATH . 'Views/pvd/pages/dasbor/riset3/modal_riset3.php') ?>
<?= $this->endSection(); ?>