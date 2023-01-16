const riset1_hasil1 = document.getElementById('riset1_hasil1');

new Chart(riset1_hasil1, {
    type: 'doughnut',
    data: {
        labels: [
            'Jumlah Anggota 0',
            'Jumlah Anggota 1',
            'Jumlah Anggota 2',
            'Jumlah Anggota 3',
            'Jumlah Anggota 4',
            'Jumlah Anggota 5',
        ],

        datasets: [{
            label: 'Population',
            data: [
                jumlahanggota.ja0,
                jumlahanggota.ja1,
                jumlahanggota.ja2,
                jumlahanggota.ja3,
                jumlahanggota.ja4,
                jumlahanggota.ja5,
                
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffab00",
                "#ffbc33",
                "#ffdd99",
                "#ffeecc",
                "#506396",
                "#c27d90"
            ],
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text : 'Banyaknya Rumah Tangga berdasarkan Jumlah Anggota yang melakukan perjalanan',
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

