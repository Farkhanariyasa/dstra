
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
          <li data-filter=".filter-riset4-hasil1">Pie Chart</li>
          <li data-filter=".filter-riset4-hasil2">BoxPlot</li>
          <li data-filter=".filter-riset4-hasil3">Pie Chart (2)</li>
          <li data-filter=".filter-riset4-hasil4">Scatter Plot</li>
          <li data-filter=".filter-riset4-hasil5">Bar Plot</li>
          <li data-filter=".filter-riset4-hasil6">Heat Map</li>
          <li data-filter=".filter-riset4-hasil7">Peta Batu</li>
        </ul>
      </div>
    </div>

    <!-- Kotak-Kotak Grafik Kosong -->
    <!-- <div class="row">
      <div class="col-sm-6 my-2">
        <div class="card">
          <div class="card-body">
            <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 my-2">
        <div class="card">
          <div class="card-body">
            <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 my-2">
        <div class="card">
          <div class="card-body">
            <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 my-2">
        <div class="card">
          <div class="card-body">
            <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 my-2">
        <div class="card">
          <div class="card-body">
            <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 my-2">
        <div class="card">
          <div class="card-body">
            <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
          </div>
        </div>
      </div>
      
      <div class="col-sm-6 my-2">
        <div class="card">
          <div class="card-body">
            <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 my-2">
        <div class="card">
          <div class="card-body">
            <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 my-2">
        <div class="card">
          <div class="card-body">
            <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 my-2">
        <div class="card">
          <div class="card-body">
            <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 my-2">
        <div class="card">
          <div class="card-body">
            <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 my-2">
        <div class="card">
          <div class="card-body">
            <p class="card-text text-center">Grafik<br><br><br><br><br><br><br><br><br><br><br></p>
          </div>
        </div>
      </div>
    </div> -->

    <div class="row portfolio-container" >
      <?php include('dummy_riset4.php') ?>
    </div>
  </div>
</section>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- boxplot -->
<script src="https://unpkg.com/@sgratzl/chartjs-chart-boxplot"></script>

<!-- heatmap -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/heatmap.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<!-- const for chart -->
<script>
  const unitUsahaTIK = <?= json_encode($uu) ?>;
  const pendapatan = <?= json_encode($pd) ?>;
  const b401a = <?= json_encode($b401a) ?>;
  const b407a = <?= json_encode($b407a) ?>;
  const umur = <?= json_encode($umur) ?>;
  const pendapatanNoFilter = <?= json_encode($pdnf) ?>;

</script>

<!-- chart -->
<script src = "<?= base_url('pvd/js/riset4/hasilRiset4_map.js') ?>"></script>
<script src = "<?= base_url('pvd/js/riset4/hasilSPRiset4_uu_pie.js') ?>"></script>
<script src = "<?= base_url('pvd/js/riset4/hasilSPRiset4_pd_box.js') ?>"></script>
<script src = "<?= base_url('pvd/js/riset4/hasilSPRiset4_scatter.js') ?>"></script>
<script src = "<?= base_url('pvd/js/riset4/hasilSPRiset4_b401a_pie.js') ?>"></script>
<script src = "<?= base_url('pvd/js/riset4/hasilSPRiset4_b407a_bar.js') ?>"></script>
<script src = "<?= base_url('pvd/js/riset4/hasilSPRiset4_heatmap.js') ?>"></script>


<!-- for download chart -->
<script src="<?= base_url('pvd/js/riset4/btn_Download.js') ?>"></script>

</section><!-- End -->

<?= $this->endSection(); ?>

