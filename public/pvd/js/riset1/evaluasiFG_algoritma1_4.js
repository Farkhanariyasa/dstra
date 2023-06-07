const fg_algoritma1_4 = document.getElementById('fg_algoritma1_4');

const doughnutlabel = {
    id: 'doughnutlabel',
    beforeDatasetDraw: (chart, args, pluginOption) => {
        const {ctx, data } = chart;

        ctx.save();
        const xCoor = chart.getDatasetMeta(0).data[0].x;
        const yCoor = chart.getDatasetMeta(0).data[0].y;
        ctx.font = 'bold 30px Helvetica';
        ctx.fillStyle = '#516296';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText('90%', xCoor, yCoor);

    }
}

const pie_fg_algoritma1_4 = new Chart(fg_algoritma1_4, {
    type: 'doughnut',
    data: {
        labels: [
            ["Accuracy"],
            
        ],

        datasets: [{
            label: 'Accuracy',
            data: [
                90, 10
            ],
            borderwidth: 1,
            backgroundColor: [
                "#516296", "#C27D90"
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        radius: '100%',
        plugins: {
            title: {
                display: true,
                text : ['Accuracy (%)'],
                font: {
                    size: 16,
                    weight: 'bold',
                },
                color: "#493a5a"
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
    plugins: [doughnutlabel]
});