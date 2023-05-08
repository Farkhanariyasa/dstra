let delayed2;
// Chart
const t2_bar2 = document.getElementById("t2_bar2");
var bar_lamakunjungan = new Chart(t2_bar2, {
  type: "bar",
  data: {
    labels: [
      "Kecamatan Klojen",
      "Kecamatan Lowokwaru",
      "Kecamatan Blimbing",
      "Kecamatan Sukun",
      "Kecamatan Kedungkandang",
    ],
    datasets: [
      {
        label: "Lama Kunjungan (jam)",
        data: [2.14, 2.78, 3.03, 3.09, 3.17],
        borderWidth: 1,
        backgroundColor: "#ffab00",
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
          text: "Rata-Rata Lama Kunjungan (Jam)",
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
        text: ["Estimasi Rata-Rata Lama Kunjungan yang Dilakukan Wisatawan",
          "dalam Kota di Kota Malang Bulan Oktober-Desember 2022 (dalam satuan Jam)"],
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

// function responsivefonts(){
//     if (window.outerWidth < 414) {
//         console.log(window.outerWidth);
//         Chart.defaults.font.size=5;
        

//     }if (window.outerWidth<380){
//         Chart.defaults.font.size=1;
//     }
// };