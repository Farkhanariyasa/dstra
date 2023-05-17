const doughnut4 = document.getElementById('doughnut-kec-bumiaji');

const doughnut_4 = new Chart(doughnut4, {
    type: 'doughnut',
    data: {
        labels: [ ["Jasa Transportasi Wisata"],
            ["Jasa Penyedia Makanan dan Minuman"],
            ["Penyedia Akomodasi"]
        ],

        datasets: [{
            label: 'Jumlah Unit Usaha Pariwisata',
            data: [
                uupKecBumiaji.transportasi,
                uupKecBumiaji.makan,
                uupKecBumiaji.akomodasi,
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffdd99",
                "#96a1c0",
                "#6f617f"
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : ['Persentase Unit Usaha Pariwisata di Kecamatan Bumiaji Berdasarkan Jenis Usahanya'],
                font: {
                    size: 14
                }
            },
            legend:{
                display: true,
                position: 'bottom',
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

const doughnutKecBumiajiLegend = document.getElementById('doughnut-kec-bumiaji-legend');
doughnutKecBumiajiLegend.addEventListener('click', update_value_doughnut4(chk_bx));

function update_value_doughnut4(chk_bx){
    if(chk_bx.checked)
    {
        console.log('check');
        doughnut_4.options.plugins.legend.display=true;
        doughnut_4.update();
    }
        
    else
    {
        console.log('uncheck');
        doughnut_4.options.plugins.legend.display=false;
        doughnut_4.update();
  
    }
}