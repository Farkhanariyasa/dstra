
  const ctx2 = document.getElementById('tujuan1_5_ya');
  const pie = new Chart(ctx2, {
   type: 'doughnut',
   data: {
    labels: ['Laki-laki',
            'Perempuan',
    ],

     datasets: [{
       label: 'Jumlah',
       data: [
        data1_5.rl_jk_1_1,
        data1_5.rl_jk_1_2,
        ],
    borderWidth: 1,
    backgroundColor: [
      "#ffab00",
      "#ffdd99"
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

 const ctx1 = document.getElementById('tujuan1_5_tidak');
  const pie2 = new Chart(ctx1, {
   type: 'doughnut',
   data: {
    labels: ['Laki-laki',
            'Perempuan',
    ],

     datasets: [{
       label: 'Jumlah',
       data: [
        data1_5.rl_jk_2_1,
        data1_5.rl_jk_2_2,
        ],
    borderWidth: 1,
    backgroundColor: [
      "#ffab00",
      "#ffdd99"
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
 pieChartLegend.addEventListener('click', update_value1(chk_bx));


 function update_value1(chk_bx){
  
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



 function tampilData(){
     // pieChart.value.split(',');
     // batang.data.datasets[0].data=pieChart.value.split(',');
     // batang.update();
     if (pieChart.value =='a') {
          console.log(pieChart.value);
          pie.data.datasets[0].data = 
             [   datajenisindustri.ji1,
                 datajenisindustri.ji2,
                 //datajenisindustri.ji3,
                 datajenisindustri.ji4,
                //  datajenisindustri.ji5,
                //  datajenisindustri.ji6,
                //  datajenisindustri.ji7,
                //  datajenisindustri.ji8,
                 datajenisindustri.ji9,
                 datajenisindustri.ji10,
                 datajenisindustri.ji11,
             ];
             pie.data.labels = ['jasa akomodasi',
             'jasa makan dan minum',
             //'jasa angkutan rel',
             'jasa angkutan darat',
            //  'jasa angkutan air',
            //  'jasa angkutan udara',
            //  'jasa angkutan udara',
            //  'Agen perjalanan dan reservasi lainnya',
             'Jasa kebudayaan, olahraga dan rekreasi',
             'Aktivitas perdagangan barang-barang pariwisata',
             'Jenis Industri lainnya'];
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




