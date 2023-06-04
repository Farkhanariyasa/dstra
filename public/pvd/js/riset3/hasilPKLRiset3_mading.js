
  const ctx1 = document.getElementById('tujuan1_1');
  const pie = new Chart(ctx1, {
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
          color :'black',
        },
      },
    }, plugins: [ChartDataLabels]
 });

 const ctx2 = document.getElementById('tujuan1_2');
  const pie2 = new Chart(ctx2, {
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
          color :'black',
        }
      },
    }, plugins: [ChartDataLabels]
 });

 const ctx3 = document.getElementById('tujuan1_3');
  const pie3 = new Chart(ctx3, {
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
          color :'black',
        }
      },
    }, plugins: [ChartDataLabels]
 });

 const ctx4 = document.getElementById('tujuan1_4');
  const pie4 = new Chart(ctx4, {
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
          color :'black',
        }
      },
    }, plugins: [ChartDataLabels]
 });

//  const pieChart = document.getElementById('forPieChart');
//  const pieChartLegend = document.getElementById('forPieChartLegend');
 
//  pieChart.addEventListener('change', tampilData);
//  pieChartLegend.addEventListener('click', update_value1(chk_bx));


//  function update_value1(chk_bx){
  
//   if(chk_bx.checked)
//   {
//       console.log('check');
//       pie.options.plugins.legend.display=true;
//       pie.update();
//   }
      
//   else{
//     console.log('uncheck');
//     pie.options.plugins.legend.display=false;
//     pie.update();

//   }
// }



//  function tampilData(){
//      // pieChart.value.split(',');
//      // batang.data.datasets[0].data=pieChart.value.split(',');
//      // batang.update();
//      if (pieChart.value =='a') {
//           console.log(pieChart.value);
//           pie.data.datasets[0].data = 
//              [   datajenisindustri.ji1,
//                  datajenisindustri.ji2,
//                  //datajenisindustri.ji3,
//                  datajenisindustri.ji4,
//                 //  datajenisindustri.ji5,
//                 //  datajenisindustri.ji6,
//                 //  datajenisindustri.ji7,
//                 //  datajenisindustri.ji8,
//                  datajenisindustri.ji9,
//                  datajenisindustri.ji10,
//                  datajenisindustri.ji11,
//              ];
//              pie.data.labels = ['jasa akomodasi',
//              'jasa makan dan minum',
//              //'jasa angkutan rel',
//              'jasa angkutan darat',
//             //  'jasa angkutan air',
//             //  'jasa angkutan udara',
//             //  'jasa angkutan udara',
//             //  'Agen perjalanan dan reservasi lainnya',
//              'Jasa kebudayaan, olahraga dan rekreasi',
//              'Aktivitas perdagangan barang-barang pariwisata',
//              'Jenis Industri lainnya'];
//              // console.log(batang.data.datasets[0].data)
//              pie.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Jenis Industri';
//              pie.update();

//      } if (pieChart.value =='b') {
//              console.log(pieChart.value);
//              pie.data.datasets[0].data = 
//              [   
//                  datapendidikantertinggi.pt1,
//                  datapendidikantertinggi.pt2,
//                  datapendidikantertinggi.pt3,
//                  datapendidikantertinggi.pt4,
//                  datapendidikantertinggi.pt5,
//                  datapendidikantertinggi.pt6,
//                  datapendidikantertinggi.pt7,
//                  datapendidikantertinggi.pt8,
//                  datapendidikantertinggi.pt9
//              ];
//              pie.data.labels = ['Tidak/belum pernah sekolah',
//              'Tidak/belum SD',
//              'SD/MI/SDLB/Paket A',
//              'SMP/MTs/SMPLB/Paket B',
//              'SMA/MA/SMLB/Paket C',
//              'SMK/MAK',
//              'Diploma I/II/III',
//              'Diploma IV',
//              'S1/S2/S3'
//              ];
//              // console.log(pie.data.datasets[0].data)
             
//              pie.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Pendidikan Tertinggi';
//              pie.update();
//      } if (pieChart.value =='c'){
//             console.log(pieChart.value);
//             pie.data.datasets[0].data = 
//              [   
//                 datajeniskelamin_riset3.jk_11,
//                 datajeniskelamin_riset3.jk_12
//              ];
//              pie.data.labels = ['Laki-laki',
//              'Perempuan'
//              ];
             
//              // console.log(doughnut.data.datasets[0].data)
//              pie.options.plugins.title.text= 'Banyaknya Tenaga Pariwisata Berdasarkan Jenis Kelamin';
//              pie.update();
//      }
//  }