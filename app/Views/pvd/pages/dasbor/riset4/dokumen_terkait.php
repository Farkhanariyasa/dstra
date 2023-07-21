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

    /* css untuk download */
    .fourthSec .kontener {
      position: relative;
    }

    .fourthSec .overlay {opacity: 0.5;
      position: absolute;
      top: 20;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100%;
      width: auto;
      opacity: 0;
      transition: 0.5s ease;
      border-radius: 25px;
      /* background-color: rgba(219, 215, 223, 0.65); */
      color: #ffffff;
    }

    .fourthSec button {
      color: #fff;
      background-color: #7382ab;
      border-color: #7382ab;
      border-radius: 2.75rem;
      align-items: center;
      font-size: x-large;
    }

    .fourthSec button:hover {
      color: #fff;
      background-color: #506396;
      border-color: #506396;
      text-decoration: none;
    }

    .fourthSec .kontener:hover .overlay {
      opacity: 1;
      text-decoration: none;
    }
</style>

  <div class="container">
    <header class="section-header">
    <h6 style="color: #4b395f;"><strong>Dokumen Terkait Praktik Kerja Lapangan (PKL) Riset IV</strong>
      </h6>
    </header>
    <hr class="hrjudul">

    <div class="box">
      <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4"> 
              <div class="box-part text-center">    
                <div class="title fw-bold">
                  <h4><strong>Buku Laporan Hasil PKL</strong></h4>
                </div>        
                <div class="text">
                  <div class="fourthSec">
                    <div class="text-center text-lg-start kontener">
                      <div>
                        <img src="<?= base_url('pvd/img/dasbor/riset4/cover-buku-laporan.png') ?>" class="img-fluid rounded-3 mx-auto d-block shadow" alt="">
                        <div class="overlay rounded-3 d-block mx-0 d-flex justify-content-center">
                            <div class="d-flex justify-content-center my-auto">
                                <a href="<?= 'https://drive.google.com/file/d/1fE82lkHbYAJSSGm5oBd4voNrYsOQfp2K/view?usp=sharing' ?>" class="bukulaporan mx-auto">
                                    <div class="text-center">
                                        <button class="btn btn-primary gdrive" type="button">
                                            <div>
                                              <i class="fas fa-download"></i>
                                              Download
                                            </div>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>                
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4"> 
              <div class="box-part text-center">    
                <div class="title fw-bold">
                  <h4><strong>Buku Pedoman Listing</strong></h4>
                </div>        
                <div class="text">
                  <div class="fourthSec">
                    <div class="text-center text-lg-start kontener">
                        <img src="<?= base_url('pvd/img/dasbor/riset4/cover-pedoman-listing.png') ?>" class="img-fluid rounded-3 mx-auto d-block shadow" alt="">
                        <div class="overlay rounded-3 d-block mx-0 d-flex justify-content-center">
                            <div class="d-flex justify-content-center my-auto">
                                <a href="<?= 'https://drive.google.com/file/d/1GV0lTxcA3fgkyaFZaOecmslS3Ku9z3jZ/view?usp=sharing' ?>" class="bukulaporan mx-auto">
                                    <div class="text-center">
                                        <button class="btn btn-primary gdrive" type="button">
                                            <div>
                                              <i class="fas fa-download"></i>
                                              Download
                                            </div>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                  </div>                
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4"> 
              <div class="box-part text-center">    
                <div class="title fw-bold">
                  <h4><strong>Buku Pedoman Pencacahan</strong></h4>
                </div>        
                <div class="text">
                  <div class="fourthSec">
                    <div class="text-center text-lg-start kontener">
                        <img src="<?= base_url('pvd/img/dasbor/riset4/cover-pedoman-pencacahan.png') ?>" class="img-fluid rounded-3 mx-auto d-block shadow" alt="">
                        <div class="overlay rounded-3 d-block mx-0 d-flex justify-content-center">
                            <div class="d-flex justify-content-center my-auto">
                                <a href="<?= 'https://drive.google.com/file/d/1r0vX70wxYGFWQXGbjruG-wvSVx-YgLP3/view?usp=sharing' ?>" class="bukulaporan mx-auto">
                                    <div class="text-center">
                                        <button class="btn btn-primary gdrive" type="button">
                                            <div>
                                              <i class="fas fa-download"></i>
                                              Download
                                            </div>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                  </div>                
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4"> 
              <div class="box-part text-center">    
                <div class="title fw-bold">
                  <h4><strong>Kuesioner Listing</strong></h4>
                </div>        
                <div class="text">
                  <div class="fourthSec">
                    <div class="text-center text-lg-start kontener">
                        <img src="<?= base_url('pvd/img/dasbor/riset4/cover-kuesioner-listing.png') ?>" class="img-fluid rounded-3 mx-auto d-block shadow" alt="">
                        <div class="overlay rounded-3 d-block mx-0 d-flex justify-content-center">
                            <div class="d-flex justify-content-center my-auto">
                                <a href="<?= 'https://drive.google.com/file/d/1oMmVfkvY0H2iSVL1tRYPAPR6uemofhRP/view?usp=sharing' ?>" class="bukulaporan mx-auto">
                                    <div class="text-center">
                                        <button class="btn btn-primary gdrive" type="button">
                                            <div>
                                              <i class="fas fa-download"></i>
                                              Download
                                            </div>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                  </div>                
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4"> 
              <div class="box-part text-center">    
                <div class="title fw-bold">
                  <h4><strong>Kuesioner Pencacahan</strong></h4>
                </div>        
                <div class="text">
                  <div class="fourthSec">
                    <div class="text-center text-lg-start kontener">
                        <img src="<?= base_url('pvd/img/dasbor/riset4/cover-kuesioner-pencacahan.png') ?>" class="img-fluid rounded-3 mx-auto d-block shadow" alt="">
                        <div class="overlay rounded-3 d-block mx-0 d-flex justify-content-center">
                            <div class="d-flex justify-content-center my-auto">
                                <a href="<?= 'https://drive.google.com/file/d/19tEkaGEVqf5DXppWSexYUAuMAr3lGj4g/view?usp=sharing' ?>" class="bukulaporan mx-auto">
                                    <div class="text-center">
                                        <button class="btn btn-primary gdrive" type="button">
                                            <div>
                                              <i class="fas fa-download"></i>
                                              Download
                                            </div>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                  </div>                
                </div>
              </div>
            </div>		
        </div>		
      </div>
    </div>
  </div>

<?= $this->endSection(); ?>