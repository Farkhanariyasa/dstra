<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>



<section id="portfolio" class="portfolio section-bg">
  <div class="container" >
    <br><br>
      <header class="section-header">
        <p>Tenaga Kerja di Industri Pariwisata</p>
      </header>
    <hr class="hrjudul">

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center" >
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-riset3-hasil1">Hasil 1</li>
          <li data-filter=".filter-riset3-hasil2">Hasil 2</li>
          <li data-filter=".filter-riset3-hasil3">Hasil 3</li>
          <li data-filter=".filter-riset3-tabeldummy">Hasil 4</li>

        </ul>
      </div>
    </div>
    <div class="row portfolio-container" >
      <?php include('dummy_riset3.php') ?>
    </div>
  </div>
  

</section>
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
    var map = L.map('map').setView([51.505, -0.09], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
    } );
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- const for chart -->
<script>
    const datajenisindustri = <?= json_encode($ji);?>;
    const datapendidikantertinggi = <?= json_encode($pt);?>;
    const datajeniskelamin_riset3 = <?= json_encode($jk_1);?>;
</script>

<!-- chart -->
<!-- <script src="<?= base_url('pvd/js/riset3/hasilSPRiset3_ji_bar.js') ?>"></script> -->
<script src="<?= base_url('pvd/js/riset3/hasilSPRiset3_ji_pie.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset3/hasilSPRiset3_ji_doughnut.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset3/hasilSPRiset3_pt_bar.js') ?>"></script>


<!-- <script src="<?= base_url('pvd/js/riset3/bar.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset3/pie.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset3/doughnut.js') ?>"></script> -->

<script src="<?= base_url('assets/PVD/js/main.js') ?>"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

<!-- for download chart -->
<script src="<?= base_url('pvd/js/riset3/btn_Download.js') ?>"></script>

<!-- form validation -->
<script src="email.js"></script>

</section><!-- End -->

<?= $this->endSection(); ?>

