const pie_chart = document.getElementById("pie_chart");

const diagram_lingkaran = new Chart(pie_chart, {
  type: "pie",
  data: {
    labels: ["Red", "Blue", "Yellow"],
    datasets: [
      {
        label: "My First Dataset",
        data: [300, 50, 100],
        backgroundColor: [
          "rgb(255, 99, 132)",
          "rgb(54, 162, 235)",
          "rgb(255, 205, 86)",
        ],
        hoverOffset: 4,
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      title: {
        display: true,
        text: "Pie Chart",
        font: {
          size: 18,
        },
        align: "center",
      },
      // datalabels: {
      //   anchor: "center",
      //   align: "center",
      //   offset: 150,
      //   color: "black",
      //   font: {
      //     size: 14,
      //   },
      // },
    },
  },
  // plugins: [ChartDataLabels],
});