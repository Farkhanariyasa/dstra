let delayed_relawan2_1;

const data_relawan2_1 = {
    datasets: [
      {
        label: 'Telkomsel',
        data: [
            {
                x: 1,
                y: 71,

            },
            {
                x: 1,
                y: 61,
            },
            {
                x: 1,
                y: 51,
            },
            {
                x: 1,
                y: 41,
            },
            {
                x: 1,
                y: 31,
            },
            {
                x: 1,
                y: 21,
            },
            {   
                x: 1,
                y: 11,
            },

        ],
        backgroundColor: "#506396",
      },
      {
        label: 'Indosat',
        data: [
            {
                x: 2,
                y: 33,
            },
            {
                x: 2,
                y: 23,
            },
            {
                x: 2,
                y: 13,
            },
        ],
        backgroundColor: "#506396",
      }
    ]
  };

const relawan_output2_1 = document.getElementById("relawan_output2_1");
const bar_relawan2_1 = new Chart(relawan_output2_1  , {
    type: "scatter",
  data: data_relawan2_1,
  options: {
    responsive: true,
    maintainAspectRatio: false,
    animation: {
      onComplete: () => {
        delayed_relawan1 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_relawan1) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
    scales: {
      x: {
        
      },
      y: {
        beginAtZero: true,
        max: 100,
        },
    }, 
    plugins: {
      title: {
        display: true,
        text: ["Jumlah Kartu SIM"],
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
        display: false,
        color: "black",
        anchor: 'end',
        align: 'top',
      },
    },
    maintainAspectRatio: false,
    scales: {
      x: {
        min: 0,
        max: 6,
        ticks: {
            stepSize: 1,
            callback: function(value, index, ticks) {
                if(index === 1) {
                    return "Telkomsel";
                } else if(index === 2) {
                    return "Indosat";
                } else if(index === 3) {
                    return "XL Axiata"; 
                } else if(index === 4) {
                    return "3 (Three)";
                } else if(index === 5) {
                    return "Smartfren";
                } else if(index === 6) {
                    return "Lainnya";
                } else {
                    return "";
                }

            }
        },
        grid: {
          display: false,
        },
      },
      y: {
        min: 0,
        max: 80,
        grid: {
          display: false,
        },
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

const barChartAxisRelawan_output2_1= document.getElementById("forBarChartAxisRelawan_output2_1");
barChartAxisRelawan_output2_1.addEventListener("click", update_value_relawan_output2_1(chk_bx));

function update_value_relawan_output2_1(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    bar_relawan2_1.options.scales.x.display = true;     
    bar_relawan2_1.options.scales.y.display = true;
    bar_relawan2_1.update();
  } else {
    console.log("uncheck");
    bar_relawan2_1.options.scales.x.display = false;
    bar_relawan2_1.options.scales.y.display = false;
    bar_relawan2_1.update();
  }
}
