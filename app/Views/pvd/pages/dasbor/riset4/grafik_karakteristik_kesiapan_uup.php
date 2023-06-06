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
              <!-- <div class="isi-tujuan shadow mt-0 mb-0">
                  <h4 class="card-title judul-card">Statistik Pemilik atau Pengelola Usaha Pariwisata di Kota Batu</h4> -->
                  <div class="card-body">
                      <div class="row">
                            <!-- Tabulasi 1 -->
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <strong>
                                            Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK Berdasarkan Jenis Kelamin
                                        </strong>
                                    </div>
                                    <div class="card-body table-responsive">//button etc.
                                        <table class="table table-hover table-bordered table-responsive" id="tabel-1" style="width:100%">
                                        <thead style="color: #fff;  font-weight:bold; text-align:center;">
                                        <tr>
                                            <th rowspan="3">Jenis Kelamin</th>
                                            <th colspan="6">Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK</th>
                                            <th rowspan="2" colspan="2">Total</th>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Kurang Siap</th>
                                            <th colspan="2">Cukup Siap</th>
                                            <th colspan="2">Siap</th>
                                        </tr>
                                        <tr>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Laki-laki</td>
                                            <td>122</td>
                                            <td>25.684</td>
                                            <td>316</td>
                                            <td>66.526</td>
                                            <td>37</td>
                                            <td>7.789</td>
                                            <td>475</td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>Perempuan</td>
                                            <td>126</td>
                                            <td>28.000</td>
                                            <td>308</td>
                                            <td>68.444</td>
                                            <td>16</td>
                                            <td>3.556</td>
                                            <td>450</td>
                                            <td>100</td>   
                                        </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Grafik 1 -->
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow">
                                    <div class="pb-2 card-body">
                                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                                <button id="download-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-1">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-0 col-lg-7 grid-margin">
                                                <div>
                                                    <div class = "chartBox" style="position: relative; height:65vh;"> 
                                                        <canvas id="chart-1"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                                <div>
                                                    <h4>Interpretasi</h4>
                                                    <p id="interpretasi-0" class="text-justify">
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tabulasi 2 -->
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <strong>
                                        Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK berdasarkan interval usia
                                        </strong>
                                    </div>
                                    <div class="card-body table-responsive">//button etc.
                                        <table class="table table-hover table-bordered table-responsive" id="tabel-1" style="width:100%">
                                        <thead style="color: #fff;  font-weight:bold; text-align:center;">
                                        <tr>
                                            <th rowspan="3">Interval Usia</th>
                                            <th colspan="6">Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK</th>
                                            <th rowspan="2" colspan="2">Total</th>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Kurang Siap</th>
                                            <th colspan="2">Cukup Siap</th>
                                            <th colspan="2">Siap</th>
                                        </tr>
                                        <tr>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>15-19</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                            <td>100</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>20-24</td>
                                            <td>1</td>
                                            <td>3.226</td>
                                            <td>26</td>
                                            <td>83.871</td>
                                            <td>4</td>
                                            <td>12.903</td>
                                            <td>31</td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>25-29</td>
                                            <td>6</td>
                                            <td>8.000</td>
                                            <td>57</td>
                                            <td>76.000</td>
                                            <td>12</td>
                                            <td>16.000</td>
                                            <td>75</td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>30-34</td>
                                            <td>6</td>
                                            <td>6.186</td>
                                            <td>79</td>
                                            <td>81.443</td>
                                            <td>12</td>
                                            <td>12.371</td>
                                            <td>97</td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>35-39</td>
                                            <td>12</td>
                                            <td>12.245</td>
                                            <td>76</td>
                                            <td>77.551</td>
                                            <td>10</td>
                                            <td>10.204</td>
                                            <td>98</td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>40-44</td>
                                            <td>25</td>
                                            <td>16.892</td>
                                            <td>117</td>
                                            <td>79.054</td>
                                            <td>6</td>
                                            <td>4.054</td>
                                            <td>148</td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>45-49</td>
                                            <td>23</td>
                                            <td>21.296</td>
                                            <td>81</td>
                                            <td>75.000</td>
                                            <td>4</td>
                                            <td>3.704</td>
                                            <td>108</td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>50-54</td>
                                            <td>54</td>
                                            <td>39.706</td>
                                            <td>80</td>
                                            <td>58.824</td>
                                            <td>2</td>
                                            <td>1.471</td>
                                            <td>136</td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>55-59</td>
                                            <td>39</td>
                                            <td>39.000</td>
                                            <td>58</td>
                                            <td>58.000</td>
                                            <td>3</td>
                                            <td>3.000</td>
                                            <td>100</td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>60 ke atas</td>
                                            <td>82</td>
                                            <td>63.556</td>
                                            <td>47</td>
                                            <td>36.434</td>
                                            <td>0</td>
                                            <td>0.000</td>
                                            <td>129</td>
                                            <td>100</td>   
                                        </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Grafik 2 -->
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow">
                                    <div class="pb-2 card-body">
                                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                                <button id="download-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-1">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-0 col-lg-7 grid-margin">
                                                <div>
                                                    <div class = "chartBox" style="position: relative; height:65vh;"> 
                                                        <canvas id="chart-1"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                                <div>
                                                    <h4>Interpretasi</h4>
                                                    <p id="interpretasi-0" class="text-justify">
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tabulasi 3 -->
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <strong>
                                        Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK berdasarkan tingkat pendidikan                                        </strong>
                                    </div>
                                    <div class="card-body table-responsive">//button etc.
                                        <table class="table table-hover table-bordered table-responsive" id="tabel-1" style="width:100%">
                                        <thead style="color: #fff;  font-weight:bold; text-align:center;">
                                        <tr>
                                            <th rowspan="3">Tingkat Pendidikan</th>
                                            <th colspan="6">Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK</th>
                                            <th rowspan="2" colspan="2">Total</th>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Kurang Siap</th>
                                            <th colspan="2">Cukup Siap</th>
                                            <th colspan="2">Siap</th>
                                        </tr>
                                        <tr>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Maksimal Pendidikan Dasar</td>
                                            <td>129</td>
                                            <td>56.579</td>
                                            <td>99</td>
                                            <td>43.421</td>
                                            <td>0</td>
                                            <td>0.000</td>
                                            <td>228</td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>Pendidikan Menengah</td>
                                            <td>117</td>
                                            <td>20.000</td>
                                            <td>432</td>
                                            <td>73.846</td>
                                            <td>36</td>
                                            <td>6.154</td>
                                            <td>585</td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>Pendidikan Tinggi</td>
                                            <td>2</td>
                                            <td>1.786</td>
                                            <td>93</td>
                                            <td>83.036</td>
                                            <td>17</td>
                                            <td>15.179</td>
                                            <td>112</td>
                                            <td>100</td>   
                                        </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Grafik 3 -->
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow">
                                    <div class="pb-2 card-body">
                                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                                <button id="download-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-1">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-0 col-lg-7 grid-margin">
                                                <div>
                                                    <div class = "chartBox" style="position: relative; height:65vh;"> 
                                                        <canvas id="chart-1"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                                <div>
                                                    <h4>Interpretasi</h4>
                                                    <p id="interpretasi-0" class="text-justify">
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tabulasi 4 -->
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <strong>
                                        Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK berdasarkan jenis usaha pariwisata                                        </strong>
                                    </div>
                                    <div class="card-body table-responsive">//button etc.
                                        <table class="table table-hover table-bordered table-responsive" id="tabel-1" style="width:100%">
                                        <thead style="color: #fff;  font-weight:bold; text-align:center;">
                                        <tr>
                                            <th rowspan="3">Jenis Usaha Pariwisata</th>
                                            <th colspan="6">Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK</th>
                                            <th rowspan="2" colspan="2">Total</th>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Kurang Siap</th>
                                            <th colspan="2">Cukup Siap</th>
                                            <th colspan="2">Siap</th>
                                        </tr>
                                        <tr>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Jasa Transportasi Wisata</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>Jasa Penyedia Makanan dan Minuman</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>Penyedia Akomodasi</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>100</td>   
                                        </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Grafik 4 -->
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow">
                                    <div class="pb-2 card-body">
                                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                                <button id="download-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-1">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-0 col-lg-7 grid-margin">
                                                <div>
                                                    <div class = "chartBox" style="position: relative; height:65vh;"> 
                                                        <canvas id="chart-1"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                                <div>
                                                    <h4>Interpretasi</h4>
                                                    <p id="interpretasi-0" class="text-justify">
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tabulasi 5 -->
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <strong>
                                        Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK berdasarkan skala usaha pariwisata                                        </strong>
                                    </div>
                                    <div class="card-body table-responsive">//button etc.
                                        <table class="table table-hover table-bordered table-responsive" id="tabel-1" style="width:100%">
                                        <thead style="color: #fff;  font-weight:bold; text-align:center;">
                                        <tr>
                                            <th rowspan="3">Skala Usaha Pariwisata</th>
                                            <th colspan="6">Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK</th>
                                            <th rowspan="2" colspan="2">Total</th>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Kurang Siap</th>
                                            <th colspan="2">Cukup Siap</th>
                                            <th colspan="2">Siap</th>
                                        </tr>
                                        <tr>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                            <th>Jumlah</th>
                                            <th>(%)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Mikro</td>
                                            <td>43</td>
                                            <td>26.220</td>
                                            <td>97</td>
                                            <td>59.146</td>
                                            <td>24</td>
                                            <td>14.634</td>
                                            <td>164</td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>Kecil</td>
                                            <td>192</td>
                                            <td>28.029</td>
                                            <td>472</td>
                                            <td>68.905</td>
                                            <td>21</td>
                                            <td>3.066</td>
                                            <td>685</td>
                                            <td>100</td>   
                                        </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Grafik 5 -->
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow">
                                    <div class="pb-2 card-body">
                                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                                <button id="download-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-1">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-0 col-lg-7 grid-margin">
                                                <div>
                                                    <div class = "chartBox" style="position: relative; height:65vh;"> 
                                                        <canvas id="chart-1"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                                <div>
                                                    <h4>Interpretasi</h4>
                                                    <p id="interpretasi-0" class="text-justify">
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
              <!-- </div> -->
          </div>

          <!-- Modal Dasbor -->
          <?php include('modal_karakteristik_kesiapan_uup.php') ?>
        </div>