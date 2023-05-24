let delayed7;
const wisnus_output7 = document.getElementById("wisnus_output7");
const bar_wisnus7 = new Chart(wisnus_output7, {
  type: "bar",
  data: {
    labels: ["0-12", "13-15", "16-18", "19-24", "25-49", ">=50"],
    datasets: [
      {
        label: "Jumlah Perjalanan Wisata",
        data: [99900, 18773, 21459, 50053, 174128, 99415],
        backgroundColor: "#ffdd99",
        borderWidth: 1,
        borderRadius: 8,
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    animation: {
      onComplete: () => {
        delayed7 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed7) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
    scales: {
      x: {
        ticks: {
          display: true,
        },
      },
    },
    plugins: {
      title: {
        display: true,
        text: ["Jumlah Wisatawan Nusantara Asal Kota Malang", "Berdasarkan Kelompok Umur Triwulan IV 2022"],
        font: {
          size: 16,
        //   family: "Poppins",
          style: "normal",
        },
        color: "#493a5a",
        padding: {
          top: 5,
          bottom: 5,
          right: 10,
          left: 10,
        },
      },
      legend: {
        display: true,
        position: "top",
      },
      tooltip: {
        enabled: true,
      },
      datalabels: {
        display: true,
        color: "black",
        anchor: 'end',
        align: 'top',
      },
    },
    maintainAspectRatio: false,
    scales: {
      x: {
        grid: {
          display: false,
        },
      },
      y: {
        grid: {
          display: false,
        },
      },
    },
  },
  plugins: [ChartDataLabels],
});

function responsivefonts() {
  if (window.outerWidth < 414) {
    console.log(window.outerWidth);
    Chart.defaults.font.size = 5;
  }
  if (window.outerWidth < 380) {
    Chart.defaults.font.size = 1;
  }
}

const barChartAxis_output7 = document.getElementById("forBarChartAxis_output7");
barChartAxis_output7.addEventListener("click", update_value_output7(chk_bx));

function update_value_output7(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    bar_wisnus7.options.scales.x.display = true;
    bar_wisnus7.options.scales.y.display = true;
    bar_wisnus7.update();
  } else {
    console.log("uncheck");
    bar_wisnus7.options.scales.x.display = false;
    bar_wisnus7.options.scales.y.display = false;
    bar_wisnus7.update();
  }
}
