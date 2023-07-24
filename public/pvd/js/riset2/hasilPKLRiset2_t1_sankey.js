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
            flow: 2015,
          },
          {
            from: "Blimbing",
            to: " Kedungkandang",
            flow: 10041,
          },
          {
            from: "Blimbing",
            to: " Klojen",
            flow: 52365,
          },
          {
            from: "Blimbing",
            to: " Lowokwaru",
            flow: 12913,
          },
          {
            from: "Blimbing",
            to: " Sukun",
            flow: 6974,
          },
          {
            from: "Kedungkandang",
            to: " Blimbing",
            flow: 9384,
          },
          {
            from: "Kedungkandang",
            to: " Kedungkandang",
            flow: 3692,
          },
          {
            from: "Kedungkandang",
            to: " Klojen",
            flow: 74786,
          },
          {
            from: "Kedungkandang",
            to: " Lowokwaru",
            flow: 7058,
          },
          {
            from: "Kedungkandang",
            to: " Sukun",
            flow: 8017,
          },
          {
            from: "Klojen",
            to: " Blimbing",
            flow: 7279,
          },
          {
            from: "Klojen",
            to: " Kedungkandang",
            flow: 6975,
          },
          {
            from: "Klojen",
            to: " Klojen",
            flow: 37730,
          },
          {
            from: "Klojen",
            to: " Lowokwaru",
            flow: 6388,
          },
          {
            from: "Klojen",
            to: " Sukun",
            flow: 7099,
          },
          {
            from: "Lowokwaru",
            to: " Blimbing",
            flow: 20627,
          },
          {
            from: "Lowokwaru",
            to: " Kedungkandang",
            flow: 9459,
          },
          {
            from: "Lowokwaru",
            to: " Klojen",
            flow: 81071,
          },
          {
            from: "Lowokwaru",
            to: " Lowokwaru",
            flow: 11647,
          },
          {
            from: "Lowokwaru",
            to: " Sukun",
            flow: 12763,
          },
          {
            from: "Sukun",
            to: " Blimbing",
            flow: 4888,
          },
          {
            from: "Sukun",
            to: " Kedungkandang",
            flow: 6700,
          },
          {
            from: "Sukun",
            to: " Klojen",
            flow: 45947,
          },
          {
            from: "Sukun",
            to: " Lowokwaru",
            flow: 3991,
          },
          {
            from: "Sukun",
            to: " Sukun",
            flow: 732,
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
