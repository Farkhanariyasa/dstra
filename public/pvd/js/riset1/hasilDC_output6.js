let delayed_dc_output6;
const dc_output6 = document.getElementById("dc_output6");
const bubble_dc_output6 = new Chart(dc_output6, {
  type: "bubble",
  data: {
    labels: ["Frechet"],
    datasets: [
      {
        label: "(x, y, r)",
        data: [
            {   
                label: "0",
                x: 20.34,
                y: 0,
                r: 30
            },

        ],
        backgroundColor: ["#C27D90"],
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
        delayed_dc_output6 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_dc_output6) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
    scales: {
      x: {
        beginAtZero: true,
        min: 0,
        max: 30,
        ticks: {
            stepSize: 5,
            display: true,
        },
        grid: {
            display: false,
        },
        title: {
            display: true,
            text: "Waktu (menit/msisdn)",
            
        },  
      },
      y: {
        beginAtZero: true,
        min: -1,
        max: 1,
        ticks: {
            stepSize: 0.5
        },
        title: {
            display: true,
            text: "F1-Score True DC",
        },
        grid: {
            display: false,

        },
    },
    }, 
    plugins: {
      title: {
        display: true,
        text: ["Visualisasi Hasil Algoritma Berdasarkan", "F1Score (yes) dan Waktu Running (Frechet)"],
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
        callbacks: {
          label: function (tooltipItem, data) {
            if(tooltipItem.dataIndex == 0){
                return ["F1-Score: 0.00", "Waktu (menit/msisdn): 8.96"]
            }
          },
        },
      },
      datalabels: {
        display: true,
        font: {
          size: 11,
        },
        color: "black",
        anchor: 'center',
        align: 'center',
      },
    },
    maintainAspectRatio: false,
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


