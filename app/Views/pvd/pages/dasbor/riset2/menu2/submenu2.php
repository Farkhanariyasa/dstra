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

<h2>Kuesioner Listing</h2>
<div class="tab-pane active p-2" id="tab1" role="tabpanel" aria-labelledby="tab-1" style="height: auto;">
    <div class="row">
        <div style="width: 100%;">
            <embed src="https://drive.google.com/file/d/1jfvZHFY-ovdka5aRW413RVrplv6zWD0u/preview" type="application/pdf" width=100% height="600px" />
        </div>
    </div>
</div>


<h2>Kuesioner Pencacahan</h2>
<div class="tab-pane active p-2" id="tab1" role="tabpanel" aria-labelledby="tab-1" style="height: auto;">
    <div class="row">
        <div style="width: 100%;">
            <embed src="https://drive.google.com/file/d/1R0pWJ2IbRJr9GJsCkdRzKq_FzCkRN3ox/preview" type="application/pdf" width=100% height="600px" />
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

