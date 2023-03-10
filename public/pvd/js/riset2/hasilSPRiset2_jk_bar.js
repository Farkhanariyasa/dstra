let delayed;
// Chart
const jk_bar = document.getElementById("riset2_hasil1");
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
      }
    },
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