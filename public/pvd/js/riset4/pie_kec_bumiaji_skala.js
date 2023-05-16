const pie4 = document.getElementById('pie-kec-bumiaji-skala');

const pie_4 = new Chart(pie4, {
    type: 'doughnut',
    data: {
        labels: [ ["Mikro"],
            ["Kecil"],
        ],

        datasets: [{
            label: 'Unit Usaha',
            data: [
                uupKecBumiajiSkala.mikro,
                uupKecBumiajiSkala.kecil,
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
                text : ['Persentase Unit Usaha Pariwisata di Kecamatan Bumiaji', 'Berdasarkan Skala Usaha'],
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

const pieKecBumiajiSkalaLegend = document.getElementById('pie-kec-bumiaji-skala-legend');
pieKecBumiajiSkalaLegend.addEventListener('click', update_value4(chk_bx));

function update_value4(chk_bx){
    if(chk_bx.checked)
    {
        console.log('check');
        pie_4.options.plugins.legend.display=true;
        pie_4.update();
    }
        
    else
    {
        console.log('uncheck');
        pie_4.options.plugins.legend.display=false;
        pie_4.update();
  
    }
}