// Membuat variabel data yang berisi data yang akan digunakan dalam grafik
var data = {
  labels: ['2017','2018','2019','2020','2021'],
  datasets: [
    {
      label: ["Transportasi","dan Pergudangan"],
      data: [7.835,8.413,6.758,-2.679,5.89],
      borderColor: "#ffab00",
      fill: false
    },
    {
      label: "Jasa Lainnya",
      data: [7.362,8.365,8.960,-15.948,5.751],
      borderColor: "#506396",
      fill: false
    },
    {
      label: ["Penyediaan Akomodasi","dan Makan Minum"],
      data: [8.751,7.232,6.878,-21.879,4.375],
      borderColor: "#4b395f",
      fill: false
    },
    {
      label: "PDRB",
      data: [6.563,6.497,6.512,-6.455,4.042],
      borderColor: "#b35c74",
      fill: false
    }
  ]
};

// Membuat variabel options yang berisi pengaturan-pengaturan untuk grafik
var options = {
  responsive: true,
  maintainAspectRatio: true,
  plugins: {
      title: {
          display: true,
          text : [
              'Laju Pertumbuhan PDRB Kota Batu', 
              'Atas Dasar Harga Konstan 2010 (persen)',
              'Tahun 2017-2021'
          ],
          font: {
              size: 20
          }
      },
      legend:{
          display: true,
          position: 'right',
      }
  },
  scales: {
      x: {
          // type: 'time',
          position: 'bottom',
          title: {
              display: true,
              text: 'Tahun',
              font: {
                  weight: 'bold',
                  size: 15
              }
          },
      },
      y: {
          // type: 'linear',
          position: 'left',
          title: {
              display: true,
              text: 'Laju Pertumbuhan (%)',
              font: { 
                  weight: 'bold',
                  size: 15
              }
          },
          suggestedMin: -25,
          suggestedMax: 15

      }
  }

};

// Membuat chart baru dengan menggunakan canvas element yang telah dibuat sebelumnya
var ctx = document.getElementById("myChart").getContext("2d");
var myChart = new Chart(ctx, {
  type: "line",
  data: data,
  options: options
});
