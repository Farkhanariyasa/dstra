<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>



<div class="container px-0">
  <header class="section-header">
    <h6 style="color: #4b395f;"><strong>Menganalisis faktor-faktor yang memengaruhi jam kerja tenaga kerja lokal di industri pariwisata</strong>
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
              <h3 class="fw-bold">Grafik</h3>
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
              <h3 class="fw-bold">Grafik</h3>
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
            <h3 class="mb-3 fw-bold">Persamaan Regresi Logistik</h3>
            <div class="card-body p-2 border rounded">
                <div id="reglogContainer"></div>
                <p>Ket: * signifikan pada tingkat signifikansi 5%</p>

                <p class="fw-bold">Variabel yang signifikan</p>
                <ul>
                    <li>Jenis industri (Penyediaan jasa makan dan minum serta perdagangan barang-barang pariwisata)</li>
                    <li>Usia</li>
                    <li>Letak geografis</li>
                    <li>Wilayah tempat tinggal</li>
                </ul> 
            </div>
            <h3 class="mt-4 mb-3 fw-bold">Interpretasi</h3>
            <div class="card-body p-2 border rounded text-justify">
              <p>
              Pada model MLE diperoleh 4 variabel penelitian yang signifikan dalam model yakni variabel Industri Pariwisata (dengan kategori yang signifikan adalah Penyedia Jasa Makan dan Minum, Perdagangan Barang-barang Pariwisata, dan Penyediaan Jasa Akomodasi bagi Wisatawan), Usia, Letak Geografis, dan Wilayah Tempat Tinggal.
              </p>

              <p class="fw-bold">Industri Pariwisata</p>
              <p>Regresi logistik PMLE yang dipilih sebagai model terbaik menunjukkan bahwa terdapat 2 industri yang berpengaruh terhadap jam kerja tenaga kerja di industri pariwisata, yaitu industri penyediaan jasa makan dan minum dan industri perdagangan barang-barang pariwisata. Berdasarkan nilai odds ratio yang diperoleh, dapat disimpulkan bahwa</p>
              <ul>
                <li>Kecenderungan tenaga kerja untuk bekerja penuh waktu (dibandingkan dengan tidak penuh waktu) saat bekerja di industri penyediaan jasa makan dan minum adalah sebesar 4,936 kali dibandingkan dengan yang bekerja di industri pariwisata lainnya dengan asumsi variabel lain konstan.</li>
                <li>Kecenderungan tenaga kerja untuk bekerja penuh waktu (dibandingkan dengan tidak penuh waktu) saat bekerja di industri perdagangan barang-barang pariwisata adalah sebesar 5,752 kali dibandingkan dengan yang bekerja di industri pariwisata lainnya dengan asumsi variabel lain konstan.</li>
              </ul>
                
              <p class="fw-bold">Usia</p>
              <p>
              Berdasarkan hasil regresi logistik PMLE di atas, nilai odds ratio usia sebesar 0,979. Hal ini menunjukkan bahwa pekerja di industri pariwisata yang mempunyai usia satu tahun lebih tua memiliki kecenderungan bekerja penuh waktu sebesar 0,979 kali (dibandingkan bekerja tidak penuh waktu) dengan asumsi variabel lain konstan. Berdasarkan hasil uji signifikansi parameter, variabel usia bernilai signifikan memengaruhi jam kerja tenaga kerja di industri pariwisata pada tingkat signifikansi 5%. 
              </p>
              <p>
              Hasil bahwa pengaruh variabel usia bernilai negatif menunjukkan bahwa tenaga kerja berusia muda lebih dibutuhkan dalam industri pariwisata. Hal ini sesuai dengan karakteristik industri pariwisata yang membutuhkan tenaga kerja yang terampil dan cekatan untuk melayani wisatawan baik domestik maupun mancanegara.
              </p>

              <p class="fw-bold">Jenis Kelamin</p>
              <p>
              Berdasarkan hasil regresi logistik PMLE di atas, nilai odds ratio jenis kelamin sebesar 1,415. Hal ini berarti bahwa tenaga kerja yang berjenis kelamin laki-laki memiliki kecenderungan lebih besar, yaitu 1,415 kali untuk bekerja penuh waktu dibandingkan tenaga kerja yang berjenis kelamin perempuan, dengan asumsi variabel lain konstan. Berdasarkan hasil uji signifikansi parameter, variabel jenis kelamin tidak bernilai signifikan memengaruhi jam kerja tenaga kerja di industri pariwisata pada tingkat signifikansi 5%.
              </p>
              <p>
              Temuan bahwa tidak terdapat perbedaan yang signifikan antara jam kerja laki-laki dengan perempuan menunjukkan bahwa tidak adanya persepsi breadwinners terhadap jenis kelamin laki-laki pada tenaga kerja di industri pariwisata.
              </p>

              <p class="fw-bold">Letak Geografis</p>
              <p>
              Nilai odds ratio untuk pekerja di industri pariwisata yang bekerja di utara adalah sebesar 2,264. Hal ini berarti bahwa tenaga kerja yang bekerja di daerah utara memiliki kecenderungan lebih besar, yaitu 2,264 kali untuk bekerja penuh waktu dibandingkan tenaga kerja yang bekerja di daerah selatan, dengan asumsi variabel lain konstan.
              </p>
              <p>
              Bagian utara Kabupaten Malang memiliki daya tarik alam yang lebih kuat. Wilayah ini meliputi dataran tinggi seperti Gunung Bromo, Gunung Semeru, dan Kawah Ijen. Keindahan alam, pemandangan yang menakjubkan, dan keberagaman geografis yang ditawarkan oleh daerah ini menjadi daya tarik utama bagi wisatawan. Tempat-tempat seperti ini menarik banyak pengunjung dari dalam dan luar negeri, yang pada gilirannya mendorong pengembangan fasilitas pariwisata di daerah tersebut. Ini dapat mempengaruhi preferensi pekerjaan penuh waktu karena adanya lebih banyak pilihan pekerjaan yang tersedia. Selain itu, bagian utara Kabupaten Malang memiliki rencana pariwisata yang lebih baik dan strategis. Perencanaan yang matang, termasuk pengembangan produk pariwisata, pengaturan kebijakan, pengelolaan destinasi, dan perlindungan lingkungan, dapat berdampak pada pengembangan pariwisata yang berkelanjutan.
              </p>

              <p class="fw-bold">Wilayah Tempat Tinggal</p>
              <p>
              Nilai odds ratio untuk pekerja di industri pariwisata yang tinggal di wilayah perkotaan sebesar 2,339 yang berarti bahwa pekerja di industri pariwisata yang tinggal di wilayah perkotaan memiliki kecenderungan yang lebih besar, yaitu 2,339 kali, untuk bekerja penuh waktu dibandingkan pekerja di industri pariwisata yang tinggal di wilayah perdesaan dengan asumsi variabel lain konstan.
              </p>
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

