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
    <h6 style="color: #4b395f;"><strong>Memperoleh gambaran sosiodemografi dan kualitas tenaga kerja di industri pariwisata.</strong>
    </h6>
  </header>
  <hr class="hrjudul">

  <div class="menu">
    <select class="form-select form-select-sm tujuanfilter" style="border-radius: 15px;" name="tujuan3" id="name">
      <option selected value="tujuan4-1">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Status Kepemilikan Rumah</option>
      <option value="tujuan4-2">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Luas Lantai Rumah (m^2)</option>
      <option value="tujuan4-3">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Luas Lantai per Kapita (m^2)</option>
      <option value="tujuan4-4">Persentase Rumah Tangga di Industri Pariwisata yang Memiliki Rumah Lain Selain yang Ditempati Saat Ini Menurut Industri Pariwisata</option>
      <option value="tujuan4-5">Persentase Rumah Tangga di Industri Pariwisata yang Memiliki Rumah Lain Selain yang Ditempati Saat Ini Menurut Jenis Kelamin KRT</option>
      <option value="tujuan4-6">Persentase Rumah Tangga di Industri Pariwisata yang Memiliki Rumah Lain Selain yang Ditempati Saat Ini Menurut Tingkat Pendidikan KRT</option>
      <option value="tujuan4-7">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Bahan Bangunan Utama Atap Rumah Terluas</option>
      <option value="tujuan4-8">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Bahan Bangunan Utama Dinding Rumah Terluas</option>
      <option value="tujuan4-9">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Bahan Bangunan Utama Lantai Rumah Terluas</option>
      <option value="tujuan4-10">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Kepemilikan Serta Penggunaan Fasilitas Buang Air Besar</option>
      <option value="tujuan4-11">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Jenis Kloset yang Digunakan Rumah Tangga</option>
      <option value="tujuan4-12">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Tempat Pembuangan Akhir Tinja</option>
      <option value="tujuan4-13">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Sumber Air Utama yang Digunakan Rumah Tangga untuk Minum</option>
      <option value="tujuan4-14">Persentase Rumah Tangga di Industri Pariwisata dengan Sumber Air Minum dari Sumur Bor/Pompa, Sumur Terlindung, Sumur Tak Terlindung, Mata Air Terlindung, dan Mata Air Tak Terlindung menurut Provinsi, Daerah Tempat Tinggal dan Jarak ke Tempat Penampungan Limbah/Kotoran/Tinja Terdekat</option>
      <option value="tujuan4-15">Persentase Rumah Tangga di Industri Pariwisata dan Sumber Air Utama yang Digunakan Rumah Tangga untuk Mandi/Cuci/dll.</option>
      <option value="tujuan4-16">Persentase Rumah Tangga di Industri Pariwisata dengan Sumber Air untuk Memasak/Mandi/Cuci/dll dari Sumur Bor/Pompa, Sumur Terlindung, Sumur Tak Terlindung, Mata Air Terlindung, dan Mata Air Tak Terlindung terhadap Jarak ke Tempat Penampungan Limbah/Kotoran/Tinja Terdekat</option>
      <option value="tujuan4-17">Persentase Rumah Tangga di Industri Pariwisata menurut Industri dan Sumber Air Minum Bersih dan Akses Air Minum Layak</option>
      <option value="tujuan4-18">Persentase Rumah Tangga di Industri Pariwisata menurut Industri dan Sanitasi Layak</option>
      <option value="tujuan4-19">Persentase Rumah Tangga di Industri Pariwisata menurut Industri dan Rumah Layak Huni</option>
      <option value="tujuan4-20">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Usia</option>
      <option value="tujuan4-21">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Hubungan dengan KRT</option>
      <option value="tujuan4-22">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Status Perkawinan</option>
      <option value="tujuan4-23">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Jenis Kelamin</option>
      <option value="tujuan4-24">Persentase Tenaga Kerja di Industri Pariwisata menurut Jenis Industri</option>
      <option value="tujuan4-25">Persentase Tenaga Kerja di Industri Pariwisata Menurut Status Pekerjaan dan Jenis Kelamin</option>
      <option value="tujuan4-26">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Jumlah Pendapatan</option>
      <option value="tujuan4-27">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Tempat Bekerjanya Menggunakan Internet</option>
      <option value="tujuan4-28">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Tempat Bekerjanya Menggunakan Internet untuk Promosi</option>
      <option value="tujuan4-29">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Tempat Bekerjanya Menggunakan Internet untuk Komunikasi</option>
      <option value="tujuan4-30">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Tempat Bekerjanya Menggunakan Internet untuk Kegiatan Transaksi Barang/Jasa</option>
      <option value="tujuan4-31">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja dan Keinginan untuk Menambah Pekerjaan</option>
      <option value="tujuan4-32">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata menurut Industri Pariwisata dan Status Pekerjaan Utama</option>
      <option value="tujuan4-33">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja dan Lama Bekerja</option>
      <option value="tujuan4-34">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja dan Kepunyaan Pekerjaan Sebelumnya</option>
      <option value="tujuan4-35">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja dan Kepunyaan Pekerjaan di Sektor Pariwisata Sebelumnya</option>
      <option value="tujuan4-36">Jumlah Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja Sekarang dan Jenis Industri Tempat Bekerja Sebelumnya</option>
      <option value="tujuan4-37">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja Sebelumnya dan Lama Bekerja</option>
      <option value="tujuan4-38">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Memiliki Pekerjaan Lainnya (Multiple Jobs)</option>
      <option value="tujuan4-39">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Jenis Kelamin yang Memiliki Pekerjaan Lainnya (Multiple Jobs)</option>
      <option value="tujuan4-40">Rata-Rata Jumlah Jam Kerja Pekerjaan Sampingan per hari Dikurangi Waktu Istirahat</option>
      <option value="tujuan4-41">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Memiliki Pendapatan Sampingan Lebih Besar daripada Pekerjaan Utama</option>
      <option value="tujuan4-42">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Jumlah Pendapatan Pekerjaan Sampingan dalam Sebulan Terakhir</option>
      <option value="tujuan4-43">Persentase Tenaga Kerja yang Pernah Bekerja di Sektor Pariwisata dalam Tiga Tahun Terakhir Berdasarkan Jenis Industri dan Pendidikan Tertinggi yang Ditamatkan</option>
      <option value="tujuan4-44">Persentase Tenaga Kerja di Industri Pariwisata Menurut Tingkat Pendidikan Tertinggi yang Ditamatkan dan Jenis Kelamin</option>
      <option value="tujuan4-45">Persentase Tenaga Kerja di Industri Pariwisata Menurut Status Pekerjaan dan Keikutsertaan dalam Pelatihan</option>
      <option value="tujuan4-46">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Keikutsertaan dalam Pelatihan</option>
      <option value="tujuan4-47">Persentase Tenaga Kerja di Industri Pariwisata Menurut Tingkat Pendidikan dan Keikutsertaan dalam Pelatihan</option>
      <option value="tujuan4-48">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Kelamin dan Keikutsertaan dalam Pelatihan</option>
      <option value="tujuan4-49">Persentase Tenaga Kerja di Industri Pariwisata Menurut Status Pekerjaan dan Penggunaan Bahasa Asing di Tempat Bekerja</option>
      <option value="tujuan4-50">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Penggunaan Bahasa Asing di Tempat Bekerja</option>
    </select>
  </div>

  <div class="isi-tujuan shadow mt-4">
    <div id="tujuan4-1" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Status Kepemilikan Rumah</h4>
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
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Luas Lantai Rumah (m^2)</h4>
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
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Luas Lantai per Kapita (m^2)</h4>
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
      <h4 class="card-title judul-card ">Persentase Rumah Tangga di Industri Pariwisata yang Memiliki Rumah Lain Selain yang Ditempati Saat Ini Menurut Industri Pariwisata</h4>
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
      <h4 class="card-title judul-card ">Persentase Rumah Tangga di Industri Pariwisata yang Memiliki Rumah Lain Selain yang Ditempati Saat Ini Menurut Jenis Kelamin KRT</h4>
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
      <h4 class="card-title judul-card ">Persentase Rumah Tangga di Industri Pariwisata yang Memiliki Rumah Lain Selain yang Ditempati Saat Ini Menurut Tingkat Pendidikan KRT</h4>
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
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Bahan Bangunan Utama Atap Rumah Terluas</h4>
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
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Bahan Bangunan Utama Dinding Rumah Terluas</h4>
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
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Bahan Bangunan Utama Lantai Rumah Terluas</h4>
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
    <div id="tujuan4-10" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Kepemilikan Serta Penggunaan Fasilitas Buang Air Besar</h4>
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
    <div id="tujuan4-11" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Jenis Kloset yang Digunakan Rumah Tangga</h4>
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
    <div id="tujuan4-12" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Tempat Pembuangan Akhir Tinja</h4>
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
    <div id="tujuan4-13" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Sumber Air Utama yang Digunakan Rumah Tangga untuk Minum</h4>
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
    <div id="tujuan4-14" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Rumah Tangga di Industri Pariwisata dengan Sumber Air Minum dari Sumur Bor/Pompa, Sumur Terlindung, Sumur Tak Terlindung, Mata Air Terlindung, dan Mata Air Tak Terlindung menurut Provinsi, Daerah Tempat Tinggal dan Jarak ke Tempat Penampungan Limbah/Kotoran/Tinja Terdekat</h4>
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
    <div id="tujuan4-15" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Rumah Tangga di Industri Pariwisata dan Sumber Air Utama yang Digunakan Rumah Tangga untuk Mandi/Cuci/dll.</h4>
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
    <div id="tujuan4-16" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Rumah Tangga di Industri Pariwisata dengan Sumber Air untuk Memasak/Mandi/Cuci/dll dari Sumur Bor/Pompa, Sumur Terlindung, Sumur Tak Terlindung, Mata Air Terlindung, dan Mata Air Tak Terlindung terhadap Jarak ke Tempat Penampungan Limbah/Kotoran/Tinja Terdekat</h4>
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
    <div id="tujuan4-17" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Rumah Tangga di Industri Pariwisata menurut Industri dan Sumber Air Minum Bersih dan Akses Air Minum Layak</h4>
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
    <div id="tujuan4-18" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Rumah Tangga di Industri Pariwisata menurut Industri dan Sanitasi Layak</h4>
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
    <div id="tujuan4-19" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Rumah Tangga di Industri Pariwisata menurut Industri dan Rumah Layak Huni</h4>
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
    <div id="tujuan4-20" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Usia</h4>
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
    <div id="tujuan4-21" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Hubungan dengan KRT</h4>
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
    <div id="tujuan4-22" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Status Perkawinan</h4>
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
    <div id="tujuan4-23" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Jenis Kelamin</h4>
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
    <div id="tujuan4-24" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata menurut Jenis Industri</h4>
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
    <div id="tujuan4-25" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Status Pekerjaan dan Jenis Kelamin</h4>
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
    <div id="tujuan4-26" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Jumlah Pendapatan</h4>
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
    <div id="tujuan4-27" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Tempat Bekerjanya Menggunakan Internet</h4>
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
    <div id="tujuan4-28" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Tempat Bekerjanya Menggunakan Internet untuk Promosi</h4>
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
    <div id="tujuan4-29" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Tempat Bekerjanya Menggunakan Internet untuk Komunikasi</h4>
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
    <div id="tujuan4-30" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Tempat Bekerjanya Menggunakan Internet untuk Kegiatan Transaksi Barang/Jasa</h4>
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
    <div id="tujuan4-31" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja dan Keinginan untuk Menambah Pekerjaan</h4>
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
    <div id="tujuan4-32" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja yang Sedang Bekerja di Industri Pariwisata menurut Industri Pariwisata dan Status Pekerjaan Utama</h4>
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
    <div id="tujuan4-33" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja dan Lama Bekerja</h4>
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
    <div id="tujuan4-34" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja dan Kepunyaan Pekerjaan Sebelumnya</h4>
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
    <div id="tujuan4-35" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja dan Kepunyaan Pekerjaan di Sektor Pariwisata Sebelumnya</h4>
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
    <div id="tujuan4-36" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Jumlah Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja Sekarang dan Jenis Industri Tempat Bekerja Sebelumnya</h4>
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
    <div id="tujuan4-37" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri Tempat Bekerja Sebelumnya dan Lama Bekerja</h4>
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
    <div id="tujuan4-38" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Memiliki Pekerjaan Lainnya (Multiple Jobs)</h4>
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
    <div id="tujuan4-39" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Jenis Kelamin yang Memiliki Pekerjaan Lainnya (Multiple Jobs)</h4>
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
    <div id="tujuan4-40" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Rata-Rata Jumlah Jam Kerja Pekerjaan Sampingan per hari Dikurangi Waktu Istirahat</h4>
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
    <div id="tujuan4-41" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja Industri Pariwisata Menurut Jenis Industri yang Memiliki Pendapatan Sampingan Lebih Besar daripada Pekerjaan Utama</h4>
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
    <div id="tujuan4-42" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Jumlah Pendapatan Pekerjaan Sampingan dalam Sebulan Terakhir</h4>
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
    <div id="tujuan4-43" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja yang Pernah Bekerja di Sektor Pariwisata dalam Tiga Tahun Terakhir Berdasarkan Jenis Industri dan Pendidikan Tertinggi yang Ditamatkan</h4>
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
    <div id="tujuan4-44" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Tingkat Pendidikan Tertinggi yang Ditamatkan dan Jenis Kelamin</h4>
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
    <div id="tujuan4-45" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Status Pekerjaan dan Keikutsertaan dalam Pelatihan</h4>
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
    <div id="tujuan4-46" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Keikutsertaan dalam Pelatihan</h4>
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
    <div id="tujuan4-47" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Tingkat Pendidikan dan Keikutsertaan dalam Pelatihan</h4>
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
    <div id="tujuan4-48" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Kelamin dan Keikutsertaan dalam Pelatihan</h4>
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
    <div id="tujuan4-49" class="datatujuan" style="width:100%">
      <h4 class="card-title judul-card ">Persentase Tenaga Kerja di Industri Pariwisata Menurut Status Pekerjaan dan Penggunaan Bahasa Asing di Tempat Bekerja</h4>
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

    <div id="tujuan4-50" class="datatujuan" style="width:100%">
      <div class="card">
        <div class="card-header">
          <strong>Persentase Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri dan Penggunaan Bahasa Asing di Tempat Bekerja</strong>
        </div>
        <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
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