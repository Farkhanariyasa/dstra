const hasil2 = document.getElementById('hasil2');

new Chart(hasil2, {
    type: 'boxplot',
    data: {
        labels: [
            "label"
        ],
        datasets: [{
            label: 'Pendapatan',
            data: [pendapatan],
            backgroundColor: [
                "#506396",
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text : "Boxplot Pendapatan",
                font: {
                    size: 20
                }
            },

        }
    }
});