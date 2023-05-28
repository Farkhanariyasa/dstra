let delayed1;
// Chart
const t1_bar = document.getElementById("riset2_t1_hasil1");
var bar_lamakunjungan = new Chart(t1_bar, {
  type: "bar",
  data: {
    labels: ["Klojen", "Sukun", "Blimbing", "Kedungkandang", "Lowokwaru"],
    datasets: [
      {
        label: "Persentase",
        data: [52.71, 53.13, 55.94, 61.21, 66.42],
        borderWidth: 1,
        backgroundColor: "#ffab00",
        datalabels: {
          anchor: "end",
          align: "top",
          offset: 1,
          font: {
            size: 12,
          },
        },
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
            size: 10,
          },
        },
      },
      y: {
        beginAtZero: true,
        title: {
          display: true,
          text: "Jumlah Penduduk Berwisata (%)",
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
          "Persentase Penduduk yang Berwisata dalam Kota Malang",
          "menurut Kecamatan Asal Wisatawan di Kota Malang",
          "Bulan Oktober-Desember 2022",
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