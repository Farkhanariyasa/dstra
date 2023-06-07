const data = {
    labels: ['Laki-laki', 'Perempuan'],
    datasets: [{
      label: 'Rentang usia',
      data: [
        [usiaPemilikPengelola['laki-laki.min'], usiaPemilikPengelola['laki-laki.max']], 
        [usiaPemilikPengelola['perempuan.min'], usiaPemilikPengelola['perempuan.max']],
    ],
      backgroundColor: [
        "#ffab00", "#506396",
        "#4b395f", "#b35c74",
        "#ffbc33", "#7382ab",
        "#6f617f", "#c27d90"
      ],
      borderColor: [
        "#ffab00", "#506396",
        "#4b395f", "#b35c74",
        "#ffbc33", "#7382ab",
        "#6f617f", "#c27d90"
      ],
      barPercentage: 0.8
    }]
  };

  // config 
  const config = {
    type: 'bar',
    data,
    options: {
      indexAxis: 'y',
      scales: {
        x:{
            min: 10,
            max: 100,
            grid:{
                display:false
            },
        },
        y:{            
            beginAtZero: true,
            grid:{
                display:false
            },
        }
      },
      maintainAspectRatio: false,
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        title: {
            display: false,
            text : ['Rentang Usia (Tahun) Pemilik Unit Usaha Pariwisata di Kota Batu'],
            font: {
                size: 18
            }
        },
        subtitle: {
            display: false,
            text : ['Berdasarkan Jenis Kelamin'],
            font: {
                size: 16,
                weight: 'bold'
            }
        },
        legend:{
            display: false,
            position: 'right',
        },
        tooltip: {
            callbacks: {
                title: (context) => {
                    console.log(context[0].label);
                    return context[0].label.replaceAll(',',' ');
                },
            },
            enabled: true,
            // callbacks: {
            //     label: function(context){
            //         var label = context.label,
            //             currentValue = context.raw,
            //             total = context.chart._metasets[context.datasetIndex].total;
          
            //         var percentage = parseFloat((currentValue/total*100).toFixed(1));
          
            //         return label + ": " +currentValue + ' (' + percentage + '%)';
            //     },
            // },
        },
        datalabels: {
            display: true,
            color: 'black',
            formatter: function(value, context) {
                return `${value[0]} - ${value[1]} tahun`;
            },
        },
      },
    },
    plugins: [ChartDataLabels]
  };
    // render init block
    const myChart = new Chart(
        document.getElementById('chart-1'),
        config
      );
  
      // Instantly assign Chart.js version
      const chartVersion = document.getElementById('chartVersion');
      chartVersion.innerText = Chart.version;