let delayed_relawan2rev;
const relawan_output2rev = document.getElementById("relawan_output2rev");
const bar_relawan2rev = new Chart(relawan_output2rev, {
  type: "bar",
  data: {
    labels: [
        "Telkomsel",
        "Indosat Ooredoo",
        "3 (Three)",
        "XL Axiata",
        "Smartfren",
        "Lainnya"

],
    datasets: [
      {
        label: "Jumlah Kartu SIM",
        data: [199
          ,73
          ,13
          ,9
          ,2
          ,0],
        backgroundColor: [
            "#FDAB01",
            "#FDAB01",
            "#516296",
            "#516296",
            "#516296",
            "#516296",
            ],
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
        delayed_relawan2rev = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_relawan2rev) {
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
      y: {
        beginAtZero: true,
        max: 100,
        },
    }, 
    plugins: {
      title: {
        display: true,
        text: ["Jumlah Kartu SIM Aktif yang Digunakan Relawan pada", "Satu Ponsel Utama Berdasarkan Provider Tahun 2022"],
        font: {
          size: 16,
          // family: "Poppins",
        },
        color: "#493a5a", 
        padding: {
          top: 5,
          bottom: 25,
          right: 10,
          left: 10,
        },
      },
      legend: {
        display: false,
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
        title: {
          display: true,
          text: "Provider",
          font: {
            size: 14,
            style: "normal",
            lineHeight: 2,
          },
        }
      },
      y: {
        grid: {
          display: false,
        },
        title: {
          display: true,
          text: "Jumlah Kartu SIM",
          font: {
            size: 14,
            style: "normal",
            lineHeight: 2,
          },
        }
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

const barChartAxisRelawan_output2rev = document.getElementById("forBarChartAxisRelawan_output2rev");
barChartAxisRelawan_output2rev.addEventListener("click", update_value_relawan_output2rev(chk_bx));

function update_value_relawan_output2rev(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    bar_relawan2rev.options.scales.x.display = true;
    bar_relawan2rev.options.scales.y.display = true;
    bar_relawan2rev.update();
  } else {
    console.log("uncheck");
    bar_relawan2rev.options.scales.x.display = false;
    bar_relawan2rev.options.scales.y.display = false;
    bar_relawan2rev.update();
  }
}
