const riset1_hasil1 = document.getElementById('riset1_hasil1');

new Chart(riset1_hasil1, {
    type: 'doughnut',
    data: {
        labels: [
            hasil1.cities[0],
            hasil1.cities[1],
            hasil1.cities[2],
            hasil1.cities[3],
            hasil1.cities[4]
        ],

        datasets: [{
            label: 'Population',
            data: [
                hasil1.population[0],
                hasil1.population[1],
                hasil1.population[2],
                hasil1.population[3],
                hasil1.population[4]
                
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffab00",
                "#ffbc33",
                "#ffdd99",
                "#ffeecc",
                "#506396"
            ],
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text : 'Riset 1 Hasil 1',
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

