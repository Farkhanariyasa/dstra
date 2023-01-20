<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<div class="container" >
    <br><br>
      <header class="section-header">
        <p>Kajian Pemanfaatan MPD dalam Menunjang Statistik Pariwisata</p>
      </header>
    <hr class="hrjudul">

    <div class="row mt-5">
        <div class="col-sm-6 my-2">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div>
                        <canvas class="mt1" id="riset1_hasil1"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 my-2">
            <div class="card shadow">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    const jumlahanggota = <?= json_encode($ja) ?>;
</script>

<script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_ja_pie.js') ?>"></script>

<?= $this->endSection(); ?>

