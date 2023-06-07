const A2 = document.getElementById('chart-7');

new Chart(A2, {
    type: 'doughnut',
    data: {
        labels: [
            ["Penyediaan Akomodasi"],
            ["Jasa Penyediaan Makanan dan Minuman"],
            ["Jasa Transportasi Wisata"]
        ],

        datasets: [{
            label: 'Persentase Unit Usaha Pariwisata',
            data: [
                pemanfaatanTikJenis.transportasi,
                pemanfaatanTikJenis.makanan,
                pemanfaatanTikJenis.akomodasi,
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffbc33",
                "#7382ab",
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
                title: {
                    display: false,
                    text : 'Dari 86 % UUP yang memanfaatkan TIK',
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
                },
                anchor: 'middle',
                align: 'middle',
            }
        },
    },
    plugins: [ChartDataLabels]
});