//data untuk chart ini diambil dari hasil visualisasi subdiv vdd riset 3 yg diinput manual ketika visualisasinya dibuat di r studio

const tujuan1_1 = document.getElementById('tujuan1_1');

new Chart(tujuan1_1, {
    type: 'bar',
    data: {
    labels: ["Penyediaan Jasa\nAkomodasi\nBagi Wisatawan", "Penyediaan Jasa\nMakan dan Minum","Penyediaan Jasa\nAngkutan Darat Untuk Penumpang" , "Penyediaan Jasa\nKebudayaan, Olahraga\ndan Rekreasi", "Aktivitas Perdagangan\nBarang-barang Pariwisata", "Jenis Industri\nLainnya"],
    datasets: [
      {
        label: 'Bebas wasdasdasd',
        data: [data1_1.ji1_1, data1_1.ji2_1, data1_1.ji3_1, data1_1.ji4_1, data1_1.ji5_1, data1_1.ji6_1],
        backgroundColor: ["#506396"],
      },
      {
        label: 'Kontrak Sewa',
        data: [data1_1.ji1_2, data1_1.ji2_2, data1_1.ji3_2, data1_1.ji4_2, data1_1.ji5_2, data1_1.ji6_2],
        backgroundColor: ["#b35c74"],
      },
      {
        label: 'Milik Sendiri',
        data: [data1_1.ji1_3, data1_1.ji2_3, data1_1.ji3_3, data1_1.ji4_3, data1_1.ji5_3, data1_1.ji6_3],
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

