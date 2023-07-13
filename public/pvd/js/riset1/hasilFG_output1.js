let delayed_fg1;

const fg_output1 = document.getElementById("fg_output1");
const bar_output1 = new Chart(fg_output1, {
  type: "bar",
  data: {
    labels: ["True FG", "False FG"],
    datasets: [
      {
        label: "Jarak (km)",
        data: [35921.98,1324329.68],
        backgroundColor: "#516296",
        borderWidth: 1,
        borderRadius: 8,
      },
    //   {
    //     label: "False DC",
    //     data: [1324329.68,1324329.68],
    //     backgroundColor: "#516296",
    //     borderWidth: 1,
    //     borderRadius: 8,
    //   },
      //make treshold line 
        


    ],
  },
  options: {
    animation: {
      onComplete: () => {
        de = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_fg1) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      annotation: {
        annotations: {
            line1: {
                type: 'line',
                yMin: 42676.1,
                yMax: 42676.1,
                borderColor: '#FDAB01',
                borderWidth: 2,
                label: {
                    backgroundColor: '#FDAB01',
                    content: 'Treshold: 42676.1',
                    display: true,
                    position: 'center',
                    xAdjust: 0,
                    yAdjust: 0,

                }

            }
        },

    },
      title: {
        display: true,
        text: ["Grafik Perbandingan Rata-Rata", "Antar Label (DTW)"],
        font: {
          size: 16,
          // family: "Poppins",
          style: "normal",
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
        display: true,
        position: "bottom",
      },
      tooltip: {
        enabled: true,
      },
      datalabels: {
        display: true,
        color: "black",
        anchor: 'end',
        align: 'top',
      },
    },
    maintainAspectRatio: false,
    scales: {
      x: {
        grid: {
          display: false,
        },
        title: {
            display: true,
            text: "Kelas",
        },
      },
      y: {        
        grid: {
          display: false,
        },
        ticks: {
            beginAtZero: true,
            max: 1500000,
            stepSize: 500000,
            callback: function(value, index, values) {
              // Divide the value by 1000 and add a "k" suffix
              return (value).toFixed(0);
            }
          },
          title: {
            display: true,
            text: "Jarak (km)",
        },
      },
    },
  },
  plugins: [ChartDataLabels],
});

const barChartAxis_output1 = document.getElementById("forBarChartAxis_output1");
barChartAxis_output1.addEventListener("click", update_value_output1(check_axis));

function update_value_output1(check_axis) {
  if (check_axis.checked) {
    console.log("check");
    bar_output1.options.scales.x.display = true;
    bar_output1.options.scales.y.display = true;
    bar_output1.options.plugins.datalabels.display = false;
    bar_output1.update();
  } else {
    console.log("uncheck");
    bar_output1.options.scales.x.display = false;
    bar_output1.options.scales.y.display = false;
    bar_output1.options.plugins.datalabels.display = true;
    bar_output1.update();
  }
}
