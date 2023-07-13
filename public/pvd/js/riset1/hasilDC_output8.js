let delayed_dc_output8;
const dc_output8 = document.getElementById("dc_output8");
const bubble_dc_output8 = new Chart(dc_output8, {
  type: "bubble",
  data: {
    labels: ["Jarak Terdekat Staypoint", "H3 Tanpa Staypoint", "H3 Dengan Staypoint", "Frechet Distance", "DTW"],
    datasets: [
      {
        label: "(x, y, r)",
        data: [
            {   
                label: "0.64",
                x: 1,
                y: 0.64,
                r: 10
            },
            {
                label: "0.44",
                x: 2,
                y: 0.44,
                r: 7
            },
            {
                label: "0.44", 
                x: 3,
                y: 0.44,
                r: 10
            },
            {
                label: "0",
                x: 4,
                y: 0,
                r: 20
            },
            {
                label: "0",
                x: 5,
                y: 0,
                r: 25
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
        delayed_dc_output8 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_dc_output8) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
    scales: {
      x: {
        min: 0,
        beginAtZero: true,
        ticks: {
            stepSize: 1,
            display: true,
            callback: function(value, index, values) {
                if(index === 5) {
                    return ["DTW"];
                } else if(index === 4) {
                    return ["Frechet","Distance"]; 
                } else if(index === 3) {
                    return ["H3" ,"Dengan","Staypoint"];
                } else if(index === 2) {
                    return ["H3", "Tanpa", "Staypoint"];
                } else if(index === 1) {
                    return ["Jarak", "Terdekat", "Staypoint"];
                } else {
                    return "";
                }
            },
        },
        grid: {
            display: false,
        },
        title: {
            display: true,
            text: "Jenis Algoritma",
            
        },  
      },
      y: {
        beginAtZero: true,
        min: 0,
        max: 0.8,
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
        text: ["Visualisasi Kombinasi Algoritma Berdasarkan", "F1Score (yes) dan Waktu Running"],
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
          label: function (tooltipItem) {
            if(tooltipItem.dataIndex == 0){
              return "Waktu (menit/msisdn): 0.63"
            } else if(tooltipItem.dataIndex == 1){
              return "Waktu (menit/msisdn): 0.04"
            } else if(tooltipItem.dataIndex == 2){
              return "Waktu (menit/msisdn): 0.26"
            } else if(tooltipItem.dataIndex == 3){
              return "Waktu (menit/msisdn): 8.96"
            } else if(tooltipItem.dataIndex == 4){
              return "Waktu (menit/msisdn): 20.34"
            }
          },
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

// const barChartAxisRelawan_output8 = document.getElementById("forBarChartAxisRelawan_output8");
// barChartAxisRelawan_output8.addEventListener("click", update_value_relawan_output8(chk_bx));

// function update_value_relawan_output8(chk_bx) {
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
