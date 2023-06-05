const A2 = document.getElementById('viz-2-3-A-2');

new Chart(A2, {
    type: 'doughnut',
    data: {
        labels: [
            ["Jasa Transportasi Wisata"],
            ["Jasa Penyediaan Makanan dan Minuman"],
            ["Penyediaan Akomodasi"],
        ],

        datasets: [{
            label: 'Persentase Unit Usaha Pariwisata',
            data: [
                uupStatusMemanfaatkanJenis.transportasi,
                uupStatusMemanfaatkanJenis.makan,
                uupStatusMemanfaatkanJenis.akomodasi,
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