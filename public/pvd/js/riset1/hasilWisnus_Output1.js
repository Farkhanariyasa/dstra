let delayed3;

const wisnus_output1 = document.getElementById("wisnus_output1");
const bar_output1 = new Chart(wisnus_output1, {
  type: "bar",
  data: {
    labels: ["Oktober", "November", "Desember"],
    datasets: [
      {
        label: "Jumlah Perjalanan Wisata",
        data: [497328, 60817, 467514],
        backgroundColor: "#3a70a6",
        borderWidth: 1,
      },
    ],
  },
  options: {
    animation: {
      onComplete: () => {
        delayed2 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed3) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      title: {
        display: true,
        text: "Jumlah Perjalanan Wisata Asal Kota Malang Triwulan IV 2022",
        font: {
          size: 16,
          // family: "Poppins",
        },
        color: "#493a5a",
        padding: {
          top: 5,
          bottom: 5,
          right: 10,
          left: 10,
        },
      },
      legend: {
        display: true,
        position: "top",
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
      },
      y: {
        grid: {
          display: false,
        },
        ticks: {
            beginAtZero: true,
            max: 500000,
            stepSize: 100000,
            callback: function(value, index, values) {
              // Divide the value by 1000 and add a "k" suffix
              return (value).toFixed(0);
            }
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
    bar_output1.update();
  } else {
    console.log("uncheck");
    bar_output1.options.scales.x.display = false;
    bar_output1.options.scales.y.display = false;
    bar_output1.update();
  }
}
