<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container" data-aos="fade-up">

    <br><br>
    <header class="section-header">
      <p>Pilot Survei Wisatawan Nusantara</p>
    </header>
    <hr class="hrjudul">

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-riset2-hasil1">Hasil 1</li>
          <li data-filter=".filter-riset2-hasil2">Hasil 2</li>
          <li data-filter=".filter-riset2-hasil3">Hasil 3</li>
          <li data-filter=".filter-riset2-tabel">Tabel dummy</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
      <?php include('dummy_riset2.php') ?>
    </div>
</section>
<script>
    var map = L.map('map').setView([51.505, -0.09], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);

</script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
</script>

<script>
    const datajeniskelamin = <?= json_encode($jk);?>;
    const datajenispekerjaanutama = <?= json_encode($jpu); ?>;
    // const hasil1 =  ?>;
</script>

<script src="<?= base_url('pvd/js/riset2/hasilSPRiset2_jk_bar.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset2/hasilSPRiset2_jpu_barhorizontal.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset2/hasilSPRiset2_pw_sankey.js') ?>"></script>
<script src="<?= base_url('assets/PVD/js/main.js') ?>"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

<!-- for download chart -->
<script src="<?= base_url('pvd/js/riset2/btn_Download.js') ?>"></script>
<!-- </section> End Portfolio Section -->

<?= $this->endSection(); ?>