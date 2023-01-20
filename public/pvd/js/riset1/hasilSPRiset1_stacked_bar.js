

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
            text : "Proporsi Tindakan Perjalanan Tidak Lebih dari 1 Tahun dan Telah Kembali dalam Periode Oktober 2022 - Desember 2022" ,
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
            enabled: true,
            callbacks: {
                label: function(context){
                    // stacked 100%
                    var label = context.label,

                    data1 = context.chart.data.datasets[0].data,
                    data2 = context.chart.data.datasets[1].data,
                    total = data1[context.dataIndex] + data2[context.dataIndex],


                    currentValue = context.dataset.data[context.dataIndex],
                    percentage = Math.floor(((currentValue/total) * 100)+0.5);
                    return label + ": " +currentValue + ' (' + percentage + '%)';


                }
            }
        },
        datalabels:{
            display:true,
            color:'black',
            formatter: function(value, context) {
                var data1 = context.chart.data.datasets[0].data,
                    data2 = context.chart.data.datasets[1].data,
                    total = data1[context.dataIndex] + data2[context.dataIndex],
                
                    currentValue = context.dataset.data[context.dataIndex],
                    percentage = Math.floor(((currentValue/total) * 100)+0.5);
                    return percentage + '%';

            }
        } 
        },
    maintainAspectRatio: false
    }, 
    plugins:[ChartDataLabels]
});
