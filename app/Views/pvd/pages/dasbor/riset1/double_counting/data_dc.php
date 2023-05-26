<div class="tab-content" id="pills-tabContent">
    <!-- Algoritma 1 -->
    <div class="tab-pane fade show active" id="pills-algoritma1" role="tabpanel" aria-labelledby="pills-algoritma1-tab" tabindex="0">
        <div class="isi-tujuan shadow mt-0 mb-0">
            <h4 class="card-title judul-card">Algoritma Double Counting (Metode Penghitungan Jarak Antar Staypoint)</h4>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="row">
                                    <div class="mb-0 col-lg-12 grid-margin">
                                        <div class="pr-3 pl-3">
                                            <h3 class="text-center"><b>Alur Algoritma</b></h3>
                                            <ol class="list-styled text-justify">
                                                <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Data cleaning dan pengecekan quality assurance</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Periode analisis dalam algoritma DC adalah selama sebulan dan setahun (akan dibandingkan)</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Menentukan lokasi home dan work untuk setiap nomor dengan metode AMDA. Hasilnya:</p>
                                                    <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                        <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                            <thead style="color: #fff; font-weight:bold; background-color:yellow;">
                                                                <tr style="background-color:yellow;">
                                                                    <th scope="col">event_month</th>
                                                                    <th scope="col">msisdn</th>
                                                                    <th scope="col">provider</th>
                                                                    <th scope="col">home_prov</th>
                                                                    <th scope="col">home_kab</th>
                                                                    <th scope="col">home_kec</th>
                                                                    <th scope="col">home_latitude</th>
                                                                    <th scope="col">home_laongitude</th>
                                                                    <th scope="col">work_prov</th>
                                                                    <th scope="col">work_kab</th>
                                                                    <th scope="col">work_kec</th>
                                                                    <th scope="col">work_latitude</th>
                                                                    <th scope="col">work_longitude</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody style="font-weight: normal;">
                                                                <tr>
                                                                    <td>12</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14631</td>
                                                                    <td style="text-align: right;">113.72242</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14631</td>
                                                                    <td style="text-align: right;">113.7242</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14235</td>
                                                                    <td style="text-align: right;">113.72467</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14631</td>
                                                                    <td style="text-align: right;">113.72242</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14235</td>
                                                                    <td style="text-align: right;">113.72467</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14631</td>
                                                                    <td style="text-align: right;">113.72242</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14235</td>
                                                                    <td style="text-align: right;">113.72467</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14631</td>
                                                                    <td style="text-align: right;">113.72242</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14972</td>
                                                                    <td style="text-align: right;">113.72467</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.72242</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>9</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14631</td>
                                                                    <td style="text-align: right;">113.72242</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14631</td>
                                                                    <td style="text-align: right;">113.72242</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </li>
                                                <p class="mt-3" style="font-weight:normal;">kendala: beberapa nomor memiliki lokasi home atau work yang null di beberapa bulan (lebih banyak work), hal ini karena metode AMDA membutuhkan data record yang lengkap untuk setiap bulan. Lokasi home atau work yang bernilai null akan diimputasi menggunakan lokasi home atau work yang tidak bernilai null pada bulan yang bersesuaian.</p>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Nomor-nomor yang telah dilakukan penentuan lokasi home per-bulan, akan diambil modus dari lokasi home-nya selama rentang waktu 12 bulan ke belakang (Des 2021-Nov 2022),</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Jika didapati 2 atau lebih modus home, maka modus ditentukan berdasarkan banyaknya record yang muncul di setiap harinya (N_date) pada bulan-bulan yang memiliki lokasi home yang sama.</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Modus lokasi home untuk setiap nomor akan dilakukan pengelompokan berdasarkan lokasi administratif setingkat provinsi, kemudian kabupaten/kota. Penggunaan home didasarkan pada keakuratan (akurasi) metode AMDA yang lebih baik dalam mengidentifikasi home pelanggan (province: 98,8%, district: 88,7%) dibandingkan mengidentifikasi work pelanggan (province: 98,9%, district: 70,4%)</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Nomor-nomor yang memiliki lokasi home pada Provinsi dan Kabupaten/Kota yang sama (berada dalam 1 kelompok) akan dianalisis lebih lanjut. Contoh data:</p>
                                                    <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                        <table class="table table-hover table-bordered table-responsive" id="k1_tabel1" style="width:100%;overflow-x:auto;">
                                                            <thead style="color: #fff; font-weight:bold;">
                                                                <tr>
                                                                    <th scope="col">msisdn</th>
                                                                    <th scope="col">home_prov</th>
                                                                    <th scope="col">home_kab</th>
                                                                    <th scope="col">isDouble</th>
                                                                    <th scope="col">id_phone</th>
                                                                    <th scope="col">id_family</th>
                                                                    <th scope="col">provide</th>
                                                                    <th scope="col">home_N_date</th>
                                                                    <th scope="col">work_N_date</th>
                                                                    <th scope="col">jumlah_bulan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody style="font-weight: normal;">
                                                                <tr style="background-color: aqua;">
                                                                    <td>msisdn00031</td>
                                                                    <td>DKI JAKARTA</td>
                                                                    <td>JAKARTA UTARA</td>
                                                                    <td>no</td>
                                                                    <td style="text-align: right;">53</td>
                                                                    <td style="text-align: right;">45</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">225</td>
                                                                    <td style="text-align: right;">221</td>
                                                                    <td style="text-align: right;">12</td>
                                                                </tr>
                                                                <tr style="background-color: aqua;">
                                                                    <td>msisdn00067</td>
                                                                    <td>DKI JAKARTA</td>
                                                                    <td>JAKARTA UTARA</td>
                                                                    <td>no</td>
                                                                    <td style="text-align: right;">52</td>
                                                                    <td style="text-align: right;">45</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">236</td>
                                                                    <td style="text-align: right;">123</td>
                                                                    <td style="text-align: right;">12</td>
                                                                </tr>
                                                                <tr style="background-color: bisque;">
                                                                    <td>msisdn00005</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>BEKASI</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">32</td>
                                                                    <td style="text-align: right;">24</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">228</td>
                                                                    <td style="text-align: right;">152</td>
                                                                    <td style="text-align: right;">11</td>
                                                                </tr>
                                                                <tr style="background-color: bisque;">
                                                                    <td>msisdn00006</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>BEKASI</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">32</td>
                                                                    <td style="text-align: right;">24</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">30</td>
                                                                    <td style="text-align: right;">37</td>
                                                                    <td style="text-align: right;">3</td>
                                                                </tr>
                                                                <tr style="background-color: bisque;">
                                                                    <td>msisdn00007</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>BEKASI</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">39</td>
                                                                    <td style="text-align: right;">24</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">184</td>
                                                                    <td style="text-align: right;">96</td>
                                                                    <td style="text-align: right;">10</td>
                                                                </tr>
                                                                <tr style="background-color: bisque;">
                                                                    <td>msisdn00008</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>BEKASI</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">39</td>
                                                                    <td style="text-align: right;">24</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">178</td>
                                                                    <td style="text-align: right;">111</td>
                                                                    <td style="text-align: right;">9</td>
                                                                </tr>
                                                                <tr style="background-color: burlywood;">
                                                                    <td>msisdn00019</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>CIMAHI</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">2</td>
                                                                    <td style="text-align: right;">21</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">228</td>
                                                                    <td style="text-align: right;">152</td>
                                                                    <td style="text-align: right;">11</td>
                                                                </tr>
                                                                <tr style="background-color: cadetblue;">
                                                                    <td>msisdn00001</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>DEPOK</td>
                                                                    <td>no</td>
                                                                    <td style="text-align: right;">36</td>
                                                                    <td style="text-align: right;">25</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">165</td>
                                                                    <td style="text-align: right;">149</td>
                                                                    <td style="text-align: right;">8</td>
                                                                </tr>
                                                                <tr style="background-color: cadetblue;">
                                                                    <td>msisdn00003</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>DEPOK</td>
                                                                    <td>no</td>
                                                                    <td style="text-align: right;">37</td>
                                                                    <td style="text-align: right;">25</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">64</td>
                                                                    <td style="text-align: right;">70</td>
                                                                    <td style="text-align: right;">6</td>
                                                                </tr>
                                                                <tr style="background-color: cadetblue;">
                                                                    <td>msisdn00067</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>DEPOK</td>
                                                                    <td>no</td>
                                                                    <td style="text-align: right;">49</td>
                                                                    <td style="text-align: right;">31</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">213</td>
                                                                    <td style="text-align: right;">158</td>
                                                                    <td style="text-align: right;">12</td>
                                                                </tr>
                                                                <tr style="background-color: cadetblue;">
                                                                    <td>msisdn00001</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>DEPOK</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td style="text-align: right;">31</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">82</td>
                                                                    <td style="text-align: right;">82</td>
                                                                    <td style="text-align: right;">6</td>
                                                                </tr>
                                                                <tr style="background-color: darkgray;">
                                                                    <td>msisdn00105</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>SUMEDANG</td>
                                                                    <td>no</td>
                                                                    <td style="text-align: right;">25</td>
                                                                    <td style="text-align: right;">2</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">246</td>
                                                                    <td style="text-align: right;">135</td>
                                                                    <td style="text-align: right;">12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn00010</td>
                                                                    <td>JAWA TENGAH</td>
                                                                    <td>BOYOLALI</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">16</td>
                                                                    <td style="text-align: right;">20</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">173</td>
                                                                    <td style="text-align: right;">123</td>
                                                                    <td style="text-align: right;">8</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn00108</td>
                                                                    <td>JAWA TENGAH</td>
                                                                    <td>BOYOLALI</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">16</td>
                                                                    <td style="text-align: right;">20</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">117</td>
                                                                    <td style="text-align: right;">117</td>
                                                                    <td style="text-align: right;">6</td>
                                                                </tr>
                                                                <tr style="background-color: gold;">
                                                                    <td>msisdn00027</td>
                                                                    <td>JAWA TENGAH</td>
                                                                    <td>JEPARA</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">80</td>
                                                                    <td style="text-align: right;">6</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">106</td>
                                                                    <td style="text-align: right;">97</td>
                                                                    <td style="text-align: right;">8</td>
                                                                </tr>
                                                                <tr style="background-color: gold;">
                                                                    <td>msisdn00027</td>
                                                                    <td>JAWA TENGAH</td>
                                                                    <td>JEPARA</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">80</td>
                                                                    <td style="text-align: right;">6</td>
                                                                    <td>Indosat</td>
                                                                    <td style="text-align: right;">106</td>
                                                                    <td style="text-align: right;">92</td>
                                                                    <td style="text-align: right;">6</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </li>
                                                <p class="mt-3" style="font-weight: normal;">Terdapat 7 kelompok yang berisikan nomor-nomor dengan lokasi home yang sama di setiap kelompoknya.</p>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Tentukan bulan yang akan dianalisis berdasarkan banyaknya record yang muncul di setiap harinya (N_date). Bulan yang memiliki total N_date tertinggi dari seluruh nomor dalam satu kelompok akan menjadi bulan yang dilakukan analisis.</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Akan digunakan data baru yang masih dalam bentuk raw data (bukan hasil dari preprocessing AMDA). Hal ini dikarenakan pada algoritma ini akan dianalisis untuk setiap event yang terjadi, termasuk juga pola perjalanan pelanggan (bukan hanya event yang terjadi setelah dilakukan eliminasi unusual speed < 10 km/jam)</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Untuk setiap kelompok, ambil 1 nomor yang akan dianalisis</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Dalam 1 hari dibagi menjadi 2 interval, dengan rincian Interval 1 (07.00-18.59) dan Interval 2 (19.00-06.59).</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Antar lokasi koordinat setiap record, secara berurutan dihitung speed-nya untuk mengeliminasi pergerakan yang tidak wajar karena adanya lag record. Contoh lag record:</p>
                                                    <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                        <table class="table table-hover table-bordered table-responsive" id="k1_tabel1" style="width:100%;overflow-x:auto;">
                                                            <tbody style="font-weight: normal;">
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>11:38</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.04781</td>
                                                                    <td style="text-align: right;">109.0295</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">10</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>11:38</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.04781</td>
                                                                    <td style="text-align: right;">109.0295</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">10</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>11:39</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.0077</td>
                                                                    <td style="text-align: right;">109.068</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>11:45</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.0478</td>
                                                                    <td style="text-align: right;">109.0295</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">10</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>11:50</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.04781</td>
                                                                    <td style="text-align: right;">109.0295</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">10</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>11:51</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.0077</td>
                                                                    <td style="text-align: right;">109.068</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: red;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>12:32</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-6.26504</td>
                                                                    <td style="text-align: right;">106.9855</td>
                                                                    <td style="text-align: right;">32</td>
                                                                    <td style="text-align: right;">75</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: red;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>12:32</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-6.26504</td>
                                                                    <td style="text-align: right;">106.9855</td>
                                                                    <td style="text-align: right;">32</td>
                                                                    <td style="text-align: right;">75</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>12:34</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.0077</td>
                                                                    <td style="text-align: right;">109.068</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>11:51</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.0077</td>
                                                                    <td style="text-align: right;">109.068</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>12:45</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.0478</td>
                                                                    <td style="text-align: right;">109.0295</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">10</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>12:46</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.00769</td>
                                                                    <td style="text-align: right;">109.0679</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>12:49</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.0077</td>
                                                                    <td style="text-align: right;">109.068</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>12:50</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.13289</td>
                                                                    <td style="text-align: right;">109.145</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">30</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>11:51</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.0077</td>
                                                                    <td style="text-align: right;">109.068</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <ul class="list-styled mt-4">
                                                        <li>Speed yang tidak wajar antara 2 lokasi koordinat record, yaitu lebih dari 100 km/jam akan dieliminasi.</li>
                                                        <li>Penghitungan jarak antara 2 lokasi koordinat menggunakan haversine distance.</li>
                                                    </ul>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Setelah dilakukan eliminasi pergerakan yang tidak wajar, kemudian untuk setiap interval, dihitung kemunculan setiap koordinat lokasi (anchor) di setiap harinya. Contoh:</p>
                                                    <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                        <table class="table table-hover table-bordered table-responsive" id="k1_tabel1" style="width:100%;overflow-x:auto;">
                                                            <div>
                                                                <tbody style="font-weight: normal; border: 0.3rem solid red">
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">01:09</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right;">106.90133</td>
                                                                        <td style="text-align: right;">-6.24925</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">01:11</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right;">106.90133</td>
                                                                        <td style="text-align: right;">-6.24925</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">03:10</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right;">106.90658</td>
                                                                        <td style="text-align: right;">-6.2501</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">05:13</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right;">106.90133</td>
                                                                        <td style="text-align: right;">-6.24925</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                </tbody>
                                                            </div>
                                                            <div>
                                                                <tbody style="font-weight: normal; border: 0.3rem solid blue" class="mt-5">
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">07:14</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right; background-color:yellow">106.90658</td>
                                                                        <td style="text-align: right; background-color:yellow">-6.2501</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">09:32</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right;background-color:yellow">106.90658</td>
                                                                        <td style="text-align: right;background-color:yellow">-6.2501</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">10:32</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right; background-color:orange">106.90133</td>
                                                                        <td style="text-align: right; background-color:orange">-6.24925</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">11:10</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right;background-color:yellow">106.90658</td>
                                                                        <td style="text-align: right;background-color:yellow">-6.2501</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">12:47</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right;background-color:yellow">106.90658</td>
                                                                        <td style="text-align: right;background-color:yellow">-6.2501</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">13:12</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right; background-color:yellow">106.90658</td>
                                                                        <td style="text-align: right; background-color:yellow">-6.2501</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">15:10</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right; background-color:orange">106.90133</td>
                                                                        <td style="text-align: right; background-color:orange">-6.24925</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">17:01</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right; background-color:orange">106.90133</td>
                                                                        <td style="text-align: right; background-color:orange">-6.24925</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">17:13</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right; background-color:yellow">106.90658</td>
                                                                        <td style="text-align: right; background-color:yellow">-6.2501</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                </tbody>
                                                            </div>
                                                            <tbody style="font-weight: normal; border: 0.3rem solid red">
                                                                <tr>
                                                                    <td>11/02/2021</td>
                                                                    <td style="text-align: right;">19:12</td>
                                                                    <td>Nomor 1</td>
                                                                    <td>upcc</td>
                                                                    <td style="text-align: right;">106.90658</td>
                                                                    <td style="text-align: right;">-6.2501</td>
                                                                    <td>DKI Jakarta</td>
                                                                    <td>Kota Jakarta Timur</td>
                                                                    <td>Makasar</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11/02/2021</td>
                                                                    <td style="text-align: right;">20:42</td>
                                                                    <td>Nomor 1</td>
                                                                    <td>upcc</td>
                                                                    <td style="text-align: right;">106.90658</td>
                                                                    <td style="text-align: right;">-6.2501</td>
                                                                    <td>DKI Jakarta</td>
                                                                    <td>Kota Jakarta Timur</td>
                                                                    <td>Makasar</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11/02/2021</td>
                                                                    <td style="text-align: right;">21:03</td>
                                                                    <td>Nomor 1</td>
                                                                    <td>upcc</td>
                                                                    <td style="text-align: right;">106.90658</td>
                                                                    <td style="text-align: right;">-6.2501</td>
                                                                    <td>DKI Jakarta</td>
                                                                    <td>Kota Jakarta Timur</td>
                                                                    <td>Makasar</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11/02/2021</td>
                                                                    <td style="text-align: right;">23:07</td>
                                                                    <td>Nomor 1</td>
                                                                    <td>upcc</td>
                                                                    <td style="text-align: right;">106.90658</td>
                                                                    <td style="text-align: right;">-6.2501</td>
                                                                    <td>DKI Jakarta</td>
                                                                    <td>Kota Jakarta Timur</td>
                                                                    <td>Makasar</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <p class="mt-3" style="font-weight: normal;">Pada Interval 1, terdapat 2 koordinat lokasi (anchor) yaitu (106.90133,-6.24925) dan (106.90658,-6.2501) dengan jumlah masing-masing record adalah:</p>
                                                    <ol class="list-styled">
                                                        <li>(106.90133,-6.24925) = 3</li>
                                                        <li>(106.90658,-6.2501) = 6</li>
                                                    </ol>
                                                    <p class="mt-3" style="font-weight: normal;">Anchor yang memiliki jumlah kemunculan record lebih banyak akan dijadikan sebagai kandidat utama. Dalam hal ini adalah anchor (106.90658,-6.2501)</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Hitung jarak antara anchor yang menjadi kandidat utama dengan anchor lainnya pada interval yang sama dengan menggunakan Haversine Distance dan lakukan eliminasi apabila anchor lainnya berjarak kurang dari 500 m.</p>
                                                    <p style="font-weight: normal;">Formula Haversine merupakan suatu metode untuk mengetahui jarak antar dua titik dengan memperhitungkan bahwa bumi bukanlah sebuah bidang datar namun adalah sebuah bidang yang memiliki derajat kelengkungan.</p>
                                                    <p style="font-weight: normal;">Penggunaan rumus ini mengasumsikan pengabaian efek ellipsoidal, cukup akurat untuk sebagian besar perhitungan, juga pengabaian ketinggian bukit dan kedalaman lembah di permukaan bumi</p>
                                                    <div class="rumus text-left" style="overflow-x:auto; width:100%;">
                                                        <p>\(d= 2r\:arcsin\:\left(\sqrt[]{hav\:(\varphi_{2}-\varphi_{1})\:+\:(1-hav\:(\varphi_{2}-\varphi_{1})-hav\:(\varphi_{2}+\varphi_{1})).hav\:(\lambda_{2}-\lambda_{1}})\right)\)</p>
                                                        <p style="margin-left: 0.8rem;">\(= 2r\:arcsin\:\left(\sqrt[]{sin^{2}\left(\frac{\varphi_{2}-\varphi_{1}}{2} \right) \:+\:\left(1-sin^{2}\left(\frac{\varphi_{2}-\varphi_{1}}{2} \right)-sin^{2}\left(\frac{\varphi_{2}+\varphi_{1}}{2} \right)\right).sin^{2} \left(\frac{\lambda_{2}-\lambda_{1}}{2} \right)}\right)\) </p>
                                                        <p style="margin-left: 0.8rem;">\(=2r\:arcsin\:\left(\sqrt[]{sin^{2}\left(\frac{\varphi_{2}-\varphi_{1}}{2} \right) \:+\:cos\:\varphi_2.cos\:\varphi_1 .sin^{2} \left(\frac{\lambda_{2}-\lambda_{1}}{2} \right)}\right)\)</p>
                                                    </div>
                                                    <p class="mt-3" style="font-weight: normal;">\(\varphi_{1}\), \(\varphi_{2}\) are the latitude (in radians format) of point 1 and point 2,</p>
                                                    <p class="mt-3" style="font-weight: normal;">\(\lambda_{1}\), \(\lambda_{2}\) are the longitude (in radians format) of point 1 and point 2,</p>
                                                    <p class="mt-3" style="font-weight: normal;">Contoh Penghitungan:</p>

                                                    <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                        <table class="table table-hover table-bordered table-responsive" id="k1_tabel1" style="width:100%;overflow-x:auto;">
                                                            <div>
                                                                <tbody style="font-weight: normal; border: 0.3rem solid red">
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">01:09</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right;">106.90133</td>
                                                                        <td style="text-align: right;">-6.24925</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">01:11</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right;">106.90133</td>
                                                                        <td style="text-align: right;">-6.24925</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">03:10</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right;">106.90658</td>
                                                                        <td style="text-align: right;">-6.2501</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">05:13</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right;">106.90133</td>
                                                                        <td style="text-align: right;">-6.24925</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                </tbody>
                                                            </div>
                                                            <div>
                                                                <tbody style="font-weight: normal; border: 0.3rem solid blue" class="mt-5">
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">07:14</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right; background-color:yellow">106.90658</td>
                                                                        <td style="text-align: right; background-color:yellow">-6.2501</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">09:32</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right;background-color:yellow">106.90658</td>
                                                                        <td style="text-align: right;background-color:yellow">-6.2501</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">10:32</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right; background-color:orange">106.90133</td>
                                                                        <td style="text-align: right; background-color:orange">-6.24925</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">11:10</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right;background-color:yellow">106.90658</td>
                                                                        <td style="text-align: right;background-color:yellow">-6.2501</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">12:47</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right;background-color:yellow">106.90658</td>
                                                                        <td style="text-align: right;background-color:yellow">-6.2501</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">13:12</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right; background-color:yellow">106.90658</td>
                                                                        <td style="text-align: right; background-color:yellow">-6.2501</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">15:10</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right; background-color:orange">106.90133</td>
                                                                        <td style="text-align: right; background-color:orange">-6.24925</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">17:01</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right; background-color:orange">106.90133</td>
                                                                        <td style="text-align: right; background-color:orange">-6.24925</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021</td>
                                                                        <td style="text-align: right;">17:13</td>
                                                                        <td>Nomor 1</td>
                                                                        <td>upcc</td>
                                                                        <td style="text-align: right; background-color:yellow">106.90658</td>
                                                                        <td style="text-align: right; background-color:yellow">-6.2501</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td>Makasar</td>
                                                                    </tr>
                                                                </tbody>
                                                            </div>
                                                            <tbody style="font-weight: normal; border: 0.3rem solid red">
                                                                <tr>
                                                                    <td>11/02/2021</td>
                                                                    <td style="text-align: right;">19:12</td>
                                                                    <td>Nomor 1</td>
                                                                    <td>upcc</td>
                                                                    <td style="text-align: right;">106.90658</td>
                                                                    <td style="text-align: right;">-6.2501</td>
                                                                    <td>DKI Jakarta</td>
                                                                    <td>Kota Jakarta Timur</td>
                                                                    <td>Makasar</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11/02/2021</td>
                                                                    <td style="text-align: right;">20:42</td>
                                                                    <td>Nomor 1</td>
                                                                    <td>upcc</td>
                                                                    <td style="text-align: right;">106.90658</td>
                                                                    <td style="text-align: right;">-6.2501</td>
                                                                    <td>DKI Jakarta</td>
                                                                    <td>Kota Jakarta Timur</td>
                                                                    <td>Makasar</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11/02/2021</td>
                                                                    <td style="text-align: right;">21:03</td>
                                                                    <td>Nomor 1</td>
                                                                    <td>upcc</td>
                                                                    <td style="text-align: right;">106.90658</td>
                                                                    <td style="text-align: right;">-6.2501</td>
                                                                    <td>DKI Jakarta</td>
                                                                    <td>Kota Jakarta Timur</td>
                                                                    <td>Makasar</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11/02/2021</td>
                                                                    <td style="text-align: right;">23:07</td>
                                                                    <td>Nomor 1</td>
                                                                    <td>upcc</td>
                                                                    <td style="text-align: right;">106.90658</td>
                                                                    <td style="text-align: right;">-6.2501</td>
                                                                    <td>DKI Jakarta</td>
                                                                    <td>Kota Jakarta Timur</td>
                                                                    <td>Makasar</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <p class="mt-3" style="font-weight: normal;">Pada Interval 1, anchor (106.90658,-6.2501) adalah kandidat utama, kemudian dihitung jarak haversinenya dengan anchor lainnya yaitu anchor (106.90133,-6.24925). Diperoleh d = 0.58795 KM. Oleh karena d > 0.5 KM, maka anchor (106.90133,-6.24925) tidak dieliminasi, sehingga banyak anchor yang menjadi kandidat utama pada interval 1 di nomor tersebut pada hari itu adalah sebanyak 2 anchor, yaitu (106.90658,-6.2501) dan (106.90133,-6.24925).</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Anchor-anchor yang menjadi kandidat utama disebut sebagai staypoint.</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Setelah diperoleh staypoint untuk setiap interval di setiap harinya untuk seluruh nomor hasil dari penyaringan lokasi home yang sama, ambil 1 nomor yang akan dianalisis untuk dibandingkan dengan nomor-nomor lainnya.</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Hitung jarak haversine antara staypoint pada nomor yang akan dianalisis (nomor 1) dengan staypoint pada nomor lainnya (nomor 2) pada hari dan interval yang bersesuaian. Contoh:</p>
                                                    <div class="row">
                                                        <div class="col-lg-6 grid-margin stretch-card h-100">
                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                <h3 class="text-center"><b>Nomor 1</b></h3>
                                                                <table class="table table-hover table-bordered table-responsive" id="k1_tabel1" style="width:100%;overflow-x:auto;">
                                                                    <div>
                                                                        <tbody style="font-weight: normal; border: 0.3rem solid red">
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">01:09</td>
                                                                                <td>Nomor 1</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right;">106.90133</td>
                                                                                <td style="text-align: right;">-6.24925</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">01:11</td>
                                                                                <td>Nomor 1</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right;">106.90133</td>
                                                                                <td style="text-align: right;">-6.24925</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">03:10</td>
                                                                                <td>Nomor 1</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right;">106.90658</td>
                                                                                <td style="text-align: right;">-6.2501</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">05:13</td>
                                                                                <td>Nomor 1</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right;">106.90133</td>
                                                                                <td style="text-align: right;">-6.24925</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </div>
                                                                    <div>
                                                                        <tbody style="font-weight: normal; border: 0.3rem solid blue" class="mt-5">
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">07:14</td>
                                                                                <td>Nomor 1</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right; background-color:yellow">106.90658</td>
                                                                                <td style="text-align: right; background-color:yellow">-6.2501</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">09:32</td>
                                                                                <td>Nomor 1</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right;background-color:yellow">106.90658</td>
                                                                                <td style="text-align: right;background-color:yellow">-6.2501</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">10:32</td>
                                                                                <td>Nomor 1</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right; background-color:orange">106.90133</td>
                                                                                <td style="text-align: right; background-color:orange">-6.24925</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">11:10</td>
                                                                                <td>Nomor 1</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right;background-color:yellow">106.90658</td>
                                                                                <td style="text-align: right;background-color:yellow">-6.2501</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">12:47</td>
                                                                                <td>Nomor 1</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right;background-color:yellow">106.90658</td>
                                                                                <td style="text-align: right;background-color:yellow">-6.2501</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">13:12</td>
                                                                                <td>Nomor 1</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right; background-color:yellow">106.90658</td>
                                                                                <td style="text-align: right; background-color:yellow">-6.2501</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">15:10</td>
                                                                                <td>Nomor 1</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right; background-color:orange">106.90133</td>
                                                                                <td style="text-align: right; background-color:orange">-6.24925</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">17:01</td>
                                                                                <td>Nomor 1</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right; background-color:orange">106.90133</td>
                                                                                <td style="text-align: right; background-color:orange">-6.24925</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">17:13</td>
                                                                                <td>Nomor 1</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right; background-color:yellow">106.90658</td>
                                                                                <td style="text-align: right; background-color:yellow">-6.2501</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </div>
                                                                    <tbody style="font-weight: normal; border: 0.3rem solid red">
                                                                        <tr>
                                                                            <td>11/02/2021</td>
                                                                            <td style="text-align: right;">19:12</td>
                                                                            <td>Nomor 1</td>
                                                                            <td>upcc</td>
                                                                            <td style="text-align: right;">106.90658</td>
                                                                            <td style="text-align: right;">-6.2501</td>
                                                                            <td>DKI Jakarta</td>
                                                                            <td>Kota Jakarta Timur</td>
                                                                            <td>Makasar</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11/02/2021</td>
                                                                            <td style="text-align: right;">20:42</td>
                                                                            <td>Nomor 1</td>
                                                                            <td>upcc</td>
                                                                            <td style="text-align: right;">106.90658</td>
                                                                            <td style="text-align: right;">-6.2501</td>
                                                                            <td>DKI Jakarta</td>
                                                                            <td>Kota Jakarta Timur</td>
                                                                            <td>Makasar</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11/02/2021</td>
                                                                            <td style="text-align: right;">21:03</td>
                                                                            <td>Nomor 1</td>
                                                                            <td>upcc</td>
                                                                            <td style="text-align: right;">106.90658</td>
                                                                            <td style="text-align: right;">-6.2501</td>
                                                                            <td>DKI Jakarta</td>
                                                                            <td>Kota Jakarta Timur</td>
                                                                            <td>Makasar</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11/02/2021</td>
                                                                            <td style="text-align: right;">23:07</td>
                                                                            <td>Nomor 1</td>
                                                                            <td>upcc</td>
                                                                            <td style="text-align: right;">106.90658</td>
                                                                            <td style="text-align: right;">-6.2501</td>
                                                                            <td>DKI Jakarta</td>
                                                                            <td>Kota Jakarta Timur</td>
                                                                            <td>Makasar</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 grid-margin stretch-card h-100">
                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                <h3 class="text-center"><b>Nomor 2</b></h3>
                                                                <table class="table table-hover table-bordered table-responsive" id="k1_tabel1" style="width:100%;overflow-x:auto;">
                                                                    <div>
                                                                        <tbody style="font-weight: normal; border: 0.3rem solid red">
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">01:12</td>
                                                                                <td>Nomor 3</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right;">107.896611</td>
                                                                                <td style="text-align: right;">-6.5595556</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Jatinegara</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">03:10</td>
                                                                                <td>Nomor 3</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right;">107.896611</td>
                                                                                <td style="text-align: right;">-6.5595556</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Jatinegara</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">05:01</td>
                                                                                <td>Nomor 3</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right;">107.896611</td>
                                                                                <td style="text-align: right;">-6.5595556</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Jatinegara</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">05:13</td>
                                                                                <td>Nomor 3</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right;">107.896611</td>
                                                                                <td style="text-align: right;">-6.5595556</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Jatinegara</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </div>
                                                                    <div>
                                                                        <tbody style="font-weight: normal; border: 0.3rem solid blue" class="mt-5">
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">07:12</td>
                                                                                <td>Nomor 3</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right; background-color:darkolivegreen">107.896611</td>
                                                                                <td style="text-align: right; background-color:darkolivegreen">-6.5595556</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Jatinegara</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">08:42</td>
                                                                                <td>Nomor 3</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right; background-color:darkolivegreen">107.896611</td>
                                                                                <td style="text-align: right; background-color:darkolivegreen">-6.5595556</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Jatinegara</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">09:03</td>
                                                                                <td>Nomor 3</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right; background-color:darkolivegreen">107.896611</td>
                                                                                <td style="text-align: right; background-color:darkolivegreen">-6.5595556</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Jatinegara</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">11:07</td>
                                                                                <td>Nomor 3</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right; background-color:darkolivegreen">107.896611</td>
                                                                                <td style="text-align: right; background-color:darkolivegreen">-6.5595556</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Jatinegara</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">14:57</td>
                                                                                <td>Nomor 3</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right;background-color:cornflowerblue">106.906581</td>
                                                                                <td style="text-align: right;background-color:cornflowerblue">-6.2501</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">15:19</td>
                                                                                <td>Nomor 3</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right;background-color:cornflowerblue">106.906581</td>
                                                                                <td style="text-align: right;background-color:cornflowerblue">-6.2501</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">17:16</td>
                                                                                <td>Nomor 3</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right; background-color:grey">106.90133</td>
                                                                                <td style="text-align: right; background-color:grey">-6.24925</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11/02/2021</td>
                                                                                <td style="text-align: right;">18:31</td>
                                                                                <td>Nomor 3</td>
                                                                                <td>upcc</td>
                                                                                <td style="text-align: right; background-color:grey">106.90133</td>
                                                                                <td style="text-align: right; background-color:grey">-6.24925</td>
                                                                                <td>DKI Jakarta</td>
                                                                                <td>Kota Jakarta Timur</td>
                                                                                <td>Makasar</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </div>
                                                                    <tbody style="font-weight: normal; border: 0.3rem solid red">
                                                                        <tr>
                                                                            <td>11/02/2021</td>
                                                                            <td style="text-align: right;">19:33</td>
                                                                            <td>Nomor 3</td>
                                                                            <td>upcc</td>
                                                                            <td style="text-align: right;">108.056789</td>
                                                                            <td style="text-align: right;">-6.6433472</td>
                                                                            <td>DKI Jakarta</td>
                                                                            <td>Kota Jakarta Timur</td>
                                                                            <td>Jakarta</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11/02/2021</td>
                                                                            <td style="text-align: right;">20:37</td>
                                                                            <td>Nomor 3</td>
                                                                            <td>upcc</td>
                                                                            <td style="text-align: right;">108.056789</td>
                                                                            <td style="text-align: right;">-6.6433472</td>
                                                                            <td>DKI Jakarta</td>
                                                                            <td>Kota Jakarta Timur</td>
                                                                            <td>Jakarta</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11/02/2021</td>
                                                                            <td style="text-align: right;">21:27</td>
                                                                            <td>Nomor 3</td>
                                                                            <td>upcc</td>
                                                                            <td style="text-align: right;">108.056789</td>
                                                                            <td style="text-align: right;">-6.6433472</td>
                                                                            <td>DKI Jakarta</td>
                                                                            <td>Kota Jakarta Timur</td>
                                                                            <td>Jakarta</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11/02/2021</td>
                                                                            <td style="text-align: right;">22:52</td>
                                                                            <td>Nomor 3</td>
                                                                            <td>upcc</td>
                                                                            <td style="text-align: right;">108.056789</td>
                                                                            <td style="text-align: right;">-6.6433472</td>
                                                                            <td>DKI Jakarta</td>
                                                                            <td>Kota Jakarta Timur</td>
                                                                            <td>Jakarta</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11/02/2021</td>
                                                                            <td style="text-align: right;">23:50</td>
                                                                            <td>Nomor 3</td>
                                                                            <td>upcc</td>
                                                                            <td style="text-align: right;">108.056789</td>
                                                                            <td style="text-align: right;">-6.6433472</td>
                                                                            <td>DKI Jakarta</td>
                                                                            <td>Kota Jakarta Timur</td>
                                                                            <td>Jakarta</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <p class="mt-3" style="font-weight: normal;">Misal Nomor 1 memiliki 2 staypoint pada interval 1 dan Nomor 2 memiliki 3 staypoint pada interval 1. Maka untuk setiap kombinasi staypoint akan dihitung jarak haversinenya. yaitu d1 = hav(SP1No1 - SP1No2), d2 = hav(SP1No1 - SP2No2), d3 = hav(SP1No1 - SP3No2), d4 = hav(SP2No1 - SP1No2), d5 = hav(SP2No1 - SP2No2), d6 = hav(SP2No1 - SP3No2).</p>
                                                    </div>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Dari ke 6 kombinasi penghitungan jarak antar 2 staypoint, yaitu d1, d2, d3, d4, d5, dan d6. Pilih jarak terdekat antar 2 staypoint. Misal jarak terdekat adalah staypoint d3 = 0,02 Km = 20 m, maka untuk Interval 1 pada nomor 1 dan 2 di hari yang bersesuaian memiliki sekumpulan staypoint yang berjarak sekitar 20 m</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Ulangi langkah 17 dan 18 untuk menghitung jarak haversine dari staypoint terpendek pada interval 2</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Ulangi langkah penghitungan jarak haversine dari staypoint terpendek pada interval 1 dan interval 2 di setiap harinya selama satu bulan dan satu tahun</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Hasil dari penghitungan jarak haversine di satu interval akan diselisihkan dengan hasil penghitungan jarak haversine di interval berikutnya. Misal pada interval 1 diperoleh d1 = 20 m dan pada interval 2 diperoleh d2=15 m, maka D = |d1 - d2| = |20-15| = 5, begitupun seterusnya</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Dari langkah 21, didapatkan sebuah variabel berupa rata-rata jarak kestabilan antar interval selama setahun untuk perbandingan nomor-nomor yang berada di kelompok yang sama (Memiliki lokasi home yang sama)</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Untuk menentukan entitas double counting, akan ditentukan threshold (ambang batas) rata-rata jarak kestabilan antar interval yang dapat mengklasifikasikan mana entitas double counting dan mana yang bukan entitas double counting dengan baik</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Penentuan threshold dilakukan dengan melakukan visualisasi decision tree yang dibangun dari variabel rata-rata jarak kestabilan antar interval dan variabel data kelas actual double counting.</p>
                                                    <p style="font-weight:normal;">Contoh hasil pengolahan (10 perbandingan msisdn):</p>
                                                    <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                        <table class="table table-hover table-bordered table-responsive" id="k1_tabel1" style="width:100%;overflow-x:auto;">
                                                            <thead style="color: #fff; font-weight:bold;">
                                                                <tr>
                                                                    <th scope="col">MSISDN 1</th>
                                                                    <th scope="col">MSISDN 1</th>
                                                                    <th scope="col">Family Id 1</th>
                                                                    <th scope="col">Family Id 2</th>
                                                                    <th scope="col">Is Family</th>
                                                                    <th scope="col">Group</th>
                                                                    <th scope="col">Haversine</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody style="font-weight: normal;">
                                                                <tr>
                                                                    <td>msisdn00092</td>
                                                                    <td>msisdn00109</td>
                                                                    <td>9</td>
                                                                    <td>9</td>
                                                                    <td>0</td>
                                                                    <td>0</td>
                                                                    <td>0.015145</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00042</td>
                                                                    <td>msisdn00079</td>
                                                                    <td>3</td>
                                                                    <td>19</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>9.926563</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00079</td>
                                                                    <td>msisdn00101</td>
                                                                    <td>19</td>
                                                                    <td>3</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>8.224279</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00042</td>
                                                                    <td>msisdn00101</td>
                                                                    <td>3</td>
                                                                    <td>3</td>
                                                                    <td>0</td>
                                                                    <td>1</td>
                                                                    <td>0.000000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00051</td>
                                                                    <td>msisdn00100</td>
                                                                    <td>12</td>
                                                                    <td>12</td>
                                                                    <td>0</td>
                                                                    <td>2</td>
                                                                    <td>0.140389</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00035</td>
                                                                    <td>msisdn00098</td>
                                                                    <td>8</td>
                                                                    <td>8</td>
                                                                    <td>0</td>
                                                                    <td>3</td>
                                                                    <td>0.0140924</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00018</td>
                                                                    <td>msisdn00021</td>
                                                                    <td>7</td>
                                                                    <td>7</td>
                                                                    <td>0</td>
                                                                    <td>4</td>
                                                                    <td>0.395004</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00049</td>
                                                                    <td>msisdn00111</td>
                                                                    <td>22</td>
                                                                    <td>22</td>
                                                                    <td>0</td>
                                                                    <td>5</td>
                                                                    <td>2.445019</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00110</td>
                                                                    <td>msisdn00111</td>
                                                                    <td>22</td>
                                                                    <td>22</td>
                                                                    <td>0</td>
                                                                    <td>5</td>
                                                                    <td>2.113352</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00091</td>
                                                                    <td>msisdn00111</td>
                                                                    <td>22</td>
                                                                    <td>22</td>
                                                                    <td>0</td>
                                                                    <td>5</td>
                                                                    <td>0.744306</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Penggunaan decision tree untuk menentukan threshold memanfaatkan gini impurity yang merupakan sebuah fungsi untuk menentukan seberapa baik decision tree di-split.</p>
                                                    <p style="font-weight: normal;">Cara kerja decision tree dengan gini impurity: </p>
                                                    <p style="font-weight: bold; color:red">GAMBAR</p>
                                                    <p class="mt-3" style="font-weight: normal;">Dari hasil visualisasi decision tree diatas, untuk root node (root pertama), decision tree melakukan split dengan gini impurity di angka rata-rata jarak kestabilan antar interval <= 0.402 (yang artinya angka 0.402 merupakan rata-rata jarak kestabilan antar interval terbaik untuk membedakan kelas no dan kelas yes pada variabel is_double)</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Berdasarkan hasil dari poin 25, maka akan ditentukan threshold rata-rata jarak kestabilan antar interval <= 0.402 untuk kelas yang diprediksi yes (entitas double counting) dan rata-rata jarak kestabilan antar interval>0.402 untuk kelas yang diprediksi no (bukan entitas double counting)</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Terapkan langkah-langkah ini pada masing-masing waktu referensi yaitu sebulan dan setahun. Lakukan evaluasi waktu referensi mana yang memberikan hasil terbaik dalam mengidentifikasi nomor-nomor double counting dengan cara menghitung precision, recall, akurasi dan f1-score untuk masing-masing waktu referensi kemudian membandingkannya satu sama lain.</p>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                    <!-- <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                        <div>
                                            <h3><b>Story</b></h3>
                                            <p class="text-justify">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.
                                            </p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-0 col-lg-7 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                        <div>
                                            <h3 class="text-center"><b>Story</b></h3>
                                            <p class="text-justify">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.
                                            </p>
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

    <!-- Algoritma 2 -->
    <div class="tab-pane fade " id="pills-algoritma2" role="tabpanel" aria-labelledby="pills-algoritma2-tab" tabindex="0">
        <!-- Nav for types of Algorithm -->
        <div class="col-lg-12 d-flex justify-content-center">
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-without-tab" data-bs-toggle="pill" data-bs-target="#pills-without" type="button" role="tab" aria-controls="pills-without" aria-selected="true">Tanpa Pembentukan Staypoint</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-with-tab" data-bs-toggle="pill" data-bs-target="#pills-with" type="button" role="tab" aria-controls="pills-with" aria-selected="false">Pembentukan Staypoint</button>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <!-- Without forming staypoint -->
            <div class="tab-pane fade show active" id="pills-without" role="tabpanel" aria-labelledby="pills-without-tab" tabindex="0">
                <div class="isi-tujuan shadow mt-0 mb-0">
                    <h4 class="card-title judul-card">Algortima Double Counting H3 Tanpa Pembentukan Staypoint</h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow rounded-4">
                                    <div class="pb-2 card-body">
                                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                            <div class="me-1 mt-1 justify-content-end align-item-end">
                                                <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-0 col-lg-12 grid-margin">
                                                <div class="pr-3 pl-3">
                                                    <h3 class="text-center"><b>Alur Algoritma</b></h3>
                                                </div>
                                                <div class="pt-3">
                                                    <ol class="list-styled text-justify">
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Data cleaning dan pengecekan quality assurance</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Periode analisis dalam algoritma DC dengan H3 adalah selama setahun (Des 2021 - Nov 2022)</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Menentukan lokasi home dan work untuk setiap nomor dengan metode AMDA</p>
                                                            <p style="font-weight:normal;">Hasilnya:</p>
                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                        <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                            <thead style="color: #fff; font-weight:bold; background-color:yellow;">
                                                                <tr style="background-color:yellow;">
                                                                    <th scope="col">event_month</th>
                                                                    <th scope="col">msisdn</th>
                                                                    <th scope="col">provider</th>
                                                                    <th scope="col">home_prov</th>
                                                                    <th scope="col">home_kab</th>
                                                                    <th scope="col">home_kec</th>
                                                                    <th scope="col">home_latitude</th>
                                                                    <th scope="col">home_laongitude</th>
                                                                    <th scope="col">work_prov</th>
                                                                    <th scope="col">work_kab</th>
                                                                    <th scope="col">work_kec</th>
                                                                    <th scope="col">work_latitude</th>
                                                                    <th scope="col">work_longitude</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody style="font-weight: normal;">
                                                                <tr>
                                                                    <td>12</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14631</td>
                                                                    <td style="text-align: right;">113.72242</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14631</td>
                                                                    <td style="text-align: right;">113.7242</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14235</td>
                                                                    <td style="text-align: right;">113.72467</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14631</td>
                                                                    <td style="text-align: right;">113.72242</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14235</td>
                                                                    <td style="text-align: right;">113.72467</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14631</td>
                                                                    <td style="text-align: right;">113.72242</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14235</td>
                                                                    <td style="text-align: right;">113.72467</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14631</td>
                                                                    <td style="text-align: right;">113.72242</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14972</td>
                                                                    <td style="text-align: right;">113.72467</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.72242</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>9</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14631</td>
                                                                    <td style="text-align: right;">113.72242</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14631</td>
                                                                    <td style="text-align: right;">113.72242</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11</td>
                                                                    <td>msisdn000</td>
                                                                    <td>Telkomsel</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                    <td>JAWA TIMUR</td>
                                                                    <td>JEMBER</td>
                                                                    <td>PATRANG</td>
                                                                    <td style="text-align: right;">-8.14388</td>
                                                                    <td style="text-align: right;">113.71728</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                        <p class="mt-3" style="font-weight:normal;">kendala: beberapa nomor memiliki lokasi home atau work yang null di beberapa bulan (lebih banyak work), hal ini karena metode AMDA membutuhkan data record yang lengkap untuk setiap bulan. Lokasi home atau work yang bernilai null akan diimputasi menggunakan lokasi home atau work yang tidak bernilai null pada bulan yang bersesuaian.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Nomor-nomor yang telah dilakukan penentuan lokasi home per-bulan, akan diambil modus dari lokasi home-nya selama rentang waktu 12 bulan ke belakang (Des 2021-Nov 2022), </p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Jika didapati 2 atau lebih modus home, maka modus ditentukan berdasarkan banyaknya record yang muncul di setiap harinya (N_date) pada bulan-bulan yang memiliki lokasi home yang sama.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Modus lokasi home untuk setiap nomor akan dilakukan pengelompokan berdasarkan lokasi administratif setingkat provinsi, kemudian kabupaten/kota.</p>
                                                            <p style="font-weight:normal;">Penggunaan home didasarkan pada keakuratan (akurasi) metode AMDA yang lebih baik dalam mengidentifikasi home pelanggan (province: 98,8%, district: 88,7%) dibandingkan mengidentifikasi work pelanggan (province: 98,9%, district: 70,4%)</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Nomor-nomor yang memiliki lokasi home pada Provinsi dan Kabupaten/Kota yang sama (berada dalam 1 kelompok) akan dianalisis lebih lanjut. Contoh data:</p>
                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                        <table class="table table-hover table-bordered table-responsive" id="k1_tabel1" style="width:100%;overflow-x:auto;">
                                                            <thead style="color: #fff; font-weight:bold;">
                                                                <tr>
                                                                    <th scope="col">msisdn</th>
                                                                    <th scope="col">home_prov</th>
                                                                    <th scope="col">home_kab</th>
                                                                    <th scope="col">isDouble</th>
                                                                    <th scope="col">id_phone</th>
                                                                    <th scope="col">id_family</th>
                                                                    <th scope="col">provide</th>
                                                                    <th scope="col">home_N_date</th>
                                                                    <th scope="col">work_N_date</th>
                                                                    <th scope="col">jumlah_bulan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody style="font-weight: normal;">
                                                                <tr style="background-color: aqua;">
                                                                    <td>msisdn00031</td>
                                                                    <td>DKI JAKARTA</td>
                                                                    <td>JAKARTA UTARA</td>
                                                                    <td>no</td>
                                                                    <td style="text-align: right;">53</td>
                                                                    <td style="text-align: right;">45</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">225</td>
                                                                    <td style="text-align: right;">221</td>
                                                                    <td style="text-align: right;">12</td>
                                                                </tr>
                                                                <tr style="background-color: aqua;">
                                                                    <td>msisdn00067</td>
                                                                    <td>DKI JAKARTA</td>
                                                                    <td>JAKARTA UTARA</td>
                                                                    <td>no</td>
                                                                    <td style="text-align: right;">52</td>
                                                                    <td style="text-align: right;">45</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">236</td>
                                                                    <td style="text-align: right;">123</td>
                                                                    <td style="text-align: right;">12</td>
                                                                </tr>
                                                                <tr style="background-color: bisque;">
                                                                    <td>msisdn00005</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>BEKASI</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">32</td>
                                                                    <td style="text-align: right;">24</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">228</td>
                                                                    <td style="text-align: right;">152</td>
                                                                    <td style="text-align: right;">11</td>
                                                                </tr>
                                                                <tr style="background-color: bisque;">
                                                                    <td>msisdn00006</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>BEKASI</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">32</td>
                                                                    <td style="text-align: right;">24</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">30</td>
                                                                    <td style="text-align: right;">37</td>
                                                                    <td style="text-align: right;">3</td>
                                                                </tr>
                                                                <tr style="background-color: bisque;">
                                                                    <td>msisdn00007</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>BEKASI</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">39</td>
                                                                    <td style="text-align: right;">24</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">184</td>
                                                                    <td style="text-align: right;">96</td>
                                                                    <td style="text-align: right;">10</td>
                                                                </tr>
                                                                <tr style="background-color: bisque;">
                                                                    <td>msisdn00008</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>BEKASI</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">39</td>
                                                                    <td style="text-align: right;">24</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">178</td>
                                                                    <td style="text-align: right;">111</td>
                                                                    <td style="text-align: right;">9</td>
                                                                </tr>
                                                                <tr style="background-color: burlywood;">
                                                                    <td>msisdn00019</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>CIMAHI</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">2</td>
                                                                    <td style="text-align: right;">21</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">228</td>
                                                                    <td style="text-align: right;">152</td>
                                                                    <td style="text-align: right;">11</td>
                                                                </tr>
                                                                <tr style="background-color: cadetblue;">
                                                                    <td>msisdn00001</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>DEPOK</td>
                                                                    <td>no</td>
                                                                    <td style="text-align: right;">36</td>
                                                                    <td style="text-align: right;">25</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">165</td>
                                                                    <td style="text-align: right;">149</td>
                                                                    <td style="text-align: right;">8</td>
                                                                </tr>
                                                                <tr style="background-color: cadetblue;">
                                                                    <td>msisdn00003</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>DEPOK</td>
                                                                    <td>no</td>
                                                                    <td style="text-align: right;">37</td>
                                                                    <td style="text-align: right;">25</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">64</td>
                                                                    <td style="text-align: right;">70</td>
                                                                    <td style="text-align: right;">6</td>
                                                                </tr>
                                                                <tr style="background-color: cadetblue;">
                                                                    <td>msisdn00067</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>DEPOK</td>
                                                                    <td>no</td>
                                                                    <td style="text-align: right;">49</td>
                                                                    <td style="text-align: right;">31</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">213</td>
                                                                    <td style="text-align: right;">158</td>
                                                                    <td style="text-align: right;">12</td>
                                                                </tr>
                                                                <tr style="background-color: cadetblue;">
                                                                    <td>msisdn00001</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>DEPOK</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td style="text-align: right;">31</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">82</td>
                                                                    <td style="text-align: right;">82</td>
                                                                    <td style="text-align: right;">6</td>
                                                                </tr>
                                                                <tr style="background-color: darkgray;">
                                                                    <td>msisdn00105</td>
                                                                    <td>JAWA BARAT</td>
                                                                    <td>SUMEDANG</td>
                                                                    <td>no</td>
                                                                    <td style="text-align: right;">25</td>
                                                                    <td style="text-align: right;">2</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">246</td>
                                                                    <td style="text-align: right;">135</td>
                                                                    <td style="text-align: right;">12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn00010</td>
                                                                    <td>JAWA TENGAH</td>
                                                                    <td>BOYOLALI</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">16</td>
                                                                    <td style="text-align: right;">20</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">173</td>
                                                                    <td style="text-align: right;">123</td>
                                                                    <td style="text-align: right;">8</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn00108</td>
                                                                    <td>JAWA TENGAH</td>
                                                                    <td>BOYOLALI</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">16</td>
                                                                    <td style="text-align: right;">20</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">117</td>
                                                                    <td style="text-align: right;">117</td>
                                                                    <td style="text-align: right;">6</td>
                                                                </tr>
                                                                <tr style="background-color: gold;">
                                                                    <td>msisdn00027</td>
                                                                    <td>JAWA TENGAH</td>
                                                                    <td>JEPARA</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">80</td>
                                                                    <td style="text-align: right;">6</td>
                                                                    <td>Telkomsel</td>
                                                                    <td style="text-align: right;">106</td>
                                                                    <td style="text-align: right;">97</td>
                                                                    <td style="text-align: right;">8</td>
                                                                </tr>
                                                                <tr style="background-color: gold;">
                                                                    <td>msisdn00027</td>
                                                                    <td>JAWA TENGAH</td>
                                                                    <td>JEPARA</td>
                                                                    <td>yes</td>
                                                                    <td style="text-align: right;">80</td>
                                                                    <td style="text-align: right;">6</td>
                                                                    <td>Indosat</td>
                                                                    <td style="text-align: right;">106</td>
                                                                    <td style="text-align: right;">92</td>
                                                                    <td style="text-align: right;">6</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <p class="mt-3" style="font-weight: normal;">Terdapat 7 kelompok yang berisikan nomor-nomor dengan lokasi home yang sama di setiap kelompoknya.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Akan digunakan data baru yang masih dalam bentuk raw data (bukan hasil dari preprocessing AMDA). Hal ini dikarenakan pada algoritma ini akan dianalisis untuk setiap event yang terjadi, termasuk juga pola perjalanan pelanggan (bukan hanya event yang terjadi setelah dilakukan eliminasi unusual speed < 10 km/jam)</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Untuk masing-masing nomor di kelompok yang sama, antar lokasi koordinat setiap record, secara berurutan dihitung speed-nya untuk mengeliminasi pergerakan yang tidak wajar karena adanya lag record. Contoh lag record:</p>
                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                        <table class="table table-hover table-bordered table-responsive" id="k1_tabel1" style="width:100%;overflow-x:auto;">
                                                            <tbody style="font-weight: normal;">
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>11:38</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.04781</td>
                                                                    <td style="text-align: right;">109.0295</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">10</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>11:38</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.04781</td>
                                                                    <td style="text-align: right;">109.0295</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">10</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>11:39</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.0077</td>
                                                                    <td style="text-align: right;">109.068</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>11:45</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.0478</td>
                                                                    <td style="text-align: right;">109.0295</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">10</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>11:50</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.04781</td>
                                                                    <td style="text-align: right;">109.0295</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">10</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>11:51</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.0077</td>
                                                                    <td style="text-align: right;">109.068</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: red;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>12:32</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-6.26504</td>
                                                                    <td style="text-align: right;">106.9855</td>
                                                                    <td style="text-align: right;">32</td>
                                                                    <td style="text-align: right;">75</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: red;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>12:32</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-6.26504</td>
                                                                    <td style="text-align: right;">106.9855</td>
                                                                    <td style="text-align: right;">32</td>
                                                                    <td style="text-align: right;">75</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>12:34</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.0077</td>
                                                                    <td style="text-align: right;">109.068</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>11:51</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.0077</td>
                                                                    <td style="text-align: right;">109.068</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>12:45</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.0478</td>
                                                                    <td style="text-align: right;">109.0295</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">10</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>12:46</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.00769</td>
                                                                    <td style="text-align: right;">109.0679</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>12:49</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.0077</td>
                                                                    <td style="text-align: right;">109.068</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>12:50</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.13289</td>
                                                                    <td style="text-align: right;">109.145</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">30</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                                <tr style="background-color: darkseagreen;">
                                                                    <td>msisdn07</td>
                                                                    <td style="text-align: right;">12/19/2021</td>
                                                                    <td>11:51</td>
                                                                    <td>lba</td>
                                                                    <td style="text-align: right;">-7.0077</td>
                                                                    <td style="text-align: right;">109.068</td>
                                                                    <td style="text-align: right;">33</td>
                                                                    <td style="text-align: right;">28</td>
                                                                    <td style="text-align: right;">50</td>
                                                                    <td>2021-12</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <ul class="list-styled mt-4">
                                                        <li>Speed yang tidak wajar antara 2 lokasi koordinat record, yaitu lebih dari 100 km/jam akan dieliminasi.</li>
                                                        <li>Penghitungan jarak antara 2 lokasi koordinat menggunakan haversine distance.</li>
                                                    </ul>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Setelah dilakukan eliminasi pergerakan yang tidak wajar, setiap nomor yang ada di kelompok yang sama selama periode setahun (Desember 2021-November 2022), akan dikonversi ke dalam bentuk hexagon yang memiliki cell id unik.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Resolusi H3 yang disarankan yaitu mulai dari resolusi 8 hingga 12. Pada langkah ini akan digunakan resolusi 8.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Ambil 1 nomor yang akan di analisis (misal nomor 01)</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Eliminasi indeks h3 (hexagon) yang duplicate selama periode waktu referensi (setahun) sehingga hanya diperoleh indeks h3 yang unik</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Hitung jumlah hexagon milik nomor 01 yang beririsan dengan hexagon milik nomor lain (dalam kelompok yang sama)</p>
                                                            <p style="font-weight:normal;">Contoh:</p>
                                                            <p class="mt-3"style="font-weight:normal;"> Misal nomor 01 memiliki sebaran hexagon sebagai berikut:</p>
                                                            <p style="font-weight: bold; color:red">GAMBAR</p>
                                                            <p class="mt-3"style="font-weight:normal;"> Misal nomor 02 (nomor yang akan dibandingkan) memiliki sebaran hexagon sebagai berikut:</p>
                                                            <p style="font-weight: bold; color:red">GAMBAR</p>
                                                            <p class="mt-3"style="font-weight:normal;"> Maka jika kita meng-overlay-kan layer hexagon nomor 01 dengan layer hexagon nomor 02, akan didapatkan sebaran hexagon sebagai berikut:</p>
                                                            <p style="font-weight: bold; color:red">GAMBAR</p>
                                                            <p class="mt-3"style="font-weight:normal;"> Jumlah hexagon yang beririsan adalah sebagai berikut:</p>
                                                            <p style="font-weight: bold; color:red">GAMBAR</p>
                                                            <p class="mt-3"style="font-weight:normal;">Sehingga antara nomor 01 dengan nomor 02 memiliki jumlah hexagon yang beririsan sebanyak 19 hexagon.</p>

                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Ulangi langkah 13 dengan menghitung jumlah hexagon nomor 01 yang beririsan dengan hexagon nomor lainnya selain nomor 02 (dalam kelompok yang sama)</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Dari langkah 13 dan 14, didapatkan sebuah variabel yaitu jumlah irisan untuk setiap 2 nomor yang dibandingkan dalam kelompok yang sama.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Untuk menentukan entitas double counting, akan ditentukan threshold (ambang batas) jumlah irisan yang dapat mengklasifikasikan mana entitas double counting dan mana yang bukan entitas double counting dengan baik</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Penentuan threshold dilakukan dengan melakukan visualisasi decision tree yang dibangun dari variabel jumlah irisan dan variabel data kelas actual double counting.</p>
                                                            <p style="font-weight:normal;">Contoh hasil pengolahan (10 perbandingan msisdn):</p>
                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                        <table class="table table-hover table-bordered table-responsive" id="k1_tabel1" style="width:100%;overflow-x:auto;">
                                                            <thead style="color: #fff; font-weight:bold;">
                                                                <tr>
                                                                    <th scope="col">MSISDN 1</th>
                                                                    <th scope="col">MSISDN 1</th>
                                                                    <th scope="col">Family Id 1</th>
                                                                    <th scope="col">Family Id 2</th>
                                                                    <th scope="col">Is Family</th>
                                                                    <th scope="col">Group</th>
                                                                    <th scope="col">Haversine</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody style="font-weight: normal;">
                                                                <tr>
                                                                    <td>msisdn00092</td>
                                                                    <td>msisdn00109</td>
                                                                    <td>9</td>
                                                                    <td>9</td>
                                                                    <td>0</td>
                                                                    <td>0</td>
                                                                    <td>0.015145</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00042</td>
                                                                    <td>msisdn00079</td>
                                                                    <td>3</td>
                                                                    <td>19</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>9.926563</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00079</td>
                                                                    <td>msisdn00101</td>
                                                                    <td>19</td>
                                                                    <td>3</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>8.224279</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00042</td>
                                                                    <td>msisdn00101</td>
                                                                    <td>3</td>
                                                                    <td>3</td>
                                                                    <td>0</td>
                                                                    <td>1</td>
                                                                    <td>0.000000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00051</td>
                                                                    <td>msisdn00100</td>
                                                                    <td>12</td>
                                                                    <td>12</td>
                                                                    <td>0</td>
                                                                    <td>2</td>
                                                                    <td>0.140389</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00035</td>
                                                                    <td>msisdn00098</td>
                                                                    <td>8</td>
                                                                    <td>8</td>
                                                                    <td>0</td>
                                                                    <td>3</td>
                                                                    <td>0.0140924</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00018</td>
                                                                    <td>msisdn00021</td>
                                                                    <td>7</td>
                                                                    <td>7</td>
                                                                    <td>0</td>
                                                                    <td>4</td>
                                                                    <td>0.395004</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00049</td>
                                                                    <td>msisdn00111</td>
                                                                    <td>22</td>
                                                                    <td>22</td>
                                                                    <td>0</td>
                                                                    <td>5</td>
                                                                    <td>2.445019</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00110</td>
                                                                    <td>msisdn00111</td>
                                                                    <td>22</td>
                                                                    <td>22</td>
                                                                    <td>0</td>
                                                                    <td>5</td>
                                                                    <td>2.113352</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00091</td>
                                                                    <td>msisdn00111</td>
                                                                    <td>22</td>
                                                                    <td>22</td>
                                                                    <td>0</td>
                                                                    <td>5</td>
                                                                    <td>0.744306</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Penggunaan decision tree untuk menentukan threshold memanfaatkan gini impurity yang merupakan sebuah fungsi untuk menentukan seberapa baik decision tree di-split.</p>
                                                            <p style="color:red"></p>
                                                            <p style="font-weight: normal;">Dari hasil visualisasi decision tree diatas, untuk root node (root pertama), decision tree melakukan split dengan gini impurity di angka jumlah irisan <=79,5 (yang artinya angka 79,5 merupakan jumlah irisan terbaik untuk membedakan kelas no dan kelas yes pada variabel is_double) </p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Berdasarkan hasil dari poin 18, maka akan ditentukan threshold jumlah irisan <= 79 untuk kelas yang diprediksi no (bukan entitas double counting) dan jumlah irisan >79 untuk kelas yang diprediksi yes (entitas double counting)</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Ulangi langkah 11 dengan menggunakan resolusi 9, begitu seterusnya hingga resolusi 12.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Lakukan evaluasi resolusi H3 mana yang memberikan hasil terbaik dalam mengidentifikasi nomor-nomor double counting dengan cara menghitung precision, recall, akurasi dan f1-score untuk masing-masing resolusi kemudian membandingkannya satu sama lain.</p>
                                                        </li>
                                                    </ol>
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
            <!-- With forming staypoint -->
            <div class="tab-pane fade" id="pills-with" role="tabpanel" aria-labelledby="pills-with-tab" tabindex="0">
                <div class="isi-tujuan shadow mt-0 mb-0">
                    <h4 class="card-title judul-card">Algortima Double Counting H3 Dengan Pembentukan Staypoint</h4>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow rounded-4">
                                    <div class="pb-2 card-body">
                                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                            <div class="me-1 mt-1 justify-content-end align-item-end">
                                                <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                                    <i class="fa-solid fa-download"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-0 col-lg-7 grid-margin">
                                                <div>
                                                    <div class="chartBox" style=" height:300px;">
                                                        <canvas id="chart-1"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                                <div>
                                                    <h3 class="text-center"><b>Story</b></h3>
                                                    <p class="text-justify">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.
                                                    </p>
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
        </div>
    </div>

    <!-- Algoritma 3 -->
    <div class="tab-pane fade " id="pills-algoritma3" role="tabpanel" aria-labelledby="pills-algoritma3-tab" tabindex="0">
        <div class="isi-tujuan shadow mt-0 mb-0">
            <h4 class="card-title judul-card">Algoritma 3</h4>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-0 col-lg-7 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                        <div>
                                            <h3 class="text-center"><b>Story</b></h3>
                                            <p class="text-justify">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                    <div class="me-1 mt-1 justify-content-end align-item-end">
                                        <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal4-barplot">
                                            <i class="fa-solid fa-download"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-0 col-lg-7 grid-margin">
                                        <div>
                                            <div class="chartBox" style=" height:300px;">
                                                <canvas id="chart-1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0 col-lg-5 grid-margin stretch-card">
                                        <div>
                                            <h3 class="text-center"><b>Story</b></h3>
                                            <p class="text-justify">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae voluptatum temporibus suscipit animi hic minus! Exercitationem ut vitae sunt consequuntur modi? Quisquam incidunt eligendi sed provident natus beatae! Obcaecati, libero esse vel quia consequatur error quasi sit eaque porro enim corporis aperiam doloribus tempora perferendis alias, quos non temporibus dolorem dolorum adipisci voluptate laudantium reiciendis, ab ipsa. At, quia.
                                            </p>
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
</div>