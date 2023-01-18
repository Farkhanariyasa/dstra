<?= $this->include('pvd/layout/dasbor/header'); ?>
<?= $this->include('pvd/layout/dasbor/navbar'); ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <?= $this->include('pvd/layout/dasbor/sidebar'); ?>
  <div class="main-panel">
    <div class="content-wrapper">
      <?= $this->renderSection('content'); ?>
    </div>
    <?= $this->include('pvd/layout/dasbor/footer'); ?>