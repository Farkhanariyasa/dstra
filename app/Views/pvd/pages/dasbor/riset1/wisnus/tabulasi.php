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
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<header class="section-header">
      <p style="color: #4b395f;">
          Kajian Pemanfaatan MPD dalam Menunjang Statistik Pariwisata
      </p>
    </header>
<hr class="hrjudul">

<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <!-- <li data-filter="*">Semua</li> -->
                    <li data-filter=".filter-riset2-hasil1" class="filter-active">Tabulasi A</li>
                    <li data-filter=".filter-riset2-hasil2">Tabulasi B</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            <?php include('dummy_submenu2.php') ?>
        </div>
    </div>
</section>


<!-- Datatable Instal -->
<script src="<?= base_url('pvd/js/datatables_install.js'); ?>"></script>
<!-- Istope -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

<?= $this->endSection(); ?>