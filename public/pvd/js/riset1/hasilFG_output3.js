let delayed_fg3;

const fg_output3 = document.getElementById("fg_output3");
const bar_output3 = new Chart(fg_output3, {
  type: "bar",
  data: {
    labels: ["True FG", "False FG"],
    datasets: [
      {
        label: ["Jarak (km)"],
        data: [28.11,58.38],
        backgroundColor: "#516296",
        borderWidth: 1,
        borderRadius: 8,
      },
    ],
  },
  options: {
    animation: {
      onComplete: () => {
        delayed_fg3 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_fg3) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      annotation: {
        annotations: {
            line1: {
                type: 'line',
                yMin: 0.6,
                yMax: 0.6,
                borderColor: '#FDAB01',
                borderWidth: 2,
                label: {
                    backgroundColor: '#FDAB01',
                    content: 'Treshold: 0.6',
                    display: true,
                    position: 'center',
                    xAdjust: 0,
                    yAdjust: 0,
                }
            }
        },
    },
      title: {
        display: true,
        text: ["Grafik Perbandingan Rata-Rata", "Antar Label (Haversine)"],
        font: {
          size: 16,
          // family: "Poppins",
          style: "normal",
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
        title: {
            display: true,
            text: "Kelas",
        },
      },
      y: {        
        grid: {
          display: false,
        },
        ticks: {
            beginAtZero: true,
            max: 60,
            stepSize: 20,
            callback: function(value, index, values) {
              // Divide the value by 1000 and add a "k" suffix
              return (value).toFixed(0);
            }
          },
          title: {
            display: true,
            text: "Jarak (km)",
        },
      },
    },
  },
  plugins: [ChartDataLabels],
});

// const barChartAxis_output1 = document.getElementById("forBarChartAxis_output1");
// barChartAxis_output1.addEventListener("click", update_value_output1(check_axis));

// function update_value_output1(check_axis) {
//   if (check_axis.checked) {
//     console.log("check");
//     bar_output9.options.scales.x.display = true;
//     bar_output9.options.scales.y.display = true;
//     bar_output9.options.plugins.datalabels.display = false;
//     bar_output9.update();
//   } else {
//     console.log("uncheck");
//     bar_output9.options.scales.x.display = false;
//     bar_output9.options.scales.y.display = false;
//     bar_output9.options.plugins.datalabels.display = true;
//     bar_output9.update();
//   }
// }
