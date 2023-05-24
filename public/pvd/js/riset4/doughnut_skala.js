const doughnut2 = document.getElementById('chart-2');

const doughnut_2 = new Chart(doughnut2, {
    type: 'doughnut',
    data: {
        labels: [ ["Mikro"],
            ["Kecil"],
        ],

        datasets: [{
            label: 'Unit Usaha',
            data: [
                uupKotaBatuSkala.mikro,
                uupKotaBatuSkala.kecil,
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffdd99",
                "#96a1c0",
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : ['Persentase Unit Usaha Pariwisata di Kota Batu Berdasarkan Skala Usaha'],
                font: {
                    size: 20
                }
            },
            legend:{
                display: true,
                position: 'right',
            },
            tooltip:{
                enabled: true,
                callbacks: {
                    label: function(context){
                        var label = context.label,
                            currentValue = context.raw,
                            total = context.chart._metasets[context.datasetIndex].total;
              
                        var percentage = parseFloat((currentValue/total*100).toFixed(1));
              
                        return label + ": " +currentValue + ' (' + percentage + '%)';
                    }
                }
            },
            datalabels: {
                display: true,
                color: 'black',
                formatter: function(value, context) {
                    total = context.chart._metasets[context.datasetIndex].total;
                    percentage = parseFloat((value/total*100).toFixed(1));
                    return percentage + '%';
                }


            }
        },
    },
    plugins: [ChartDataLabels]
});

const pieKotaBatuSkalaLegend = document.getElementById('pie-kota-batu-skala-legend');
pieKotaBatuSkalaLegend.addEventListener('click', update_value1(chk_bx));

function update_value1(chk_bx){
    if(chk_bx.checked)
    {
        console.log('check');
        doughnut_2.options.plugins.legend.display=true;
        doughnut_2.update();
    }
        
    else
    {
        console.log('uncheck');
        doughnut_2.options.plugins.legend.display=false;
        doughnut_2.update();
  
    }
}