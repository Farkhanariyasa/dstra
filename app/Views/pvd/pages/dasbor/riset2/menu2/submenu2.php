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

<!-- <h1>Menu 2 submenu 2</h1> -->
<header class="section-header">
  <h6 style="color: #4b395f;"><strong>Pilot Survei Wisatawan Nusantara</strong>
  </h6>
</header>
<hr class="hrjudul">

<div class="card">
  <div class="card-header">
    <strong>Jumlah Usaha Pariwisata Berdasarkan Sektor Usaha</strong>
    <!-- <button type="button" class="tombol btn-for text-right me-1 mt-1 justify-content-end align-item-end" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                            <i class="fa-solid fa-download"></i>
   </button> -->
  </div>
  <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
    <!-- style="padding:0px 0px 0px 0px;" -->
    <!-- <blockquote class="blockquote mb-0"> -->
        <table class="table table-hover table-bordered table-responsive">
        <thead style="color: #fff; font-weight:bold;">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Kecamatan</th>
                <th scope="col">Desa/Kelurahan</th>
                <th scope="col">Jumlah Usaha Pariwisata</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Batu</td>
                <td>Batu</td>
                <td>100</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Junrejo</td>
                <td>Oro-oro Ombo</td>
                <td>100</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Bumiaji</td>
                <td>Tulungrejo</td>
                <td>100</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Batu</td>
                <td>Batu</td>
                <td>100</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Junrejo</td>
                <td>Oro-oro Ombo</td>
                <td>100</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Bumiaji</td>
                <td>Tulungrejo</td>
                <td>100</td>
            </tr>            <tr>
                <th scope="row">1</th>
                <td>Batu</td>
                <td>Batu</td>
                <td>100</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Junrejo</td>
                <td>Oro-oro Ombo</td>
                <td>100</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Bumiaji</td>
                <td>Tulungrejo</td>
                <td>100</td>
        </tbody>
        </table>
    <!-- </blockquote> -->
  </div>
</div>

<?= $this->endSection(); ?>

