const B2 = document.getElementById('chart-9');

new Chart(B2, {
    type: 'doughnut',
    data: {
        labels: [
            ["Kecil"],
            ["Mikro"],
        ],

        datasets: [{
            label: 'Persentase Unit Usaha Pariwisata',
            data: [
                pemanfaatanTikSkala.kecil,
                pemanfaatanTikSkala.mikro,
            ],
            borderwidth: 1,
            backgroundColor: [
                "#4b395f",
                "#c27d90",
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : ['Dari 799 UUP (86.38%) yang memanfaatkan TIK:'],
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
                },
                anchor: 'middle',
                align: 'middle',
            }
        },
    },
    plugins: [ChartDataLabels]
});