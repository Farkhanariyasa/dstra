const piePemanfaatan1 = document.getElementById('chart-5');

const piePemanfaatan_1 = new Chart(piePemanfaatan1, {
    type: 'doughnut',
    data: {
        labels: [ ["Tidak memanfaatkan"],
            ["Memanfaatkan"],
        ],

        datasets: [{
            label: 'Unit Usaha',
            data: [
                pemanfaatanTik.tidak,
                pemanfaatanTik.ya,
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffab00", "#506396",
                "#4b395f", "#b35c74",
                "#ffbc33", "#7382ab",
                "#6f617f", "#c27d90"
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: false,
                text : ['Pemanfaatan TIK pada Unit Usaha Pariwisata di Kota Batu'],
                font: {
                    size: 20
                }
            },
            legend:{
                display: true,
                title: {
                    display: false,
                    text : 'Kategori',
                },
                position: 'bottom',
                align: 'start',
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

const pieKotaBatuPemanfaatanLegend = document.getElementById('pie-kota-batu-pemanfaatan-legend');
pieKecBatuSkalaLegend.addEventListener('click', update_value_pemanfaatan2(chk_bx));

function update_value_pemanfaatan1(chk_bx){
    if(chk_bx.checked)
    {
        console.log('check');
        piePemanfaatan_1.options.plugins.legend.display=true;
        piePemanfaatan_1.update();
    }
        
    else
    {
        console.log('uncheck');
        piePemanfaatan_1.options.plugins.legend.display=false;
        piePemanfaatan_1.update();
    }
}