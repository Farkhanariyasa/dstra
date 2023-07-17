const wisnus_output2 = document.getElementById("wisnus_output2");
const pie_wisnus2 = new Chart(wisnus_output2, {
  type: "pie",
  data: {
    labels: [
      "Berkunjung ke Objek Wisata", 
      "Berkunjung ke luar kota untuk tujuan lain  ", 
      "Menginap di Akomodasi Komersial", ],

    datasets: [
      {
        label: "Jumlah Anggota",
        data: [497329,467513, 60817, ],
        borderwidth: 1,
        backgroundColor: ["#FDAB01","#C27D90", "#516296"],
      },
    ],
  },
  options: {
    responsive: true,
    radius: "80%",
    maintainAspectRatio: false,
    plugins: {
      title: {
        display: true,
        text: ["Persentase Perjalanan Wisata Asal Kota Malang", "Berdasarkan Kategori Perjalanan Wisata Triwulan IV 2022"],
        font: {
          size: 16,
          // family: "Poppins",
        },
        color: "#493a5a",
      },
      legend: {
        display: true,
        position: "right",
      },
      tooltip: {
        enabled: true,
        callbacks: {
          label: function (context) {
            var label = context.label,
              currentValue = context.raw,
              total = context.chart._metasets[context.datasetIndex].total;

            var percentage = parseFloat(((currentValue / total) * 100).toFixed(1));

            return "Responden : " + currentValue + " (" + percentage + "%)";
          },
        },
      },
      datalabels: {
        display: true,
        color: "black",
        formatter: function (value, context) {
          total = context.chart._metasets[context.datasetIndex].total;
          percentage = parseFloat(((value / total) * 100).toFixed(1));
          return percentage + "%";
        },
      },
    },
  },
  plugins: [ChartDataLabels],
});


const PieChartLegend = document.getElementById("forPieChartAxis_output2");
PieChartLegend.addEventListener("click", update_value_output2(chk_bx));
function update_value_output2(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    pie_wisnus2.options.plugins.legend.display = true;
    pie_wisnus2.update();
  } else {
    console.log("uncheck");
    pie_wisnus2.options.plugins.legend.display = false;
    pie_wisnus2.update();
  }
}



