
<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>



<section id="portfolio" class="portfolio section-bg">
  <div class="container" >
    <br><br>
      <header class="section-header">
        <p>Kesiapan Usaha Pariwisata Kota Batu dalam Mewujudkan Smart Tourism Destination Pasca Pandemi Covid-19</p>
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
      <?php include('dummy_riset4.php') ?>
    </div>
  </div>
  

</section>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- const for chart -->
<script>

</script>

<!-- chart -->
<script src = "<?= base_url('pvd/js/riset4/hasilRiset4_map.js') ?>"></script>

<!-- for download chart -->
<script src="<?= base_url('pvd/js/riset4/btn_Download.js') ?>"></script>

</section><!-- End -->

<?= $this->endSection(); ?>

