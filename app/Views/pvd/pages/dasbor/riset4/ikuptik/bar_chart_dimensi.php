<div class="row portfolio-container">
          <style>
            .konten-teks {
                padding: 10%;
                color: #506396;
                /* font-family: 'Poppins', 'Courier', 'monospace'; */
            }

            .konten-teks .card-title {
                font-weight: bold;
                font-size: 50px;
                /* font-family: 'Poppins', 'Courier', 'monospace'; */
                color: #493a5a;

            }

            .konten-teks .subs {
                font-weight: bold;
                font-size: 30px;

            }

            .card-text {
                /* font-family: 'Poppins', 'Courier', 'monospace'; */
                color: #506396;
            }
          </style>

          <!-- Charts and Interpretations -->
          <div class="portfolio-item filter-riset4-semua" onresize="responsivefonts()">
              <div class="isi-tujuan shadow mt-0 mb-0">
                  <h4 class="card-title judul-card">Dimensi Penyusun IKUPTIK</h4>
                  <div class="card-body">
                      <div class="row">
                            <!-- Part 0 -->
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card shadow">
                                  <div class="pb-2 card-body">
                                      <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                                              <button id="download-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-1">
                                                  <i class="fa-solid fa-download"></i>
                                              </button>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="mb-0 col-lg-7 grid-margin">
                                              <div>
                                                  <div class ="chartBox" style=" height:350px;"> 
                                                      <canvas id="chart-1"></canvas>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                              <div>
                                                  <h4>Interpretasi</h4>
                                                  <p id="interpretasi-0" class="text-justify">
                                                  Pada unit-unit usaha pariwisata di Kota Batu, dimensi yang tergolong kurang siap dalam memanfaatkan TIK adalah Penggunaan TIK, sedangkan dimensi-dimensi lain sudah tergolong cukup siap dengan tingkat kesiapan tertinggi pada dimensi Ketersediaan Prasarana TIK, yaitu dengan indeks sebesar 68,69.                                                 
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <!-- Part 1 -->
                          <div class="col-12 grid-margin stretch-card">
                              <div class="card shadow">
                                  <div class="pb-2 card-body">
                                      <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                      <div class="selectBox mt-2 me-2">
                            <form action="">
                                <select style="width: 250px" class="dropdownunduh1" id="bar-kecamatan-1">
                                    <option value="total">Pilih Dimensi:</option>
                                    <option value="total">Total</option>
                                    <option value="dimensi1">Infrastruktur dan Konektivitas</option>
                                    <option value="dimensi2">Penggunaan TIK</option>
                                    <option value="dimensi3">Sumber Daya Manusia</option>
                                    <option value="dimensi4">Manajemen Organisasi</option>
                                    <option value="dimensi5">Ketersediaan Prasarana TIK</option>
                                    <option value="dimensi6">Motivasi Penggunaan TIK</option>
                                </select>
                            </form>
                        </div>
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                                              <button id="download-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-2">
                                                  <i class="fa-solid fa-download"></i>
                                              </button>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="mb-0 col-lg-7 grid-margin">
                                              <div>
                                                  <div class ="chartBox" style=" height:350px;"> 
                                                      <canvas id="chart-2"></canvas>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                              <div>
                                                  <h4 style="margin-top: 1.5rem;">Interpretasi</h4>
                                                  <p id="interpretasi-1" class="text-justify">
                                                        Berdasarkan nilai IKUPTIK total, unit-unit usaha pariwisata pada tiap kecamatan di Kota Batu cukup siap dalam memanfaatkan TIK. Namun, Kecamatan Bumiaji memiliki tingkat kesiapan yang paling tinggi di antara yang lain dengan nilai indeks sebesar 48,23.
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- Part 2 -->
                          <div class="col-12 grid-margin stretch-card">
                              <div class="card shadow">
                                  <div class="pb-2 card-body">
                                      <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                      <div class="selectBox mt-2 me-2">
                            <form action="">
                                <select style="width: 250px" class="dropdownunduh1" id="bar-jenis-1">
                                <option value="total">Pilih Dimensi:</option>
                                    <option value="total">Total</option>
                                    <option value="dimensi1">Infrastruktur dan Konektivitas</option>
                                    <option value="dimensi2">Penggunaan TIK</option>
                                    <option value="dimensi3">Sumber Daya Manusia</option>
                                    <option value="dimensi4">Manajemen Organisasi</option>
                                    <option value="dimensi5">Ketersediaan Prasarana TIK</option>
                                    <option value="dimensi6">Motivasi Penggunaan TIK</option>
                                </select>
                            </form>
                        </div>
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                                              <button id="download-3" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-3">
                                                  <i class="fa-solid fa-download"></i>
                                              </button>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="mb-0 col-lg-7 grid-margin">
                                              <div>
                                                  <div class ="chartBox" style=" height:350px;"> 
                                                      <canvas id="chart-3"></canvas>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                              <div>
                                                  <h4 style="margin-top: 1.5rem;">Interpretasi</h4>
                                                  <p id="interpretasi-2" class="text-justify">
                                                  Ketiga jenis unit usaha pariwisata di Kota Batu tergolong cukup siap dalam memanfaatkan TIK. Namun, usaha pariwisata berjenis Penyediaan Akomodasi memiliki tingkat kesiapan yang paling tinggi di antara yang lain dengan nilai IKUPTIK sebesar 52,08.</p>
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

          <!-- Modal Dasbor -->
          <?php include('modal_ikuptik_dimensi.php') ?>
        </div>