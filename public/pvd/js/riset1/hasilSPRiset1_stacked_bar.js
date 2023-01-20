

const hasil4 = document.getElementById('riset1_hasil4');

new Chart(hasil4, {
    type: 'bar',
    data: {
    labels: ['Ke Objek Wisata dalam Kota Sama',
            'Menuju Kecamatan lain dalam Kota Sama',
            'Ke Objek Wisata di Luar Kota',
            'Menginap di Akomodasi Komersil di Luar Kota',
            'Menginap di Akomodasi Komersil di Kota Sama',
            'Menuju Kota Lain'],
    datasets: [
      {
        label: 'Ya',
        data: [mpw1.ya,
            mpw2.ya,
            mpw3.ya,
            mpw4.ya,
            mpw5.ya,
            mpw6.ya,],
        backgroundColor: ["#506396"],
      },
      {
        label: 'Tidak',
        data: [mpw1.tidak,
            mpw2.tidak,
            mpw3.tidak,
            mpw4.tidak,
            mpw5.tidak,
            mpw6.tidak,],
        backgroundColor: ["#ffab00"],
      }
      ]},
    options: {
    responsive:true,
    scales: {
        x: {
          stacked: true,
        },
        y: {
          stacked: true
        }  
     },
    plugins:{
        title: {
            display: true,
            text : "Proporsi Tindakan Perjalanan " ,
            font: {
                size: 20
            }
          },
          stacked100:{
            enable:true,
            precision:3
          },
        legend:{
            display: true,
            position: "right"
          },
        tooltip:{
            // callbacks:{
            //     label: function(tooltipItems,data){
            //         // var label = context.label,
            //         // currentValue = context.raw,
            //         // total = context.chart._metasets[context.].total;

            //         // var percentage = parseFloat((currentValue/total*100).toFixed(1));
              
            //         // return label + ": " +currentValue + ' (' + percentage + '%)';
                    
            //         return data.datasets[tooltipItems.datasetIndex].label + ': ' + tooltipItems.xLabel + ' %';
            //     }
            // }
        },
        datalabels:{
            display:true,
            color:'black',
            // formatter: function(value, context) {
            //     total = context.chart._metasets[context.datasetIndex].total;
            //     percentage = parseFloat((value/total*100).toFixed(1));
            //     return percentage + '%';
            // }
        } 
        },
    maintainAspectRatio: false
    }, plugins:[ChartDataLabels]
});
