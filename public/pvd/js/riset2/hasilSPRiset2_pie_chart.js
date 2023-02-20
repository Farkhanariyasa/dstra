const pie_chart = document.getElementById("pie_chart");

const diagram_lingkaran = new Chart(pie_chart, {
  type: "pie",
  data: {
    labels: [
      "Ke Objek Wisata",
      "Menginap di Akomodasi Komersial",
      "Menuju ke Kecamatan Lain",
    ],
    datasets: [
      {
        label: "Jumlah",
        data: [300, 50, 100],
        backgroundColor: [
          "#ffab00",
          "#506396",
          "#c27d90",
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
        text: "Estimasi Total Perjalanan Menurut Tujuan Utama di Kota Malang Bulan Oktober-Desember 2022",
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