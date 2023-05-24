let delayed_relawan4;
const relawan_output4 = document.getElementById("relawan_output4");
const bar_relawan4 = new Chart(relawan_output4, {
  type: "bar",
  data: {
    labels: ["0-12", "13-15", "16-18", "19-24", "25-49", ">=50"],
    datasets: [
      {
        label: "Data Training",
        data: [12, 0, 0, 0, 0, 0],
        backgroundColor: "#c27d90",
        borderWidth: 1,
        borderRadius: 8,
      },
      {
        label: "Data Testing",
        data: [47, 2, 0, 0, 0, 2],  
        backgroundColor: "#ffab00",
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
        delayed_relawan4 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_relawan4) {
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
        text: ["Jumlah Anggota Keluarga Relawan"],
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

const barChartAxisRelawan_output4 = document.getElementById("forBarChartAxisRelawan_output4");
barChartAxisRelawan_output4.addEventListener("click", update_value_relawan_output4(chk_bx));

function update_value_relawan_output4(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    bar_relawan4.options.scales.x.display = true;
    bar_relawan4.options.scales.y.display = true;
    bar_relawan4.update();
  } else {
    console.log("uncheck");
    bar_relawan4.options.scales.x.display = false;
    bar_relawan4.options.scales.y.display = false;
    bar_relawan4.update();
  }
}
