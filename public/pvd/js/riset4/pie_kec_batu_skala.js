const pie2 = document.getElementById('pie-kec-batu-skala');

const pie_2 = new Chart(pie2, {
    type: 'pie',
    data: {
        labels: [ ["Mikro"],
            ["Kecil"],
        ],

        datasets: [{
            label: 'Unit Usaha',
            data: [
                uupKecBatuSkala.mikro,
                uupKecBatuSkala.kecil,
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
                text : ['Persentase Unit Usaha Pariwisata di Kecamatan Batu', 'Berdasarkan Skala Usaha'],
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

const pieKecBatuSkalaLegend = document.getElementById('pie-kec-batu-skala-legend');
pieKecBatuSkalaLegend.addEventListener('click', update_value2(chk_bx));

function update_value2(chk_bx){
    if(chk_bx.checked)
    {
        console.log('check');
        pie_2.options.plugins.legend.display=true;
        pie_2.update();
    }
        
    else
    {
        console.log('uncheck');
        pie_2.options.plugins.legend.display=false;
        pie_2.update();
  
    }
}