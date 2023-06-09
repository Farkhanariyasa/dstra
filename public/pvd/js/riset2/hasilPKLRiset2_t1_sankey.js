const t1_sankey = document.getElementById("riset2_t1_hasil1");

var colors2 = ["#506396", "#ffbc33", "#b35c74", "#4b395f", "#ffab00"];

var assigned = {};
function c2(name) {
  return (
    assigned[name] ||
    (assigned[name] = colors2[Object.keys(assigned).length % colors2.length])
  );
}

new Chart(t1_sankey, {
  type: "sankey",
  data: {
    datasets: [
      {
        data: [
          {
            from: "Blimbing",
            to: " Blimbing",
            flow: 113,
          },
          {
            from: "Blimbing",
            to: " Kedungkandang",
            flow: 563,
          },
          {
            from: "Blimbing",
            to: " Klojen",
            flow: 2936,
          },
          {
            from: "Blimbing",
            to: " Lowokwaru",
            flow: 724,
          },
          {
            from: "Blimbing",
            to: " Sukun",
            flow: 391,
          },
          {
            from: "Kedungkandang",
            to: " Blimbing",
            flow: 460,
          },
          {
            from: "Kedungkandang",
            to: " Kedungkandang",
            flow: 181,
          },
          {
            from: "Kedungkandang",
            to: " Klojen",
            flow: 3666,
          },
          {
            from: "Kedungkandang",
            to: " Lowokwaru",
            flow: 346,
          },
          {
            from: "Kedungkandang",
            to: " Sukun",
            flow: 393,
          },
          {
            from: "Klojen",
            to: " Blimbing",
            flow: 768,
          },
          {
            from: "Klojen",
            to: " Kedungkandang",
            flow: 736,
          },
          {
            from: "Klojen",
            to: " Klojen",
            flow: 3981,
          },
          {
            from: "Klojen",
            to: " Lowokwaru",
            flow: 674,
          },
          {
            from: "Klojen",
            to: " Sukun",
            flow: 749,
          },
          {
            from: "Lowokwaru",
            to: " Blimbing",
            flow: 905,
          },
          {
            from: "Lowokwaru",
            to: " Kedungkandang",
            flow: 415,
          },
          {
            from: "Lowokwaru",
            to: " Klojen",
            flow: 3557,
          },
          {
            from: "Lowokwaru",
            to: " Lowokwaru",
            flow: 511,
          },
          {
            from: "Lowokwaru",
            to: " Sukun",
            flow: 560,
          },
          {
            from: "Sukun",
            to: " Blimbing",
            flow: 267,
          },
          {
            from: "Sukun",
            to: " Kedungkandang",
            flow: 366,
          },
          {
            from: "Sukun",
            to: " Klojen",
            flow: 2510,
          },
          {
            from: "Sukun",
            to: " Lowokwaru",
            flow: 218,
          },
          {
            from: "Sukun",
            to: " Sukun",
            flow: 40,
          },
        ],
        colorFrom: (c) => c2(c.dataset.data[c.dataIndex].from),
        colorTo: (c) => c2(c.dataset.data[c.dataIndex].to),
        borderWidth: 0,
      },
    ],
  },

  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      title: {
        align: "center",
        color: "black",
        display: true,
        text: [
          "Estimasi Jumlah Perjalanan Wisata Menurut Kecamatan Asal dan",
          "Kecamatan Tujuan Wisata di Kota Malang Bulan Oktober-Desember 2022",
        ],
        font: {
          size: 16,
          style: "normal",
        },
      },
    },
  },
});
