let delayed_dc_algoritma2_7;
const dc_algoritma2_7 = document.getElementById("dc_algoritma2_7");
const bar_dc_algoritma2_7 = new Chart(dc_algoritma2_7, {
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
        data: [58
            ,58
            ,26
            ,37
            ,37
            ,37
            ,74
            ,74
            ,74
            ,74
            ,68
            ,68
            
            
            

        ],
        
        fill: false,
        borderColor: "#516296",
        pointStyle: 'circle',
        pointRadius: 1,
        pointHoverRadius: 10,
    },
    {
        label: "No",
        data: [97
            ,97
            ,99
            ,98
            ,98
            ,99
            ,96
            ,96
            ,96
            ,96
            ,96
            ,95
            
            
            
            
        ],
        
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
        delayed_dc_algoritma2_7 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_dc_algoritma2_7) {
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


