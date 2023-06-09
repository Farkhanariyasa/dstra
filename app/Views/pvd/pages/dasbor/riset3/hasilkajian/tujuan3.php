<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>



<div class="container px-0">
  <header class="section-header">
    <h6 style="color: #4b395f;"><strong>Menganalisis faktor-faktor yang memengaruhi jam kerja tenaga kerja lokal di industri pariwisata.</strong>
    </h6>
  </header>
  <hr class="hrjudul">
  <?php include('modal_tujuan3.php') ?>
  <div class="menu">
    <select class="form-select form-select-sm tujuanfilter" style="border-radius: 15px;" name="tujuan3" id="name">
      <option selected value="tujuan3-1">Persentase jam kerja menurut jenis kelamin</option>
      <option value="tujuan3-2">Persentase jam kerja menurut tingkat pendidikan</option>
      <option value="tujuan3-3">Persentase jam kerja menurut status perkawinan</option>
      <option value="tujuan3-4">Persentase jam kerja menurut tingkat pendapatan</option>
      <option value="tujuan3-5">Persentase jam kerja menurut wilayah tempat tinggal</option>
      <option value="tujuan3-6">Persentase jam kerja menurut keikutsertaan dalam pelatihan</option>
    </select>
  </div>

  <div class="isi-tujuan shadow mt-4">
    <div id="tujuan3-1" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase jam kerja menurut jenis kelamin</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card h-100">
            <?php include('tabplan_tujuan3.php');
            tabplan3_1() ?>
          </div>
          <!-- <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card">
              <h3><b>Interpretasi</b></h3>
              <div class="card-body border rounded" style="padding: 1.5rem 0.5rem;">
                <div class="col-12 col-sm-12">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.</p>
                </div>
              </div>
            </div>
          </div> -->
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <h3><b>Grafik</b></h3>
              <div class="card-body border rounded">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                  <div class="me-1 mt-1 justify-content-end align-item-end">
                    <button id="unduh-3-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#Modal3_1">
                      <i class="fa-solid fa-download"></i>
                    </button>
                  </div>
                </div>
                <div class="chartBox bar">
                  <canvas id="tujuan3_1" style="width: 95%; height:80vh;"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="tujuan3-2" class="datatujuan" style="width:100%">
      <h4 class="card-title  judul-card">Persentase jam kerja menurut tingkat pendidikan</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card h-100">
            <?php
            tabplan3_2() ?>
          </div>
          <!-- <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card">
              <h3><b>Interpretasi</b></h3>
              <div class="card-body border rounded" style="padding: 1.5rem 0.5rem;">
                <div class="col-12 col-sm-12">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.</p>
                </div>
              </div>
            </div>
          </div> -->
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <h3><b>Grafik</b></h3>
              <div class="card-body border rounded">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                  <div class="me-1 mt-1 justify-content-end align-item-end">
                    <button id="unduh-3-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#Modal3_2">
                      <i class="fa-solid fa-download"></i>
                    </button>
                  </div>
                </div>
                <div class="chartBox bar">
                  <canvas id="tujuan3_2" style="width: 95%; height:80vh;"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="tujuan3-3" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase jam kerja menurut status perkawinan</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card h-100">
            <?php
            tabplan3_3() ?>
          </div>
          <!-- <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card">
              <h3><b>Interpretasi</b></h3>
              <div class="card-body border rounded" style="padding: 1.5rem 0.5rem;">
                <div class="col-12 col-sm-12">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.</p>
                </div>
              </div>
            </div>
          </div> -->
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <h3><b>Grafik</b></h3>
              <div class="card-body border rounded">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                  <div class="me-1 mt-1 justify-content-end align-item-end">
                    <button id="unduh-3-3" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#Modal3_3">
                      <i class="fa-solid fa-download"></i>
                    </button>
                  </div>
                </div>
                <div class="chartBox bar">
                  <canvas id="tujuan3_3" style="width: 95%; height:80vh;"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="tujuan3-4" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase jam kerja menurut tingkat pendapatan</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card h-100">
            <?php
            tabplan3_4() ?>
          </div>
          <!-- <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card">
              <h3><b>Interpretasi</b></h3>
              <div class="card-body border rounded" style="padding: 1.5rem 0.5rem;">
                <div class="col-12 col-sm-12">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.</p>
                </div>
              </div>
            </div>
          </div> -->
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <h3><b>Grafik</b></h3>
              <div class="card-body border rounded">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                  <div class="me-1 mt-1 justify-content-end align-item-end">
                    <button id="unduh-3-4" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#Modal3_4">
                      <i class="fa-solid fa-download"></i>
                    </button>
                  </div>
                </div>
                <div class="chartBox bar">
                  <canvas id="tujuan3_4" style="width: 95%; height:80vh;"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="tujuan3-5" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase jam kerja menurut wilayah tempat tinggal</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card h-100">
            <?php
            tabplan3_5() ?>
          </div>
          <!-- <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card">
              <h3><b>Interpretasi</b></h3>
              <div class="card-body border rounded" style="padding: 1.5rem 0.5rem;">
                <div class="col-12 col-sm-12">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.</p>
                </div>
              </div>
            </div>
          </div> -->
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <h3><b>Grafik</b></h3>
              <div class="card-body border rounded">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                  <div class="me-1 mt-1 justify-content-end align-item-end">
                    <button id="unduh-3-5" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#Modal3_5">
                      <i class="fa-solid fa-download"></i>
                    </button>
                  </div>
                </div>
                <div class="chartBox bar">
                  <canvas id="tujuan3_5" style="width: 95%; height:80vh;"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="tujuan3-6" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase jam kerja menurut keikutsertaan dalam pelatihan</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card h-100">
            <?php
            tabplan3_6() ?>
          </div>
          <!-- <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card">
              <h3><b>Interpretasi</b></h3>
              <div class="card-body border rounded" style="padding: 1.5rem 0.5rem;">
                <div class="col-12 col-sm-12">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.</p>
                </div>
              </div>
            </div>
          </div> -->
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <h3><b>Grafik</b></h3>
              <div class="card-body border rounded">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                  <div class="me-1 mt-1 justify-content-end align-item-end">
                    <button id="unduh-3-6" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#Modal3_6">
                      <i class="fa-solid fa-download"></i>
                    </button>
                  </div>
                </div>
                <div class="chartBox bar">
                  <canvas id="tujuan3_6" style="width: 95%; height:80vh;"></canvas>
                </div>
              </div>
            </div>
          </div>
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
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste eaque sed possimus, consequuntur quae tenetur. Accusantium, optio ullam? Porro, non optio quia labore doloribus culpa reprehenderit aut nesciunt odio suscipit facere nihil natus dolore, laborum praesentium eaque quo sapiente. Reprehenderit dignissimos, veniam doloribus explicabo quidem blanditiis ea aliquid quod commodi.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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
<script src="<?= base_url('pvd/js/riset3/hasilPKLRiset3_tujuan3.js') ?>"></script>

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset3/btn_Download_tujuan3.js') ?>"></script>

<?= $this->endSection(); ?>