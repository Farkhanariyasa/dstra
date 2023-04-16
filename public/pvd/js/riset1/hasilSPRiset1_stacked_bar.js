
let delayed1;
const hasil4 = document.getElementById('riset1_hasil4');

stack_bar = new Chart(hasil4, {
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
    animation: {
      onComplete: () => {
        delayed1 = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === "data" && context.mode === "default" && !delayed1) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
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
            text : ["Proporsi Tindakan Perjalanan Tidak Lebih dari 1 Tahun dan", "Telah Kembali dalam Periode Oktober 2022 - Desember 2022"] ,
            font: {
                size: 16,
                family: 'Poppins'
            },
            color: '#493a5a',
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

const barChartAxis_stack = document.getElementById('forBarChartAxis_stack');
barChartAxis_stack.addEventListener('click', update_value_stack(check_axis));

function update_value_stack(check_axis){
    if (check_axis.checked) {
        console.log('check');
        stack_bar.options.scales.x.display = true;
        stack_bar.options.scales.y.display = true;
    } else {
        console.log('uncheck');
        stack_bar.options.scales.x.display = false;
        stack_bar.options.scales.y.display = false;
    }
    stack_bar.update();
}

