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

<div class="container px-0">
  <header class="section-header">
    <h6 style="color: #4b395f;"><strong>Menganalisis dinamika tenaga kerja di industri pariwisata.</strong>
    </h6>
  </header>
  <hr class="hrjudul">

  <div class="menu">
    <select class="form-select form-select-sm tujuanfilter" style="border-radius: 15px;" name="tujuan3" id="name">
      <option selected value="tujuan4-1">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Lama Menekuni Pekerjaan</option>
      <option value="tujuan4-2">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Perpindahan Pekerjaan</option>
      <option value="tujuan4-3">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Frekuensi dan Perpindahan Pekerjaan</option>
      <option value="tujuan4-4">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Kepunyaan Pekerjaan di Industri Pariwisata Tiga Tahun yang Lalu</option>
      <option value="tujuan4-5">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Frekuensi Kepunyaan Pekerjaan di Industri Pariwisata Tiga Tahun yang Lalu</option>
      <option value="tujuan4-6">Rata-rata Frekuensi Perpindahan Pekerjaan Tenaga Kerja di Industri Pariwisata menurut Jenis Kelamin</option>
      <option value="tujuan4-7">Rata-rata Frekuensi Pekerjaan Tenaga Kerja di Industri Pariwisata menurut Tingkat Pendidikan</option>
      <option value="tujuan4-8">Rata-rata Frekuensi Perpindahan Pekerjaan Tenaga Kerja di Industri Pariwisata menurut Status Perkawinan</option>
      <option value="tujuan4-9">Jumlah Usaha Pariwisata Berdasarkan Sektor Usaha</option>


    </select>
  </div>

  <div class="isi-tujuan shadow mt-4">
    <div id="tujuan4-1" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Lama Menekuni Pekerjaan</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
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
          <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="tujuan4-3" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata Menurut Jenis Industri dan Frekuensi dan Perpindahan Pekerjaan</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
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
          <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
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
          <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
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
          <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
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
          <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
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
          <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 grid-margin stretch-card h-100">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card bg-secondary">
              <div class="card-body">
                <div class="chartBox">
                  <canvas class="mt1" id="tk_pie"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="tujuan4-9" class="datatujuan" style="width:100%">
      <div class="card">
        <div class="card-header">
          <strong>Jumlah Usaha Pariwisata Berdasarkan Sektor Usaha</strong>
          <!-- <button type="button" class="tombol btn-for text-right me-1 mt-1 justify-content-end align-item-end" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                            <i class="fa-solid fa-download"></i>
                </button> -->
        </div>
        <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
          <!-- style="padding:0px 0px 0px 0px;" -->
          <!-- <blockquote class="blockquote mb-0"> -->
          <table class="table table-hover table-bordered table-responsive" id="table_id" style="width:100%">
            <thead style="color: #fff; font-weight:bold;">
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Kecamatan</th>
                <th scope="col">Desa/Kelurahan</th>
                <th scope="col">Jumlah Usaha Pariwisata</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Batu</td>
                <td>Batu</td>
                <td>100</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Junrejo</td>
                <td>Oro-oro Ombo</td>
                <td>100</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Bumiaji</td>
                <td>Tulungrejo</td>
                <td>100</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Batu</td>
                <td>Batu</td>
                <td>100</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Junrejo</td>
                <td>Oro-oro Ombo</td>
                <td>100</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Bumiaji</td>
                <td>Tulungrejo</td>
                <td>100</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Batu</td>
                <td>Batu</td>
                <td>100</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Junrejo</td>
                <td>Oro-oro Ombo</td>
                <td>100</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Bumiaji</td>
                <td>Tulungrejo</td>
                <td>100</td>
            </tbody>
          </table>
          <!-- </blockquote> -->
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
<script src="<?= base_url('pvd/js/datatables_install.js'); ?>"></script>
<?= $this->endSection(); ?>