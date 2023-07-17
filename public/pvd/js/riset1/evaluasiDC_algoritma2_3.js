let delayed_dc_algoritma2_3;
const dc_algoritma2_3 = document.getElementById("dc_algoritma2_3");
const bar_dc_algoritma2_3 = new Chart(dc_algoritma2_3, {
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
        label: "Yes",
        data: [68
            ,21
            ,32
            ,47
            ,53
            ,63
            ,63
            ,58
            ,21
            ,21
            ,21
            ,21
            
            

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
    {
        label: "No",
        data: [96
            ,98
            ,98
            ,96
            ,96
            ,97
            ,97
            ,97
            ,98
            ,98
            ,98
            ,98
            
            
            
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
        delayed_dc_algoritma2_3 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_dc_algoritma2_3) {
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
        text: ["Recall (%)"],
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


