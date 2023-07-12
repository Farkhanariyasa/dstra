let delayed_dc_output3;
const dc_output3 = document.getElementById("dc_output3");
const bubble_dc_output3 = new Chart(dc_output3, {
  type: "bubble",
  data: {
    labels: ["Visualisasi Algoritma", 
    "Visualisasi Algoritma",
    "Visualisasi Algoritma",
    "Visualisasi Algoritma",
    "Visualisasi Algoritma",
    "Visualisasi Algoritma",
    "Visualisasi Algoritma",
    "Visualisasi Algoritma",
    "Visualisasi Algoritma",
    "Visualisasi Algoritma",
    "Visualisasi Algoritma",
    "Visualisasi Algoritma"],   
    datasets: [
      {
        label: "Yes",
        data: [
            {   
                label: "0.11",
                x: 1,
                y: 0.11,
                r: 5
            },
            {
                label: "0.00",
                x: 2,
                y: 0.00,
                r: 5
            },
            {
                label: "0.33",
                x: 3,
                y: 0.00,
                r: 8
            },
            {
                label: "0.33",
                x: 4,
                y: 0.25,
                r: 8
            },
            {
                label: "0.31",
                x: 5,
                y: 0.31,
                r: 11
            },
            {
                label: "0.31",
                x: 6,
                y: 0.31,
                r: 14
            },
            {
                label: "0.24",
                x: 7,
                y: 0.24,
                r: 17
            },
            {
                label: "0.44",
                x: 8,
                y: 0.44,
                r: 20
            },
            {
                label: "0.35",
                x: 9,
                y: 0.35,
                r: 23
            },
            {
                label: "0.29",
                x: 10,
                y: 0.29,
                r: 23
            },
            {
                label: "0.10",
                x: 11,
                y: 0.10,
                r: 26
            },
            {
                label: "0.09",
                x: 12,
                y: 0.09,
                r: 29
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
        delayed_dc_output3 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_dc_output3) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
    scales: {
      x: {
        beginAtZero: true,
        min: 1,
        max: 13,
        ticks: {
            stepSize: 1,
            display: true,
        },
        grid: {
            display: false,
        },
        title: {
            display: true,
            text: "Resolusi",
            
        },  
      },
      y: {
        beginAtZero: true,
        min: 0,
        max: 0.6,
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
        text: ["Visualisasi Hasil Algoritma Berdasarkan", "F1Score (yes) dan Waktu Running (with staypoint)"],
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
              return "Waktu (menit/msisdn): 0.08"
            } else if(tooltipItem.dataIndex == 1){
              return "Waktu (menit/msisdn): 0.08"
            } else if(tooltipItem.dataIndex == 2){
              return "Waktu (menit/msisdn): 0.09"
            } else if(tooltipItem.dataIndex == 3){
              return "Waktu (menit/msisdn): 0.09"
            } else if(tooltipItem.dataIndex == 4){
              return "Waktu (menit/msisdn): 0.10"
            } else if(tooltipItem.dataIndex == 5){
              return "Waktu (menit/msisdn): 0.13"
            } else if(tooltipItem.dataIndex == 6){
              return "Waktu (menit/msisdn): 0.19"
            } else if(tooltipItem.dataIndex == 7){
              return "Waktu (menit/msisdn): 0.26"
            } else if(tooltipItem.dataIndex == 8){
              return "Waktu (menit/msisdn): 0.34"
            } else if(tooltipItem.dataIndex == 9){
              return "Waktu (menit/msisdn): 0.40"
            }else if(tooltipItem.dataIndex == 10){
              return "Waktu (menit/msisdn): 0.43"
            } else if(tooltipItem.dataIndex == 11){
              return "Waktu (menit/msisdn): 0.44"
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

// const barChartAxisRelawan_output3 = document.getElementById("forBarChartAxisRelawan_output3");
// barChartAxisRelawan_output3.addEventListener("click", update_value_relawan_output3(chk_bx));

// function update_value_relawan_output3(chk_bx) {
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
