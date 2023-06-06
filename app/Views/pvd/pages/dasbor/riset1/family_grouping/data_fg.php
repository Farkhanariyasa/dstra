<div class="tab-content" id="pills-tabContent">
    <!-- Algoritma 1 -->
    <div class="tab-pane fade show active" id="pills-algoritma1" role="tabpanel" aria-labelledby="pills-algoritma1-tab" tabindex="0">
        <div class="isi-tujuan shadow mt-0 mb-0">
            <h4 class="card-title judul-card text-center">Algoritma Double Counting (Metode Penghitungan Jarak Antar Staypoint)</h4>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="row">
                                    <div class="mb-0 col-lg-12 grid-margin">
                                        <div class="pr-3 pl-3">
                                            <h3 class="text-center"><b>Alur Algoritma</b></h3>
                                            <ol class="list-styled" style="text-align:justify;">
                                                <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Penentuan lokasi usual environment menggunakan AMDA dengan beberapa tahap berikut.</p>
                                                    <ol class="list-styled" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; line-height:1rem; font-size:1rem">
                                                        <li>Identifikasi anomali pada setiap perpindahan lokasi yang terjadi dengan cara sebagai berikut.
                                                            <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                <li>Pembulatan lokasi dengan membulatkan koordinat latitude dan longitude dengan ketelitian lima decimal.
                                                                    <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                        <p style="text-align: center; font-weight:bold">Tabel X. Contoh Record MPD Sebelum Dilakukan Pembulatan</p>
                                                                        <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                            <thead style="color: #fff; font-weight:bold; background-color:yellow;">
                                                                                <tr style="background-color:yellow;">
                                                                                    <th scope="col">msisdn</th>
                                                                                    <th scope="col">datetime</th>
                                                                                    <th scope="col">source</th>
                                                                                    <th scope="col">latitude</th>
                                                                                    <th scope="col">longitude</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody style="font-weight: normal;">
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 12:36:41</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.795097</td>
                                                                                    <td>110.358727</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 13:31:37</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.804648</td>
                                                                                    <td>110.357843</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 14:25:37</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.804648</td>
                                                                                    <td>110.357843</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 14:42:24</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.76936</td>
                                                                                    <td>110.364236</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 16:30:51</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.783124</td>
                                                                                    <td>110.398203</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 17:24:52</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.783124</td>
                                                                                    <td>110.398203</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 18:18:53</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.783124</td>
                                                                                    <td>110.398203</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 18:20:18</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.782672</td>
                                                                                    <td>110.400982</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 18:20:47</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.782672</td>
                                                                                    <td>110.400982</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 18:24:40</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.782672</td>
                                                                                    <td>110.400982</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                        <p style="text-align: center; font-weight:bold">Tabel X Contoh Record MPD Setelah Dilakukan Pembulatan</p>
                                                                        <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                            <thead style="color: #fff; font-weight:bold;">
                                                                                <tr>
                                                                                    <th scope="col">msisdn</th>
                                                                                    <th scope="col">datetime</th>
                                                                                    <th scope="col">source</th>
                                                                                    <th scope="col">latitude</th>
                                                                                    <th scope="col">longitude</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody style="font-weight: normal;">
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 12:36:41</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.79510</td>
                                                                                    <td>110.35873</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 13:31:37</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.80465</td>
                                                                                    <td>110.35784</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 14:25:37</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.80465</td>
                                                                                    <td>110.35784</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 14:42:24</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.76940</td>
                                                                                    <td>110.36424</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 16:30:51</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.78312</td>
                                                                                    <td>110.39820</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 17:24:52</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.78312</td>
                                                                                    <td>110.39820</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 18:18:53</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.78312</td>
                                                                                    <td>110.39820</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 18:20:18</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.78267</td>
                                                                                    <td>110.40098</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 18:20:47</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.78267</td>
                                                                                    <td>110.40098</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2021-01-01 18:24:40</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.78267</td>
                                                                                    <td>110.40098</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </li>
                                                                <li class="mt-3">Menghilangkan fast movers dengan menghapus record dengan kecepatan melebihi ambang batas (diatas 10 km/jam). Untuk menghitung kecepatan, sebelumnya dihitung jarak dari urutan setiap lokasi MSISDN menggunakan formula Haversine terlebih dahulu. Kemudian, dihitung waktu yang dibutuhkan untuk berpindah dari satu koordinat ke koordinat lainnya secara berurutan. Terakhir, dihitung kecepatan dengan membagi jarak dengan waktu tempuh.
                                                                    <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                        <p style="text-align: center; font-weight:bold">Tabel X. Contoh Record MPD dengan Penghitungan Kecepatan</p>
                                                                        <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                            <thead style="color: #fff; font-weight:bold;">
                                                                                <tr>
                                                                                    <th scope="col">msisdn</th>
                                                                                    <th scope="col">datetime</th>
                                                                                    <th scope="col">source</th>
                                                                                    <th scope="col">latitude</th>
                                                                                    <th scope="col">longitude</th>
                                                                                    <th scope="col">haversine distance</th>
                                                                                    <th scope="col">Time (jam)</th>
                                                                                    <th scope="col">Speed (km/jam)</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody style="font-weight: normal;">
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>1/1/2021 12:36</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.79510</td>
                                                                                    <td>110.35873</td>
                                                                                    <td> </td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>1/1/2021 13:31</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.80465</td>
                                                                                    <td>110.35784</td>
                                                                                    <td>0.382454</td>
                                                                                    <td>0.916667</td>
                                                                                    <td>0.417223</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>1/1/2021 14:25</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.80465</td>
                                                                                    <td>110.35784</td>
                                                                                    <td>0</td>
                                                                                    <td>0.9</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>1/1/2021 14:42</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.76940</td>
                                                                                    <td>110.36424</td>
                                                                                    <td>1.538283</td>
                                                                                    <td>0.283333</td>
                                                                                    <td>5.429234</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>1/1/2021 16:30</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.78312</td>
                                                                                    <td>110.3982</td>
                                                                                    <td>3.813374</td>
                                                                                    <td>1.8</td>
                                                                                    <td>2.118541</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>1/1/2021 17:24</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.78312</td>
                                                                                    <td>110.3982</td>
                                                                                    <td>0</td>
                                                                                    <td>0.9</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>1/1/2021 18:18</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.78312</td>
                                                                                    <td>110.3982</td>
                                                                                    <td>0</td>
                                                                                    <td>0.9</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>1/1/2021 18:20</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.78267</td>
                                                                                    <td>110.40098</td>
                                                                                    <td>0.309614</td>
                                                                                    <td>0.033333</td>
                                                                                    <td>9.28842</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>1/1/2021 18:20</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.78267</td>
                                                                                    <td>110.40098</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>1/1/2021 18:24</td>
                                                                                    <td>LBA</td>
                                                                                    <td>-7.78267</td>
                                                                                    <td>110.40098</td>
                                                                                    <td>0</td>
                                                                                    <td>0.066667</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </li>
                                                            </ol>
                                                        </li>
                                                        <li>
                                                            Deteksi lokasi rumah (home) menggunakan AMDA dengan membentuk anchor point melalui tahapan berikut.
                                                            <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                <li>Untuk setiap nomor/subscriber, filter event pertama yang terekam setiap harinya pada hari kerja (weekdays)</li>
                                                                <li>Ubah waktu kejadian yang masih menggunakan format 24 jam menjadi format 12 jam dengan mengikuti algoritma sebagai berikut.
                                                                    <ol class="list-styled mt-2" style="text-align:justify; font-weight:normal; font-size:1rem">
                                                                        <li>Melakukan pengecekan untuk setiap timestamp apakah jam yang tertera lebih besar dari 12 atau tidak</li>
                                                                        <li>Jika diperoleh hasilnya “Ya” (Jam > 12), maka lakukan transformasi pada timestamp dengan menggunakan formula: jam -- 12</li>
                                                                        <li>Jika diperoleh hasilnya “Tidak”, maka tidak akan dilakukan transformasi pada timestamp</li>
                                                                        <li>Selanjutnya, untuk setiap subscriber, hitung frekuensi berada di LAU tertentu (dalam hal ini LAU2 Regency)</li>
                                                                    </ol>
                                                                    <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                        <p style="text-align: center; font-weight:bold">Format 24 jam (Original):</p>
                                                                        <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>0</td>
                                                                                    <td>1</td>
                                                                                    <td>2</td>
                                                                                    <td>3</td>
                                                                                    <td>4</td>
                                                                                    <td>5</td>
                                                                                    <td>6</td>
                                                                                    <td>7</td>
                                                                                    <td>8</td>
                                                                                    <td>9</td>
                                                                                    <td>10</td>
                                                                                    <td>11</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>23</td>
                                                                                    <td>22</td>
                                                                                    <td>21</td>
                                                                                    <td>20</td>
                                                                                    <td>19</td>
                                                                                    <td>18</td>
                                                                                    <td>17</td>
                                                                                    <td>16</td>
                                                                                    <td>15</td>
                                                                                    <td>14</td>
                                                                                    <td>13</td>
                                                                                    <td>12</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                        <p style="text-align: center; font-weight:bold">Format 24 jam (Converted):</p>
                                                                        <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>0</td>
                                                                                    <td>1</td>
                                                                                    <td>2</td>
                                                                                    <td>3</td>
                                                                                    <td>4</td>
                                                                                    <td>5</td>
                                                                                    <td>6</td>
                                                                                    <td>7</td>
                                                                                    <td>8</td>
                                                                                    <td>9</td>
                                                                                    <td>10</td>
                                                                                    <td>11</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </li>
                                                                <li>Hitung frekuensi kemunculan awal event per hari per cell-id (anchor)</li>
                                                                <li>Hitung statistik rata-rata dan standar deviasi untuk jam terjadinya event, jumlah hari, dan jumlah kemunculan event. Perhitungan ini dilakukan untuk setiap anchor.</li>
                                                            </ol>
                                                        </li>
                                                        <li>Menentukan kandidat usual environment dengan :
                                                            <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                <li>Hitung jarak antara anchor dan kandidat utama dengan menggunakan haversine distance.</li>
                                                                <li>Filter anchor dengan jumlah hari yang muncul lebih dari atau sama dengan 5. Eliminasi anchor yang berdekatan dengan kandidat utama (di bawah 500 m).</li>
                                                                <li>Pisahkan kejadian (event) yang ada hanya pada hari kerja dan ubah variabel waktu menjadi format 12 jam.</li>
                                                                <li>Hitung frekuensi lokasi awal harian dari setiap titik lokasi (anchor), serta statistik rata-rata dan standar deviasi setiap jam kejadian, dan bentuk kandidat utamanya.</li>
                                                                <li>Hitung jarak antara lokasi yang dipilih dengan lokasi kandidat utama, kemudian eliminasi lokasi yang berdekatan (berada di bawah 500 m) diikuti dengan mengurutkan lama kejadian yang lebih atau sama dengan 5 hari.</li>
                                                            </ol>
                                                        </li>
                                                        <li>Pembentukan anchor point kedua dengan cara berikut.
                                                            <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                <li>Hitung jumlah record (N_event), jumlah hari unik (N_date), serta rata-rata jam kejadian (AVG_hour) diikuti dengan standar deviasi jam kejadian (SD_hour) untuk setiap nomor/subscriber per bulannya.
                                                                    <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                        <p style="text-align: center; font-weight:bold">Tabel X Contoh Agregasi Penghitungan Anchor 1</p>
                                                                        <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                            <thead style="color: #fff; font-weight:bold;">
                                                                                <th scope="col">msisdn</th>
                                                                                <th scope="col">year</th>
                                                                                <th scope="col">month</th>
                                                                                <th scope="col">latitude</th>
                                                                                <th scope="col">longitude</th>
                                                                                <th scope="col">idkab</th>
                                                                                <th scope="col">N_event</th>
                                                                                <th scope="col">N_date</th>
                                                                                <th scope="col">AVG_hour</th>
                                                                                <th scope="col">SD_hour</th>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2022</td>
                                                                                    <td>1</td>
                                                                                    <td>-6.9201</td>
                                                                                    <td>107.5607</td>
                                                                                    <td>32|77</td>
                                                                                    <td>113</td>
                                                                                    <td>23</td>
                                                                                    <td>1.05</td>
                                                                                    <td>2.07</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2022</td>
                                                                                    <td>1</td>
                                                                                    <td>-6.922</td>
                                                                                    <td>107.5559</td>
                                                                                    <td>32|77</td>
                                                                                    <td>46</td>
                                                                                    <td>22</td>
                                                                                    <td>3.83</td>
                                                                                    <td>3.03</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2022</td>
                                                                                    <td>1</td>
                                                                                    <td>-6.9201</td>
                                                                                    <td>107.5607</td>
                                                                                    <td>32|77</td>
                                                                                    <td>155</td>
                                                                                    <td>19</td>
                                                                                    <td>3.6</td>
                                                                                    <td>3.55</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2022</td>
                                                                                    <td>1</td>
                                                                                    <td>-6.922</td>
                                                                                    <td>107.5559</td>
                                                                                    <td>32|77</td>
                                                                                    <td>67</td>
                                                                                    <td>18</td>
                                                                                    <td>4.31</td>
                                                                                    <td>4.05</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2022</td>
                                                                                    <td>1</td>
                                                                                    <td>-7.0282</td>
                                                                                    <td>107.5228</td>
                                                                                    <td>32|04</td>
                                                                                    <td>105</td>
                                                                                    <td>12</td>
                                                                                    <td>8.89</td>
                                                                                    <td>0.8</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </li>
                                                                <li>Hitung jumlah kemunculan suatu lokasi, kandidat utama setidaknya muncul sebanyak lima hari setiap bulan.</li>
                                                                <li>
                                                                    Potensi kandidat utama dilihat dengan mengelompokkan setiap lokasi yang ada. Mulanya, jarak antar lokasi dihitung dengan jarak Haversine, kemudian dikelompokkan lokasi-lokasi dengan radius jarak 0,5 km. Lokasi yang dianggap dekat dengan kandidat utama pada akhirnya dihilangkan dari calon lokasi usual environment.
                                                                    <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                        <p style="text-align: center; font-weight:bold">Tabel X Contoh Agregasi Penghitungan Anchor 2</p>
                                                                        <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                            <thead style="color: #fff; font-weight:bold;">
                                                                                <tr>
                                                                                    <th scope="col">msisdn</th>
                                                                                    <th scope="col">year</th>
                                                                                    <th scope="col">month</th>
                                                                                    <th scope="col">latitude</th>
                                                                                    <th scope="col">longitude</th>
                                                                                    <th scope="col">idkab</th>
                                                                                    <th scope="col">N_event</th>
                                                                                    <th scope="col">N_date</th>
                                                                                    <th scope="col">AVG_hour</th>
                                                                                    <th scope="col">SD_hour</th>
                                                                                    <th scope="col">distance</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr style="background-color: greenyellow;">
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2022</td>
                                                                                    <td>1</td>
                                                                                    <td>-6.9201</td>
                                                                                    <td>107.5607</td>
                                                                                    <td>32|77</td>
                                                                                    <td>113</td>
                                                                                    <td>23</td>
                                                                                    <td>1.05</td>
                                                                                    <td>2.07</td>
                                                                                    <td>0</td>
                                                                                </tr>
                                                                                <tr style="background-color: red;">
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2022</td>
                                                                                    <td>1</td>
                                                                                    <td>-6.922</td>
                                                                                    <td>107.5559</td>
                                                                                    <td>32|77</td>
                                                                                    <td>46</td>
                                                                                    <td>22</td>
                                                                                    <td>3.83</td>
                                                                                    <td>3.03</td>
                                                                                    <td>0.2</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2022</td>
                                                                                    <td>1</td>
                                                                                    <td>-6.9201</td>
                                                                                    <td>107.5607</td>
                                                                                    <td>32|77</td>
                                                                                    <td>155</td>
                                                                                    <td>19</td>
                                                                                    <td>3.6</td>
                                                                                    <td>3.55</td>
                                                                                    <td>0.76</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2022</td>
                                                                                    <td>1</td>
                                                                                    <td>-6.922</td>
                                                                                    <td>107.5559</td>
                                                                                    <td>32|77</td>
                                                                                    <td>67</td>
                                                                                    <td>18</td>
                                                                                    <td>4.31</td>
                                                                                    <td>4.05</td>
                                                                                    <td>17.22</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>msisdn00xxx</td>
                                                                                    <td>2022</td>
                                                                                    <td>1</td>
                                                                                    <td>-7.0282</td>
                                                                                    <td>107.5228</td>
                                                                                    <td>32|04</td>
                                                                                    <td>105</td>
                                                                                    <td>12</td>
                                                                                    <td>8.89</td>
                                                                                    <td>0.8</td>
                                                                                    <td>20.15</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <p class="mt-2">Baris berwarna hijau adalah kandidat utama. Baris berwarna merah dieliminasi karena berjarak kurang dari 0,5 km dari lokasi yang menjadi kandidat utama.</p>
                                                                </li>
                                                            </ol>
                                                        </li>
                                                        <li>Anchor hasil pengelompokkan lokasi dengan rata-rata jam kurang dari tujuh (AVG_hour < tujuh) akan diklasifikasikan sebagai calon lokasi rumah (home), sedangkan anchor lainnya dengan rata-rata jam lebih dari tujuh akan diklasifikasikan sebagai calon lokasi kantor (work). Pilih kandidat terkuat untuk lokasi rumah (home) dan kantor (work) dari setiap kelompok dengan urutan prioritas sebagai berikut : <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                        <li>jumlah hari kejadian tertinggi (N_date)</li>
                                                        <li>lokasi dengan baris data terbanyak (N_event)</li>
                                                        <li>rata-rata jam tertinggi (AVG_hour), dan</li>
                                                        <li>standar deviasi jam terendah (SD_hour)</li>

                                                    </ol>
                                                </li>
                                                <li>Diperoleh lokasi prediksi lokasi rumah (home) dan kantor (work) yang ditunjukkan pada contoh tabel berikut.
                                                    <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                        <p style="text-align: center; font-weight:bold">Tabel X. Prediksi Lokasi Usual Environment</p>
                                                        <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                            <thead style="color: #fff; font-weight:bold;">
                                                                <tr>
                                                                    <th scope="col">msisdn</th>
                                                                    <th scope="col">year</th>
                                                                    <th scope="col">month</th>
                                                                    <th scope="col">latitude</th>
                                                                    <th scope="col">longitude</th>
                                                                    <th scope="col">idkab</th>
                                                                    <th scope="col">N_event</th>
                                                                    <th scope="col">N_date</th>
                                                                    <th scope="col">AVG_hour</th>
                                                                    <th scope="col">SD_hour</th>
                                                                    <th scope="col">label</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>msisdn00xxx</td>
                                                                    <td>2020</td>
                                                                    <td>1</td>
                                                                    <td>-6.25008</td>
                                                                    <td>106.9067</td>
                                                                    <td>31|72</td>
                                                                    <td>39</td>
                                                                    <td>22</td>
                                                                    <td>1.07</td>
                                                                    <td>1.96</td>
                                                                    <td>Home</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>msisdn00xxx</td>
                                                                    <td>2020</td>
                                                                    <td>1</td>
                                                                    <td>-7.0282</td>
                                                                    <td>107.5228</td>
                                                                    <td>32|04</td>
                                                                    <td>105</td>
                                                                    <td>12</td>
                                                                    <td>8.89</td>
                                                                    <td>0.8</td>
                                                                    <td>Work</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </li>
                                            </ol>
                                            </li>
                                            <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                <p style="font-weight:normal;">Kelompokkan subscriber dengan lokasi rumah tahunan (home yearly) yang sama. Lokasi home tahunan diperoleh dari modus lokasi home pada nomor tersebut selama rentang waktu bulan Desember 2021 sampai bulan November 2022. Pengelompokan dilakukan berdasarkan lokasi administratif setingkat provinsi, kemudian kabupaten/kota.</p>
                                                <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; font-size:1rem">
                                                    <li>Jika didapati dua atau lebih modus home dengan lokasi yang berbeda, maka lokasi home ditentukan (secara berurutan) berdasarkan lokasi dengan jumlah hari kejadian tertinggi (N_date), lokasi dengan baris data terbanyak (N_event), lokasi dengan rata-rata jam tertinggi (AVG_hour), dan lokasi dengan standar deviasi jam terendah (SD_hour) diantara bulan-bulan yang menjadi modus lokasi home.</li>
                                                </ol>
                                            </li>
                                            <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                <p style="font-weight:normal;">Hitung kecepatan antar dua record berurutan untuk setiap record, dan lakukan eliminasi pergerakan yang tidak wajar (kecepatan yang lebih dari 100 km/jam). Kecepatan yang tidak wajar disebabkan oleh adanya lag record.</p>
                                                <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                    <p style="text-align: center; font-weight:bold">Tabel X Contoh Agregasi Penghitungan Anchor 2</c>
                                                    <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto; font-weight:normal">
                                                        <thead>
                                                            <tr>
                                                                <th scope="row">msisdn</th>
                                                                <th scope="row">datetime</th>
                                                                <th scope="row">source</th>
                                                                <th scope="row">latitude</th>
                                                                <th scope="row">longitude</th>
                                                                <th scope="row">Jarak haversine (km)</th>
                                                                <th scope="row">waktu (jam)</th>
                                                                <th scope="row">Kecepatan (km/jam)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>msisdn00xxx</td>
                                                                <td>12/10/2021 6:16</td>
                                                                <td>upcc</td>
                                                                <td>-6.26222</td>
                                                                <td>106.97889</td>
                                                                <td> </td>
                                                                <td> </td>
                                                                <td> </td>
                                                            </tr>
                                                            <tr>
                                                                <td>msisdn00xxx</td>
                                                                <td>12/10/2021 6:31</td>
                                                                <td>chg</td>
                                                                <td>-6.26222</td>
                                                                <td>106.97889</td>
                                                                <td>0</td>
                                                                <td>0.239167</td>
                                                                <td>0</td>
                                                            </tr>
                                                            <tr>
                                                                <td>msisdn00xxx</td>
                                                                <td>12/10/2021 7:21</td>
                                                                <td>upcc</td>
                                                                <td>-6.20028</td>
                                                                <td>106.80917</td>
                                                                <td>19.98482</td>
                                                                <td>0.833889</td>
                                                                <td>23.965</td>
                                                            </tr>
                                                            <tr>
                                                                <td>msisdn00xxx</td>
                                                                <td>12/10/2021 7:34</td>
                                                                <td>chg</td>
                                                                <td>-6.20028</td>
                                                                <td>106.80917</td>
                                                                <td>0</td>
                                                                <td>0.219722</td>
                                                                <td>0</td>
                                                            </tr>
                                                            <tr>
                                                                <td>msisdn00xxx</td>
                                                                <td>12/10/2021 9:24</td>
                                                                <td>upcc</td>
                                                                <td>-6.16333</td>
                                                                <td>106.84</td>
                                                                <td>5.338248</td>
                                                                <td>1.834167</td>
                                                                <td>2.9104</td>
                                                            </tr>
                                                            <tr>
                                                                <td>msisdn00xxx</td>
                                                                <td>12/10/2021 10:24</td>
                                                                <td>upcc</td>
                                                                <td>-6.16444</td>
                                                                <td>106.83583</td>
                                                                <td>0.477239</td>
                                                                <td>1.001389</td>
                                                                <td>0.4765</td>
                                                            </tr>
                                                            <tr>
                                                                <td>msisdn00xxx</td>
                                                                <td>12/10/2021 11:24</td>
                                                                <td>upcc</td>
                                                                <td>-6.16444</td>
                                                                <td>106.83583</td>
                                                                <td>0</td>
                                                                <td>1.000556</td>
                                                                <td>0</td>
                                                            </tr>
                                                            <tr>
                                                                <td>msisdn00xxx</td>
                                                                <td>12/10/2021 13:24</td>
                                                                <td>upcc</td>
                                                                <td>-6.20239</td>
                                                                <td>106.819</td>
                                                                <td>4.611796</td>
                                                                <td>2.000833</td>
                                                                <td>2.3049</td>
                                                            </tr>
                                                            <tr>
                                                                <td>msisdn00xxx</td>
                                                                <td>12/10/2021 13:35</td>
                                                                <td>chg</td>
                                                                <td>-6.20239</td>
                                                                <td>106.819</td>
                                                                <td>0</td>
                                                                <td>0.184722</td>
                                                                <td>0</td>
                                                            </tr>
                                                            <tr>
                                                                <td>msisdn00xxx</td>
                                                                <td>12/10/2021 14:15</td>
                                                                <td>chg</td>
                                                                <td>-6.26222</td>
                                                                <td>106.97889</td>
                                                                <td>18.88454</td>
                                                                <td>0.661111</td>
                                                                <td>28.564</td>
                                                            </tr>
                                                            <tr style="background-color: red;">
                                                                <td>msisdn00xxx</td>
                                                                <td>12/10/2021 14:25</td>
                                                                <td>upcc</td>
                                                                <td>-6.16333</td>
                                                                <td>106.84</td>
                                                                <td>18.88473</td>
                                                                <td>0.172778</td>
                                                                <td>109.30</td>
                                                            </tr>
                                                            <tr>
                                                                <td>msisdn00xxx</td>
                                                                <td>12/10/2021 15:25</td>
                                                                <td>upcc</td>
                                                                <td>-6.16444</td>
                                                                <td>106.83583</td>
                                                                <td>0.477239</td>
                                                                <td>1.000278</td>
                                                                <td>0.4771</td>
                                                            </tr>
                                                            <tr>
                                                                <td>msisdn00xxx</td>
                                                                <td>12/10/2021 16:25</td>
                                                                <td>upcc</td>
                                                                <td>-6.25639</td>
                                                                <td>106.94194</td>
                                                                <td>15.56028</td>
                                                                <td>1.000556</td>
                                                                <td>15.551</td>
                                                            </tr>
                                                            <tr>
                                                                <td>msisdn00xxx</td>
                                                                <td>12/10/2021 16:36</td>
                                                                <td>chg</td>
                                                                <td>-6.25883</td>
                                                                <td>106.94197</td>
                                                                <td>0.271336</td>
                                                                <td>0.187778</td>
                                                                <td>1.4449</td>
                                                            </tr>
                                                            <tr>
                                                                <td>msisdn00xxx</td>
                                                                <td>12/10/2021 17:26</td>
                                                                <td>upcc</td>
                                                                <td>-6.26889</td>
                                                                <td>106.98028</td>
                                                                <td>4.379708</td>
                                                                <td>0.833611</td>
                                                                <td>5.2538</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </li>
                                            <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                <p style="font-weight:normal;">Raw data (bukan data yang telah di preprocessing menggunakan AMDA) digunakan untuk analisis pada algoritma ini. Hal ini dikarenakan pada algoritma ini akan dianalisis untuk setiap event yang terjadi, termasuk juga pola perjalanan pelanggan (bukan hanya event yang terjadi setelah dilakukan eliminasi unusual speed < 10 km/jam)</p>
                                            </li>
                                            <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                <p style="font-weight:normal;">Bentuk staypoint dengan cara berikut.</p>
                                                <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; font-size:1rem">
                                                    <li>Bagi hari menjadi dua interval, yakni waktu work pukul 7 pagi hingga 7 malam, dan waktu home dari pukul 7 malam hingga 7 pagi.</li>
                                                    <li>Di setiap interval, hitung jumlah kemunculan koordinat lokasi yang berbeda di setiap harinya untuk seluruh nomor. Koordinat-koordinat tersebut disebut sebagai anchor.</li>
                                                    <li>Anchor dengan frekuensi terbanyak dalam satu interval disebut sebagai kandidat utama dan secara otomatis akan menjadi staypoint.</li>
                                                    <li>Hitung jarak anchor lain dengan kandidat utama menggunakan jarak Haversine dan eliminasi anchor yang memiliki jarak kurang dari 500m dari kandidat utama.</li>
                                                    <li>Anchor yang tidak tereliminasi dibiarkan dan dijadikan staypoint baru.</li>
                                                </ol>
                                                <p style="font-weight:normal;">Sebagai contoh, kita akan menentukan staypoint berdasarkan data pada Tabel X.. Pertama-tama, data perlu dibagi menjadi dua interval berdasarkan waktu pencatatan (datetime). Interval 1 (07.00-18.59) dan Interval 2 (19.00-06.59). Pada interval 1, terdapat dua titik koordinat (anchor), yaitu koordinat 1 (-6.24925, 106.90133) yang direpresentasikan dengan baris warna kuning dan koordinat 2 (-6.2501, 106.90658) yang direpresentasikan dengan baris warna aqua. Koordinat 1 muncul sebanyak tiga kali dan koordinat 2 muncul sebanyak enam kali. Dengan begitu, koordinat 2 akan dijadikan sebagai kandidat utama.</p>
                                                <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                    <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto; font-weight:normal">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">datetime</th>
                                                                <th scope="col">msisdn</th>
                                                                <th scope="col">source</th>
                                                                <th scope="col">latitude</th>
                                                                <th scope="col">longitude</th>
                                                                <th scope="col">provinsi</th>
                                                                <th scope="col">kabupaten</th>
                                                                <th scope="col">interval</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="text-align: center;">
                                                            <tr>
                                                                <td>11/02/2021 01:09</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td>-6.24925</td>
                                                                <td>106.90133</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                                <td rowspan="4"><br>INTERVAL 2</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 01:11</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td>-6.24925</td>
                                                                <td>106.90133</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 03:10</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td>-6.25010</td>
                                                                <td>106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 05:13</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td>-6.24925</td>
                                                                <td>106.90133</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 07:14</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: aqua;">-6.25010</td>
                                                                <td style="background-color: aqua;">106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                                <td rowspan="9"><br><br>INTERVAL 1</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 09:32</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: aqua;">-6.25010</td>
                                                                <td style="background-color: aqua;">106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 10:32</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: yellow;">-6.24925</td>
                                                                <td style="background-color: yellow;">106.90133</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 11:10</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: aqua;">-6.25010</td>
                                                                <td style="background-color: aqua;">106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 12:47</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: aqua;">-6.25010</td>
                                                                <td style="background-color: aqua;">106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 13:12</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: aqua;">-6.25010</td>
                                                                <td style="background-color: aqua;">106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 15:10</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: yellow;">-6.24925</td>
                                                                <td style="background-color: yellow;">106.90133</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 17:01</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: yellow;">-6.24925</td>
                                                                <td style="background-color: yellow;">106.90133</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 17:13</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: aqua;">-6.25010</td>
                                                                <td style="background-color: aqua;">106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 19:12</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td>-6.25010</td>
                                                                <td>106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                                <td rowspan="4"><br>INTERVAL 2</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 20:42</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td>-6.25010</td>
                                                                <td>106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 21:03</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td>-6.25010</td>
                                                                <td>106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 23:07</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td>-6.25010</td>
                                                                <td>106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <p style="font-weight:normal;">Jarak haversine antara koordinat 1 (-6.24925, 106.90133) dan koordinat 2 (-6.2501, 106.90658) adalah sebesar 0.59 km. Oleh karena jarak koordinat 2 (sebagai anchor lainnya) terhadap koordinat 1 (sebagai kandidat utama) lebih dari 0,5 km (500 m), maka koordinat 2 tidak akan dieliminasi dan akan dijadikan sebagai staypoint. Sehingga pada interval 1, terdapat 2 staypoint yaitu koordinat 1 (-6.24925, 106.90133) dan koordinat 2 (-6.2501, 106.90658).</p>
                                            </li>
                                            <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                <p style="font-weight:normal;">Setelah mendapatkan staypoint pada masing-masing interval di setiap harinya untuk seluruh nomor dengan lokasi home yang sama, ambil salah satu nomor (misal msisdn00xxx1), kemudian bandingkan nomor tersebut dengan nomor-nomor lainnya di dalam kelompok yang sama. Proses perbandingan dilakukan dengan menghitung jarak haversine antara staypoint milik msisdn001 dengan staypoint milik nomor lainnya (misal msisdn00xxx2) di interval dan hari yang bersesuaian. Berikut adalah contoh perhitungannya.</p>
                                                <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                    <p style="font-weight: bold; text-align:center;">Tabel X. MSISDN 00xxx1 dengan 2 Staypoint pada Interval 1</p>
                                                    <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto; font-weight:normal">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">datetime</th>
                                                                <th scope="col">msisdn</th>
                                                                <th scope="col">source</th>
                                                                <th scope="col">latitude</th>
                                                                <th scope="col">longitude</th>
                                                                <th scope="col">provinsi</th>
                                                                <th scope="col">kabupaten</th>
                                                                <th scope="col">interval</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="text-align: center;">
                                                            <tr>
                                                                <td>11/02/2021 01:09</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td>-6.24925</td>
                                                                <td>106.90133</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                                <td rowspan="4"><br>INTERVAL 2</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 01:11</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td>-6.24925</td>
                                                                <td>106.90133</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 03:10</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td>-6.25010</td>
                                                                <td>106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 05:13</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td>-6.24925</td>
                                                                <td>106.90133</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 07:14</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: aqua;">-6.25010</td>
                                                                <td style="background-color: aqua;">106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                                <td rowspan="9"><br><br>INTERVAL 1</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 09:32</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: aqua;">-6.25010</td>
                                                                <td style="background-color: aqua;">106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 10:32</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: yellow;">-6.24925</td>
                                                                <td style="background-color: yellow;">106.90133</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 11:10</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: aqua;">-6.25010</td>
                                                                <td style="background-color: aqua;">106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 12:47</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: aqua;">-6.25010</td>
                                                                <td style="background-color: aqua;">106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 13:12</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: aqua;">-6.25010</td>
                                                                <td style="background-color: aqua;">106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 15:10</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: yellow;">-6.24925</td>
                                                                <td style="background-color: yellow;">106.90133</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 17:01</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: yellow;">-6.24925</td>
                                                                <td style="background-color: yellow;">106.90133</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 17:13</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td style="background-color: aqua;">-6.25010</td>
                                                                <td style="background-color: aqua;">106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 19:12</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td>-6.25010</td>
                                                                <td>106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                                <td rowspan="4"><br>INTERVAL 2</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 20:42</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td>-6.25010</td>
                                                                <td>106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 21:03</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td>-6.25010</td>
                                                                <td>106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 23:07</td>
                                                                <td>msisdn00xxx</td>
                                                                <td>upcc</td>
                                                                <td>-6.25010</td>
                                                                <td>106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                    <p style="font-weight: bold; text-align:center;">Tabel X. MSISDN 00xxx1 dengan 3 Staypoint pada Interval 1</p>
                                                    <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto; font-weight:normal">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">datetime</th>
                                                                <th scope="col">msisdn</th>
                                                                <th scope="col">source</th>
                                                                <th scope="col">latitude</th>
                                                                <th scope="col">longitude</th>
                                                                <th scope="col">provinsi</th>
                                                                <th scope="col">kabupaten</th>
                                                                <th scope="col">interval</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>11/02/2021 01:12</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td>-6.55956</td>
                                                                <td>107.89661</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                                <td rowspan="4"><br>INTERVAL 2</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 03:10</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td>-6.55956</td>
                                                                <td>107.89661</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 05:01</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td>-6.55956</td>
                                                                <td>107.89661</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 05:13</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td>-6.55956</td>
                                                                <td>107.89661</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 07:12</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td style="background-color:darkolivegreen;">-6.55956</td>
                                                                <td style="background-color:darkolivegreen;">107.89661</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                                <td rowspan="8"><br><br>INTERVAL 1</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 08:42</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td style="background-color:darkolivegreen;">-6.55956</td>
                                                                <td style="background-color:darkolivegreen;">107.89661</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 09:03</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td style="background-color:darkolivegreen;">-6.55956</td>
                                                                <td style="background-color:darkolivegreen;">107.89661</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 11:07</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td style="background-color:darkolivegreen;">-6.55956</td>
                                                                <td style="background-color:darkolivegreen;">107.89661</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 14:57</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td style="background-color:plum;">-6.25010</td>
                                                                <td style="background-color:plum;">106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 15:19</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td style="background-color:plum;">-6.25010</td>
                                                                <td style="background-color:plum;">106.90658</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 17:16</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td style="background-color:sienna;">-6.24925</td>
                                                                <td style="background-color:sienna;">106.90133</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 18:31</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td style="background-color:sienna;">-6.24925</td>
                                                                <td style="background-color:sienna;">106.90133</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 19:33</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td>-6.64335</td>
                                                                <td>108.05679</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                                <td rowspan="5"><br>INTERVAL 2</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 20:37</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td>-6.64335</td>
                                                                <td>108.05679</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 21:27</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td>-6.64335</td>
                                                                <td>108.05679</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 22:52</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td>-6.64335</td>
                                                                <td>108.05679</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11/02/2021 23:50</td>
                                                                <td>msisdn00xxx2</td>
                                                                <td>upcc</td>
                                                                <td>-6.64335</td>
                                                                <td>108.05679</td>
                                                                <td>DKI Jakarta</td>
                                                                <td>Kota Jakarta Timur</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <p class="mt-2" style="font-weight: normal;">Pada contoh diatas, dapat dilihat bahwa msisdn00xxx1 memiliki total dua staypoint pada interval 1. Sedangkan msisdn00xxx2, memiliki total tiga staypoint pada interval 1.</p>
                                                <ul class="list-styled" style="font-weight: normal;">
                                                    <li>SP1Nomor1= (-6.25010,106.90658)</li>
                                                    <li>SP2Nomor1= (-6.24925,106.90133)</li>
                                                    <li>SP1Nomor2= (-6.55956,107.89661)</li>
                                                    <li>SP2Nomor2= (-6.25010,106.90658)</li>
                                                    <li>SP3Nomor2= (-6.24925,106.90133)</li>
                                                </ul>
                                                <p class="mt-1" style="font-weight:normal;">Lalu hitung jarak haversine untuk masing-masing kombinasi staypoint diantara kedua nomor tersebut. Beberapa kombinasi staypoint yang mungkin diantaranya adalah:</p>
                                                <ul class="list-styled" style="font-weight: normal;">
                                                    <li>d1 = hav(SP1Nomor1 , SP1Nomor2) = 114811,6 m</li>
                                                    <li>d2 = hav(SP1Nomor1 , SP2Nomor2) = 0 m</li>
                                                    <li>d3 = hav(SP1Nomor1 , SP3Nomor2) = 588,6092 m</li>
                                                    <li>d4 = hav(SP2Nomor1 , SP1Nomor2) = 115394,2 m</li>
                                                    <li>d5 = hav(SP2Nomor1 , SP2Nomor2) = 588,6092 m</li>
                                                    <li>d6 = hav(SP2Nomor1 , SP3Nomor2) = 0 m</li>
                                                </ul>
                                            </li>
                                            <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                <p style="font-weight:normal;">Setelah dilakukan penghitungan jarak antar dua staypoint, pilih kombinasi yang memiliki jarak terdekat antar dua staypoint. Misal, dari contoh sebelumnya terdapat 6 kombinasi, dan jarak terdekat antar kombinasi tersebut ada di d3 dan d6 yang jaraknya bernilai 0 m. </p>
                                            </li>
                                            <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                <p style="font-weight:normal;">Lakukan langkah 6 dan 7 untuk setiap interval di setiap harinya selama satu tahun.</p>
                                            </li>
                                            <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                <p style="font-weight:normal;">Hitung selisih dari jarak haversine terdekat antar staypoint di suatu interval dengan arak haversine terdekat antar staypoint pada interval berikutnya. Misalnya,</p>
                                                <ul class="list-styled" style="font-weight: normal;">
                                                    <li>Jarak haversine terdekat Interval 1, d1= 0 meter.</li>
                                                    <li>Jarak haversine terdekat Interval 2, d2= 5 meter.</li>
                                                    <li>Selisih jarak Interval 1 dan Interval 2, D =0 - 5 = 5 meter.</li>
                                                </ul>
                                            </li>
                                            <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                <p style="font-weight:normal;">Lakukan untuk setiap interval selanjutnya, kemudian rata-ratakan jarak terdekat antar interval tersebut selama setahun untuk memperoleh variabel baru yakni rata-rata kestabilan jarak terdekat antar interval selama satu tahun pada nomor-nomor yang berada di kelompok yang sama.</p>
                                            </li>
                                            <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                <p style="font-weight:normal;">Untuk menentukan entitas double counting, akan ditentukan threshold (ambang batas) rata-rata jarak kestabilan antar interval yang dapat mengklasifikasikan mana entitas double counting dan mana yang bukan entitas double counting dengan baik.</p>
                                            </li>
                                            <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                <p style="font-weight:normal;">Tentukan threshold dengan memanfaatkan gini impurity untuk menentukan split node terbaik dalam decision tree. Variabel yang digunakan dalam penghitungan ini adalah rata-rata kestabilan jarak terdekat antar nomor dan kelas actual double counting. Langkah-langkah penentuan threshold (ambang batas) menggunakan gini impurity secara singkat dapat dilakukan sebagai berikut.</p>
                                                <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; font-size:1rem">
                                                    <li>Urutkan nilai variabel Average_D dari yang terkecil hingga yang terbesar.</li>
                                                    <li>Identifikasi titik-titik pemisahan potensial di antara nilai-nilai variabel Average_D yang berurutan menggunakan rata-rata sebagai kandidat pemisahan.</li>
                                                    <li>Untuk setiap titik pemisahan potensial, pisahkan nilai variabel Average_D menjadi dua kelompok berdasarkan apakah nilai variabel Average_D lebih kecil atau lebih besar dari titik pemisahan tersebut.</li>
                                                    <li>Hitung gini impurity untuk setiap pemisahan potensial</li>
                                                    <li>Pilih pemisahan yang menghasilkan penurunan gini impurity yang paling signifikan sebagai pemisahan optimal untuk variabel Average_D tersebut.</li>
                                                    <li>Threshold terbaik adalah yang memiliki nilai gini impurity paling kecil.</li>
                                                </ol>
                                            </li>
                                            <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                <p style="font-weight:normal;">Prediksi entitas mana yang termasuk dalam double counting kemudian lakukan evaluasi dengan membuat confusion matrix dan menghitung ukuran evaluasi seperti precision, recall, akurasi dan f1-score. Untuk mengevaluasi algoritma ini, pengukuran lebih diprioritaskan terhadap nilai f1-score dari kelas Yes, yaitu kelas yang berisikan subscriber-subscriber yang diprediksi sebagai entitas double counting.</p>
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
        <div class="isi-tujuan shadow mt-5 mb-0" id="ketentuan">
            <h4 class="card-title judul-card">Ketentuan</h4>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow rounded-4">
                            <div class="pb-2 card-body">
                                <div class="row">
                                    <div class="mb-0 col-lg-12 grid-margin">
                                        <div class="pr-3 pl-3">
                                            <ul class="list-styled">
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Menerapkan konsep penghitungan jarak haversine yang sama persis dengan algoritma double counting.</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Bedanya algoritma FG diterapkan pada hari weekend (Sabtu-Minggu) atau bisa juga pada hari-hari libur lainnya seperti liburan semester, liburan natal dan tahun baru (nataru), libur lebaran dll.</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Hal ini didasarkan pada karakteristik anggota rumah tangga yang lebih sering menghabiskan waktu dirumah atau berpergian ke tempat wisata secara bersama-sama ketika weekend atau liburan.</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Periode analisis dalam algoritma FG dengan H3 adalah selama setahun (Des 2021 - Nov 2022)</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Pengelompokkan tahap 1 berdasarkan lokasi home yang sama menggunakan metode AMDA tetap dilakukan pada hari-hari weekdays (hanya pada step ini menggunakan weekdays, selebihnya menggunakan weekend).</p>
                                                </li>
                                                <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                    <p style="font-weight:normal;">Dalam algoritma FG juga akan ditentukan threshold yang diperoleh dari visualisasi decision tree yang dibangun dari variabel rata-rata jarak kestabilan antar interval dan variabel data kelas actual Family Grouping.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="isi-tujuan shadow mt-5 mb-0">
            <h4 class="card-title judul-card">Evaluasi</h4>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card bg-secondary">
                            <div class="card-body">
                                <div class="chartBox">
                                    <canvas class="mt1" id="fg_algoritma1_1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card bg-secondary">
                            <div class="card-body">
                                <div class="chartBox">
                                    <canvas class="mt1" id="fg_algoritma1_2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card bg-secondary">
                            <div class="card-body">
                                <div class="chartBox">
                                    <canvas class="mt1" id="fg_algoritma1_3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card h-100">
                        <div class="card bg-secondary">
                            <div class="card-body">
                                <div class="chartBox">
                                    <canvas class="mt1" id="fg_algoritma1_4"></canvas>
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
                    <h4 class="card-title judul-card text-center">Algortima Double Counting H3 Tanpa Pembentukan Staypoint</h4>
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
                                                    <ol class="list-styled" style="text-align:justify;">
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight: normal;">Penentuan lokasi usual environment menggunakan AMDA dengan beberapa tahap berikut.</p>
                                                            <ol class="list-styled" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; line-height:1rem; font-size:1rem">
                                                                <li>Identifikasi anomali pada setiap perpindahan lokasi yang terjadi dengan cara sebagai berikut.
                                                                    <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                        <li>Pembulatan lokasi dengan membulatkan koordinat latitude dan longitude dengan ketelitian lima decimal.
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X. Contoh Record MPD Sebelum Dilakukan Pembulatan</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold; background-color:yellow;">
                                                                                        <tr style="background-color:yellow;">
                                                                                            <th scope="col">msisdn</th>
                                                                                            <th scope="col">datetime</th>
                                                                                            <th scope="col">source</th>
                                                                                            <th scope="col">latitude</th>
                                                                                            <th scope="col">longitude</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody style="font-weight: normal;">
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 12:36:41</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.795097</td>
                                                                                            <td>110.358727</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 13:31:37</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.804648</td>
                                                                                            <td>110.357843</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 14:25:37</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.804648</td>
                                                                                            <td>110.357843</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 14:42:24</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.76936</td>
                                                                                            <td>110.364236</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 16:30:51</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.783124</td>
                                                                                            <td>110.398203</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 17:24:52</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.783124</td>
                                                                                            <td>110.398203</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:18:53</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.783124</td>
                                                                                            <td>110.398203</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:20:18</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.782672</td>
                                                                                            <td>110.400982</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:20:47</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.782672</td>
                                                                                            <td>110.400982</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:24:40</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.782672</td>
                                                                                            <td>110.400982</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X Contoh Record MPD Setelah Dilakukan Pembulatan</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                                        <tr>
                                                                                            <th scope="col">msisdn</th>
                                                                                            <th scope="col">datetime</th>
                                                                                            <th scope="col">source</th>
                                                                                            <th scope="col">latitude</th>
                                                                                            <th scope="col">longitude</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody style="font-weight: normal;">
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 12:36:41</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.79510</td>
                                                                                            <td>110.35873</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 13:31:37</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.80465</td>
                                                                                            <td>110.35784</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 14:25:37</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.80465</td>
                                                                                            <td>110.35784</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 14:42:24</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.76940</td>
                                                                                            <td>110.36424</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 16:30:51</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.39820</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 17:24:52</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.39820</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:18:53</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.39820</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:20:18</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:20:47</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:24:40</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </li>
                                                                        <li class="mt-3">Menghilangkan fast movers dengan menghapus record dengan kecepatan melebihi ambang batas (diatas 10 km/jam). Untuk menghitung kecepatan, sebelumnya dihitung jarak dari urutan setiap lokasi MSISDN menggunakan formula Haversine terlebih dahulu. Kemudian, dihitung waktu yang dibutuhkan untuk berpindah dari satu koordinat ke koordinat lainnya secara berurutan. Terakhir, dihitung kecepatan dengan membagi jarak dengan waktu tempuh.
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X. Contoh Record MPD dengan Penghitungan Kecepatan</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                                        <tr>
                                                                                            <th scope="col">msisdn</th>
                                                                                            <th scope="col">datetime</th>
                                                                                            <th scope="col">source</th>
                                                                                            <th scope="col">latitude</th>
                                                                                            <th scope="col">longitude</th>
                                                                                            <th scope="col">haversine distance</th>
                                                                                            <th scope="col">Time (jam)</th>
                                                                                            <th scope="col">Speed (km/jam)</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody style="font-weight: normal;">
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 12:36</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.79510</td>
                                                                                            <td>110.35873</td>
                                                                                            <td> </td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 13:31</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.80465</td>
                                                                                            <td>110.35784</td>
                                                                                            <td>0.382454</td>
                                                                                            <td>0.916667</td>
                                                                                            <td>0.417223</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 14:25</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.80465</td>
                                                                                            <td>110.35784</td>
                                                                                            <td>0</td>
                                                                                            <td>0.9</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 14:42</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.76940</td>
                                                                                            <td>110.36424</td>
                                                                                            <td>1.538283</td>
                                                                                            <td>0.283333</td>
                                                                                            <td>5.429234</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 16:30</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.3982</td>
                                                                                            <td>3.813374</td>
                                                                                            <td>1.8</td>
                                                                                            <td>2.118541</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 17:24</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.3982</td>
                                                                                            <td>0</td>
                                                                                            <td>0.9</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 18:18</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.3982</td>
                                                                                            <td>0</td>
                                                                                            <td>0.9</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 18:20</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                            <td>0.309614</td>
                                                                                            <td>0.033333</td>
                                                                                            <td>9.28842</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 18:20</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                            <td>0</td>
                                                                                            <td>0</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 18:24</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                            <td>0</td>
                                                                                            <td>0.066667</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                                <li>
                                                                    Deteksi lokasi rumah (home) menggunakan AMDA dengan membentuk anchor point melalui tahapan berikut.
                                                                    <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                        <li>Untuk setiap nomor/subscriber, filter event pertama yang terekam setiap harinya pada hari kerja (weekdays)</li>
                                                                        <li>Ubah waktu kejadian yang masih menggunakan format 24 jam menjadi format 12 jam dengan mengikuti algoritma sebagai berikut.
                                                                            <ol class="list-styled mt-2" style="text-align:justify; font-weight:normal; font-size:1rem">
                                                                                <li>Melakukan pengecekan untuk setiap timestamp apakah jam yang tertera lebih besar dari 12 atau tidak</li>
                                                                                <li>Jika diperoleh hasilnya “Ya” (Jam > 12), maka lakukan transformasi pada timestamp dengan menggunakan formula: jam -- 12</li>
                                                                                <li>Jika diperoleh hasilnya “Tidak”, maka tidak akan dilakukan transformasi pada timestamp</li>
                                                                                <li>Selanjutnya, untuk setiap subscriber, hitung frekuensi berada di LAU tertentu (dalam hal ini LAU2 Regency)</li>
                                                                            </ol>
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Format 24 jam (Original):</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>0</td>
                                                                                            <td>1</td>
                                                                                            <td>2</td>
                                                                                            <td>3</td>
                                                                                            <td>4</td>
                                                                                            <td>5</td>
                                                                                            <td>6</td>
                                                                                            <td>7</td>
                                                                                            <td>8</td>
                                                                                            <td>9</td>
                                                                                            <td>10</td>
                                                                                            <td>11</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>23</td>
                                                                                            <td>22</td>
                                                                                            <td>21</td>
                                                                                            <td>20</td>
                                                                                            <td>19</td>
                                                                                            <td>18</td>
                                                                                            <td>17</td>
                                                                                            <td>16</td>
                                                                                            <td>15</td>
                                                                                            <td>14</td>
                                                                                            <td>13</td>
                                                                                            <td>12</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Format 24 jam (Converted):</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>0</td>
                                                                                            <td>1</td>
                                                                                            <td>2</td>
                                                                                            <td>3</td>
                                                                                            <td>4</td>
                                                                                            <td>5</td>
                                                                                            <td>6</td>
                                                                                            <td>7</td>
                                                                                            <td>8</td>
                                                                                            <td>9</td>
                                                                                            <td>10</td>
                                                                                            <td>11</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </li>
                                                                        <li>Hitung frekuensi kemunculan awal event per hari per cell-id (anchor)</li>
                                                                        <li>Hitung statistik rata-rata dan standar deviasi untuk jam terjadinya event, jumlah hari, dan jumlah kemunculan event. Perhitungan ini dilakukan untuk setiap anchor.</li>
                                                                    </ol>
                                                                </li>
                                                                <li>Menentukan kandidat usual environment dengan :
                                                                    <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                        <li>Hitung jarak antara anchor dan kandidat utama dengan menggunakan haversine distance.</li>
                                                                        <li>Filter anchor dengan jumlah hari yang muncul lebih dari atau sama dengan 5. Eliminasi anchor yang berdekatan dengan kandidat utama (di bawah 500 m).</li>
                                                                        <li>Pisahkan kejadian (event) yang ada hanya pada hari kerja dan ubah variabel waktu menjadi format 12 jam.</li>
                                                                        <li>Hitung frekuensi lokasi awal harian dari setiap titik lokasi (anchor), serta statistik rata-rata dan standar deviasi setiap jam kejadian, dan bentuk kandidat utamanya.</li>
                                                                        <li>Hitung jarak antara lokasi yang dipilih dengan lokasi kandidat utama, kemudian eliminasi lokasi yang berdekatan (berada di bawah 500 m) diikuti dengan mengurutkan lama kejadian yang lebih atau sama dengan 5 hari.</li>
                                                                    </ol>
                                                                </li>
                                                                <li>Pembentukan anchor point kedua dengan cara berikut.
                                                                    <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                        <li>Hitung jumlah record (N_event), jumlah hari unik (N_date), serta rata-rata jam kejadian (AVG_hour) diikuti dengan standar deviasi jam kejadian (SD_hour) untuk setiap nomor/subscriber per bulannya.
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X Contoh Agregasi Penghitungan Anchor 1</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                                        <th scope="col">msisdn</th>
                                                                                        <th scope="col">year</th>
                                                                                        <th scope="col">month</th>
                                                                                        <th scope="col">latitude</th>
                                                                                        <th scope="col">longitude</th>
                                                                                        <th scope="col">idkab</th>
                                                                                        <th scope="col">N_event</th>
                                                                                        <th scope="col">N_date</th>
                                                                                        <th scope="col">AVG_hour</th>
                                                                                        <th scope="col">SD_hour</th>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.9201</td>
                                                                                            <td>107.5607</td>
                                                                                            <td>32|77</td>
                                                                                            <td>113</td>
                                                                                            <td>23</td>
                                                                                            <td>1.05</td>
                                                                                            <td>2.07</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.922</td>
                                                                                            <td>107.5559</td>
                                                                                            <td>32|77</td>
                                                                                            <td>46</td>
                                                                                            <td>22</td>
                                                                                            <td>3.83</td>
                                                                                            <td>3.03</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.9201</td>
                                                                                            <td>107.5607</td>
                                                                                            <td>32|77</td>
                                                                                            <td>155</td>
                                                                                            <td>19</td>
                                                                                            <td>3.6</td>
                                                                                            <td>3.55</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.922</td>
                                                                                            <td>107.5559</td>
                                                                                            <td>32|77</td>
                                                                                            <td>67</td>
                                                                                            <td>18</td>
                                                                                            <td>4.31</td>
                                                                                            <td>4.05</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-7.0282</td>
                                                                                            <td>107.5228</td>
                                                                                            <td>32|04</td>
                                                                                            <td>105</td>
                                                                                            <td>12</td>
                                                                                            <td>8.89</td>
                                                                                            <td>0.8</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </li>
                                                                        <li>Hitung jumlah kemunculan suatu lokasi, kandidat utama setidaknya muncul sebanyak lima hari setiap bulan.</li>
                                                                        <li>
                                                                            Potensi kandidat utama dilihat dengan mengelompokkan setiap lokasi yang ada. Mulanya, jarak antar lokasi dihitung dengan jarak Haversine, kemudian dikelompokkan lokasi-lokasi dengan radius jarak 0,5 km. Lokasi yang dianggap dekat dengan kandidat utama pada akhirnya dihilangkan dari calon lokasi usual environment.
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X Contoh Agregasi Penghitungan Anchor 2</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                                        <tr>
                                                                                            <th scope="col">msisdn</th>
                                                                                            <th scope="col">year</th>
                                                                                            <th scope="col">month</th>
                                                                                            <th scope="col">latitude</th>
                                                                                            <th scope="col">longitude</th>
                                                                                            <th scope="col">idkab</th>
                                                                                            <th scope="col">N_event</th>
                                                                                            <th scope="col">N_date</th>
                                                                                            <th scope="col">AVG_hour</th>
                                                                                            <th scope="col">SD_hour</th>
                                                                                            <th scope="col">distance</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr style="background-color: greenyellow;">
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.9201</td>
                                                                                            <td>107.5607</td>
                                                                                            <td>32|77</td>
                                                                                            <td>113</td>
                                                                                            <td>23</td>
                                                                                            <td>1.05</td>
                                                                                            <td>2.07</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr style="background-color: red;">
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.922</td>
                                                                                            <td>107.5559</td>
                                                                                            <td>32|77</td>
                                                                                            <td>46</td>
                                                                                            <td>22</td>
                                                                                            <td>3.83</td>
                                                                                            <td>3.03</td>
                                                                                            <td>0.2</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.9201</td>
                                                                                            <td>107.5607</td>
                                                                                            <td>32|77</td>
                                                                                            <td>155</td>
                                                                                            <td>19</td>
                                                                                            <td>3.6</td>
                                                                                            <td>3.55</td>
                                                                                            <td>0.76</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.922</td>
                                                                                            <td>107.5559</td>
                                                                                            <td>32|77</td>
                                                                                            <td>67</td>
                                                                                            <td>18</td>
                                                                                            <td>4.31</td>
                                                                                            <td>4.05</td>
                                                                                            <td>17.22</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-7.0282</td>
                                                                                            <td>107.5228</td>
                                                                                            <td>32|04</td>
                                                                                            <td>105</td>
                                                                                            <td>12</td>
                                                                                            <td>8.89</td>
                                                                                            <td>0.8</td>
                                                                                            <td>20.15</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <p class="mt-2">Baris berwarna hijau adalah kandidat utama. Baris berwarna merah dieliminasi karena berjarak kurang dari 0,5 km dari lokasi yang menjadi kandidat utama.</p>
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                                <li>
                                                                    Anchor hasil pengelompokkan lokasi dengan rata-rata jam kurang dari tujuh (AVG_hour < tujuh) akan diklasifikasikan sebagai calon lokasi rumah (home), sedangkan anchor lainnya dengan rata-rata jam lebih dari tujuh akan diklasifikasikan sebagai calon lokasi kantor (work). Pilih kandidat terkuat untuk lokasi rumah (home) dan kantor (work) dari setiap kelompok dengan urutan prioritas sebagai berikut : <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                <li>jumlah hari kejadian tertinggi (N_date)</li>
                                                                <li>lokasi dengan baris data terbanyak (N_event)</li>
                                                                <li>rata-rata jam tertinggi (AVG_hour), dan</li>
                                                                <li>standar deviasi jam terendah (SD_hour)</li>
                                                            </ol>
                                                        </li>
                                                        <li>Diperoleh lokasi prediksi lokasi rumah (home) dan kantor (work) yang ditunjukkan pada contoh tabel berikut.
                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                <p style="text-align: center; font-weight:bold">Tabel X. Prediksi Lokasi Usual Environment</p>
                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                        <tr>
                                                                            <th scope="col">msisdn</th>
                                                                            <th scope="col">year</th>
                                                                            <th scope="col">month</th>
                                                                            <th scope="col">latitude</th>
                                                                            <th scope="col">longitude</th>
                                                                            <th scope="col">idkab</th>
                                                                            <th scope="col">N_event</th>
                                                                            <th scope="col">N_date</th>
                                                                            <th scope="col">AVG_hour</th>
                                                                            <th scope="col">SD_hour</th>
                                                                            <th scope="col">label</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>msisdn00xxx</td>
                                                                            <td>2020</td>
                                                                            <td>1</td>
                                                                            <td>-6.25008</td>
                                                                            <td>106.9067</td>
                                                                            <td>31|72</td>
                                                                            <td>39</td>
                                                                            <td>22</td>
                                                                            <td>1.07</td>
                                                                            <td>1.96</td>
                                                                            <td>Home</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>msisdn00xxx</td>
                                                                            <td>2020</td>
                                                                            <td>1</td>
                                                                            <td>-7.0282</td>
                                                                            <td>107.5228</td>
                                                                            <td>32|04</td>
                                                                            <td>105</td>
                                                                            <td>12</td>
                                                                            <td>8.89</td>
                                                                            <td>0.8</td>
                                                                            <td>Work</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight:normal;">Kelompokkan subscriber dengan lokasi rumah tahunan (home yearly) yang sama. Lokasi home tahunan diperoleh dari modus lokasi home pada nomor tersebut selama rentang waktu bulan Desember 2021 sampai bulan November 2022. Pengelompokan dilakukan berdasarkan lokasi administratif setingkat provinsi, kemudian kabupaten/kota.</p>
                                                        <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; font-size:1rem">
                                                            <li>Jika didapati dua atau lebih modus home dengan lokasi yang berbeda, maka lokasi home ditentukan (secara berurutan) berdasarkan lokasi dengan jumlah hari kejadian tertinggi (N_date), lokasi dengan baris data terbanyak (N_event), lokasi dengan rata-rata jam tertinggi (AVG_hour), dan lokasi dengan standar deviasi jam terendah (SD_hour) diantara bulan-bulan yang menjadi modus lokasi home.</li>
                                                        </ol>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight:normal;">Hitung kecepatan antar dua record berurutan untuk setiap record, dan lakukan eliminasi pergerakan yang tidak wajar (kecepatan yang lebih dari 100 km/jam). Kecepatan yang tidak wajar disebabkan oleh adanya lag record.</p>
                                                        <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                            <p style="text-align: center; font-weight:bold">Tabel X Contoh Agregasi Penghitungan Anchor 2</>
                                                            <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto; font-weight:normal">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="row">msisdn</th>
                                                                        <th scope="row">datetime</th>
                                                                        <th scope="row">source</th>
                                                                        <th scope="row">latitude</th>
                                                                        <th scope="row">longitude</th>
                                                                        <th scope="row">Jarak haversine (km)</th>
                                                                        <th scope="row">waktu (jam)</th>
                                                                        <th scope="row">Kecepatan (km/jam)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 6:16</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.26222</td>
                                                                        <td>106.97889</td>
                                                                        <td> </td>
                                                                        <td> </td>
                                                                        <td> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 6:31</td>
                                                                        <td>chg</td>
                                                                        <td>-6.26222</td>
                                                                        <td>106.97889</td>
                                                                        <td>0</td>
                                                                        <td>0.239167</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 7:21</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.20028</td>
                                                                        <td>106.80917</td>
                                                                        <td>19.98482</td>
                                                                        <td>0.833889</td>
                                                                        <td>23.965</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 7:34</td>
                                                                        <td>chg</td>
                                                                        <td>-6.20028</td>
                                                                        <td>106.80917</td>
                                                                        <td>0</td>
                                                                        <td>0.219722</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 9:24</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16333</td>
                                                                        <td>106.84</td>
                                                                        <td>5.338248</td>
                                                                        <td>1.834167</td>
                                                                        <td>2.9104</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 10:24</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16444</td>
                                                                        <td>106.83583</td>
                                                                        <td>0.477239</td>
                                                                        <td>1.001389</td>
                                                                        <td>0.4765</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 11:24</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16444</td>
                                                                        <td>106.83583</td>
                                                                        <td>0</td>
                                                                        <td>1.000556</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 13:24</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.20239</td>
                                                                        <td>106.819</td>
                                                                        <td>4.611796</td>
                                                                        <td>2.000833</td>
                                                                        <td>2.3049</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 13:35</td>
                                                                        <td>chg</td>
                                                                        <td>-6.20239</td>
                                                                        <td>106.819</td>
                                                                        <td>0</td>
                                                                        <td>0.184722</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 14:15</td>
                                                                        <td>chg</td>
                                                                        <td>-6.26222</td>
                                                                        <td>106.97889</td>
                                                                        <td>18.88454</td>
                                                                        <td>0.661111</td>
                                                                        <td>28.564</td>
                                                                    </tr>
                                                                    <tr style="background-color: red;">
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 14:25</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16333</td>
                                                                        <td>106.84</td>
                                                                        <td>18.88473</td>
                                                                        <td>0.172778</td>
                                                                        <td>109.30</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 15:25</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16444</td>
                                                                        <td>106.83583</td>
                                                                        <td>0.477239</td>
                                                                        <td>1.000278</td>
                                                                        <td>0.4771</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 16:25</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25639</td>
                                                                        <td>106.94194</td>
                                                                        <td>15.56028</td>
                                                                        <td>1.000556</td>
                                                                        <td>15.551</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 16:36</td>
                                                                        <td>chg</td>
                                                                        <td>-6.25883</td>
                                                                        <td>106.94197</td>
                                                                        <td>0.271336</td>
                                                                        <td>0.187778</td>
                                                                        <td>1.4449</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 17:26</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.26889</td>
                                                                        <td>106.98028</td>
                                                                        <td>4.379708</td>
                                                                        <td>0.833611</td>
                                                                        <td>5.2538</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Raw data (bukan data yang telah di preprocessing menggunakan AMDA) digunakan untuk analisis pada algoritma ini. Hal ini dikarenakan pada algoritma ini akan dianalisis untuk setiap event yang terjadi, termasuk juga pola perjalanan pelanggan (bukan hanya event yang terjadi setelah dilakukan eliminasi unusual speed < 10 km/jam)</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Lakukan konversi atau pemetaan untuk setiap nomor ke dalam bentuk heksagon. Lokasi koordinat untuk masing-masing nomor dikonversi menggunakan sistem pengindeksan H3 menjadi heksagon dengan cell id yang unik. Resolusi yang disarankan adalah resolusi 8 hingga 12, namun untuk penelitian ini akan digunakan resolusi 1 hingga 12. Contoh berikut menggunakan resolusi 8.</p>
                                                        <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                            <p style="text-align: center; font-weight:bold">Tabel X. Contoh Konversi Koordinat Lokasi Menjadi Indeks H3 (Resolusi 8)</p>
                                                            <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto; font-weight:normal">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Koordinat Lokasi (Lat, Long)</th>
                                                                        <th scope="col">Indeks H3</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>(-6.25010, 106.90658)</td>
                                                                        <td>888c107b19fffff</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(-6.24925, 106.90133)</td>
                                                                        <td>888c107b1bfffff</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(-6.55956, 107.89661)</td>
                                                                        <td>888c16b927fffff</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(-6.64335, 108.05679)</td>
                                                                        <td>888c168e69fffff</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(-7.79510, 110.35873)</td>
                                                                        <td>888d8cb819fffff</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Eliminasi indeks H3 (hexagon) yang duplicate selama periode waktu analisis (Desember 2021 - November 2022). Sehingga hanya menyisakan index H3 yang unik untuk dibandingkan.</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <div style="font-size: 1rem; font-weight:normal">
                                                            <p style="font-weight: normal;">Ambil salah satu nomor (misal msisdn00xxx1), kemudian hitung jumlah hexagon milik msisdn00xxx1 yang beririsan dengan hexagon milik nomor lainnya yang masih berada dalam kelompok yang sama. Misalkan msisdn00xxx1 memiliki sebaran hexagon sebagai berikut:</p>
                                                            <p class="mt-3" style="font-weight: bold; text-align:center">Gambar X. Sebaran Heksagon msisdn00xxx1</p>
                                                            <p style="color: red;">GAMBAR</p>
                                                            <p class="mt-1">Sementara itu, nomor lainnya (misal msisdn00xxx2) memiliki sebaran hexagon sebagai berikut:</p>
                                                            <p class="mt-3" style="font-weight: bold; text-align:center">Gambar X. Sebaran Heksagon msisdn00xxx2</p>
                                                            <p style="color: red;">GAMBAR</p>
                                                            <p class="mt-1">Maka jika kita meng-overlay-kan layer hexagon msisdn00xxx1 dengan layer hexagon msisdn00xxx2, akan didapatkan sebaran hexagon sebagai berikut:</p>
                                                            <p class="mt-3" style="font-weight: bold; text-align:center">Gambar X. Gabungan Sebaran Heksagon msisdn00xxx1 dan msisdn00xxx2</c>
                                                            <p style="color: red;">GAMBAR</p>
                                                            <p>dengan begitu, jumlah hexagon milik msisdn00xxx1 dan msisdn00xxx2 yang beririsan adalah sebagai berikut.</p>
                                                            <p class="mt-3" style="font-weight: bold; text-align:center">Gambar X. Jumlah Heksagon yang Beririsan</p>
                                                            <p style="color: red;">GAMBAR</p>
                                                            <p class="mt-1">Berdasarkan Gambar X, dapat disimpulkan bahwa antara msisdn00xxx1 dengan msisdn00xxx2 memiliki jumlah hexagon yang beririsan sebanyak 19 hexagon.</p>
                                                        </div>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Lakukan langkah 7 secara berulang dengan menghitung jumlah hexagon nomor lain yang beririsan dengan hexagon nomor lainnya pada kelompok yang sama sampai mencakup semua kemungkinan kombinasi dua nomor pada kelompok tersebut.</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Untuk menentukan entitas double counting, akan ditentukan threshold (ambang batas) berupa jumlah irisan heksagon yang dapat mengklasifikasikan mana entitas double counting dan mana yang bukan entitas double counting dengan baik.</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Tentukan threshold dengan memanfaatkan gini impurity untuk menentukan split node terbaik dalam decision tree. Variabel yang digunakan dalam penghitungan ini adalah jumlah heksagon yang beririsan antar nomor dan kelas actual double counting.</p>
                                                        <p style="font-weight: normal;">Langkah-langkah penentuan threshold (ambang batas) menggunakan gini impurity secara singkat dapat dilakukan sebagai berikut.</p>
                                                        <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; font-size:1rem">
                                                            <li>
                                                                Urutkan nilai variabel Jumlah Irisan dari yang terkecil hingga yang terbesar.
                                                                <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                    <p class="mt-3" style="font-weight: bold; text-align:center">Tabel X. Pengurutan Berdasarkan Nilai Jumlah_Irisan dan Menghitung Rata-ratanya</p>
                                                                    <table class="table table-hover table-bordered table-responsive" id="k1_tabel1" style="width:100%;overflow-x:auto;">
                                                                        <thead style="color: #fff; font-weight:bold;">
                                                                            <tr>
                                                                                <th scope="col">MSISDN 1</th>
                                                                                <th scope="col">MSISDN 2</th>
                                                                                <th scope="col">Is_Family</th>
                                                                                <th scope="col">Jumlah_Irisan</th>
                                                                                <th scope="col">Rata-rata Jumlah_Irisan Berurutan</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>msisdn00xxx79</td>
                                                                                <td>msisdn00xxx101</td>
                                                                                <td>FALSE</td>
                                                                                <td>15</td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx42</td>
                                                                                <td>msisdn00xxx79</td>
                                                                                <td>FALSE</td>
                                                                                <td>31</td>
                                                                                <td>23</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx49</td>
                                                                                <td>msisdn00xxx91</td>
                                                                                <td>TRUE</td>
                                                                                <td>67</td>
                                                                                <td>49</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>mslsdn00xxx51</td>
                                                                                <td>msisdn00xxx100</td>
                                                                                <td>TRUE</td>
                                                                                <td>70</td>
                                                                                <td>69</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx18</td>
                                                                                <td>msisdn00xxx21</td>
                                                                                <td>TRUE</td>
                                                                                <td>84</td>
                                                                                <td>77</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx92</td>
                                                                                <td>msisdn00xxx109</td>
                                                                                <td>TRUE</td>
                                                                                <td>88</td>
                                                                                <td>86</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx91</td>
                                                                                <td>msisdn00xxx110</td>
                                                                                <td>TRUE</td>
                                                                                <td>93</td>
                                                                                <td>91</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx91</td>
                                                                                <td>msiSdn00xxx111</td>
                                                                                <td>TRUE</td>
                                                                                <td>94</td>
                                                                                <td>94</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>mslsdn00xxx35</td>
                                                                                <td>msisdn00xxx98</td>
                                                                                <td>TRUE</td>
                                                                                <td>104</td>
                                                                                <td>99</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx42</td>
                                                                                <td>msisdn00xxx101</td>
                                                                                <td>TRUE</td>
                                                                                <td>201</td>
                                                                                <td>153</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </li>
                                                            <li>Identifikasi titik-titik pemisahan potensial di antara nilai-nilai variabel Jumlah Irisan yang berurutan menggunakan rata-rata sebagai kandidat pemisahan.</li>
                                                            <li>Untuk setiap titik pemisahan potensial, pisahkan nilai variabel Jumlah Irisan menjadi dua kelompok berdasarkan apakah nilai variabel Jumlah Irisan lebih kecil atau lebih besar dari titik pemisahan tersebut.
                                                                <p style="font-weight: normal;">Misal threshold yang digunakan untuk melakukan split menjadi dua kelompok adalah rata-rata Jumlah_Irisan = 23, maka gini impurity dapat dihitung dengan cara berikut.</p>
                                                                <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                    <li>
                                                                        Kelas >= 23
                                                                        <ul class="list-styled">
                                                                            <li>Untuk kelas >= 23 dan TRUE, rasionya adalah 8/9 = 0.88</li>
                                                                            <li>Untuk kelas >= 23 dan FALSE, rasionya adalah 1/9 = 0.11</li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        Kelas < 23 <ul class="list-styled">
                                                                    <li>Untuk kelas < 23 dan TRUE, rasionya adalah 0/1=0</li>
                                                                    <li>Untuk kelas < 23 dan FALSE, rasionya adalah 1/1=1</li>
                                                                            </ul>
                                                                    </li>
                                                                </ol>
                                                            </li>
                                                            <li>Hitung gini impurity untuk setiap pemisahan potensial.
                                                                <p style="font-weight: normal;">Maka untuk kelas >= 23, impurity dapat dihitung dengan formula berikut:</p>
                                                                <ul class="list-styled">
                                                                    <li>Impurity = 1 - (probability of “TRUE”)<sup>2</sup> - (probability of “FALSE”)<sup>2</sup></li>
                                                                    <li>Impurity = 1 - (0.88)<sup>2</sup> - (0.11)<sup>2</sup> = 0.1975</li>
                                                                </ul>
                                                                <p style="font-weight: normal;">Maka untuk kelas < 23, impurity dapat dihitung dengan formula berikut:</p>
                                                                        <ul class="list-styled">
                                                                            <li>Impurity = 1 - (probability of “TRUE”)<sup>2</sup> - (probability of “FALSE”)<sup>2</sup></li>
                                                                            <li>Impurity = 1 - (1)<sup>2</sup> - (0)<sup>2</sup> = 0</li>
                                                                        </ul>
                                                            </li>
                                                            <li>Pilih pemisahan yang menghasilkan penurunan gini impurity yang paling signifikan sebagai pemisahan optimal untuk variabel Jumlah Irisan tersebut.Jadi gini impurity untuk threshold rata-rata Jumlah_Irisan = 23 adalah:
                                                                <p class="mt-2" style="text-align:center">Gini Impurity = ( 0.1975 x (9/10)) + (0 x (1/10)) = 0.17777778</p>
                                                                <p class="mt-3" style="font-weight: bold; text-align:center">Tabel X. Gini Impurity untuk Setiap Threshold Rata-rata Jumlah_Irisan</p>
                                                                <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                    <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                        <thead style="color: #fff; font-weight:bold;">
                                                                            <tr>
                                                                                <th scope="col">MSISDN 1</th>
                                                                                <th scope="col">MSISDN 2</th>
                                                                                <th scope="col">Is_Family</th>
                                                                                <th scope="col">Jumlah_Irisan</th>
                                                                                <th scope="col">Rata-rata Jumlah_Irisan Berurutan</th>
                                                                                <th scope="col">Gini Impurity</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>msisdn00xxx79</td>
                                                                                <td>msisdn00xxx101</td>
                                                                                <td>FALSE</td>
                                                                                <td>15</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx42</td>
                                                                                <td>msisdn00xxx79</td>
                                                                                <td>FALSE</td>
                                                                                <td>31</td>
                                                                                <td>23</td>
                                                                                <td>0.17777778</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx49</td>
                                                                                <td>msisdn00xxx91</td>
                                                                                <td>TRUE</td>
                                                                                <td>67</td>
                                                                                <td>49</td>
                                                                                <td>0</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>mslsdn00xxx51</td>
                                                                                <td>msisdn00xxx100</td>
                                                                                <td>TRUE</td>
                                                                                <td>70</td>
                                                                                <td>69</td>
                                                                                <td>0.13333333</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx18</td>
                                                                                <td>msisdn00xxx21</td>
                                                                                <td>TRUE</td>
                                                                                <td>84</td>
                                                                                <td>77</td>
                                                                                <td>0.2</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx92</td>
                                                                                <td>msisdn00xxx109</td>
                                                                                <td>TRUE</td>
                                                                                <td>88</td>
                                                                                <td>86</td>
                                                                                <td>0.24</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx91</td>
                                                                                <td>msisdn00xxx110</td>
                                                                                <td>TRUE</td>
                                                                                <td>93</td>
                                                                                <td>91</td>
                                                                                <td>0.26666667</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx91</td>
                                                                                <td>msiSdn00xxx111</td>
                                                                                <td>TRUE</td>
                                                                                <td>94</td>
                                                                                <td>94</td>
                                                                                <td>0.28571429</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>mslsdn00xxx35</td>
                                                                                <td>msisdn00xxx98</td>
                                                                                <td>TRUE</td>
                                                                                <td>104</td>
                                                                                <td>99</td>
                                                                                <td>0.3</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx42</td>
                                                                                <td>msisdn00xxx101</td>
                                                                                <td>TRUE</td>
                                                                                <td>201</td>
                                                                                <td>153</td>
                                                                                <td>0.31111111</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </li>
                                                            <li>Threshold terbaik adalah yang memiliki nilai gini impurity paling kecil.
                                                                <p style="font-weight: normal;">Pada Tabel x. dapat dilihat bahwa threshold 49 memiliki nilai gini impurity yang paling kecil. Berdasarkan hal tersebut, ditentukan threshold jumlah irisan heksagon antar nomor adalah >= 49 untuk kelas yang diprediksi yes (entitas family grouping) dan jumlah irisan heksagon antar nomor < 49 untuk kelas yang diprediksi no (bukan entitas family grouping).</p>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Prediksi entitas mana yang termasuk dalam double counting kemudian lakukan evaluasi dengan membuat confusion matrix dan menghitung ukuran evaluasi seperti precision, recall, akurasi dan f1-score untuk setiap resolusi, mulai dari resolusi 1 hingga 12. Dari keseluruhan resolusi H3 tersebut, akan dipilih satu resolusi H3 terbaik dengan membandingkan hasil ukuran evaluasi antar resolusi.</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Untuk mengevaluasi algoritma ini, pengukuran lebih diprioritaskan terhadap nilai f1-score dari kelas Yes, yaitu kelas yang berisikan subscriber-subscriber yang diprediksi sebagai entitas double counting</p>
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
                <div class="isi-tujuan shadow mt-5 mb-0">
                    <h4 class="card-title judul-card">Ketentuan</h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow rounded-4">
                                    <div class="pb-2 card-body">
                                        <div class="row">
                                            <div class="mb-0 col-lg-12 grid-margin">
                                                <div class="pr-3 pl-3">
                                                    <ul class="list-styled">
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Menerapkan konsep penghitungan jumlah hexagon yang beririsan (sama persis dengan algoritma double counting).</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Bedanya algoritma FG diterapkan pada hari weekend (Sabtu-Minggu) atau bisa juga pada hari-hari libur lainnya seperti liburan semester, liburan natal dan tahun baru (nataru), libur lebaran dll.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Hal ini didasarkan pada karakteristik anggota rumah tangga yang lebih sering menghabiskan waktu dirumah atau berpergian ke tempat wisata secara bersama-sama ketika weekend atau liburan.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Periode analisis dalam algoritma FG dengan H3 adalah selama setahun (Des 2021 - Nov 2022)</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Pengelompokkan tahap 1 berdasarkan lokasi home yang sama menggunakan metode AMDA tetap dilakukan pada hari-hari weekdays (hanya pada step ini menggunakan weekdays, selebihnya menggunakan weekend).</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Dalam algoritma FG juga akan ditentukan threshold yang diperoleh dari visualisasi decision tree yang dibangun dari variabel jumlah irisan dan variabel data kelas actual Family Grouping.</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="isi-tujuan shadow mt-5 mb-0">
                    <h4 class="card-title judul-card">Evaluasi</h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 grid-margin stretch-card h-100">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div class="chartBox">
                                            <canvas class="mt1" id="riset1_hasil5"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card h-100">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div class="chartBox">
                                            <canvas class="mt1" id="riset1_hasil5"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card h-100">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div class="chartBox">
                                            <canvas class="mt1" id="riset1_hasil5"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card h-100">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div class="chartBox">
                                            <canvas class="mt1" id="riset1_hasil5"></canvas>
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
                    <h4 class="card-title judul-card text-center">Algortima Double Counting H3 Dengan Pembentukan Staypoint</h4>
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
                                                    <ol class="list-styled" style="text-align:justify;">
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Penentuan lokasi usual environment menggunakan AMDA dengan beberapa tahap berikut.</p>
                                                            <ol class="list-styled" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; line-height:1rem; font-size:1rem">
                                                                <li>Identifikasi anomali pada setiap perpindahan lokasi yang terjadi dengan cara sebagai berikut.
                                                                    <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                        <li>Pembulatan lokasi dengan membulatkan koordinat latitude dan longitude dengan ketelitian lima decimal.
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X. Contoh Record MPD Sebelum Dilakukan Pembulatan</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold; background-color:yellow;">
                                                                                        <tr style="background-color:yellow;">
                                                                                            <th scope="col">msisdn</th>
                                                                                            <th scope="col">datetime</th>
                                                                                            <th scope="col">source</th>
                                                                                            <th scope="col">latitude</th>
                                                                                            <th scope="col">longitude</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody style="font-weight: normal;">
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 12:36:41</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.795097</td>
                                                                                            <td>110.358727</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 13:31:37</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.804648</td>
                                                                                            <td>110.357843</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 14:25:37</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.804648</td>
                                                                                            <td>110.357843</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 14:42:24</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.76936</td>
                                                                                            <td>110.364236</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 16:30:51</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.783124</td>
                                                                                            <td>110.398203</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 17:24:52</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.783124</td>
                                                                                            <td>110.398203</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:18:53</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.783124</td>
                                                                                            <td>110.398203</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:20:18</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.782672</td>
                                                                                            <td>110.400982</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:20:47</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.782672</td>
                                                                                            <td>110.400982</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:24:40</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.782672</td>
                                                                                            <td>110.400982</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X Contoh Record MPD Setelah Dilakukan Pembulatan</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                                        <tr>
                                                                                            <th scope="col">msisdn</th>
                                                                                            <th scope="col">datetime</th>
                                                                                            <th scope="col">source</th>
                                                                                            <th scope="col">latitude</th>
                                                                                            <th scope="col">longitude</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody style="font-weight: normal;">
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 12:36:41</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.79510</td>
                                                                                            <td>110.35873</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 13:31:37</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.80465</td>
                                                                                            <td>110.35784</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 14:25:37</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.80465</td>
                                                                                            <td>110.35784</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 14:42:24</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.76940</td>
                                                                                            <td>110.36424</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 16:30:51</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.39820</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 17:24:52</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.39820</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:18:53</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.39820</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:20:18</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:20:47</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:24:40</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </li>
                                                                        <li class="mt-3">Menghilangkan fast movers dengan menghapus record dengan kecepatan melebihi ambang batas (diatas 10 km/jam). Untuk menghitung kecepatan, sebelumnya dihitung jarak dari urutan setiap lokasi MSISDN menggunakan formula Haversine terlebih dahulu. Kemudian, dihitung waktu yang dibutuhkan untuk berpindah dari satu koordinat ke koordinat lainnya secara berurutan. Terakhir, dihitung kecepatan dengan membagi jarak dengan waktu tempuh.
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X. Contoh Record MPD dengan Penghitungan Kecepatan</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                                        <tr>
                                                                                            <th scope="col">msisdn</th>
                                                                                            <th scope="col">datetime</th>
                                                                                            <th scope="col">source</th>
                                                                                            <th scope="col">latitude</th>
                                                                                            <th scope="col">longitude</th>
                                                                                            <th scope="col">haversine distance</th>
                                                                                            <th scope="col">Time (jam)</th>
                                                                                            <th scope="col">Speed (km/jam)</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody style="font-weight: normal;">
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 12:36</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.79510</td>
                                                                                            <td>110.35873</td>
                                                                                            <td> </td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 13:31</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.80465</td>
                                                                                            <td>110.35784</td>
                                                                                            <td>0.382454</td>
                                                                                            <td>0.916667</td>
                                                                                            <td>0.417223</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 14:25</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.80465</td>
                                                                                            <td>110.35784</td>
                                                                                            <td>0</td>
                                                                                            <td>0.9</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 14:42</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.76940</td>
                                                                                            <td>110.36424</td>
                                                                                            <td>1.538283</td>
                                                                                            <td>0.283333</td>
                                                                                            <td>5.429234</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 16:30</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.3982</td>
                                                                                            <td>3.813374</td>
                                                                                            <td>1.8</td>
                                                                                            <td>2.118541</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 17:24</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.3982</td>
                                                                                            <td>0</td>
                                                                                            <td>0.9</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 18:18</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.3982</td>
                                                                                            <td>0</td>
                                                                                            <td>0.9</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 18:20</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                            <td>0.309614</td>
                                                                                            <td>0.033333</td>
                                                                                            <td>9.28842</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 18:20</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                            <td>0</td>
                                                                                            <td>0</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 18:24</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                            <td>0</td>
                                                                                            <td>0.066667</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                                <li>
                                                                    Deteksi lokasi rumah (home) menggunakan AMDA dengan membentuk anchor point melalui tahapan berikut.
                                                                    <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                        <li>Untuk setiap nomor/subscriber, filter event pertama yang terekam setiap harinya pada hari kerja (weekdays)</li>
                                                                        <li>Ubah waktu kejadian yang masih menggunakan format 24 jam menjadi format 12 jam dengan mengikuti algoritma sebagai berikut.
                                                                            <ol class="list-styled mt-2" style="text-align:justify; font-weight:normal; font-size:1rem">
                                                                                <li>Melakukan pengecekan untuk setiap timestamp apakah jam yang tertera lebih besar dari 12 atau tidak</li>
                                                                                <li>Jika diperoleh hasilnya “Ya” (Jam > 12), maka lakukan transformasi pada timestamp dengan menggunakan formula: jam -- 12</li>
                                                                                <li>Jika diperoleh hasilnya “Tidak”, maka tidak akan dilakukan transformasi pada timestamp</li>
                                                                                <li>Selanjutnya, untuk setiap subscriber, hitung frekuensi berada di LAU tertentu (dalam hal ini LAU2 Regency)</li>
                                                                            </ol>
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Format 24 jam (Original):</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>0</td>
                                                                                            <td>1</td>
                                                                                            <td>2</td>
                                                                                            <td>3</td>
                                                                                            <td>4</td>
                                                                                            <td>5</td>
                                                                                            <td>6</td>
                                                                                            <td>7</td>
                                                                                            <td>8</td>
                                                                                            <td>9</td>
                                                                                            <td>10</td>
                                                                                            <td>11</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>23</td>
                                                                                            <td>22</td>
                                                                                            <td>21</td>
                                                                                            <td>20</td>
                                                                                            <td>19</td>
                                                                                            <td>18</td>
                                                                                            <td>17</td>
                                                                                            <td>16</td>
                                                                                            <td>15</td>
                                                                                            <td>14</td>
                                                                                            <td>13</td>
                                                                                            <td>12</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Format 24 jam (Converted):</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>0</td>
                                                                                            <td>1</td>
                                                                                            <td>2</td>
                                                                                            <td>3</td>
                                                                                            <td>4</td>
                                                                                            <td>5</td>
                                                                                            <td>6</td>
                                                                                            <td>7</td>
                                                                                            <td>8</td>
                                                                                            <td>9</td>
                                                                                            <td>10</td>
                                                                                            <td>11</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </li>
                                                                        <li>Hitung frekuensi kemunculan awal event per hari per cell-id (anchor)</li>
                                                                        <li>Hitung statistik rata-rata dan standar deviasi untuk jam terjadinya event, jumlah hari, dan jumlah kemunculan event. Perhitungan ini dilakukan untuk setiap anchor.</li>
                                                                    </ol>
                                                                </li>
                                                                <li>Menentukan kandidat usual environment dengan :
                                                                    <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                        <li>Hitung jarak antara anchor dan kandidat utama dengan menggunakan haversine distance.</li>
                                                                        <li>Filter anchor dengan jumlah hari yang muncul lebih dari atau sama dengan 5. Eliminasi anchor yang berdekatan dengan kandidat utama (di bawah 500 m).</li>
                                                                        <li>Pisahkan kejadian (event) yang ada hanya pada hari kerja dan ubah variabel waktu menjadi format 12 jam.</li>
                                                                        <li>Hitung frekuensi lokasi awal harian dari setiap titik lokasi (anchor), serta statistik rata-rata dan standar deviasi setiap jam kejadian, dan bentuk kandidat utamanya.</li>
                                                                        <li>Hitung jarak antara lokasi yang dipilih dengan lokasi kandidat utama, kemudian eliminasi lokasi yang berdekatan (berada di bawah 500 m) diikuti dengan mengurutkan lama kejadian yang lebih atau sama dengan 5 hari.</li>
                                                                    </ol>
                                                                </li>
                                                                <li>Pembentukan anchor point kedua dengan cara berikut.
                                                                    <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                        <li>Hitung jumlah record (N_event), jumlah hari unik (N_date), serta rata-rata jam kejadian (AVG_hour) diikuti dengan standar deviasi jam kejadian (SD_hour) untuk setiap nomor/subscriber per bulannya.
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X Contoh Agregasi Penghitungan Anchor 1</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                                        <th scope="col">msisdn</th>
                                                                                        <th scope="col">year</th>
                                                                                        <th scope="col">month</th>
                                                                                        <th scope="col">latitude</th>
                                                                                        <th scope="col">longitude</th>
                                                                                        <th scope="col">idkab</th>
                                                                                        <th scope="col">N_event</th>
                                                                                        <th scope="col">N_date</th>
                                                                                        <th scope="col">AVG_hour</th>
                                                                                        <th scope="col">SD_hour</th>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.9201</td>
                                                                                            <td>107.5607</td>
                                                                                            <td>32|77</td>
                                                                                            <td>113</td>
                                                                                            <td>23</td>
                                                                                            <td>1.05</td>
                                                                                            <td>2.07</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.922</td>
                                                                                            <td>107.5559</td>
                                                                                            <td>32|77</td>
                                                                                            <td>46</td>
                                                                                            <td>22</td>
                                                                                            <td>3.83</td>
                                                                                            <td>3.03</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.9201</td>
                                                                                            <td>107.5607</td>
                                                                                            <td>32|77</td>
                                                                                            <td>155</td>
                                                                                            <td>19</td>
                                                                                            <td>3.6</td>
                                                                                            <td>3.55</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.922</td>
                                                                                            <td>107.5559</td>
                                                                                            <td>32|77</td>
                                                                                            <td>67</td>
                                                                                            <td>18</td>
                                                                                            <td>4.31</td>
                                                                                            <td>4.05</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-7.0282</td>
                                                                                            <td>107.5228</td>
                                                                                            <td>32|04</td>
                                                                                            <td>105</td>
                                                                                            <td>12</td>
                                                                                            <td>8.89</td>
                                                                                            <td>0.8</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </li>
                                                                        <li>Hitung jumlah kemunculan suatu lokasi, kandidat utama setidaknya muncul sebanyak lima hari setiap bulan.</li>
                                                                        <li>
                                                                            Potensi kandidat utama dilihat dengan mengelompokkan setiap lokasi yang ada. Mulanya, jarak antar lokasi dihitung dengan jarak Haversine, kemudian dikelompokkan lokasi-lokasi dengan radius jarak 0,5 km. Lokasi yang dianggap dekat dengan kandidat utama pada akhirnya dihilangkan dari calon lokasi usual environment.
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X Contoh Agregasi Penghitungan Anchor 2</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                                        <tr>
                                                                                            <th scope="col">msisdn</th>
                                                                                            <th scope="col">year</th>
                                                                                            <th scope="col">month</th>
                                                                                            <th scope="col">latitude</th>
                                                                                            <th scope="col">longitude</th>
                                                                                            <th scope="col">idkab</th>
                                                                                            <th scope="col">N_event</th>
                                                                                            <th scope="col">N_date</th>
                                                                                            <th scope="col">AVG_hour</th>
                                                                                            <th scope="col">SD_hour</th>
                                                                                            <th scope="col">distance</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr style="background-color: greenyellow;">
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.9201</td>
                                                                                            <td>107.5607</td>
                                                                                            <td>32|77</td>
                                                                                            <td>113</td>
                                                                                            <td>23</td>
                                                                                            <td>1.05</td>
                                                                                            <td>2.07</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr style="background-color: red;">
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.922</td>
                                                                                            <td>107.5559</td>
                                                                                            <td>32|77</td>
                                                                                            <td>46</td>
                                                                                            <td>22</td>
                                                                                            <td>3.83</td>
                                                                                            <td>3.03</td>
                                                                                            <td>0.2</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.9201</td>
                                                                                            <td>107.5607</td>
                                                                                            <td>32|77</td>
                                                                                            <td>155</td>
                                                                                            <td>19</td>
                                                                                            <td>3.6</td>
                                                                                            <td>3.55</td>
                                                                                            <td>0.76</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.922</td>
                                                                                            <td>107.5559</td>
                                                                                            <td>32|77</td>
                                                                                            <td>67</td>
                                                                                            <td>18</td>
                                                                                            <td>4.31</td>
                                                                                            <td>4.05</td>
                                                                                            <td>17.22</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-7.0282</td>
                                                                                            <td>107.5228</td>
                                                                                            <td>32|04</td>
                                                                                            <td>105</td>
                                                                                            <td>12</td>
                                                                                            <td>8.89</td>
                                                                                            <td>0.8</td>
                                                                                            <td>20.15</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <p class="mt-2">Baris berwarna hijau adalah kandidat utama. Baris berwarna merah dieliminasi karena berjarak kurang dari 0,5 km dari lokasi yang menjadi kandidat utama.</p>
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                                <li>Anchor hasil pengelompokkan lokasi dengan rata-rata jam kurang dari tujuh (AVG_hour < tujuh) akan diklasifikasikan sebagai calon lokasi rumah (home), sedangkan anchor lainnya dengan rata-rata jam lebih dari tujuh akan diklasifikasikan sebagai calon lokasi kantor (work). Pilih kandidat terkuat untuk lokasi rumah (home) dan kantor (work) dari setiap kelompok dengan urutan prioritas sebagai berikut : <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                <li>jumlah hari kejadian tertinggi (N_date)</li>
                                                                <li>lokasi dengan baris data terbanyak (N_event)</li>
                                                                <li>rata-rata jam tertinggi (AVG_hour), dan</li>
                                                                <li>standar deviasi jam terendah (SD_hour)</li>

                                                            </ol>
                                                        </li>
                                                        <li>Diperoleh lokasi prediksi lokasi rumah (home) dan kantor (work) yang ditunjukkan pada contoh tabel berikut.
                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                <p style="text-align: center; font-weight:bold">Tabel X. Prediksi Lokasi Usual Environment</p>
                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                        <tr>
                                                                            <th scope="col">msisdn</th>
                                                                            <th scope="col">year</th>
                                                                            <th scope="col">month</th>
                                                                            <th scope="col">latitude</th>
                                                                            <th scope="col">longitude</th>
                                                                            <th scope="col">idkab</th>
                                                                            <th scope="col">N_event</th>
                                                                            <th scope="col">N_date</th>
                                                                            <th scope="col">AVG_hour</th>
                                                                            <th scope="col">SD_hour</th>
                                                                            <th scope="col">label</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>msisdn00xxx</td>
                                                                            <td>2020</td>
                                                                            <td>1</td>
                                                                            <td>-6.25008</td>
                                                                            <td>106.9067</td>
                                                                            <td>31|72</td>
                                                                            <td>39</td>
                                                                            <td>22</td>
                                                                            <td>1.07</td>
                                                                            <td>1.96</td>
                                                                            <td>Home</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>msisdn00xxx</td>
                                                                            <td>2020</td>
                                                                            <td>1</td>
                                                                            <td>-7.0282</td>
                                                                            <td>107.5228</td>
                                                                            <td>32|04</td>
                                                                            <td>105</td>
                                                                            <td>12</td>
                                                                            <td>8.89</td>
                                                                            <td>0.8</td>
                                                                            <td>Work</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight:normal;">Kelompokkan subscriber dengan lokasi rumah tahunan (home yearly) yang sama. Lokasi home tahunan diperoleh dari modus lokasi home pada nomor tersebut selama rentang waktu bulan Desember 2021 sampai bulan November 2022. Pengelompokan dilakukan berdasarkan lokasi administratif setingkat provinsi, kemudian kabupaten/kota.</p>
                                                        <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; font-size:1rem">
                                                            <li>Jika didapati dua atau lebih modus home dengan lokasi yang berbeda, maka lokasi home ditentukan (secara berurutan) berdasarkan lokasi dengan jumlah hari kejadian tertinggi (N_date), lokasi dengan baris data terbanyak (N_event), lokasi dengan rata-rata jam tertinggi (AVG_hour), dan lokasi dengan standar deviasi jam terendah (SD_hour) diantara bulan-bulan yang menjadi modus lokasi home.</li>
                                                        </ol>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight:normal;">Hitung kecepatan antar dua record berurutan untuk setiap record, dan lakukan eliminasi pergerakan yang tidak wajar (kecepatan yang lebih dari 100 km/jam). Kecepatan yang tidak wajar disebabkan oleh adanya lag record.</p>
                                                        <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                            <p style="text-align: center; font-weight:bold">Tabel X Contoh Agregasi Penghitungan Anchor 2</c>
                                                            <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto; font-weight:normal">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="row">msisdn</th>
                                                                        <th scope="row">datetime</th>
                                                                        <th scope="row">source</th>
                                                                        <th scope="row">latitude</th>
                                                                        <th scope="row">longitude</th>
                                                                        <th scope="row">Jarak haversine (km)</th>
                                                                        <th scope="row">waktu (jam)</th>
                                                                        <th scope="row">Kecepatan (km/jam)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 6:16</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.26222</td>
                                                                        <td>106.97889</td>
                                                                        <td> </td>
                                                                        <td> </td>
                                                                        <td> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 6:31</td>
                                                                        <td>chg</td>
                                                                        <td>-6.26222</td>
                                                                        <td>106.97889</td>
                                                                        <td>0</td>
                                                                        <td>0.239167</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 7:21</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.20028</td>
                                                                        <td>106.80917</td>
                                                                        <td>19.98482</td>
                                                                        <td>0.833889</td>
                                                                        <td>23.965</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 7:34</td>
                                                                        <td>chg</td>
                                                                        <td>-6.20028</td>
                                                                        <td>106.80917</td>
                                                                        <td>0</td>
                                                                        <td>0.219722</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 9:24</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16333</td>
                                                                        <td>106.84</td>
                                                                        <td>5.338248</td>
                                                                        <td>1.834167</td>
                                                                        <td>2.9104</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 10:24</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16444</td>
                                                                        <td>106.83583</td>
                                                                        <td>0.477239</td>
                                                                        <td>1.001389</td>
                                                                        <td>0.4765</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 11:24</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16444</td>
                                                                        <td>106.83583</td>
                                                                        <td>0</td>
                                                                        <td>1.000556</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 13:24</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.20239</td>
                                                                        <td>106.819</td>
                                                                        <td>4.611796</td>
                                                                        <td>2.000833</td>
                                                                        <td>2.3049</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 13:35</td>
                                                                        <td>chg</td>
                                                                        <td>-6.20239</td>
                                                                        <td>106.819</td>
                                                                        <td>0</td>
                                                                        <td>0.184722</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 14:15</td>
                                                                        <td>chg</td>
                                                                        <td>-6.26222</td>
                                                                        <td>106.97889</td>
                                                                        <td>18.88454</td>
                                                                        <td>0.661111</td>
                                                                        <td>28.564</td>
                                                                    </tr>
                                                                    <tr style="background-color: red;">
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 14:25</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16333</td>
                                                                        <td>106.84</td>
                                                                        <td>18.88473</td>
                                                                        <td>0.172778</td>
                                                                        <td>109.30</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 15:25</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16444</td>
                                                                        <td>106.83583</td>
                                                                        <td>0.477239</td>
                                                                        <td>1.000278</td>
                                                                        <td>0.4771</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 16:25</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25639</td>
                                                                        <td>106.94194</td>
                                                                        <td>15.56028</td>
                                                                        <td>1.000556</td>
                                                                        <td>15.551</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 16:36</td>
                                                                        <td>chg</td>
                                                                        <td>-6.25883</td>
                                                                        <td>106.94197</td>
                                                                        <td>0.271336</td>
                                                                        <td>0.187778</td>
                                                                        <td>1.4449</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 17:26</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.26889</td>
                                                                        <td>106.98028</td>
                                                                        <td>4.379708</td>
                                                                        <td>0.833611</td>
                                                                        <td>5.2538</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight:normal;">Raw data (bukan data yang telah di preprocessing menggunakan AMDA) digunakan untuk analisis pada algoritma ini. Hal ini dikarenakan pada algoritma ini akan dianalisis untuk setiap event yang terjadi, termasuk juga pola perjalanan pelanggan (bukan hanya event yang terjadi setelah dilakukan eliminasi unusual speed < 10 km/jam)</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight:normal;">Bentuk staypoint dengan cara berikut.</p>
                                                        <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; font-size:1rem">
                                                            <li>Bagi hari menjadi dua interval, yakni waktu work pukul 7 pagi hingga 7 malam, dan waktu home dari pukul 7 malam hingga 7 pagi.</li>
                                                            <li>Di setiap interval, hitung jumlah kemunculan koordinat lokasi yang berbeda di setiap harinya untuk seluruh nomor. Koordinat-koordinat tersebut disebut sebagai anchor.</li>
                                                            <li>Anchor dengan frekuensi terbanyak dalam satu interval disebut sebagai kandidat utama dan secara otomatis akan menjadi staypoint.</li>
                                                            <li>Hitung jarak anchor lain dengan kandidat utama menggunakan jarak Haversine dan eliminasi anchor yang memiliki jarak kurang dari 500m dari kandidat utama.</li>
                                                            <li>Anchor yang tidak tereliminasi dibiarkan dan dijadikan staypoint baru.</li>
                                                        </ol>
                                                        <p style="font-weight:normal;">Sebagai contoh, kita akan menentukan staypoint berdasarkan data pada Tabel X.. Pertama-tama, data perlu dibagi menjadi dua interval berdasarkan waktu pencatatan (datetime). Interval 1 (07.00-18.59) dan Interval 2 (19.00-06.59). Pada interval 1, terdapat dua titik koordinat (anchor), yaitu koordinat 1 (-6.24925, 106.90133) yang direpresentasikan dengan baris warna kuning dan koordinat 2 (-6.2501, 106.90658) yang direpresentasikan dengan baris warna aqua. Koordinat 1 muncul sebanyak tiga kali dan koordinat 2 muncul sebanyak enam kali. Dengan begitu, koordinat 2 akan dijadikan sebagai kandidat utama.</p>
                                                        <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                            <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto; font-weight:normal">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">datetime</th>
                                                                        <th scope="col">msisdn</th>
                                                                        <th scope="col">source</th>
                                                                        <th scope="col">latitude</th>
                                                                        <th scope="col">longitude</th>
                                                                        <th scope="col">provinsi</th>
                                                                        <th scope="col">kabupaten</th>
                                                                        <th scope="col">interval</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody style="text-align: center;">
                                                                    <tr>
                                                                        <td>11/02/2021 01:09</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.24925</td>
                                                                        <td>106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td rowspan="4"><br>INTERVAL 2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 01:11</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.24925</td>
                                                                        <td>106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 03:10</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25010</td>
                                                                        <td>106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 05:13</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.24925</td>
                                                                        <td>106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 07:14</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td rowspan="9"><br><br>INTERVAL 1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 09:32</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 10:32</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: yellow;">-6.24925</td>
                                                                        <td style="background-color: yellow;">106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 11:10</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 12:47</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 13:12</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 15:10</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: yellow;">-6.24925</td>
                                                                        <td style="background-color: yellow;">106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 17:01</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: yellow;">-6.24925</td>
                                                                        <td style="background-color: yellow;">106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 17:13</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 19:12</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25010</td>
                                                                        <td>106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td rowspan="4"><br>INTERVAL 2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 20:42</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25010</td>
                                                                        <td>106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 21:03</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25010</td>
                                                                        <td>106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 23:07</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25010</td>
                                                                        <td>106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <p style="font-weight:normal;">Jarak haversine antara koordinat 1 (-6.24925, 106.90133) dan koordinat 2 (-6.2501, 106.90658) adalah sebesar 0.59 km. Oleh karena jarak koordinat 2 (sebagai anchor lainnya) terhadap koordinat 1 (sebagai kandidat utama) lebih dari 0,5 km (500 m), maka koordinat 2 tidak akan dieliminasi dan akan dijadikan sebagai staypoint. Sehingga pada interval 1, terdapat 2 staypoint yaitu koordinat 1 (-6.24925, 106.90133) dan koordinat 2 (-6.2501, 106.90658).</p>
                                                    </li>
                                                    <li lass="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Lakukan konversi atau pemetaan untuk setiap staypoint ke dalam bentuk heksagon. Lokasi koordinat untuk masing-masing nomor dikonversi menggunakan sistem pengindeksan H3 menjadi heksagon dengan cell id yang unik. Resolusi yang disarankan adalah resolusi 8 hingga 12, namun untuk penelitian ini akan digunakan resolusi 1 hingga 12. Contoh berikut menggunakan resolusi 8.</p>
                                                        <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                            <p style="text-align: center; font-weight:bold">Tabel X. Contoh Konversi Koordinat Lokasi Menjadi Indeks H3 (Resolusi 8)</p>
                                                            <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto; font-weight:normal">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">datetime</th>
                                                                        <th scope="col">Interval</th>
                                                                        <th scope="col">Koordinat Lokasi</th>
                                                                        <th scope="col">Indeks H3</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>12/10/2021 1:16</td>
                                                                        <td rowspan="4">Interval 1</td>
                                                                        <td>(-6.25010, 106.90658)</td>
                                                                        <td>888c107b19fffff</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>12/10/2021 3:21</td>
                                                                        <td>(-6.24925, 106.90133)</td>
                                                                        <td>888c107b1bfffff</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>12/10/2021 4:24</td>
                                                                        <td>(-6.24925, 106.90133)</td>
                                                                        <td>888c107b1bfffff</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>12/10/2021 6:24</td>
                                                                        <td>(-6.55956, 107.89661)</td>
                                                                        <td>888c16b927fffff</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>12/10/2021 8:24</td>
                                                                        <td rowspan="6">Interval 2</td>
                                                                        <td>(-6.55956, 107.89661)</td>
                                                                        <td>888c16b927fffff</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>12/10/2021 10:24</td>
                                                                        <td>(-6.55956, 107.89661)</td>
                                                                        <td>888c16b927fffff</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>12/10/2021 12:15</td>
                                                                        <td>(-6.64335, 108.05679)</td>
                                                                        <td>888c168e69fffff</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>12/10/2021 13:25</td>
                                                                        <td>(-7.79510, 110.35873)</td>
                                                                        <td>888d8cb819fffff</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>12/10/2021 16:25</td>
                                                                        <td>(-7.79510, 110.35873)</td>
                                                                        <td>888d8cb819fffff</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>12/10/2021 17:26</td>
                                                                        <td>(-7.79510, 110.35873)</td>
                                                                        <td>888d8cb819fffff</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </li>
                                                    <li lass="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Eliminasi indeks H3 (hexagon) yang duplicate selama periode waktu analisis (Desember 2021 - November 2022) pada setiap interval. Sehingga hanya menyisakan index H3 yang unik pada setiap interval untuk dibandingkan.</p>
                                                    </li>
                                                    <li lass="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <div style="font-size: 1rem; font-weight:normal">
                                                            <p style="font-weight: normal;">Ambil salah satu nomor (misal msisdn00xxx1), kemudian hitung jumlah hexagon milik msisdn00xxx1 yang beririsan dengan hexagon milik nomor lainnya yang masih berada dalam kelompok yang sama. Misalkan msisdn00xxx1 memiliki sebaran hexagon sebagai berikut:</p>
                                                            <p class="mt-3" style="font-weight: bold; text-align:center">Gambar X. Sebaran Heksagon msisdn00xxx1</p>
                                                            <p style="color: red;">GAMBAR</p>
                                                            <p class="mt-1">Sementara itu, nomor lainnya (misal msisdn00xxx2) memiliki sebaran hexagon sebagai berikut:</p>
                                                            <p class="mt-3" style="font-weight: bold; text-align:center">Gambar X. Sebaran Heksagon msisdn00xxx2</p>
                                                            <p style="color: red;">GAMBAR</p>
                                                            <p class="mt-1">Maka jika kita meng-overlay-kan layer hexagon msisdn00xxx1 dengan layer hexagon msisdn00xxx2, akan didapatkan sebaran hexagon sebagai berikut:</p>
                                                            <p class="mt-3" style="font-weight: bold; text-align:center">Gambar X. Gabungan Sebaran Heksagon msisdn00xxx1 dan msisdn00xxx2</c>
                                                            <p style="color: red;">GAMBAR</p>
                                                            <p>dengan begitu, jumlah hexagon milik msisdn00xxx1 dan msisdn00xxx2 yang beririsan adalah sebagai berikut.</p>
                                                            <p class="mt-3" style="font-weight: bold; text-align:center">Gambar X. Jumlah Heksagon yang Beririsan</p>
                                                            <p style="color: red;">GAMBAR</p>
                                                            <p class="mt-1">Berdasarkan Gambar X, dapat disimpulkan bahwa antara msisdn00xxx1 dengan msisdn00xxx2 memiliki jumlah hexagon yang beririsan sebanyak 19 hexagon.</p>
                                                        </div>
                                                    </li>
                                                    <li lass="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Lakukan langkah 7 secara berulang dengan menghitung jumlah hexagon nomor lain yang beririsan dengan hexagon nomor lainnya pada kelompok yang sama sampai mencakup semua kemungkinan kombinasi dua nomor pada kelompok tersebut.</p>
                                                    </li>
                                                    <li lass="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Untuk menentukan entitas double counting, akan ditentukan threshold (ambang batas) berupa jumlah irisan heksagon yang dapat mengklasifikasikan mana entitas double counting dan mana yang bukan entitas double counting dengan baik.</p>
                                                    </li>
                                                    <li lass="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Tentukan threshold dengan memanfaatkan gini impurity untuk menentukan split node terbaik dalam decision tree. Variabel yang digunakan dalam penghitungan ini adalah jumlah heksagon yang beririsan antar nomor dan kelas actual double counting.</p>
                                                        <p style="font-weight: normal;">Langkah-langkah penentuan threshold (ambang batas) menggunakan gini impurity secara singkat dapat dilakukan sebagai berikut.</p>
                                                        <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; font-size:1rem">
                                                            <li>
                                                                Urutkan nilai variabel Jumlah Irisan dari yang terkecil hingga yang terbesar.
                                                                <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                    <p class="mt-3" style="font-weight: bold; text-align:center">Tabel X. Pengurutan Berdasarkan Nilai Jumlah_Irisan dan Menghitung Rata-ratanya</p>
                                                                    <table class="table table-hover table-bordered table-responsive" id="k1_tabel1" style="width:100%;overflow-x:auto;">
                                                                        <thead style="color: #fff; font-weight:bold;">
                                                                            <tr>
                                                                                <th scope="col">MSISDN 1</th>
                                                                                <th scope="col">MSISDN 2</th>
                                                                                <th scope="col">Is_Family</th>
                                                                                <th scope="col">Jumlah_Irisan</th>
                                                                                <th scope="col">Rata-rata Jumlah_Irisan Berurutan</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>msisdn00xxx79</td>
                                                                                <td>msisdn00xxx101</td>
                                                                                <td>FALSE</td>
                                                                                <td>15</td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx42</td>
                                                                                <td>msisdn00xxx79</td>
                                                                                <td>FALSE</td>
                                                                                <td>31</td>
                                                                                <td>23</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx49</td>
                                                                                <td>msisdn00xxx91</td>
                                                                                <td>TRUE</td>
                                                                                <td>67</td>
                                                                                <td>49</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>mslsdn00xxx51</td>
                                                                                <td>msisdn00xxx100</td>
                                                                                <td>TRUE</td>
                                                                                <td>70</td>
                                                                                <td>69</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx18</td>
                                                                                <td>msisdn00xxx21</td>
                                                                                <td>TRUE</td>
                                                                                <td>84</td>
                                                                                <td>77</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx92</td>
                                                                                <td>msisdn00xxx109</td>
                                                                                <td>TRUE</td>
                                                                                <td>88</td>
                                                                                <td>86</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx91</td>
                                                                                <td>msisdn00xxx110</td>
                                                                                <td>TRUE</td>
                                                                                <td>93</td>
                                                                                <td>91</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx91</td>
                                                                                <td>msiSdn00xxx111</td>
                                                                                <td>TRUE</td>
                                                                                <td>94</td>
                                                                                <td>94</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>mslsdn00xxx35</td>
                                                                                <td>msisdn00xxx98</td>
                                                                                <td>TRUE</td>
                                                                                <td>104</td>
                                                                                <td>99</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx42</td>
                                                                                <td>msisdn00xxx101</td>
                                                                                <td>TRUE</td>
                                                                                <td>201</td>
                                                                                <td>153</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </li>
                                                            <li>Identifikasi titik-titik pemisahan potensial di antara nilai-nilai variabel Jumlah Irisan yang berurutan menggunakan rata-rata sebagai kandidat pemisahan.</li>
                                                            <li>Untuk setiap titik pemisahan potensial, pisahkan nilai variabel Jumlah Irisan menjadi dua kelompok berdasarkan apakah nilai variabel Jumlah Irisan lebih kecil atau lebih besar dari titik pemisahan tersebut.
                                                                <p style="font-weight: normal;">Misal threshold yang digunakan untuk melakukan split menjadi dua kelompok adalah rata-rata Jumlah_Irisan = 23, maka gini impurity dapat dihitung dengan cara berikut.</p>
                                                                <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                    <li>
                                                                        Kelas >= 23
                                                                        <ul class="list-styled">
                                                                            <li>Untuk kelas >= 23 dan TRUE, rasionya adalah 8/9 = 0.88</li>
                                                                            <li>Untuk kelas >= 23 dan FALSE, rasionya adalah 1/9 = 0.11</li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        Kelas < 23 <ul class="list-styled">
                                                                    <li>Untuk kelas < 23 dan TRUE, rasionya adalah 0/1=0</li>
                                                                    <li>Untuk kelas < 23 dan FALSE, rasionya adalah 1/1=1</li>
                                                                            </ul>
                                                                    </li>
                                                                </ol>
                                                            </li>
                                                            <li>Hitung gini impurity untuk setiap pemisahan potensial.
                                                                <p style="font-weight: normal;">Maka untuk kelas >= 23, impurity dapat dihitung dengan formula berikut:</p>
                                                                <ul class="list-styled">
                                                                    <li>Impurity = 1 - (probability of “TRUE”)<sup>2</sup> - (probability of “FALSE”)<sup>2</sup></li>
                                                                    <li>Impurity = 1 - (0.88)<sup>2</sup> - (0.11)<sup>2</sup> = 0.1975</li>
                                                                </ul>
                                                                <p style="font-weight: normal;">Maka untuk kelas < 23, impurity dapat dihitung dengan formula berikut:</p>
                                                                        <ul class="list-styled">
                                                                            <li>Impurity = 1 - (probability of “TRUE”)<sup>2</sup> - (probability of “FALSE”)<sup>2</sup></li>
                                                                            <li>Impurity = 1 - (1)<sup>2</sup> - (0)<sup>2</sup> = 0</li>
                                                                        </ul>
                                                            </li>
                                                            <li>Pilih pemisahan yang menghasilkan penurunan gini impurity yang paling signifikan sebagai pemisahan optimal untuk variabel Jumlah Irisan tersebut.Jadi gini impurity untuk threshold rata-rata Jumlah_Irisan = 23 adalah:
                                                                <p class="mt-2" style="text-align:center">Gini Impurity = ( 0.1975 x (9/10)) + (0 x (1/10)) = 0.17777778</p>
                                                                <p class="mt-3" style="font-weight: bold; text-align:center">Tabel X. Gini Impurity untuk Setiap Threshold Rata-rata Jumlah_Irisan</p>
                                                                <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                    <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                        <thead style="color: #fff; font-weight:bold;">
                                                                            <tr>
                                                                                <th scope="col">MSISDN 1</th>
                                                                                <th scope="col">MSISDN 2</th>
                                                                                <th scope="col">Is_Family</th>
                                                                                <th scope="col">Jumlah_Irisan</th>
                                                                                <th scope="col">Rata-rata Jumlah_Irisan Berurutan</th>
                                                                                <th scope="col">Gini Impurity</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>msisdn00xxx79</td>
                                                                                <td>msisdn00xxx101</td>
                                                                                <td>FALSE</td>
                                                                                <td>15</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx42</td>
                                                                                <td>msisdn00xxx79</td>
                                                                                <td>FALSE</td>
                                                                                <td>31</td>
                                                                                <td>23</td>
                                                                                <td>0.17777778</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx49</td>
                                                                                <td>msisdn00xxx91</td>
                                                                                <td>TRUE</td>
                                                                                <td>67</td>
                                                                                <td>49</td>
                                                                                <td>0</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>mslsdn00xxx51</td>
                                                                                <td>msisdn00xxx100</td>
                                                                                <td>TRUE</td>
                                                                                <td>70</td>
                                                                                <td>69</td>
                                                                                <td>0.13333333</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx18</td>
                                                                                <td>msisdn00xxx21</td>
                                                                                <td>TRUE</td>
                                                                                <td>84</td>
                                                                                <td>77</td>
                                                                                <td>0.2</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx92</td>
                                                                                <td>msisdn00xxx109</td>
                                                                                <td>TRUE</td>
                                                                                <td>88</td>
                                                                                <td>86</td>
                                                                                <td>0.24</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx91</td>
                                                                                <td>msisdn00xxx110</td>
                                                                                <td>TRUE</td>
                                                                                <td>93</td>
                                                                                <td>91</td>
                                                                                <td>0.26666667</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx91</td>
                                                                                <td>msiSdn00xxx111</td>
                                                                                <td>TRUE</td>
                                                                                <td>94</td>
                                                                                <td>94</td>
                                                                                <td>0.28571429</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>mslsdn00xxx35</td>
                                                                                <td>msisdn00xxx98</td>
                                                                                <td>TRUE</td>
                                                                                <td>104</td>
                                                                                <td>99</td>
                                                                                <td>0.3</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>msisdn00xxx42</td>
                                                                                <td>msisdn00xxx101</td>
                                                                                <td>TRUE</td>
                                                                                <td>201</td>
                                                                                <td>153</td>
                                                                                <td>0.31111111</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </li>
                                                            <li>Threshold terbaik adalah yang memiliki nilai gini impurity paling kecil.
                                                                <p style="font-weight: normal;">Pada Tabel x. dapat dilihat bahwa threshold 49 memiliki nilai gini impurity yang paling kecil. Berdasarkan hal tersebut, ditentukan threshold jumlah irisan heksagon antar nomor adalah >= 49 untuk kelas yang diprediksi yes (entitas family grouping) dan jumlah irisan heksagon antar nomor < 49 untuk kelas yang diprediksi no (bukan entitas family grouping).</p>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li lass="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Prediksi entitas mana yang termasuk dalam double counting kemudian lakukan evaluasi dengan membuat confusion matrix dan menghitung ukuran evaluasi seperti precision, recall, akurasi dan f1-score untuk setiap resolusi, mulai dari resolusi 1 hingga 12. Dari keseluruhan resolusi H3 tersebut, akan dipilih satu resolusi H3 terbaik dengan membandingkan hasil ukuran evaluasi antar resolusi.</p>
                                                    </li>
                                                    <li lass="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Untuk mengevaluasi algoritma ini, pengukuran lebih diprioritaskan terhadap nilai f1-score dari kelas Yes, yaitu kelas yang berisikan subscriber-subscriber yang diprediksi sebagai entitas double counting.</p>
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

                <div class="isi-tujuan shadow mt-5 mb-0">
                    <h4 class="card-title judul-card">Ketentuan</h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow rounded-4">
                                    <div class="pb-2 card-body">
                                        <div class="row">
                                            <div class="mb-0 col-lg-12 grid-margin">
                                                <div class="pr-3 pl-3">
                                                    <ul class="list-styled">
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Menerapkan konsep penghitungan jumlah hexagon yang beririsan (sama persis dengan algoritma double counting).</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Bedanya algoritma FG diterapkan pada hari weekend (Sabtu-Minggu) atau bisa juga pada hari-hari libur lainnya seperti liburan semester, liburan natal dan tahun baru (nataru), libur lebaran dll.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Hal ini didasarkan pada karakteristik anggota rumah tangga yang lebih sering menghabiskan waktu dirumah atau berpergian ke tempat wisata secara bersama-sama ketika weekend atau liburan.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Periode analisis dalam algoritma FG dengan H3 adalah selama setahun (Des 2021 - Nov 2022)</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Pengelompokkan tahap 1 berdasarkan lokasi home yang sama menggunakan metode AMDA tetap dilakukan pada hari-hari weekdays (hanya pada step ini menggunakan weekdays, selebihnya menggunakan weekend).</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Dalam algoritma FG juga akan ditentukan threshold yang diperoleh dari visualisasi decision tree yang dibangun dari variabel jumlah irisan dan variabel data kelas actual Family Grouping.</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="isi-tujuan shadow mt-5 mb-0">
                    <h4 class="card-title judul-card">Evaluasi</h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 grid-margin stretch-card h-100">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div class="chartBox">
                                            <canvas class="mt1" id="fg_algoritma2_1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card h-100">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div class="chartBox">
                                            <canvas class="mt1" id="fg_algoritma2_2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card h-100">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div class="chartBox">
                                            <canvas class="mt1" id="fg_algoritma2_3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card h-100">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div class="chartBox">
                                            <canvas class="mt1" id="fg_algoritma2_4"></canvas>
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
        <!-- Nav for types of Algorithm -->
        <div class="col-lg-12 d-flex justify-content-center">
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-dtw-tab" data-bs-toggle="pill" data-bs-target="#pills-dtw" type="button" role="tab" aria-controls="pills-dtw" aria-selected="true">Dynamic Time Warping</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-fd-tab" data-bs-toggle="pill" data-bs-target="#pills-fd" type="button" role="tab" aria-controls="pills-fd" aria-selected="false">Frechet Distance</button>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <!-- With Dynamic Time Warping -->
            <div class="tab-pane fade show active" id="pills-dtw" role="tabpanel" aria-labelledby="pills-dtw-tab" tabindex="0">
                <div class="isi-tujuan shadow mt-0 mb-0">
                    <h4 class="card-title judul-card text-center">Algoritma Clustering DBSCAN dan Pembentukan Matrix Distance Menggunakan Dynamic Time Warping</h4>
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
                                                    <ol class="list-styled" style="text-align:justify;">
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Penentuan lokasi usual environment menggunakan AMDA dengan beberapa tahap berikut.</p>
                                                            <ol class="list-styled" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; line-height:1rem; font-size:1rem">
                                                                <li>Identifikasi anomali pada setiap perpindahan lokasi yang terjadi dengan cara sebagai berikut.
                                                                    <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                        <li>Pembulatan lokasi dengan membulatkan koordinat latitude dan longitude dengan ketelitian lima decimal.
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X. Contoh Record MPD Sebelum Dilakukan Pembulatan</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold; background-color:yellow;">
                                                                                        <tr style="background-color:yellow;">
                                                                                            <th scope="col">msisdn</th>
                                                                                            <th scope="col">datetime</th>
                                                                                            <th scope="col">source</th>
                                                                                            <th scope="col">latitude</th>
                                                                                            <th scope="col">longitude</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody style="font-weight: normal;">
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 12:36:41</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.795097</td>
                                                                                            <td>110.358727</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 13:31:37</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.804648</td>
                                                                                            <td>110.357843</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 14:25:37</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.804648</td>
                                                                                            <td>110.357843</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 14:42:24</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.76936</td>
                                                                                            <td>110.364236</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 16:30:51</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.783124</td>
                                                                                            <td>110.398203</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 17:24:52</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.783124</td>
                                                                                            <td>110.398203</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:18:53</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.783124</td>
                                                                                            <td>110.398203</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:20:18</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.782672</td>
                                                                                            <td>110.400982</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:20:47</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.782672</td>
                                                                                            <td>110.400982</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:24:40</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.782672</td>
                                                                                            <td>110.400982</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X Contoh Record MPD Setelah Dilakukan Pembulatan</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                                        <tr>
                                                                                            <th scope="col">msisdn</th>
                                                                                            <th scope="col">datetime</th>
                                                                                            <th scope="col">source</th>
                                                                                            <th scope="col">latitude</th>
                                                                                            <th scope="col">longitude</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody style="font-weight: normal;">
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 12:36:41</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.79510</td>
                                                                                            <td>110.35873</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 13:31:37</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.80465</td>
                                                                                            <td>110.35784</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 14:25:37</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.80465</td>
                                                                                            <td>110.35784</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 14:42:24</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.76940</td>
                                                                                            <td>110.36424</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 16:30:51</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.39820</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 17:24:52</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.39820</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:18:53</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.39820</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:20:18</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:20:47</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:24:40</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </li>
                                                                        <li class="mt-3">Menghilangkan fast movers dengan menghapus record dengan kecepatan melebihi ambang batas (diatas 10 km/jam). Untuk menghitung kecepatan, sebelumnya dihitung jarak dari urutan setiap lokasi MSISDN menggunakan formula Haversine terlebih dahulu. Kemudian, dihitung waktu yang dibutuhkan untuk berpindah dari satu koordinat ke koordinat lainnya secara berurutan. Terakhir, dihitung kecepatan dengan membagi jarak dengan waktu tempuh.
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X. Contoh Record MPD dengan Penghitungan Kecepatan</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                                        <tr>
                                                                                            <th scope="col">msisdn</th>
                                                                                            <th scope="col">datetime</th>
                                                                                            <th scope="col">source</th>
                                                                                            <th scope="col">latitude</th>
                                                                                            <th scope="col">longitude</th>
                                                                                            <th scope="col">haversine distance</th>
                                                                                            <th scope="col">Time (jam)</th>
                                                                                            <th scope="col">Speed (km/jam)</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody style="font-weight: normal;">
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 12:36</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.79510</td>
                                                                                            <td>110.35873</td>
                                                                                            <td> </td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 13:31</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.80465</td>
                                                                                            <td>110.35784</td>
                                                                                            <td>0.382454</td>
                                                                                            <td>0.916667</td>
                                                                                            <td>0.417223</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 14:25</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.80465</td>
                                                                                            <td>110.35784</td>
                                                                                            <td>0</td>
                                                                                            <td>0.9</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 14:42</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.76940</td>
                                                                                            <td>110.36424</td>
                                                                                            <td>1.538283</td>
                                                                                            <td>0.283333</td>
                                                                                            <td>5.429234</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 16:30</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.3982</td>
                                                                                            <td>3.813374</td>
                                                                                            <td>1.8</td>
                                                                                            <td>2.118541</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 17:24</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.3982</td>
                                                                                            <td>0</td>
                                                                                            <td>0.9</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 18:18</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.3982</td>
                                                                                            <td>0</td>
                                                                                            <td>0.9</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 18:20</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                            <td>0.309614</td>
                                                                                            <td>0.033333</td>
                                                                                            <td>9.28842</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 18:20</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                            <td>0</td>
                                                                                            <td>0</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 18:24</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                            <td>0</td>
                                                                                            <td>0.066667</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                                <li>
                                                                    Deteksi lokasi rumah (home) menggunakan AMDA dengan membentuk anchor point melalui tahapan berikut.
                                                                    <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                        <li>Untuk setiap nomor/subscriber, filter event pertama yang terekam setiap harinya pada hari kerja (weekdays)</li>
                                                                        <li>Ubah waktu kejadian yang masih menggunakan format 24 jam menjadi format 12 jam dengan mengikuti algoritma sebagai berikut.
                                                                            <ol class="list-styled mt-2" style="text-align:justify; font-weight:normal; font-size:1rem">
                                                                                <li>Melakukan pengecekan untuk setiap timestamp apakah jam yang tertera lebih besar dari 12 atau tidak</li>
                                                                                <li>Jika diperoleh hasilnya “Ya” (Jam > 12), maka lakukan transformasi pada timestamp dengan menggunakan formula: jam -- 12</li>
                                                                                <li>Jika diperoleh hasilnya “Tidak”, maka tidak akan dilakukan transformasi pada timestamp</li>
                                                                                <li>Selanjutnya, untuk setiap subscriber, hitung frekuensi berada di LAU tertentu (dalam hal ini LAU2 Regency)</li>
                                                                            </ol>
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Format 24 jam (Original):</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>0</td>
                                                                                            <td>1</td>
                                                                                            <td>2</td>
                                                                                            <td>3</td>
                                                                                            <td>4</td>
                                                                                            <td>5</td>
                                                                                            <td>6</td>
                                                                                            <td>7</td>
                                                                                            <td>8</td>
                                                                                            <td>9</td>
                                                                                            <td>10</td>
                                                                                            <td>11</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>23</td>
                                                                                            <td>22</td>
                                                                                            <td>21</td>
                                                                                            <td>20</td>
                                                                                            <td>19</td>
                                                                                            <td>18</td>
                                                                                            <td>17</td>
                                                                                            <td>16</td>
                                                                                            <td>15</td>
                                                                                            <td>14</td>
                                                                                            <td>13</td>
                                                                                            <td>12</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Format 24 jam (Converted):</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>0</td>
                                                                                            <td>1</td>
                                                                                            <td>2</td>
                                                                                            <td>3</td>
                                                                                            <td>4</td>
                                                                                            <td>5</td>
                                                                                            <td>6</td>
                                                                                            <td>7</td>
                                                                                            <td>8</td>
                                                                                            <td>9</td>
                                                                                            <td>10</td>
                                                                                            <td>11</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </li>
                                                                        <li>Hitung frekuensi kemunculan awal event per hari per cell-id (anchor)</li>
                                                                        <li>Hitung statistik rata-rata dan standar deviasi untuk jam terjadinya event, jumlah hari, dan jumlah kemunculan event. Perhitungan ini dilakukan untuk setiap anchor.</li>
                                                                    </ol>
                                                                </li>
                                                                <li>Menentukan kandidat usual environment dengan :
                                                                    <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                        <li>Hitung jarak antara anchor dan kandidat utama dengan menggunakan haversine distance.</li>
                                                                        <li>Filter anchor dengan jumlah hari yang muncul lebih dari atau sama dengan 5. Eliminasi anchor yang berdekatan dengan kandidat utama (di bawah 500 m).</li>
                                                                        <li>Pisahkan kejadian (event) yang ada hanya pada hari kerja dan ubah variabel waktu menjadi format 12 jam.</li>
                                                                        <li>Hitung frekuensi lokasi awal harian dari setiap titik lokasi (anchor), serta statistik rata-rata dan standar deviasi setiap jam kejadian, dan bentuk kandidat utamanya.</li>
                                                                        <li>Hitung jarak antara lokasi yang dipilih dengan lokasi kandidat utama, kemudian eliminasi lokasi yang berdekatan (berada di bawah 500 m) diikuti dengan mengurutkan lama kejadian yang lebih atau sama dengan 5 hari.</li>
                                                                    </ol>
                                                                </li>
                                                                <li>Pembentukan anchor point kedua dengan cara berikut.
                                                                    <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                        <li>Hitung jumlah record (N_event), jumlah hari unik (N_date), serta rata-rata jam kejadian (AVG_hour) diikuti dengan standar deviasi jam kejadian (SD_hour) untuk setiap nomor/subscriber per bulannya.
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X Contoh Agregasi Penghitungan Anchor 1</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                                        <th scope="col">msisdn</th>
                                                                                        <th scope="col">year</th>
                                                                                        <th scope="col">month</th>
                                                                                        <th scope="col">latitude</th>
                                                                                        <th scope="col">longitude</th>
                                                                                        <th scope="col">idkab</th>
                                                                                        <th scope="col">N_event</th>
                                                                                        <th scope="col">N_date</th>
                                                                                        <th scope="col">AVG_hour</th>
                                                                                        <th scope="col">SD_hour</th>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.9201</td>
                                                                                            <td>107.5607</td>
                                                                                            <td>32|77</td>
                                                                                            <td>113</td>
                                                                                            <td>23</td>
                                                                                            <td>1.05</td>
                                                                                            <td>2.07</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.922</td>
                                                                                            <td>107.5559</td>
                                                                                            <td>32|77</td>
                                                                                            <td>46</td>
                                                                                            <td>22</td>
                                                                                            <td>3.83</td>
                                                                                            <td>3.03</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.9201</td>
                                                                                            <td>107.5607</td>
                                                                                            <td>32|77</td>
                                                                                            <td>155</td>
                                                                                            <td>19</td>
                                                                                            <td>3.6</td>
                                                                                            <td>3.55</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.922</td>
                                                                                            <td>107.5559</td>
                                                                                            <td>32|77</td>
                                                                                            <td>67</td>
                                                                                            <td>18</td>
                                                                                            <td>4.31</td>
                                                                                            <td>4.05</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-7.0282</td>
                                                                                            <td>107.5228</td>
                                                                                            <td>32|04</td>
                                                                                            <td>105</td>
                                                                                            <td>12</td>
                                                                                            <td>8.89</td>
                                                                                            <td>0.8</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </li>
                                                                        <li>Hitung jumlah kemunculan suatu lokasi, kandidat utama setidaknya muncul sebanyak lima hari setiap bulan.</li>
                                                                        <li>
                                                                            Potensi kandidat utama dilihat dengan mengelompokkan setiap lokasi yang ada. Mulanya, jarak antar lokasi dihitung dengan jarak Haversine, kemudian dikelompokkan lokasi-lokasi dengan radius jarak 0,5 km. Lokasi yang dianggap dekat dengan kandidat utama pada akhirnya dihilangkan dari calon lokasi usual environment.
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X Contoh Agregasi Penghitungan Anchor 2</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                                        <tr>
                                                                                            <th scope="col">msisdn</th>
                                                                                            <th scope="col">year</th>
                                                                                            <th scope="col">month</th>
                                                                                            <th scope="col">latitude</th>
                                                                                            <th scope="col">longitude</th>
                                                                                            <th scope="col">idkab</th>
                                                                                            <th scope="col">N_event</th>
                                                                                            <th scope="col">N_date</th>
                                                                                            <th scope="col">AVG_hour</th>
                                                                                            <th scope="col">SD_hour</th>
                                                                                            <th scope="col">distance</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr style="background-color: greenyellow;">
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.9201</td>
                                                                                            <td>107.5607</td>
                                                                                            <td>32|77</td>
                                                                                            <td>113</td>
                                                                                            <td>23</td>
                                                                                            <td>1.05</td>
                                                                                            <td>2.07</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr style="background-color: red;">
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.922</td>
                                                                                            <td>107.5559</td>
                                                                                            <td>32|77</td>
                                                                                            <td>46</td>
                                                                                            <td>22</td>
                                                                                            <td>3.83</td>
                                                                                            <td>3.03</td>
                                                                                            <td>0.2</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.9201</td>
                                                                                            <td>107.5607</td>
                                                                                            <td>32|77</td>
                                                                                            <td>155</td>
                                                                                            <td>19</td>
                                                                                            <td>3.6</td>
                                                                                            <td>3.55</td>
                                                                                            <td>0.76</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.922</td>
                                                                                            <td>107.5559</td>
                                                                                            <td>32|77</td>
                                                                                            <td>67</td>
                                                                                            <td>18</td>
                                                                                            <td>4.31</td>
                                                                                            <td>4.05</td>
                                                                                            <td>17.22</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-7.0282</td>
                                                                                            <td>107.5228</td>
                                                                                            <td>32|04</td>
                                                                                            <td>105</td>
                                                                                            <td>12</td>
                                                                                            <td>8.89</td>
                                                                                            <td>0.8</td>
                                                                                            <td>20.15</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <p class="mt-2">Baris berwarna hijau adalah kandidat utama. Baris berwarna merah dieliminasi karena berjarak kurang dari 0,5 km dari lokasi yang menjadi kandidat utama.</p>
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                                <li>Anchor hasil pengelompokkan lokasi dengan rata-rata jam kurang dari tujuh (AVG_hour < tujuh) akan diklasifikasikan sebagai calon lokasi rumah (home), sedangkan anchor lainnya dengan rata-rata jam lebih dari tujuh akan diklasifikasikan sebagai calon lokasi kantor (work). Pilih kandidat terkuat untuk lokasi rumah (home) dan kantor (work) dari setiap kelompok dengan urutan prioritas sebagai berikut : <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                <li>jumlah hari kejadian tertinggi (N_date)</li>
                                                                <li>lokasi dengan baris data terbanyak (N_event)</li>
                                                                <li>rata-rata jam tertinggi (AVG_hour), dan</li>
                                                                <li>standar deviasi jam terendah (SD_hour)</li>

                                                            </ol>
                                                        </li>
                                                        <li>Diperoleh lokasi prediksi lokasi rumah (home) dan kantor (work) yang ditunjukkan pada contoh tabel berikut.
                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                <p style="text-align: center; font-weight:bold">Tabel X. Prediksi Lokasi Usual Environment</p>
                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                        <tr>
                                                                            <th scope="col">msisdn</th>
                                                                            <th scope="col">year</th>
                                                                            <th scope="col">month</th>
                                                                            <th scope="col">latitude</th>
                                                                            <th scope="col">longitude</th>
                                                                            <th scope="col">idkab</th>
                                                                            <th scope="col">N_event</th>
                                                                            <th scope="col">N_date</th>
                                                                            <th scope="col">AVG_hour</th>
                                                                            <th scope="col">SD_hour</th>
                                                                            <th scope="col">label</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>msisdn00xxx</td>
                                                                            <td>2020</td>
                                                                            <td>1</td>
                                                                            <td>-6.25008</td>
                                                                            <td>106.9067</td>
                                                                            <td>31|72</td>
                                                                            <td>39</td>
                                                                            <td>22</td>
                                                                            <td>1.07</td>
                                                                            <td>1.96</td>
                                                                            <td>Home</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>msisdn00xxx</td>
                                                                            <td>2020</td>
                                                                            <td>1</td>
                                                                            <td>-7.0282</td>
                                                                            <td>107.5228</td>
                                                                            <td>32|04</td>
                                                                            <td>105</td>
                                                                            <td>12</td>
                                                                            <td>8.89</td>
                                                                            <td>0.8</td>
                                                                            <td>Work</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight:normal;">Kelompokkan subscriber dengan lokasi rumah tahunan (home yearly) yang sama. Lokasi home tahunan diperoleh dari modus lokasi home pada nomor tersebut selama rentang waktu bulan Desember 2021 sampai bulan November 2022. Pengelompokan dilakukan berdasarkan lokasi administratif setingkat provinsi, kemudian kabupaten/kota.</p>
                                                        <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; font-size:1rem">
                                                            <li>Jika didapati dua atau lebih modus home dengan lokasi yang berbeda, maka lokasi home ditentukan (secara berurutan) berdasarkan lokasi dengan jumlah hari kejadian tertinggi (N_date), lokasi dengan baris data terbanyak (N_event), lokasi dengan rata-rata jam tertinggi (AVG_hour), dan lokasi dengan standar deviasi jam terendah (SD_hour) diantara bulan-bulan yang menjadi modus lokasi home.</li>
                                                        </ol>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight:normal;">Hitung kecepatan antar dua record berurutan untuk setiap record, dan lakukan eliminasi pergerakan yang tidak wajar (kecepatan yang lebih dari 100 km/jam). Kecepatan yang tidak wajar disebabkan oleh adanya lag record.</p>
                                                        <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                            <p style="text-align: center; font-weight:bold">Tabel X Contoh Agregasi Penghitungan Anchor 2</c>
                                                            <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto; font-weight:normal">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="row">msisdn</th>
                                                                        <th scope="row">datetime</th>
                                                                        <th scope="row">source</th>
                                                                        <th scope="row">latitude</th>
                                                                        <th scope="row">longitude</th>
                                                                        <th scope="row">Jarak haversine (km)</th>
                                                                        <th scope="row">waktu (jam)</th>
                                                                        <th scope="row">Kecepatan (km/jam)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 6:16</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.26222</td>
                                                                        <td>106.97889</td>
                                                                        <td> </td>
                                                                        <td> </td>
                                                                        <td> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 6:31</td>
                                                                        <td>chg</td>
                                                                        <td>-6.26222</td>
                                                                        <td>106.97889</td>
                                                                        <td>0</td>
                                                                        <td>0.239167</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 7:21</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.20028</td>
                                                                        <td>106.80917</td>
                                                                        <td>19.98482</td>
                                                                        <td>0.833889</td>
                                                                        <td>23.965</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 7:34</td>
                                                                        <td>chg</td>
                                                                        <td>-6.20028</td>
                                                                        <td>106.80917</td>
                                                                        <td>0</td>
                                                                        <td>0.219722</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 9:24</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16333</td>
                                                                        <td>106.84</td>
                                                                        <td>5.338248</td>
                                                                        <td>1.834167</td>
                                                                        <td>2.9104</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 10:24</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16444</td>
                                                                        <td>106.83583</td>
                                                                        <td>0.477239</td>
                                                                        <td>1.001389</td>
                                                                        <td>0.4765</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 11:24</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16444</td>
                                                                        <td>106.83583</td>
                                                                        <td>0</td>
                                                                        <td>1.000556</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 13:24</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.20239</td>
                                                                        <td>106.819</td>
                                                                        <td>4.611796</td>
                                                                        <td>2.000833</td>
                                                                        <td>2.3049</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 13:35</td>
                                                                        <td>chg</td>
                                                                        <td>-6.20239</td>
                                                                        <td>106.819</td>
                                                                        <td>0</td>
                                                                        <td>0.184722</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 14:15</td>
                                                                        <td>chg</td>
                                                                        <td>-6.26222</td>
                                                                        <td>106.97889</td>
                                                                        <td>18.88454</td>
                                                                        <td>0.661111</td>
                                                                        <td>28.564</td>
                                                                    </tr>
                                                                    <tr style="background-color: red;">
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 14:25</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16333</td>
                                                                        <td>106.84</td>
                                                                        <td>18.88473</td>
                                                                        <td>0.172778</td>
                                                                        <td>109.30</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 15:25</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16444</td>
                                                                        <td>106.83583</td>
                                                                        <td>0.477239</td>
                                                                        <td>1.000278</td>
                                                                        <td>0.4771</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 16:25</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25639</td>
                                                                        <td>106.94194</td>
                                                                        <td>15.56028</td>
                                                                        <td>1.000556</td>
                                                                        <td>15.551</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 16:36</td>
                                                                        <td>chg</td>
                                                                        <td>-6.25883</td>
                                                                        <td>106.94197</td>
                                                                        <td>0.271336</td>
                                                                        <td>0.187778</td>
                                                                        <td>1.4449</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 17:26</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.26889</td>
                                                                        <td>106.98028</td>
                                                                        <td>4.379708</td>
                                                                        <td>0.833611</td>
                                                                        <td>5.2538</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight:normal;">Raw data (bukan data yang telah di preprocessing menggunakan AMDA) digunakan untuk analisis pada algoritma ini. Hal ini dikarenakan pada algoritma ini akan dianalisis untuk setiap event yang terjadi, termasuk juga pola perjalanan pelanggan (bukan hanya event yang terjadi setelah dilakukan eliminasi unusual speed < 10 km/jam)</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight:normal;">Bentuk staypoint dengan cara berikut.</p>
                                                        <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; font-size:1rem">
                                                            <li>Bagi hari menjadi dua interval, yakni waktu work pukul 7 pagi hingga 7 malam, dan waktu home dari pukul 7 malam hingga 7 pagi.</li>
                                                            <li>Di setiap interval, hitung jumlah kemunculan koordinat lokasi yang berbeda di setiap harinya untuk seluruh nomor. Koordinat-koordinat tersebut disebut sebagai anchor.</li>
                                                            <li>Anchor dengan frekuensi terbanyak dalam satu interval disebut sebagai kandidat utama dan secara otomatis akan menjadi staypoint.</li>
                                                            <li>Hitung jarak anchor lain dengan kandidat utama menggunakan jarak Haversine dan eliminasi anchor yang memiliki jarak kurang dari 500m dari kandidat utama.</li>
                                                            <li>Anchor yang tidak tereliminasi dibiarkan dan dijadikan staypoint baru.</li>
                                                        </ol>
                                                        <p style="font-weight:normal;">Sebagai contoh, kita akan menentukan staypoint berdasarkan data pada Tabel X.. Pertama-tama, data perlu dibagi menjadi dua interval berdasarkan waktu pencatatan (datetime). Interval 1 (07.00-18.59) dan Interval 2 (19.00-06.59). Pada interval 1, terdapat dua titik koordinat (anchor), yaitu koordinat 1 (-6.24925, 106.90133) yang direpresentasikan dengan baris warna kuning dan koordinat 2 (-6.2501, 106.90658) yang direpresentasikan dengan baris warna aqua. Koordinat 1 muncul sebanyak tiga kali dan koordinat 2 muncul sebanyak enam kali. Dengan begitu, koordinat 2 akan dijadikan sebagai kandidat utama.</p>
                                                        <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                            <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto; font-weight:normal">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">datetime</th>
                                                                        <th scope="col">msisdn</th>
                                                                        <th scope="col">source</th>
                                                                        <th scope="col">latitude</th>
                                                                        <th scope="col">longitude</th>
                                                                        <th scope="col">provinsi</th>
                                                                        <th scope="col">kabupaten</th>
                                                                        <th scope="col">interval</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody style="text-align: center;">
                                                                    <tr>
                                                                        <td>11/02/2021 01:09</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.24925</td>
                                                                        <td>106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td rowspan="4"><br>INTERVAL 2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 01:11</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.24925</td>
                                                                        <td>106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 03:10</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25010</td>
                                                                        <td>106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 05:13</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.24925</td>
                                                                        <td>106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 07:14</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td rowspan="9"><br><br>INTERVAL 1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 09:32</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 10:32</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: yellow;">-6.24925</td>
                                                                        <td style="background-color: yellow;">106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 11:10</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 12:47</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 13:12</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 15:10</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: yellow;">-6.24925</td>
                                                                        <td style="background-color: yellow;">106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 17:01</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: yellow;">-6.24925</td>
                                                                        <td style="background-color: yellow;">106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 17:13</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 19:12</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25010</td>
                                                                        <td>106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td rowspan="4"><br>INTERVAL 2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 20:42</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25010</td>
                                                                        <td>106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 21:03</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25010</td>
                                                                        <td>106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 23:07</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25010</td>
                                                                        <td>106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <p style="font-weight:normal;">Jarak haversine antara koordinat 1 (-6.24925, 106.90133) dan koordinat 2 (-6.2501, 106.90658) adalah sebesar 0.59 km. Oleh karena jarak koordinat 2 (sebagai anchor lainnya) terhadap koordinat 1 (sebagai kandidat utama) lebih dari 0,5 km (500 m), maka koordinat 2 tidak akan dieliminasi dan akan dijadikan sebagai staypoint. Sehingga pada interval 1, terdapat 2 staypoint yaitu koordinat 1 (-6.24925, 106.90133) dan koordinat 2 (-6.2501, 106.90658).</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Ekstraksi lintasan spasial untuk setiap nomor dalam rentang waktu periode analisis (Desember 2021-November 2022). Lintasan spasial terdiri dari sekumpulan list staypoint yang terurut berdasarkan datetime.</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Lintasan spasial dimulai dari staypoint pertama yang menunjukkan lokasi home dari nomor tersebut dan diakhiri dengan staypoint terakhir yang menunjukkan lokasi home dari nomor tersebut. Berikut adalah contoh proses ekstraksi lintasan spasial pada salah satu nomor (msisdn).</p>
                                                        <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                            <p style="text-align: center; font-weight:bold">Tabel X. Lokasi Home msisdn00xxx Untuk Setiap Bulan</p>
                                                            <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto; font-weight:normal; text-align:center;">
                                                                <thead style="color: #fff; font-weight:bold; background-color:yellow;">
                                                                    <tr>
                                                                        <th>event_month</th>
                                                                        <th>msisdn</th>
                                                                        <th>provider</th>
                                                                        <th>home_prov</th>
                                                                        <th>home_kab</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>12</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>LUMAJANG</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>LUMAJANG</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>JEMBER</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>JEMBER</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>JEMBER</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>JEMBER</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>6</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>JEMBER</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>7</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>JEMBER</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>8</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>JEMBER</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>9</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>DKI JAKARTA</td>
                                                                        <td>JAKARTA TIMUR</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>10</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>DKI JAKARTA</td>
                                                                        <td>JAKARTA TIMUR</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>DKI JAKARTA</td>
                                                                        <td>JAKARTA TIMUR</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Setelah mengekstraksi lintasan spasial setiap nomor, bangun matriks jarak Dynamic Time Warping (DTW) yang dibangun dari list lintasan spasial setiap nomor pada kelompok yang sama. Sehingga nantinya ukuran matriks DTW yang terbentuk adalah m x m, dimana m adalah banyaknya nomor yang berada di kelompok yang sama.</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Setelah membangun matriks jarak, sekarang kita dapat menentukan fungsi warping yang akan digunakan untuk menemukan jalur warping yang optimal di seluruh matriks jarak. Fungsi warping akan mengambil matriks jarak terakumulasi sebagai input dan akan mengembalikan daftar pasangan indeks yang mewakili jalur warping optimal.</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Agar lebih sederhana, kita dapat mengilustrasikan matriks jarak sebagai confusion matrix di mana sel yang lebih gelap mewakili nilai tinggi sedangkan sel yang lebih terang mewakili nilai kecil. Berikut adalah contoh yang menunjukkan jalur warping yang optimal di sepanjang matriks jarak</p>
                                                        <p style="color: red;">GAMBAR</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Tentukan epsilon untuk DBSCAN Clustering dengan mengikuti algoritma hasil penelitian Elbatta tahun 2012 sebagai berikut.</p>
                                                        <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; font-size:1rem">
                                                            <li>Hitung jarak haversine pada setiap pasangan data latitude dan longitude.</li>
                                                            <li>Bangun matriks utuh dari jarak yang sudah dihitung.</li>
                                                            <li>Lakukan normalisasi untuk mempermudah pencarian k tetangga terdekat pada setiap baris perhitungan jarak.</li>
                                                            <li>Lakukan inialisasi untuk menghitung jumlah baris data pada matriks.</li>
                                                            <li>Selanjutnya, pencarian dilakukan untuk k tetangga terdekat dari setiap baris matriks dengan mengurutkannya secara ascending untuk setiap hasil jarak terdekat.</li>
                                                            <li>Pengurutan hasil setiap baris yang merepresentasikan jarak tetangga terdekat digunakan untuk membuat plot dengan sumbu x adalah jumlah objek dan sumbu y adalah jarak k tetangga terdekat.</li>
                                                            <li>Dari plot yang terbentuk, selanjutnya dihitung perbedaan kemiringan garis untuk mendapatkan nilai Eps. Titik yang memiliki perubahan pada kemiringan plot akan menjadi nilai Eps optimal yang signifikan.</li>
                                                            <p class="mt-3" style="font-weight: bold; text-align:center">Gambar X. Sebaran Heksagon msisdn00xxx1</p>
                                                            <p style="color: red;">GAMBAR</p>
                                                        </ol>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Setelah nilai eps ditentukan, maka proses clustering trajectories (lintasan) menggunakan DBSCAN dapat dilakukan, dengan input parameternya berupa:</p>
                                                        <ul class="list-style">
                                                            <li>distance_matrix = matrix distance yang sudah dibangun menggunakan DTW atau Frechet Distance</li>
                                                            <li>epsilon (eps) = nilai eps terbaik yang telah ditentukan</li>
                                                            <li>min_samples = 1, untuk memastikan semua lintasan dikelompokkan menjadi sebuah cluster.</li>
                                                        </ul>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Hasil clustering DBSCAN akan menunjukkan beberapa klaster lintasan (trajectories), dimana lintasan-lintasan yang berada di dalam satu klaster memiliki kemiripan path satu sama lain.</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Jika terdapat lebih dari dua nomor dalam satu klaster, bandingkan jarak DTW antara dua nomor dalam klaster tersebut. Jarak DTW terkecil antara dua nomor mengindikasikan adanya double counting, yakni kedua nomor tersebut dimiliki oleh satu entitas.</p>
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
                <div class="isi-tujuan shadow mt-5 mb-0">
                    <h4 class="card-title judul-card">Ketentuan</h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow rounded-4">
                                    <div class="pb-2 card-body">
                                        <div class="row">
                                            <div class="mb-0 col-lg-12 grid-margin">
                                                <div class="pr-3 pl-3">
                                                    <ul class="list-styled">
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Menerapkan konsep penghitungan jarak haversine yang sama persis dengan algoritma double counting.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Bedanya algoritma FG diterapkan pada hari weekend (Sabtu-Minggu) atau bisa juga pada hari-hari libur lainnya seperti liburan semester, liburan natal dan tahun baru (nataru), libur lebaran dll.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Hal ini didasarkan pada karakteristik anggota rumah tangga yang lebih sering menghabiskan waktu dirumah atau berpergian ke tempat wisata secara bersama-sama ketika weekend atau liburan.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Periode analisis dalam algoritma FG adalah selama setahun (Des 2021 - Nov 2022)</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Pengelompokkan tahap 1 berdasarkan lokasi home yang sama menggunakan metode AMDA tetap dilakukan pada hari-hari weekdays (hanya pada step ini menggunakan weekdays, selebihnya menggunakan weekend).</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Perbedaan selanjutnya adalah:</p>
                                                            <ol style="font-weight:normal; text-align:justify;">
                                                                <li>Hasil clustering tidak perlu dihitung lagi DTW atau Frechet Distancenya, melainkan sudah langsung dianggap sebagai nomor-nomor family grouping jika berada di klaster yang sama.</li>
                                                            </ol>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="isi-tujuan shadow mt-5 mb-0">
                    <h4 class="card-title judul-card">Evaluasi</h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 grid-margin stretch-card h-100">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div class="chartBox">
                                            <canvas class="mt1" id="riset1_hasil5"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card h-100">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div class="chartBox">
                                            <canvas class="mt1" id="riset1_hasil5"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card h-100">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div class="chartBox">
                                            <canvas class="mt1" id="riset1_hasil5"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card h-100">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div class="chartBox">
                                            <canvas class="mt1" id="riset1_hasil5"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- With Frechet Distance -->
            <div class="tab-pane fade show" id="pills-fd" role="tabpanel" aria-labelledby="pills-fd-tab" tabindex="0">
                <div class="isi-tujuan shadow mt-0 mb-0">
                    <h4 class="card-title judul-card text-center">Algoritma Clustering DBSCAN dan Pembentukan Matrix Distance Menggunakan Frechet Distance</h4>
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
                                                    <ol class="list-styled" style="text-align:justify;">
                                                        <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Penentuan lokasi usual environment menggunakan AMDA dengan beberapa tahap berikut.</p>
                                                            <ol class="list-styled" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; line-height:1rem; font-size:1rem">
                                                                <li>Identifikasi anomali pada setiap perpindahan lokasi yang terjadi dengan cara sebagai berikut.
                                                                    <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                        <li>Pembulatan lokasi dengan membulatkan koordinat latitude dan longitude dengan ketelitian lima decimal.
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X. Contoh Record MPD Sebelum Dilakukan Pembulatan</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold; background-color:yellow;">
                                                                                        <tr style="background-color:yellow;">
                                                                                            <th scope="col">msisdn</th>
                                                                                            <th scope="col">datetime</th>
                                                                                            <th scope="col">source</th>
                                                                                            <th scope="col">latitude</th>
                                                                                            <th scope="col">longitude</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody style="font-weight: normal;">
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 12:36:41</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.795097</td>
                                                                                            <td>110.358727</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 13:31:37</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.804648</td>
                                                                                            <td>110.357843</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 14:25:37</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.804648</td>
                                                                                            <td>110.357843</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 14:42:24</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.76936</td>
                                                                                            <td>110.364236</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 16:30:51</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.783124</td>
                                                                                            <td>110.398203</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 17:24:52</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.783124</td>
                                                                                            <td>110.398203</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:18:53</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.783124</td>
                                                                                            <td>110.398203</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:20:18</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.782672</td>
                                                                                            <td>110.400982</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:20:47</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.782672</td>
                                                                                            <td>110.400982</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:24:40</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.782672</td>
                                                                                            <td>110.400982</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X Contoh Record MPD Setelah Dilakukan Pembulatan</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                                        <tr>
                                                                                            <th scope="col">msisdn</th>
                                                                                            <th scope="col">datetime</th>
                                                                                            <th scope="col">source</th>
                                                                                            <th scope="col">latitude</th>
                                                                                            <th scope="col">longitude</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody style="font-weight: normal;">
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 12:36:41</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.79510</td>
                                                                                            <td>110.35873</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 13:31:37</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.80465</td>
                                                                                            <td>110.35784</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 14:25:37</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.80465</td>
                                                                                            <td>110.35784</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 14:42:24</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.76940</td>
                                                                                            <td>110.36424</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 16:30:51</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.39820</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 17:24:52</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.39820</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:18:53</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.39820</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:20:18</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:20:47</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2021-01-01 18:24:40</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </li>
                                                                        <li class="mt-3">Menghilangkan fast movers dengan menghapus record dengan kecepatan melebihi ambang batas (diatas 10 km/jam). Untuk menghitung kecepatan, sebelumnya dihitung jarak dari urutan setiap lokasi MSISDN menggunakan formula Haversine terlebih dahulu. Kemudian, dihitung waktu yang dibutuhkan untuk berpindah dari satu koordinat ke koordinat lainnya secara berurutan. Terakhir, dihitung kecepatan dengan membagi jarak dengan waktu tempuh.
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X. Contoh Record MPD dengan Penghitungan Kecepatan</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                                        <tr>
                                                                                            <th scope="col">msisdn</th>
                                                                                            <th scope="col">datetime</th>
                                                                                            <th scope="col">source</th>
                                                                                            <th scope="col">latitude</th>
                                                                                            <th scope="col">longitude</th>
                                                                                            <th scope="col">haversine distance</th>
                                                                                            <th scope="col">Time (jam)</th>
                                                                                            <th scope="col">Speed (km/jam)</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody style="font-weight: normal;">
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 12:36</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.79510</td>
                                                                                            <td>110.35873</td>
                                                                                            <td> </td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 13:31</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.80465</td>
                                                                                            <td>110.35784</td>
                                                                                            <td>0.382454</td>
                                                                                            <td>0.916667</td>
                                                                                            <td>0.417223</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 14:25</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.80465</td>
                                                                                            <td>110.35784</td>
                                                                                            <td>0</td>
                                                                                            <td>0.9</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 14:42</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.76940</td>
                                                                                            <td>110.36424</td>
                                                                                            <td>1.538283</td>
                                                                                            <td>0.283333</td>
                                                                                            <td>5.429234</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 16:30</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.3982</td>
                                                                                            <td>3.813374</td>
                                                                                            <td>1.8</td>
                                                                                            <td>2.118541</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 17:24</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.3982</td>
                                                                                            <td>0</td>
                                                                                            <td>0.9</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 18:18</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78312</td>
                                                                                            <td>110.3982</td>
                                                                                            <td>0</td>
                                                                                            <td>0.9</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 18:20</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                            <td>0.309614</td>
                                                                                            <td>0.033333</td>
                                                                                            <td>9.28842</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 18:20</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                            <td>0</td>
                                                                                            <td>0</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>1/1/2021 18:24</td>
                                                                                            <td>LBA</td>
                                                                                            <td>-7.78267</td>
                                                                                            <td>110.40098</td>
                                                                                            <td>0</td>
                                                                                            <td>0.066667</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                                <li>
                                                                    Deteksi lokasi rumah (home) menggunakan AMDA dengan membentuk anchor point melalui tahapan berikut.
                                                                    <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                        <li>Untuk setiap nomor/subscriber, filter event pertama yang terekam setiap harinya pada hari kerja (weekdays)</li>
                                                                        <li>Ubah waktu kejadian yang masih menggunakan format 24 jam menjadi format 12 jam dengan mengikuti algoritma sebagai berikut.
                                                                            <ol class="list-styled mt-2" style="text-align:justify; font-weight:normal; font-size:1rem">
                                                                                <li>Melakukan pengecekan untuk setiap timestamp apakah jam yang tertera lebih besar dari 12 atau tidak</li>
                                                                                <li>Jika diperoleh hasilnya “Ya” (Jam > 12), maka lakukan transformasi pada timestamp dengan menggunakan formula: jam -- 12</li>
                                                                                <li>Jika diperoleh hasilnya “Tidak”, maka tidak akan dilakukan transformasi pada timestamp</li>
                                                                                <li>Selanjutnya, untuk setiap subscriber, hitung frekuensi berada di LAU tertentu (dalam hal ini LAU2 Regency)</li>
                                                                            </ol>
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Format 24 jam (Original):</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>0</td>
                                                                                            <td>1</td>
                                                                                            <td>2</td>
                                                                                            <td>3</td>
                                                                                            <td>4</td>
                                                                                            <td>5</td>
                                                                                            <td>6</td>
                                                                                            <td>7</td>
                                                                                            <td>8</td>
                                                                                            <td>9</td>
                                                                                            <td>10</td>
                                                                                            <td>11</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>23</td>
                                                                                            <td>22</td>
                                                                                            <td>21</td>
                                                                                            <td>20</td>
                                                                                            <td>19</td>
                                                                                            <td>18</td>
                                                                                            <td>17</td>
                                                                                            <td>16</td>
                                                                                            <td>15</td>
                                                                                            <td>14</td>
                                                                                            <td>13</td>
                                                                                            <td>12</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Format 24 jam (Converted):</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>0</td>
                                                                                            <td>1</td>
                                                                                            <td>2</td>
                                                                                            <td>3</td>
                                                                                            <td>4</td>
                                                                                            <td>5</td>
                                                                                            <td>6</td>
                                                                                            <td>7</td>
                                                                                            <td>8</td>
                                                                                            <td>9</td>
                                                                                            <td>10</td>
                                                                                            <td>11</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </li>
                                                                        <li>Hitung frekuensi kemunculan awal event per hari per cell-id (anchor)</li>
                                                                        <li>Hitung statistik rata-rata dan standar deviasi untuk jam terjadinya event, jumlah hari, dan jumlah kemunculan event. Perhitungan ini dilakukan untuk setiap anchor.</li>
                                                                    </ol>
                                                                </li>
                                                                <li>Menentukan kandidat usual environment dengan :
                                                                    <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                        <li>Hitung jarak antara anchor dan kandidat utama dengan menggunakan haversine distance.</li>
                                                                        <li>Filter anchor dengan jumlah hari yang muncul lebih dari atau sama dengan 5. Eliminasi anchor yang berdekatan dengan kandidat utama (di bawah 500 m).</li>
                                                                        <li>Pisahkan kejadian (event) yang ada hanya pada hari kerja dan ubah variabel waktu menjadi format 12 jam.</li>
                                                                        <li>Hitung frekuensi lokasi awal harian dari setiap titik lokasi (anchor), serta statistik rata-rata dan standar deviasi setiap jam kejadian, dan bentuk kandidat utamanya.</li>
                                                                        <li>Hitung jarak antara lokasi yang dipilih dengan lokasi kandidat utama, kemudian eliminasi lokasi yang berdekatan (berada di bawah 500 m) diikuti dengan mengurutkan lama kejadian yang lebih atau sama dengan 5 hari.</li>
                                                                    </ol>
                                                                </li>
                                                                <li>Pembentukan anchor point kedua dengan cara berikut.
                                                                    <ol class="list-styled mt-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                        <li>Hitung jumlah record (N_event), jumlah hari unik (N_date), serta rata-rata jam kejadian (AVG_hour) diikuti dengan standar deviasi jam kejadian (SD_hour) untuk setiap nomor/subscriber per bulannya.
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X Contoh Agregasi Penghitungan Anchor 1</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                                        <th scope="col">msisdn</th>
                                                                                        <th scope="col">year</th>
                                                                                        <th scope="col">month</th>
                                                                                        <th scope="col">latitude</th>
                                                                                        <th scope="col">longitude</th>
                                                                                        <th scope="col">idkab</th>
                                                                                        <th scope="col">N_event</th>
                                                                                        <th scope="col">N_date</th>
                                                                                        <th scope="col">AVG_hour</th>
                                                                                        <th scope="col">SD_hour</th>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.9201</td>
                                                                                            <td>107.5607</td>
                                                                                            <td>32|77</td>
                                                                                            <td>113</td>
                                                                                            <td>23</td>
                                                                                            <td>1.05</td>
                                                                                            <td>2.07</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.922</td>
                                                                                            <td>107.5559</td>
                                                                                            <td>32|77</td>
                                                                                            <td>46</td>
                                                                                            <td>22</td>
                                                                                            <td>3.83</td>
                                                                                            <td>3.03</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.9201</td>
                                                                                            <td>107.5607</td>
                                                                                            <td>32|77</td>
                                                                                            <td>155</td>
                                                                                            <td>19</td>
                                                                                            <td>3.6</td>
                                                                                            <td>3.55</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.922</td>
                                                                                            <td>107.5559</td>
                                                                                            <td>32|77</td>
                                                                                            <td>67</td>
                                                                                            <td>18</td>
                                                                                            <td>4.31</td>
                                                                                            <td>4.05</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-7.0282</td>
                                                                                            <td>107.5228</td>
                                                                                            <td>32|04</td>
                                                                                            <td>105</td>
                                                                                            <td>12</td>
                                                                                            <td>8.89</td>
                                                                                            <td>0.8</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </li>
                                                                        <li>Hitung jumlah kemunculan suatu lokasi, kandidat utama setidaknya muncul sebanyak lima hari setiap bulan.</li>
                                                                        <li>
                                                                            Potensi kandidat utama dilihat dengan mengelompokkan setiap lokasi yang ada. Mulanya, jarak antar lokasi dihitung dengan jarak Haversine, kemudian dikelompokkan lokasi-lokasi dengan radius jarak 0,5 km. Lokasi yang dianggap dekat dengan kandidat utama pada akhirnya dihilangkan dari calon lokasi usual environment.
                                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                                <p style="text-align: center; font-weight:bold">Tabel X Contoh Agregasi Penghitungan Anchor 2</p>
                                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                                        <tr>
                                                                                            <th scope="col">msisdn</th>
                                                                                            <th scope="col">year</th>
                                                                                            <th scope="col">month</th>
                                                                                            <th scope="col">latitude</th>
                                                                                            <th scope="col">longitude</th>
                                                                                            <th scope="col">idkab</th>
                                                                                            <th scope="col">N_event</th>
                                                                                            <th scope="col">N_date</th>
                                                                                            <th scope="col">AVG_hour</th>
                                                                                            <th scope="col">SD_hour</th>
                                                                                            <th scope="col">distance</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr style="background-color: greenyellow;">
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.9201</td>
                                                                                            <td>107.5607</td>
                                                                                            <td>32|77</td>
                                                                                            <td>113</td>
                                                                                            <td>23</td>
                                                                                            <td>1.05</td>
                                                                                            <td>2.07</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr style="background-color: red;">
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.922</td>
                                                                                            <td>107.5559</td>
                                                                                            <td>32|77</td>
                                                                                            <td>46</td>
                                                                                            <td>22</td>
                                                                                            <td>3.83</td>
                                                                                            <td>3.03</td>
                                                                                            <td>0.2</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.9201</td>
                                                                                            <td>107.5607</td>
                                                                                            <td>32|77</td>
                                                                                            <td>155</td>
                                                                                            <td>19</td>
                                                                                            <td>3.6</td>
                                                                                            <td>3.55</td>
                                                                                            <td>0.76</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-6.922</td>
                                                                                            <td>107.5559</td>
                                                                                            <td>32|77</td>
                                                                                            <td>67</td>
                                                                                            <td>18</td>
                                                                                            <td>4.31</td>
                                                                                            <td>4.05</td>
                                                                                            <td>17.22</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>msisdn00xxx</td>
                                                                                            <td>2022</td>
                                                                                            <td>1</td>
                                                                                            <td>-7.0282</td>
                                                                                            <td>107.5228</td>
                                                                                            <td>32|04</td>
                                                                                            <td>105</td>
                                                                                            <td>12</td>
                                                                                            <td>8.89</td>
                                                                                            <td>0.8</td>
                                                                                            <td>20.15</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <p class="mt-2">Baris berwarna hijau adalah kandidat utama. Baris berwarna merah dieliminasi karena berjarak kurang dari 0,5 km dari lokasi yang menjadi kandidat utama.</p>
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                                <li>Anchor hasil pengelompokkan lokasi dengan rata-rata jam kurang dari tujuh (AVG_hour < tujuh) akan diklasifikasikan sebagai calon lokasi rumah (home), sedangkan anchor lainnya dengan rata-rata jam lebih dari tujuh akan diklasifikasikan sebagai calon lokasi kantor (work). Pilih kandidat terkuat untuk lokasi rumah (home) dan kantor (work) dari setiap kelompok dengan urutan prioritas sebagai berikut : <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-roman; font-weight:normal; font-size:1rem">
                                                                <li>jumlah hari kejadian tertinggi (N_date)</li>
                                                                <li>lokasi dengan baris data terbanyak (N_event)</li>
                                                                <li>rata-rata jam tertinggi (AVG_hour), dan</li>
                                                                <li>standar deviasi jam terendah (SD_hour)</li>

                                                            </ol>
                                                        </li>
                                                        <li>Diperoleh lokasi prediksi lokasi rumah (home) dan kantor (work) yang ditunjukkan pada contoh tabel berikut.
                                                            <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                                <p style="text-align: center; font-weight:bold">Tabel X. Prediksi Lokasi Usual Environment</p>
                                                                <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto;">
                                                                    <thead style="color: #fff; font-weight:bold;">
                                                                        <tr>
                                                                            <th scope="col">msisdn</th>
                                                                            <th scope="col">year</th>
                                                                            <th scope="col">month</th>
                                                                            <th scope="col">latitude</th>
                                                                            <th scope="col">longitude</th>
                                                                            <th scope="col">idkab</th>
                                                                            <th scope="col">N_event</th>
                                                                            <th scope="col">N_date</th>
                                                                            <th scope="col">AVG_hour</th>
                                                                            <th scope="col">SD_hour</th>
                                                                            <th scope="col">label</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>msisdn00xxx</td>
                                                                            <td>2020</td>
                                                                            <td>1</td>
                                                                            <td>-6.25008</td>
                                                                            <td>106.9067</td>
                                                                            <td>31|72</td>
                                                                            <td>39</td>
                                                                            <td>22</td>
                                                                            <td>1.07</td>
                                                                            <td>1.96</td>
                                                                            <td>Home</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>msisdn00xxx</td>
                                                                            <td>2020</td>
                                                                            <td>1</td>
                                                                            <td>-7.0282</td>
                                                                            <td>107.5228</td>
                                                                            <td>32|04</td>
                                                                            <td>105</td>
                                                                            <td>12</td>
                                                                            <td>8.89</td>
                                                                            <td>0.8</td>
                                                                            <td>Work</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight:normal;">Kelompokkan subscriber dengan lokasi rumah tahunan (home yearly) yang sama. Lokasi home tahunan diperoleh dari modus lokasi home pada nomor tersebut selama rentang waktu bulan Desember 2021 sampai bulan November 2022. Pengelompokan dilakukan berdasarkan lokasi administratif setingkat provinsi, kemudian kabupaten/kota.</p>
                                                        <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; font-size:1rem">
                                                            <li>Jika didapati dua atau lebih modus home dengan lokasi yang berbeda, maka lokasi home ditentukan (secara berurutan) berdasarkan lokasi dengan jumlah hari kejadian tertinggi (N_date), lokasi dengan baris data terbanyak (N_event), lokasi dengan rata-rata jam tertinggi (AVG_hour), dan lokasi dengan standar deviasi jam terendah (SD_hour) diantara bulan-bulan yang menjadi modus lokasi home.</li>
                                                        </ol>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight:normal;">Hitung kecepatan antar dua record berurutan untuk setiap record, dan lakukan eliminasi pergerakan yang tidak wajar (kecepatan yang lebih dari 100 km/jam). Kecepatan yang tidak wajar disebabkan oleh adanya lag record.</p>
                                                        <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                            <p style="text-align: center; font-weight:bold">Tabel X Contoh Agregasi Penghitungan Anchor 2</c>
                                                            <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto; font-weight:normal">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="row">msisdn</th>
                                                                        <th scope="row">datetime</th>
                                                                        <th scope="row">source</th>
                                                                        <th scope="row">latitude</th>
                                                                        <th scope="row">longitude</th>
                                                                        <th scope="row">Jarak haversine (km)</th>
                                                                        <th scope="row">waktu (jam)</th>
                                                                        <th scope="row">Kecepatan (km/jam)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 6:16</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.26222</td>
                                                                        <td>106.97889</td>
                                                                        <td> </td>
                                                                        <td> </td>
                                                                        <td> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 6:31</td>
                                                                        <td>chg</td>
                                                                        <td>-6.26222</td>
                                                                        <td>106.97889</td>
                                                                        <td>0</td>
                                                                        <td>0.239167</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 7:21</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.20028</td>
                                                                        <td>106.80917</td>
                                                                        <td>19.98482</td>
                                                                        <td>0.833889</td>
                                                                        <td>23.965</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 7:34</td>
                                                                        <td>chg</td>
                                                                        <td>-6.20028</td>
                                                                        <td>106.80917</td>
                                                                        <td>0</td>
                                                                        <td>0.219722</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 9:24</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16333</td>
                                                                        <td>106.84</td>
                                                                        <td>5.338248</td>
                                                                        <td>1.834167</td>
                                                                        <td>2.9104</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 10:24</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16444</td>
                                                                        <td>106.83583</td>
                                                                        <td>0.477239</td>
                                                                        <td>1.001389</td>
                                                                        <td>0.4765</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 11:24</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16444</td>
                                                                        <td>106.83583</td>
                                                                        <td>0</td>
                                                                        <td>1.000556</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 13:24</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.20239</td>
                                                                        <td>106.819</td>
                                                                        <td>4.611796</td>
                                                                        <td>2.000833</td>
                                                                        <td>2.3049</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 13:35</td>
                                                                        <td>chg</td>
                                                                        <td>-6.20239</td>
                                                                        <td>106.819</td>
                                                                        <td>0</td>
                                                                        <td>0.184722</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 14:15</td>
                                                                        <td>chg</td>
                                                                        <td>-6.26222</td>
                                                                        <td>106.97889</td>
                                                                        <td>18.88454</td>
                                                                        <td>0.661111</td>
                                                                        <td>28.564</td>
                                                                    </tr>
                                                                    <tr style="background-color: red;">
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 14:25</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16333</td>
                                                                        <td>106.84</td>
                                                                        <td>18.88473</td>
                                                                        <td>0.172778</td>
                                                                        <td>109.30</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 15:25</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.16444</td>
                                                                        <td>106.83583</td>
                                                                        <td>0.477239</td>
                                                                        <td>1.000278</td>
                                                                        <td>0.4771</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 16:25</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25639</td>
                                                                        <td>106.94194</td>
                                                                        <td>15.56028</td>
                                                                        <td>1.000556</td>
                                                                        <td>15.551</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 16:36</td>
                                                                        <td>chg</td>
                                                                        <td>-6.25883</td>
                                                                        <td>106.94197</td>
                                                                        <td>0.271336</td>
                                                                        <td>0.187778</td>
                                                                        <td>1.4449</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>12/10/2021 17:26</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.26889</td>
                                                                        <td>106.98028</td>
                                                                        <td>4.379708</td>
                                                                        <td>0.833611</td>
                                                                        <td>5.2538</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight:normal;">Raw data (bukan data yang telah di preprocessing menggunakan AMDA) digunakan untuk analisis pada algoritma ini. Hal ini dikarenakan pada algoritma ini akan dianalisis untuk setiap event yang terjadi, termasuk juga pola perjalanan pelanggan (bukan hanya event yang terjadi setelah dilakukan eliminasi unusual speed < 10 km/jam)</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight:normal;">Bentuk staypoint dengan cara berikut.</p>
                                                        <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; font-size:1rem">
                                                            <li>Bagi hari menjadi dua interval, yakni waktu work pukul 7 pagi hingga 7 malam, dan waktu home dari pukul 7 malam hingga 7 pagi.</li>
                                                            <li>Di setiap interval, hitung jumlah kemunculan koordinat lokasi yang berbeda di setiap harinya untuk seluruh nomor. Koordinat-koordinat tersebut disebut sebagai anchor.</li>
                                                            <li>Anchor dengan frekuensi terbanyak dalam satu interval disebut sebagai kandidat utama dan secara otomatis akan menjadi staypoint.</li>
                                                            <li>Hitung jarak anchor lain dengan kandidat utama menggunakan jarak Haversine dan eliminasi anchor yang memiliki jarak kurang dari 500m dari kandidat utama.</li>
                                                            <li>Anchor yang tidak tereliminasi dibiarkan dan dijadikan staypoint baru.</li>
                                                        </ol>
                                                        <p style="font-weight:normal;">Sebagai contoh, kita akan menentukan staypoint berdasarkan data pada Tabel X.. Pertama-tama, data perlu dibagi menjadi dua interval berdasarkan waktu pencatatan (datetime). Interval 1 (07.00-18.59) dan Interval 2 (19.00-06.59). Pada interval 1, terdapat dua titik koordinat (anchor), yaitu koordinat 1 (-6.24925, 106.90133) yang direpresentasikan dengan baris warna kuning dan koordinat 2 (-6.2501, 106.90658) yang direpresentasikan dengan baris warna aqua. Koordinat 1 muncul sebanyak tiga kali dan koordinat 2 muncul sebanyak enam kali. Dengan begitu, koordinat 2 akan dijadikan sebagai kandidat utama.</p>
                                                        <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                            <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto; font-weight:normal">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">datetime</th>
                                                                        <th scope="col">msisdn</th>
                                                                        <th scope="col">source</th>
                                                                        <th scope="col">latitude</th>
                                                                        <th scope="col">longitude</th>
                                                                        <th scope="col">provinsi</th>
                                                                        <th scope="col">kabupaten</th>
                                                                        <th scope="col">interval</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody style="text-align: center;">
                                                                    <tr>
                                                                        <td>11/02/2021 01:09</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.24925</td>
                                                                        <td>106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td rowspan="4"><br>INTERVAL 2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 01:11</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.24925</td>
                                                                        <td>106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 03:10</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25010</td>
                                                                        <td>106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 05:13</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.24925</td>
                                                                        <td>106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 07:14</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td rowspan="9"><br><br>INTERVAL 1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 09:32</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 10:32</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: yellow;">-6.24925</td>
                                                                        <td style="background-color: yellow;">106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 11:10</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 12:47</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 13:12</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 15:10</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: yellow;">-6.24925</td>
                                                                        <td style="background-color: yellow;">106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 17:01</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: yellow;">-6.24925</td>
                                                                        <td style="background-color: yellow;">106.90133</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 17:13</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td style="background-color: aqua;">-6.25010</td>
                                                                        <td style="background-color: aqua;">106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 19:12</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25010</td>
                                                                        <td>106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                        <td rowspan="4"><br>INTERVAL 2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 20:42</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25010</td>
                                                                        <td>106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 21:03</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25010</td>
                                                                        <td>106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11/02/2021 23:07</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>upcc</td>
                                                                        <td>-6.25010</td>
                                                                        <td>106.90658</td>
                                                                        <td>DKI Jakarta</td>
                                                                        <td>Kota Jakarta Timur</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <p style="font-weight:normal;">Jarak haversine antara koordinat 1 (-6.24925, 106.90133) dan koordinat 2 (-6.2501, 106.90658) adalah sebesar 0.59 km. Oleh karena jarak koordinat 2 (sebagai anchor lainnya) terhadap koordinat 1 (sebagai kandidat utama) lebih dari 0,5 km (500 m), maka koordinat 2 tidak akan dieliminasi dan akan dijadikan sebagai staypoint. Sehingga pada interval 1, terdapat 2 staypoint yaitu koordinat 1 (-6.24925, 106.90133) dan koordinat 2 (-6.2501, 106.90658).</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Ekstraksi lintasan spasial untuk setiap nomor dalam rentang waktu periode analisis (Desember 2021-November 2022). Lintasan spasial terdiri dari sekumpulan list staypoint yang terurut berdasarkan datetime.</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Lintasan spasial dimulai dari staypoint pertama yang menunjukkan lokasi home dari nomor tersebut dan diakhiri dengan staypoint terakhir yang menunjukkan lokasi home dari nomor tersebut. Berikut adalah contoh proses ekstraksi lintasan spasial pada salah satu nomor (msisdn).</p>
                                                        <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                            <p style="text-align: center; font-weight:bold">Tabel X. Lokasi Home msisdn00xxx Untuk Setiap Bulan</p>
                                                            <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto; font-weight:normal; text-align:center;">
                                                                <thead style="color: #fff; font-weight:bold; background-color:yellow;">
                                                                    <tr>
                                                                        <th>event_month</th>
                                                                        <th>msisdn</th>
                                                                        <th>provider</th>
                                                                        <th>home_prov</th>
                                                                        <th>home_kab</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>12</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>LUMAJANG</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>LUMAJANG</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>JEMBER</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>JEMBER</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>JEMBER</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>JEMBER</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>6</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>JEMBER</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>7</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>JEMBER</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>8</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>JAWA TIMUR</td>
                                                                        <td>JEMBER</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>9</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>DKI JAKARTA</td>
                                                                        <td>JAKARTA TIMUR</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>10</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>DKI JAKARTA</td>
                                                                        <td>JAKARTA TIMUR</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11</td>
                                                                        <td>msisdn00xxx</td>
                                                                        <td>Telkomsel</td>
                                                                        <td>DKI JAKARTA</td>
                                                                        <td>JAKARTA TIMUR</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Bangun matriks jarak Frechet dari list lintasan spasial setiap nomor pada kelompok yang sama. Sehingga nantinya ukuran matriks yang terbentuk adalah m x m, dimana m adalah banyaknya nomor yang berada di kelompok yang sama.</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Bangun matriks jarak Frechet dari list lintasan spasial setiap nomor pada kelompok yang sama. Sehingga nantinya ukuran matriks yang terbentuk adalah m x m, dimana m adalah banyaknya nomor yang berada di kelompok yang sama.</p>
                                                        <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
                                                            <table class="table table-hover table-bordered table-responsive mt-3" style="width:100%;overflow-x:auto; font-weight:normal; text-align:center;">
                                                                <caption style="text-align: center; font-size:0.75rem;">The final Frechet matrix derives from the distance matrix. As always, the distance between the two polylines is in the lower-left-hand coorner element.</capti>
                                                                <thead style="color: #fff; font-weight:bold; background-color:yellow;">
                                                                    <tr>
                                                                        <th scope="col"></th>
                                                                        <th scope="col">0</th>
                                                                        <th scope="col">1</th>
                                                                        <th scope="col">2</th>
                                                                        <th scope="col">3</th>
                                                                        <th scope="col">4</th>
                                                                        <th scope="col">5</th>
                                                                        <th scope="col">6</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="background-color: #506396; color:white">0</td>
                                                                        <td>0.41231</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="background-color: #506396; color:white">1</td>
                                                                        <td>1.69706</td>
                                                                        <td>1.71172</td>
                                                                        <td>2.50799</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="background-color: #506396; color:white">2</td>
                                                                        <td>2.00000</td>
                                                                        <td>1.69706</td>
                                                                        <td>1.69706</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="background-color: #506396; color:white">3</td>
                                                                        <td>2.60768</td>
                                                                        <td>1.69706</td>
                                                                        <td>1.69706</td>
                                                                        <td>2.64197</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="background-color: #506396; color:white">4</td>
                                                                        <td></td>
                                                                        <td>1.69706</td>
                                                                        <td>1.69706</td>
                                                                        <td>1.69706</td>
                                                                        <td>2.41868</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="background-color: #506396; color:white">5</td>
                                                                        <td></td>
                                                                        <td>2.40208</td>
                                                                        <td>2.10950</td>
                                                                        <td>1.69706</td>
                                                                        <td>1.69706</td>
                                                                        <td>2.52389</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="background-color: #506396; color:white">6</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>1.69706</td>
                                                                        <td>1.69706</td>
                                                                        <td>1.83848</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="background-color: #506396; color:white">7</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>2.40416</td>
                                                                        <td>1.69706</td>
                                                                        <td>1.69706</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Setelah membangun matriks jarak, sekarang kita dapat menentukan fungsi warping yang akan digunakan untuk menemukan jalur warping yang optimal di seluruh matriks jarak. Fungsi warping akan mengambil matriks jarak terakumulasi sebagai input dan akan mengembalikan daftar pasangan indeks yang mewakili jalur warping optimal.</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Agar lebih sederhana, kita dapat mengilustrasikan matriks jarak sebagai confusion matrix di mana sel yang lebih gelap mewakili nilai tinggi sedangkan sel yang lebih terang mewakili nilai kecil. Berikut adalah contoh yang menunjukkan jalur warping yang optimal di sepanjang matriks jarak</p>
                                                        <p style="color: red;">GAMBAR</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Tentukan epsilon untuk DBSCAN Clustering dengan mengikuti algoritma hasil penelitian Elbatta tahun 2012 sebagai berikut.</p>
                                                        <ol class="list-styled mt-3 mb-3" style="text-align:justify; list-style-type:lower-latin; font-weight:normal; font-size:1rem">
                                                            <li>Hitung jarak haversine pada setiap pasangan data latitude dan longitude.</li>
                                                            <li>Bangun matriks utuh dari jarak yang sudah dihitung.</li>
                                                            <li>Lakukan normalisasi untuk mempermudah pencarian k tetangga terdekat pada setiap baris perhitungan jarak.</li>
                                                            <li>Lakukan inialisasi untuk menghitung jumlah baris data pada matriks.</li>
                                                            <li>Selanjutnya, pencarian dilakukan untuk k tetangga terdekat dari setiap baris matriks dengan mengurutkannya secara ascending untuk setiap hasil jarak terdekat.</li>
                                                            <li>Pengurutan hasil setiap baris yang merepresentasikan jarak tetangga terdekat digunakan untuk membuat plot dengan sumbu x adalah jumlah objek dan sumbu y adalah jarak k tetangga terdekat.</li>
                                                            <li>Dari plot yang terbentuk, selanjutnya dihitung perbedaan kemiringan garis untuk mendapatkan nilai Eps. Titik yang memiliki perubahan pada kemiringan plot akan menjadi nilai Eps optimal yang signifikan.</li>
                                                            <p class="mt-3" style="font-weight: bold; text-align:center">Gambar X. Sebaran Heksagon msisdn00xxx1</p>
                                                            <p style="color: red;">GAMBAR</p>
                                                        </ol>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Setelah nilai eps ditentukan, maka proses clustering trajectories (lintasan) menggunakan DBSCAN dapat dilakukan, dengan input parameternya berupa:</p>
                                                        <ul class="list-style">
                                                            <li>distance_matrix = matrix distance yang sudah dibangun menggunakan DTW atau Frechet Distance</li>
                                                            <li>epsilon (eps) = nilai eps terbaik yang telah ditentukan</li>
                                                            <li>min_samples = 1, untuk memastikan semua lintasan dikelompokkan menjadi sebuah cluster.</li>
                                                        </ul>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Hasil clustering DBSCAN akan menunjukkan beberapa klaster lintasan (trajectories), dimana lintasan-lintasan yang berada di dalam satu klaster memiliki kemiripan path satu sama lain.</p>
                                                    </li>
                                                    <li class="text-justify" style="font-size: 1.2rem; font-weight:bold">
                                                        <p style="font-weight: normal;">Jika terdapat lebih dari dua nomor dalam satu klaster, bandingkan jarak DTW antara dua nomor dalam klaster tersebut. Jarak DTW terkecil antara dua nomor mengindikasikan adanya double counting, yakni kedua nomor tersebut dimiliki oleh satu entitas.</p>
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
                <div class="isi-tujuan shadow mt-5 mb-0">
                    <h4 class="card-title judul-card">Ketentuan</h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card shadow rounded-4">
                                    <div class="pb-2 card-body">
                                        <div class="row">
                                            <div class="mb-0 col-lg-12 grid-margin">
                                                <div class="pr-3 pl-3">
                                                    <ul class="list-styled">
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Menerapkan konsep penghitungan jarak haversine yang sama persis dengan algoritma double counting.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Bedanya algoritma FG diterapkan pada hari weekend (Sabtu-Minggu) atau bisa juga pada hari-hari libur lainnya seperti liburan semester, liburan natal dan tahun baru (nataru), libur lebaran dll.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Hal ini didasarkan pada karakteristik anggota rumah tangga yang lebih sering menghabiskan waktu dirumah atau berpergian ke tempat wisata secara bersama-sama ketika weekend atau liburan.</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Periode analisis dalam algoritma FG adalah selama setahun (Des 2021 - Nov 2022)</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Pengelompokkan tahap 1 berdasarkan lokasi home yang sama menggunakan metode AMDA tetap dilakukan pada hari-hari weekdays (hanya pada step ini menggunakan weekdays, selebihnya menggunakan weekend).</p>
                                                        </li>
                                                        <li class="text-justify" style="font-size: 1.25rem; font-weight:bold">
                                                            <p style="font-weight:normal;">Perbedaan selanjutnya adalah:</p>
                                                            <ol style="font-weight:normal; text-align:justify;">
                                                                <li>Hasil clustering tidak perlu dihitung lagi DTW atau Frechet Distancenya, melainkan sudah langsung dianggap sebagai nomor-nomor family grouping jika berada di klaster yang sama.</li>
                                                            </ol>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="isi-tujuan shadow mt-5 mb-0">
                    <h4 class="card-title judul-card">Evaluasi</h4>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 grid-margin stretch-card h-100">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div class="chartBox">
                                            <canvas class="mt1" id="fg_algoritma3_1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card h-100">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div class="chartBox">
                                            <canvas class="mt1" id="fg_algoritma3_2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card h-100">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div class="chartBox">
                                            <canvas class="mt1" id="fg_algoritma3_3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card h-100">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <div class="chartBox">
                                            <canvas class="mt1" id="fg_algoritma3_4"></canvas>
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