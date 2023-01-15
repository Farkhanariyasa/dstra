const jpu_barhorizontal = document.getElementById("jpu_barhorizontal");
new Chart(jpu_barhorizontal, {
  type: "bar",
  data: {
    labels: [
      "Tenaga Usaha Jasa dan Tenaga Penjualan",
      "Pekerja Kasar",
      "Tenaga Tata Usaha",
      "Profesional",
      "Teknisi dan Asisten Profesional",
      "Pekerja Pengolahan, Kerajinan, dan YBDI",
      "TNI/POLRI",
      "Pekerja Terampil Pertanian, Kehutanan, dan Perikanan",
      "Operator dan Perakit Mesin",
      "Manajer",
    ],
    datasets: [
      {
        label: "Jumlah Wisatawan",
        data: [
          datajenispekerjaanutama.jpu5,
          datajenispekerjaanutama.jpu9,
          datajenispekerjaanutama.jpu4,
          datajenispekerjaanutama.jpu2,
          datajenispekerjaanutama.jpu3,
          datajenispekerjaanutama.jpu7,
          datajenispekerjaanutama.jpu0,
          datajenispekerjaanutama.jpu6,
          datajenispekerjaanutama.jpu8,
          datajenispekerjaanutama.jpu1,
        ],
        borderWidth: 1,
        backgroundColor: ["#ffab00"],
      },
    ],
  },
  options: {
    indexAxis: "y",
    responsive: true,
    scales: {
      x: {
        beginAtZero: true,
        max: 25,
        title: {
          display: true,
          text: "Jumlah Wisatawan",
          font: {
            size: 18,
            style: "normal",
            lineHeight: 2,
          },
        },
        grid: {
          display: false,
        },
      },
      y: {
        title: {
          display: true,
          text: "Jenis Pekerjaan Utama",
          font: {
            size: 18,
            style: "normal",
            lineHeight: 2,
          },
        },
        grid: {
          display: false,
        },
      },
    },
    maintainAspectRatio: false,
    plugins: {
      title: {
        display: true,
        text: "Sebaran Penduduk yang melakukan Perjalanan Wisata berdasarkan Jenis Pekerjaan Utama",
        font: {
          size: 20,
        },
      },
      datalabels: {
        anchor: "start",
        align: "start",
        offset: -20,
      },
    },
  },
  plugins: [ChartDataLabels],
});
