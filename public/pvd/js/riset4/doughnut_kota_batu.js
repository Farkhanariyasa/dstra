const doughnut1 = document.getElementById('doughnut-kota-batu');

const doughnut_1 = new Chart(doughnut1, {
    type: 'doughnut',
    data: {
        labels: [ ["Jasa Transportasi Wisata"],
            ["Jasa Penyedia Makanan dan Minuman"],
            ["Penyedia Akomodasi"]
        ],

        datasets: [{
            label: 'Jumlah Unit Usaha Pariwisata',
            data: [
                uupKotaBatu.transportasi,
                uupKotaBatu.makan,
                uupKotaBatu.akomodasi,
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
                text : ['Persentase Unit Usaha Pariwisata di Kota Batu Berdasarkan Jenis Usahanya'],
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

const doughnutKotaBatuLegend = document.getElementById('doughnut-kota-batu-legend');
doughnutKotaBatuLegend.addEventListener('click', update_value_doughnut1(chk_bx));

function update_value_doughnut1(chk_bx){
    if(chk_bx.checked)
    {
        console.log('check');
        doughnut_1.options.plugins.legend.display=true;
        doughnut_1.update();
    }
        
    else
    {
        console.log('uncheck');
        doughnut_1.options.plugins.legend.display=false;
        doughnut_1.update();
  
    }
}