<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<style>
    .konten-teks {
        padding: 10%;
        color: #506396;
        font-family: 'Poppins', 'Courier', 'monospace';
    }

    .konten-teks .card-title {
        font-weight: bold;
        font-size: 56px;
        font-family: 'Poppins', 'Courier', 'monospace';
        color: #493a5a;

    }

    .konten-teks .subs {
        font-weight: bold;
        font-size: 30px;

    }

    .card-text {
        font-family: 'Poppins', 'Courier', 'monospace';
        color: #506396;
    }
</style>

<div class="container">
    <header class="section-header">
        <p>Kajian Pemanfaatan MPD dalam Menunjang Statistik Pariwisata</p>
    </header>
    <hr class="hrjudul">

    <h2>Kuesioner Pencacahan</h2>
    <div class="tab-pane active p-2" id="tab1" role="tabpanel" aria-labelledby="tab-1" style="height: auto;">
        <div class="row">
            <div style="width: 100%;">
                <embed src="https://drive.google.com/file/d/1zDAhqWFzlYnpTGHTXlRVMg8kKa5xnfWa/preview" type="application/pdf" width=100% height="600px" />
            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>