
  const ctx2 = document.getElementById('tk_pie');
  const pie = new Chart(ctx2, {
   type: 'pie',
   data: {
    labels: ['jasa akomodasi',
            'jasa makan dan minum',
            'jasa angkutan rel',
            'jasa angkutan darat',
            'jasa angkutan air',
            'jasa angkutan udara',
            'jasa angkutan udara',
            'Agen perjalanan dan reservasi lainnya',
            'Jasa kebudayaan, olahraga dan rekreasi',
            'Aktivitas perdagangan barang-barang pariwisata',
            'jasa pariwisata lainnya'
    ],

     datasets: [{
       label: 'Jumlah',
       data: [datajenisindustri.ji1,
        datajenisindustri.ji2,
        datajenisindustri.ji3,
        datajenisindustri.ji4,
        datajenisindustri.ji5,
        datajenisindustri.ji6,
        datajenisindustri.ji7,
        datajenisindustri.ji8,
        datajenisindustri.ji9,
        datajenisindustri.ji10,
        datajenisindustri.ji11,],
    borderWidth: 1,
    backgroundColor: [
      "#ffab00",
      "#ffbc33",
      "#ffdd99",
      "#ffeecc",
      "#506396",
      "#7832ab",
      "#96a1c0",
      "#dce0ea",
      "#4b395f",
      "#6f617f",
      "#93889f"
  ],
     }]
   },
    options:{
      scales:{
      },
      plugins:{
        tooltip:{
          enabled: true
        },
        title: {
          display: true,
          text : 'Banyaknya Tenaga Pariwisata Berdasarkan Jenis Industri',
          font: {
              size: 20
          }
        },
        legend:{
          display: true,
          position: 'bottom',
        },
        datalabels:{
          color :'black',
          formatter:(value,context)=>{
            const datapoints =context.chart.data.datasets[0].data;
            function totalSum(total,datapoint){
              return total+datapoint;
            }
            const totalpersen= datapoints.reduce(totalSum,0);
            const persenvalue=(value/totalpersen*100).toFixed(1);
            // return `Total: ${value}\nPersentase: ${persenvalue}%`;
            return `${persenvalue}%`
          }
        }
      },
    }, plugins: [ChartDataLabels]
 });

 const pieChart = document.getElementById('forPieChart');
 const pieChartLegend = document.getElementById('forPieChartLegend');
 
 pieChart.addEventListener('change', tampilData);
 pieChartLegend.addEventListener('click', update_value(chk_bx));


 function update_value(chk_bx){
  
  if(chk_bx.checked)
  {
      console.log('check');
      pie.options.plugins.legend.display=true;
      pie.update();
  }
      
  else{
    console.log('uncheck');
    pie.options.plugins.legend.display=false;
    pie.update();

  }
}

//  function tampilLegend(){

//   if (pieChartLegend.value =='show') {
//     console.log(pieChartLegend.value);
//       pie.options.plugins.legend.display=false;
//       pie.update();

//   } else {
//     pie.options.plugins.legend.display=false;
//     pie.update();
//  }
// }
                
// }

// function tampilLegend(){
                
//     for(i = 0; i < pieChartLegend.length; i++) {
//         if(pieChartLegend[1].checked){
//           console.log(pieChartLegend.value);
//                 pie.options.plugins.legend.display=false;
//                 pie.update();  
//         } 
//         if(pieChartLegend[0].checked){
//           pie.options.plugins.legend.display=true;
//           pie.update();  
//         }
                  
