const A1 = document.getElementById('chart-1');

new Chart(A1, {
    type: 'doughnut',
    data: {
        labels: [
            ["Memanfaatkan"],
            ["Tidak Memanfaatkan"]
        ],

        datasets: [{
            label: 'Persentase Unit Usaha Pariwisata',
            data: [
                (uupStatusMemanfaatkan.ya),
                (uupStatusMemanfaatkan.tidak),
                
            ],
            borderwidth: 1,
            backgroundColor: [
                "#506396",
                "#ffab00", 
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: false,
                text : ['Pemanfaatan TIK Pada Unit Usaha Pariwisata'],
                font: {
                    size: 16,
                    weight: 'bold',
                }
            },
            subtitle: {
                display: false,
                text : ['Berdasarkan Jenis Usaha Pariwisata'],
                font: {
                    size: 14,
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
                color: 'white',
                formatter: function(value, context) {
                    total = context.chart._metasets[context.datasetIndex].total;
                    percentage = parseFloat((value/total*100).toFixed(2));
                    return percentage + '%';
                },
                anchor: 'middle',
                align: 'middle',
            }
        },
    },
    plugins: [ChartDataLabels]
});