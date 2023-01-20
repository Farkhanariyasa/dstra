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
                "#4b395f"
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : "Sebaran Pendapatan Tenaga Kerja Pariwisata di Kabupaten Malang",
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