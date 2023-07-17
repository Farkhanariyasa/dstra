let delayed_fg2;

const fg_output2 = document.getElementById("fg_output2");
const bar_output2 = new Chart(fg_output2, {
  type: "bar",
  data: {
    labels: ["True FG", "False FG"],
    datasets: [
      {
        label: "Jarak (km)",
        data: [233.24,1009.43],
        backgroundColor: "#516296",
        borderWidth: 1,
        borderRadius: 8,
      },

    ],
  },
  options: {
    animation: {
      onComplete: () => {
        delayed_fg2 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed_fg2) {
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
                yMin: 270.3,
                yMax: 270.3,
                borderColor: '#FDAB01',
                borderWidth: 2,
                label: {
                    backgroundColor: '#FDAB01',
                    content: 'Treshold: 270.3',
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
        text: ["Grafik Perbandingan Rata-Rata", "Antar Label (Frechet)"],
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
            max: 1250,
            stepSize: 250,
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


