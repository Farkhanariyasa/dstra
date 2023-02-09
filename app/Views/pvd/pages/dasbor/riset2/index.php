<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <p>Pilot Survei Wisatawan Nusantara</p>
    </header>
    
    <hr class="hrjudul">

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-riset2-hasil1">Hasil 1</li>
          <li data-filter=".filter-riset2-hasil2">Hasil 2</li>
          <li data-filter=".filter-riset2-hasil3">Hasil 3</li>
          <li data-filter=".filter-riset2-peta">Peta Lokus</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" >
      <?php include('dummy_riset2.php') ?>
    </div>
  </div>
</section>

<script>
    const datajeniskelamin = <?= json_encode($jk);?>;
    const datajenispekerjaanutama = <?= json_encode($jpu); ?>;
    const datapendidikantertinggi_riset2 = <?= json_encode($pt_2); ?>;
</script>

<script src="<?= base_url('pvd/js/riset2/hasilSPRiset2_jk_bar.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset2/hasilSPRiset2_barhorizontal.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset2/hasilSPRiset2_pw_sankey.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset2/hasilSPRiset2_peta.js') ?>"></script>


<!-- for download chart -->
<script src="<?= base_url('pvd/js/riset2/btn_Download.js') ?>"></script>

<!-- form validation -->
<script src="email.js"></script>

<?= $this->endSection(); ?>