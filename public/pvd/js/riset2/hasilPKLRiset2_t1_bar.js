let delayed1;
// Chart
const t1_bar = document.getElementById("t1_bar");
var bar_lamakunjungan = new Chart(t1_bar, {
  type: "bar",
  data: {
    labels: [
      "Kecamatan Klojen",
      "Kecamatan Lowokwaru",
      "Kecamatan Blimbing",
      "Kecamatan Kedungkandang",
      "Kecamatan Sukun",
    ],
    datasets: [
      {
        label: "Persentase",
        data: [53.48, 53.85, 56.67, 61.9, 67.33],
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
          text: "Kecamatan Asal Wisatawan",
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
          text: "Jumlah Penduduk Berwisata (%)",
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
          "Persentase Penduduk yang Berwisata dalam Kota Malang",
          "menurut Kecamatan Asal Wisatawan di Kota Malang Bulan Oktober-Desember 2022",
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

// function responsivefonts(){
//     if (window.outerWidth < 414) {
//         console.log(window.outerWidth);
//         Chart.defaults.font.size=5;
        

//     }if (window.outerWidth<380){
//         Chart.defaults.font.size=1;
//     }
// };