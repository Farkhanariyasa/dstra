let delayed1;
// Chart
const t2_bar1 = document.getElementById("riset2_t2_hasil1");
var batang = new Chart(t2_bar1, {
  type: "bar",
  data: {
    labels: [
      "Kedungkandang",
      "Sukun",
      "Lowokwaru",
      "Klojen",
      "Blimbing",
    ],
    datasets: [
      {
        label: "Lama Kunjungan (malam)",
        data: [1.29, 1.63, 1.65, 1.79, 1.87],
        borderWidth: 1,
        backgroundColor: "#ffab00",
        datalabels: {
          anchor: 'end',
          align: 'top',
          offset: 1,
          font: {
            size: 12
          }
        }
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
            size: 14,
            style: "normal",
            lineHeight: 2,
          },
        },
        grid: {
          display: false,
        },
        ticks: {
          font: {
            size: 10
          }
        }
      },
      y: {
        beginAtZero: true,
        title: {
          display: true,
          text: "Rata-Rata Lama Kunjungan (Malam)",
          font: {
            size: 14,
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
          "Estimasi Rata-Rata Lama Kunjungan", 
          "yang Dilakukan Wisatawan dalam Kota di Kota Malang",
          "Bulan Oktober-Desember 2022 (dalam satuan Malam)",
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

const barchart = document.getElementById("forBarChart");
barchart.addEventListener("change", tampilData);

function tampilData() {
  if (barchart.value == "a") {
    console.log(barchart.value);
    batang.data.datasets[0].data = [1.29, 1.63, 1.65, 1.79, 1.87];
    batang.data.labels = [
      "Kedungkandang",
      "Sukun",
      "Lowokwaru",
      "Klojen",
      "Blimbing",
    ];
    batang.options.plugins.title.text = [
      "Estimasi Rata-Rata Lama Kunjungan", 
      "yang Dilakukan Wisatawan dalam Kota di Kota Malang",
      "Bulan Oktober-Desember 2022 (dalam satuan Malam)",
    ];
    batang.options.scales.y.title.text = "Rata-Rata Lama Kunjungan (Malam)";
    batang.data.datasets[0].label = "Rata-Rata Lama Kunjungan (Malam)";
    // console.log(batang.data.datasets[0].data);
    batang.update();
  } else {
    console.log(barchart.value);
    batang.data.datasets[0].data = [2.14, 2.78, 3.03, 3.09, 3.17];
    batang.data.labels = [
      "Klojen",
      "Lowokwaru",
      "Blimbing",
      "Sukun",
      "Kedungkandang",
    ];
    batang.options.plugins.title.text = [
      "Estimasi Rata-Rata Lama Kunjungan", 
      "yang Dilakukan Wisatawan dalam Kota di Kota Malang",
      "Bulan Oktober-Desember 2022 (dalam satuan Jam)"
    ];
    batang.options.scales.y.title.text = "Rata-Rata Lama Kunjungan (Jam)";
    batang.data.datasets[0].label = "Rata-Rata Lama Kunjungan (Jam)";
    // console.log(batang.data.datasets[0].data)
    batang.update();
  }
}