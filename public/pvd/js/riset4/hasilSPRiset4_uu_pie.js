const hasil1 = document.getElementById('hasil1');

const pie = new Chart(hasil1, {
    type: 'doughnut',
    data: {
        labels: [
            ["Tidak memanfaatkan", "TIK sama sekali"],
            ["Sudah memanfaatkan, namun", "lebih banyak dilakukan", "secara konvensional"],
            ["Sebagian besar transaksi", "pembayaran yang disediakan", "sudah memanfaatkan TIK"],
            ["Semua transaksi pembayaran", "yang disediakan sudah", "memanfaatkan TIK"],
        ],

        datasets: [{
            label: 'Unit Usaha',
            data: [
                unitUsahaTIK.uu1,
                unitUsahaTIK.uu2,
                unitUsahaTIK.uu3,
                unitUsahaTIK.uu4,
            ],
            borderwidth: 1,
            backgroundColor: [
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
                text : ['Unit Usaha menyediakan transaksi', 'pembayaran yang memanfaatkan TIK?'],
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
