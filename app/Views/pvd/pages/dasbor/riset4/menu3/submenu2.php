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
    <strong>Tabulasi Unit Usaha Pariwisata Berdasarkan Skala Usaha</strong>
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
        <th colspan="6">Jenis Unit Usaha Pariwisata</th>
        <th rowspan="3">Total</th>
      </tr>
      <tr>
        <th colspan="2">Jasa Transportasi Wisata</th>
        <th colspan="2">Jasa Penyediaan Makanan dan Minuman</th>
        <th colspan="2">Penyediaan Akomodasi</th>
      </tr>
      <tr>
        <th>Mikro</th>
        <th>Kecil</th>
        <th>Mikro</th>
        <th>Kecil</th>
        <th>Mikro</th>
        <th>Kecil</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td rowspan="8">Batu</td>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td rowspan="7">Batu</td>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td rowspan="9">Batu</td>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr>
        <td>Ngaglik</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td>    
      </tr>
      <tr style="font-weight: bold;">
        <td colspan=2 class="text-center">Total</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>10</td>
        <td>60</td> 
        <td>60</td> 
      </tr>
      </tbody>
    </table>
    </div>
</div>
<?= $this->endSection(); ?>

