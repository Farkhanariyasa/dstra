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
  <h6 style="color: #4b395f;"><strong>Kajian Pemanfaatan MPD dalam Menunjang Statistik Pariwisata</strong>
  </h6>
</header>
<hr class="hrjudul">

<div class="card">
  <div class="card-header">
    <div class="card-title text-center mt-2">Data Responden Hasil Survei Pendahuluan Riset 1</div>
    <!-- <button type="button" class="tombol btn-for text-right me-1 mt-1 justify-content-end align-item-end" data-bs-toggle="modal" data-bs-target="#exampleModal4-doughnut">
                            <i class="fa-solid fa-download"></i>
   </button> -->
  </div>
  <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
    <!-- style="padding:0px 0px 0px 0px;" -->
    <!-- <blockquote class="blockquote mb-0"> -->
    <table class="table table-hover table-bordered table-responsive" id="table_id" style="width:100%">
      <thead style="color: #fff; font-weight:bold;">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama</th>
          <th scope="col">Desa/Kelurahan</th>
          <th scope="col">Kecamatan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        foreach ($dataresponden as $v) :
        ?>
          <tr>
            <th scope="row"><?php echo $i; ?></th>
            <td><?php echo $v["b108"]; ?></td>
            <td><?php echo $v["b104_deskel"]; ?></td>
            <td><?php echo $v["b103_kec"]; ?></td>
          </tr>
        <?php
          $i++;
        endforeach;
        ?>
      </tbody>
    </table>
    <!-- </blockquote> -->
  </div>
</div>
<!-- Datatable Instal -->
<script src="<?= base_url('pvd/js/datatables_install.js'); ?>"></script>
<?= $this->endSection(); ?>