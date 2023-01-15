
  const ctx2 = document.getElementById('tk_pie');
  new Chart(ctx2, {
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

