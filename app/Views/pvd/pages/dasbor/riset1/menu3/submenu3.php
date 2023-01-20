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
                    </div><br>

                    <div>
                        <p class="card-text text-justify">
                            Grafik menunjukkan banyaknya rumah tangga berdasarkan 
                            jumlah anggota rumah tangga yang melakukan perjalanan wisata.
                            Terlihat bahwa hanya 5 rumah tangga (5,9%) yang 
                            jumlah anggotanya sebesar 5 orang yang melakukan perjalanan wisata.
                        </p>

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
                        <div>
                            <div class="card">
                                <div class="card-body konten-teks">
                                    <p class="card-title">Jumlah RT <br>21 (24,7%) <br></p>
                                    <p class="card-text subs">Dengan ART sebanyak 4 orang</p>
                                    <p class="card-text text-justify">
                                        Banyaknya Rumah Tangga (RT) dengan anggota 
                                        rumah tangga (ART) sebanyak 4 orang yang melakukan perjalanan
                                        yaitu sebesar 21 rumah tangga (24,7%) dari total 85 rumah tangga yang
                                        melakukan perjalanan.

                                    </p>
                                </div>
                                
                            </div>
                            
                        </div>
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
                        <div>
                            <div class="card">
                                <div class="card-body konten-teks">
                                    <p class="card-title">80 Perjalanan</p>
                                    <p class="card-text subs">Dari Sukun ke Klojen</p>
                                    <p class="card-text text-justify">
                                        Dari banyaknya jumlah perjalanan wisata yang dilakukan,
                                        sebanyak 80 perjalanan terjadi dari kecamatan Sukun ke kecamatan Klojen.

                                    </p>
                                </div>            
                            </div>
                        </div>
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
                        <canvas class="mt1" id="sankey"></canvas>
                    </div><br>

                    <div>
                        <p class="card-text text-justify">
                            Diagram Sankey menunjukkan jumlah perjalanan wisata 
                            menurut kecamatan asal dan kecamatan tujuan wisata
                            di daerah Jawa Timur.  

                        </p>

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
<script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_sankey.js') ?>"></script>

<?= $this->endSection(); ?>

