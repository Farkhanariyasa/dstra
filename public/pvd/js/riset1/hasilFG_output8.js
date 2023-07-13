let delayed_fg_output8;
const fg_output8 = document.getElementById("fg_output8");
const bubble_fg_output8 = new Chart(fg_output8, {
  type: "bubble",
  data: {
    labels: [""],
    datasets: [
      {
        label: "Yes",
        data: [
            {   
                label: "0.13",
                x: 1,
                y: 0.13,
                r: 8
            },
            {
                label: "0.23",
                x: 2,
                y: 0.23,
                r: 15
            },
            {
                label: "0.49",
                x: 3,
                y: 0.49,
                r: 24
            },
            {
                label: "0.53",
                x: 4,
                y: 0.53,
                r: 21
            },
            {
                label: "0.56",
                x: 5,
                y: 0.56,
                r: 27
            },
            {
                label: "0.74",
                x: 6,
                y: 0.74,
                r: 21
            },
            {
                label: "0.73",
                x: 7,
                y: 0.73,
                r: 24
            },
            {
                label: "0.8",
                x: 8,
                y: 0.80,
                r: 27
            },
            {
                label: "0.86",
                x: 9,
                y: 0.86,
                r: 30
            },
            {
                label: "0.25",
                x: 10,
                y: 0.25,
                r: 27
            },
            {
                label: "0.59",
                x: 11,
                y: 0.59,
                r: 27
            },
            {
                label: "0.59",
                x: 12,
                y: 0.59,
                r: 24
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
        delayed_fg_output8 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_fg_output8) {
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
        max: 1,
        ticks: {
            stepSize: 0.25
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
              return "Waktu (menit/msisdn): 1.236"
            } else if(tooltipItem.dataIndex == 1){
              return "Waktu (menit/msisdn): 1.328"
            } else if(tooltipItem.dataIndex == 2){
              return "Waktu (menit/msisdn): 1.301"
            } else if(tooltipItem.dataIndex == 3){
              return "Waktu (menit/msisdn): 1.288"
            } else if(tooltipItem.dataIndex == 4){
              return "Waktu (menit/msisdn): 1.309"
            } else if(tooltipItem.dataIndex == 5){
              return "Waktu (menit/msisdn): 1.300"
            } else if(tooltipItem.dataIndex == 6){
              return "Waktu (menit/msisdn): 1.299"
            } else if(tooltipItem.dataIndex == 7){
              return "Waktu (menit/msisdn): 1.314"
            } else if(tooltipItem.dataIndex == 8){
              return "Waktu (menit/msisdn): 1.326"
            } else if(tooltipItem.dataIndex == 9){
              return "Waktu (menit/msisdn): 1.312"
            }else if(tooltipItem.dataIndex == 10){
              return "Waktu (menit/msisdn): 1.303"
            } else if(tooltipItem.dataIndex == 11){
              return "Waktu (menit/msisdn): 1.290"
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

// const barChartAxisRelawan_output2 = document.getElementById("forBarChartAxisRelawan_output2");
// barChartAxisRelawan_output2.addEventListener("click", update_value_relawan_output2(chk_bx));

// function update_value_relawan_output2(chk_bx) {
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
