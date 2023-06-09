const VIZ_3 = document.getElementById('viz-3');
new Chart(VIZ_3, {
    type: 'bar',
    data: {
    labels: [
        ['Infrastruktur', 'dan', 'Konektivitas'],
        ['Penggunaan', 'TIK'],
        ['Sumber', 'Daya', 'Manusia'],
        ['Manajemen', 'Organisasi'],
        ['Ketersediaan', 'Prasarana', 'TIK'],
        ['Motivasi', 'Penggunaan', 'TIK']
    ],
    datasets: [{
        label: 'Nilai IKUPTIK',
        data: [
            makan.dimensi1,
            makan.dimensi2,
            makan.dimensi3,
            makan.dimensi4,
            makan.dimensi5,
            makan.dimensi6,
        ],
        borderWidth: 1,
        backgroundColor: [
            "#7382ab",
            "#b35c74",
            "#7382ab",
            "#7382ab",
            "#ffab00",
            "#7382ab"
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
                text : ['Nilai IKUPTIK Setiap Dimensi'],
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
                text : [['Pada Usaha Jasa Penyediaan Makanan dan Minuman di Kota Batu'],[''],['']],
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
