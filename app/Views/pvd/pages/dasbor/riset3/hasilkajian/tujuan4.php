<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<div class="container px-0">
    <header class="section-header">
        <h6 style="color: #4b395f;"><strong>Mengukur tingkat sadar wisata dari tenaga kerja industri pariwisata dengan indeks komposit.</strong>
        </h6>
    </header>
    <hr class="hrjudul">

    <div class="menu">
        <select class="form-select form-select-sm tujuanfilter" style="border-radius: 15px;" name="tujuan3" id="name">
            <option selected value="tujuan4-1">Indeks Tingkat Sadar Wisata pada Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri</option>
            <option value="tujuan4-2">Indeks Tingkat Sadar Wisata pada Tenaga Kerja di Industri Pariwisata Dimensi "Aman" Menurut Jenis Industri</option>
            <option value="tujuan4-3">Indeks Tingkat Sadar Wisata pada Tenaga Kerja di Industri Pariwisata Dimensi "Tertib" Menurut Jenis Industri</option>
            <option value="tujuan4-4">Indeks Tingkat Sadar Wisata pada Tenaga Kerja di Industri Pariwisata Dimensi "Bersih" Menurut Jenis Industri</option>
            <option value="tujuan4-5">Indeks Tingkat Sadar Wisata pada Tenaga Kerja di Industri Pariwisata Dimensi "Indah" Menurut Jenis Industri</option>
            <option value="tujuan4-6">Indeks Tingkat Sadar Wisata pada Tenaga Kerja di Industri Pariwisata Dimensi "Ramah" Menurut Jenis Industri</option>
            <option value="tujuan4-7">Indeks Tingkat Sadar Wisata pada Tenaga Kerja di Industri Pariwisata Dimensi "Kenangan" Menurut Jenis Industri</option>
            <option value="tujuan4-8">Indeks Tingkat Sadar Wisata pada Tenaga Kerja di Industri Pariwisata</option>
        </select>
    </div>

    <div class="isi-tujuan shadow mt-4">
        <div id="tujuan4-1" class="datatujuan" style="width:100%">
            <h4 class="card-title judul-card ">Indeks Tingkat Sadar Wisata pada Tenaga Kerja di Industri Pariwisata Menurut Jenis Industri</h4>
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
            <h4 class="card-title  judul-card">Indeks Tingkat Sadar Wisata pada Tenaga Kerja di Industri Pariwisata Dimensi "Aman" Menurut Jenis Industri</h4>
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
            <h4 class="card-title judul-card ">Indeks Tingkat Sadar Wisata pada Tenaga Kerja di Industri Pariwisata Dimensi "Tertib" Menurut Jenis Industri</h4>
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
            <h4 class="card-title judul-card ">Indeks Tingkat Sadar Wisata pada Tenaga Kerja di Industri Pariwisata Dimensi "Bersih" Menurut Jenis Industri</h4>
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
            <h4 class="card-title judul-card ">Indeks Tingkat Sadar Wisata pada Tenaga Kerja di Industri Pariwisata Dimensi "Indah" Menurut Jenis Industri</h4>
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
            <h4 class="card-title judul-card ">Indeks Tingkat Sadar Wisata pada Tenaga Kerja di Industri Pariwisata Dimensi "Ramah" Menurut Jenis Industri</h4>
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
            <h4 class="card-title judul-card ">Indeks Tingkat Sadar Wisata pada Tenaga Kerja di Industri Pariwisata Dimensi "Kenangan" Menurut Jenis Industri</h4>
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
            <h4 class="card-title judul-card ">Indeks Tingkat Sadar Wisata pada Tenaga Kerja di Industri Pariwisata</h4>
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
    </div>
</div>


<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- dropdown show/hide content-->
<script src="<?= base_url('pvd/js/riset3/dropdown_showhide.js') ?>"></script>

<?= $this->endSection(); ?>