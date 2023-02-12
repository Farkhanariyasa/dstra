const sankey_riset3 = document.getElementById("sankey_riset3");

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

new Chart(sankey_riset3, {
  type: "sankey",
  data: {
    datasets: [
      {
        data: [
          {
            from: "Penyediaan Akomodasi dan Makan Minum (I)",
            to: "Perdagangan Besar dan Eceran (G)",
            flow: 2,
          },
          {
            from: "Penyediaan Akomodasi dan Makan Minum (I)",
            to: "Aktivitas Keuangan dan Asuransi (K)",
            flow: 1,
          },
          {
            from: "Jasa Lainnya (R, S, T, U)",
            to: "Pengangkutan dan Pergudangan (H)",
            flow: 1,
          },
          {
            from: "Konstruksi",
            to: "Penyediaan Akomodasi dan Penyediaan Makan Minum (I)",
            flow: 1,
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
    maintainAspectRatio: false,
    plugins: {
      title: {
        display: true,
        text: "Jumlah Tenaga Kerja Industri Pariwisata menurut Jenis Industri Tempat Bekerja Sebelumnya dan Jenis Industri Tempat Bekerja Sekarang",
        font: {
          size: 20,
        },
      },
    },
  },
});
