const boxplot_chart = document.getElementById('boxplot_chart');

new Chart(boxplot_chart, {
    type: 'boxplot',
    data: {
        labels: [
            "Pendapatan (Rupiah)"
        ],
        datasets: [{
            label: 'Pendapatan',
            data:[datapendapatan_riset3],
            backgroundColor: [
                "#506396",
                "#ffeecc",
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : "Sebaran Pendapatan Usaha Selama Bulan Desember 2022 di Kota Batu",
                font: {
                    size: 20
                }
            },

        }
    },
    scales: {
        y: {
            type: 'linear',
            min: Math.min(datapendapatan_riset3),
            max: Math.max(datapendapatan_riset3),
            
        }
    }
});