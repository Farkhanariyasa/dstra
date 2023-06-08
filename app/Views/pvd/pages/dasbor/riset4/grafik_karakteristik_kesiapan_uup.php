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
                  <h4 class="card-title judul-card">Sebaran IKUPTIK</h4>
                  <div class="card-body">
                      <div class="row">


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
                                                    Visualisasi di atas menunjukkan sebaran indeks kesiapan usaha pariwisata dalam pemanfaatan TIK berdasarkan jenis kelamin responden. Responden yang berjenis laki-laki untuk cukup siap dalam pemanfaatan TIK sebesar 66.526%, kurang siap dalam pemanfaatan TIK sebesar 25.684% dan sisanya siap sebesar 7.789%. Sementara itu, pada responden yang berjenis kelamin perempuan untuk cukup siap dalam pemanfaatan TIK sebesar 68.444%, kurang siap dalam pemanfaatan TIK sebesar 28% dan sisanya siap sebesar 3.556%.                                                     </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tabulasi 1 -->
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <strong>
                                            Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK Berdasarkan Jenis Kelamin
                                        </strong>
                                    </div>
                                    <div class="card-body table-responsive"><!-- //button etc. -->
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
                                            <div class="mb-0 col-lg-12 grid-margin">
                                                <div>
                                                    <div class = "chartBox" style="position: relative; height:55vh;"> 
                                                        <canvas id="chart-2"></canvas>
                                                    </div>
                                                    <h4>Interpretasi</h4>
                                                    <p id="interpretasi-0" class="text-justify">
                                                        Tabel di bawah ini menunjukkan sebaran indeks kesiapan usaha pariwisata dalam pemanfaatan TIK 
                                                        berdasarkan interval usia. Pada interval usia termuda yaitu 15-19 tahun, menyatakan cukup 
                                                        siap dalam pemanfaatan TIK. Sementara itu, pada interval usia 60 tahun ke atas, sebanyak 82 
                                                        responden (63.566%) menyatakan kurang siap dalam memanfaatkan TIK dan sisanya yaitu 47 
                                                        responden (36.434%) menyatakan cukup siap dalam memanfaatkan TIK. Diperoleh pula informasi, 
                                                        mayoritas responden untuk siap dalam memanfaatkan TIK ada pada interval usia 20-24 tahun, 
                                                        untuk cukup siap memanfaatkan TIK ada pada interval 20-24 dan kurang siap memanfaatkan TIK 
                                                        ada pada interval 60 tahun ke atas.
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                                <div>
                                                    <h4>Interpretasi</h4>
                                                    <p id="interpretasi-0" class="text-justify">
                                                        Tabel di atas menunjukkan sebaran indeks kesiapan usaha pariwisata dalam pemanfaatan TIK 
                                                        berdasarkan interval usia. Pada interval usia termuda yaitu 15-19 tahun, menyatakan cukup 
                                                        siap dalam pemanfaatan TIK. Sementara itu, pada interval usia 60 tahun ke atas, sebanyak 82 
                                                        responden (63.566%) menyatakan kurang siap dalam memanfaatkan TIK dan sisanya yaitu 47 
                                                        responden (36.434%) menyatakan cukup siap dalam memanfaatkan TIK. Diperoleh pula informasi, 
                                                        mayoritas responden untuk siap dalam memanfaatkan TIK ada pada interval usia 20-24 tahun, 
                                                        untuk cukup siap memanfaatkan TIK ada pada interval 20-24 dan kurang siap memanfaatkan TIK 
                                                        ada pada interval 60 tahun ke atas.
                                                    </p>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tabulasi 2 -->
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <strong>
                                        Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK Berdasarkan Interval Usia
                                        </strong>
                                    </div>
                                    <div class="card-body table-responsive"><!-- //button etc. -->
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
                                                        <canvas id="chart-3"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                                <div>
                                                    <h4>Interpretasi</h4>
                                                    <p id="interpretasi-0" class="text-justify">
                                                    Berdasarkan visualisasi, kesiapan unit usaha dalam memanfaatkan TIK untuk keperluan 
                                                    usahanya dapat tercermin dari tingkat pendidikan yang ditamatkan oleh pemilik atau 
                                                    pengelola usaha tersebut. Bagi para pemilik atau pengelola yang hanya mampu menempuh 
                                                    pendidikan dasar lebih dari separuhnya atau sekitar 57% tergolong ke dalam kategori kurang 
                                                    siap. Sedangkan tidak ada satupun yang tergolong dalam kategori siap. Hal ini berbeda dengan 
                                                    pemilik atau pengelola usaha pariwisata dengan tingkat pendidikan menengah maupun tinggi yang 
                                                    mayoritas tergolong ke dalam kategori cukup siap.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-12 grid-margin text-justify">
                                                <div>
                                                    <p>
                                                        Pada pendidikan tinggi, usaha pariwisata yang tergolong dalam kategori siap memiliki 
                                                        persentase yang lebih besar dibandingkan tingkat pendidikan di bawahnya, yakni sekitar 
                                                        15% dari keseluruhan pemilik atau pengelola yang menamatkan jenjang pendidikan tinggi. 
                                                        Tentunya hal ini semakin memperkuat bahwa semakin tinggi tingkat pendidikan akan lebih siap 
                                                        dalam memanfaatkan TIK untuk kebutuhan usahanya.
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
                                        Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK Berdasarkan Tingkat Pendidikan</strong>
                                    </div>
                                    <div class="card-body table-responsive"><!-- //button etc. -->
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
                                            <div class="mb-0 col-lg-6 grid-margin">
                                                <div>
                                                    <div class = "chartBox" style="position: relative; height:65vh;"> 
                                                        <canvas id="chart-4"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                                <div>
                                                    <h4>Interpretasi</h4>
                                                    <p id="interpretasi-0" class="text-justify">
                                                    Berdasarkan grafik, dapat dilihat bahwa jenis usaha jasa penyedia makanan dan minuman memiliki proporsi yang tergolong ke dalam kategori kurang siap paling besar dibandingkan dengan jenis usaha lain dengan sejumlah 192 responden atau sekitar 28%. Hal ini cukup serupa dengan usaha transportasi wisata yang memiliki proporsi usaha pariwisata yang tergolong dalam kategori kurang siap sebesar 26.22 %. Pada usaha penyediaan akomodasi mayoritas digolongkan pada kategori cukup siap dengan angka sekitar 72%. Persentase ini lebih tinggi dibandingkan dengan usaha lain yang memiliki nilai 69% pada usaha jasa penyedia makanan dan minuman dan 59% pada usaha jasa transportasi wisata.                                                     </p>
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
                                        Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK Berdasarkan Jenis Usaha Pariwisata                                        </strong>
                                    </div>
                                    <div class="card-body table-responsive"><!-- //button etc. -->
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
                                            <td>Jasa Penyedia Makanan dan Minuman</td>
                                            <td>192</td>
                                            <td>28.029</td>
                                            <td>472</td>
                                            <td>68.905</td>
                                            <td>21</td>
                                            <td>3.066</td>
                                            <td>685</td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>Penyedia Akomodasi</td>
                                            <td>13</td>
                                            <td>17.105</td>
                                            <td>55</td>
                                            <td>72.368</td>
                                            <td>8</td>
                                            <td>10.526</td>
                                            <td>76</td>
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
                                            <div class="mb-0 col-lg-6 grid-margin">
                                                <div>
                                                    <div class = "chartBox" style="position: relative; height:65vh;"> 
                                                        <canvas id="chart-5"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                                <div>
                                                    <h4>Interpretasi</h4>
                                                    <p id="interpretasi-0" class="text-justify">
                                                    Jika dilihat berdasarkan skala usaha, Usaha berskala kecil secara proporsi memiliki nilai yang lebih besar dibandingkan dengan usaha berskala mikro. Sekitar 14.5% dari total keseluruhan sampel berskala usaha kecil tergolongkan siap dalam memanfaatkan TIK dalam kegiatan usahanya. Hal ini didukung oleh perbedaan proporsi pada kategori kurang siap yang dimana usaha berskala kecil memiliki nilai yang lebih rendah dibandingkan skala mikro. Oleh karenanya, dapat diartikan bahwa diduga secara deskriptif bahwa terdapat kecenderungan bahwa usaha kecil yang dimana memiliki jumlah tenaga kerja yang lebih banyak dibandingkan usaha pariwisata berskala mikro untuk lebih siap dalam memanfaatkan TIK dibandingkan usaha pariwisata berskala mikro.
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
                                        Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK Berdasarkan Skala Usaha Pariwisata</strong>
                                    </div>
                                    <div class="card-body table-responsive"><!-- //button etc. -->
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
                                            <td>244</td>
                                            <td>28.046</td>
                                            <td>581</td>
                                            <td>66.782</td>
                                            <td>45</td>
                                            <td>5.172</td>
                                            <td>870</td>
                                            <td>100</td>   
                                        </tr>
                                        <tr>
                                            <td>Kecil</td>
                                            <td>4</td>
                                            <td>7.273</td>
                                            <td>43</td>
                                            <td>78.182</td>
                                            <td>8</td>
                                            <td>14.545</td>
                                            <td>55</td>
                                            <td>100</td>   
                                        </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                  </div>
              </div>
          </div>

          <!-- Modal Dasbor -->
          <?php include('modal_karakteristik_kesiapan_uup.php') ?>
</div>