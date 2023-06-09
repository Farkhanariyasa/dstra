let delayed2;
// Chart
const t2_bar2 = document.getElementById("riset2_t2_hasil1");
var batang = new Chart(t2_bar2, {
  type: "bar",
  data: {
    labels: [
      "Klojen",
      "Lowokwaru",
      "Kedungkandang",
      "Sukun",
      "Blimbing",
    ],
    datasets: [
      {
        label: "Lama Kunjungan (Jam)",
        data: [3.28, 3.85, 4.22, 4.47, 5.08],
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
          text: "Rata-Rata Lama Bepergian (Jam)",
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
        text: [
          "Estimasi Rata-Rata Lama Bepergian", 
          "yang Dilakukan Pelancong dalam Kota", 
          "di Kota Malang Bulan Oktober-Desember 2022",
          "(dalam satuan Jam)"],
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
    batang.data.datasets[0].data = [3.28, 3.85, 4.22, 4.47, 5.08];
    batang.data.labels = [
      "Klojen",
      "Lowokwaru",
      "Kedungkandang",
      "Sukun",
      "Blimbing",
    ];
    batang.options.plugins.title.text = [
      "Estimasi Rata-Rata Lama Bepergian", 
      "yang Dilakukan Pelancong dalam Kota", 
      "di Kota Malang Bulan Oktober-Desember 2022",
      "(dalam satuan Jam)",
    ];
    batang.options.scales.y.title.text = "Rata-Rata Lama Bepergian (Jam)";
    batang.data.datasets[0].label = "Rata-Rata Lama Bepergian (Jam)";
    // console.log(batang.data.datasets[0].data);
    batang.update();
  } else {
    console.log(barchart.value);
    batang.data.datasets[0].data = [2.43, 3.12, 3.23, 3.56, 4.1];
    batang.data.labels = [
      "Klojen",
      "Lowokwaru",
      "Kedungkandang",
      "Sukun",
      "Blimbing",
    ];
    batang.options.plugins.title.text = [
      "Estimasi Rata-Rata Lama Kunjungan", 
      "yang Dilakukan Pelancong dalam Kota", 
      "di Kota Malang Bulan Oktober-Desember 2022",
      "(dalam satuan Jam)",
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