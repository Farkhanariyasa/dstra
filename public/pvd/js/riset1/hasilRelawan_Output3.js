let delayed_relawan3;

const data_relawan3 = {
    datasets: [
      {
        label: 'Telkomsel-Indosat',
        data: [
            {
                x: 0.4,
                y: 8,
            },
            {
                x: 1.2,
                y: 8,

            },
            {
                x: 2,
                y: 8,
            },
            {
                x: 2.8,
                y: 8,
            },
            {
                x: 3.6,
                y: 8,
            },
            {
                x: 4.4,
                y: 8,
            },
            { 
                x: 5.2,
                y: 8,
            },
            {
                x: 6,
                y: 8,
            },
            {
                
                x: 6.8,
                y: 8,
            },
            {
                x: 7.6,
                y: 8,
            },
            {
                x: 8.4,
                y: 8,
            },
            {
                label: '38',
                x: 9.2,
                y: 8, 
            },
            

        ],
        backgroundColor: "#FDAB01",
        pointRadius: 9,
      },
      {
        label: 'Telkomsel-Telkomsel',
        data: [
            {
                x: 0.4,
                y: 7,
            },
            {
                x: 1.2,
                y: 7,
            },
            { 
                x: 2,
                y: 7,
            },
            {
                x: 2.8,
                y: 7,
            },
            {
                x: 3.6,
                y: 7,
            },
            {
                x: 4.4,
                y: 7,
            },
            {
                x: 5.2,
                y: 7,
            },
            {
                x: 6,
                y: 7,
            },
            {
                x: 6.8,
                y: 7,
            },
            {
                label: '16',
                x: 7.6,
                y: 7,
            },
            
            
        ],
        backgroundColor: "#FDAB01",
        pointRadius: 9,
      },
      {
        label: 'Telkomsel-3 (Three)',
        data: [
            {
                x: 0.4,
                y: 6,
            },
            {
                x: 1.2,
                y: 6,
            },
            {
                x: 2,
                y: 6, 
            },
            {
                x: 2.8,
                y: 6,
            },
            {
                x: 3.6,
                y: 6,
            },
            {
                x: 4.4,
                y: 6,
            },
            {
                x: 5.2,
                y: 6,
            },
            {
                label: '9',
                x: 6,
                y: 6,
            },
            
          ],
        backgroundColor: "#516296",
        pointRadius: 9,
      },
      {
        label: 'Telkomsel-XL Axiata',
        data: [
            {
                x: 0.4,
                y: 5,
            },
            {
                x: 1.2,
                y: 5,
            },
            {
                x: 2,
                y: 5,
            },
            {
                x: 2.8,
                y: 5,
            },
            {
                x: 3.6,
                y: 5,
            },
            {
                x: 4.4,
                y: 5,
            },
            {
                label: '7',
                x: 5.2,
                y: 5,
            },
          ],
        backgroundColor: "#516296",
        pointRadius: 9,
      },
      {
        label: 'Indosat-Indosat',
        data: [
            {
                x: 0.4,
                y: 4,
            },
            {
                
                x: 1.2,
                y: 4,
            },
            {
                label: '3',
                x: 2,
                y: 4,
            },

          ],
        backgroundColor: "#FDAB01",
        pointRadius: 9,
      },
      {
        label: 'Telkomsel-Smartfren',
        data: [
            {
                x: 0.4,
                y: 3,
            },
            {
                label: '2',
                x: 1.2,
                y: 3,
            },
          ],
        backgroundColor: "#516296",
        pointRadius: 9,
      },
      {
        label: 'Indosat-3 (Three)',
        data: [
            {
                label: '1',
                x: 0.4,
                y: 2,
            },
            ],
        backgroundColor: "#516296",
        pointRadius: 9,
      },



    ]
  };

const relawan_output3 = document.getElementById("relawan_output3");
const bar_relawan3 = new Chart(relawan_output3  , {
    type: "scatter",
  data: data_relawan3,
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
        text: ["Jumlah Relawan dengan Kepemilikan Ganda Kartu SIM Aktif", "yang Digunakan pada Satu Ponsel Utama Berdasarkan Kombinasi Provider Tahun 2022"],
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
        enabled: false,
      },
      datalabels: {
        display: function(context) {
          // display all last labels
          return context.dataIndex === context.dataset.data.length - 1;
        },
        color: "black",
        anchor: 'right',
        align: 'right',    
        offset: 8,

      },
    },
    maintainAspectRatio: false,
    scales: {
      y: {
        min: 0,
        max: 8.5,
        ticks: {
            stepSize: 1,
            callback: function(value, index, ticks) {
                
                if(index === 8) {
                    return "Telkomsel-Indosat";
                } else if(index === 7) {
                    return "Telkomsel-Telkomsel";
                } else if(index === 6) {
                    return "Telkomsel-3 (Three)"; 
                } else if(index === 5) {
                    return "Telkomsel-Xl Axiata";
                } else if(index === 4) {
                    return "Indosat-Indosat";
                } else if(index === 3) {
                    return "Telkomsel-Smartfren";
                } else if(index === 2) {
                    return "Indosat-3 (Three)"; 
                } else if(index === 1) {
                    return "Kombinasi Lainnya";
                }

            }
        },
        grid: {
          display: false,
        },
      },
      x: {
        min: 0,
        max: 10,
        grid: {
          display: false,
        },
        display: false,
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

const barChartAxisRelawan_output3= document.getElementById("forBarChartAxisRelawan_output3");
barChartAxisRelawan_output3.addEventListener("click", update_value_relawan_output3(chk_bx));

function update_value_relawan_output3(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    bar_relawan3.options.scales.x.display = false;     
    bar_relawan3.options.scales.y.display = true;
    bar_relawan3.update();
  } else {
    console.log("uncheck");
    bar_relawan3.options.scales.x.display = false;
    bar_relawan3.options.scales.y.display = false;
    bar_relawan3.update();
  }
}
