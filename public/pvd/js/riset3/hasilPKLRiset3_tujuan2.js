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

const tujuan2_2 = document.getElementById('tujuan2_2');
new Chart(tujuan2_2, {
    type: 'bar',
    data: {
    labels: ["Penyediaan Jasa\nAkomodasi\nBagi Wisatawan", "Penyediaan Jasa\nMakan dan Minum","Penyediaan Jasa\nAngkutan Darat Untuk Penumpang" , "Penyediaan Jasa\nKebudayaan, Olahraga\ndan Rekreasi", "Aktivitas Perdagangan\nBarang-barang Pariwisata", "Jenis Industri\nLainnya"],
    datasets: [
      {
        label: 'Ya',
        data: [16, 20.54, 10, 19.82, 19.73, 18.46],
        backgroundColor: ["#ffab00"],
      },
      {
        label: 'Tidak',
        data: [84, 79.46, 90, 80.18, 80.27, 81.54],
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

const tujuan2_3 = document.getElementById('tujuan2_3');
new Chart(tujuan2_3, {
    type: 'bar',
    data: {
    labels: ["Penyediaan Jasa\nAkomodasi\nBagi Wisatawan", "Penyediaan Jasa\nMakan dan Minum","Penyediaan Jasa\nAngkutan Darat Untuk Penumpang" , "Penyediaan Jasa\nKebudayaan, Olahraga\ndan Rekreasi", "Aktivitas Perdagangan\nBarang-barang Pariwisata", "Jenis Industri\nLainnya"],
    datasets: [
      {
        label: '1-2 Kali',
        data: [16, 18.75, 10, 19.82, 16.32, 16.92],
        backgroundColor: ["#ffab00"],
      },
      {
        label: '> 2 Kali',
        data: [0, 1.79, 0, 0, 3.40, 1.54],
        backgroundColor: ["#506396"],
      },
      {
        label: 'Tidak Berpindah',
        data: [84, 79.46, 90, 80.18, 80.27, 81.54],
        backgroundColor: ["#b35c74"],
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

const tujuan2_4 = document.getElementById('tujuan2_4');
new Chart(tujuan2_4, {
    type: 'bar',
    data: {
    labels: ["Penyediaan Jasa\nAkomodasi\nBagi Wisatawan", "Penyediaan Jasa\nMakan dan Minum","Penyediaan Jasa\nAngkutan Darat Untuk Penumpang" , "Penyediaan Jasa\nKebudayaan, Olahraga\ndan Rekreasi", "Aktivitas Perdagangan\nBarang-barang Pariwisata", "Jenis Industri\nLainnya"],
    datasets: [
      {
        label: 'Ya',
        data: [16, 20.54, 10, 19.82, 19.73, 18.46],
        backgroundColor: ["#ffab00"],
      },
      {
        label: 'Tidak',
        data: [84, 79.46, 90, 80.18, 80.27, 81.54],
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

const tujuan2_5 = document.getElementById('tujuan2_5');
new Chart(tujuan2_5, {
    type: 'bar',
    data: {
    labels: ["Penyediaan Jasa\nAkomodasi\nBagi Wisatawan", "Penyediaan Jasa\nMakan dan Minum","Penyediaan Jasa\nAngkutan Darat Untuk Penumpang" , "Penyediaan Jasa\nKebudayaan, Olahraga\ndan Rekreasi", "Aktivitas Perdagangan\nBarang-barang Pariwisata", "Jenis Industri\nLainnya"],
    datasets: [
      {
        label: '1-2 Kali',
        data: [16, 18.75, 10, 19.82, 16.32, 16.92],
        backgroundColor: ["#ffab00"],
      },
      {
        label: '> 2 Kali',
        data: [0, 1.79, 0, 0, 3.40, 1.54],
        backgroundColor: ["#506396"],
      },
      {
        label: 'Tidak Berpindah',
        data: [84, 79.46, 90, 80.18, 80.27, 81.54],
        backgroundColor: ["#b35c74"],
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

const tujuan2_6 = document.getElementById('tujuan2_6');
new Chart(tujuan2_6, {
    type: 'bar',
    data: {
    labels: ["Penyediaan Jasa\nAkomodasi\nBagi Wisatawan", "Penyediaan Jasa\nMakan dan Minum","Penyediaan Jasa\nAngkutan Darat Untuk Penumpang" , "Penyediaan Jasa\nKebudayaan, Olahraga\ndan Rekreasi", "Aktivitas Perdagangan\nBarang-barang Pariwisata", "Jenis Industri\nLainnya"],
    datasets: [
      {
        label: 'Perempuan',
        data: [1.4, 1.63, 0, 1, 1.5, 1],
        backgroundColor: ["#ffab00"],
      },
      {
        label: 'Laki-laki',
        data: [1.14, 1.37, 1.13, 1.31, 1.41, 1.33],
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

const tujuan2_7 = document.getElementById('tujuan2_7');
new Chart(tujuan2_7, {
    type: 'bar',
    data: {
    labels: ["Penyediaan Jasa\nAkomodasi\nBagi Wisatawan", "Penyediaan Jasa\nMakan dan Minum","Penyediaan Jasa\nAngkutan Darat Untuk Penumpang" , "Penyediaan Jasa\nKebudayaan, Olahraga\ndan Rekreasi", "Aktivitas Perdagangan\nBarang-barang Pariwisata", "Jenis Industri\nLainnya"],
    datasets: [
      {
        label: 'Tidak/Belum SD',
        data: [1, 1, 0, 0, 0, 0],
        backgroundColor: ["#4b395f"],
      },
      {
        label: 'SD/MI',
        data: [1.33, 1.25, 1, 2, 1.5, 1],
        backgroundColor: ["#b35c74"],
      },
      {
        label: 'SMP/MTs',
        data: [1.33, 1.33, 0, 1, 1.5, 0],
        backgroundColor: ["#506396"],
      },
      {
        label: 'SMA/MA',
        data: [1.73, 1.22, 1.25, 1, 1.22, 1],
        backgroundColor: ["#ffab00"],
      },
      {
        label: 'SMK/MAK',
        data: [1.44, 1.9, 1.4, 1, 1, 1.4],
        backgroundColor: ["#7382ab"],
      },
      {
        label: 'Diploma I',
        data: [0,0,0,0,0,0],
        backgroundColor: ["#93889f"],
      },
      {
        label: 'Diploma IV',
        data: [0,0,0,0,0,0],
        backgroundColor: ["#d19dac"],
      },
      {
        label: 'S1/S2/S3',
        data: [0,1,1,0,0,1],
        backgroundColor: ["#96a1c0"],
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

const tujuan2_8 = document.getElementById('tujuan2_8');
new Chart(tujuan2_8, {
    type: 'bar',
    data: {
    labels: ["Penyediaan Jasa\nAkomodasi\nBagi Wisatawan", "Penyediaan Jasa\nMakan dan Minum","Penyediaan Jasa\nAngkutan Darat Untuk Penumpang" , "Penyediaan Jasa\nKebudayaan, Olahraga\ndan Rekreasi", "Aktivitas Perdagangan\nBarang-barang Pariwisata", "Jenis Industri\nLainnya"],
    datasets: [
      {
        label: 'Belum Kawin',
        data: [1.5, 1.46, 1, 1.17, 1.67, 2],
        backgroundColor: ["#ffab00"],
      },
      {
        label: 'Kawin',
        data: [1.22, 1.429, 1.2, 1.375, 1.23, 1],
        backgroundColor: ["#506396"],
      },
      {
        label: 'Cerai Hidup',
        data: [0,2,0,1,1,1],
        backgroundColor: ["#b35c74"],
      },
      {
        label: 'Cerai Mati',
        data: [1,0,0,0,0,1],
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
