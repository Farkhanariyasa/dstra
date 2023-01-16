const ctx5 = document.getElementById('j_doughnut');
const doughnut=new Chart(ctx5, {
  type: 'doughnut',
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
            label: 'Pendidikan Tertinggi',
            data: [   
               datajenisindustri.ji1,
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
           ],
            borderWidth: 1
        }]
  },
  options:{
    scales:{
    },
    plugins:{
      tooltip:{
        enabled: true
      },
      datalabels:{
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
    }
  }, plugins: [ChartDataLabels]
});

const doughnutChart = document.getElementById('forDoughnutChart');

 doughnutChart.addEventListener('change', tampilData);
   
 function tampilData(){
     console.log(doughnutChart.value);
     // doughnutChart.value.split(',');
     // batang.data.datasets[0].data=doughnutChart.value.split(',');
     // batang.update();
     if (doughnutChart.value =='a') {
         doughnut.data.datasets[0].data = 
             [   
                datajenisindustri.ji1,
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
             doughnut.data.labels = ['jasa akomodasi',
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
             console.log('jenisindustri');
 
             doughnut.update();
     } else {
             doughnut.data.datasets[0].data = 
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
             doughnut.data.labels = ['Tidak/belum pernah sekolah',
             'Tidak/belum SD',
             'SD/MI/SDLB/Paket A',
             'SMP/MTs/SMPLB/Paket B',
             'SMA/MA/SMLB/Paket C',
             'SMK/MAK',
             'Diploma I/II/III',
             'Diploma IV',
             'S1/S2/S3'
             ];
             // console.log(doughnut.data.datasets[0].data)
             console.log('pendidikan tertinggi');
 
             doughnut.update();
     }
 }