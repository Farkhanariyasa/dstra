<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('css'); ?>
<style>
  table {
    table-layout: auto;
    width: auto;
  }

  td {
    white-space: normal !important;
  }

  th {
    white-space: normal !important;
    word-wrap: break-word;
    color: black;
    /* background-color: #04AA2D; */
  }

  td {
    white-space: normal !important;
    word-wrap: break-word;
  }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<?php include('modal_tujuan2.php') ?>
<div class="container px-0">
  <header class="section-header">
    <h6 style="color: #4b395f;"><strong>Menganalisis dinamika tenaga kerja di industri pariwisata</strong>
    </h6>
  </header>
  <hr class="hrjudul">

  <div class="menu">
    <select class="form-select form-select-sm tujuanfilter" style="border-radius: 15px;" name="tujuan3" id="name">
      <option selected value="tujuan4-1">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Lama Menekuni Pekerjaan</option>
      <option value="tujuan4-2">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Perpindahan Pekerjaan</option>
      <option value="tujuan4-3">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Frekuensi Perpindahan Pekerjaan</option>
      <option value="tujuan4-4">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Kepunyaan Pekerjaan di Industri Pariwisata Tiga Tahun yang Lalu</option>
      <option value="tujuan4-5">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Frekuensi Kepunyaan Pekerjaan di Industri Pariwisata Tiga Tahun yang Lalu</option>
      <option value="tujuan4-6">Rata-rata Frekuensi Perpindahan Pekerjaan Tenaga Kerja di Industri Pariwisata menurut Jenis Kelamin</option>
      <option value="tujuan4-7">Rata-rata Frekuensi Pekerjaan Tenaga Kerja di Industri Pariwisata menurut Tingkat Pendidikan</option>
      <option value="tujuan4-8">Rata-rata Frekuensi Perpindahan Pekerjaan Tenaga Kerja di Industri Pariwisata menurut Status Perkawinan</option>
      <!-- <option value="tujuan4-9">Jumlah Usaha Pariwisata Berdasarkan Sektor Usaha</option> -->
    </select>
  </div>
  <!-- <button type="button" class="tombol btn-danger" data-bs-dismiss="modal">Kembali</button> -->

  <div class="isi-tujuan shadow mt-4">
    <div id="tujuan4-1" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Lama Menekuni Pekerjaan</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card h-100">
            <?php include('tabplan_tujuan2.php');
            tabplan2_1() ?>
          </div>
          <!-- <div class="col-lg-3 grid-margin stretch-card h-100">
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
                    <button id="unduh-2-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#Modal2_1">
                      <i class="fa-solid fa-download"></i>
                    </button>
                  </div>
                </div>
                <div class="chartBox bar">
                  <canvas id="tujuan2_1" style="width: 95%; height:80vh;"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="tujuan4-2" class="datatujuan" style="width:100%">
      <h4 class="card-title  judul-card">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Perpindahan Pekerjaan</h4>
      <div class="card-body">
        <div class="row">
          <!-- <div class="col-lg-12 grid-margin stretch-card h-100">
            php tabplan2_2() 
          </div> -->
          <div class="col-lg-12 grid-margin stretch-card h-100">
            <br>
            <br>
            <div class="card">
              <h3><b>Tabulasi</b></h3>
              <div class="card-body table-responsive border rounded" style="padding: 0.5rem 1rem;">
                <table id="table2" class="table table-hover table-bordered table-responsive display" style="width:100%">
                  <thead>
                    <tr>
                      <th scope="col">Jenis Industri Pariwisata</th>
                      <th scope="col">Ya</th>
                      <th scope="col">Tidak</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Penyediaan jasa akomodasi bagi wisatawan</th>
                      <td><?php echo $data_2_2['t2_1_1'] ?></td>
                      <td><?php echo $data_2_2['t2_1_2'] ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Penyediaan jasa makan dan minum</th>
                      <td><?php echo $data_2_2['t2_2_1'] ?></td>
                      <td><?php echo $data_2_2['t2_2_2'] ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Penyediaan jasa angkutan darat untuk penumpang</th>
                      <td><?php echo $data_2_2['t2_3_1'] ?></td>
                      <td><?php echo $data_2_2['t2_3_2'] ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Penyediaan jasa kebudayaan, olahraga dan rekreasi</th>
                      <td><?php echo $data_2_2['t2_4_1'] ?></td>
                      <td><?php echo $data_2_2['t2_4_2'] ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Aktivitas perdagangan barang-barang pariwisata</th>
                      <td><?php echo $data_2_2['t2_5_1'] ?></td>
                      <td><?php echo $data_2_2['t2_5_2'] ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Jenis Industri Lainnya</th>
                      <td><?php echo $data_2_2['t2_6_1'] ?></td>
                      <td><?php echo $data_2_2['t2_6_2'] ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-3 grid-margin stretch-card h-100">
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
                    <button id="unduh-2-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#Modal2_2">
                      <i class="fa-solid fa-download"></i>
                    </button>
                  </div>
                </div>
                <div class="chartBox bar">
                  <canvas id="tujuan2_2" style="width: 95%; height:80vh;"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="tujuan4-3" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Frekuensi Perpindahan Pekerjaan</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card h-100">
            <?php tabplan2_3() ?>
          </div>
          <!-- <div class="col-lg-3 grid-margin stretch-card h-100">
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
                    <button id="unduh-2-3" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#Modal2_3">
                      <i class="fa-solid fa-download"></i>
                    </button>
                  </div>
                </div>
                <div class="chartBox bar">
                  <canvas id="tujuan2_3" style="width: 95%; height:80vh;"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="tujuan4-4" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Kepunyaan Pekerjaan di Industri Pariwisata Tiga Tahun yang Lalu</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card h-100">
            <?php tabplan2_4() ?>
          </div>
          <!-- <div class="col-lg-3 grid-margin stretch-card h-100">
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
                    <button id="unduh-2-4" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#Modal2_4">
                      <i class="fa-solid fa-download"></i>
                    </button>
                  </div>
                </div>
                <div class="chartBox bar">
                  <canvas id="tujuan2_4" style="width: 95%; height:80vh;"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="tujuan4-5" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Frekuensi Kepunyaan Pekerjaan di Industri Pariwisata Tiga Tahun yang Lalu</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card h-100">
            <?php tabplan2_5() ?>
          </div>
          <!-- <div class="col-lg-3 grid-margin stretch-card h-100">
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
                    <button id="unduh-2-5" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#Modal2_5">
                      <i class="fa-solid fa-download"></i>
                    </button>
                  </div>
                </div>
                <div class="chartBox bar">
                  <canvas id="tujuan2_5" style="width: 95%; height:80vh;"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="tujuan4-6" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Rata-rata Frekuensi Perpindahan Pekerjaan Tenaga Kerja di Industri Pariwisata menurut Jenis Kelamin</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card h-100">
            <?php tabplan2_6() ?>
          </div>
          <!-- <div class="col-lg-3 grid-margin stretch-card h-100">
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
                    <button id="unduh-2-6" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#Modal2_6">
                      <i class="fa-solid fa-download"></i>
                    </button>
                  </div>
                </div>
                <div class="chartBox bar">
                  <canvas id="tujuan2_6" style="width: 95%; height:80vh;"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="tujuan4-7" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Rata-rata Frekuensi Pekerjaan Tenaga Kerja di Industri Pariwisata menurut Tingkat Pendidikan</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card h-100">
            <?php tabplan2_7() ?>
          </div>
          <!-- <div class="col-lg-3 grid-margin stretch-card h-100">
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
                    <button id="unduh-2-7" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#Modal2_7">
                      <i class="fa-solid fa-download"></i>
                    </button>
                  </div>
                </div>
                <div class="chartBox bar">
                  <canvas id="tujuan2_7" style="width: 95%; height:80vh;"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="tujuan4-8" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Rata-rata Frekuensi Perpindahan Pekerjaan Tenaga Kerja di Industri Pariwisata menurut Status Perkawinan</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card h-100">
            <?php tabplan2_8() ?>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <h3><b>Grafik</b></h3>
              <div class="card-body border rounded">
                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                  <div class="me-1 mt-1 justify-content-end align-item-end">
                    <button id="unduh-2-8" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#Modal2_8">
                      <i class="fa-solid fa-download"></i>
                    </button>
                  </div>
                </div>
                <div class="chartBox bar">
                  <canvas id="tujuan2_8" style="width: 95%; height:80vh;"></canvas>
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
              <p>Berdasarkan hasil yang diperoleh, tenaga kerja yang sedang bekerja di industri pariwisata pada setiap jenis industri cenderung tidak berpindah pekerjaan. Hal ini dapat dilihat dari seluruh persentase tenaga kerja yang tidak berpindah pekerjaan pada setiap jenis industri pariwisata lebih besar dibandingkan persentase tenaga kerja yang berpindah pekerjaan dengan perbandingan yang cukup besar. Hampir 80% tenaga kerja yang sedang bekerja dari setiap jenis industri pariwisata tidak berpindah pekerjaan dalam kurun waktu 3 tahun terakhir. Sehingga, hanya sebagian kecil dari mereka yaitu sekitar 20% yang melakukan pindah pekerjaan di Kabupaten Malang dalam kurun waktu tersebut. Rendahnya perpindahan ini menunjukkan bahwa pekerjaan di industri pariwisata tergolong stabil dan tidak berdinamika. Namun jika dikaitkan dengan pekerja di industri ini yang mayoritas masih memiliki pendapatan yang tergolong rendah, ini tentunya dapat menunjukkan bahwa pekerja tidak mudah berpindah pekerjaan bukan karena pendapatannya yang tinggi namun terdapat faktor lain yang mempengaruhinya seperti kemudahan bekerja di industri ini.</p>
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
<script src="<?= base_url('pvd/js/riset3/hasilPKLRiset3_tujuan2.js') ?>"></script>

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset3/btn_Download_tujuan2.js') ?>"></script>

<?= $this->endSection(); ?>