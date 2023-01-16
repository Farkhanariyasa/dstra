const ctx5 = document.getElementById('j_doughnut');
new Chart(ctx5, {
  type: 'doughnut',
  data: {
    labels: ['Tidak/belum pernah sekolah',
            'Tidak/belum SD',
            'SD/MI/SDLB/Paket A',
            'SMP/MTs/SMPLB/Paket B',
            'SMA/MA/SMLB/Paket C',
            'SMK/MAK',
            'Diploma I/II/III',
            'Diploma IV',
            'S1/S2/S3'
        ],
        datasets: [{
            label: 'Pendidikan Tertinggi',
            data: [datapendidikantertinggi.pt1,
                datapendidikantertinggi.pt2,
                datapendidikantertinggi.pt3,
                datapendidikantertinggi.pt4,
                datapendidikantertinggi.pt5,
                datapendidikantertinggi.pt6,
                datapendidikantertinggi.pt7,
                datapendidikantertinggi.pt8,
                datapendidikantertinggi.pt9,
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