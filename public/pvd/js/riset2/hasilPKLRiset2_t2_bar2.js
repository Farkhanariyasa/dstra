let delayed2;
// Chart
const t2_bar2 = document.getElementById("t2_bar2");
var batang = new Chart(t2_bar2, {
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
        data: [1.31, 1.69, 1.74, 1.84, 1.89],
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
        delayed2 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed2) {
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
          text: "Rata-Rata Lama Bepergian (Malam)",
          font: {
            size: 14,
            style: "normal",
            lineHeight: 2.5,
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
    },
    maintainAspectRatio: false,
    plugins: {
      title: {
        display: true,
        text: ["Estimasi Rata-Rata Lama Bepergian",
          "yang Dilakukan Wisatawan dalam Kota di Kota Malang",
          "Bulan Oktober-Desember 2022 (dalam satuan Malam)"],
        font: {
          size: 16,
          style: "normal"
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
    batang.data.datasets[0].data = [1.31, 1.69, 1.74, 1.84, 1.89];
    batang.data.labels = [
      "Kedungkandang",
      "Sukun",
      "Lowokwaru",
      "Klojen",
      "Blimbing",
    ];
    batang.options.plugins.title.text = [
      "Estimasi Rata-Rata Lama Bepergian",
      "yang Dilakukan Wisatawan dalam Kota di Kota Malang",
      "Bulan Oktober-Desember 2022 (dalam satuan Malam)",
    ];
    batang.options.scales.y.title.text = "Rata-Rata Lama Bepergian (Malam)";
    batang.data.datasets[0].label = "Rata-Rata Lama Bepergian (Malam)";
    // console.log(batang.data.datasets[0].data);
    batang.update();
  } else {
    console.log(barchart.value);
    batang.data.datasets[0].data = [2.92, 3.58, 3.86, 3.91, 4.14];
    batang.data.labels = [
      "Klojen",
      "Lowokwaru",
      "Blimbing",
      "Sukun",
      "Kedungkandang",
    ];
    batang.options.plugins.title.text = [
      "Estimasi Rata-Rata Lama Bepergian",
      "yang Dilakukan Wisatawan dalam Kota di Kota Malang",
      "Bulan Oktober-Desember 2022 (dalam satuan Jam)",
    ];
    batang.options.scales.y.title.text = "Rata-Rata Lama Kunjungan (Jam)";
    batang.data.datasets[0].label = "Rata-Rata Lama Kunjungan (Jam)";
    // console.log(batang.data.datasets[0].data)
    batang.update();
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