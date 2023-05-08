let delayed1;
// Chart
const t2_bar1 = document.getElementById("t2_bar1");
var bar_lamakunjungan = new Chart(t2_bar1, {
  type: "bar",
  data: {
    labels: [
      "Kecamatan Kedungkandang",
      "Kecamatan Sukun",
      "Kecamatan Lowokwaru",
      "Kecamatan Klojen",
      "Kecamatan Blimbing",
    ],
    datasets: [
      {
        label: "Lama Kunjungan (malam)",
        data: [1.29, 1.63, 1.65, 1.79, 1.87],
        borderWidth: 1,
        backgroundColor: "#ffab00",
      },
    ],
  },
  options: {
    animation: {
      onComplete: () => {
        delayed1 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (
          context.type === "data" &&
          context.mode === "default" &&
          !delayed1
        ) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
    responsive: true,
    scales: {
      x: {
        title: {
          display: true,
          text: "Daerah Tujuan Wisata",
          font: {
            size: 16,
            style: "normal",
            lineHeight: 2,
          },
        },
        grid: {
          display: false,
        },
      },
      y: {
        beginAtZero: true,
        title: {
          display: true,
          text: "Rata-Rata Lama Kunjungan (Malam)",
          font: {
            size: 16,
            style: "normal",
            lineHeight: 2.5,
          },
        },
        grid: {
          display: false,
        },
      },
    },
    maintainAspectRatio: false,
    plugins: {
      title: {
        display: true,
        text: [
          "Estimasi Rata-Rata Lama Kunjungan yang Dilakukan Wisatawan",
          "dalam Kota di Kota Malang Bulan Oktober-Desember 2022 (dalam satuan Malam)",
        ],
        font: {
          size: 16,
          style: "normal",
        },
        color: "black",
        align: "center",
      },
      datalabels: {
        anchor: "center",
        align: "center",
        offset: 150,
        color: "black",
        font: {
          size: 14,
        },
      },
    },
  },
  plugins: [ChartDataLabels],
});

const barChart = document.getElementById("forBarChart");
barChart.addEventListener("change", tampilData);

function tampilData() {
  if (barChart.value == "1") {
    console.log(barChart.value);
    bar_lamakunjungan.data.datasets[0].data = [1.29, 1.63, 1.65, 1.79, 1.87];
    bar_lamakunjungan.data.datasets[0].label = "Lama Kunjungan (malam)";
    bar_lamakunjungan.data.labels = [
      "Kecamatan Kedungkandang",
      "Kecamatan Sukun",
      "Kecamatan Lowokwaru",
      "Kecamatan Klojen",
      "Kecamatan Blimbing",
    ];
    bar_lamakunjungan.options.plugins.title.text = [
      "Estimasi Rata-Rata Lama Kunjungan yang Dilakukan Wisatawan",
      "dalam Kota di Kota Malang Bulan Oktober-Desember 2022 (dalam satuan Malam)"
    ];
    bar_lamakunjungan.options.scales.y.title.text = "Rata-Rata Lama Kunjungan (Malam)";
    bar_lamakunjungan.update();
  }
  if (barChart.value == "2") {
    console.log(barChart.value);
    bar_lamakunjungan.data.datasets[0].data = [2.14, 2.78, 3.03, 3.09, 3.17];
    bar_lamakunjungan.data.datasets[0].label = "Lama Kunjungan (jam)";
    bar_lamakunjungan.data.labels = [
      "Kecamatan Kedungkandang",
      "Kecamatan Sukun",
      "Kecamatan Lowokwaru",
      "Kecamatan Klojen",
      "Kecamatan Blimbing",
    ];
    bar_lamakunjungan.options.plugins.title.text = [
      "Estimasi Rata-Rata Lama Kunjungan yang Dilakukan Wisatawan",
      "dalam Kota di Kota Malang Bulan Oktober-Desember 2022 (dalam satuan Jam)",
    ];
    bar_lamakunjungan.options.scales.y.title.text =
      "Rata-Rata Lama Kunjungan (Jam)";
    bar_lamakunjungan.update();
  }
}

// function responsivefonts(){
//     if (window.outerWidth < 414) {
//         console.log(window.outerWidth);
//         Chart.defaults.font.size=5;
        

//     }if (window.outerWidth<380){
//         Chart.defaults.font.size=1;
//     }
// };