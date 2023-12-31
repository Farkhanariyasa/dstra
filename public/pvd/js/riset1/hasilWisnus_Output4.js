let delayed4;

const wisnus_output4 = document.getElementById("wisnus_output4");
const bar_output4 = new Chart(wisnus_output4, {
  type: "bar",
  data: {
    labels: ["Telkomsel", "Indosat Ooredo", "XL-Axiata", "3 (Three)", "Smartfren", "Lainnya"],
    datasets: [
      {
        label: "Jumlah Kepemilikan Kartu SIM",
        data: [187873, 72854, 63958, 52276, 13985, 2208	],
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
    animation: {
      onComplete: () => {
        delayed4 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed4) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      title: {
        display: true,
        text: ["Jumlah Kepemilikan Kartu SIM Aktif yang Digunakan Wisatawan Nusantara", "Berdasarkan Provider di Kota Malang Triwulan IV 2022"], 
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
        ticks: {
            beginAtZero: true,
            max: 500000,
            stepSize: 100000,
            callback: function(value, index, values) {
              // Divide the value by 1000 and add a "k" suffix
              return (value).toFixed(0);
            }
          },
      },
    },
  },
  plugins: [ChartDataLabels],
});

const barChartAxis_output4 = document.getElementById("forBarChartAxis_output4");
barChartAxis_output4.addEventListener("click", update_value_output4(check_axis));

function update_value_output4(check_axis) {
  if (check_axis.checked) {
    console.log("check");
    bar_output4.options.scales.x.display = true;
    bar_output4.options.scales.y.display = true;
    bar_output4.update();
  } else {
    console.log("uncheck");
    bar_output4.options.scales.x.display = false;
    bar_output4.options.scales.y.display = false;
    bar_output4.update();
  }
}
