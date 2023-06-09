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

// const piechart = document.getElementById("forPieChartAxis_output2");
// piechart.addEventListener("change", tampilData);

// function tampilData() {
//   if (piechart.value == "b") {
//     console.log(piechart.value);
//     pie_wisnus2.data.datasets[0].data = [jeniskelamin.laki, jeniskelamin.perempuan];
//     pie_wisnus2.data.labels = ["Laki-laki", "Perempuan"];

//     pie_wisnus2.options.plugins.title.text = "Jenis Kelamin Responden";
//     // console.log(batang.data.datasets[0].data)
//     pie_wisnus2.update();
//   } else {
//     console.log(barchart.value);
//     pie_wisnus2.data.datasets[0].data = [jumlahanggota.ja0, jumlahanggota.ja1, jumlahanggota.ja2, jumlahanggota.ja3, jumlahanggota.ja4, jumlahanggota.ja5];
//     pie_wisnus2.data.labels = ["Jumlah Anggota 0", "Jumlah Anggota 1", "Jumlah Anggota 2"];

//     pie_wisnus2.options.plugins.title.text = ["Banyaknya Rumah Tangga berdasarkan", "Jumlah Anggota yang melakukan perjalanan"];
//     // console.log(batang.data.datasets[0].data)
//     pie_wisnus2.update();
//   }
// }

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

// const pieChartLegend = document.getElementById("forPieChartLegend");
// pieChartLegend.addEventListener("click", update_value2(chk_bx2));
// function update_value2(chk_bx2) {
//   if (chk_bx2.checked) {
//     console.log("check");
//     batang.options.plugins.legend.display = true;
//     batang.update();
//   } else {
//     console.log("uncheck");
//     batang.options.plugins.legend.display = false;
//     batang.update();
//   }
// }

