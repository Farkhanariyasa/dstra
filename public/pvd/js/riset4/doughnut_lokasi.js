const doughnut3 = document.getElementById('chart-3');

const doughnut_3 = new Chart(doughnut3, {
    type: 'doughnut',
    data: {
        labels: [ ["Berada di bangunan fisik rumah tangga"],
            ["Tidak berada di bangunan fisik rumah tangga"],
        ],

        datasets: [{
            label: 'Jumlah UUP',
            data: [
                uupKotaBatuLokasi.ya,
                uupKotaBatuLokasi.tidak,
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
                text : ['Persentase Unit Usaha Pariwisata di Kota Batu'],
                font: {
                    size: 16
                },
            },
            subtitle: {
                display: true,
                text : ['Berdasarkan  Lokasi Usaha'],
                font: {
                    size: 16,
                    weight: 'bold',
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

const doughnutKotaBatuLokasiLegend = document.getElementById('doughnut-kota-batu-lokasi-legend');
doughnutKotaBatuLokasiLegend.addEventListener('click', update_value1(chk_bx));

function update_value1(chk_bx){
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