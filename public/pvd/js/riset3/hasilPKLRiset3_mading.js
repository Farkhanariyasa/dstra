
  const ctx11 = document.getElementById('tujuan1_1');
  const pie11 = new Chart(ctx11, {
   type: 'pie',
   data: {
    labels: ['Penyediaan jasa akomodasi bagi wisatawan',
    'Penyediaan jasa makan dan minum',
    'Penyediaan jasa angkutan darat untuk penumpang',
    'Penyediaan jasa kebudayaan, olahraga dan rekreasi',
    'Aktivitas perdagangan barang-barang pariwisata',
    'Jenis Industri lainnya',
    ],

     datasets: [{
       label: 'Persentase',
       data: [
        10.83,
        31.68,
        12.21,
        17.28,
        19.47,
        8.53,
        ],
    borderWidth: 1,
    backgroundColor: [
      "#4b395f","#b35c74", "#506396","#d19dac","#96a1c0","#ffab00"
    ],
     }]
   },
    options:{
      scales:{
      },
      responsive: true,
      maintainAspectRatio: false,
      plugins:{
        tooltip:{
          enabled: true
        },
        title: {
          display: true,
          text : ['Persentase Tenaga Kerja di Industri Pariwisata','Menurut Jenis Industri Pariwisata (%)'],
          font: {
              size: 16
          }
        },
        legend:{
          display: true,
          position: 'bottom',
        },
        datalabels:{
          formatter: (value, ctx) => {
            let sum = 0;
            let dataArr = ctx.chart.data.datasets[0].data;
            dataArr.map(data => {
                sum += data;
            });
            let percentage = (value*100 / sum).toFixed(2)+"%";
            return percentage;
          },
          color :'black',
        },
      },
    }, plugins: [ChartDataLabels]
 });

 const ctx12 = document.getElementById('tujuan1_2');
  const pie12 = new Chart(ctx12, {
   type: 'pie',
   data: {
    labels: ['Laki-laki',
            'Perempuan',
    ],

     datasets: [{
       label: 'Persentase',
       data: [
        58.87,
        41.13,
        ],
    borderWidth: 1,
    backgroundColor: [
      "#506396", "#ffab00"
    ],
     }]
   },
    options:{
      scales:{
      },
      responsive: true,
      maintainAspectRatio: false,
      plugins:{
        tooltip:{
          enabled: true
        },
        title: {
          display: true,
          text : ['Persentase Tenaga Kerja di Industri Pariwisata','Menurut Jenis Kelamin (%)'],
          font: {
              size: 16
          }
        },
        legend:{
          display: true,
          position: 'bottom',
        },
        datalabels:{
          formatter: (value, ctx) => {
            let sum = 0;
            let dataArr = ctx.chart.data.datasets[0].data;
            dataArr.map(data => {
                sum += data;
            });
            let percentage = (value*100 / sum).toFixed(2)+"%";
            return percentage;
          },
          color :'black',
        }
      },
    }, plugins: [ChartDataLabels]
 });

 const ctx13 = document.getElementById('tujuan1_3');
  const pie13 = new Chart(ctx13, {
   type: 'pie',
   data: {
    labels: ['Di Bawah SMA',
            'SMA atau Lebih Tinggi',
    ],

     datasets: [{
       label: 'Persentase',
       data: [
        43.78,
        56.22,
        ],
    borderWidth: 1,
    backgroundColor: [
      "#506396", "#ffab00"
    ],
     }]
   },
    options:{
      scales:{
      },
      responsive: true,
      maintainAspectRatio: false,
      plugins:{
        tooltip:{
          enabled: true
        },
        title: {
          display: true,
          text : ['Persentase Tenaga Kerja di Industri Pariwisata','Menurut Tingkat Pendidikan (%)'],
          font: {
              size: 16
          }
        },
        legend:{
          display: true,
          position: 'bottom',
        },
        datalabels:{
          formatter: (value, ctx) => {
            let sum = 0;
            let dataArr = ctx.chart.data.datasets[0].data;
            dataArr.map(data => {
                sum += data;
            });
            let percentage = (value*100 / sum).toFixed(2)+"%";
            return percentage;
          },
          color :'black',
        }
      },
    }, plugins: [ChartDataLabels]
 });

 const ctx14 = document.getElementById('tujuan1_4');
  const pie14 = new Chart(ctx14, {
   type: 'pie',
   data: {
    labels: ['Pekerja Penuh',
            'Pekerja Tidak Penuh',
    ],

     datasets: [{
       label: 'Persentase',
       data: [
        72.1,
        27.9,
        ],
    borderWidth: 1,
    backgroundColor: [
      "#506396", "#ffab00"
    ],
     }]
   },
    options:{
      scales:{
      },
      responsive: true,
      maintainAspectRatio: false,
      plugins:{
        tooltip:{
          enabled: true
        },
        title: {
          display: true,
          text : ['Persentase Tenaga Kerja di Industri Pariwisata','Menurut Jam Kerja (%)'],
          font: {
              size: 16
          }
        },
        legend:{
          display: true,
          position: 'bottom',
        },
        datalabels:{
          formatter: (value, ctx) => {
            let sum = 0;
            let dataArr = ctx.chart.data.datasets[0].data;
            dataArr.map(data => {
                sum += data;
            });
            let percentage = (value*100 / sum).toFixed(2)+"%";
            return percentage;
          },
          color :'black',
        }
      },
    }, plugins: [ChartDataLabels]
 });

const ctx2 = document.getElementById('tujuan2');
const pie2 = new Chart(ctx2, {
   type: 'pie',
   data: {
    labels: ['Ya',
            'Tidak',
    ],

     datasets: [{
       label: 'Perpindahan',
       data: [
        18.38,
        81.62,
        ],
    borderWidth: 1,
    backgroundColor: [
      "#506396", "#ffab00"
    ],
     }]
   },
    options:{
      scales:{
      },
      responsive: true,
      maintainAspectRatio: false,
      plugins:{
        tooltip:{
          enabled: true
        },
        title: {
          display: true,
          text : ['Persentase Tenaga Kerja di Industri Pariwisata','Menurut Perpindahan Pekerjaan (%)'],
          font: {
              size: 16
          }
        },
        legend:{
          display: true,
          position: 'bottom',
        },
        datalabels:{
          formatter: (value, ctx) => {
            let sum = 0;
            let dataArr = ctx.chart.data.datasets[0].data;
            dataArr.map(data => {
                sum += data;
            });
            let percentage = (value*100 / sum).toFixed(2)+"%";
            return percentage;
          },
          color :'black',
        }
      },
    }, plugins: [ChartDataLabels]
 });
