let delayed_dc_output2;
const dc_output2 = document.getElementById("dc_output2");
const bubble_dc_output2 = new Chart(dc_output2, {
  type: "bubble",
  data: {
    labels: [""],
    datasets: [
      {
        label: "Yes",
        data: [
            {   
                label: "0.54",
                x: 1,
                y: 0.54,
                r: 10
            },
            {
                label: "0.25",
                x: 2,
                y: 0.25,
                r: 10
            },
            {
                label: "0.33",
                x: 3,
                y: 0.33,
                r: 10
            },
            {
                label: "0.33",
                x: 4,
                y: 0.33,
                r: 5
            },
            {
                label: "0.42",
                x: 5,
                y: 0.42,
                r: 10
            },
            {
                label: "0.44",
                x: 6,
                y: 0.44,
                r: 10
            },
            {
                label: "0.40",
                x: 7,
                y: 0.40,
                r: 10
            },
            {
                label: "0.40",
                x: 8,
                y: 0.40,
                r: 10
            },
            {
                label: "0.35",
                x: 9,
                y: 0.35,
                r: 15
            },
            {
                label: "0.25",
                x: 10,
                y: 0.25,
                r: 20
            },
            {
                label: "0.26",
                x: 11,
                y: 0.26,
                r: 25
            },
            {
                label: "0.29",
                x: 12,
                y: 0.29,
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
        delayed_dc_output2 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_dc_output2) {
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
