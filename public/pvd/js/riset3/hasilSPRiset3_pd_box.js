const boxplot_riset3 = document.getElementById('boxplot_chart');

new Chart(boxplot_riset3, {
    type: 'boxplot',
    data: {
        labels: [
            "Pendapatan (Rupiah)"
        ],
        datasets: [{
            label: 'Pendapatan',
            data: [pd_1],
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
            min: Math.min(pd_1),
            max: Math.max(pd_1),
            
        }
    }
});