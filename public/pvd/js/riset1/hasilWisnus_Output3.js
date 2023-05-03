let delayed;
const wisnus_output3 = document.getElementById("wisnus_output3");
const bar_wisnus3 = new Chart(wisnus_output3, {
  type: "bar",
  data: {
    labels: ["0-12", "13-15", "16-18", "19-24", "25-49", ">=50"],
    datasets: [
      {
        label: "Memiliki Ponsel",
        data: [54411, 15666, 18986, 44627, 148796, 74858],
        backgroundColor: "#506396",
        borderWidth: 1,
      },
      {
        label: "Tidak Memiliki Ponsel",
        data: [45487, 3107, 2474, 5426, 25332, 24558],
        backgroundColor: "#c27d90",
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
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
        text: ["Jumlah Wisatawan Nusantara Berdasarkan Status Kepemilikan Ponsel dan", "Dikategorikan Menurut Kelompok Umur di Kota Malang Triwulan IV 2022"],
        font: {
          size: 16,
          family: "Poppins",
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
        position: "bottom",
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

const barChartAxis_output3 = document.getElementById("forBarChartAxis_output3");
barChartAxis_output3.addEventListener("click", update_value_output3(chk_bx));

function update_value_output3(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    bar_wisnus3.options.scales.x.display = true;
    bar_wisnus3.options.scales.y.display = true;
    bar_wisnus3.update();
  } else {
    console.log("uncheck");
    bar_wisnus3.options.scales.x.display = false;
    bar_wisnus3.options.scales.y.display = false;
    bar_wisnus3.update();
  }
}
