//data untuk chart ini diambil dari hasil visualisasi subdiv vdd riset 3 yg diinput manual ketika visualisasinya dibuat di r studio

const tujuan2_1 = document.getElementById('tujuan2_1');
new Chart(tujuan2_1, {
    type: 'bar',
    data: {
    labels: ["Penyediaan Jasa\nAkomodasi\nBagi Wisatawan", "Penyediaan Jasa\nMakan dan Minum","Penyediaan Jasa\nAngkutan Darat Untuk Penumpang" , "Penyediaan Jasa\nKebudayaan, Olahraga\ndan Rekreasi", "Aktivitas Perdagangan\nBarang-barang Pariwisata", "Jenis Industri\nLainnya"],
    datasets: [
      {
        
        label: '< 12 Bulan',
        data: [21.34, 36.61, 6.25, 26.13, 25.85, 13.85],
        backgroundColor: ["#ffab00"],
      },
      {
        label: '12-24 Bulan',
        data: [6.67, 8.93, 10, 10.81, 4.08, 10.77],
        backgroundColor: ["#506396"],
      },
      {
        label: '24-36 Bulan',
        data: [12, 4.46, 5, 8.11, 8.84, 10.77],
        backgroundColor: ["#b35c74"],
      },
      {
        label: '> 36 Bulan',
        data: [60, 50, 78.75, 54.95, 61.22, 64.62],
        backgroundColor: ["#4b395f"],
      },
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
            // text : ["Persentase Tenaga Kerja di Industri Pariwisata", "Menurut Jenis Industri dan Lama Menekuni Pekerjaan"],
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

