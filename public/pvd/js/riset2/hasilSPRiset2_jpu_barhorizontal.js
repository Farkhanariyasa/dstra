const jpu_barhorizontal = document.getElementById("jpu_barhorizontal");

const batang_horizontal = new Chart(jpu_barhorizontal, {
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

const barchart = document.getElementById("forBarChart");
barchart.addEventListener("change", tampilData);

function tampilData() {
  if (barchart.value == "b") {
    console.log(barchart.value);
    batang_horizontal.data.datasets[0].data = [
      datajenispendidikantertingi_riset2.pt_21,
      datajenispendidikantertingi_riset2.pt_22,
      datajenispendidikantertingi_riset2.pt_23,
      datajenispendidikantertingi_riset2.pt_24,
      datajenispendidikantertingi_riset2.pt_25,
      datajenispendidikantertingi_riset2.pt_26,
      datajenispendidikantertingi_riset2.pt_27,
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
  } else {
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
}
