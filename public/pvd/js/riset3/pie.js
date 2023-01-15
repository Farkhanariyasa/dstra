
  const ctx2 = document.getElementById('tk_pie');
   new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: ['Tingkat 1','Tingkat 2','Tingkat 3 ','Tingkat 4'],
      datasets: [{
        label: '# of Votes',
        data: [mahasiswatk.tingkat1,mahasiswatk.tingkat2,mahasiswatk.tingkat3,mahasiswatk.tingkat4],
        borderWidth: 1
      }]
    },
    options:{
      tooltip:{
        enabled: false
      },
      datalabels:{
        formater: (value, context) => {
          const datapoints = context.chart.datasets[0].data;
          function totalSum(total,datapoint) {
            return total + datapoint;
          }
        }
      }

    }
  });
