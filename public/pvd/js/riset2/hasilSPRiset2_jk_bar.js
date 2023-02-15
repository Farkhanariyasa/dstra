// Chart
const jk_bar = document.getElementById("jk_bar");
const bar_jenis_kelamin = new Chart(jk_bar, {
  type: "bar",
  data: {
    labels: ["Laki-laki", "Perempuan"],
    datasets: [
      {
        label: "Jumlah Wisatawan",
        data: [datajeniskelamin.jk1, datajeniskelamin.jk2],
        borderWidth: 1,
        backgroundColor: "#ffab00",
      },
    ],
  },
  options: {
    responsive: true,
    scales: {
      x: {
        title: {
          display: true,
          text: "Jenis Kelamin",
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
          text: "Jumlah Wisatawan",
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
        text: "Sebaran Penduduk yang Melakukan Perjalanan Wisata berdasarkan Jenis Kelamin",
        font: {
          size: 18,
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

// Chart Legend
// const barChartAxis = document.getElementById("barChartAxis");
// barChartAxis.addEventListener("click", update_value(check_axis));

// function update_value(check_axis) {
//   if (check_axis.checked) {
//     console.log("check");
//     bar_jenis_kelamin.options.scales.x.display = true;
//     bar_jenis_kelamin.scales.y.display = true;
//     bar_jenis_kelamin.update();
//   } else {
//     console.log("uncheck");
//     bar_jenis_kelamin.options.scales.x.display = false;
//     bar_jenis_kelamin.options.scales.y.display = false;
//     bar_jenis_kelamin.update();
//   }
// }
