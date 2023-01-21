<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <header class="section-header">
        <p>Kajian Pemanfaatan MPD dalam Menunjang Statistik Pariwisata</p>
    </header>
    <hr class="hrjudul">
    <!-- <button onclick="showmsg();" class="tombol btn-for" >Download image</button> -->
    <div class="card d-flex justify-content-center flex-column align-item-center flex-md primary pb-5 pt-5 ">
        <p class="card-text text-center">Kota Surabaya</p>
        <div class="d-flex flex-row align-item-center justify-content-center">
            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center">
                <div class="me-1 mt-1 justify-content-end align-item-end">
                    <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-download"></i>
                    </button>
                </div>
            </div>
            <div id="map" style="width: 95%; height:80vh;"></div>
        </div>
    </div>
</div>

<script src="<?= base_url('pvd/js/riset1/btn-Download.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_peta.js') ?>"></script>
<?= $this->endSection(); ?>