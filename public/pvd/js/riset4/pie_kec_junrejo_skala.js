const pie3 = document.getElementById('pie-kec-junrejo-skala');

const pie_3 = new Chart(pie3, {
    type: 'doughnut',
    data: {
        labels: [ ["Mikro"],
            ["Kecil"],
        ],

        datasets: [{
            label: 'Unit Usaha',
            data: [
                uupKecJunrejoSkala.mikro,
                uupKecJunrejoSkala.kecil,
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
                text : ['Persentase Unit Usaha Pariwisata di Kecamatan Junrejo Berdasarkan Skala Usaha'],
                font: {
                    size: 14
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

const pieKecJunrejoSkalaLegend = document.getElementById('pie-kec-junrejo-skala-legend');
pieKecJunrejoSkalaLegend.addEventListener('click', update_value3(chk_bx));

function update_value3(chk_bx){
    if(chk_bx.checked)
    {
        console.log('check');
        pie_3.options.plugins.legend.display=true;
        pie_3.update();
    }
        
    else
    {
        console.log('uncheck');
        pie_3.options.plugins.legend.display=false;
        pie_3.update();
  
    }
}