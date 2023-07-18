const doughnut2 = document.getElementById('doughnut-kec-batu');

const doughnut_2 = new Chart(doughnut2, {
    type: 'doughnut',
    data: {
        labels: [ ["Jasa Transportasi Wisata"],
            ["Jasa Penyedia Makanan dan Minuman"],
            ["Penyedia Akomodasi"]
        ],

        datasets: [{
            label: 'Jumlah Unit Usaha Pariwisata',
            data: [
                uupKecBatu.transportasi,
                uupKecBatu.makan,
                uupKecBatu.akomodasi,
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
                text : ['Persentase Unit Usaha Pariwisata di Kecamatan Batu Berdasarkan Jenis Usahanya'],
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
