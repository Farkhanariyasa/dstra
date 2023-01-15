const ctx5 = document.getElementById('j_doughnut');
new Chart(ctx5, {
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
      label: '# of Votes',
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