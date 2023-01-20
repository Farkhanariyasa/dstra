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
                "#96a1c0",
                "#93889f",
                "#c27d90"
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
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

const pieChart = document.getElementById('pieChart');

pieChart.addEventListener('change', tampilData);

function tampilData(){
    // pieChart.value.split(',');
    // batang.data.datasets[0].data=pieChart.value.split(',');
    // batang.update();
    if (pieChart.value =='uu') {
        console.log(pieChart.value);
        pie.data.datasets[0].data = 
            [
                unitUsahaTIK.uu1,
                unitUsahaTIK.uu2,
                unitUsahaTIK.uu3,
                unitUsahaTIK.uu4,
            ];
            pie.data.labels = [
                ["Tidak memanfaatkan", "TIK sama sekali"],
                ["Sudah memanfaatkan, namun", "lebih banyak dilakukan", "secara konvensional"],
                ["Sebagian besar transaksi", "pembayaran yang disediakan", "sudah memanfaatkan TIK"],
                ["Semua transaksi pembayaran", "yang disediakan sudah", "memanfaatkan TIK"],    
            ];
            // console.log(batang.data.datasets[0].data)
            pie.options.plugins.title.text='Unit Usaha menyediakan transaksi pembayaran yang memanfaatkan TIK?';
            pie.update();

    } if (pieChart.value =='b401a') {
            console.log(pieChart.value);
            pie.data.datasets[0].data = 
            [   
                b401a.tidak,
                b401a.ya,
            ];
            pie.data.labels = [
                "Tidak",
                "Ya",
            ];
            // console.log(pie.data.datasets[0].data)
            
            pie.options.plugins.title.text='b401a';
            pie.update();
    } if (pieChart.value =='b407a'){
        console.log(pieChart.value);
        pie.data.datasets[0].data = 
            [   
                b407a.b407a1,
                b407a.b407a2,
                b407a.b407a3,
                b407a.b407a4,
            ];
            pie.data.labels = [
                'tidak memanfaatkan TIK sama sekali',
                'sudah memanfaatkan, namun lebih banyak menggunakan konvensional',
                'sebagian besar kegiatan sudah menggunakan TIK',
                'semua kegiatan menggunakan TIK',
            ];
            
            // console.log(doughnut.data.datasets[0].data)
            pie.options.plugins.title.text= 'b407a';
            pie.update();
    }
}