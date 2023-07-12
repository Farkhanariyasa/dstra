let delayed_fg_output10;
const fg_output10 = document.getElementById("fg_output10");
const bubble_fg_output10 = new Chart(fg_output10, {
  type: "bubble",
  data: {
    labels: [""],
    datasets: [
      {
        label: "Yes",
        data: [
            {   
                label: "0.28",
                x: 1,
                y: 0.28,
                r: 12
            },
            {
                label: "0.31",
                x: 2,
                y: 0.31,
                r: 12
            },
            {
                label: "0.06",
                x: 3,
                y: 0.06,
                r: 12
            },
            {
                label: "0.0",
                x: 4,
                y: 0.0,
                r: 8
            },
            {
                label: "0.0",
                x: 5,
                y: 0.0,
                r: 16
            },
            {
                label: "0.05",
                x: 6,
                y: 0.05,
                r: 12
            },
            {
                label: "0.05",
                x: 7,
                y: 0.05,
                r: 12
            },
            {
                label: "0.0",
                x: 8,
                y: 0.00,
                r: 12
            },
            {
                label: "0.06",
                x: 9,
                y: 0.06,
                r: 16
            },
            {
                label: "0.15",
                x: 10,
                y: 0.15,
                r: 20
            },
            {
                label: "0.0",
                x: 11,
                y: 0.0,
                r: 20
            },
            {
                label: "0.0",
                x: 12,
                y: 0.0,
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
        delayed_fg_output10 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_fg_output10) {
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
        min: -0.1,
        max: 0.4,
        ticks: {
            stepSize: 0.1
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
        text: ["Visualisasi Hasil Algoritma Berdasarkan", "F1Score (yes) dan Waktu Running (no staypoint)"],
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
