const bar_horizontal = document.getElementById("bar_horizontal");

const batang_horizontal = new Chart(bar_horizontal, {
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
            size: 12,
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
            size: 12,
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
          size: 14,
        },
      },
      datalabels: {
        anchor: "center",
        align: "center",
        offset: -20,
      },
    },
  },
  plugins: [ChartDataLabels],
});

const barchart = document.getElementById("forBarChart");
barchart.addEventListener("change", tampilData);

function tampilData() {
  if (barchart.value == 1) {
    console.log(barchart.value);
    batang_horizontal.data.datasets[0].data = [
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
    ];
    batang_horizontal.data.labels = [
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
    ];
    batang_horizontal.options.plugins.title.text =
      "Sebaran Penduduk yang melakukan Perjalanan Wisata berdasarkan Jenis Pekerjaan Utama";
    batang_horizontal.options.scales.y.title.text = "Jenis Pekerjaan Utama";
    batang_horizontal.update();
  }

  if (barchart.value == 2) {
    console.log(barchart.value);
    batang_horizontal.data.datasets[0].data = [
      datapendidikantertinggi_riset2.pt_21,
      datapendidikantertinggi_riset2.pt_22,
      datapendidikantertinggi_riset2.pt_23,
      datapendidikantertinggi_riset2.pt_24,
      datapendidikantertinggi_riset2.pt_25,
      datapendidikantertinggi_riset2.pt_26,
      datapendidikantertinggi_riset2.pt_27,
    ];
    batang_horizontal.data.labels = [
      "S2/S3",
      "D4/S1",
      "D1/D2/D3",
      "SMA/MA/SMK/Setara",
      "SMP/MTs/Setara",
      "SD/MI/Setara",
      "Tidak/Belum Sekolah/Tidak Tamat SD/MI",
    ];
    batang_horizontal.options.plugins.title.text =
      "Sebaran Penduduk yang Melakukan Perjalanan Wisata berdasarkan Tingkat Pendidikan Terakhir yang Ditamatkan";
    batang_horizontal.options.scales.y.title.text = "Tingkat Pendidikan";
    batang_horizontal.update();
  }
}
