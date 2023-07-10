let delayed_relawan3;

const data_relawan3 = {
    datasets: [
      {
        label: 'Telkomsel-Indosat',
        data: [
            {
                x: 0.4,
                y: 21,
            },
            {
                x: 1.2,
                y: 21,

            },
            {
                x: 2,
                y: 21,
            },
            {
                x: 2.8,
                y: 21,
            },
            {
                x: 3.6,
                y: 21,
            },
            {
                x: 4.4,
                y: 21,
            },
            { 
                x: 5.2,
                y: 21,
            },
            {
                x: 6,
                y: 21,
            },
            {
                
                x: 6.8,
                y: 21,
            },
            {
                x: 7.6,
                y: 21,
            },
            {
                x: 8.4,
                y: 21,
            },
            {
                label: '38',
                x: 9.2,
                y: 21, 
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
                y: 20,
            },
            {
                x: 1.2,
                y: 20,
            },
            { 
                x: 2,
                y: 20,
            },
            {
                x: 2.8,
                y: 20,
            },
            {
                x: 3.6,
                y: 20,
            },
            {
                x: 4.4,
                y: 20,
            },
            {
                x: 5.2,
                y: 20,
            },
            {
                x: 6,
                y: 20,
            },
            {
                x: 6.8,
                y: 20,
            },
            {
                x: 7.6,
                y: 20,
            },
            {
                label: '16',
                x: 8.4,
                y: 20,
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
                y: 19,
            },
            {
                x: 1.2,
                y: 19,
            },
            {
                x: 2,
                y: 19, 
            },
            {
                x: 2.8,
                y: 19,
            },
            {
                x: 3.6,
                y: 19,
            },
            {
                x: 4.4,
                y: 19,
            },
            {
                x: 5.2,
                y: 19,
            },
            {
                x: 6,
                y: 19,
            },
            {
                x: 6.8,
                y: 19,
            },
            {
                label: '9',
                x: 7.6,
                y: 19,
            },
            
          ],
        backgroundColor: "#C27D90",
        pointRadius: 9,
      },
      {
        label: 'Telkomsel-XL Axiata',
        data: [
            {
                x: 0.4,
                y: 18,
            },
            {
                x: 1.2,
                y: 18,
            },
            {
                x: 2,
                y: 18,
            },
            {
                x: 2.8,
                y: 18,
            },
            {
                x: 3.6,
                y: 18,
            },
            {
                x: 4.4,
                y: 18,
            },
            {
                label: '7',
                x: 5.2,
                y: 18,
            },
          ],
        backgroundColor: "#C27D90",
        pointRadius: 9,
      },
      {
        label: 'Indosat-Indosat',
        data: [
            {
                x: 0.4,
                y: 17,
            },
            {
                
                x: 1.2,
                y: 17,
            },
            {
                x: 2,
                y: 17,
            },
            {
                label: '3',
                x: 2.8,
                y: 17,
            }

          ],
        backgroundColor: "#FDAB01",
        pointRadius: 9,
      },
      {
        label: 'Telkomsel-Smartfren',
        data: [
            {
                x: 0.4,
                y: 16,
            },
            {
                x: 1.2,
                y: 16,
            },
            {
                label: '2',
                x: 2,
                y: 16,
            },
          ],
        backgroundColor: "#C27D90",
        pointRadius: 9,
      },
      {
        label: 'Indosat-3 (Three)',
        data: [
            {
                x: 0.4,
                y: 15,
            },
            {
                label: '1',
                x: 1.2,
                y: 15,
            },
            ],
        backgroundColor: "#C27D90",
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
        max: 22,
        ticks: {
            stepSize: 1,
            callback: function(value, index, ticks) {
                if(index === 21) {
                    return "Telkomsel-Indosat";
                } else if(index === 20) {
                    return "Telkomsel-Telkomsel";
                } else if(index === 19) {
                    return "Telkomsel-3 (Three)"; 
                } else if(index === 18) {
                    return "Telkomsel-Xl Axiata";
                } else if(index === 17) {
                    return "Indosat-Indosat";
                } else if(index === 16) {
                    return "Telkomsel-Smartfren";
                } else if(index === 15) {
                    return "Indosat-3 (Three)"; 
                } else if(index === 14) {
                    return "3 (Three)-3 (Three)";
                } else if(index === 13) {
                    return "3 (Three)-Lainnya";
                } else if(index === 12) {
                    return "3 (Three)-Smartfren";
                } else if(index === 11) {
                    return "Indosat-Lainnya";
                } else if(index === 10) {
                    return "Indosat-Smartfren";
                } else if(index === 9) {
                    return "Indosat-XL Axiata";
                } else if(index === 8) {
                    return "Lainnya-Lainnya";
                } else if(index === 7) {
                    return "Smartfren-Lainnya";
                } else if(index === 6) {
                    return "Smartfren-Smartfren";
                } else if(index === 5) {
                    return "Telkomsel-Lainnya";
                } else if(index === 4) {
                    return "XL Axiata-3 (Three)";
                } else if(index === 3) {
                    return "XL Axiata-Lainnya";
                } else if(index === 2) {
                    return "XL Axiata-Smartfren";
                } else if(index === 1) {
                    return "XL Axiata-XL Axiata";
                } else {
                    return "";
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
