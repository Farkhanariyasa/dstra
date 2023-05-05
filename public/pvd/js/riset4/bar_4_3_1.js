const bar1 = document.getElementById('bar_1');
new Chart(bar1, {
    type: 'bar',
    data: {
    labels: [['Dimensi1'],
            ['Dimensi2'],
            ['Dimensi3'],
            ['Dimensi4'],
            ['Dimensi5'],
            ['Dimensi6']
        ],
    datasets: [{
        label: 'Jumlah Unit Usaha',
        data: [
            b407a.b407a1,
            b407a.b407a2,
            b407a.b407a3,
            b407a.b407a4,
            10,
            10
        ],
        borderWidth: 1,
        backgroundColor: [
            "#ffab00",
            "#506396",
            "#4b395f",
            "#b35c74",
            "#ffbc33",
            "#7382ab",
            "#6f617f",
            "#c27d90"
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
                text : ['Nilai IKUPTIK Masing-masing Dimensi di Kecamatan Batu'],
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