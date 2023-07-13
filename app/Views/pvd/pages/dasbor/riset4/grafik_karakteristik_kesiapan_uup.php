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

                            <!-- Grafik 6 -->
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow">
                                    <div class="pb-2 card-body">
                                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                                <button id="download-6" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-6">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-0 col-lg-6 grid-margin">
                                                <div>
                                                    <div class ="chartBox" style=" height:350px;"> 
                                                        <canvas id="chart-6"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                                <div>
                                                    <h4>Interpretasi</h4>
                                                    <p id="interpretasi-0" class="text-justify">
                                                    Secara keseluruhan unit usaha pariwisata yang terpilih menjadi sampel, rata-rata memiliki nilai indeks kesiapan sebesar 49,056 dan standar deviasi sebesar 13,608. Selain itu jika dilihat dari sebaran datanya, nilai terendahnya berada pada nilai 14 dan nilai indeks maksimal bernilai 85. Nilai kuartil pertama, median dan kuartil ketiga berturut-turut sebesar 40, 49, dan 59. Terlihat bahwa nilai kuartil pertama, median, dan ketiga berada pada interval 40-69 dengan rataan sebesar 49,056. Dapat dikatakan bahwa secara deskriptif nilai indeks kesiapan unit usaha pariwisata di Kota batu mengelompok 
                                                    di rataannya dan cenderung tersebar secara normal.                                                    
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tabulasi 6 -->
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <strong>
                                            Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK di Kota Batu
                                        </strong>
                                    </div>
                                    <div class="card-body table-responsive"><!-- //button etc. -->
                                        <table class="table table-hover table-bordered table-responsive" id="tabel-1" style="width:100%">
                                        <thead style="color: #fff;  font-weight:bold; text-align:center;">
                                        <tr class="text-center">
                                            <th colspan="7">Indikator Sebaran dan Pemusatan Data</th>
                                            <th rowspan="2" colspan="2">Banyak Amatan</th>
                                        </tr>

                                        <tr class="text-center">
                                            <th>Minimum</th>
                                            <th>Kuartil 1</th>
                                            <th>Median</th>
                                            <th>Kuartil 3</th>
                                            <th>Maksimum</th>
                                            <th>Rata-rata</th>
                                            <th>Standar Deviasi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="text-center">
                                            <td>14</td>
                                            <td>40</td>
                                            <td>49</td>
                                            <td>59</td>
                                            <td>85</td>
                                            <td>49.056</td>
                                            <td>13.608</td>   
                                            <td>925</td>
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
                                            <div class="mb-0 col-lg-6 grid-margin">
                                                <div>
                                                    <div class ="chartBox" style=" height:350px;"> 
                                                        <canvas id="chart-1"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                                <div>
                                                    <h4>Interpretasi</h4>
                                                    <p id="interpretasi-0" class="text-justify">
                                                    Berdasarkan grafik, dapat terlihat bahwa secara visual tidak menunjukkan adanya perbedaan dari sebaran nilai indeks kesiapan unit usaha pariwisata dalam pemanfaatan TIK berdasarkan jenis kelaminnya.  Pada jenis kelamin laki-laki, memiliki nilai rataan indeks yang lebih besar dibandingkan dengan jenis kelamin perempuan. Mesi begitu, pada jenis kelamin perempuan memiliki nilai maksimum yang lebih tinggi dibandingkan laki-laki dengan indeks sebesar 85 dan termasuk ke dalam mild outlier.
                                                    </p>
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
                                        <tr class="text-center">
                                            <th rowspan="2">Jenis Kelamin</th>
                                            <th colspan="7">Indikator Sebaran dan Pemusatan Data</th>
                                            <th rowspan="2" colspan="2">Banyak Amatan</th>
                                        </tr>

                                        <tr class="text-center">
                                            <th>Minimum</th>
                                            <th>Kuartil 1</th>
                                            <th>Median</th>
                                            <th>Kuartil 3</th>
                                            <th>Maksimum</th>
                                            <th>Rata-rata</th>
                                            <th>Standar Deviasi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="text-center">
                                            <td>Laki-laki</td>
                                            <td>14</td>
                                            <td>40</td>
                                            <td>50</td>
                                            <td>61</td>
                                            <td>84</td>
                                            <td>50.381</td>
                                            <td>14.064</td>   
                                            <td>475</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Perempuan</td>
                                            <td>16</td>
                                            <td>39</td>
                                            <td>47</td>
                                            <td>57</td>
                                            <td>85</td>
                                            <td>47.658</td>
                                            <td>12.979</td>
                                            <td>450</td>   
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
                                                <button id="download-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-2">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-0 col-lg-6 grid-margin">
                                                <div>
                                                    <div class = "chartBox" style="position: relative; height:55vh;"> 
                                                        <canvas id="chart-2"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-6 grid-margin">
                                                <div>
                                                    <h4>Interpretasi</h4>
                                                    <p id="interpretasi-0" class="text-justify">
                                                    Pada visualisasi scatter plot, secara visual terlihat bahwa antara indeks kesiapan dalam pemanfaatan TIK dengan usia pemilik atau pengelola unit usaha pariwisatanya cenderung berkorelasi negatif. Hal ini berarti bahwa tiap bertambahnya usia maka kecenderungan untuk siap dalam pemanfaatan TIK pada unit usaha pariwisatanya cenderung berkurang. Pada Scatter plot juga terlihat terdapat dua amatan yang dapat dikatakan sebagai outlier dari segi usia pemilik atau pengelola.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Grafik 3 -->
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow">
                                    <div class="pb-2 card-body">
                                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
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
                                                    <h4>Interpretasi</h4>
                                                    <p id="interpretasi-0" class="text-justify">
                                                    Baik pada tabel ringkasan maupun boxplot, dapat terlihat bahwa terdapat perbedaan sebaran indeks kesiapan unit usaha pariwisata dalam memanfaatkan TIK menurut tingkat pendidikan yang ditamatkan oleh pemilik atau pengelolanya. Pada nilai rataan, memiliki nilai indeks kesiapan yang berbeda antar kategori tingkat pendidikannya dengan rincian pada kategori maksimal pendidikan dasar bernilai 38,452, pada pendidikan menengah senilai 51,084 dan pada pendidikan tinggi sebesar 60,045. Hal ini menunjukkan bahwa secara deskriptif terdapat kecenderungan bahwa tiap bertambahnya jenjang pendidikan dan lama pendidikan yang diampu oleh pemilik atau pengelola akan lebih siap dalam memanfaatkan TIK pada unit usaha pariwisatanya.
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
                                        <tr class="text-center">
                                            <th rowspan="2">Tingkat Pendidikan</th>
                                            <th colspan="7">Indikator Sebaran dan Pemusatan Data</th>
                                            <th rowspan="2" colspan="2">Banyak Amatan</th>
                                        </tr>

                                        <tr class="text-center">
                                            <th>Minimum</th>
                                            <th>Kuartil 1</th>
                                            <th>Median</th>
                                            <th>Kuartil 3</th>
                                            <th>Maksimum</th>
                                            <th>Rata-rata</th>
                                            <th>Standar Deviasi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="text-center">
                                            <td>Maksimal Pendidikan Dasar</td>
                                            <td>14</td>
                                            <td>30</td>
                                            <td>38</td>
                                            <td>46</td>
                                            <td>69</td>
                                            <td>38.452</td>
                                            <td>10.956</td>
                                            <td>228</td>   
                                        </tr>
                                        <tr class="text-center">
                                            <td>Pendidikan Menengah</td>
                                            <td>18</td>
                                            <td>43</td>
                                            <td>50</td>
                                            <td>60</td>
                                            <td>85</td>
                                            <td>51.085</td>
                                            <td>12.487</td>
                                            <td>585</td>   
                                        </tr>
                                        <tr class="text-center">
                                            <td>Pendidikan Tinggi</td>
                                            <td>40</td>
                                            <td>53</td>
                                            <td>59.5</td>
                                            <td>68</td>
                                            <td>81</td>
                                            <td>60.045</td>
                                            <td>10.049</td>
                                            <td>112</td>   
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
                                                <button id="download-4" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-4">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-0 col-lg-6 grid-margin">
                                                <div>
                                                    <div class ="chartBox" style=" height:350px;"> 
                                                        <canvas id="chart-4"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                                <div>
                                                    <h4>Interpretasi</h4>
                                                    <p id="interpretasi-0" class="text-justify">
                                                    Berdasarkan tabel dan boxplot, secara deskriptif bahwa pada jenis usaha jasa transportasi wisata dan 
                                                    penyediaan akomodasi memiliki kesamaan dari nilai rataan indeks kesiapannya dalam pemanfaatan TIK. terdapat 
                                                    perbedaan pada nilai rataan dari jenis usaha penyedia makanan dan minuman yang dimana lebih rendah dibandingkan kedua jenis usaha pariwisata 
                                                    lain. Hal ini dapat mengindikasikan bahwa usaha wisata jasa penyedia makanan dan minuman secara keseluruhan Banyak Amatan sampel, 
                                                    rata-rata masih belum menerapkan pemanfaatan TIK dengan siap dibandingkan pada usaha jasa transportasi wisata dan 
                                                    penyediaan akomodasi.
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
                                        Indeks Kesiapan Usaha Pariwisata dalam Pemanfaatan TIK Berdasarkan Jenis Usaha Pariwisata                                        </strong>
                                    </div>
                                    <div class="card-body table-responsive"><!-- //button etc. -->
                                        <table class="table table-hover table-bordered table-responsive" id="tabel-1" style="width:100%">
                                        <thead style="color: #fff;  font-weight:bold; text-align:center;">
                                        <tr class="text-center">
                                            <th rowspan="2">Jenis Usaha Pariwisata</th>
                                            <th colspan="7">Indikator Sebaran dan Pemusatan Data</th>
                                            <th rowspan="2" colspan="2">Banyak Amatan</th>
                                        </tr>

                                        <tr class="text-center">
                                            <th>Minimum</th>
                                            <th>Kuartil 1</th>
                                            <th>Median</th>
                                            <th>Kuartil 3</th>
                                            <th>Maksimum</th>
                                            <th>Rata-rata</th>
                                            <th>Standar Deviasi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="text-center">
                                            <td>Jasa Transportasi Wisata</td>
                                            <td>20</td>
                                            <td>40</td>
                                            <td>58</td>
                                            <td>67</td>
                                            <td>84</td>
                                            <td>53.027</td>
                                            <td>1.266</td>
                                            <td>154</td>   
                                        </tr>
                                        <tr class="text-center">
                                            <td>Jasa Penyedia Makanan dan Minuman</td>
                                            <td>14</td>
                                            <td>39</td>
                                            <td>47</td>
                                            <td>56</td>
                                            <td>85</td>
                                            <td>47.415</td>
                                            <td>0.487</td>
                                            <td>685</td>   
                                        </tr>
                                        <tr class="text-center">
                                            <td>Penyedia Akomodasi</td>
                                            <td>30</td>
                                            <td>45</td>
                                            <td>54</td>
                                            <td>61</td>
                                            <td>77</td>
                                            <td>53.342</td>
                                            <td>1.312</td>
                                            <td>76</td>   
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
                                                <button id="download-5" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#modal-download-5">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-0 col-lg-6 grid-margin">
                                                <div>
                                                    <div class ="chartBox" style=" height:350px;"> 
                                                        <canvas id="chart-5"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-6 grid-margin stretch-card">
                                                <div>
                                                    <h4>Interpretasi</h4>
                                                    <p id="interpretasi-0" class="text-justify">
                                                    Pada visualisasi, dapat dikatakan bahwa secara visual terlihat terdapat perbedaan sebaran 
                                                    indeks kesiapan unit usaha pariwisata dalam pemanfaatan TIk dari sisi skala usahanya. Pada 
                                                    skala usaha kecil, secara rata-rata memiliki nilai indeks yang lebih tinggi dibandingkan 
                                                    pada usaha mikro dari keseluruhan sampel. Pada usaha mikro memiliki nilai rataan sebesar 48,495 dan 
                                                    pada usaha kecil memiliki rataan 57,927. Perbedaan ini dapat diartikan juga bahwa secara  rata-rata, pada skala 
                                                    kecil memiliki kesiapan baik dari sisi faktor produksi maupun infrastruktur yang dimiliki pada usaha kecil lebih 
                                                    siap dan mendukung dalam pemanfaatan TIK dibandingkan pada usaha mikro.                                                    
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
                                        <tr class="text-center">
                                            <th rowspan="2">Skala Usaha Pariwisata</th>
                                            <th colspan="7">Indikator Sebaran dan Pemusatan Data</th>
                                            <th rowspan="2" colspan="2">Banyak Amatan</th>
                                        </tr>

                                        <tr class="text-center">
                                            <th>Minimum</th>
                                            <th>Kuartil 1</th>
                                            <th>Median</th>
                                            <th>Kuartil 3</th>
                                            <th>Maksimum</th>
                                            <th>Rata-rata</th>
                                            <th>Standar Deviasi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="text-center">
                                            <td>Mikro</td>
                                            <td>14</td>
                                            <td>39</td>
                                            <td>48</td>
                                            <td>58</td>
                                            <td>85</td>
                                            <td>48.495</td>
                                            <td>0.457</td> 
                                            <td>870</td>  
                                        </tr>
                                        <tr class="text-center">
                                            <td>Kecil</td>
                                            <td>31</td>
                                            <td>49</td>
                                            <td>57</td>
                                            <td>67</td>
                                            <td>81</td>
                                            <td>57.927</td>
                                            <td>1.669</td>
                                            <td>55</td>   
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