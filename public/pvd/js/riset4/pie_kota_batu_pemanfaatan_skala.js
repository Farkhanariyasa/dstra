const piePemanfaatanSkala1 = document.getElementById('pie-kota-batu-pemanfaatan-skala');

const piePemanfaatanSkala_1 = new Chart(piePemanfaatanSkala1, {
    type: 'doughnut',
    data: {
        labels: [ ["Mikro"],
            ["Kecil"],
        ],

        datasets: [{
            label: 'Unit Usaha',
            data: [
                pemanfaatanTikSkala.mikro,
                pemanfaatanTikSkala.kecil,
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
                text : ['Pemanfaatan TIK pada Unit Usaha Pariwisata di Kota Batu Berdasarkan Skala Usaha'],
                font: {
                    size: 18
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
              
                        var percentage = parseFloat((currentValue/total*100).toFixed(2));
              
                        return label + ": " +currentValue + ' (' + percentage + '%)';
                    }
                }
            },
            datalabels: {
                display: true,
                color: 'black',
                formatter: function(value, context) {
                    total = context.chart._metasets[context.datasetIndex].total;
                    percentage = parseFloat((value/total*100).toFixed(2));
                    return percentage + '%';
                }


            }
        },
    },
    plugins: [ChartDataLabels]
});

const pieKotaBatuPemanfaatanSkalaLegend = document.getElementById('pie-kota-batu-pemanfaatan-skala-legend');
pieKotaBatuPemanfaatanSkalaLegend.addEventListener('click', update_value_pemanfaatan_skala1(chk_bx));

function update_value_pemanfaatan_skala1(chk_bx){
    if(chk_bx.checked)
    {
        console.log('check');
        piePemanfaatanSkala_1.options.plugins.legend.display=true;
        piePemanfaatanSkala_1.update();
    }
        
    else
    {
        console.log('uncheck');
        piePemanfaatanSkala_1.options.plugins.legend.display=false;
        piePemanfaatanSkala_1.update();
  
    }
}