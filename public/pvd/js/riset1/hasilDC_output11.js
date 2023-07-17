const dc_output11 = document.getElementById("dc_output11");
const bar_output11 = new Chart(dc_output11, {
  type: "bar",
  data: {
    labels: ["True DC", "False DC"],
    datasets: [
      {
        label: ["Jarak"],
        data: [192394, 233661],
        backgroundColor: "#516296",
        borderWidth: 1,
        borderRadius: 8,
      },


    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
        annotation: {
            annotations: {
                line1: {
                    type: 'line',
                    yMin: 34180,
                    yMax: 34180,
                    borderColor: '#FDAB01',
                    borderWidth: 2,
                    label: {
                        backgroundColor: '#FDAB01',
                        content: 'Treshold: 34180',
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
        display: false,
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
            text: 'Kelas',
        },
      },
      y: {        
        grid: {
          display: false,
        },
        ticks: {
            beginAtZero: true,
            max: 600,
            callback: function(value, index, values) {
              // Divide the value by 1000 and add a "k" suffix
              return (value).toFixed(0);
            }
          },
        title: {
            display: true,
            text: 'Jarak (Km)',
        },
      },
    },
  },
  plugins: [ChartDataLabels],
});

