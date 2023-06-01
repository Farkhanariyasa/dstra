let delayed_relawan4;

const data_relawan4 = {
    datasets: [
      {
        label: '0-12',
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
                label: '59',
                x: 9.2,
                y: 5, 
            },
            

        ],
        backgroundColor: "#C27D90",
        pointRadius: 9,
      },
      {
        label: '13-15',
        data: [
            {
                label: '2',
                x: 0.4,
                y: 4,
            },
            
            
        ],
        backgroundColor: "#C27D90",
        pointRadius: 9,
      },
      {
        label: '16-18',
        data: [
            
          ],
        backgroundColor: "#C27D90",
        pointRadius: 9,
      },
      {
        label: '19-24',
        data: [
            
          ],
        backgroundColor: "#C27D90",
        pointRadius: 9,
      },
      {
        label: '25-49',
        data: [
            {
                label: '0',
            },
          ],
        backgroundColor: "#C27D90",
        pointRadius: 9,
      },
      {
        label: '>=50',
        data: [
            {
                label: '2',
                x: 0.4,
                y: 0,
            },
          ],
        backgroundColor: "#C27D90",
        pointRadius: 9,
      },


    ]
  };

const relawan_output4 = document.getElementById("relawan_output4");
const bar_relawan4 = new Chart(relawan_output4  , {
    type: "scatter",
  data: data_relawan4,
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
        text: ["Jumlah Anggota Keluarga Relawan yang Tidak Memiliki", "Handphone Pribadi Berdasarkan Kelompok Umur Tahun 2022"],
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
        min: (-0.3),
        max: 5.3,
        ticks: {
            stepSize: 1,
            callback: function(value, index, ticks) {
                if(index === 6) {
                    return "0-12";
                } else if(index === 5) {
                    return "13-15";
                } else if(index === 4) {
                    return "16-18"; 
                } else if(index === 3) {
                    return "19-24";
                } else if(index === 2) {
                    return "25-49";
                } else if(index === 1) {
                    return ">=50";
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

const barChartAxisRelawan_output4= document.getElementById("forBarChartAxisRelawan_output4");
barChartAxisRelawan_output4.addEventListener("click", update_value_relawan_output4(chk_bx));

function update_value_relawan_output4(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    bar_relawan4.options.scales.x.display = false;     
    bar_relawan4.options.scales.y.display = true;
    bar_relawan4.update();
  } else {
    console.log("uncheck");
    bar_relawan4.options.scales.x.display = false;
    bar_relawan4.options.scales.y.display = false;
    bar_relawan4.update();
  }
}
