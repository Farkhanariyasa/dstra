const VIZ_1 = document.getElementById('viz-1');
new Chart(VIZ_1, {
    type: 'bar',
    data: {
    labels: [
        ['Jasa','Transportasi','Wisata'],
        ['Jasa','Penyediaan Makanan','dan Minuman'],
        ['Penyediaan','Akomodasi'],
        ],
    datasets: [{
        label: 'Nilai IKUPTIK',
        data: [
            total.transportasi,
            total.makan,
            total.akomodasi,
        ],
        borderWidth: 1,
        backgroundColor: [
            "#506396",
            "#ffab00",
            "#b35c74",
        ],
        datalabels: {
            anchor: 'end', // Set the anchor to 'end' to position the labels at the top
            align: 'top', // Align the labels to the top
            color: 'black' // Set the color of the labels
        },
        borderRadius: 10,
    }]
    },
    options: {
        scales: {
            y: {
            beginAtZero: true,
            display: true,
            grid: {
                display: false // Set display to false to remove the y-axis grid lines
            },
            }
        },
        maintainAspectRatio: false,
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : ['Nilai IKUPTIK'],
                color: '#493A5A',
                font: {
                    family: 'Arial',
                    size: 20,
                    style: 'normal',
                    lineHeight: 1.2,
                },
                padding: {top: 0, left: 0, right: 0, bottom: 0},
                align: 'start',
            },
            subtitle: {
                display: true,
                text : [['Berdasarkan Jenis Usaha Pariwisata di Kota Batu'],[''],['']],
                color: '#493A5A',
                font: {
                    family: 'Arial',
                    size: 14,
                    style: 'normal',
                    lineHeight: 1.2,
                },
                padding: {top: 0, left: 0, right: 0, bottom: 0},
                align: 'start',
            },
            legend:{
                display: false,
                position: 'right',
            },
            tooltip: {
                callbacks: {
                    title: (context) => {
                        console.log(context[0].label);
                        return context[0].label.replaceAll(',',' ');
                    }
                }
            }
        },
    },
    plugins: [ChartDataLabels]
});
