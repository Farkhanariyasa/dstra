let delayed_fg_output5;
const fg_output5 = document.getElementById("fg_output5");
const bubble_fg_output5 = new Chart(fg_output5, {
  type: "bubble",
  data: {
    labels: ["Visualisasi Algoritma"],
    datasets: [
      {
        label: "Yes",
        data: [
            {   
                label: "0.08",
                x: 15.56,
                y: 0.08,
                r: 30
            },
            

        ],
        backgroundColor: ["#516296"],
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
        delayed_fg_output5 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_fg_output5) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
    scales: {
      x: {
        beginAtZero: true,
        min: 0,
        max: 35,
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
        min: 0,
        max: 0.2,
        ticks: {
            stepSize: 0.05
        },
        title: {
            display: true,
            text: "F1-Score True FG",
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
                return ["F1-Score: 0.08", "Waktu (menit/msisdn): 15.56"]
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


