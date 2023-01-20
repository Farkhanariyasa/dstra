<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>



<section id="portfolio" class="portfolio section-bg">
  <div class="container" >
      <header class="section-header">
        <p>Kajian Pemanfaatan MPD dalam Menunjang Statistik Pariwisata</p>
      </header>
    <hr class="hrjudul">

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center" >
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-riset1-hasil1">Hasil 1</li>
          <li data-filter=".filter-riset1-hasil2">Hasil 2</li>
          <li data-filter=".filter-riset1-hasil3">Hasil 3</li>
          <li data-filter=".filter-riset1-hasil4">Hasil 4</li>
          <li data-filter=".filter-riset1-peta">Peta Lokus</li>
          <li data-filter=".filter-riset1-tabeldummy">Tabel Dummy</li>

        </ul>
      </div>
    </div>
    <div class="row portfolio-container" >
      <?php include('dummy_riset1.php') ?>
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
    const jumlahanggota = <?= json_encode($ja) ?>;
    const jeniskelamin = <?= json_encode($jk) ?>;
    const mpw1 = <?= json_encode($b524) ?>;
    const mpw2 = <?= json_encode($b525) ?>;
    const mpw3 = <?= json_encode($b526) ?>;
    const mpw4 = <?= json_encode($b527) ?>;
    const mpw5 = <?= json_encode($b528) ?>;
    const mpw6 = <?= json_encode($b529) ?>;
    const indosat = <?= json_encode($indosat) ?>;
    const xl = <?= json_encode($xl) ?>;
    const tri = <?= json_encode($tri) ?>;
    const smartfren = <?= json_encode($smartfren) ?>;
    const lainnya = <?= json_encode($lainnya) ?>;
</script>

<!-- chart -->
<script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_ja_pie.js') ?>"></script>
<!-- <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_jk_bar.js') ?>"></script> -->
<script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_mpw_bar.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_simcard.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_stacked_bar.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_peta.js') ?>"></script>



<script src="<?= base_url('assets/PVD/js/main.js') ?>"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

<!-- for download chart -->
<script src="<?= base_url('pvd/js/riset1/btnDownload.js') ?>"></script>

<!-- form validation -->
<script src="email.js"></script>

</section><!-- End -->

<?= $this->endSection(); ?>

