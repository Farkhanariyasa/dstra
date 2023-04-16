let delayed1;
const ctx = document.getElementById("riset1_hasil2");
const bar = new Chart(ctx, {
  type: "bar",
  data: {
    labels: ["Ke Objek Wisata dalam Kota Sama", "Menginap di Akomodasi Komersil di Kota Sama", "Menuju Kecamatan lain dalam Kota Sama", "Ke Objek Wisata di Luar Kota", "Menginap di Akomodasi Komersil di Luar Kota", "Menuju Kota Lain"],
    datasets: [
      {
        label: "Ya",
        data: [mpw1.ya, mpw2.ya, mpw3.ya, mpw4.ya, mpw5.ya, mpw6.ya],
        backgroundColor: "#ffab00",
        borderWidth: 1,
      },
      {
        label: "Tidak",
        data: [mpw1.tidak, mpw2.tidak, mpw3.tidak, mpw4.tidak, mpw5.tidak, mpw6.tidak],
        backgroundColor: "#ffeecc",
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
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
    scales: {
      x: {
        ticks: {
          display: true,
        },
      },
    },
    plugins: {
      title: {
        display: true,
        text: ["Tindakan Perjalanan Tidak Lebih dari 1 Tahun dan", "Telah Kembali dalam Periode Oktober 2022 - Desember 2022"],
        font: {
          size: 16,
          family: "Poppins",
        },
        color: "#493a5a",
        padding: {
          top: 5,
          bottom: 5,
          right: 10,
          left: 10,
        },
      },
      legend: {
        display: true,
        position: "top",
      },
      tooltip: {
        enabled: true,
      },
      datalabels: {
        display: true,
        color: "black",
      },
    },
    maintainAspectRatio: false,
    scales: {
      x: {
        grid: {
          display: false,
        },
      },
      y: {
        grid: {
          display: false,
        },
      },
    },
  },
  plugins: [ChartDataLabels],
});

function responsivefonts() {
  if (window.outerWidth < 414) {
    console.log(window.outerWidth);
    Chart.defaults.font.size = 5;
  }
  if (window.outerWidth < 380) {
    Chart.defaults.font.size = 1;
  }
}

const barChartAxis_mpw = document.getElementById("forBarChartAxis_mpw");
barChartAxis_mpw.addEventListener("click", update_value_mpw(chk_bx));

function update_value_mpw(chk_bx) {
  if (chk_bx.checked) {
    console.log("check");
    bar.options.scales.x.display = true;
    bar.options.scales.y.display = true;
    bar.update();
  } else {
    console.log("uncheck");
    bar.options.scales.x.display = false;
    bar.options.scales.y.display = false;
    bar.update();
  }
}
