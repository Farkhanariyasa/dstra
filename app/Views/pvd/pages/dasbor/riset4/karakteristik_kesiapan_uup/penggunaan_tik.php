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

  /* .card .card-body {
    padding: 0.5rem 1rem;
  } */

  /* table {
    table-layout: fixed;
  } */
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<header class="section-header">
  <h6 style="color: #4b395f;"><strong>Kesiapan Pemanfaatan TIK Unit Usaha Pariwisata Skala Mikro dan Kecil di Kota Batu dalam Menerapkan
      <i>Smart Tourism Destination</i></strong>
  </h6>
</header>
<hr class="hrjudul">

<div class="card">
  <div class="card-header">
    <strong>Tabulasi Unit Usaha Pariwisata Berdasarkan Penggunaan TIK dalam Pencatatan Keuangan</strong>
    <!-- <button type="button" class="tombol btn-for text-right me-1 mt-1 justify-content-end align-item-end" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                            <i class="fa-solid fa-download"></i>
   </button> -->
  </div>
  <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
    <!-- style="padding:0px 0px 0px 0px;" -->
    <!-- <blockquote class="blockquote mb-0"> -->
    <table class="table table-hover table-bordered table-responsive" style="width:100%">
      <thead style="color: #fff;  font-weight:bold; text-align:center;">
      <tr>
        <th rowspan="3">Kecamatan</th>
        <th rowspan="3">Desa/Kelurahan</th>
        <th colspan="12">Jenis Unit Usaha Pariwisata</th>
        <th rowspan="3">Total</th>
      </tr>
      <tr>
        <th colspan="4">Jasa Transportasi Wisata</th>
        <th colspan="4">Jasa Penyediaan Makanan dan Minuman</th>
        <th colspan="4">Penyediaan Akomodasi</th>
      </tr>
      <tr>
        <th>[1]</th>
        <th>[2]</th>
        <th>[3]</th>
        <th>[4]</th>
        <th>[1]</th>
        <th>[2]</th>
        <th>[3]</th>
        <th>[4]</th>
        <th>[1]</th>
        <th>[2]</th>
        <th>[3]</th>
        <th>[4]</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td rowspan="8">Batu</td>
        <td>Oro-oro Ombo</td>
        <td>9</td>
        <td>0</td>
        <td>2</td>
        <td>2</td>
        <td>35</td>
        <td>3</td>
        <td>2</td>
        <td>3</td>
        <td>19</td>
        <td>2</td>
        <td>1</td>
        <td>1</td>
        <td>79</td>    
      </tr>
      <tr>
        <td>Temas</td>
        <td>12</td>
        <td>0</td>
        <td>1</td>
        <td>4</td>
        <td>68</td>
        <td>7</td>
        <td>3</td>
        <td>1</td>
        <td>4</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>100</td>    
      </tr>
      <tr>
        <td>Sisir</td>
        <td>21</td>
        <td>1</td>
        <td>1</td>
        <td>13</td>
        <td>115</td>
        <td>11</td>
        <td>5</td>
        <td>6</td>
        <td>8</td>
        <td>0</td>
        <td>3</td>
        <td>2</td>
        <td>186</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>6</td>
        <td>0</td>
        <td>5</td>
        <td>5</td>
        <td>86</td>
        <td>5</td>
        <td>7</td>
        <td>3</td>
        <td>3</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>121</td>    
      </tr>
      <tr>
        <td>Pesanggrahan</td>
        <td>9</td>
        <td>1</td>
        <td>0</td>
        <td>2</td>
        <td>34</td>
        <td>1</td>
        <td>1</td>
        <td>2</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>51</td>    
      </tr>
      <tr>
        <td>Songgokerto</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>1</td>
        <td>18</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>19</td>
        <td>3</td>
        <td>0</td>
        <td>0</td>
        <td>42</td>    
      </tr>
      <tr>
        <td>Sumberejo</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>1</td>
        <td>17</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>1</td>
        <td>20</td>    
      </tr>
      <tr>
        <td>Sidomulyo</td>
        <td>4</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>18</td>
        <td>4</td>
        <td>0</td>
        <td>1</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>30</td>    
      </tr>
      <tr>
        <td rowspan="7">Junrejo</td>
        <td>Tlekung</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>    
      </tr>
      <tr>
        <td>Junrejo</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>13</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>14</td>    
      </tr>
      <tr>
        <td>Mojorejo</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
        <td>1</td>
        <td>10</td>
        <td>0</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>14</td>    
      </tr>
      <tr>
        <td>Torongrejo</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>8</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>11</td>    
      </tr>
      <tr>
        <td>Beji</td>
        <td>7</td>
        <td>0</td>
        <td>0</td>
        <td>2</td>
        <td>29</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>40</td>    
      </tr>
      <tr>
        <td>Pendem</td>
        <td>10</td>
        <td>1</td>
        <td>3</td>
        <td>8</td>
        <td>49</td>
        <td>7</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>79</td>    
      </tr>
      <tr>
        <td>Dadaprejo</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
        <td>2</td>
        <td>18</td>
        <td>2</td>
        <td>1</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>26</td>    
      </tr>
      <tr>
        <td rowspan="9">Bumiaji</td>
        <td>Pandanrejo</td>
        <td>3</td>
        <td>0</td>
        <td>1</td>
        <td>3</td>
        <td>32</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>42</td>    
      </tr>
      <tr>
        <td>Bumiaji</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>2</td>
        <td>3</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>8</td>    
      </tr>
      <tr>
        <td>Bulukerto</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>4</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>4</td>    
      </tr>
      <tr>
        <td>Gunungsari</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>7</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>8</td>    
      </tr>
      <tr>
        <td>Punten</td>
        <td>4</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>18</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>26</td>    
      </tr>
      <tr>
        <td>Tulungrejo</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>5</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>6</td>    
      </tr>
      <tr>
        <td>Sumbergondo</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>    
      </tr>
      <tr>
        <td>Giripurno</td>
        <td>4</td>
        <td>1</td>
        <td>1</td>
        <td>2</td>
        <td>7</td>
        <td>3</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>18</td>    
      </tr>
      <tr>
        <td>Sumber Brantas</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>    
      </tr>
      <tr style="font-weight: bold;">
        <td colspan=2 class="text-center">Total</td>
        <td>96</td>
        <td>5</td>
        <td>14</td>
        <td>49</td>
        <td>594</td>
        <td>51</td>
        <td>19</td>
        <td>21</td>
        <td>61</td>
        <td>6</td>
        <td>5</td>
        <td>4</td> 
        <td>925</td> 
      </tr>
      </tbody>
    </table>
    </div>
    <div class="card-body" style="padding: 0.5rem 1rem;">
      <p>
        Keterangan:<br>	
        [1]	Tidak memanfaatkan TIK sama sekali<br>
        [2]	Sudah memanfaatkan, namun lebih banyak dilakukan secara konvensional<br>
        [3]	Sebagian besar aktivitas pencatatan keuangan sudah memanfaatkan TIK<br>
        [4]	Semua aktivitas pencatatan keuangan sudah memanfaatkan TIK<br>
      </p>
    </div>
</div>
<?= $this->endSection(); ?>

