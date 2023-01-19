const ctx = document.getElementById('hasil5');
new Chart(ctx, {
    type: 'bar',
    data: {
    labels: ['tidak memanfaatkan TIK sama sekali',
            'sudah memanfaatkan, namun lebih banyak menggunakan konvensional',
            'sebagian besar kegiatan sudah menggunakan TIK',
            'semua kegiatan menggunakan TIK',
        ],
    datasets: [{
        label: 'Jumlah Unit Usaha',
        data: [
            b407a.b407a1,
            b407a.b407a2,
            b407a.b407a3,
            b407a.b407a4,
        ],
        borderWidth: 1,
        backgroundColor: [
            "#7382ab",
            "#ffbc33",
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
                text : ['b407a'],
                font: {
                    size: 20
                }
            },
            legend:{
                display: false,
                position: 'right',
            }
        },
    },
    plugins: [ChartDataLabels]
});
