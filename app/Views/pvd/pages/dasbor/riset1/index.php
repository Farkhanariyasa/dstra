<?= $this->extend('pvd/layout/dasbor/template'); ?>
<?= $this->section('content'); ?>
<style>
  @media only screen and (max-width: 414px) {
  #test {
    margin-left: 2rem;
  }
}
</style>

<!-- <div class="container px-0">
  <header class="section-header">
    <h6 style="color: #4b395f;"><strong>
        Kajian Pemanfaatan MPD dalam Menunjang Statistik Pariwisata</strong>
    </h6>
  </header>
  <hr class="hrjudul">

  <div class="accordion" id="accordionExample">
    <div class="accordion-item my-3">
      <h3 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Gambaran Umum
        </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p class="text-justify">Penelitian ini dilakukan untuk mengatasi permasalahan MPD khususnya pada double counting pada data MPS dua nomor berbeda milik Telkomsel dan indosat
              melalui pattern dari kedua nomor tersebut. Dengan memanfaatkan MPD, kami melakukan penelitian terhadap pengelompokkan individu ang termasuk dalam satu rumah tangga berdasarkan dengan usual environment
              (family grouping) dan pola perjalanan wisata selama tahun 2022. Selain dengan pemanfaatan MPD, penelitin ini dilakukan untuk mencari tahu permasalahan pada statistik wisatawan nusantara dengan melibatkan jumlah perjalana wisata menggunakan MPD dan survei
              konvensional.
            </p>
          </div>
        </div>
    </div>
    <div class="accordion-item my-3">
      <h3 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Tujuan Umum
        </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <ol class="text-justify">
              <li>
                Membangun metode untuk mengelompokkan individu yang termasuk dalam satu
                rumah tangga berdasarkan usual environment dan pola perjalanan wisata (family
                grouping).
              </li>
              <li>
                Membangun metode untuk mengidentifikasi double counting berdasarkan pola
                perjalanan individu yang menggunakan lebih dari satu nomor Telkomsel dan/atau
                Indosat berbeda dalam satu perangkat.
              </li>
              <li>
                Menyajikan statistik wisatawan nusantara melalui pendekatan Mobile Positioning
                Data (MPD) dan survei konvensional di Kota Malang selama Triwulan IV 2022.
              </li>
            </ol>
          </div>
        </div>
    </div>
    <div class="accordion-item my-3">
      <h3 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Riset 1 (Kota Surabaya)
        </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p class="text-justify">
              Metode Penarikan Sampel
            </p>
            <p class="text-justify">
              Judgement (Purposive) Sampling
            </p>
            <p class="text-justify">
              Metodologi pengambilan sampel secara acak dimana
              kelompok sampel yang ditargetkan memiliki atribut-atribut tertentu. Cara yang dilakukan pada Judgment (Purposive) Sampling penelitian ini
              adalah pengambilan sampel yang homogen. Sampel homogen yang ditargetkan pada penelitian ini yaitu sampel dengan pekerjaan sama, yaitu orang ang bekerja di BPS Kota Surabaya dan BPS Provinsi Jawa Timur.
            </p>
          </div>
        </div>
    </div>
    <div class="accordion-item my-3">
      <h3 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Tujuan 3
        </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra neque ligula, at vehicula orci viverra at.
              Sed at lorem at tortor dapibus ultricies ut sed ipsum. Maecenas molestie elementum justo, in convallis urna eleifend et.
              Vestibulum mollis, tortor ut luctus scelerisque, eros est ullamcorper leo, quis tempor urna arcu sit amet tortor. Sed rhoncus
              odio non ipsum tempus porttitor. Nulla sagittis tincidunt aliquam. Cras commodo egestas commodo. Praesent consectetur mauris sed
              ultrices dignissim. Suspendisse mollis magna auctor enim posuere interdum. Phasellus suscipit, dolor vitae mattis consectetur, dui
              ex viverra nibh, sit amet elementum ligula lectus et quam. Sed et cursus neque. Morbi maximus in ipsum nec aliquam. Integer porttitor
              blandit augue, ut posuere dolor gravida vel. Nulla rutrum eu augue non semper. Proin sit amet dui felis. Sed vestibulum tempor urna,
              auctor viverra erat.
            </p>
          </div>
        </div>
    </div>
    <div class="accordion-item my-3">
      <h3 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Tujuan 4
        </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra neque ligula, at vehicula orci viverra at.
              Sed at lorem at tortor dapibus ultricies ut sed ipsum. Maecenas molestie elementum justo, in convallis urna eleifend et.
              Vestibulum mollis, tortor ut luctus scelerisque, eros est ullamcorper leo, quis tempor urna arcu sit amet tortor. Sed rhoncus
              odio non ipsum tempus porttitor. Nulla sagittis tincidunt aliquam. Cras commodo egestas commodo. Praesent consectetur mauris sed
              ultrices dignissim. Suspendisse mollis magna auctor enim posuere interdum. Phasellus suscipit, dolor vitae mattis consectetur, dui
              ex viverra nibh, sit amet elementum ligula lectus et quam. Sed et cursus neque. Morbi maximus in ipsum nec aliquam. Integer porttitor
              blandit augue, ut posuere dolor gravida vel. Nulla rutrum eu augue non semper. Proin sit amet dui felis. Sed vestibulum tempor urna,
              auctor viverra erat.
            </p>
          </div>
        </div>
    </div>
  </div>
