const doughnut3 = document.getElementById('doughnut-kec-junrejo');

const doughnut_3 = new Chart(doughnut3, {
    type: 'doughnut',
    data: {
        labels: [ ["Jasa Transportasi Wisata"],
            ["Jasa Penyedia Makanan dan Minuman"],
            ["Penyedia Akomodasi"]
        ],

        datasets: [{
            label: 'Jumlah Unit Usaha Pariwisata',
            data: [
                uupKecJunrejo.transportasi,
                uupKecJunrejo.makan,
                uupKecJunrejo.akomodasi,
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
                text : ['Persentase Unit Usaha Pariwisata di Kecamatan Junrejo Berdasarkan Jenis Usahanya'],
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

const doughnutKecJunrejoLegend = document.getElementById('doughnut-kec-junrejo-legend');
doughnutKecJunrejoLegend.addEventListener('click', update_value_doughnut3(chk_bx));

function update_value_doughnut3(chk_bx){
    if(chk_bx.checked)
    {
        console.log('check');
        doughnut_3.options.plugins.legend.display=true;
        doughnut_3.update();
    }
        
    else
    {
        console.log('uncheck');
        doughnut_3.options.plugins.legend.display=false;
        doughnut_3.update();
  
    }
}