//   }
// }

 function tampilData(){
     // pieChart.value.split(',');
     // batang.data.datasets[0].data=pieChart.value.split(',');
     // batang.update();
     if (pieChart.value =='a') {
          console.log(pieChart.value);
          pie.data.datasets[0].data = 
             [   datajenisindustri.ji1,
                 datajenisindustri.ji2,
                 datajenisindustri.ji3,
                 datajenisindustri.ji4,
                 datajenisindustri.ji5,
                 datajenisindustri.ji6,
                 datajenisindustri.ji7,
                 datajenisindustri.ji8,
                 datajenisindustri.ji9,
                 datajenisindustri.ji10,
                 datajenisindustri.ji11,
             ];
             pie.data.labels = ['jasa akomodasi',
             'jasa makan dan minum',
             'jasa angkutan rel',
             'jasa angkutan darat',
             'jasa angkutan air',
             'jasa angkutan udara',
             'jasa angkutan udara',
             'Agen perjalanan dan reservasi lainnya',
             'Jasa kebudayaan, olahraga dan rekreasi',
             'Aktivitas perdagangan barang-barang pariwisata',
             'jasa pariwisata lainnya'];
             // console.log(batang.data.datasets[0].data)
             pie.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Jenis Industri';
             pie.update();

     } if (pieChart.value =='b') {
             console.log(pieChart.value);
             pie.data.datasets[0].data = 
             [   
                 datapendidikantertinggi.pt1,
                 datapendidikantertinggi.pt2,
                 datapendidikantertinggi.pt3,
                 datapendidikantertinggi.pt4,
                 datapendidikantertinggi.pt5,
                 datapendidikantertinggi.pt6,
                 datapendidikantertinggi.pt7,
                 datapendidikantertinggi.pt8,
                 datapendidikantertinggi.pt9
             ];
             pie.data.labels = ['Tidak/belum pernah sekolah',
             'Tidak/belum SD',
             'SD/MI/SDLB/Paket A',
             'SMP/MTs/SMPLB/Paket B',
             'SMA/MA/SMLB/Paket C',
             'SMK/MAK',
             'Diploma I/II/III',
             'Diploma IV',
             'S1/S2/S3'
             ];
             // console.log(pie.data.datasets[0].data)
             
             pie.options.plugins.title.text='Banyaknya Tenaga Pariwisata Berdasarkan Pendidikan Tertinggi';
             pie.update();
     } if (pieChart.value =='c'){
            console.log(pieChart.value);
            pie.data.datasets[0].data = 
             [   
                datajeniskelamin_riset3.jk_11,
                datajeniskelamin_riset3.jk_12
             ];
             pie.data.labels = ['Laki-laki',
             'Perempuan'
             ];
             
             // console.log(doughnut.data.datasets[0].data)
             pie.options.plugins.title.text= 'Banyaknya Tenaga Pariwisata Berdasarkan Jenis Kelamin';
             pie.update();
     }
 }



// dummy
// const data = {
//   labels: ['jasa akomodasi',
//               'jasa makan dan minum',
//               'jasa angkutan rel',
//               'jasa angkutan darat',
//               'jasa angkutan air',
//               'jasa angkutan udara',
//               'jasa angkutan udara',
//               'Agen perjalanan dan reservasi lainnya',
//               'Jasa kebudayaan, olahraga dan rekreasi',
//               'Aktivitas perdagangan barang-barang pariwisata',
//               'jasa pariwisata lainnya'
//       ],
//   datasets: [{
//     label: 'Jumlah Ruta',
//     data: [datajenisindustri.ji1,
//               datajenisindustri.ji2,
//               datajenisindustri.ji3,
//               datajenisindustri.ji4,
//               datajenisindustri.ji5,
//               datajenisindustri.ji6,
//               datajenisindustri.ji7,
//               datajenisindustri.ji8,
//               datajenisindustri.ji9,
//               datajenisindustri.ji10,
//               datajenisindustri.ji11,],
//     borderWidth: 1
//   }]
// };

// // config 
// const config = {
//   type: 'pie',
//   data,
//   options:{
//     scales:{
//     },
//     plugins:{
//         tooltip:{
//             enabled: true
//         }
//     }
// }, plugins: [ChartDataLabels]
// };

// // render init block
// const myChart = new Chart(
//   document.getElementById('tk_pie'),
//   config
// );

