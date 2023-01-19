//data untuk chart ini diambil dari hasil visualisasi subdiv vdd riset 3 yg diinput manual ketika visualisasinya dibuat di r studio

const hasil4 = document.getElementById('stacked_barchart');

new Chart(hasil4, {
    type: 'bar',
    data: {
    labels: ["Akomodasi", "Makan dan Minum", "Perdagangan Barang-barang Pariwisata", "Lainnya"],
    datasets: [
      {
        label: 'Ya',
        data: [76.9, 84.8, 72.7, 71.4],
        backgroundColor: ["#506396"],
      },
      {
        label: 'Tidak',
        data: [23.1, 15.2, 27.3, 28.6],
        backgroundColor: ["#ffab00"],
      }
      ]},
    options: {
    responsive:true,
    scales: {
        x: {
          stacked: true,
        },
        y: {
          stacked: true
        }  
     },
    plugins:{
        title: {
            display: true,
            text : ["Proporsi Tenaga Kerja Industri Pariwisata Menurut Jenis Industri", "yang Tempat Bekerjanya Menggunakan Internet untuk Promosi (%)", "  ", "  "],
            font: {
                size: 20
            }
          },
        legend:{
            display: true,
            position: "right"
          },
        datalabels:{
            display:true,
            color:'black'
        } 
        },
    maintainAspectRatio: false
    }, plugins:[ChartDataLabels]
});

