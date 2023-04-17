let delayed1;

// Chart
const tp_pie = document.getElementById("tp_pie");
const diagram_lingkaran = new Chart(tp_pie, {
  type: "pie",
  data: {
    labels: [
      "Menuju ke Kecamatan Lain",
      "Menginap di Akomodasi Komersial",
      "Ke Objek Wisata",
    ],
    datasets: [
      {
        label: "Jumlah",
        data: [43.9, 1.28, 54.81],
        backgroundColor: ["#506396", "#c27d90", "#ffab00"],
        hoverOffset: 4,
      },
    ],
  },
  options: {
    animation: {
      onComplete: () => {
        delayed1 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed1) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        position: "bottom",
        display: false,
      },
      title: {
        display: true,
        text: "Estimasi Total Perjalanan Menurut Tujuan Utama di Kota Malang Bulan Oktober-Desember 2022",
        font: {
          size: 20,
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

const pieChartLegend = document.getElementById("forPieChartLegend");
pieChartLegend.addEventListener("click", update_value1(chk_bx));

function update_value1(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    diagram_lingkaran.options.plugins.legend.display = true;
    diagram_lingkaran.update();
  } else {
    console.log("uncheck");
    diagram_lingkaran.options.plugins.legend.display = false;
    diagram_lingkaran.update();
  }
}

