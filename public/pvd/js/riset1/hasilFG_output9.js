let delayed_fg_output9;
const fg_output9 = document.getElementById("fg_output9");
const bar_fg_output9 = new Chart(fg_output9, {
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
        data: [1.50,
            2.50,
            10.50,
            27.50,
            56.50,
            90.50,
            137.00,
            193.00,
            269.00,
            265.00,
            282.00,
            282.5,
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
        data: [1.32,
            1.98,
            5.92,
            12.95,
            27.21,
            50.08,
            80.38,
            114.21,
            122.11,
            115.68,
            105.49,
            105.4,
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
        data: [1.05,
            1.18,
            4.28,
            7.42,
            13.96,
            23.21,
            37.61,
            53.75,
            51.08,
            46.48,
            44.48,
            47.96919127
            
            
            
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
        delayed_fg_output9 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_fg_output9) {
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
        max: 300,
        title: {
            display: true,
            text: "Rata-Rata Jumlah Irisan",
        },
        },
    }, 
    plugins: {
      title: {
        display: true,
        text: ["Grafik Perbandingan Rata-Rata", "Antar Label (no staypoint)"],
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
