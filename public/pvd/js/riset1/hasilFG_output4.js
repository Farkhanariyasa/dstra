let delayed_fg_output4;
const fg_output4 = document.getElementById("fg_output4");
const bar_fg_output4 = new Chart(fg_output4, {
  type: "line",
  data: {
    labels: [
        "1", 
        "2", 
        "3", 
        "4", 
        "5", 
        "6", 
        "7", 
        "8", 
        "9", 
        "10", 
        "11", 
        "12"
    ],
    datasets: [
      {
        label: "Treshold",
        data: [0.49,
            0.52,
            0.52,
            0.52,
            0.51,
            0.51,
            0.52,
            0.42,
            0.27,
            0.15,
            0.50,
            0.52,
            
        ],
        // backgroundColor: ["#516296",],
        // borderWidth: 1,
        // borderRadius: 8,
        fill: false,
        borderColor: "#FDAB01",
        pointStyle: 'circle',
        pointRadius: 1,
        pointHoverRadius: 10,
    },
    {
        label: "True FG",
        data: [0.46,
            0.46,
            0.49,
            0.51,
            0.54,
            0.58,
            0.61,
            0.62,
            0.55,
            0.48,
            0.45,
            0.43,
            
            
            
        ],
        // backgroundColor: [ "#C27D90"],
        // borderWidth: 1,
        // borderRadius: 8,
        fill: false,
        borderColor: "#516296",
        pointStyle: 'circle',
        pointRadius: 1,
        pointHoverRadius: 10,
    },
    {
        label: "False FG",
        data: [0.45,
            0.43,
            0.38,
            0.38,
            0.26,
            0.13,
            0.05,
            0.03,
            0.02,
            0.01,
            0.01,
            0.01,
            
            
            
        ],
        // backgroundColor: [ "#C27D90"],
        // borderWidth: 1,
        // borderRadius: 8,
        fill: false,
        borderColor: "#C27D90",
        pointStyle: 'circle',
        pointRadius: 1,
        pointHoverRadius: 10,
    },


      
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    animation: {
      onComplete: () => {
        delayed_fg_output4 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_fg_output4) {
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
        title: {
          display: true,
          text: "Resolusi",
      },
      },
      y: {
        beginAtZero: true,
        max: 0.8,
        title: {
          display: true,
          text: "Rata-Rata Jumlah Irisan",
      },
        },
    }, 
    plugins: {
      title: {
        display: true,
        text: ["Grafik Perbandingan Rata-Rata", "Antar Label (with staypoint)"],
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
        display: false,
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
          text: "Resolusi",
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
          text: "Rata-rata Jumlah Irisan",
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

// const barChartAxisRelawan_output1 = document.getElementById("forBarChartAxisRelawan_output1");
// barChartAxisRelawan_output1.addEventListener("click", update_value_relawan_output1(chk_bx));

// function update_value_relawan_output1(chk_bx) {
//   if (chk_bx.checked) {
//     console.log("check");
//     bar_relawan1.options.scales.x.display = true;
//     bar_relawan1.options.scales.y.display = true;
//     bar_relawan1.update();
//   } else {
//     console.log("uncheck");
//     bar_relawan1.options.scales.x.display = false;
//     bar_relawan1.options.scales.y.display = false;
//     bar_relawan1.update();
//   }
// }
