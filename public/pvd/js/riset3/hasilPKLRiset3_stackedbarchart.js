//data untuk chart ini diambil dari hasil visualisasi subdiv vdd riset 3 yg diinput manual ketika visualisasinya dibuat di r studio

const tujuan1_1 = document.getElementById('tujuan1_1');

new Chart(tujuan1_1, {
    type: 'bar',
    data: {
    labels: ["Penyediaan Jasa\nAkomodasi\nBagi Wisatawan", "Penyediaan Jasa\nMakan dan Minum","Penyediaan Jasa\nAngkutan Darat Untuk Penumpang" , "Penyediaan Jasa\nKebudayaan, Olahraga\ndan Rekreasi", "Aktivitas Perdagangan\nBarang-barang Pariwisata", "Jenis Industri\nLainnya"],
    datasets: [
      {
        label: 'Bebas Sewa',
        data: [13.33, 13.39, 18.75, 7.21, 15.65, 23.08],
        backgroundColor: ["#506396"],
      },
      {
        label: 'Kontrak Sewa',
        data: [1.33, 4.46, 1.25, 4.5, 4.08, 7.69],
        backgroundColor: ["#b35c74"],
      },
      {
        label: 'Milik Sendiri',
        data: [85.33, 82.14, 80, 88.29, 80.27, 69.23],
        backgroundColor: ["#4b395f"],
      }
      ]},
    options: {
    indexAxis: 'y',
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
            display: false,
            // text : ["Persentase Tenaga Kerja di Industri Pariwisata", "Menurut Jenis Industri dan Status Kepemilikan Rumah"],
            font: {
                size: 18
            }
          },
        legend:{
            display: true,
            position: "right"
          },
        datalabels:{
            display:true,
            color:'black'
          },
      },
    maintainAspectRatio: false
    }, 
    plugins:[ChartDataLabels]
});

