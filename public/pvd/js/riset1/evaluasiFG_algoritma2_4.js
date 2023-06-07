let delayed_fg_algoritma2_4;
const fg_algoritma2_4 = document.getElementById("fg_algoritma2_4");
const bar_fg_algoritma2_4 = new Chart(fg_algoritma2_4, {
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
        label: "Accuracy",
        data: [86
            ,81
            ,83
            ,75
            ,84
            ,89
            ,92
            ,92
            ,88
            ,89
            ,90
            ,90
            
            

        ],
        // backgroundColor: ["#516296",],
        // borderWidth: 1,
        // borderRadius: 8,
        fill: false,
        borderColor: "#516296",
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
        delayed_fg_algoritma2_4 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_fg_algoritma2_4) {
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
        text: ["Accuracy (%)"],
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
          display: false,
          text: "F1-Score (%)",
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
