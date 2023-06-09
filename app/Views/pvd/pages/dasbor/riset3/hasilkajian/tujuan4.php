<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>
<?php include('modal_tujuan4.php') ?>

<div class="container px-0">
    <header class="section-header">
        <h6 style="color: #4b395f;"><strong>Mengukur tingkat sadar wisata dari tenaga kerja industri pariwisata dengan indeks komposit.</strong>
        </h6>
    </header>
    <hr class="hrjudul">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card d-flex justify-content-center flex-column align-item-center flex-md primary pb-2 pt-5 shadow">
            <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                <h1 class="chart-title judul-chart text-center" style="font-size: 20px; font-weight: 600; text-align: left;">
                    Indeks Sadar Wisata (ISW) Kabupaten Malang
                </h1>
            </div>
            <div class="mb-5 d-flex flex-row align-item-center justify-content-center" style="width: 100%; height:80vh;">
                <div id="chart_isw" style="width: 100%; height:80vh; z-index:0;"></div>
            </div>
            <div class="mb-3 row-lg-2 col-lg-12 grid-margin">
                <h1 class="chart-title judul-chart text-center" style="font-size: 20px; font-weight: 600; text-align: left;">
                    Indeks Sadar Wisata (ISW) per Dimensi Kabupaten Malang
                </h1>
                <div class="col-md-12 grid stretch-card">
                    <div class="card" style="border: 0">
                        <div class="card-body" style="padding: 16px;">
                            <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                                <div class="me-1 mt-1 justify-content-end align-item-end">
                                    <button id="unduh-4-1" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#Modal4_1">
                                    <i class="fa-solid fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="chartBox" style="height: 360px;">
                                <canvas class="mt1" id="tujuan4_1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="isi-tujuan bg-white shadow mt-4">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <h3><b>Interpretasi</b></h3>
            <div class="card-body p-2 border rounded">
                <p>Terlihat bahwa dimensi Kenangan memiliki nilai skor tertinggi dibandingkan dimensi lainnya, yaitu sebesar 66,37. Sementara itu, nilai skor terendah dimiliki oleh dimensi Sejuk-Indah-Ramah dengan nilai sebesar 48,65, lebih rendah 17,72 poin dibandingkan dimensi Kenangan. Hal ini menunjukkan bahwa upaya untuk meningkatkan sadar wisata tenaga kerja di industri pariwisata di Kabupaten Malang dapat difokuskan mulai dari dimensi Sejuk-Indah-Ramah.</p>
                <p>Dimensi Sejuk-Indah-Ramah merupakan dimensi yang memiliki nilai indeks yang paling rendah. Hal ini disebabkan karena kesejukan dan keindahan yang sudah khas di daerah Kabupaten Malang menjadikan tenaga kerja di sana tidak terlalu menerapkan penjagaan kesejukan dan keindahan. Selain itu, rendahnya nilai dimensi ini disebabkan karena keramahan pada wisatawan yang masih kurang dari tenaga kerja pariwisata. Nilai dimensi sejuk-indah-ramah yang memiliki nilai paling rendah dibandingkan dimensi lainnya dapat ditingkatkan dengan melakukan sosialisasi kepada para tenaga kerja di bidang pariwisata untuk selalu menerapkan budaya 5S (Senyum, Salam, Sapa, Sopan, dan Santun) dalam melayani wisatawan atau pengunjung, serta meningkatkan kebiasaan untuk menanam dan merawat tanaman di sekitar tempat wisata guna meningkatkan keasrian dan kesejukan.</p>
                <p>Di lain sisi, dimensi kenangan menjadi dimensi dengan nilai tertinggi. Hal ini berarti tenaga kerja di sektor pariwisata di Kabupaten Malang turut serta dalam mengenalkan kesenian dan kebudayaan yang berasal dari daerahnya kepada wisatawan dan juga mempromosikan makanan dan minuman khas maupun cindera mata dari kabupaten malang. Dimensi ini tetap perlu diperhatikan karena akan menentukan kesan positif yang akan disampaikan kepada orang lain dan kunjungan kembali dari wisatawan.</p>
                <p>Selain itu, nilai indeks dimensi Aman-Tertib-Bersih memiliki nilai yang sedang, yaitu diantara dimensi Kenangan dan dimensi Sejuk-Indah-Ramah. Hal ini berarti tenaga kerja di sektor industri pariwisata sudah menerapkan sadar wisata pada dimensi Aman-Tertib-Bersih akan tetapi masih terdapat kekurangan. Bentuk tindak keamanan seperti sikap tidak mengganggu kenyamanan wisatawan, tidak membuat kegaduhan dan meminimalkan resiko kecelakaan telah dilakukan tenaga kerja di Kabupaten Malang.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<!-- Chart JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Impor Chart -->
<script src="<?= base_url('pvd/js/riset3/peta_malang.js') ?>"></script>
<script src="<?= base_url('pvd/js/riset3/layer_dasar_peta_malang.js') ?>"></script>

<script>
const data_tujuan4 = {
  labels: [
    'Sejuk-Indah-Ramah',
    'Kenangan',
    'Aman-Tertib-Bersih',
  ],
  datasets: [{
      label: 'ISW',
      data: [48.65,66.37,65.83,],
      fill: true,
      backgroundColor: "#506396",
      borderColor: "#506396",
      pointBackgroundColor: "#506396",
      pointBorderColor: '#fff',
      pointHoverBackgroundColor: '#fff',
      pointHoverBorderColor: "#506396"
  },]
};

const radar = document.getElementById("tujuan4_1");

new Chart(radar,{
  type: 'radar',
  data: data_tujuan4,
  options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        r: {
          max: 80,
          beginAtZero: true,
          angleLines: {
            display: false
          },
          ticks: {
            display: true,
            stepSize: 10
          }
        }
      },
      plugins: {
          title: {
              display: false,
              // text : "Radar Chart",
              font: {
                  size: 20
              }
          },
          elements: {
              line: {
                  borderWidth: 3
              }
          },
      },
  }
});
</script>

<!-- Fungsi Unduh Chart -->
<script src="<?= base_url('pvd/js/riset3/btn_Download_tujuan4.js') ?>"></script>

<?= $this->endSection(); ?>