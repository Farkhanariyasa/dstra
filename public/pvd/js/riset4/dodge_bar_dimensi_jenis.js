const hasil2 = document.getElementById('hasil2');

const bar = new Chart(hasil2, {
    type: 'bar',
    data: {
        labels: [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia','Makanan', 'dan', 'Minuman'],
                ['Jasa', 'Akomodasi']
            ],
        datasets: [{
            label: 'dimensi1_jenis',
            data: [
                dimensi1_jenis.transportasi,
                dimensi1_jenis.makanminum,
                dimensi1_jenis.akomodasi
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffdd99",
                "#96a1c0",
                "#93889f"
            ],
        }]
    },
    options: {
        scales: {
            y: {
            beginAtZero: true
            }
        },
        maintainAspectRatio: false,
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : ['dimensi1_jenis'],
                font: {
                    size: 20
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
                    }
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});

const barChart = document.getElementById('barChart');
// const barChartLegend = document.getElementById('barChartLegend');

barChart.addEventListener('change', tampilData);
// barChartLegend.addEventListener('click', update_value_legend_bar_jenis(chk_bx));

// function update_value_legend_bar_jenis(chk_bx){
  
//     if(chk_bx.checked)
//     {
//         console.log('check');
//         bar.options.plugins.legend.display=true;
//         bar.update();
//     }
        
//     else{
//       console.log('uncheck');
//       bar.options.plugins.legend.display=false;
//       bar.update();
  
//     }
//   }

function tampilData(){
    if (barChart.value =='dimensi1') {
        console.log(barChart.value);
        bar.data.datasets[0].data = 
            [
                dimensi1_jenis.transportasi,
                dimensi1_jenis.makanminum,
                dimensi1_jenis.akomodasi
            ];
            bar.data.labels =   [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia','Makanan', 'dan', 'Minuman'],
                ['Jasa', 'Akomodasi']
            ];
            bar.options.plugins.title.text='dimensi1_jenis';
            bar.update();

    } if (barChart.value =='dimensi2') {
            console.log(barChart.value);
            bar.data.datasets[0].data = 
            [   
                dimensi2_jenis.transportasi,
                dimensi2_jenis.makanminum,
                dimensi2_jenis.akomodasi
            ];
            bar.data.labels =   [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia','Makanan', 'dan', 'Minuman'],
                ['Jasa', 'Akomodasi']
            ];
            bar.options.plugins.title.text='dimensi2_jenis';
            bar.update();
    } if (barChart.value =='dimensi3'){
        console.log(barChart.value);
        bar.data.datasets[0].data = 
            [   
                dimensi3_jenis.transportasi,
                dimensi3_jenis.makanminum,
                dimensi3_jenis.akomodasi
            ];
            bar.data.labels =   [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia','Makanan', 'dan', 'Minuman'],
                ['Jasa', 'Akomodasi']
            ];
            bar.options.plugins.title.text= 'dimensi3_jenis';
            bar.update();
    } if (barChart.value =='dimensi4') {
        console.log(barChart.value);
        bar.data.datasets[0].data = 
            [
                dimensi4_jenis.transportasi,
                dimensi4_jenis.makanminum,
                dimensi4_jenis.akomodasi
            ];
            bar.data.labels =   [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia','Makanan', 'dan', 'Minuman'],
                ['Jasa', 'Akomodasi']
            ];
            bar.options.plugins.title.text='dimensi4_jenis';
            bar.update();

    } if (barChart.value =='dimensi5') {
            console.log(barChart.value);
            bar.data.datasets[0].data = 
            [   
                dimensi5_jenis.transportasi,
                dimensi5_jenis.makanminum,
                dimensi5_jenis.akomodasi
            ];
            bar.data.labels =   [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia','Makanan', 'dan', 'Minuman'],
                ['Jasa', 'Akomodasi']
            ];
            bar.options.plugins.title.text='dimensi5_jenis';
            bar.update();
    } if (barChart.value =='dimensi6'){
        console.log(barChart.value);
        bar.data.datasets[0].data = 
            [   
                dimensi6_jenis.transportasi,
                dimensi6_jenis.makanminum,
                dimensi6_jenis.akomodasi
            ];
            bar.data.labels =   [['Jasa', 'Transportasi'],
                ['Jasa', 'Penyedia','Makanan', 'dan', 'Minuman'],
                ['Jasa', 'Akomodasi']
            ];
            bar.options.plugins.title.text= 'dimensi6_jenis';
            bar.update();
    }
}