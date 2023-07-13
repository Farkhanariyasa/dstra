const A1 = document.getElementById('chart-0');

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
            ["Infrastruktur", "dan", "Konektivitas"],
            ["Pemanfaatan TIK"],
            ["Sumber Daya Manusia"],
            ["Manajemen Organisasi"],
            ["Ketersediaan Prasarana TIK"],
            ["Motivasi Penggunaan TIK"],
        ],

        datasets: [{
            label: 'Persentase Unit Usaha Pariwisata',
            data: [
                1, 1, 1, 1, 1, 1,
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
                formatter: (val, ctx) => {
                // Grab the label for this value
                const label = ctx.chart.data.labels[ctx.dataIndex];

                // Format the number with 2 decimal places
                const formattedVal = Intl.NumberFormat('en-US', {
                    minimumFractionDigits: 2,
                }).format(val);

                // Put them together
                return wordWarp(`${label}`);
                },
                color: '#fff'
            }, 
        },
    },
    plugins: [ChartDataLabels, doughnutLabel]

});