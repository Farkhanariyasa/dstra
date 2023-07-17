let delayed_dc_output1;
const dc_output1 = document.getElementById("dc_output1");
const bubble_dc_output1 = new Chart(dc_output1, {
  type: "bubble",
  data: {
    labels: ["Visualisasi Algoritma", "Visualisasi Algoritma"],
    datasets: [
      {
        label: "Yes",
        data: [
            {   
                label: "0.56",
                x: 1,
                y: 0.56,
                r: 10
            },
            {
                label: "0.64",
                x: 2,
                y: 0.64,
                r: 35
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
        delayed_dc_output1 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_dc_output1) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
    scales: {
      x: {
        beginAtZero: true,
        min: 0.5,
        max: 2.5,
        ticks: {
            stepSize: 0.5,
            display: true,
        },
        grid: {
            display: false,
        },
        title: {
            display: true,
            text: "Periode Waktu Referensi",
            
        },  
      },
      y: {
        beginAtZero: true,
        min: 0,
        max: 1,
        ticks: {
            stepSize: 0.2
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
        text: ["Visualisasi Hasil Algoritma Berdasarkan", "F1Score (yes) dan Waktu Running (Haversine)"],
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
        //return text label 
        callbacks: {
          label: function (tooltipItem, data) {
            if (tooltipItem.dataIndex == 0) {
              return "Waktu (menit/msisdn): 0.06"
            } else if (tooltipItem.dataIndex == 1) {
              return "Waktu (menit/msisdn): 0.63"
            } 

          }
        }
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


