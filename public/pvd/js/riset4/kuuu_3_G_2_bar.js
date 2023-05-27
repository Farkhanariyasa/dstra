const G2 = document.getElementById('viz-2-3-G-2');

new Chart(G2, {
    type: 'bar',
    data: {
        labels: [
            ["Media Sosial"],
            ["Marketplace"],
            ["Keduanya"],
        ],

        datasets: [{
            label: 'Jumlah Responden',
            data: [
                48.66,
                20.30,
                31.04,
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffbc33",
                "#ffbc33",
                "#ffbc33",
            ],
        }]
    },
    options: {
        indexAxis: 'y',
        scales: {
            x: {
                display: false,
                min: 0,
                max: 100,
            },
        },
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
                display: false,
                position: 'bottom',
                align: 'start',
            },
            tooltip: {
                enabled: false,
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
                anchor: 'end',
                align: 'end',
                formatter: function(value, context) {
                    total = context.chart._metasets[context.datasetIndex].total;
                    percentage = parseFloat((value).toFixed(2));
                    return percentage + '%';
                },
            }
        },
    },
    plugins: [ChartDataLabels]
});