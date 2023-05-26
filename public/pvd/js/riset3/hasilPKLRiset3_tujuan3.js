//data untuk chart ini diambil dari hasil visualisasi subdiv vdd riset 3 yg diinput manual ketika visualisasinya dibuat di r studio

const tujuan3_1 = document.getElementById('tujuan3_1');
new Chart(tujuan3_1, {
  type: 'bar',
  data: {
  labels: ["Laki-laki",  "Perempuan"],
  datasets: [
    {
      label: 'Pekerja Penuh',
      data: [69.69, 72.08],
      backgroundColor: ["#506396"],
    },
    {
      label: 'Pekerja Tidak Penuh',
      data: [30.31, 27.92],
      backgroundColor: ["#ffab00"],
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

const tujuan3_2 = document.getElementById('tujuan3_2');
new Chart(tujuan3_2, {
  type: 'bar',
  data: {
  labels: ["Di Bawah SMA/SMK",  "SMA/SMK", "Di Atas SMA/SMK"],
  datasets: [
    { 
      label: 'Pekerja Penuh',
      data: [65.79, 74.57, 73.08],
      backgroundColor: ["#506396"],
    },
    {
      label: 'Pekerja Tidak Penuh',
      data: [34.21, 25.43, 26.92],
      backgroundColor: ["#ffab00"],
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

const tujuan3_3 = document.getElementById('tujuan3_3');
new Chart(tujuan3_3, {
    type: 'bar',
    data: {
    labels: ["Belum Pernah Kawin",  "Pernah Kawin"],
    datasets: [
      {
        label: 'Pekerja Penuh',
        data: [76.34, 68.6 ],
        backgroundColor: ["#ffab00"],
      },
      {  
        label: 'Pekerja Tidak Penuh',
        data: [23.66 ,31.4],
        backgroundColor: ["#506396"],
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
  labels: ["< UMR", ">= UMR"],
  datasets: [
    {
      label: 'Pekerja Penuh',
      data: [69.54, 74.52],
      backgroundColor: ["#ffab00"],
    },
    {  
      label: 'Pekerja Tidak Penuh',
      data: [30.46, 25.48],
      backgroundColor: ["#506396"],
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
  labels: ["Perkotaan", "Perdesaan"],
  datasets: [
    {
      label: 'Pekerja Penuh',
      data: [75.69, 52.9],
      backgroundColor: ["#ffab00"],
    },
    { 
      label: 'Pekerja Tidak Penuh',
      data: [24.31, 47.1],
      backgroundColor: ["#506396"],
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
  labels: ["Ya", "Tidak"],
  datasets: [
    {
      label: 'Pekerja Penuh',
      data: [72.17, 70.36],
      backgroundColor: ["#ffab00"],
    },
    { 
      label: 'Pekerja Tidak Penuh',
      data: [27.83, 29.64],
      backgroundColor: ["#506396"],
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
