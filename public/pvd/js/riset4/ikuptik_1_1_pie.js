const pie = document.getElementById('chart-1');

new Chart(pie, {
    type: 'pie',
    data: {
        labels: [
            ['Infrastruktur dan Konektivitas'],
            ['Penggunaan TIK'],
            ['Sumber Daya Manusia'],
            ['Manajemen Organisasi'],
            ['Eksternal'],
            ['Kendala'],
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
        cutoutPercentage: 0,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: False,
                text : ['Dimensi Pada IKUPTIK'],
                font: {
                    size: 14
                }
            },
            legend:{
                display: false,
            }
        },
    },
    plugins: [ChartDataLabels]
});