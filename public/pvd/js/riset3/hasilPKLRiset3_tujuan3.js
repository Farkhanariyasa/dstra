//data untuk chart ini diambil dari hasil visualisasi subdiv vdd riset 3 yg diinput manual ketika visualisasinya dibuat di r studio

const tujuan3_3 = document.getElementById('tujuan3_3');


new Chart(tujuan3_3, {
    type: 'bar',
    data: {
    labels: ["Belum Pernah Kawin",  "Pernah Kawin"],
    datasets: [
      {
        
        label: 'Pekerja Tidak Penuh',
        data: [76.34, 68.6 ],
        backgroundColor: ["#506396"],
      },
      {
        label: 'Pekerja Penuh',
        data: [23.66 ,31.4],
        backgroundColor: ["#b35c74"],
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
            text : ["Persentase jam kerja menurut tingkat pendapatan"],
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

