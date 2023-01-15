const pw_sankey = document.getElementById("pw_sankey");

var colors2 = [
  "#ffab00",
  "#506396",
  "#4b395f",
  "#b35c74",
  "#ffbc33",
];

var assigned = {};
function c2(name) {
  return (
    assigned[name] ||
    (assigned[name] = colors2[Object.keys(assigned).length % colors2.length])
  );
}

new Chart(pw_sankey, {
  type: "sankey",
  data: {
    datasets: [
      {
        data: [
          {
            from: "Sukun",
            to: "Blimbing",
            flow: 54,
          },
          {
            from: "Sukun",
            to: "Kedungkandang",
            flow: 39,
          },
          {
            from: "Sukun",
            to: "Klojen",
            flow: 332,
          },
          {
            from: "Sukun",
            to: "Lowokwaru",
            flow: 15,
          },
          // {
          //   from: "Sukun",
          //   to: "Sukun",
          //   flow: 25,
          // },
        ],
        colorFrom: (c) => c2(c.dataset.data[c.dataIndex].from),
        colorTo: (c) => c2(c.dataset.data[c.dataIndex].to),
        borderWidth: 0,
      },
    ],
  },

  options: {
    responsive: true,
    plugins: {
      title: {
        display: true,
        text: "Jumlah Perjalanan Wisata Menurut Kecamatan Asal dan Kecamatan Tujuan Wisata",
        font: {
          size: 20,
        },
      },
    },
  },
});
