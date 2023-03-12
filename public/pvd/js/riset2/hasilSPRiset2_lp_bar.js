let delayed;
// Chart
const lp_bar = document.getElementById("lp_bar");
var bar_jenis_kelamin = new Chart(lp_bar, {
  type: "bar",
  data: {
    labels: ["Klojen", "Sukun", "Blimbing", "Lowokwaru", "Kedungkandang"],
    datasets: [
      {
        label: "Lama Bepergian (jam)",
        data: [2261, 2648, 2813, 3017, 3224],
        borderWidth: 1,
        backgroundColor: "#ffab00",
      },
    ],
  },
  options: {
    animation: {
      onComplete: () => {
        delayed = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed) {
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
          text: "Kecamatan Tujuan",
          font: {
            size: 18,
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
          text: "Rata-Rata Lama Bepergian (jam)",
          font: {
            size: 18,
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
        text: "Estimasi Rata-Rata Lama Bepergian yang Dilakukan Wisatawan dalam Kota di Kota Malang Bulan Oktober-Desember 2022",
        font: {
          size: 20,
        },
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