const pie1 = document.getElementById('chart-4');

const pie_1 = new Chart(pie1, {
    type: 'doughnut',
    data: {
        labels: [ ["Mikro"],
            ["Kecil"],
        ],

        datasets: [{
            label: 'Unit Usaha',
            data: [
                uupKotaBatuSkala.mikro,
                uupKotaBatuSkala.kecil,
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
                text : ['Persentase Unit Usaha Pariwisata di Kota Batu Berdasarkan Skala Usaha'],
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