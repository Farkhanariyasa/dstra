let delayed1;
// Chart
const t3_bar1 = document.getElementById("riset2_t3_hasil1");
var batang = new Chart(t3_bar1, {
  type: "bar",
  data: {
    labels: ["Laki-Laki", "Perempuan"],
    datasets: [
      {
        label: "Jumlah",
        data: [62047, 69050],
        borderWidth: 1,
        backgroundColor: "#ffab00",
        datalabels: {
          anchor: "end",
          align: "top",
          offset: 1,
          font: {
            size: 12,
          },
        },
      },
    ],
  },
  options: {
    indexAxis: "x",
    animation: {
      onComplete: () => {
        delayed1 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (
          context.type === "data" &&
          context.mode === "default" &&
          !delayed1
        ) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
    responsive: true,
    scales: {
      x: {
        title: {
          display: true,
          text: "Jenis Kelamin",
          font: {
            size: 14,
            style: "normal",
            lineHeight: 2,
          },
        },
        grid: {
          display: false,
        },
        ticks: {
          font: {
            size: 10,
          },
        },
      },
      y: {
        beginAtZero: true,
        title: {
          display: true,
          text: "Jumlah Wisatawan",
          font: {
            size: 14,
            style: "normal",
            lineHeight: 2.5,
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
        text: [
          "Jumlah Wisatawan Nusantara Dalam Kota",
          "Menurut Jenis Kelamin di Kota Malang",
          "Oktober-Desember 2022",
        ],
        font: {
          size: 16,
          style: "normal",
        },
        color: "black",
        align: "center",
      },
      datalabels: {
        anchor: "center",
        align: "center",
        offset: 150,
        color: "black",
        font: {
          size: 14,
        },
      },
    },
  },
  plugins: [ChartDataLabels],
});

const barchart = document.getElementById("forBarChart");
barchart.addEventListener("change", tampilData);

function tampilData() {
  if (barchart.value == "a") {
    console.log(barchart.value);
    batang.data.datasets[0].data = [62047, 69050];
    batang.data.labels = ["Laki-Laki", "Perempuan"];
    batang.options.plugins.title.text = [
      "Jumlah Wisatawan Nusantara Dalam Kota",
      "Menurut Jenis Kelamin di Kota Malang",
      "Oktober-Desember 2022",
    ];
    batang.options.indexAxis = "x";
    batang.options.scales.x.title.text = "Jenis Kelamin";
    batang.options.scales.y.title.text = "Jumlah Wisatawan";
    // batang.data.datasets[0].label = "Jumlah";
    // console.log(batang.data.datasets[0].data);
    batang.update();
  } else if (barchart.value == "b") {
    console.log(barchart.value);
    batang.data.datasets[0].data = [33330, 20393, 60322, 17052];
    batang.data.labels = [
      "Anak-Anak (< 15 Tahun)",
      "Remaja (15-24 Tahun)",
      "Usia Menengah/Paruh baya-Pra Pensiun (25-54 Tahun)",
      "Usia Lanjut/Pensiun (55 Tahun keatas)",
    ];
    batang.options.plugins.title.text = [
      "Jumlah Wisatawan Menurut Kelompok Usia", 
      "Wisatawan Nusantara Dalam Kota di",
      "Kota Malang Oktober-Desember 2022",
    ];
    batang.options.indexAxis = "x";
    batang.options.scales.x.title.text = "Kelompok Usia";
    batang.options.scales.y.title.text = "Jumlah Wisatawan";
    // console.log(batang.data.datasets[0].data)
    batang.update();
  } else if (barchart.value == "c") {
    console.log(barchart.value);
    batang.data.datasets[0].data = [2633, 19504, 23734, 32655, 52570];
    batang.data.labels = [
      "Pengangguran",
      "Lainnya",
      "Mengurus Rumah Tangga",
      "Sekolah/Kuliah",
      "Bekerja",
    ];
    batang.options.plugins.title.text = [
      "Jumlah Wisatawan Wisata Menurut Kegiatan Utama", 
      "Wisatawan Nusantara Dalam Kota di",
      "Kota Malang Oktober-Desember 2022",
    ];
    batang.options.indexAxis = "x";
    batang.options.scales.x.title.text = "Kegiatan Utama";
    batang.options.scales.y.title.text = "Jumlah Wisatawan";
    batang.update();
  } else if (barchart.value == "d") {
    console.log(barchart.value);
    batang.data.datasets[0].data = [75998, 34471, 31253, 15472, 12316, 10273, 6251, 5879, 2971, 2785];
    batang.data.labels = [
      "Tenaga Usaha Jasa dan Tenaga Penjualan",
      "Pekerja Kasar",
      "Profesional",
      "Pekerja Pengolahan, Kerajinan, dan YBDI",
      "Teknisi dan Asisten Profesional",
      "Tenaga Tata Usaha",
      "Manajer",
      "Operator dan Perakit Mesin",
      "Pekerja Terampil Pertanian, Kehutanan, dan Perikanan",
      "TNI/Polri",
    ];
    batang.options.indexAxis = "y";
    batang.options.plugins.title.text = [
      "Jumlah Wisatawan Nusantara Dalam Kota", 
      "Menurut Pekerjaan Utama di",
      "Kota Malang Oktober-Desember 2022",
    ];
    batang.options.scales.x.title.text = "Jumlah Wisatawan";
    batang.options.scales.y.title.text = "Pekerjaan Utama";
    batang.update();
  } else if (barchart.value == "e") {
    console.log(barchart.value);
    batang.data.datasets[0].data = [1660, 9398, 15442, 44715, 27414];
    batang.data.labels = [
      "Tidak Tamat SD Sederajat",
      "SD/MI",
      "SMP/MTs",
      "SMA/MA/SMK",
      "Perguruan Tinggi",
    ];
    batang.options.plugins.title.text = [
      "Jumlah Wisatawan Nusantara Dalam Kota", 
      "Menurut Tingkat Pendidikan di",
      "Kota Malang Oktober-Desember 2022",
    ];
    batang.options.indexAxis = "x";
    batang.options.scales.x.title.text = "Tingkat Pendidikan";
    batang.options.scales.y.title.text = "Jumlah Wisatawan";
    batang.update();
  } else if (barchart.value == "f") { 
    console.log(barchart.value);
    batang.data.datasets[0].data = [50761, 20980, 18468, 15290, 5191];
    batang.data.labels = [
      "Telkomsel (meliputi kartu Hallo, Fleksi, As, dan Simpati)",
      "XL (meliputi kartu XL dan Axis)",
      "Indosat (meliputi kartu StarOne, Matrix, IM3, dan Mentari)",
      "Tri (meliputi kartu 3)",
      "lainnya (meliputi kartu Smartfren, Esia, dan sebagainya)",
    ];
    batang.options.plugins.title.text = [
      "Jumlah Wisatawan Nusantara Dalam Kota", 
      "Menurut Provider yang Digunakan di",
      "Kota Malang Oktober-Desember 2022",
    ];
    batang.options.indexAxis = "y";
    batang.options.scales.x.title.text = "Jumlah Wisatawan";
    batang.options.scales.y.title.text = "Jenis Provider";
    batang.update();
  }
}

// function responsivefonts(){
//     if (window.outerWidth < 414) {
//         console.log(window.outerWidth);
//         Chart.defaults.font.size=5;

//     }if (window.outerWidth<380){
//         Chart.defaults.font.size=1;
//     }
// };
