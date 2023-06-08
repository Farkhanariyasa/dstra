const pie = document.getElementById('chart-1');

new Chart(pie, {
    type: 'pie',
    data: {
        labels: [
            ['Infrastruktur', 'dan', 'Konektivitas'],
            ['Penggunaan', 'TIK'],
            ['Sumber', 'Daya', 'Manusia'],
            ['Manajemen', 'Organisasi'],
            ['Ketersediaan', 'Prasarana', 'TIK'],
            ['Motivasi', 'Penggunaan', 'TIK'],
        ],

        datasets: [{
            label: 'Dimensi',
            data: [
                1,1,1,1,1,1
            ],
            borderwidth: 1,
            backgroundColor: [
                "#ffdd99",
                "#96a1c0",
                "#ffdd99",
                "#96a1c0",
                "#ffdd99",
                "#96a1c0",
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: False,
                text : ['Dimensi Pada IKUPTIK'],
                font: {
                    size: 20
                }
            },
        },
    },
    plugins: [ChartDataLabels]
});