<!-- Rumus Reglog -->
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>
<script>
  function createMathJaxEquation(mathContainerId, equation) {
    var script = document.createElement("script");
    script.type = "math/tex; mode=display";
    script.appendChild(document.createTextNode(equation));
    var mathContainer = document.getElementById(mathContainerId);
    mathContainer.appendChild(script);
    MathJax.Hub.Queue(["Typeset", MathJax.Hub, mathContainer]);
  }
  function createMathJaxEquationBasedOnWidth(mathContainerId, equationSmall, equationLarge) {
    var windowWidth = window.innerWidth;

    if (windowWidth <= 450) {
      createMathJaxEquation(mathContainerId, equationSmall);
    } else {
      createMathJaxEquation(mathContainerId, equationLarge);
    }
  }
  var equationSmall = "\\begin{align}\\ln&(\\frac{p_{i}}{1-p_{i}}) = -1,263 + 1,597ind(1)^* \\\\ &+ 1,750ind(2)^* + 0,648ind(3) \\\\ &- 0,010ind(4) + 0,721ind(5) \\\\ &+ 0,347jk + 0,106didik \\\\ &- 0,021usia^* + 0,437kawin \\\\ &+ 0,319latih + 0,256umr \\\\ &+ 0,817geo^* + 0,850wil^* \\end{align}";
  var equationLarge = "\\begin{align}\\ln\\left(\\frac{p_{i}}{1-p_{i}}\\right) = &-1,263 + 1,597ind(1)^* + 1,750ind(2)^* \\\\ &+ 0,648ind(3) - 0,010ind(4) + 0,721ind(5) \\\\ &+ 0,347jk + 0,106didik - 0,021usia^* \\\\ &+ 0,437kawin + 0,319latih + 0,256umr \\\\ &+ 0,817geo^* + 0,850wil^* \\end{align}";
  createMathJaxEquationBasedOnWidth("reglogContainer", equationSmall, equationLarge);
</script>

<?= $this->endSection(); ?>