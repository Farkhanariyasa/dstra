const hasil2 = document.getElementById('hasil2');

new Chart(hasil2, {
    type: 'boxplot',
    data: {
        labels: [
            "Pendapatan (Rupiah)"
        ],
        datasets: [{
            label: 'Pendapatan',
            data: [pendapatan],
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
            min: Math.min(pendapatan),
            max: Math.max(pendapatan),
            
        }
    }
});