</div> -->

<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
      <p>Kajian Pemanfaatan MPD dalam Menunjang Statistik Pariwisata</p>
    </header>
    <hr class="hrjudul">
  </div>
  <div class="row">
    <div class="col-lg-12 d-flex justify-content-center">
      <ul id="portfolio-flters">
        <li data-filter="*" class="filter-active">Semua</li>
        <li data-filter=".filter-riset1-qa">Quality Assurance</li>
        <li data-filter=".filter-riset1-dc">Double Counting</li>
        <li data-filter=".filter-riset1-fg">Family Grouping</li>
        <li data-filter=".filter-riset1-wisnus">Statistik Wisatawan Nusantara</li>
        <!-- <li data-filter=".filter-riset1-peta">Peta Lokus</li>
          <li data-filter=".filter-riset1-tabeldummy">Tabel Dummy</li> -->
      </ul>
      <!-- <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link pills-button shadow active" id="pills-primer-tab" data-bs-toggle="pill" data-bs-target="#pills-dc" type="button" role="tab" aria-controls="pills-primer" aria-selected="true">Double Counting</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link pills-button shadow" id="pills-sekunder-tab" data-bs-toggle="pill" data-bs-target="#pills-fg" type="button" role="tab" aria-controls="pills-sekunder" aria-selected="false">Family Grouping</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link pills-button shadow" id="pills-tersier-tab" data-bs-toggle="pill" data-bs-target="#pills-wisnus" type="button" role="tab" aria-controls="pills-tersier" aria-selected="false">Statistik Wisatawan Nusantara</button>
        </li>
      </ul> -->
    </div>
  </div>
  <div class="row d-flex justify-content-center align-items-center">
    <div class="row portfolio-container" id="test">
      <?php include('dummy_dasbor.php') ?>
    </div>
  </div>
</section>





<!-- Peta Lokus -->
<section>
  <!-- Istope -->
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
  <!-- Chart JS -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_peta.js') ?>"></script>

  <!-- Data Grafik -->
  <script>
    const jumlahanggota = <?= json_encode($ja) ?>;
  </script>
  <!-- Grafik Dasbor -->
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_horizontalbar.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_ja_pie.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_stacked_bar.js') ?>"></script>
  <script src="<?= base_url('pvd/js/riset1/hasilSPRiset1_line.js') ?>"></script>
</section>


<?= $this->endSection(); ?>