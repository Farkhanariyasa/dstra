const A1 = document.getElementById('chart-6');

const doughnutLabel = {
    id: 'doughnutLabel',
    beforeDatasetDraw(chart, args, pluginOptions){
        const { ctx, data } = chart;
        ctx.save;
        const xCoor = chart.getDatasetMeta(0).data[0].x;
        const yCoor = chart.getDatasetMeta(0).data[0].y;
        ctx.font = 'bold 20px sans-serif';
        ctx.textAlign = 'center';
        ctx.textBaseLine = 'middle';
        ctx.fillText('IKUPTIK', xCoor, yCoor);

    }
}

new Chart(A1, {
    type: 'doughnut',
    data: {
        labels: [
            ["Tidak Memanfaatkan"],
            ["Memanfaatkan"]
        ],

        datasets: [{
            label: 'Persentase Unit Usaha Pariwisata',
            data: [
                pemanfaatanTik.tidak,
                pemanfaatanTik.ya,
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffab00",
                "#506396",
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
    plugins: [ChartDataLabels, doughnutLabel]
});