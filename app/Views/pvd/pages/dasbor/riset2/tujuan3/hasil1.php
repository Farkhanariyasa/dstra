<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <p>Karakteristik Wisatawan</p>
        </header>

        <hr class="hrjudul">

    </div>
</section>

<!-- Datatable Instal -->
<script src="<?= base_url('pvd/js/riset2/hasilSPRiset2_tabelkajian3.js'); ?>"></script>
<!-- Istope -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

<?= $this->endSection(); ?>