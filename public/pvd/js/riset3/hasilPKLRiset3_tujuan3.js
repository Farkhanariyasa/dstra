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


const tujuan3_4 = document.getElementById('tujuan3_4');

new Chart(tujuan3_4, {
  type: 'bar',
  data: {
  labels: [">=UMR",  "<UMR"],
  datasets: [
    {
      
      label: 'Pekerja Tidak Penuh',
      data: [74.52, 69.54 ],
      backgroundColor: ["#506396"],
    },
    {
      label: 'Pekerja Penuh',
      data: [25.48 ,30.46],
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


const tujuan3_5 = document.getElementById('tujuan3_5');

new Chart(tujuan3_5, {
  type: 'bar',
  data: {
  labels: [">=UMR",  "<UMR"],
  datasets: [
    {
      
      label: 'Pekerja Tidak Penuh',
      data: [52.9, 75.69 ],
      backgroundColor: ["#506396"],
    },
    {
      label: 'Pekerja Penuh',
      data: [47.1 ,24.31],
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


const tujuan3_6 = document.getElementById('tujuan3_6');

new Chart(tujuan3_6, {
  type: 'bar',
  data: {
  labels: ["Tidak",  "Ya"],
  datasets: [
    {
      
      label: 'Pekerja Tidak Penuh',
      data: [70.36, 72.17 ],
      backgroundColor: ["#506396"],
    },
    {
      label: 'Pekerja Penuh',
      data: [29.64,28.83],
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
