const barIkuptik1 = document.getElementById('bar-kota-batu-ikuptik');
new Chart(barIkuptik1, {
    type: 'bar',
    data: {
    labels: [['Dimensi 1'], ['Dimensi 2'],
        ['Dimensi 2'], ['Dimensi 4'],
        ['Dimensi 5'], ['Dimensi 6'],
    ],
    datasets: [{
        label: 'Jumlah Unit Usaha Pariwisata',
        data: [
            ikuptikPerDimensi.dimensi1,
            ikuptikPerDimensi.dimensi2,
            ikuptikPerDimensi.dimensi3,
            ikuptikPerDimensi.dimensi4,
            ikuptikPerDimensi.dimensi5,
            ikuptikPerDimensi.dimensi6,
        ],
        borderWidth: 1,
        backgroundColor: [
            "#ffab00", "#506396",
            "#4b395f", "#b35c74",
            "#ffbc33", "#7382ab",
            "#6f617f", "#c27d90"
        ],
    }]
    },
    options: {
        scales: {
            y: {
            beginAtZero: true
            }
        },
        maintainAspectRatio: false,
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : ['IKUPTIK di Kota Batu Berdasarkan Dimensi Penyusunnya'],
                font: {
                    size: 20
                }
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
