let delayed2;
// Chart
const t3_bar2 = document.getElementById("riset2_t3_hasil1");
var batang = new Chart(t3_bar2, {
  type: "bar",
  data: {
    labels: [
      "Berlibur/Rekreasi",
      "Mengunjungi Teman/Keluarga",
      "Belanja/Shopping",
      "Olahraga/Kesenian",
      "Berziarah/Keagamaan",
      "Kesehatan/Berobat",
      "Profesi/Bisnis",
      "Pertemuan/Kongres/Seminar",
      "Lainnya",
      "Pendidikan/Pelatihan",
      "Mudik/Pulkam Hari Raya",
    ],
    datasets: [
      {
        label: "Persentase",
        data: [
          57.06, 25.98, 9.18, 1.88, 1.68, 1.36, 1.21, 0.62, 0.53, 0.44, 0.08,
        ],
        borderWidth: 1,
        backgroundColor: "#ffab00",
        datalabels: {
          anchor: "end",
          align: "right",
          offset: 1,
          font: {
            size: 12,
          },
        },
      },
    ],
  },
  options: {
    indexAxis: "y",
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
    scales: {
      x: {
        title: {
          display: true,
          text: "Jumlah Wisatawan (%)",
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
          text: "Maksud Utama Perjalanan",
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
          "Persentase Maksud Utama pada", 
          "Perjalanan Terakhir yang Dilakukan", 
          "Wisatawan Nusantara Dalam Kota",
          "di Kota Malang Oktober-Desember 2022",
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
    batang.data.datasets[0].data = [
      57.06, 25.98, 9.18, 1.88, 1.68, 1.36, 1.21, 0.62, 0.53, 0.44, 0.08,
    ];
    batang.data.labels = [
      "Berlibur/Rekreasi",
      "Mengunjungi Teman/Keluarga",
      "Belanja/Shopping",
      "Olahraga/Kesenian",
      "Berziarah/Keagamaan",
      "Kesehatan/Berobat",
      "Profesi/Bisnis",
      "Pertemuan/Kongres/Seminar",
      "Lainnya",
      "Pendidikan/Pelatihan",
      "Mudik/Pulkam Hari Raya",
    ];
    batang.options.plugins.title.text = [
      "Persentase Maksud Utama pada", 
      "Perjalanan Terakhir yang Dilakukan", 
      "Wisatawan Nusantara Dalam Kota",
      "di Kota Malang Oktober-Desember 2022",
    ];
    batang.options.indexAxis = "y";
    batang.options.scales.x.title.text = "Jumlah Wisatawan (%)";
    batang.options.scales.y.title.text = "Maksud Utama Perjalanan";
    batang.update();
  } else if (barchart.value == "b") {
    console.log(barchart.value);
    batang.data.datasets[0].data = [62.54, 29.31, 5.44, 2.72];
    batang.data.labels = [
      "Rumah Teman/Keluarga",
      "Hotel",
      "Akomodasi Komersial Lainnya",
      "Lainnya",
    ];
    batang.options.plugins.title.text = [
      "Persentase Akomodasi Utama Wisatawan", 
      "Nusantara Dalam Kota pada Perjalanan Terakhir",
      "di Kota Malang Oktober-Desember 2022",
    ];
    batang.options.indexAxis = "y";
    batang.options.scales.x.title.text = "Persentase (%)";
    batang.options.scales.y.title.text = "Akomodasi Utama";
    batang.update();
  } else if (barchart.value == "c") {
    console.log(barchart.value);
    batang.data.datasets[0].data = [85.47, 4.93, 3.2, 3.14, 1.97, 1.26, 0.03];
    batang.data.labels = [
      "Kendaraan Pribadi",
      "Kendaraan Online",
      "Tidak Menggunakan",
      "Angkutan Umum/Bus",
      "Lainnya",
      "Kendaraan Sewa",
      "Travel",
    ];
    batang.options.plugins.title.text = [
      "Persentase Angkutan Utama yang", 
      "Digunakan pada Perjalanan Terakhir", 
      "oleh Wisatawan Nusantara Dalam Kota",
      "di Kota Malang Oktober-Desember 2022",
    ];
    batang.options.indexAxis = "y";
    batang.options.scales.x.title.text = "Frekuensi Digunakan (%)";
    batang.options.scales.y.title.text = "Moda Angkutan Utama";
    batang.update();
  } else if (barchart.value == "d") {
    console.log(barchart.value);
    batang.data.datasets[0].data = [
      53.27, 21.17, 13.97, 4.84, 2.44, 2.09, 0.94, 0.86, 0.42,
    ];
    batang.data.labels = [
      "Wisata Kota & Pedesaan",
      "Objek Wisata Terintegrasi",
      "Wisata Kuliner",
      "Wisata Olahraga/Kesehatan",
      "Wisata Sejarah/Religi",
      "Eko Wisata",
      "Wisata MICE",
      "Wisata Kesenian",
      "Wisata Petualangan",
    ];
    batang.options.indexAxis = "y";
    batang.options.plugins.title.text = [
      "Persentase Jenis Kegiatan Wisata yang", 
      "Dilakukan Wisatawan Nusantara Dalam", 
      "Kota pada Perjalanan Terakhir di",
      "Kota Malang Oktober-Desember 2022",
    ];
    batang.options.scales.x.title.text = "Frekuenisi Kegiatan Wisata (%)";
    batang.options.scales.y.title.text = "Jenis Kegiatan Wisata";
    batang.update();
  } else if (barchart.value == "e") {
    console.log(barchart.value);
    batang.data.datasets[0].data = [
      49.98, 41.67, 5.78, 1.09, 0.87, 0.45, 0.1, 0.06,
    ];
    batang.data.labels = [
      "Tidak Menggunakan Informasi Utama",
      "Teman/Saudara/Famili",
      "Media Sosial",
      "Media Internet Lainnya",
      "Media Cetak",
      "Website Resmi",
      "Televisi/Radio",
      "Lainnya",
    ];
    batang.options.plugins.title.text = [
      "Persentase Media Informasi Utama yang", 
      "Digunakan pada Perjalanan Terakhir di", 
      "Kota Malang Oktober-Desember 2022",
    ];
    batang.options.indexAxis = "y";
    batang.options.scales.x.title.text = "Frekuensi Digunakan (%)";
    batang.options.scales.y.title.text = "Media Informasi Utama";
    batang.update();
  } else if (barchart.value == "f") {
    console.log(barchart.value);
    batang.data.datasets[0].data = [
      1551600, 331487.2, 96527.78, 94166.67, 81000, 76623.25, 71760, 61803.92,
      22742.86, 20000, 19935.89,
    ];
    batang.data.labels = [
      "Kesehatan",
      "Akomodasi",
      "Hiburan",
      "Paket Perjalanan",
      "Cinderamata",
      "Makanan dan Minuman",
      "Tembakau dan Rokok",
      "Belanja",
      "Lainnya",
      "Seminar Pertemuan",
      "Angkutan",
    ];
    batang.options.plugins.title.text = [
      "Rata-Rata Biaya yang Dikeluarkan Turis", 
      "Dalam Kota Menurut Kategori Biaya pada", 
      "Perjalanan Terakhir Oktober-Desember 2022",
    ];
    batang.options.indexAxis = "y";
    batang.options.scales.x.title.text = "Rata-Rata Pengeluaran (Rupiah)";
    batang.options.scales.y.title.text = "Kategori Biaya";
    batang.data.datasets[0].label = "Pengeluaran";
    batang.update();
  } else if (barchart.value == "g") {
    console.log(barchart.value);
    batang.data.datasets[0].data = [
      731590.1, 572013.2, 191445.6, 110177.5, 59521.79, 39945.6, 33749.75, 24701.53,
      8997.17, 6974.73, 5000.08,
    ];
    batang.data.labels = [
      "Seminar Pertemuan",
      "Kesehatan",
      "Belanja",
      "Paket Perjalanan",
      "Cinderamata",
      "Tembakau dan Rokok",
      "Makanan dan Minuman",
      "Hiburan",
      "Lainnya",
      "Angkutan",
      "Pramuwisata",
    ];
    batang.options.plugins.title.text = [
      "Rata-Rata Biaya yang Dikeluarkan Pelancong", 
      "Dalam Kota Menurut Kategori Biaya pada", 
      "Perjalanan Terakhir Oktober-Desember 2022",
    ];
    batang.options.indexAxis = "y";
    batang.options.scales.x.title.text = "Rata-Rata Pengeluaran (Rupiah)";
    batang.options.scales.y.title.text = "Kategori Biaya";
    batang.data.datasets[0].label = "Pengeluaran";
    batang.update();
  } 
}