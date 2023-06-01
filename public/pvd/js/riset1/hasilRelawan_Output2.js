let delayed_relawan2;

const data_relawan2 = {
    datasets: [
      {
        label: 'Telkomsel',
        data: [
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
                x: 5.2,
                y: 5,
            },
            {
                x: 6,
                y: 5,
            },
            {
                
                x: 6.8,
                y: 5,
            },
            {
                x: 7.6,
                y: 5,
            },
            {
                x: 8.4,
                y: 5,
            },
            {
                label: '199',
                x: 9.2,
                y: 5, 
            },
            

        ],
        backgroundColor: "#FDAB01",
        pointRadius: 9,
      },
      {
        label: 'Indosat',
        data: [
            {
                x: 1.2,
                y: 4,
            },
            { 
                x: 2,
                y: 4,
            },
            {
                x: 2.8,
                y: 4,
            },
            {
                x: 3.6,
                y: 4,
            },
            {
                x: 4.4,
                y: 4,
            },
            {
                x: 5.2,
                y: 4,
            },
            {
                label: '73',
                x: 6,
                y: 4,
            },
            
        ],
        backgroundColor: "#FDAB01",
        pointRadius: 9,
      },
      {
        label: '3 (Three)',
        data: [
            {
                x: 1.2,
                y: 3,
            },
            {
                x: 2,
                y: 3, 
            },
            {
                label: '13',
                x: 2.8,
                y: 3,
            },
          ],
        backgroundColor: "#C27D90",
        pointRadius: 9,
      },
      {
        label: 'XL Axiata',
        data: [
            {
                x: 1.2,
                y: 2,
            },
            {
                label: '9',
                x: 2,
                y: 2,
            },
          ],
        backgroundColor: "#C27D90",
        pointRadius: 9,
      },
      {
        label: 'Smartfren',
        data: [
            {
                label: '2',
                x: 1.2,
                y: 1,
            },
          ],
        backgroundColor: "#C27D90",
        pointRadius: 9,
      },
      {
        label: 'Lainnya',
        data: [
            {
                label: '0',
            },
          ],
        backgroundColor: "#C27D90",
        pointRadius: 0,
      },


    ]
  };

const relawan_output2 = document.getElementById("relawan_output2");
const bar_relawan2 = new Chart(relawan_output2  , {
    type: "scatter",
  data: data_relawan2,
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
        text: ["Jumlah Kartu SIM Aktif yang Digunakan Relawan pada", "Satu Ponsel Utama Berdasarkan Provider Tahun 2022"],
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
        max: 5.3,
        ticks: {
            stepSize: 1,
            callback: function(value, index, ticks) {
                if(index === 5) {
                    return "Telkomsel";
                } else if(index === 4) {
                    return "Indosat";
                } else if(index === 3) {
                    return "3 (Three)"; 
                } else if(index === 2) {
                    return "XL Axiata";
                } else if(index === 1) {
                    return "Smartfren";
                } else if(index === 0) {
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

const barChartAxisRelawan_output2= document.getElementById("forBarChartAxisRelawan_output2");
barChartAxisRelawan_output2.addEventListener("click", update_value_relawan_output2(chk_bx));

function update_value_relawan_output2(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    bar_relawan2.options.scales.x.display = false;     
    bar_relawan2.options.scales.y.display = true;
    bar_relawan2.update();
  } else {
    console.log("uncheck");
    bar_relawan2.options.scales.x.display = false;
    bar_relawan2.options.scales.y.display = false;
    bar_relawan2.update();
  }
}
