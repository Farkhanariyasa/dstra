let delayed2;

// Chart
const t1_pie = document.getElementById("riset2_t1_hasil1");
const diagram_lingkaran = new Chart(t1_pie, {
  type: "pie",
  data: {
    labels: [
      "Ke Objek Wisata",
      "Menuju ke Kecamatan Lain",
      "Menginap di Akomodasi Komersial",
    ],
    datasets: [
      {
        label: "Jumlah",
        data: [53.59, 45.2, 1.21],
        backgroundColor: ["#c27d90", "#ffab00", "#506396" ],
        hoverOffset: 4,
        datalabels: {
          // anchor: 'end',
          // align: 'end',
          // offset: 1,
          color: "#000000",
          font: {
            size: 13,
          },
          // position: 'outside',
        },
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
        if (
          context.type === "data" &&
          context.mode === "default" &&
          !delayed2
        ) {
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
        text: [
          "Estimasi Total Perjalanan Menurut", "Kategori Utama di Kota Malang ",
          "Bulan Oktober-Desember 2022",
        ],
        font: {
          size: 16,
          style: "normal",
        },
        color: "black",
        align: "center",
      },
      // datalabels:{
      //   render: 'percentage',
      //   fontStyle: 'bolder',
      //   position: 'outside'
      // }
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
  plugins: [ChartDataLabels],
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

