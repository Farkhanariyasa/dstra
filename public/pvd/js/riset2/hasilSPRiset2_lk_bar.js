let delayed2;
// Chart
const lk_bar = document.getElementById("lk_bar");
var bar_lamakunjungan = new Chart(lk_bar, {
  type: "bar",
  data: {
    labels: ["Klojen", "Lowokwaru", "Blimbing", "Kedungkandang", "Sukun"],
    datasets: [
      {
        label: "Lama Kunjungan (jam)",
        data: [2106, 2823, 2923, 3158, 3192],
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
          text: "Rata-Rata Lama Kunjungan (jam)",
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
        text: ["Estimasi Rata-Rata Lama Kunjungan yang Dilakukan Wisatawan", "dalam Kota di Kota Malang Bulan Oktober-Desember 2022"],
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