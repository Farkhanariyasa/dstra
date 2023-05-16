const piePemanfaatan1 = document.getElementById('pie-kota-batu-pemanfaatan');

const piePemanfaatan_1 = new Chart(piePemanfaatan1, {
    type: 'doughnut',
    data: {
        labels: [ ["Mikro"],
            ["Kecil"],
        ],

        datasets: [{
            label: 'Unit Usaha',
            data: [
                pemanfaatanTik.tidak,
                pemanfaatanTik.ya,
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